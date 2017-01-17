<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Session;
use App\Post;

class PagesController extends Controller {

	public function getIndex(){
		$posts = Post::orderBy('created_at','desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout(){
		$first = "Martina";
		$last = "Hack";
		$fullname = $first." ".$last;
		$email = "dm151575@fhstp.ac.at";
		$data = [];

		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);
	}

	public function getContact(){
		return view('pages.contact');
	}

	public function postContact(Request $request){
		$this->validate($request,['email' =>'required|email',
			'subject' => 'min:3',
			'message' => 'min:10',]);

		$data = array(
			'email' => $request->email,
			'subject' => $request->subject,
			'bodyMessage' => $request->message
		);

		Mail::send('emails.contact',$data,function($message) use ($data){
			$message->from($data['email']);
			$message->to('mhack92.mh@gmail.com');
			$message->subject($data['subject']);
		});

		Session::flash('success','message sent');

		return redirect('/');
	}
}

?>