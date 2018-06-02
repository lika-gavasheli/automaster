<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use App\Service;
use App\Social;
use App\Slider;

use Mail;

class IndexController extends Controller
{
    //
	public function execute(Request $request){


		if ($request->isMethod('post')) {

			$messages= [


				'required'=>':attribute error message',
				'email'=>':attribute error message'
			];

			$this->validate($request,[
				'name'=>'required|max:255',
				'email'=>'required|email',
				'subject'=>'required|max:255',
				'text'=>'required'
			], $messages);

						
		}
		
		$mains=Main::all();
	
		$services=Service::all();
		$socials=Social::all();
		$sliders=Slider::all();

		
		$menu=array();
		
				$item=array('title'=>'Mains', 'alias'=>'main');
				array_push($menu,$item);
		
		$item=array('title'=>'Services', 'alias'=>'service');
		array_push($menu,$item);
		$item=array('title'=>'Socials', 'alias'=>'social');
		array_push($menu,$item);
		$item=array('title'=>'Sliders', 'alias'=>'slider');
		array_push($menu,$item);
		
		
		
		
		
		return view('site', array(
										'menu' =>$menu, 
									    'mains' =>$mains, 
										'services' =>$services, 
										'socials' =>$socials, 
										'sliders' =>$sliders, 
									 
									));
	}
}
