<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use App\Models\BookingModel;
use App\Models\PackageModel;
use App\Models\SiteVisitorModel;
use App\Models\TripModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Encryption\DecryptException;

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

    public function faqs()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'Frequently Asked Questions';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.pages.faq', $data );

        }else{
            abort(404);
        }
    }
    public function trekking()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'Trekking';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.pages.trekking', $data );

        }else{
            abort(404);
        }
    }

    public function culture_experience()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'Cultural Experience';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.pages.maasai-culture', $data );

        }else{
            abort(404);
        }
    }

    public function day_trip_tour()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'Day Trips in Northern Tanzania';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.pages.day-trip', $data );

        }else{
            abort(404);
        }
    }
    public function cultural_tour()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'Tanzania Cultural Tour';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.pages.Ol-doinyo-lengai', $data );

        }else{
            abort(404);
        }
    }
    
    public function _2_days_safari_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '2 Days Wildlife Safari in Tanzania';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.a-safari.2-days-safari', $data );

        }else{
            abort(404);
        }
    }
    public function _3_days_safari_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '3 Days Wildlife Safari in Tanzania';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.a-safari.3-days-safari', $data );

        }else{
            abort(404);
        }
    }
    public function _4_days_safari_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '4 Days Wildlife Safari in Tanzania';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.a-safari.4-days-safari', $data );

        }else{
            abort(404);
        }
    }
    public function _5_days_safari_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '5 Days Wildlife Safari in Tanzania';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.a-safari.5-days-safari', $data );

        }else{
            abort(404);
        }
    }
    public function _6_days_safari_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '6 Days Wildlife Safari in Tanzania';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.a-safari.6-days-safari', $data );

        }else{
            abort(404);
        }
    }
    public function _7_days_safari_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '7 Days Wildlife Safari in Tanzania';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.a-safari.7-days-safari', $data );

        }else{
            abort(404);
        }
    }
    public function _8_days_safari_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '8 Days Wildlife Safari in Tanzania';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.a-safari.8-days-safari', $data );

        }else{
            abort(404);
        }
    }
    public function _2_days_mikumi_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '2 Days Mikumi National Park';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.b-safari.2-days-mikumi', $data );

        }else{
            abort(404);
        }
    }
    public function _2_days_ruaha_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '2 Days Ruaha National Park';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.b-safari.2-days-ruaha', $data );

        }else{
            abort(404);
        }
    }
    public function _3_days_mikumi_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '3 Days Mikumi National Park';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.b-safari.3-days-mikumi', $data );

        }else{
            abort(404);
        }
    }
    public function _3_days_ruaha_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '3 Days Ruaha National Park';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.b-safari.3-days-ruaha', $data );

        }else{
            abort(404);
        }
    }
    public function _3_days_selous_game_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '3 Days Selous Game Reserve';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.b-safari.3-days-selous-game', $data );

        }else{
            abort(404);
        }
    }
    public function _3_days_udzungwa_mikumi_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '3 Days Udzungwa & Mikumi National Park';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.b-safari.3-days-udzungwa-mikumi', $data );

        }else{
            abort(404);
        }
    }
    public function _4_days_selous_mikumi_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '4 Days Selous & Mikumi National Park';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.b-safari.4-days-selous-mikumi', $data );

        }else{
            abort(404);
        }
    }
    public function _5_days_mikumi_ruaha_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '5 Days Mikumi & Ruaha National Park';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.b-safari.5-days-mikumi-ruaha', $data );

        }else{
            abort(404);
        }
    }
    public function _6_days_selous_mikumi_ruaha_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '6 Days Selous, Mikumi & Ruaha National Park';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.b-safari.6-days-selous-mikumi-ruaha', $data );

        }else{
            abort(404);
        }
    }
    public function _10_days_selous_mikumi_ruaha_udzungwa()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '10 Days Selous, Mikumi, Ruaha & Udzungwa National Park';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.b-safari.10-days-selous-mikumi-ruaha-udzungwa', $data );

        }else{
            abort(404);
        }
    }
    public function _14_days_ruaha_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '14 Days Ruaha National Park';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.b-safari.14-days-ruaha', $data );

        }else{
            abort(404);
        }
    }

    public function _9_days_safari_()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '9 Days Wildlife Safari in Tanzania';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.a-safari.9-days-safari', $data );

        }else{
            abort(404);
        }
    }
    public function mount_meru()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'Mount Meru';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.pages.mount-meru', $data );

        }else{
            abort(404);
        }
    }

    public function mount_kilimanjaro()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'Mount Kilimanjaro';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.pages.mount-kili', $data );

        }else{
            abort(404);
        }
    }

    public function arusha_national_park()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'Arusha National Park';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.pages.arusha-national-park', $data );

        }else{
            abort(404);
        }
    }

    public function serengeti_national_park()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'Serengeti National Park';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.pages.serengeti-national-park', $data );

        }else{
            abort(404);
        }
    }

    public function tarangire_national_park()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'Tarangire National Park';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.pages.tarangire-national-park', $data );

        }else{
            abort(404);
        }
    }

    public function ngorongoro_crater()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'Ngorongoro Crater';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.pages.ngorongoro-crater', $data );

        }else{
            abort(404);
        }
    }
    
    public function _3_days_mt_meru()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '3 Days Mount Meru Trek';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.trek.3-days-mt-meru', $data );

        }else{
            abort(404);
        }
    }

    public function _4_days_mt_meru()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '4 Days Mount Meru Trek';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.trek.4-days-mt-meru', $data );

        }else{
            abort(404);
        }
    }

    public function _5_days_marangu()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '5 Days Marangu Trek';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.trek.5-days-marangu', $data );

        }else{
            abort(404);
        }
    }

    public function _6_days_marangu()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '6 Days Marangu Trek';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.trek.6-days-marangu', $data );

        }else{
            abort(404);
        }
    }

    public function _5_days_umbwe()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '5 Days Umbwe Trek';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.trek.5-days-umbwe', $data );

        }else{
            abort(404);
        }
    }

    public function _6_days_umbwe()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '6 Days Umbwe Trek';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.trek.6-days-umbwe', $data );

        }else{
            abort(404);
        }
    }

    public function _6_days_machame()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '6 Days Machame Trek';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.trek.6-days-machame', $data );

        }else{
            abort(404);
        }
    }

    public function _7_days_machame()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '7 Ddays Machame Trek';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.trek.7-days-machame', $data );

        }else{
            abort(404);
        }
    }

    public function _6_days_rongai()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '6 Days Rongai Trek';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.trek.6-days-rongai', $data );

        }else{
            abort(404);
        }
    }

    public function _7_days_rongai()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '7 Days Rongai Trek';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.trek.7-days-rongai', $data );

        }else{
            abort(404);
        }
    }

    public function _7_days_lemosho()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '7 Days Lemosho Trek';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.trek.7-days-lemosho', $data );

        }else{
            abort(404);
        }
    }

    public function _8_days_lemosho()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '8 Days Lemosho Trek';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.trek.8-days-lemosho', $data );

        }else{
            abort(404);
        }
    }

    public function _8_days_northern_circuit()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '8 Days Northern Circuit Trek';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.trek.8-days-northern-circuit', $data );

        }else{
            abort(404);
        }
    }

    public function _9_days_northern_circuit()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = '9 Days Northern Circuit Trek';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.trek.9-days-northern-circuit', $data );

        }else{
            abort(404);
        }
    }

    public function best_time_safari()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'Best Time For Safari';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('frontend.pages.best-time-safari', $data );

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
        $page_title = 'Blog';

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

    public function book_trip()
    {
        $meta_title = 'Upzone Safaris';
        $page_title = 'Plan Your Trip Today';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            $data['data'] = PackageModel::getPackage();
            return view('frontend.pages.booking', $data );

        }else{
            abort(404);
        }

    }

    public function save_bookings(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'fullname' => 'required|string|max:255',
                'nationality' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'arrival_date' => 'required|date',
                'departure_date' => 'required|date|after_or_equal:arrival_date',
                'adults' => 'required|integer|min:1',
                'children' => 'required|integer|min:0',
                'accommodation' => 'required|string',
                'package_id' => 'required|integer',
                // 'cost' => 'required',
                'message' => 'nullable|string',
                'agree' => 'accepted',
            ]);

            $saveData = [
                'name' => $request->input('fullname'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'nationality' => $request->input('nationality'),
                'arrival_date' => $request->input('arrival_date'),
                'adults' => $request->input('adults'),
                'message' => $request->input('message'),
                'departure_date' => $request->input('departure_date'),
                'children' => $request->input('children'),
                'accommodation' => $request->input('accommodation'),
                'package_id' => $request->input('package_id'),
                // 'cost' => $request->input('cost'),
                'tokens' => rand(1,9999999999),
                'status' => 'pending',
                'archive' => 0,
                'updated_by' => 1,
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            DB::table('book_trip')->insertGetId($saveData);
            
            DB::commit();

            return response()->json(['success' => true, 'message' => 'Booking saved successfully!']);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json(['status' => 500, 'message' => 'Error: ' . $e->getMessage()]);
        }

    }
    public function save_contact(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'fullname' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'subject' => 'required|string',
                'message' => 'nullable|string',
            ]);

            $saveData = [
                'fullname' => $request->input('fullname'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
                'status' => 0,
                'archive' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            DB::table('contacts')->insertGetId($saveData);
            
            DB::commit();

            return response()->json(['success' => true, 'message' => 'Message sent successfully!']);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json(['status' => 500, 'message' => 'Error: ' . $e->getMessage()]);
        }

    }

    public function read_more_news($id)
    {
        try {
            $decryptId = Crypt::decrypt($id);
        } catch (DecryptException $e) {
            abort(404, 'Invalid Token');
        }

        $decryptId = Crypt::decrypt($id);

        $meta_title = 'Upzone Safaris';
        $page_title = 'Latest News';                  
        
        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            $data['blogs'] = BlogModel::getBlog();
            $data['token'] = BlogModel::findToken($decryptId);
            return view('frontend.pages.blog-read-more', $data );

        }else{
            abort(404);
        }
    }

    public function log_visit(Request $request)
    {
        $ipAddress = $request->ip();
        
        SiteVisitorModel::create([
            'ip_address' => $ipAddress,
            'visited_at' => now(),
        ]);

        return response()->json(['success' => true]);
    }

    public function count_visitor()
    {
        $data = SiteVisitorModel::distinct('ip_address')->count('ip_address');        
        return response()->json(['data' => $data]);
    }
    
}
