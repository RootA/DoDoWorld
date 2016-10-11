@extends('main')
@section('title'," $post->title")

@section('breadcrumb')
  <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1><img src="img/hitorigoto/title.png" style="height: 50px"></h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="/">Home</a> <span class="divider">/</span></li>
                        <li><a href="">ブログ </a> <span class="divider">/</span></li>
                        <li class="active">{{$post->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@stop

<article>
  @section('maininfo')
    <section id="about-us" class="container">
        <div class="row-fluid">
            <div class="span8">
                <div class="blog">
                    <div class="blog-item well">
                        <a href="#"><h2>{{$post->title}}</h2></a>
                        <div class="blog-meta clearfix">
                            <p class="pull-left">
                              <i class="icon-user"></i> by <a href="#">{{$post->slug}}</a> | <i class="icon-folder-close"></i> Category <a href="#">Safari</a> | <i class="icon-calendar"></i> {{$post->updated_at}}
                          </p>
                          {{-- <p class="pull-right"><i class="icon-comment pull"></i> <a href="#comments">3 Comments</a></p> --}}
                      </div>
                      <p><img src="images/sample/blog1.jpg" width="100%" alt="" /></p>
                      <p>{{$post->body}}</p>

                    <p>&nbsp;</p>
                    <div id="disqus_thread"></div>
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
     */
    /*
    var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
        var d = document, s = d.createElement('script');

        s.src = '//https.disqus.com/embed.js';  // IMPORTANT: Replace EXAMPLE with your forum shortname!

        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                </div>
                <!-- End Blog Item -->

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
                    <div class="pull-left">
                        <div class="date">
                            <span class="month">{{$post->created_at}}</span>
                            <!-- <span class="day">24</span> -->
                        </div>
                    </div>
                    <div class="media-body">
                        <a href="#"><h5>{{$post->title}}</h5></a>
                    </div>
                </div>
        </aside>
    </div>

</section>
  @stop
</article>
