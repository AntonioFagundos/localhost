<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Provider;
use App\Provider_vendor;

class TestController extends Controller
{
    public function Main()
    {

    	$provider=new Provider();

    	return view('main', ['provider'=>$provider->all()]);

    }

    public function info($id)
    {
	    $provider = Provider::find($id)->vendor;

	    $vendor = Provider_vendor::find($id)->provider;

	    /*dd($provider);*/

	   echo($vendor->name_rus);

	    die();
    }
}
