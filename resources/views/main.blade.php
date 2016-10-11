<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
  @include('partials._head')
  <body>
      @include('partials._nav')
      @yield('slider')
      @yield('breadcrumb')
      @yield('googlemaps')
      @yield('maininfo')
      @yield('packages')
      @yield('blog')
      @yield('clients')

      @include('partials._footer')
      @include('partials._scripts')
      @yield('paypal')
  </body>
</html>
