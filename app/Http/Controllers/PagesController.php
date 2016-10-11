<?php
 namespace App\Http\Controllers;

 use App\Post;
 use Illuminate\Http\Request;

use App\Http\Requests;
 /**
  *
  */
 class PagesController extends Controller
 {

  public function getIndex(){
    $posts = Post::orderBy('created_at','desc')->limit(3)->get();
    return view("pages.welcome")->withPosts($posts);
  }

  public function getAbout(){
    return view('pages.about');
  }

  public function getContact(){
    return view("pages.contact");
  }

  public function getService(){
    return view('pages.service');
  }

  public function getTransport(){
    return view('pages.transport');
  }

  public function getSatsuei(){
    return view('pages.satsuei');
  }

  public function getHotspot(){
    return view('pages.hotspot');
  }

  public function getKoen(){
    return view('pages.koen');
  }

  public function getPark(){
    return view('pages.park');
  }

  public function getPackage(){
    return view('pages.package');
  }

  public function getBlog(){
    $posts = Post::orderBy('created_at','desc')->paginate(5);
    return view('pages.blog')->withPosts($posts);
  }

  public function getSingle($slug){
    $post = Post::where('slug','=',$slug)->first();
    return view('pages.single')->withPost($post);
  }

  public function getSwahili(){
    return view('pages.swahili');
  }

  public function getFaq(){
    return view('pages.faq');
  }

  public function getGallery(){
    return view('pages.gallery');
  }

  public function getProcess(){
    return view('pages.process');
  }

  public function getPost()
  {
    return view('pages.post');
  }

 }
