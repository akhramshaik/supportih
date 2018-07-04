<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
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
	   $voteCount = Support::count();
	   return view('support.home')->with('voteCount',$voteCount);
	}


	// public function encrchk(){
	//    $voteCount = Support::get();

	//    foreach ($voteCount as $key => $value) {
	//    	echo $this->dec_enc('decrypt', $value->userEmail) . "<br/>";
	//    	echo $this->dec_enc('decrypt', $value->userMobile) . "<br/>";
	//    }
	// }

	public function wesupport(){
		$location = GeoIP::getLocation( );
	    date_default_timezone_set("Asia/Kolkata");
		$arrayData = ['userIp' => $location['ip'], 'userCity' => $location['city'], 'userPincode' => $location['postal_code'], 'userState' => $location['state_name'], 'userCountry' => $location['country'], 'userTimestamp' => date("Y-M-d h:i:s A") ];
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


		// $validator = Validator::make($request->all(), [
		// 	'g-recaptcha-response' => 'required|recaptcha',
  //       ]);

  //       if ($validator->fails()) {
	 //        Session::flash('chk_msg', 'Warning! Something went wrong. Try again later.'); 
  //           return redirect(route('vote'))->withErrors($validator, 'chk_msg');
  //       }



		$location = GeoIP::getLocation( );
	    date_default_timezone_set("Asia/Kolkata");

	    if(is_null($request['message'])){
	    	$request['message'] = 'Message';
	    }

		$arrayData = ['userName' => $this->dec_enc('encrypt',$request['fullname']), 'userOccupation' => $this->dec_enc('encrypt',$request['occupation']), 'userEmail' => $this->dec_enc('encrypt', $request['emailid']), 'userMobile' => $this->dec_enc('encrypt',$request['phone']), 'userMsg' => $request['message'], 'userIp' => $location['ip'], 'userCity' => $location['city'],  'userPincode' => $location['postal_code'], 'userState' => $location['state_name'],'userCountry' => $location['country'], 'userTimestamp' => date("Y-M-d h:i:s A") ];
	    $findUser = Support::where('userEmail', $this->dec_enc('encrypt',$request['emailid']))->orWhere('userMobile', $this->dec_enc('encrypt',$request['phone']))->count();

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



	public function dec_enc($action, $string) {
	    $output = false;
	 
	    $encrypt_method = "AES-256-CBC";
	    $secret_key = '6Lc8QWIUAAAAAAPKV65OEp8eHNq2n';
	    $secret_iv = '6Lc8QPKV65OEp8eHNq2nybwMlN6Z6';
	 

	    $key = hash('sha256', $secret_key);
	    
	    $iv = substr(hash('sha256', $secret_iv), 0, 16);
	 
	    if( $action == 'encrypt' ) {
	        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
	        $output = base64_encode($output);
	    }
	    else if( $action == 'decrypt' ){
	        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
	    }
	 
	    return $output;
	}


}

