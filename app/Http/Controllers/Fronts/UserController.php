<?php

namespace App\Http\Controllers\Fronts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\PasswordReset;
use Mail;
use Carbon\Carbon;
use App\Users;
class UserController extends Controller
{
	public function sendMail(){
    	$username = 'hoangdh';
	    Mail::send('emails.mailExample', compact('username'), function($message) {
	        $message->to('hoangdhph04904@fpt.edu.vn', 'hoangdh');
	        $message->subject('E-Mail Example');
	    });
	    dd('Mail Send Successfully');
    }

    public function recoveryPw(){
    	return view('admin.user.forgotPassword');
    }
    public function mailRecoveryPw(Request $rq){
    	$email = $rq->email;
    	$resetPw = PasswordReset::where('email', $rq->email)->delete();
    	$user = Users::where('email', $email)->first();
    	if(!$user){
    		return 'done';
    	}
    	$token = str_random(30);
    	$now = Carbon::now();
    	$resetPw = new PasswordReset;
    	$resetPw->email = $rq->email;
    	$resetPw->token = $token;
    	$resetPw->created_at = $now;

    	$resetPw->save();
    	
    	$url = url('recovery-pwd/'.$token);
	    Mail::send('emails.recoverypw', compact('url','user'), function($message) use ($user){
	        $message->to($user->email, $user->name);
	        $message->subject('Recovery Password');
	    });
	    dd('Mail Send Successfully');
    }
    public function confirmRecovery($token){
    	$recoveryPw = PasswordReset::where('token', $token)->first();
		if(!$recoveryPw){
			return "error ! invalid token";
		}
		$thatDay = Carbon::createFromFormat('Y-m-d H:i:s', $recoveryPw->created_at);
		$now = Carbon::now();
		$dif = $now->diffInHours($thatDay);
		if($dif > 24){
			$recoveryPw->delete();
			return "error ! invalid token";
		}
		return view('auth.recovery-pwd', compact('token'));
    }
    public function resetpwd(Request $rq){
    	$recoveryPw = PasswordReset::where('token', $rq->token)->first();
		if(!$recoveryPw){
			return "error ! invalid token";
		}
		$thatDay = Carbon::createFromFormat('Y-m-d H:i:s', $recoveryPw->created_at);
		$now = Carbon::now();
		$dif = $now->diffInHours($thatDay);
		if($dif > 24){
			$recoveryPw->delete();
			return "error ! invalid token";
		}
		if($rq->password == $rq->repassword){
			$user = Users::where('email', $recoveryPw->email)->first();
			$user->password = Hash::make($rq->password);
			$user->save();
		}else{
			dd('Password do not math');
		}

		$user->save();
    }

    public function register(){
    	return view('admin.user.register');
    }

    public function saveRegister(Request $rq){
    	$token = str_random(30);
    	$model = new Users;
    	
    	$model->token = $token;
		$model->name = $rq->username;
		$model->email = $rq->email;
    	$userCheck = Users::where('email', $model->email)->orWhere('name', $model->name)->first();

    	if(!$userCheck){
    		if($rq->password == $rq->repassword){
    			$model->password = Hash::make($rq->password);
	    	}else{
	    		return view('register-account')->with('msg', 'Password value should be the same.');
	    	}
	    	$model->save();

	    	$user = Users::where('email', $model->email)->orWhere('name', $model->name)->first();
	    	$url = url('active-user/'.$token);
		    Mail::send('emails.active', compact('url','user'), function($message) use ($user){
		        $message->to($user->email, $user->name);
		        $message->subject('Active Account');
		    });
    	}else{
    		return view('admin.user.register')->with('msg', 'Username or Email already exists');
    	}
    	dd('done');
    }
    public function activeUser($token){
    	$checkToken = Users::where('token', $token)->first();
    	if(!$checkToken){
    		return "error ! invalid token";
    	}
    	$now = Carbon::now();
    	$dif = $now->diffInHours($checkToken->updated_at);
    	if($dif > 24){
    		$checkToken->token->delete();
    		return "error ! invalid token";
    	}
    	$checkToken->active = 900;
    	$checkToken->role = 100;
    	$checkToken->save();
    	return view('admin.user.active_done');
    }
    public function reSendMailActive(){
    	if(Auth::check()){
			$user = Users::where('email', Auth::user()->email)->first();
			$now = Carbon::now();
	    	$dif = $now->diffInHours($user->updated_at);
	    	if($dif > 24){
	    		$user->token->delete();
	    		return "error ! invalid token";
	    	}
			$token = str_random(30);
			$user->token = $token;
			$user->role = 100;
			$url = url('active-user/'.$token);
		    Mail::send('emails.active', compact('url','user'), function($message) use ($user){
		        $message->to($user->email, $user->name);
		        $message->subject('Active Account');
		    });
		   	$user->save();
		   	return view('auth.login')->with('success', 'Please check email activation account');

		}
		return 'faild';	
    }
}
