<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;

use DB;
use File;
use Carbon\Carbon;
use Session;
use Input;
use Validator;
use Redirect;
use DateTime;
use Config;
use Log;
use GeoIP;


class MainController extends Controller
{



public function wesupport(){

	// $location = GeoIP::getLocation( );
 //       return  $locationInfo  = [ 'userIp' => $location['ip'], 'userCountry' => $location['country'], 'userCity' => $location['city'], 'userState' => $location['state_name'], 'userPincode' => $location['postal_code'] ];
       



	return view('support.we-support');
}

public function about(){
	return view('support.about');
}

public function vote(){
	return view('support.vote');
}

public function faq(){
	return view('support.faq');
}

public function television(){
	return view('support.media');
}



}

