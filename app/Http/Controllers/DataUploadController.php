<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataUploadController extends Controller
{
    public function showUpload()
    {
    	return view('upload.dataupload');
    }

    public function store(Request $request)
    {
    	
    }


}
