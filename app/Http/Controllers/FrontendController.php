<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PackageModel;
use App\Models\TripModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class frontendController extends Controller
{
    public function index()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'Welcome';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            $data['data'] = PackageModel::getPackage();
            return view('frontend.index', $data );

        }else{
            abort(404);
        }
    }

    public function about()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'About';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.pages.about', $data );

        }else{
            abort(404);
        }
    }

    public function services()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'Services';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.pages.services', $data );

        }else{
            abort(404);
        }
    }

    public function contact()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = "Let's Talk";

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.pages.contact', $data );

        }else{
            abort(404);
        }
    }

    public function latest_news()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'Latest News';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.pages.blog', $data );

        }else{
            abort(404);
        }
    }

    public function terms_and_conditions()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'Terms & Conditions';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.pages.terms-and-conditions', $data );

        }else{
            abort(404);
        }
    }

    public function get_package(Request $request)
    {
        $package = PackageModel::findPackage($request->all());
        return response()->json($package);
    }

    public function save_trip(Request $request)
    {

        dd($request->all());
        try {
            DB::beginTransaction();
                
            $hidden_id = $request->input('hidden_id');
            $name = $request->input('name');
            $phone = $request->input('phone');
            $email = $request->input('email');
            $arrival_date = $request->input('arrival_date');
            $departure_date = $request->input('departure_date');
            $adults = $request->input('adults');
            $children = $request->input('children');
            $accommodation = $request->input('accommodation');
            $package_id = $request->input('package');
            $cost = $request->input('cost');

            // $validator = Validator::make($request->all(), [
            //     'name' => 'required|string|max:255',
            //     'phone' => 'required|string|max:20',
            //     'email' => 'required|email',
            //     'arrival_date' => 'required|date',
            //     'departure_date' => 'required|date',
            //     'adults' => 'required|integer|min:1',
            //     'children' => 'required|integer|min:0',
            //     'accommodation' => 'required|string',
            //     'package' => 'required|integer',
            //     'cost' => 'required|numeric',
            //     'agree' => 'required',
            // ]);

            // if ($validator->fails()) {
            //     return response()->json(['status' => 500, 'message' => 'Error occurred, Try Again failed',
            //         'errors' => $validator->errors()
            //     ]);
            // }

            $tripExists = TripModel::where('name', $name)
                ->where('phone', $phone)
                ->where('arrival_date', $arrival_date)
                ->where('departure_date', $departure_date)
                ->exists();

            if ($tripExists) {
                return response()->json(['status' => 500, 'message' => 'This trip has already been submitted.'
                ]);
            }

            $saveData = [
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'arrival_date' => $arrival_date,
                'departure_date' => $departure_date,
                'adults' => $adults,
                'children' => $children,
                'accommodation' => $accommodation,
                'package_id' => $package_id,
                'cost' => $cost,
                'archive' => 0,
                'updated_by' => Auth::user()->id,
                'created_by' => Auth::user()->id,
            ];

            DB::table('book_trip')->insertGetId($saveData);
            $message='Trip save successfully';
            DB::commit();

            return response()->json(['status' => 200, 'message' => $message]);
        } catch (\Exception $e) {
            DB::rollback();

            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }

    
}
