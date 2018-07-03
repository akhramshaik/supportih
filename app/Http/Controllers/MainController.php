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

use App\Support;
use App\Visit;


class MainController extends Controller
{






public function home(){
	return view('support.home');
}




public function wesupport(){


	$location = GeoIP::getLocation( );
    date_default_timezone_set("Asia/Kolkata");

	$arrayData = ['userIp' => $location['ip'],
	              'userCity' => $location['city'],
	              'userPincode' => $location['postal_code'],
	              'userState' => $location['state_name'],
	              'userCountry' => $location['country'],
	              'userTimestamp' => date("Y-M-d h:i:s A")
	          ];

	    $createVisit = Visit::create($arrayData);


	    $voteCount = Support::count();


	return view('support.we-support')->with('voteCount',$voteCount);
}

public function about(){
	$voteCount = Support::count();
	return view('support.about')->with('voteCount',$voteCount);
}

public function vote(){
	$voteCount = Support::count();
	return view('support.vote')->with('voteCount',$voteCount);
}

public function faq(){
	$voteCount = Support::count();
	return view('support.faq')->with('voteCount',$voteCount);
}

public function television(){
	$voteCount = Support::count();
	return view('support.media')->with('voteCount',$voteCount);
}


public function voteprocess(Request $request){
	$location = GeoIP::getLocation( );
    date_default_timezone_set("Asia/Kolkata");

    if(is_null($request['message'])){
    	$request['message'] = 'Message';
    }

	$arrayData = ['userName' => $request['fullname'],
	              'userOccupation' => $request['occupation'],
	              'userEmail' => $request['emailid'],
	              'userMobile' => $request['phone'],
	              'userMsg' => $request['message'],
	              'userIp' => $location['ip'],
	              'userCity' => $location['city'],
	              'userPincode' => $location['postal_code'],
	              'userState' => $location['state_name'],
	              'userCountry' => $location['country'],
	              'userTimestamp' => date("Y-M-d h:i:s A")
	          ];


	    $findUser = Support::where('userEmail',$request['emailid'])->orWhere('userMobile',$request['phone'])->count();

        if($findUser >= 1){
            Session::flash('user_voted', 'Thanks for your support.'); 
	        return redirect(route('vote'));  
        } 


	    $createVote = Support::create($arrayData);
        if($createVote){
            Session::flash('msg_ok', 'Thanks for your support.'); 
        } else{
            Session::flash('chk_msg', 'Warning! Something went wrong. Try again later.'); 
        }

        return redirect(route('vote'));  



}


// vote


}

