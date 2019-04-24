<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index (){
        $title ='';
        return view ('pages.index') ->with('title', $title);
    } 

    public function about (){
        $title ='Annual Procurement Plan';
        return view ('pages.about') ->with('title', $title);
    }
}
