@extends('main')
@section('title','Blog')

@section('breadcrumb')
  <section class="title">
          <div class="container">
              <div class="row-fluid">
                  <div class="span6">
                      <h1>DoDoWorld ブログ</h1>
                  </div>
                  <div class="span6">
                      <ul class="breadcrumb pull-right">
                          <li><a href="/">Home</a> <span class="divider">/</span></li>
                          <li class="active">DoDoWorld　ブログ</li>
                      </ul>
                  </div>
              </div>
          </div>
      </section>
@stop

@section('maininfo')
  <section id="about-us" class="container main">
    <div class="row-fluid">
        <div class="span8">
            <div class="blog">
                <div class="blog-item well">
                  @foreach($posts as $post)
                  <div class="media-body">
                          <h4 class="media-heading" style="color: #000;"><bold>{{$post->title}}</bold></h4>
                          <p class="text-center">{{ substr($post->body,0,500) }}{{ strlen($post->body) > 500 ? "..." : ""}}</p>
                          <a class="btn btn-medium btn-info" type="submit" href="{{url('blog/'.$post->slug)}}"> Read More | 続きを読む</a>
                          <hr/>
                  </div>
                @endforeach
              </div>
              <!-- End Blog Item -->
          <div class="gap">

          </div>
    </div>
</div>
<aside class="span4">
    <div class="widget search">
        <form>
            <input type="text" class="input-block-level" placeholder="Search">
        </form>
    </div>
    <!-- /.search -->

    <div class="widget ads">
        <div class="row-fluid">
            <div class="span6">
                <a href="#"><img src="img/safari/tent.jpg" alt=""></a>
            </div>

            <div class="span6">
                <a href="#"><img src="img/safari/zebra.jpg" alt=""></a>
            </div>
        </div>
        <p> </p>
        <div class="row-fluid">
            <div class="span6">
                <a href="#"><img src="img/safari/pug.jpg" alt=""></a>
            </div>

            <div class="span6">
                <a href="#"><img src="img/safari/zou.jpg" alt=""></a>
            </div>
        </div>
    </div>
    <!-- /.ads -->

    <div class="widget widget-popular">
        <h3>Popular Posts</h3>
        <div class="widget-blog-items">
            <div class="widget-blog-item media">
                <div class="media-body">
                  @foreach($posts as $post)
                    <a href="#"><h5>{{$post->title}}</h5></a>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Posts -->

</aside>
</div>

</section>
@stop
