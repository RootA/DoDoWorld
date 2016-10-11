@extends('enmain')
@section('title','En Home')

@section('slider')
<!--Slider-->
<section id="slide-show">
 <div id="slider" class="sl-slider-wrapper">

    <!--Slider Items-->
    <div class="sl-slider">
        <!--Slider Item1-->
        <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
                <div class="container">
                    <img class="pull-right" src="img/slider/kmjaro.jpg" alt="" />
                    <h2></h2>
                    <h3 class="gap"></h3>
                    <!-- <a class="btn btn-large btn-transparent" href="#">Learn More</a> -->
                </div>
            </div>
        </div>
        <!--/Slider Item1-->

        <!--Slider Item2-->
        <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
                <div class="container">
                    <img class="pull-right" src="img/slider/jump.jpg" alt="" />
                    <h2></h2>
                    <h3 class="gap"></h3>
                    <!-- <a class="btn btn-large btn-transparent" href="#">Learn More</a> -->
                </div>
            </div>
        </div>
        <!--Slider Item2-->

        <!--Slider Item3-->
        <div class="sl-slide item3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
               <div class="container">
                <img class="pull-right" src="img/slider/pug.jpg" alt="" />
                <h2></h2>
                <h3 class="gap"></h3>
                <!-- <a class="btn btn-large btn-transparent" href="#">Learn More</a> -->
            </div>
        </div>
    </div>
    <!--Slider Item3-->
      <!--Slider Item4-->
        <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
                <div class="container">
                    <img class="pull-right" src="img/slider/masai.jpg" alt="" />
                    <h2></h2>
                    <h3 class="gap"></h3>
                    <!-- <a class="btn btn-large btn-transparent" href="#">Learn More</a> -->
                </div>
            </div>
        </div>
        <!--/Slider Item4-->

</div>
<!--/Slider Items-->

<!--Slider Next Prev button-->
<nav id="nav-arrows" class="nav-arrows">
    <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
    <span class="nav-arrow-next"><i class="icon-angle-right"></i></span>
</nav>
<!--/Slider Next Prev button-->

</div>
<!-- /slider-wrapper -->
</section>
<!--/Slider-->
@endsection

@section('maininfo')
  <section class="main-info" style="background-color:inherit;">
      <div class="container-fluid">
          <div class="row-fluid">
              <div class="span9">
                  <h4>Pictures From Safaris</h4>
                  <p class="no-margin">
              <div class="span12">
                  <div id="myCarousel" class="carousel slide clients">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                      <div class="active item">
                          <div class="row-fluid">
                              <ul class="thumbnails">
                                  <li class="span2"><a href="#"><img src="../img/safari/kirin.jpg"></a></li>
                                  <li class="span2"><a href="#"><img src="../img/safari/zou.jpg"></a></li>
                                  <li class="span2"><a href="#"><img src="../img/safari/maasai.jpg"></a></li>
                                  <li class="span2"><a href="#"><img src="../img/safari/tent.jpg"></a></li>
                                  <li class="span2"><a href="#"><img src="../img/safari/01_b.jpg"></a></li>
                                  <li class="span2"><a href="#"><img src="../img/safari/04_s.jpg"></a></li>
                              </ul>
                          </div>
                      </div>

                      <div class="item">
                          <div class="row-fluid">
                              <ul class="thumbnails">
                                  <li class="span3"><a href="#"><img src="../img/safari/tent.jpg"></a></li>
                                  <li class="span3"><a href="#"><img src="../img/safari/jump.jpg"></a></li>
                                  <li class="span3"><a href="#"><img src="../img/safari/maasai.jpg"></a></li>
                              </ul>
                          </div>
                      </div>

                      <div class="item">
                          <div class="row-fluid">
                              <ul class="thumbnails">
                                  <li class="span3"><a href="#"><img src="../img/safari/impala.jpg"></a></li>
                                  <li class="span3"><a href="#"><img src="../img/safari/01_b.jpg"></a></li>
                                  <li class="span3"><a href="#"><img src="../img/safari/04_s.jpg"></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <!-- /Carousel items -->

              </div>
          </div>
                  </p>
              </div>
          </div>
      </div>
  </section>
@endsection


@section('packages')
  <section id="recent-works">
      <div class="container">
          <div class="center">
              <h3>Safari Packages</h3>
              <p class="lead"></p>
          </div>
          <div class="gap"></div>
          <ul class="gallery col-4">
              <!--Item 1-->
              <li>
                  <div class="preview">
                      <img alt=" " src="../img/home/tours/slide_01.jpg">
                      <div class="overlay">
                      </div>
                      <div class="links">
                          <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                      </div>
                  </div>
                  <div class="desc">
                      <h5>Safari Package A</h5>
                  </div>
                  <div id="modal-1" class="modal hide fade">
                      <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                      <div class="modal-body" style="background-color: #6C7A89">
                          <img src="../img/home/tours/slide_01.jpg" alt=" " width="100%" style="max-height:400px">
                          <div class="panel panel-info">
                              <div class="panel-heading">7 Days/ 6 Nights Kenya Family Safari</div>
                                  <div class="panel-body">
                                      <p>7 Days/ 6 Nights Kenya Family Safari
                                        This safari combines the best family friendly hotels in Kenya, the hotels offer spacious or interconnecting rooms, children’s activity clubs in some hotels where the children can mix with other children and play games,
                                          different activities like swimming etc….
                                      </p>
                                      <button class="btn btn-block btn-primary" type="submit"><a href="package.php#paca" style="color: #000;">Learn More</a></a></button>
                                  </div>
                          </div>
                      </div>
                  </div>
              </li>
              <!--/Item 1-->

              <!--Item 2-->
              <li>
                  <div class="preview">
                      <img alt=" " src="../img/home/tours/slide_01.jpg">
                      <div class="overlay">
                      </div>
                      <div class="links">
                          <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                      </div>
                  </div>
                  <div class="desc">
                      <h5>Safari Package B</h5>
                  </div>
                  <div id="modal-1" class="modal hide fade">
                      <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                      <div class="modal-body"style="background-color: #6C7A89">
                          <img src="../img/home/tours/slide_02.jpg" alt=" " width="100%" style="max-height:400px">
                              <div class="panel panel-info">
                              <div class="panel-heading">4 Days- 3 Nights Masai Mara Game Reserve Safari</div>
                                  <div class="panel-body">
                                      <!-- <p>空路でらくらく・マサイマラ4日間
                                           （目次）移動に軽飛行機を利用した、マサイマラ国立保護区へ向かうサファリツアーです。マサイマラはケニアを代表する国立保護区で、見渡す限りの美しい大草原に、たくさんの野生動物が生息しています。
                                      </p> -->
                                      <button class="btn btn-block btn-primary" type="submit"><a href="package.php#pacb" style="color: #000;">Learn More</a></button>
                                  </div>
                          </div>
                      </div>
                  </div>
              </li>
              <!--/Item 2-->

              <!--Item 3-->
              <li>
                  <div class="preview">
                      <img alt=" " src="../img/home/tours/slide_02.jpg">
                      <div class="overlay">
                      </div>
                      <div class="links">
                          <a data-toggle="modal" href="#modal-3"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                      </div>
                  </div>
                  <div class="desc">
                      <h5>Safari Package C</h5>
                  </div>
                  <div id="modal-3" class="modal hide fade">
                      <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                      <div class="modal-body"style="background-color: #6C7A89">
                          <img src="../img/home/tours/slide_01.jpg" alt=" " width="100%" style="max-height:400px">
                          <div class="panel panel-info">
                              <div class="panel-heading">3 Days- 2 Nights Samburu Game Reserve Lodge Safari</div>
                                  <div class="panel-body">
                                      <!-- <p>赤道越えて・ケニア満喫7日間
                                         （目次）赤道直下のケニアを陸路にて北から南へ周遊するサファリツアーです。赤道北部に位置するサンブルでは、南部ケニアとは気候が異なるため、他公園では見られない独特の動物が生息します。北部と南部の違いをお楽しみ頂けます。
                                      </p> -->
                                      <button class="btn btn-block btn-primary" type="submit"><a href="package.php#pacc" style="color: #000;">Learn More</a></button>
                                  </div>
                          </div>
                      </div>
                  </div>
              </li>
              <!--/Item 3-->

              <!--Item 4-->
              <li>
                  <div class="preview">
                      <img alt=" " src="../img/home/tours/slide_03.jpg">
                      <div class="overlay">
                      </div>
                      <div class="links">
                          <a data-toggle="modal" href="#modal-4"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                      </div>
                  </div>
                  <div class="desc">
                      <h5>Safari Package D</h5>
                  </div>
                  <div id="modal-4" class="modal hide fade">
                      <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                      <div class="modal-body"style="background-color: #6C7A89">
                          <img src="../img/home/tours/slide_03.jpg" alt=" " width="100%" style="max-height:400px">
                          <div class="panel panel-info">
                              <div class="panel-heading">Tanzania Safaris</div>
                                  <div class="panel-body">
                                      <!-- <p>国境越えて・タンザニア8日間
                                         （目次）ケニア発着のタンザニアサファリツアーです。ナイロビから国境まで約3時間、あの有名なセレンゲティ国立公園とンゴロンゴロ・クレーターへのサファリです。
                                      </p> -->
                                      <button class="btn btn-block btn-primary" type="submit"><a href="package.php#pacd" style="color: #000;">Learn More</a></button>
                                  </div>
                          </div>
                      </div>
                  </div>
              </li>
              <!--/Item 4-->

          </ul>
      </div>

  </section>
@endsection

@section('blog')

@endsection

@section('clients')
<section id="clients" class="main" style="background-color: gray">
    <div class="container">
        <div class="row-fluid">
            <div class="span2">
                <div class="clearfix">
                    <h4 class="pull-left">Our Partners</h4>
                    <div class="pull-right">
                        <a class="prev" href="#myCarousel" data-slide="prev"><i class="icon-angle-left icon-large"></i></a> <a class="next" href="#myCarousel" data-slide="next"><i class="icon-angle-right icon-large"></i></a>
                    </div>
                </div>
            </div>
            <div class="span10">
                <div id="myCarousel" class="carousel slide clients">
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <div class="active item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="img/partners/iata.png"></a></li>
                                <li class="span3"><a href="#"><img src="img/partners/kata.png"></a></li>
                                <li class="span3"><a href="#"><img src="img/partners/kato.png"></a></li>
                                <li class="span3"><a href="#"><img src="img/partners/kws.png"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="img/partners/kws.png"></a></li>
                                <li class="span3"><a href="#"><img src="img/partners/kata.png"</a></li>
                                <li class="span3"><a href="#"><img src="img/partners/iata.png"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3"><a href="#"><img src="images/e1.jpg"></a></li>
                                <li class="span3"><a href="#"><img src="images/e2.jpg"></a></li>
                                <li class="span3"><a href="#"><img src="images/e3.jpg"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Carousel items -->

            </div>
        </div>
    </div>
</div>
</section>
@endsection
