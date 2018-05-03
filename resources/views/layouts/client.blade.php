<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->

<html dir="ltr" lang="en">
<!--<![endif]-->


<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">

  <title>@yield('title')</title>
  <meta content="My Store" name="description">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <link href="{{ asset('games/images/catalog/bt_leather/Leather_Favicon.jpg')}}" rel="icon">
  <script src="{{ asset('games/javascript/jquery/jquery-2.1.1.min.js')}}" type="text/javascript">
  </script>
  <link href="{{ asset('games/javascript/bossthemes/bootstrap/css/bootstrap.min.css')}}" media="screen" rel="stylesheet">
  <script src="{{ asset('games/javascript/bossthemes/bootstrap/js/bootstrap.min.js')}}" type="text/javascript">
  </script>
  
  <link href="{{ asset('games/javascript/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('games/css/stylesheet.css')}}" rel="stylesheet">
  <link href="{{ asset('games/css/boss_megamenu.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('games/css/bt_stylesheet.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('games/css/responsive.css')}}" rel="stylesheet" type="text/css"><!--[if IE 9]>
  <link rel="stylesheet" type="text/css" href="{{ asset('games/css/ie9.css')}}" />
<![endif]-->
  <link href="{{ asset('games/css/cs.animate.css')}}" rel="stylesheet" type="text/css">
  
  <link href="{{ asset('games/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type=
  'text/css'>
  <link href="{{ asset('games/javascript/bossthemes/video/video.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('games/css/bossblog.css')}}" media="screen" rel="stylesheet" type="text/css">
  <link href="{{ asset('games/css/boss_revolutionslider/css/settings.css')}}" media="screen" rel="stylesheet" type="text/css">
  <script src="{{ asset('games/javascript/bossthemes/common.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/cs.bossthemes.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/carouFredSel-6.2.0.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/tabs.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/jquery.tools.min.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/jquery.revolution.min.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/jquery.appear.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/jquery.smoothscroll.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/jquery.DEPreLoad.js')}}" type="text/javascript">
  </script>
  <script src="{{ asset('games/javascript/bossthemes/bootstrap-select.js')}}" type="text/javascript">
  </script>
  <script type="text/javascript">
  $(document).ready(function() {
  "use strict";
    var loader = $("body").DEPreLoad({
        OnStep: function(percent) {
            $("#depreload .cs_perc").text(percent + "%");
        },
        OnComplete: function() {
            setTimeout(function(){
                $("#depreload").css('display','none');
            }, 200);
        }
    });
  });
  </script>
  <script type="text/javascript">
  $(window).scroll(function() {
  "use strict";
    var height_header = $('#bt_header').height();           
    if($(window).scrollTop() > height_header) {
        
        $('.bt-comb').addClass('bt-menu-fixed animated');
    } else {
        $('.bt-comb').removeClass('bt-menu-fixed animated');
    }
  });
  </script>
  
</head>

<body class="common-home bt-wide-boxed">
  <!-- Loader -->


  <div id="depreload" style="background-color:#ecf9fe;">
    <div class="cs_bigloader">
      <div class="cs_loader_line">
        <div class="loader_tophalf">
        </div>


        <div class="loader_inner">
        </div>


        <div class="loader_bottomhalf">
        </div>


        <div class="loader_button">
        </div>
      </div>


      <div class="cs_loader_logo"><img alt="Opencart Leather Store" class="logo" src="{{ asset('games/images/catalog/bt_leather/logo.png')}}" title=
      "Opencart Leather Store">
      </div>


      <div class="cs_perc">
      </div>
    </div>
  </div>


  <div class="bt-wide-boxed" id="bt_container">
    <div class="" id="bt_header">
      
      @include('layouts._share.client.top-header')
      @include('layouts._share.client.slideshow')

    </div>
    <!-- End #bt_header -->


    <div class="container">
      <div class="row">
        @include('layouts._share.client.aside')


        <div class="col-sm-9" id="content">
          <script src="{{ asset('games/javascript/bossthemes/cloud-zoom/cloud-zoom.1.0.3.js')}}" type="text/javascript">
          </script>

          @yield('content')
        </div>
      </div>
    </div>


    <div class="bt-newletter" style="background-image:url('{{asset('games/images/catalog/bt_leather/bg_parallax.jpg')}}')">
      <div class="footer-newletter">
        <div class="title">
          <h3>Sign up for newsletter</h3>


          <p>Subscribe to our newsletter to get all the latest news and exclusive offers</p>
        </div>


        <div>
          <div class="newletter-content">
            <div class="frm_subscribe">
              <form id="subscribe47" name="subscribe">
                <table>
                  <tr>
                    <td>
                      <div class="boss-newletter">
                        <input class="form-control input-new" id="subscribe_email" name="subscribe_email" placeholder=
                        "Put your email address here" size="50" type="text"> <a class="btn btn-new"><i class=
                        "fa fa-paper-plane"></i>Subscribe</a>
                      </div>
                    </td>
                  </tr>


                  <tr style="display:none;">
                    <td><input class="form-control input-new" id="subscribe_name" name="subscribe_name" size="50" type="text" value=
                    "Put your email address here">
                    </td>
                  </tr>


                  <tr>
                    <td id="subscribe_result47">
                    </td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    @include('layouts._share.client.footer')


    <div class="back_top" id="back_top" title="Back To Top">
      <span><i class="fa fa-angle-up"></i></span>
    </div>
    <script type="text/javascript">
        $(function(){
		"use strict";
            $(window).scroll(function(){
                if($(this).scrollTop()>600){
                  $('#back_top').fadeIn();
                }
                else{
                  $('#back_top').fadeOut();
                }
            });
            $("#back_top").on("click",function (e) {
                e.preventDefault();
                $('body,html').animate({scrollTop:0},800,'swing');
            });
        });
    </script> <!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//--> <!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->
  </div>
  <!-- End #bt_container -->
</body>
</html>