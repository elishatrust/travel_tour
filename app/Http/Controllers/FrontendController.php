<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $meta_title = 'Travel & Tour';
        $page_title = 'Welcome';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('front.index', $data );

        }else{
            abort(404);
        }
    }

    public function about()
    {
        $meta_title = 'Travel & Tour';
        $page_title = 'About';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('front.pages.about', $data );

        }else{
            abort(404);
        }
    }

    public function services()
    {
        $meta_title = 'Travel & Tour';
        $page_title = 'Services';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('front.pages.services', $data );

        }else{
            abort(404);
        }
    }

    public function contact()
    {
        $meta_title = 'Travel & Tour';
        $page_title = 'Contact';

        if(!empty($meta_title && $page_title))
        {
            $data['meta_title'] = $meta_title;
            $data['page_title'] = $page_title;
            return view('front.pages.contact', $data );

        }else{
            abort(404);
        }
    }
}
