<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    //
    public function index(){
    	$data=[
		['bahasa'=>'PHP'],
		['bahasa'=>'Java'],
		['bahasa'=>'VB'],
		['bahasa'=>'JavaScript']
	];
	return view('belajar/pelajaran',compact('data'));
    }
}
