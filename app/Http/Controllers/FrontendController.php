<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    
}
