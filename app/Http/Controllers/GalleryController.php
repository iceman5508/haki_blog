<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryModel;

class GalleryController extends Controller
{

    /**
     * Show the Gallery page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //retrieve collection of "gallery"
        $galleries = GalleryModel::orderBy('created_at','asc')->get();

        $data['galleries'] = $galleries;
    	return view('public.pages.gallery',$data);
    }
}
