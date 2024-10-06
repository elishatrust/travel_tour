<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use App\Models\PackageModel;
use App\Models\TripModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
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
            $data['blogs'] = BlogModel::getBlog();
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
        try {
            DB::beginTransaction();

            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'email' => 'required|email',
                'arrival_date' => 'required|date',
                'departure_date' => 'required|date|after_or_equal:arrival_date',
                'adults' => 'required|integer|min:1',
                'children' => 'required|integer|min:0',
                'accommodation' => 'required|string',
                'package' => 'required|integer',
                'cost' => 'required|numeric',
                'agree' => 'required|in:on',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 500,
                    'message' => 'Validation errors occurred, please fix them',
                    'errors' => $validator->errors()
                ], 422);
            }

            $hidden_id = $request->input('hidden_id');

            $saveData = [
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'arrival_date' => $request->input('arrival_date'),
                'departure_date' => $request->input('departure_date'),
                'adults' => $request->input('adults'),
                'children' => $request->input('children'),
                'accommodation' => $request->input('accommodation'),
                'package_id' => $request->input('package'),
                'cost' => $request->input('cost'),
                'status' => 'pending',
                'archive' => 0,
                'updated_by' => Auth::user()->id,
                'created_by' => Auth::user()->id,
            ];

            ## If hidden_id exists, update the record
            if ($hidden_id) {               
                DB::table('book_trip')->where('id', $hidden_id)->update($saveData);
                $message = 'Trip updated successfully';
            } else {
                ## Otherwise, create a new record
                DB::table('book_trip')->insertGetId($saveData);
                $message = 'Your trip saved successfully';
            }

            DB::commit();
            
            return response()->json(['status' => 200, 'message' => $message]);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json(['status' => 500, 'message' => 'Error: ' . $e->getMessage()]);
        }
    }


    
}
