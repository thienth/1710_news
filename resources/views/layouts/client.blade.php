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

  <title>Opencart Leather Store</title>
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
    @include('layouts._share.client.top-header')


    <div class="container">
      <div class="row">
        <div class="col-sm-3 hidden-xs" id="column-left">
          <div class="box bt-category not-animated" data-animate="fadeInLeft" data-delay="200">
            <div class="box-heading">
              <h2>Categories</h2>
            </div>


            <div class="box-content">
              <div class="box-category" id="boss-category">
                <ul class="box-category">
                  <li>
                    <a class="list-group-item" href="pages/category.html">Nulla ut venenatis (0)</a>
                  </li>


                  <li>
                    <a class="list-group-item" href="pages/category.html">Cameras (3)</a>
                  </li>


                  <li>
                    <a class="list-group-item" href="pages/category.html">Scanners Levies (0)</a>
                  </li>


                  <li>
                    <a class="list-group-item" href="pages/category.html">New Arrival (21)</a>
                  </li>


                  <li>
                    <a class="list-group-item" href="pages/category.html">On Sales (10)</a>
                  </li>


                  <li>
                    <a class="list-group-item" href="pages/category.html">Bestselling (12)</a>
                  </li>


                  <li>
                    <a class="list-group-item" href="pages/category.html">Your Tab (13)</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>


          <div class="bt-featured box">
            <div class="box-heading">
              <h2>Featured</h2>
            </div>


            <div class="box-content">
              <div class="box-product">
                <div class="box_item">
                  <div class="image">
                    <a href="pages/product.html"><img alt="Morbi id accus antium doloremque" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_120x168.jpg')}}" title="Morbi id accus antium doloremque"></a>
                  </div>


                  <div class="prod-detail">
                    <div class="name">
                      <a href="pages/product.html">Morbi id accus antium doloremque</a>
                    </div>


                    <p class="price">$602.00 <span class="price-tax">Ex Tax: $500.00</span></p>
                  </div>


                  <div class="button-group">
                    <a href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to
                    Cart</span></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a> <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button class="sft_quickshop_icon" title=
                    "Quick View"><span class="qs_icon fa fa-search" style="font-style: italic"></span></button>
                  </div>
                </div>


                <div class="box_item">
                  <div class="image">
                    <a href="pages/product.html"><img alt="Dolorpelle accus antium" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_120x168.jpg')}}" title="Dolorpelle accus antium"></a>
                  </div>


                  <div class="prod-detail">
                    <div class="name">
                      <a href="pages/product.html">Dolorpelle accus antium</a>
                    </div>


                    <div class="rating">
                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                    </div>


                    <p class="price">$123.20 <span class="price-tax">Ex Tax: $101.00</span></p>
                  </div>


                  <div class="button-group">
                    <a href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to
                    Cart</span></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a> <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button class="sft_quickshop_icon" title=
                    "Quick View"><span class="qs_icon fa fa-search" style="font-style: italic"></span></button>
                  </div>
                </div>


                <div class="box_item">
                  <div class="image">
                    <a href="pages/product.html"><img alt="Suspendisse accus antium" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_120x168.jpg')}}" title="Suspendisse accus antium"></a>
                  </div>


                  <div class="prod-detail">
                    <div class="name">
                      <a href="pages/product.html">Suspendisse accus antium</a>
                    </div>


                    <div class="rating">
                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                    </div>


                    <p class="price"><span class="price-new">$110.00</span> <span class="price-old">$122.00</span> <span class=
                    "price-tax">Ex Tax: $90.00</span></p>
                  </div>


                  <div class="button-group">
                    <a href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to
                    Cart</span></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a> <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button class="sft_quickshop_icon" title=
                    "Quick View"><span class="qs_icon fa fa-search" style="font-style: italic"></span></button>
                  </div>
                </div>


                <div class="box_item">
                  <div class="image">
                    <a href="pages/product.html"><img alt="Vestibulum accus antium" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_120x168.jpg')}}" title="Vestibulum accus antium"></a>
                  </div>


                  <div class="prod-detail">
                    <div class="name">
                      <a href="pages/product.html">Vestibulum accus antium</a>
                    </div>


                    <div class="rating">
                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                    </div>


                    <p class="price"><span class="price-new">$98.00</span> <span class="price-old">$122.00</span> <span class=
                    "price-tax">Ex Tax: $80.00</span></p>
                  </div>


                  <div class="button-group">
                    <a href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to
                    Cart</span></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a> <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button class="sft_quickshop_icon" title=
                    "Quick View"><span class="qs_icon fa fa-search" style="font-style: italic"></span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="bt-staticblock-gamer box">
            <div class="box-content">
              <div class="block-items">
                <img alt="Icon" src="{{ asset('games/images/catalog/bt_leather/icon_1.png')}}" title="Icon"> <span class="title">gamer runy</span> <span class=
                "sub-title">Phasellus non lorem finibus lore</span>
              </div>


              <div class="block-items">
                <img alt="Icon" src="{{ asset('games/images/catalog/bt_leather/icon_2.png')}}" title="Icon"> <span class="title">police off</span> <span class=
                "sub-title">Lorem ipsum dolor sit amet egestas</span>
              </div>


              <div class="block-items">
                <img alt="Icon" src="{{ asset('games/images/catalog/bt_leather/icon_3.png')}}" title="Icon"> <span class="title">rocket man</span> <span class=
                "sub-title">Donec mattis eu metus eget venenatis</span>
              </div>


              <div class="block-items">
                <img alt="Icon" src="{{ asset('games/images/catalog/bt_leather/icon_4.png')}}" title="Icon"> <span class="title">super car</span> <span class=
                "sub-title">Integer et venenatis scelerisque</span>
              </div>
            </div>
          </div>


          <div class="bt-staticblock-progr-criter">
            <div class="block-items">
              <a href="#"><img alt="Icon" src="{{ asset('games/images/catalog/bt_leather/demo_281x379.jpg')}}" title="Icon"></a>

              <div class="bt-staticblock-info">
                <span class="title">dicated voice</span> <span class="sub-title">Progr</span>
              </div>
            </div>


            <div class="block-items">
              <a href="#"><img alt="Icon" src="{{ asset('games/images/catalog/bt_leather/demo_281x379.jpg')}}" title="Icon"></a>

              <div class="bt-staticblock-info">
                <span class="title">respect activi</span> <span class="sub-title">criter</span>
              </div>
            </div>
          </div>


          <div class="box boss-recent-post">
            <div class="box-heading">
              <h2>Blog Recent Post</h2>
            </div>


            <div class="box-content">
              <ol>
                <li class="item">
                  <div class="image">
                    <a href="pages/article.html"><img alt=" Donec adipiscing nisl" class="img-responsive" src="{{asset('games/images/catalog/bossblog/demo_80x80.jpg')}}"></a>
                  </div>


                  <div class="article-name">
                    <a class="article-title" href="pages/article.html">Donec adipiscing nisl</a>
                  </div>


                  <div class="time-stamp">
                    <i class="fa fa-calendar-o"></i> Jun 17, 2015 <span class="comment-count"><span><i class="fa fa-comments-o"></i>
                    1</span> <a href="pages/article.html">comment(s)</a></span>
                  </div>


                  <div class="item-content">
                    Nullam sapien metus, volutpat dictum. Praesent tel...
                  </div>
                </li>


                <li class="item">
                  <div class="image">
                    <a href="pages/article.html"><img alt="ultricies non placerat nec" class="img-responsive" src="{{asset('games/images/catalog/bossblog/demo_80x80.jpg')}}"></a>
                  </div>


                  <div class="article-name">
                    <a class="article-title" href="pages/article.html">ultricies non placerat nec</a>
                  </div>


                  <div class="time-stamp">
                    <i class="fa fa-calendar-o"></i> Jun 17, 2015 <span class="comment-count"><span><i class="fa fa-comments-o"></i>
                    0</span> <a href="pages/article.html">comment(s)</a></span>
                  </div>


                  <div class="item-content">
                    Duis porta varius libero nec rutrum Nulla facilisi...
                  </div>
                </li>


                <li class="item">
                  <div class="image">
                    <a href="pages/article.html"><img alt="Phasellus a congue est" class="img-responsive" src="{{asset('games/images/catalog/bossblog/demo_80x80.jpg')}}"></a>
                  </div>


                  <div class="article-name">
                    <a class="article-title" href="pages/article.html">Phasellus a congue est</a>
                  </div>


                  <div class="time-stamp">
                    <i class="fa fa-calendar-o"></i> Jun 17, 2015 <span class="comment-count"><span><i class="fa fa-comments-o"></i>
                    0</span> <a href="pages/article.html">comment(s)</a></span>
                  </div>


                  <div class="item-content">
                    Duis porta varius libero nec rutrum Nulla facilisi...
                  </div>
                </li>
              </ol>
            </div>
          </div>


          <div class="bt-video left-video" style="height:165px">
            <div class="bt_video_text not-animated" data-animate="flipInY" data-delay="200">
            </div>


            <div class="bt_video_banner bt-show" id="b_parallax" style="background-image:url({{asset('games/images/catalog/bt_leather/bg_video.jpg')}});">
            </div>
            <video class="video-js vjs-default-skin" controls="" data-setup="{}" id="bt_video" preload="auto"><source src="{{asset('games/images/catalog/bt_leather/home_session.mp4')}}" type="video/mp4"></video> 
            <script src="{{ asset('games/javascript/bossthemes/video/video.js')}}" type="text/javascript">
            </script>
          </div>
        </div>


        <div class="col-sm-9" id="content">
          <script src="{{ asset('games/javascript/bossthemes/cloud-zoom/cloud-zoom.1.0.3.js')}}" type="text/javascript">
          </script>

          <div class="bt-staticblock-relief">
            <a href="#"><img alt="banner" class="img-responsive" src="{{ asset('games/images/catalog/bt_leather/demo_880x456.jpg')}}"></a>

            <div class="bt-staticblock-title bt-title-1 not-animated" data-animate="bounceInUp" data-delay="500">
              <h2>relief social</h2>


              <h3>maintain employment economic security institutions</h3>


              <p>Time of extraordinary change institutions Nelson Mandela governance relief assessment</p>
            </div>
          </div>


          <div class="bt-featured-pro bt-nprolarge-nslider not-animated" data-animate="fadeInUp" data-delay="300">
            <div class="box-heading title">
              <h1>Sale Products</h1>
            </div>


            <div class="box-content bt-product-content">
              <div class="bt-items bt-product-grid">
                <div id="boss_featured_0">
                  <div class="bt-item-extra element-4">
                    <div class="product-thumb bt-item transition">
                      <div class="image">
                        <a href="pages/product.html"><img alt="Suspendisse accus antium" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_195x273.jpg')}}" title="Suspendisse accus antium"></a>

                        <div class="button-group bt-button-group hidden-xs">
                          <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>


                      <div class="small_detail">
                        <div class="caption">
                          <div class="name">
                            <a href="pages/product.html">Suspendisse accus antium</a>
                          </div>


                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star fa-stack-2x"></i></span>
                          </div>


                          <p class="description">Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ..</p>


                          <div class="percent">
                            <span>10%</span>
                          </div>


                          <p class="price"><span class="price-new">$110.00</span> <span class="price-old">$122.00</span></p>
                        </div>
                      </div>


                      <div class="button-group visible-xs">
                        <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                        <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                      </div>
                    </div>
                  </div>


                  <div class="bt-item-extra element-4">
                    <div class="product-thumb bt-item transition">
                      <div class="image">
                        <a href="pages/product.html"><img alt="Dolorpelle accus antium" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_195x273.jpg')}}" title="Dolorpelle accus antium"></a>

                        <div class="button-group bt-button-group hidden-xs">
                          <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>


                      <div class="small_detail">
                        <div class="caption">
                          <div class="name">
                            <a href="pages/product.html">Dolorpelle accus antium</a>
                          </div>


                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                          </div>


                          <p class="description">Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ..</p>


                          <p class="price">$123.20</p>
                        </div>
                      </div>


                      <div class="button-group visible-xs">
                        <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                        <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                      </div>
                    </div>
                  </div>


                  <div class="bt-item-extra element-4">
                    <div class="product-thumb bt-item transition">
                      <div class="image">
                        <a href="pages/product.html"><img alt="Assumenda accus antium" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_195x273.jpg')}}" title="Assumenda accus antium"></a>

                        <div class="button-group bt-button-group hidden-xs">
                          <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>


                      <div class="small_detail">
                        <div class="caption">
                          <div class="name">
                            <a href="pages/product.html">Assumenda accus antium</a>
                          </div>


                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star fa-stack-2x"></i></span>
                          </div>


                          <p class="description">Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ..</p>


                          <p class="price">$122.00</p>
                        </div>
                      </div>


                      <div class="button-group visible-xs">
                        <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                        <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                      </div>
                    </div>
                  </div>


                  <div class="bt-item-extra element-4">
                    <div class="product-thumb bt-item transition">
                      <div class="image">
                        <a href="pages/product.html"><img alt="Donec vitae accus antium" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_195x273.jpg')}}" title="Donec vitae accus antium"></a>

                        <div class="button-group bt-button-group hidden-xs">
                          <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>


                      <div class="small_detail">
                        <div class="caption">
                          <div class="name">
                            <a href="pages/product.html">Donec vitae accus antium</a>
                          </div>


                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                          </div>


                          <p class="description">Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ..</p>


                          <div class="percent">
                            <span>10%</span>
                          </div>


                          <p class="price"><span class="price-new">$110.00</span> <span class="price-old">$122.00</span></p>
                        </div>
                      </div>


                      <div class="button-group visible-xs">
                        <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                        <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                      </div>
                    </div>
                  </div>


                  <div class="bt-item-extra element-4">
                    <div class="product-thumb bt-item transition">
                      <div class="image">
                        <a href="pages/product.html"><img alt="Morbi id accus antium doloremque" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_195x273.jpg')}}" title="Morbi id accus antium doloremque"></a>

                        <div class="button-group bt-button-group hidden-xs">
                          <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>


                      <div class="small_detail">
                        <div class="caption">
                          <div class="name">
                            <a href="pages/product.html">Morbi id accus antium doloremque</a>
                          </div>


                          <p class="description">Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ..</p>


                          <p class="price">$602.00</p>
                        </div>
                      </div>


                      <div class="button-group visible-xs">
                        <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                        <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                      </div>
                    </div>
                  </div>


                  <div class="bt-item-extra element-4">
                    <div class="product-thumb bt-item transition">
                      <div class="image">
                        <a href="pages/product.html"><img alt="Sed sit accus antium doloremque" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_195x273.jpg')}}" title="Sed sit accus antium doloremque"></a>

                        <div class="button-group bt-button-group hidden-xs">
                          <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>


                      <div class="small_detail">
                        <div class="caption">
                          <div class="name">
                            <a href="pages/product.html">Sed sit accus antium doloremque</a>
                          </div>


                          <p class="description">Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ..</p>


                          <p class="price">$122.00</p>
                        </div>
                      </div>


                      <div class="button-group visible-xs">
                        <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                        <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                      </div>
                    </div>
                  </div>


                  <div class="bt-item-extra element-4">
                    <div class="product-thumb bt-item transition">
                      <div class="image">
                        <a href="pages/product.html"><img alt="Impedit Quo accus antium" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_195x273.jpg')}}" title="Impedit Quo accus antium"></a>

                        <div class="button-group bt-button-group hidden-xs">
                          <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>


                      <div class="small_detail">
                        <div class="caption">
                          <div class="name">
                            <a href="pages/product.html">Impedit Quo accus antium</a>
                          </div>


                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star fa-stack-2x"></i></span>
                          </div>


                          <p class="description">Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ..</p>


                          <p class="price">$122.00</p>
                        </div>
                      </div>


                      <div class="button-group visible-xs">
                        <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                        <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                      </div>
                    </div>
                  </div>


                  <div class="bt-item-extra element-4">
                    <div class="product-thumb bt-item transition">
                      <div class="image">
                        <a href="pages/product.html"><img alt="Vestibulum accus antium" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_195x273.jpg')}}" title="Vestibulum accus antium"></a>

                        <div class="button-group bt-button-group hidden-xs">
                          <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>


                      <div class="small_detail">
                        <div class="caption">
                          <div class="name">
                            <a href="pages/product.html">Vestibulum accus antium</a>
                          </div>


                          <div class="rating">
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                          </div>


                          <p class="description">Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ..</p>


                          <div class="percent">
                            <span>20%</span>
                          </div>


                          <p class="price"><span class="price-new">$98.00</span> <span class="price-old">$122.00</span></p>
                        </div>
                      </div>


                      <div class="button-group visible-xs">
                        <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                        <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="clearfix">
                </div>
              </div>
            </div>


            <div class="bt-viewall">
              <a class="view-all" href="pages/category.html">View All</a>
            </div>
          </div>


          <div class="bt-staticblock-relief">
            <div class="block block-left col-md-6 col-sm-6 col-xs-12">
              <a href="#"><img alt="banner" class="img-responsive" src="{{ asset('games/images/catalog/bt_leather/demo_430x190.jpg')}}"></a>

              <div class="bt-staticblock-title bt-title-1 not-animated" data-animate="bounceInUp" data-delay="500">
                <h2>donors raise</h2>


                <h3>criteria process detection equality</h3>
              </div>
            </div>


            <div class="block block-right col-md-6 col-sm-6 col-xs-12">
              <a href="#"><img alt="banner" class="img-responsive" src="{{ asset('games/images/catalog/bt_leather/demo_430x190.jpg')}}"></a>

              <div class="bt-staticblock-title bt-title-1 not-animated" data-animate="bounceInUp" data-delay="500">
                <h2>relief agenc</h2>


                <h3>billionaire philanthropy protect</h3>
              </div>
            </div>
          </div>


          <div class="bt-featured-pro bt-nprolarge-tabs not-animated" data-animate="fadeInUp" data-delay="300">
            <div class="box-heading title htabs" id="tabcontent0">
              <a class="" data-crs="00" href="#bt_procate_00">New Arrival</a> <a class="" data-crs="03" href="#bt_procate_03">Your
              Tab</a><a class="selected" data-crs="01" href="#bt_procate_01">On Sales</a> <a class="" data-crs="02" href=
              "#bt_procate_02">Bestselling</a>
            </div>


            <div class="box htabs-content boss-category-pro bt-nprolarge-nslider" id="bt_procate_00">
              <div class="box-content bt-product-content">
                <div class="bt-items bt-product-grid">
                  <div id="boss_procate_00">
                    <div class="bt-item-extra product-list">
                      <div class="product-thumb bt-item transition">
                        <div class="image">
                          <a href="pages/product.html"><img alt="Assumenda accus antium" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_160x224.jpg')}}"></a>
                        </div>


                        <div class="small_detail">
                          <div class="caption">
                            <div class="name">
                              <a href="pages/product.html">Assumenda accus antium</a>
                            </div>


                            <div class="rating">
                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star fa-stack-2x"></i></span>
                            </div>


                            <p class="price">$122.00</p>


                            <div class="des">
                              Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ultricies diam bibendum.
                              Aliquam nibh ligula, tinc..
                            </div>


                            <div class="button-group bt-button-group hidden-xs">
                              <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a> <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                            </div>
                          </div>
                        </div>


                        <div class="button-group visible-xs">
                          <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>
                    </div>


                    <div class="bt-item-extra product-list">
                      <div class="product-thumb bt-item transition">
                        <div class="image">
                          <a href="pages/product.html"><img alt="Dolorpelle accus antium" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_160x224.jpg')}}"></a>
                        </div>


                        <div class="small_detail">
                          <div class="caption">
                            <div class="name">
                              <a href="pages/product.html">Dolorpelle accus antium</a>
                            </div>


                            <div class="rating">
                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            </div>


                            <p class="price">$123.20</p>


                            <div class="des">
                              Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ultricies diam bibendum.
                              Aliquam nibh ligula, tinc..
                            </div>


                            <div class="button-group bt-button-group hidden-xs">
                              <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a> <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                            </div>
                          </div>
                        </div>


                        <div class="button-group visible-xs">
                          <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>
                    </div>


                    <div class="bt-item-extra product-list">
                      <div class="product-thumb bt-item transition">
                        <div class="image">
                          <a href="pages/product.html"><img alt="Donec est tricies" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_160x224.jpg')}}"></a>
                        </div>


                        <div class="small_detail">
                          <div class="caption">
                            <div class="name">
                              <a href="pages/product.html">Donec est tricies</a>
                            </div>


                            <p class="price">$122.00</p>


                            <div class="des">
                              Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ultricies diam bibendum.
                              Aliquam nibh ligula, tinc..
                            </div>


                            <div class="button-group bt-button-group hidden-xs">
                              <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a> <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                            </div>
                          </div>
                        </div>


                        <div class="button-group visible-xs">
                          <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="clearfix">
                  </div>
                </div>
              </div>
            </div>


            <div class="box htabs-content boss-category-pro bt-nprolarge-nslider" id="bt_procate_01">
              <div class="box-content bt-product-content">
                <div class="bt-items bt-product-grid">
                  <div id="boss_procate_01">
                    <div class="bt-item-extra product-list">
                      <div class="product-thumb bt-item transition">
                        <div class="image">
                          <a href="pages/product.html"><img alt="Assumenda accus antium" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_160x224.jpg')}}"></a>
                        </div>


                        <div class="small_detail">
                          <div class="caption">
                            <div class="name">
                              <a href="pages/product.html">Assumenda accus antium</a>
                            </div>


                            <div class="rating">
                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star fa-stack-2x"></i></span>
                            </div>


                            <p class="price">$122.00</p>


                            <div class="des">
                              Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ultricies diam bibendum.
                              Aliquam nibh ligula, tinc..
                            </div>


                            <div class="button-group bt-button-group hidden-xs">
                              <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a> <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                            </div>
                          </div>
                        </div>


                        <div class="button-group visible-xs">
                          <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>
                    </div>


                    <div class="bt-item-extra product-list">
                      <div class="product-thumb bt-item transition">
                        <div class="image">
                          <a href="pages/product.html"><img alt="Dolorpelle accus antium" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_160x224.jpg')}}"></a>
                        </div>


                        <div class="small_detail">
                          <div class="caption">
                            <div class="name">
                              <a href="pages/product.html">Dolorpelle accus antium</a>
                            </div>


                            <div class="rating">
                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            </div>


                            <p class="price">$123.20</p>


                            <div class="des">
                              Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ultricies diam bibendum.
                              Aliquam nibh ligula, tinc..
                            </div>


                            <div class="button-group bt-button-group hidden-xs">
                              <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a> <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                            </div>
                          </div>
                        </div>


                        <div class="button-group visible-xs">
                          <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>
                    </div>


                    <div class="bt-item-extra product-list">
                      <div class="product-thumb bt-item transition">
                        <div class="image">
                          <a href="pages/product.html"><img alt="Duis lacus tempor" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_160x224.jpg')}}"></a>
                        </div>


                        <div class="small_detail">
                          <div class="caption">
                            <div class="name">
                              <a href="pages/product.html">Duis lacus tempor</a>
                            </div>


                            <p class="price"><span class="price-new">$110.00</span> <span class="price-old">$123.20</span></p>


                            <div class="des">
                              Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ultricies diam bibendum.
                              Aliquam nibh ligula, tinc..
                            </div>


                            <div class="button-group bt-button-group hidden-xs">
                              <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a> <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                            </div>
                          </div>
                        </div>


                        <div class="button-group visible-xs">
                          <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="clearfix">
                  </div>
                </div>
              </div>
            </div>


            <div class="box htabs-content boss-category-pro bt-nprolarge-nslider" id="bt_procate_02">
              <div class="box-content bt-product-content">
                <div class="bt-items bt-product-grid">
                  <div id="boss_procate_02">
                    <div class="bt-item-extra product-list">
                      <div class="product-thumb bt-item transition">
                        <div class="image">
                          <a href="pages/product.html"><img alt="Assumenda accus antium" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_160x224.jpg')}}"></a>
                        </div>


                        <div class="small_detail">
                          <div class="caption">
                            <div class="name">
                              <a href="pages/product.html">Assumenda accus antium</a>
                            </div>


                            <div class="rating">
                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star fa-stack-2x"></i></span>
                            </div>


                            <p class="price">$122.00</p>


                            <div class="des">
                              Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ultricies diam bibendum.
                              Aliquam nibh ligula, tinc..
                            </div>


                            <div class="button-group bt-button-group hidden-xs">
                              <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a> <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                            </div>
                          </div>
                        </div>


                        <div class="button-group visible-xs">
                          <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>
                    </div>


                    <div class="bt-item-extra product-list">
                      <div class="product-thumb bt-item transition">
                        <div class="image">
                          <a href="pages/product.html"><img alt="Donec vitae accus antium" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_160x224.jpg')}}"></a>
                        </div>


                        <div class="small_detail">
                          <div class="caption">
                            <div class="name">
                              <a href="pages/product.html">Donec vitae accus antium</a>
                            </div>


                            <div class="rating">
                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            </div>


                            <p class="price"><span class="price-new">$110.00</span> <span class="price-old">$122.00</span></p>


                            <div class="des">
                              Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ultricies diam bibendum.
                              Aliquam nibh ligula, tinc..
                            </div>


                            <div class="button-group bt-button-group hidden-xs">
                              <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a> <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                            </div>
                          </div>
                        </div>


                        <div class="button-group visible-xs">
                          <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>
                    </div>


                    <div class="bt-item-extra product-list">
                      <div class="product-thumb bt-item transition">
                        <div class="image">
                          <a href="pages/product.html"><img alt="Duis lacus tempor" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_160x224.jpg')}}"></a>
                        </div>


                        <div class="small_detail">
                          <div class="caption">
                            <div class="name">
                              <a href="pages/product.html">Duis lacus tempor</a>
                            </div>


                            <p class="price"><span class="price-new">$110.00</span> <span class="price-old">$123.20</span></p>


                            <div class="des">
                              Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ultricies diam bibendum.
                              Aliquam nibh ligula, tinc..
                            </div>


                            <div class="button-group bt-button-group hidden-xs">
                              <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a> <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                            </div>
                          </div>
                        </div>


                        <div class="button-group visible-xs">
                          <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="clearfix">
                  </div>
                </div>
              </div>
            </div>


            <div class="box htabs-content boss-category-pro bt-nprolarge-nslider" id="bt_procate_03">
              <div class="box-content bt-product-content">
                <div class="bt-items bt-product-grid">
                  <div id="boss_procate_03">
                    <div class="bt-item-extra product-list">
                      <div class="product-thumb bt-item transition">
                        <div class="image">
                          <a href="pages/product.html"><img alt="Dolorpelle accus antium" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_160x224.jpg')}}"></a>
                        </div>


                        <div class="small_detail">
                          <div class="caption">
                            <div class="name">
                              <a href="pages/product.html">Dolorpelle accus antium</a>
                            </div>


                            <div class="rating">
                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            </div>


                            <p class="price">$123.20</p>


                            <div class="des">
                              Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ultricies diam bibendum.
                              Aliquam nibh ligula, tinc..
                            </div>


                            <div class="button-group bt-button-group hidden-xs">
                              <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a> <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                            </div>
                          </div>
                        </div>


                        <div class="button-group visible-xs">
                          <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>
                    </div>


                    <div class="bt-item-extra product-list">
                      <div class="product-thumb bt-item transition">
                        <div class="image">
                          <a href="pages/product.html"><img alt="Duis lacus tempor" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_160x224.jpg')}}"></a>
                        </div>


                        <div class="small_detail">
                          <div class="caption">
                            <div class="name">
                              <a href="pages/product.html">Duis lacus tempor</a>
                            </div>


                            <p class="price"><span class="price-new">$110.00</span> <span class="price-old">$123.20</span></p>


                            <div class="des">
                              Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ultricies diam bibendum.
                              Aliquam nibh ligula, tinc..
                            </div>


                            <div class="button-group bt-button-group hidden-xs">
                              <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a> <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                            </div>
                          </div>
                        </div>


                        <div class="button-group visible-xs">
                          <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>
                    </div>


                    <div class="bt-item-extra product-list">
                      <div class="product-thumb bt-item transition">
                        <div class="image">
                          <a href="pages/product.html"><img alt="Impedit Quo accus antium" class="img-responsive" src="{{asset('games/images/catalog/bt_product/demo_160x224.jpg')}}"></a>
                        </div>


                        <div class="small_detail">
                          <div class="caption">
                            <div class="name">
                              <a href="pages/product.html">Impedit Quo accus antium</a>
                            </div>


                            <div class="rating">
                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack fa-hidden"><i class="fa fa-star fa-stack-2x"></i></span>
                            </div>


                            <p class="price">$122.00</p>


                            <div class="des">
                              Paragraph text Nullam nec felis elit. Aliquam elementum tellus a turpis porta at ultricies diam bibendum.
                              Aliquam nibh ligula, tinc..
                            </div>


                            <div class="button-group bt-button-group hidden-xs">
                              <a href="pages/shoppingcart.html" class="btn-cart"><i class="fa fa-shopping-cart"></i></a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a> <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                            </div>
                          </div>
                        </div>


                        <div class="button-group visible-xs">
                          <a class="btn-cart" href="pages/shoppingcart.html"><i class="fa fa-shopping-cart"></i>Add to Cart</a> <a href="pages/wishlist.html" title="Add to Wish List" class="btn-wishlist"><i class="fa fa-heart"></i></a>
                          <a href="pages/compare.html" title="Compare this Product" class="btn-compare"><i class="fa fa-retweet"></i></a> <button title="Quick View" class="sft_quickshop_icon"><span class="qs_icon"><i class="fa fa-search"></i></span></button>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="clearfix">
                  </div>
                </div>
              </div>
            </div>
            <script type="text/javascript">
            <!--


            $('#tabcontent0 a').bttabs(0);

            //-->
            </script>
          </div>


          <div class="boss-blog-featured not-animated" data-animate="fadeInUp" data-delay="300">
            <div class="block-heading">
              <h1>From Our Blog</h1>
              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
            </div>


            <div class="block-content">
              <div class="main-article col-sm-5 col-xs-12">
                <div class="image">
                  <a href="pages/article.html"><img alt="Nisl cursus sollicitudin" class="img-responsive" src="{{asset('games/images/catalog/bossblog/demo_360x360.jpg')}}"></a>
                </div>


                <div class="article-name">
                  <a href="pages/article.html">Nisl cursus sollicitudin</a>
                </div>


                <div class="time-stamp">
                  <i class="fa fa-calendar-o"></i> <small class="time-date">Nov 14, 2012</small> <span class=
                  "comment-count"><span><i class="fa fa-comments-o"></i> 4</span> <a href="pages/article.html">Comment(s)</a></span>
                </div>


                <div class="description">
                  <p>Quisque porta felis est ut malesuada lorem dignissim quis ornare libero, ut tristique urna condimentum sit amet
                  Aliqua</p>
                </div>
              </div>


              <div class="box-article col-sm-7 col-xs-12">
                <div class="col-sm-12 col-xs-12">
                  <div class="article_content">
                    <div class="image">
                      <a href="pages/article.html"><img alt="Voluptatem accusantium" class="img-responsive" src="{{asset('games/images/catalog/bossblog/demo_130x130.jpg')}}"><span class="banner_cat_effect"></span></a>
                    </div>


                    <div class="article-detail">
                      <div class="article-name">
                        <a href="pages/article.html">Voluptatem accusantium</a>
                      </div>


                      <div class="time-stamp">
                        <i class="fa fa-calendar-o"></i> <small class="time-date">Nov 26, 2012</small> <span class=
                        "bt-comment-count"><i class="fa fa-comments-o"></i><a href="pages/article.html"><span>0</span>
                        Comment(s)</a></span>
                      </div>


                      <div class="description">
                        <p>Quisque porta felis est ut malesuada lorem dignissim quis ornare libero, ut tristique urna condimentum sit amet
                        Aliqua</p>
                      </div>


                      <div class="read_more">
                        <a class="btn-readmore" href="pages/article.html" title="">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-sm-12 col-xs-12">
                  <div class="article_content">
                    <div class="image">
                      <a href="pages/article.html"><img alt="Aliquam pulvinar porttitor" class="img-responsive" src="{{asset('games/images/catalog/bossblog/demo_130x130.jpg')}}"><span class="banner_cat_effect"></span></a>
                    </div>


                    <div class="article-detail">
                      <div class="article-name">
                        <a href="pages/article.html">Aliquam pulvinar porttitor</a>
                      </div>


                      <div class="time-stamp">
                        <i class="fa fa-calendar-o"></i> <small class="time-date">Nov 14, 2012</small> <span class=
                        "bt-comment-count"><i class="fa fa-comments-o"></i><a href="pages/article.html"><span>2</span>
                        Comment(s)</a></span>
                      </div>


                      <div class="description">
                        <p>Quisque porta felis est ut malesuada lorem dignissim quis ornare libero, ut tristique urna condimentum sit amet
                        Aliqua</p>
                      </div>


                      <div class="read_more">
                        <a class="btn-readmore" href="pages/article.html" title="">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-sm-12 col-xs-12">
                  <div class="article_content">
                    <div class="image">
                      <a href="pages/article.html"><img alt="Tellus volutpat bibendum" class="img-responsive" src="{{asset('games/images/catalog/bossblog/demo_130x130.jpg')}}"><span class="banner_cat_effect"></span></a>
                    </div>


                    <div class="article-detail">
                      <div class="article-name">
                        <a href="pages/article.html">Tellus volutpat bibendum</a>
                      </div>


                      <div class="time-stamp">
                        <i class="fa fa-calendar-o"></i> <small class="time-date">Nov 19, 2012</small> <span class=
                        "bt-comment-count"><i class="fa fa-comments-o"></i><a href="pages/article.html"><span>3</span>
                        Comment(s)</a></span>
                      </div>


                      <div class="description">
                        <p>Quisque porta felis est ut malesuada lorem dignissim quis ornare libero, ut tristique urna condimentum sit amet
                        Aliqua</p>
                      </div>


                      <div class="read_more">
                        <a class="btn-readmore" href="pages/article.html" title="">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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