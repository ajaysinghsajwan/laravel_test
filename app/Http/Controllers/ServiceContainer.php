<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\containerService\payService;
class ServiceContainer extends Controller
{
    
	public function index(payService $pay){
		// dd($pay->pay());
		dd(app());
	}

}
