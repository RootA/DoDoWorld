@extends('enmain')
@section('title','Transport')
@section('breadcrumb')
  <section class="title">
  <div class="container">
      <div class="row-fluid">
          <div class="span6">
              <h1>Our Transport System</h1>
          </div>
          <div class="span6">
              <ul class="breadcrumb pull-right">
                  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                  <li class="active">Transport</li>
              </ul>
          </div>
      </div>
  </div>
</section>
@stop

@section('maininfo')
<section>
  <!-- Page Content -->
<div class="container">

   <div class="row-fluid">
       <div class="span12">
           {{-- <h1 class="page-header text-center">『サファリ用・レジャー用・ビジネス用など、目的に応じた車をご用意致しております』</h1> --}}
       </div>

       <div class="span3 span4 span6 thumb">
           <a class="thumbnail" href="#">
               <img class="img-responsive" src="img/cars/noah.jpg" alt="">
           </a>
       </div>
       <div class="span3 span4 span6 thumb">
           <a class="thumbnail" href="#">
               <img class="img-responsive" src="img/cars/4w4.jpg" alt="">
           </a>
       </div>
       <div class="span3 span4 span6 thumb">
           <a class="thumbnail" href="#">
               <img class="img-responsive" src="img/cars/sedan.jpg" alt="">
           </a>
       </div>
       <div class="span3 span4 span6 thumb">
           <a class="thumbnail" href="#">
               <img class="img-responsive" src="img/cars/safari.jpg" alt="">
           </a>
       </div>
   </div>
   </div>

   <hr>
</section>
@stop
