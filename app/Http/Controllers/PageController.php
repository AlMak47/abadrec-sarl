<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use App\Banniere;

class PageController extends Controller
{
    //

    public function homeIndex() {
      $quiSommeNous = Pages::find("qui-sommes-nous");
      $slideShow = Banniere::all();
      return view('home-index')->with([
        "whoWeAre" =>  $quiSommeNous,
        "slideShow" =>  $slideShow
      ]);
    }

    public function getContactForm() {
      return view('contact-us');
    }

    public function aboutUs() {
      $quiSommeNous = Pages::find("qui-sommes-nous");
      return view('about-us')->with([
        'whoWeAre'  =>  $quiSommeNous
      ]);
    }

}
