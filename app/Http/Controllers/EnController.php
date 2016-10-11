<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EnController extends Controller
{
  public function getIndex(){
    return view('en.index');
  }
  public function getAbout(){
    return view('en.about');
  }

  public function getContact(){
    return view("en.contact");
  }

  public function getService(){
    return view('en.service');
  }

  public function getTransport(){
    return view('en.transport');
  }

  public function getSatsuei(){
    return view('en.satsuei');
  }

  public function getHotspot(){
    return view('en.hotspot');
  }

  public function getKoen(){
    return view('en.koen');
  }

  public function getPark(){
    return view('en.park');
  }

  public function getPackage(){
    return view('en.packages');
  }

  public function getBlog(){
    return view('en.blog');
  }

  public function getSwahili(){
    return view('pages.swahili');
  }

  public function getFaq(){
    return view('en.faq');
  }

  public function getGallery(){
    return view('en.gallery');
  }

  public function getProcess(){
    return view('en.process');
  }

  public function getPost()
  {
    return view('en.post');
  }
}
