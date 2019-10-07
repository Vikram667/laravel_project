<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <link rel="stylesheet" href="css/bootstrap.css">--}}
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">-->
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">-->


    <!--    <link rel="stylesheet" href="css/bootstrap.css">-->
{{--    <link rel="stylesheet" href="css/bootstrap.css">--}}
{{--    <link rel="stylesheet" href="css/font-awesome.min.css">--}}
{{--    <link rel="stylesheet" href="css/style.css">--}}

    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
          rel="stylesheet">

    <link href="{{asset('css/libs.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <title>Shades E-commerce</title>
</head>

<body style="font-family: sans-serif;">
      @yield('header')
<section>
    <div class="row mx-0">
        <script src="{{asset('js/libs.js')}}" type="text/javascript"></script>

        <script type="text/javascript">
            jssor_1_slider_init = function () {

                var jssor_1_options = {
                    $AutoPlay: 1,
                    $SlideDuration: 800,
                    $SlideEasing: $Jease$.$OutQuint,
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                    },
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$
                    }
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                /*#region responsive code begin*/

                var MAX_WIDTH = 3000;

                function ScaleSlider() {
                    var containerElement = jssor_1_slider.$Elmt.parentNode;
                    var containerWidth = containerElement.clientWidth;

                    if (containerWidth) {

                        var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                        jssor_1_slider.$ScaleWidth(expectedWidth);
                    } else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }

                ScaleSlider();

                $Jssor$.$AddEvent(window, "load", ScaleSlider);
                $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                /*#endregion responsive code end*/
            };
        </script>
        <style>
            /*jssor slider loading skin spin css*/
            .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes jssorl-009-spin {
                from {
                    transform: rotate(0deg);
                }
                to {
                    transform: rotate(360deg);
                }
            }

            /*jssor slider bullet skin 032 css*/
            .jssorb032 {
                position: absolute;
            }

            .jssorb032 .i {
                position: absolute;
                cursor: pointer;
            }

            .jssorb032 .i .b {
                fill: #fff;
                fill-opacity: 0.7;
                stroke: #000;
                stroke-width: 1200;
                stroke-miterlimit: 10;
                stroke-opacity: 0.25;
            }

            .jssorb032 .i:hover .b {
                fill: #000;
                fill-opacity: .6;
                stroke: #fff;
                stroke-opacity: .35;
            }

            .jssorb032 .iav .b {
                fill: #000;
                fill-opacity: 1;
                stroke: #fff;
                stroke-opacity: .35;
            }

            .jssorb032 .i.idn {
                opacity: .3;
            }

            /*jssor slider arrow skin 051 css*/
            .jssora051 {
                display: block;
                position: absolute;
                cursor: pointer;
            }

            .jssora051 .a {
                fill: none;
                stroke: #fff;
                stroke-width: 360;
                stroke-miterlimit: 10;
            }

            .jssora051:hover {
                opacity: .8;
            }

            .jssora051.jssora051dn {
                opacity: .5;
            }

            .jssora051.jssora051ds {
                opacity: .3;
                pointer-events: none;
            }
        </style>
        <div id="jssor_1"
             style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin"
                 style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                     src="../svg/loading/static-svg/spin.svg"/>
            </div>
            <div data-u="slides"
                 style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
                <div>

                    <img data-u="image" src="/images/aviator-blur-close-up-1548027.jpg"/>

                </div>
                          <div>
{{--                                <h1 class="mt-5">wdjjasdhs</h1>--}}
                                <img data-u="image" src="https://images.pexels.com/photos/1640772/pexels-photo-1640772.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                           </div>


            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;"
                 data-autocenter="1"
                 data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;"
                 data-autocenter="2"
                 data-scale="0.75" data-scale-left="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;"
                 data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
        </div>
        <script type="text/javascript">jssor_1_slider_init();</script>
    </div>
</section>

<section>
    <div class="row mx-0">


        <div class="col-lg-9 col-12">
            <h3 class="pt-2 pb-1">Featured Products</h3>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="card border border=danger">
                        <div class="card mx-2 my-2">
                            <img style="height:280px;"
                                 src="https://cdn.shopify.com/s/files/1/0884/9826/products/Seether-Shades-Main-New_grande.png?v=1504136436"
                                 class="img-fluid" alt="">
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <a class="px-2">Product Name</a>
                                <br>
                                <a class="px-2">12$</a></div>
                            <div class="col-4">
                                <i class="fa fa-shopping-cart" style="font-size: 30px;"></i>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="col-lg-4 col-12">
                    <div class="card border border=danger">
                        <div class="card mx-2 my-2">
                            <img style="height:280px;"
                                 src="https://cdn.shopify.com/s/files/1/0884/9826/products/Seether-Shades-Main-New_grande.png?v=1504136436"
                                 class="img-fluid" alt="">
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <a class="px-2">Product Name</a>
                                <br>
                                <a class="px-2">12$</a></div>
                            <div class="col-4">
                                <i class="fa fa-shopping-cart" style="font-size: 30px;"></i>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="ribbon-wrapper">
                        <div class="ribbon-tag">Hot Deals</div>
                    </div>
                    <div class="card border border=danger">
                        <div class="card mx-2 my-2">
                            <img style="height:280px;"
                                 src="https://cdn.shopify.com/s/files/1/0884/9826/products/Seether-Shades-Main-New_grande.png?v=1504136436"
                                 class="img-fluid" alt="">
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <a class="px-2">Product Name</a>
                                <br>
                                <a class="px-2">12$</a></div>
                            <div class="col-4">
                                <i class="fa fa-shopping-cart" style="font-size: 30px;"></i>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

        </div>

        <div class="col-lg-3 col-12">


            <div class="card mt-5">
                <div class="row bg-primary mx-0" style="height:3px;"></div>
                <h2 class="mx-3 text-uppercase text-center mt-5">newslettters signup </h2>
                <p class="text-center px-5 pt-2">
                    It is a long established fact that a reader will be.
                </p>
                <form action="">
                    <div class="form-group mx-5">
                        <input type="text" class="form-control rounded-0">

                    </div>
                    <div class="form-group mx-5 mb-4">
                        <input type="submit" class="btn mx-5 rounded-0 px-3" value="Subscriber">
                    </div>
                </form>
            </div>

        </div>


    </div>


</section>


<section class="mt-4">
    <div class="row mx-0">


        <div class="col-lg-9 col-12">
            <h3 class="pt-2 pb-1">Staff Pick</h3>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="card border border=danger">
                        <div class="card mx-2 my-2">
                            <img style="height:280px;"
                                 src="https://cdn.shopify.com/s/files/1/0884/9826/products/Seether-Shades-Main-New_grande.png?v=1504136436"
                                 class="img-fluid" alt="">
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <a class="px-2">Product Name</a>
                                <br>
                                <a class="px-2">12$</a></div>
                            <div class="col-4">
                                <i class="fa fa-shopping-cart" style="font-size: 30px;"></i>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="col-lg-4 col-12">
                    <div class="card border border=danger">
                        <div class="card mx-2 my-2">
                            <img style="height:280px;"
                                 src="https://cdn.shopify.com/s/files/1/0884/9826/products/Seether-Shades-Main-New_grande.png?v=1504136436"
                                 class="img-fluid" alt="">
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <a class="px-2">Product Name</a>
                                <br>
                                <a class="px-2">12$</a></div>
                            <div class="col-4">
                                <i class="fa fa-shopping-cart" style="font-size: 30px;"></i>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="ribbon-wrapper">
                        <div class="ribbon-tag">Hot Deals</div>
                    </div>
                    <div class="card border border=danger">
                        <div class="card mx-2 my-2">
                            <img style="height:280px;"
                                 src="https://cdn.shopify.com/s/files/1/0884/9826/products/Seether-Shades-Main-New_grande.png?v=1504136436"
                                 class="img-fluid" alt="">
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <a class="px-2">Product Name</a>
                                <br>
                                <a class="px-2">12$</a></div>
                            <div class="col-4">
                                <i class="fa fa-shopping-cart" style="font-size: 30px;"></i>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

        </div>

        <div class="col-3">


        </div>


    </div>


</section>


<section class="mt-4">
    <div class="row mx-0 mb-4">


        <div class="col-lg-9 col-12">
            <h3 class="pt-2 pb-1">New Products</h3>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="card border border=danger">
                        <div class="card mx-2 my-2">
                            <img style="height:280px;"
                                 src="https://cdn.shopify.com/s/files/1/0884/9826/products/Seether-Shades-Main-New_grande.png?v=1504136436"
                                 class="img-fluid" alt="">
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <a class="px-2">Product Name</a>
                                <br>
                                <a class="px-2">12$</a></div>
                            <div class="col-4">
                                <i class="fa fa-shopping-cart" style="font-size: 30px;"></i>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="col-lg-4 col-12">
                    <div class="card border border=danger">
                        <div class="card mx-2 my-2">
                            <img style="height:280px;"
                                 src="https://cdn.shopify.com/s/files/1/0884/9826/products/Seether-Shades-Main-New_grande.png?v=1504136436"
                                 class="img-fluid" alt="">
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <a class="px-2">Product Name</a>
                                <br>
                                <a class="px-2">12$</a></div>
                            <div class="col-4">
                                <i class="fa fa-shopping-cart" style="font-size: 30px;"></i>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="ribbon-wrapper">
                        <div class="ribbon-tag">Hot Deals</div>
                    </div>
                    <div class="card border border=danger">
                        <div class="card mx-2 my-2">
                            <img style="height:280px;"
                                 src="https://cdn.shopify.com/s/files/1/0884/9826/products/Seether-Shades-Main-New_grande.png?v=1504136436"
                                 class="img-fluid" alt="">
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <a class="px-2">Product Name</a>
                                <br>
                                <a class="px-2">12$</a></div>
                            <div class="col-4">
                                <i class="fa fa-shopping-cart" style="font-size: 30px;"></i>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

        </div>

        <div class="col-3">


        </div>


    </div>


</section>

<footer>

    <div class="row mx-0 footercolor1">
        <div class="col-lg-6 col-12">
            <h3 class="text-uppercase pl-3 py-3 text-white"><span class="fa fa-heart icon_round_footer"
                                                                  style="color:#4cb2cb;"></span> free shipping on orders
                over $100 </h3>
        </div>
        <div class="col-lg-6 col-12">
            <h3 class="text-uppercase pl-3 py-3 text-white"><span class="fa fa-phone icon_round_footer"
                                                                  style="color:#4cb2cb;"></span> free shipping on orders
                over $100 </h3>
        </div>
    </div>


    <div class="row mx-0 footercolor2 pb-5">

        <div class="col-lg-3 col-12">
            <h3 class="text-uppercase pt-5 pb-2 px-3 text-white">facebook</h3>
            <!--              <div class="card rounded-0 bg-success">-->


            <img style="height:180px; width:300px;"
                 src="https://images.pexels.com/photos/257360/pexels-photo-257360.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                 class="img-fluid ml-lg-3 ml-1 bg-white" alt="">


            <!--              </div>-->

        </div>
        <div class="col-lg-3 col-12">
            <h3 class="text-uppercase pt-5 pb-2 px-3 text-white">from twitter</h3>
            <div class="row">
                <div class="col-2">

                    <i class="fa fa-twitter icon_round_footer" style="font-size:20px; color:#4cb2cb;"></i>

                </div>
                <div class="col-10">

                    <p class="text-left text-white">

                        be distracted by the readable content of a page when looking at its layout. The point of using
                        Lorem Ipsum is that it has a more-or-less normal distribution of letters,

                    </p>

                </div>

            </div>


            <div class="row">
                <div class="col-2">

                    <i class="fa fa-twitter icon_round_footer" style="font-size:20px; color:#4cb2cb;"></i>

                </div>
                <div class="col-10">


                    <p class="text-left text-white">

                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters,

                    </p>

                </div>

            </div>


        </div>
        <div class="col-lg-3 col-12">
            <h3 class="text-uppercase pt-5 pb-2 px-3 text-white">information</h3>
            <ul style="padding-left:17px;">
                <li class="list-unstyled text-white py-2"><span class="font-weight-bold text-white pr-1"
                                                                style="font-size:14px;"> > </span>Lorem Ipsum is simply
                    dummy tex
                </li>
                <li class="list-unstyled text-white py-2"><span class="font-weight-bold text-white pr-1"
                                                                style="font-size:14px;"> > </span>Lorem Ipsum is simply
                    dummy tex
                </li>
                <li class="list-unstyled text-white py-2"><span class="font-weight-bold text-white pr-1"
                                                                style="font-size:14px;"> > </span>Lorem Ipsum is simply
                    dummy tex
                </li>
                <li class="list-unstyled text-white py-2"><span class="font-weight-bold text-white pr-1"
                                                                style="font-size:14px;"> > </span>Lorem Ipsum is simply
                    dummy tex
                </li>
                <li class="list-unstyled text-white py-2"><span class="font-weight-bold text-white pr-1"
                                                                style="font-size:14px;"> > </span>Lorem Ipsum is simply
                    dummy tex
                </li>
            </ul>

        </div>
        <div class="col-lg-3 col-12">
            <h3 class="text-uppercase pt-5 pb-2 px-3 text-white">contact us</h3>

            <p class="text-justify text-white pr-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua

            </p>
            <p class="text-justify text-white pr-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua

            </p>
            <div class="row mx-0 footercolor1" style="height:1px;"></div>
            <div class="row mx-0 mt-3">
                <div class="col-3"><i class="fa fa-facebook socialicon_round_footer"></i></div>
                <div class="col-3"><i class="fa fa-facebook socialicon_round_footer"></i></div>
                <div class="col-3"><i class="fa fa-facebook socialicon_round_footer"></i></div>
                <div class="col-3"><i class="fa fa-facebook socialicon_round_footer"></i></div>


            </div>
        </div>


    </div>

    <div class="row pb-0 mx-0 footercolor3">
        <div class="col-lg-6 col-12">

            <p class="pt-4" style="color:#47a9b6; font-size:13px;">&copy; 2019 newshope.All rights reserved | <span
                    class="text-white">newdesign</span></p>

        </div>
        <div class="col-lg-6 col-12">

            <ul class="footerul">
                <li class="footerlist mx-2 px-3">About Us</li>

                <li class="footerlist mx-2 px-3">Delivery & Returns</li>

                <li class="footerlist mx-2 px-3">Terms & Conditions</li>

                <li class="footerlist mx-2 px-3">Contact Us</li>
            </ul>

        </div>
    </div>


</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{asset('js/libs.js')}}"></script>
</body>

</html>