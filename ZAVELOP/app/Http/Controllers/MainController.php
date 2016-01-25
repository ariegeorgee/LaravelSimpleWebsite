<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Main;
use App\Models\Fitur;
use App\Models\Blog;

class MainController extends Controller
{
    public function getIndex()
    {
    	$dataMenu= new Main();
    	$dataFitur= new Fitur();
    	$dataMenu= Main::all();
    	$dataFitur= Fitur::all();
    	return view('main.main',compact('dataMenu','dataFitur'));
    }
    public function getAbout()
    {
    	$dataMenu= new Main();
    	$dataMenu= Main::all();
    	return view('main.about',compact('dataMenu','dataFitur'));
    }
    public function getBlog()
    {
    	$dataMenu= new Main();
    	$dataBlog= new Blog();
    	$dataMenu= Main::all();
    	$dataBlog= Blog::all();
    	return view('main.blog',compact('dataMenu','dataFitur','dataBlog'));
    }
    public function getPortfolio()
    {
    	$dataMenu= new Main();
		$dataMenu= Main::all();
		return View('main.portfolio', compact('dataMenu'));
    }
    public function getContact()
    {
    	$dataMenu= new Main();
		$dataMenu= Main::all();
		return View('main.contact', compact('dataMenu'));
    }

}
