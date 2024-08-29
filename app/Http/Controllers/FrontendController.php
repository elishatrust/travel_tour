<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $meta_title = 'Travel & Tour';

        if(!empty($meta_title))
        {
            $data['meta_title'] = $meta_title;
            return view('front.index', $data );

        }else{
            abort(404);
        }
    }
}
