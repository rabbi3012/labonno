<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>www.kinbaysobai.com</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- owl carousel style -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{url('/frontend/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{url('/frontend/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('/frontend/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('/frontend/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{url('/frontend/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{url('/frontendcss/owl.theme.default.min.css')}}">
      
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   @notifyCss
   </head>
   <body>
      <!--header section start -->
      @include('frontend.fixed.header')
      <!--header section end -->
      <!--category section start -->
@yield('content')
<x:notify-messages />
      <!-- newsletter section end -->
      <!-- footer section start -->
      @include('frontend.fixed.footer')
      <!-- footer section end -->
      <!-- Javascript files-->
      <script src="{{url('/frontend/js/jquery.min.js')}}"></script>
      <script src="{{url('/frontend/js/popper.min.js')}}"></script>
      <script src="{{url('/frontend/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{url('/frontend/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{url('/frontend/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{url('/frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{url('/frontend/js/custom.js')}}"></script>
      <!-- javascript --> 
      <script src="{{url('/frontend/js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
      <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../../assets/js/vendor/popper.min.js"></script>
      <script src="../../dist/js/bootstrap.min.js"></script>
      @notifyJs

      <script>
    var obj = {};
    obj.cus_name = $('#customer_name').val();
    obj.cus_phone = $('#mobile').val();
    obj.cus_email = $('#email').val();
    obj.cus_addr1 = $('#address').val();
    obj.amount = $('#total_amount').val();
    let total = $('#total_amount').text();
    console.log(total)
    total = total.split("$")[1];
    $('#total_payment').val(total);
    $('#sslczPayBtn').prop('postdata', obj);
</script>

<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>
   </body>
</html>

