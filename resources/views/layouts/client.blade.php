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
  <!--
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
  //-->
  </script>
  <script type="text/javascript">
  <!--
  $(window).scroll(function() {
  "use strict";
    var height_header = $('#bt_header').height();           
    if($(window).scrollTop() > height_header) {
        
        $('.bt-comb').addClass('bt-menu-fixed animated');
    } else {
        $('.bt-comb').removeClass('bt-menu-fixed animated');
    }
  });
  //-->
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
      <div class="top-header">
        <nav id="top">
          <div class="container">
            <div class="row">
              <div class="bt-block-header pull-left col-sm-4 col-xs-12">
                Welcome visitor you can <a href="pages/login.html">login</a> or <a href="pages/register.html">create an account</a>
              </div>


              <div class="language-currency pull-right col-sm-8 col-xs-12">
                <div class="btn-group pull-right" id="cart">
                  <button class="btn btn-dropdown-cart dropdown-toggle pull-right" data-loading-text="Loading..." data-toggle="dropdown"
                  type="button"><i class="fa fa-shopping-cart"></i> <span id="cart-total">3 item(s) - $343.20</span></button>

                  <ul class="dropdown-menu pull-right">
                    <li>
                      <table class="table table-striped">
                        <tr>
                          <td class="text-center">
                            <div class="image">
                              <a href="pages/product.html"><img alt="Dolorpelle accus antium" class="img-thumbnail" src="{{asset('games/images/catalog/bt_product/demo_110x154.jpg')}}" title="Dolorpelle accus antium"></a>

                              <div class="remove">
                                <button class="btn-remove" title="Remove" type="button"><i class="fa fa-times"></i></button>
                              </div>
                            </div>
                          </td>

                          <td class="text-left">
                            <div class="name">
                              <a href="pages/product.html">Dolorpelle accus antium</a>
                            </div>


                            <div class="price">
                              1 x $123.20
                            </div>
                          </td>
                        </tr>


                        <tr>
                          <td class="text-center">
                            <div class="image">
                              <a href="pages/product.html"><img alt="Donec vitae accus antium" class="img-thumbnail" src="{{asset('games/images/catalog/bt_product/demo_110x154.jpg')}}" title="Donec vitae accus antium"></a>

                              <div class="remove">
                                <button class="btn-remove" title="Remove" type="button"><i class="fa fa-times"></i></button>
                              </div>
                            </div>
                          </td>

                          <td class="text-left">
                            <div class="name">
                              <a href="pages/product.html">Donec vitae accus antium</a>
                            </div>


                            <div class="price">
                              1 x $110.00
                            </div>
                          </td>
                        </tr>


                        <tr>
                          <td class="text-center">
                            <div class="image">
                              <a href="pages/product.html"><img alt="Duis lacus tempor" class="img-thumbnail" src="{{asset('games/images/catalog/bt_product/demo_110x154.jpg')}}" title="Duis lacus tempor"></a>

                              <div class="remove">
                                <button class="btn-remove" title="Remove" type="button"><i class="fa fa-times"></i></button>
                              </div>
                            </div>
                          </td>

                          <td class="text-left">
                            <div class="name">
                              <a href="pages/product.html">Duis lacus tempor</a>
                            </div>


                            <div class="price">
                              1 x $110.00
                            </div>
                          </td>
                        </tr>
                      </table>
                    </li>


                    <li class="last">
                      <div class="cart_bottom">
                        <table class="minicart_total">
                          <tr>
                            <td class="left">Sub-Total</td>

                            <td class="right">$281.00</td>
                          </tr>


                          <tr>
                            <td class="left">Eco Tax (-2.00)</td>

                            <td class="right">$6.00</td>
                          </tr>


                          <tr>
                            <td class="left">VAT (20%)</td>

                            <td class="right">$56.20</td>
                          </tr>


                          <tr>
                            <td class="left">Total</td>

                            <td class="right">$343.20</td>
                          </tr>
                        </table>


                        <p><a class="btn btn-default" href="pages/shoppingcart.html">View Cart</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-checkout"
                        href="pages/checkout.html">Checkout</a></p>
                      </div>
                    </li>
                  </ul>
                </div>


                <ul class="list-inline pull-right">
                  <li>
                    <a href="pages/login.html" title="Login"><i class="fa fa-user"></i></a>
                  </li>


                  <li>
                    <a title="Wish List (0)" id="wishlist-total" href="pages/wishlist.html"><i class="fa fa-heart"></i></a>
                  </li>
                </ul>


                <div class="cur-lang">
                  <div class="pull-right">
                    <form id="currency" name="currency">
                      <div class="btn-group">
                        <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">USD <i class="fa fa-caret-down"></i></button>

                        <ul class="dropdown-menu">
                          <li><button class="currency-select btn btn-link btn-block" name="EUR" type="button"><span class=
                          "text-left">Euro</span> <span class="text-right">€</span></button>
                          </li>


                          <li><button class="currency-select btn btn-link btn-block" name="GBP" type="button"><span class="text-left">Pound
                          Sterling</span> <span class="text-right">£</span></button>
                          </li>


                          <li><button class="currency-select btn btn-link btn-block" name="USD" type="button"><span class="text-left">US
                          Dollar</span> <span class="text-right">$</span></button>
                          </li>
                        </ul>
                      </div>
                      <input name="code" type="hidden" value=""> <input name="redirect" type="hidden" value="index.html">
                    </form>
                  </div>


                  <div class="pull-right">
                    <form id="language" name="language">
                      <div class="btn-group">
                        <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">English <i class=
                        "fa fa-caret-down"></i></button>

                        <ul class="dropdown-menu">
                          <li>
                            <a href="en"><span class="text-left">English</span> <span class="text-right"><img alt="English" src="{{asset('games/images/flags/gb.png')}}" title="English"></span></a>
                          </li>


                          <li>
                            <a href="de"><span class="text-left">Deutsch</span> <span class="text-right"><img alt="Deutsch" src="{{asset('games/images/flags/de.png')}}" title="Deutsch"></span></a>
                          </li>
                        </ul>
                      </div>
                      <input name="code" type="hidden" value=""> <input name="redirect" type="hidden" value="index.html">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <header>
            <div class="container">
              <div class="row">
                <div class="pull-left">
                  <div class="logo" id="logo">
                    <a href="index.html"><img alt="Opencart Leather Store" class="img-responsive" src="{{ asset('games/images/catalog/bt_leather/logo.png')}}"
                    title="Opencart Leather Store"></a>
                  </div>
                </div>


                <div class="list-links pull-right">
                  <div class="bt-menu-logo">
                    <ul>
                      <li>
                        <a href="index.html" title="Shop">Shop</a>
                      </li>


                      <li>
                        <a href="pages/bossblog.html" title="Blog">Blog</a>
                      </li>


                      <li>
                        <a href="pages/aboutus.html" title="About">About</a>
                      </li>


                      <li>
                        <a href="index.html" title="Lookbook">Lookbook</a>
                      </li>
                    </ul>
                  </div>
                </div>


                <div class="pull-right bt-search">
                  <div class="input-group pull-right" id="search">
                    <input class="form-control input-lg" name="search" placeholder="Search" type="text" value=""> <a href="pages/search.html" class="btn btn-search" title="search"><i class="fa fa-search"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </header>
        </nav>


        <div class="container">
          <div class="row">
            <div class="bt-content-menu">
            </div>
          </div>
        </div>


        <div class="bt-comb fadeInDown">
          <div class="container">
            <div class="row">
              <div id="bt_mainmenu">
                <a class="open-panel"><i class="fa fa-bars"></i></a>

                <nav class="mega-menu">
                  <a class="close-panel"><i class="fa fa-times-circle"></i></a>

                  <ul class="nav nav-pills">
                    <li class="parent">
                      <p class="plus visible-xs">+</p>
                      <a href="index.html">Home</a>

                      <div class="dropdown drop-grid-6-5">
                        <div class="menu-row row-col-5" style="">
                          <div class="menu-column row-grid-1">
                            <!-- html-->


                            <div class="staticblock">
                              <div class="bt-store">
                                <div class="bt-image">
                                  <a href="http://demo.bossthemes.com/html/leather/" title="Leathertica Store"><img alt="Leathertica Store"
                                  src="{{ asset('games/images/catalog/bt_leather/leather.png')}}"></a>
                                </div>
                                <a href="http://demo.bossthemes.com/html/leather/" title="Leathertica Store">Leathertica Store</a>
                              </div>
                            </div>
                          </div>


                          <div class="menu-column row-grid-1">
                            <!-- html-->


                            <div class="staticblock">
                              <div class="bt-store">
                                <div class="bt-image">
                                  <a href="http://demo.bossthemes.com/html/leather2/" title="Scrollpage Store"><img alt="Scrollpage Store"
                                  src="{{ asset('games/images/catalog/bt_leather/leather2.png')}}"></a>
                                </div>
                                <a href="http://demo.bossthemes.com/html/leather2/" title="Leathertica Store">Scrollpage Store</a>
                              </div>
                            </div>
                          </div>


                          <div class="menu-column row-grid-1">
                            <!-- html-->


                            <div class="staticblock">
                              <div class="bt-store">
                                <div class="bt-image">
                                  <a href="http://demo.bossthemes.com/html/leather_accessories/" title="Accessories Store"><img alt=
                                  "Decortica Store" src="{{ asset('games/images/catalog/bt_leather/accessories.jpg')}}"></a>
                                </div>
                                <a href="http://demo.bossthemes.com/html/leather_accessories/" title="Decortica Store">Accessories
                                Store</a>
                              </div>
                            </div>
                          </div>


                          <div class="menu-column row-grid-1">
                            <!-- html-->


                            <div class="staticblock">
                              <div class="bt-store">
                                <div class="bt-image">
                                  <a href="http://demo.bossthemes.com/html/leather_baby/" title="Baby Store"><img alt="Baby Store" src="{{asset('games/images/catalog/bt_leather/baby.jpg')}}"></a>
                                </div>
                                <a href="http://demo.bossthemes.com/html/leather_baby/" title="Modatica Store">Baby Store</a>
                              </div>
                            </div>
                          </div>


                          <div class="menu-column row-grid-1">
                            <!-- html-->


                            <div class="staticblock">
                              <div class="bt-store">
                                <div class="bt-image">
                                  <a href="http://demo.bossthemes.com/html/leather_decortica/" title="Decortica Store"><img alt=
                                  "Decortica Store" src="{{ asset('games/images/catalog/bt_leather/decortica.jpg')}}"></a>
                                </div>
                                <a href="http://demo.bossthemes.com/html/leather_decortica/" title="Decortica Store">Decortica Store</a>
                              </div>
                            </div>
                          </div>
                        </div>


                        <div class="menu-row row-col-5" style="">
                          <div class="menu-column row-grid-1">
                            <!-- html-->


                            <div class="staticblock">
                              <div class="bt-store">
                                <div class="bt-image">
                                  <a href="http://demo.bossthemes.com/html/leather_drug/" title="Drug Store"><img alt="Drug Store" src="{{asset('games/images/catalog/bt_leather/drug.jpg')}}"></a>
                                </div>
                                <a href="http://demo.bossthemes.com/html/leather_drug/" title="Leathertica Store">Drug Store</a>
                              </div>
                            </div>
                          </div>


                          <div class="menu-column row-grid-1">
                            <!-- html-->


                            <div class="staticblock">
                              <div class="bt-store">
                                <div class="bt-image">
                                  <a href="http://demo.bossthemes.com/html/leather_eye/" title="Eye Store"><img alt="Eye Store" src="{{asset('games/images/catalog/bt_leather/eye.jpg')}}"></a>
                                </div>
                                <a href="http://demo.bossthemes.com/html/leather_eye/" title="Leathertica Store">Eye Store</a>
                              </div>
                            </div>
                          </div>


                          <div class="menu-column row-grid-1">
                            <!-- html-->


                            <div class="staticblock">
                              <div class="bt-store">
                                <div class="bt-image">
                                  <a href="http://demo.bossthemes.com/html/leather_game/" title="Game Store"><img alt="Game Store" src="{{asset('games/images/catalog/bt_leather/game.jpg')}}"></a>
                                </div>
                                <a href="http://demo.bossthemes.com/html/leather_game/" title="Leathertica Store">Game Store</a>
                              </div>
                            </div>
                          </div>


                          <div class="menu-column row-grid-1">
                            <!-- html-->


                            <div class="staticblock">
                              <div class="bt-store">
                                <div class="bt-image">
                                  <a href="http://demo.bossthemes.com/html/leather_modatica/" title="Modatica Store"><img alt=
                                  "Modatica Store" src="{{ asset('games/images/catalog/bt_leather/modatica.jpg')}}"></a>
                                </div>
                                <a href="http://demo.bossthemes.com/html/leather_modatica/" title="Leathertica Store">Modatica Store</a>
                              </div>
                            </div>
                          </div>


                          <div class="menu-column row-grid-1">
                            <!-- html-->


                            <div class="staticblock">
                              <div class="bt-store">
                                <div class="bt-image">
                                  <a href="http://demo.bossthemes.com/html/leather_digistore/" title="Digistore"><img alt="Digistore" src="{{asset('games/images/catalog/bt_leather/digistore.jpg')}}"></a>
                                </div>
                                <a href="http://demo.bossthemes.com/html/leather_digistore/" title="Digistore">Digistore</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>


                    <li class="parent">
                      <p class="plus visible-xs">+</p>
                      <a href="pages/category.html">Shop</a>

                      <div class="dropdown drop-grid-6-6">
                        <div class="menu-row row-col-6" style=" background-image: url({{asset('games/images/catalog/bt_leather/bgr-menu2.jpg')}})">
                          <div class="menu-column row-grid-1">
                            <!-- html-->


                            <div class="staticblock">
                              <div class="bt-shop-demo">
                                <h3>Demo Shopping</h3>


                                <ul>
                                  <li>
                                    <a href="pages/category.html" title="Category full width">Category full width</a>
                                  </li>


                                  <li>
                                    <a href="pages/category.html" title="Category left sidebar">Category left sidebar</a>
                                  </li>


                                  <li>
                                    <a href="pages/category.html" title="Category right sidebar">Category right sidebar</a>
                                  </li>


                                  <li>
                                    <a href="pages/product.html" title="Product full width">Product full width</a>
                                  </li>


                                  <li>
                                    <a href="pages/product.html" title="Product left sidebar">Product left sidebar</a>
                                  </li>


                                  <li>
                                    <a href="pages/product.html" title="Product right sidebar">Product right sidebar</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>


                          <div class="menu-column row-grid-2">
                            <ul class="column product">
                              <!-- product -->


                              <li class="col-grid-2">
                                <!--style="width: 590px;"-->

                                <div class="image">
                                  <a href="pages/product.html"><img alt="Assumenda accus antium" src="{{asset('games/images/catalog/bt_product/demo_200x280.jpg')}}"></a><br>
                                </div>


                                <div class="name">
                                  <a href="pages/product.html">Assumenda accus antium</a><br>
                                </div>


                                <div class="price">
                                  $122.00
                                </div>
                              </li>
                            </ul>
                          </div>


                          <div class="menu-column row-grid-1">
                            <!-- category -->
                             <a class="parent" href="pages/category.html">On Sales</a>

                            <ul class="column category">
                              <li class="col-grid-1">
                                <a href="pages/category.html">Ea commod</a>
                              </li>


                              <li class="col-grid-1">
                                <a href="pages/category.html">Haecenas</a>
                              </li>


                              <li class="col-grid-1">
                                <a href="pages/category.html">Fugitsed</a>
                              </li>


                              <li class="col-grid-1 sub_category">
                                <a href="pages/category.html">Magni</a>

                                <div class="sub_menu">
                                  <ul>
                                    <li>
                                      <a href="pages/category.html">Mauris arcu</a>
                                    </li>
                                  </ul>
                                </div>
                              </li>


                              <li class="col-grid-1">
                                <a href="pages/category.html">Nemo</a>
                              </li>


                              <li class="col-grid-1">
                                <a href="pages/category.html">Sitpernatu</a>
                              </li>


                              <li class="col-grid-1">
                                <a href="pages/category.html">Voluptatem</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>


                    <li class="parent">
                      <p class="plus visible-xs">+</p>
                      <a href="pages/category.html">PAGES</a>

                      <div class="dropdown drop-grid-6-6">
                        <div class="menu-row row-col-6" style="">
                          <div class="menu-column row-grid-2">
                            <!-- html-->


                            <div class="staticblock">
                              <a href="index.php"><img alt="logo" src="{{ asset('games/images/catalog/bt_leather/logo_menu.png')}}" title="logo"></a>

                              <p>Pellentesque tortor est, dictum non vierra, aliquet sit amet justo. Nulla pulvinar eros eu tempor
                              pellentesque. Curabitr nenatis ligula ut convallis ornare. Fusce auctor et justo egefelis at, placerat
                              pulvinar sem. Fusce ac mauris vitae augus tesque mi dolor, placerat eget tempor interdum, feugiat vel ipsum.
                              Fusce et dui vel dolor lacinia lacinia. Proin dignisim congue luctus a a purus. Cras suscipit consectetur
                              semper. odio. Nullam convallis massa turpis. Sed euismod tincidunt cursus. Donec at accumsan dolor, vel
                              feugiat enim. Nam consequat iaculis aliquet.</p>
                            </div>
                          </div>


                          <div class="menu-column row-grid-1">
                            <!-- category -->
                             <a class="parent" href="pages/category.html">On Sales</a>

                            <ul class="column category">
                              <li class="col-grid-1">
                                <a href="pages/category.html">Ea commod</a>
                              </li>


                              <li class="col-grid-1">
                                <a href="pages/category.html">Haecenas</a>
                              </li>


                              <li class="col-grid-1">
                                <a href="pages/category.html">Fugitsed</a>
                              </li>


                              <li class="col-grid-1 sub_category">
                                <a href="pages/category.html">Magni</a>

                                <div class="sub_menu">
                                  <ul>
                                    <li>
                                      <a href="pages/category.html">Mauris arcu</a>
                                    </li>
                                  </ul>
                                </div>
                              </li>


                              <li class="col-grid-1">
                                <a href="pages/category.html">Nemo</a>
                              </li>


                              <li class="col-grid-1">
                                <a href="pages/category.html">Sitpernatu</a>
                              </li>


                              <li class="col-grid-1">
                                <a href="pages/category.html">Voluptatem</a>
                              </li>
                            </ul>
                          </div>


                          <div class="menu-column row-grid-1">
                            <!-- html-->


                            <div class="staticblock">
                              <div class="bt-page">
                                <h3>Page</h3>


                                <ul>
                                  <li>
                                    <a href="pages/aboutus.html" title="About Us">About Us</a>
                                  </li>


                                  <li>
                                    <a href="pages/contactus.html" title="Contact Us">Contact Us</a>
                                  </li>


                                  <li>
                                    <a href="pages/pricing.html" title="Pricing Page">Pricing Page</a>
                                  </li>


                                  <li>
                                    <a href="pages/compare.html" title="Product Compare Page">Product Compare Page</a>
                                  </li>


                                  <li>
                                    <a href="pages/testimonials.html" title="Testimonials">Testimonials</a>
                                  </li>


                                  <li>
                                    <a href="pages/FAQs.html" title="FAQs">FAQs</a>
                                  </li>


                                  <li>
                                    <a href="pages/landing.html" title="Product landing page">Product landing page</a>
                                  </li>


                                  <li>
                                    <a href="pages/promotional.html" title="Promotional page">Promotional page</a>
                                  </li>


                                  <li>
                                    <a href="pages/typography.html" title="Typography">Typography</a>
                                  </li>


                                  <li>
                                    <a href="pages/deals.html" title="Deals">Deals</a>
                                  </li>


                                  <li>
                                    <a href="pages/brand.html" title="Brand">Brand</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>


                          <div class="menu-column row-grid-2">
                            <!-- html-->


                            <div class="staticblock">
                              <img src="{{ asset('games/images/catalog/bt_leather/demo_349x310.jpg')}}" alt="" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>


                    <li>
                      <a href="pages/category.html">Action</a>
                    </li>


                    <li>
                      <a href="pages/category.html">Simulation</a>
                    </li>


                    <li class="parent">
                      <p class="plus visible-xs">+</p>
                      <a href="pages/bossblog.html">BLOG</a>

                      <div class="dropdown drop-grid-6-1">
                        <div class="menu-row row-col-1" style=" background-image: url({{asset('games/images/catalog/bt_leather/bgr-menu4.jpg')}})">
                          <div class="menu-column row-grid-1">
                            <!-- html-->


                            <div class="staticblock">
                              <div class="bt-blog-page">
                                <ul>
                                  <li>
                                    <a href="pages/bossblog.html" title="Blog full width">Blog full width</a>
                                  </li>


                                  <li>
                                    <a href="pages/bossblog.html" title="Blog left sidebar">Blog left sidebar</a>
                                  </li>


                                  <li>
                                    <a href="pages/bossblog.html" title="Blog right sidebar">Blog right sidebar</a>
                                  </li>


                                  <li>
                                    <a href="pages/article.html" title="Post full width">Post full width</a>
                                  </li>


                                  <li>
                                    <a href="pages/article.html" title="Post left sidebar">Post left sidebar</a>
                                  </li>


                                  <li>
                                    <a href="pages/article.html" title="Post right sidebar">Post right sidebar</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div id="bt_slideshow">
        <div class="header_slider">
          <div class="boss_slider">
            <div class="tp-banner-container">
              <div class="tp-banner tp-banner0">
                <ul>
                  <!-- SLIDE  -->


                  <li data-link="#" data-masterspeed="500" data-saveperformance="on" data-slotamount="7" data-target="_blank"
                  data-transition="slideup">
                    <!-- MAIN IMAGE -->
                    <img alt="slidebg1" data-bgposition="left center" data-bgpositionend="right center" data-duration="14000" data-ease=
                    "Linear.easeNone" data-kenburns="off" data-lazyload="{{asset('games/images/catalog/bt_leather/demo_1920x900.jpg')}}" src="{{asset('games/images/catalog/bt_leather/dummy.png')}}"> <!-- LAYER NR. 1 -->


                    <div class="tp-caption large_white_text lft customout rs-parallaxlevel-0" data-customout=
                    "x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-easing="easeOutBack" data-elementdelay="0.1" data-end="5000" data-endeasing="easeOutBack" data-endelementdelay=
                    "0.1" data-endspeed="400" data-speed="400" data-start="500" data-x="683" data-y="403" style="z-index: 2;">
                      Carbon rights resourceful dedicated
                    </div>
                    <!-- LAYER NR. 2 -->


                    <div class="tp-caption bold_green_text lft customout rs-parallaxlevel-0" data-customout=
                    "x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-easing="easeOutBack" data-elementdelay="0.1" data-end="5000" data-endeasing="easeOutBack" data-endelementdelay=
                    "0.1" data-endspeed="400" data-speed="400" data-start="1000" data-x="569" data-y="430" style="z-index: 2;">
                      Equity impact
                    </div>
                    <!-- LAYER NR. 3 -->


                    <div class="tp-caption medium_white lft customout rs-parallaxlevel-0" data-customout=
                    "x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-easing="easeOutBack" data-elementdelay="0.1" data-end="5000" data-endeasing="easeOutBack" data-endelementdelay=
                    "0.1" data-endspeed="400" data-speed="400" data-start="1500" data-x="556" data-y="541" style="z-index: 2;">
                      Working alongside synthesize promising development, technology, freedom Nelson Mandela<br>
                      democratizing the global financial system
                    </div>
                    <!-- LAYER NR. 4 -->


                    <div class="tp-caption medium_text lft customout rs-parallaxlevel-0" data-customout=
                    "x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-easing="easeOutBack" data-elementdelay="0.1" data-end="5000" data-endeasing="easeOutBack" data-endelementdelay=
                    "0.1" data-endspeed="400" data-speed="400" data-start="2000" data-x="851" data-y="643" style="z-index: 2;">
                      <span class="price-new">$29.99</span> <span class="price-old">$39.99</span>
                    </div>
                  </li>


                  <li data-link="#" data-masterspeed="500" data-saveperformance="on" data-slotamount="7" data-target="_blank"
                  data-transition="fade">
                    <!-- MAIN IMAGE -->
                    <img alt="slidebg1" data-bgposition="left center" data-bgpositionend="right center" data-duration="14000" data-ease=
                    "Linear.easeNone" data-kenburns="off" data-lazyload="{{asset('games/images/catalog/bt_leather/demo_1920x900.jpg')}}" src="{{asset('games/images/catalog/bt_leather/dummy.png')}}"> <!-- LAYER NR. 1 -->


                    <div class="tp-caption large_white_text randomrotate stt rs-parallaxlevel-0" data-customout=
                    "x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-easing="easeOutBack" data-elementdelay="0.1" data-end="5000" data-endeasing="easeOutBack" data-endelementdelay=
                    "0.1" data-endspeed="400" data-speed="400" data-start="500" data-x="668" data-y="401" style="z-index: 2;">
                      Time of extraordinary change interconne
                    </div>
                    <!-- LAYER NR. 2 -->


                    <div class="tp-caption bold_green_text randomrotate customout rs-parallaxlevel-0" data-customout=
                    "x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-easing="easeOutBack" data-elementdelay="0.1" data-end="5000" data-endeasing="easeOutBack" data-endelementdelay=
                    "0.1" data-endspeed="400" data-speed="400" data-start="1000" data-x="632" data-y="428" style="z-index: 2;">
                      Luther King
                    </div>
                    <!-- LAYER NR. 3 -->


                    <div class="tp-caption medium_white randomrotate customout rs-parallaxlevel-0" data-customout=
                    "x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-easing="easeOutBack" data-elementdelay="0.1" data-end="5000" data-endeasing="easeOutBack" data-endelementdelay=
                    "0.1" data-endspeed="400" data-speed="400" data-start="1500" data-x="594" data-y="543" style="z-index: 2;">
                      Working alongside synthesize promising development, technology, freedom Nelson Mandela<br>
                      democratizing the global financial system
                    </div>
                    <!-- LAYER NR. 4 -->


                    <div class="tp-caption medium_text randomrotate customout rs-parallaxlevel-0" data-customout=
                    "x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-easing="easeOutBack" data-elementdelay="0.1" data-end="5000" data-endeasing="easeOutBack" data-endelementdelay=
                    "0.1" data-endspeed="400" data-speed="400" data-start="2000" data-x="849" data-y="652" style="z-index: 2;">
                      <span class="price-new">$29.99</span> <span class="price-old">$39.99</span>
                    </div>
                  </li>


                  <li data-link="#" data-masterspeed="500" data-saveperformance="on" data-slotamount="7" data-target="_self"
                  data-transition="slideup">
                    <!-- MAIN IMAGE -->
                    <img alt="slidebg1" data-bgposition="left center" data-bgpositionend="right center" data-duration="14000" data-ease=
                    "Linear.easeNone" data-kenburns="on" data-lazyload="{{asset('games/images/catalog/bt_leather/demo_1920x900.jpg')}}" src="{{asset('games/images/catalog/bt_leather/dummy.png')}}"> <!-- LAYER NR. 1 -->


                    <div class="tp-caption large_white_text randomrotate customout rs-parallaxlevel-0" data-customout=
                    "x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-easing="easeOutBack" data-elementdelay="0.1" data-end="5000" data-endeasing="easeOutBack" data-endelementdelay=
                    "0.1" data-endspeed="400" data-speed="400" data-start="500" data-x="687" data-y="409" style="z-index: 2;">
                      Carbon rights resourceful dedicated
                    </div>
                    <!-- LAYER NR. 2 -->


                    <div class="tp-caption bold_green_text randomrotate customout rs-parallaxlevel-0" data-customout=
                    "x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-easing="easeOutBack" data-elementdelay="0.1" data-end="5000" data-endeasing="easeOutBack" data-endelementdelay=
                    "0.1" data-endspeed="400" data-speed="400" data-start="1000" data-x="697" data-y="440" style="z-index: 2;">
                      monster
                    </div>
                    <!-- LAYER NR. 3 -->


                    <div class="tp-caption medium_white randomrotate customout rs-parallaxlevel-0" data-customout=
                    "x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-easing="easeOutBack" data-elementdelay="0.1" data-end="5000" data-endeasing="easeOutBack" data-endelementdelay=
                    "0.1" data-endspeed="400" data-speed="400" data-start="1500" data-x="554" data-y="543" style="z-index: 2;">
                      Working alongside synthesize promising development, technology, freedom Nelson Mandela<br>
                      democratizing the global financial system
                    </div>
                    <!-- LAYER NR. 4 -->


                    <div class="tp-caption medium_text randomrotate customout rs-parallaxlevel-0" data-customout=
                    "x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                    data-easing="easeOutBack" data-elementdelay="0.1" data-end="5000" data-endeasing="easeOutBack" data-endelementdelay=
                    "0.1" data-endspeed="400" data-speed="400" data-start="2000" data-x="842" data-y="642" style="z-index: 2;">
                      <span class="price-new">$29.99</span> <span class="price-old">$39.99</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
        <!--
        jQuery(document).ready(function() { 
			"use strict";
        jQuery('.tp-banner0').show().revolution({
        dottedOverlay:"none",
        delay:5000,
        startWithSlide:0,
        startwidth:1920,
        startheight:900,
        hideThumbs:200,
        hideTimerBar:"on",

        thumbWidth:100,
        thumbHeight:50,
        thumbAmount:2,

        navigationType:"bullet",
        navigationArrows:"solo",
        navigationStyle:"preview2", 

        touchenabled:"off",
        onHoverStop:"off",

        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,
                                
        parallax:"mouse",
        parallaxBgFreeze:"on",
        parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
                                
        keyboardNavigation:"off",

        navigationHAlign:"center",
        navigationVAlign:"bottom",
        navigationHOffset:0,
        navigationVOffset:30,

        soloArrowLeftHalign:"left",
        soloArrowLeftValign:"center",
        soloArrowLeftHOffset:50,
        soloArrowLeftVOffset:0,

        soloArrowRightHalign:"right",
        soloArrowRightValign:"center",
        soloArrowRightHOffset:50,
        soloArrowRightVOffset:0,
                
        shadow:0,
        fullWidth:"on",
        fullScreen:"off",

        spinner:"spinner4",

        stopLoop:"off",
        stopAfterLoops:-1,
        stopAtSlide:-1,

        shuffle:"off",

        autoHeight:"off",                       
        forceFullWidth:"off",                       
                                
                                
                                
        hideThumbsOnMobile:"off",
        hideNavDelayOnMobile:1500,                      
        hideBulletsOnMobile:"off",
        hideArrowsOnMobile:"off",
        hideThumbsUnderResolution:0,

        hideSliderAtLimit:2,
        hideCaptionAtLimit:2,
        hideAllCaptionAtLilmit:767,
        videoJsPath:"rs-plugin/videojs/",
        fullScreenOffsetContainer: ""   
        });             
        }); //ready

        //-->
        </script>
      </div>
    </div>
    <!-- End #bt_header -->


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


    <div class="" id="bt_footer_container">
      <footer id="bt_footer">
        <div class="container">
          <div class="footer_column">
            <div class="row">
              <div class="column left col-sm-8 col-xs-12 not-animated" data-animate="fadeInUp" data-delay="200">
                <div class="column col-sm-3 col-xs-12 not-animated" data-animate="fadeInUp" data-delay="300">
                  <div class="footer-contact">
                    <h3>Contact us</h3>


                    <div class="contact-us">
                      <div class="address">
                        <i class="fa fa-map-marker"></i><span>123 fake Blue street, NY Heaven</span>
                      </div>


                      <div class="email">
                        <i class="fa fa-envelope-o"></i> <span>code@ymail.com</span>
                      </div>


                      <div class="phone">
                        <i class="fa fa-phone"></i> <span>(010) 987 654 3210</span>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="column col-sm-9 col-xs-12 not-animated" data-animate="fadeInUp" data-delay="200">
                  <div class="row">
                    <div class="column col-sm-4 col-xs-12">
                      <h3>My Account</h3>


                      <ul>
                        <li>
                          <a href="pages/account.html">My Account</a>
                        </li>


                        <li>
                          <a href="index.html">Order History</a>
                        </li>


                        <li>
                          <a href="pages/contactus.html">Contact Us</a>
                        </li>


                        <li>
                          <a href="index.html">Returns</a>
                        </li>


                        <li>
                          <a href="index.html">Site Map</a>
                        </li>
                      </ul>
                    </div>


                    <div class="column col-sm-4 col-xs-12 not-animated" data-animate="fadeInUp" data-delay="400">
                      <h3>Extras</h3>


                      <ul>
                        <li>
                          <a href="pages/brand.html">Brands</a>
                        </li>


                        <li>
                          <a href="index.html">Gift Vouchers</a>
                        </li>


                        <li>
                          <a href="index.html">Affiliates</a>
                        </li>


                        <li>
                          <a href="pages/category.html">Specials</a>
                        </li>


                        <li>
                          <a href="index.html">Newsletter</a>
                        </li>
                      </ul>
                    </div>


                    <div class="column col-sm-4 col-xs-12 not-animated" data-animate="fadeInUp" data-delay="200">
                      <h3>Information</h3>


                      <ul>
                        <li>
                          <a href="pages/aboutus.html">About Us</a>
                        </li>


                        <li>
                          <a href="index.html">Privacy Policy</a>
                        </li>


                        <li>
                          <a href="pages/FAQs.html">FAQ'S</a>
                        </li>


                        <li>
                          <a href="pages/typography.html">Typography</a>
                        </li>


                        <li>
                          <a href="pages/pricing.html">Pricing</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>


              <div class="column col-sm-4 col-xs-12">
                <div class="box-tweeter column not-animated" data-animate="fadeInLeft" data-delay="500">
                  <div class="tweeter-heading">
                    <h3>Tweets</h3>
                  </div>


                  <div class="tweeter-content">
                    <ul id="twitter-list">
                      <li class="status-item">
                        <div class="tweet-profile">
                          <a href="https://twitter.com/bossthemes1" title="@bossthemes1"><img alt="bossthemes1" src=
                          "http://pbs.twimg.com/profile_images/378800000472077363/9a9853fc9bc0250650d5e80d84c7d640_normal.png"></a>
                        </div>


                        <div class="tweet-content">
                          <div class="tweet-user">
                            bossthemes
                          </div>


                          <div class="tweet-des">
                            dolor sit amet Consectetur adipiscing elit Morbi Tincidunt neque vitae risus dolor sit amet Consectetur
                            adipiscing elit Morbi Tincidunt
                          </div>
                        </div>
                        <iframe allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" data-screen-name=
                        "bossthemes1" id="twitter-widget-0" name="twitter-widget-0" src=
                        "http://platform.twitter.com/widgets/follow_button.cdbb86670a638fdf59f924a227d4d799.en.html#_=1444380980657&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=bossthemes1&amp;show_count=false&amp;show_screen_name=true&amp;size=m"
                        style="position: static; visibility: visible; width: 151px; height: 20px; overflow: hidden; border: 0;" title=
                        "Twitter Follow Button"></iframe>
                      </li>


                      <li class="status-item">
                        <div class="tweet-profile">
                          <a href="https://twitter.com/bossthemes1" title="@bossthemes1"><img alt="bossthemes1" src=
                          "http://pbs.twimg.com/profile_images/378800000472077363/9a9853fc9bc0250650d5e80d84c7d640_normal.png"></a>
                        </div>


                        <div class="tweet-content">
                          <div class="tweet-user">
                            bossthemes
                          </div>


                          <div class="tweet-des">
                            amet Consectetur adipiscing elit Morbi Tincidunt neque vitae risus @eleifend eleifend Nulla condimentum ligula
                            ante: http://t.co/GMbwWXCM
                          </div>
                        </div>
                        <iframe allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" data-screen-name=
                        "bossthemes1" id="twitter-widget-1" name="twitter-widget-1" src=
                        "http://platform.twitter.com/widgets/follow_button.cdbb86670a638fdf59f924a227d4d799.en.html#_=1444380980659&amp;dnt=false&amp;id=twitter-widget-1&amp;lang=en&amp;screen_name=bossthemes1&amp;show_count=false&amp;show_screen_name=true&amp;size=m"
                        style="position: static; visibility: visible; width: 151px; height: 20px; overflow: hidden; border:0" title=
                        "Twitter Follow Button"></iframe>
                      </li>
                    </ul>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="social-payment">
          <div class="container">
            <div class="row">
              <div class="column col-sm-6 col-xs-12 pull-left not-animated" data-animate="fadeInUp" data-delay="500">
                <div class="payment pull-left">
                  <ul>
                    <li>
                      <a class="skrill" href="" title="Skrill"><img alt="Skrill" src="{{ asset('games/images/catalog/bt_leather/skrill.png')}}"></a>
                    </li>


                    <li>
                      <a class="masterCard" href="" title="MasterCard"><img alt="MasterCard" src="{{asset('games/images/catalog/bt_leather/master.png')}}"></a>
                    </li>


                    <li>
                      <a class="visa" href="" title="Visa"><img alt="Visa" src="{{ asset('games/images/catalog/bt_leather/visa.png')}}"></a>
                    </li>


                    <li>
                      <a class="merican" href="" title="Merican"><img alt="Merican" src="{{ asset('games/images/catalog/bt_leather/american.png')}}"></a>
                    </li>
                  </ul>
                </div>
              </div>


              <div class="column col-sm-6 col-xs-12 pull-right not-animated" data-animate="fadeInUp" data-delay="500">
                <div class="footer-social pull-right">
                  <h3>Follow us</h3>


                  <ul>
                    <li class="icon-face">
                      <a title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                    </li>


                    <li class="icon-twitter">
                      <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                    </li>


                    <li class="icon-google">
                      <a title="Googleplus" href="#"><i class="fa fa-google-plus"></i></a>
                    </li>


                    <li class="icon-youtube">
                      <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                    </li>


                    <li class="icon-rss">
                      <a title="RSS" href="#"><i class="fa fa-rss"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="bt-powered">
          <div class="container">
            <div class="row">
              <div class="powered col-sm-12 col-xs-12">
                <div id="powered">
                  <p>Copyright 2015 © Leather. All rights reserved. <span>Opencart Themes by <a href=
                  "http://www.bossthemes.com">Bossthemes.com.</a></span></p>


                  <p><span>Powered by <a href="http://www.opencart.com">Opencart</a></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>


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