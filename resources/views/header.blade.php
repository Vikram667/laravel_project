@section('header')
    <header class="" style="background: #4cb2cb;">
        <div class="row mx-0">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="row">
                            <div class="col-lg-1 col-0"></div>
                            <div class="col-lg-3 col-6">
                                <select name="" id="" class="form-control my-lg-2 my-1"
                                        style="background: transparent; color:#fff; ">
                                    <option value="">Language :</option>
                                </select>

                            </div>
                            <!--                        <div class="col-lg-2 col-0"></div>-->
                            <div class="col-lg-3 col-6">
                                <select name="" id="" class="form-control my-lg-2 my-1"
                                        style="background: transparent; color:#fff;">
                                    <option value="">Currency :</option>

                                </select>
                            </div>
                            <div class="col-lg-1 col-0"></div>
                        </div>


                    </div>
                    <!--                <div class="col-lg-2 col-0"></div>-->
                    <div class="col-lg-6 col-12">
                        <div class="row pt-2">
                            <div class="col-1">

                            </div>
                            <div class="col-2">
                                <li class="upperlist">Account</li>
                            </div>
                            <div class="col-2">
                                <li class="upperlist">Whishlist</li>
                            </div>
                            <div class="col-2">
                                <li class="upperlist">Checkout</li>
                            </div>

                            <div class="col-2">
                                <li class="upperlist">Log In</li>
                            </div>
                            <div class="col-2">
                                <li class="upperlist">Sign Up</li>
                            </div>
                            <div class="col-1">

                            </div>
                        </div>


                        <!--                    <nav class="navbar navbar-expand-lg navbar-light" style="font-size:15px;">-->

                        <!--                        <button class="navbar-toggler" style="margin-left:-16px; border-color: #fff;" type="button"-->
                        <!--                                data-toggle="collapse"-->
                        <!--                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"-->
                        <!--                                aria-expanded="false" aria-label="Toggle navigation">-->
                        <!--                            <span class="navbar-toggler-icon">-->
                        <!--                                  <i class="fa fa-bars" style="color:#fff; font-size:27px; padding-top:2px;"></i>-->
                        <!--                            </span>-->
                        <!--                        </button>-->

                        <!--                        <div class="collapse navbar-collapse navbar_change mt-lg-0 mt-2" id="navbarSupportedContent">-->
                        <!--                            <ul class="navbar-nav">-->

                        <!--                                <li class="px-3">-->
                        <!--                                    <a class="nav-link text-white navbar_text_color" href="#">Link</a>-->
                        <!--                                </li>-->

                        <!--                                <li class="nav-item px-3">-->
                        <!--                                    <a class="nav-link text-white  navbar_text_color" href="#">Link</a>-->
                        <!--                                </li>-->

                        <!--                                <li class="nav-item px-3">-->
                        <!--                                    <a class="nav-link text-white  navbar_text_color" href="#">Link</a>-->
                        <!--                                </li>-->

                        <!--                                <li class="nav-item px-3">-->
                        <!--                                    <a class="nav-link text-white  navbar_text_color" href="#">Link</a>-->
                        <!--                                </li>-->

                        <!--                                <li class="nav-item px-3 removeborderright">-->
                        <!--                                    <a class="nav-link text-white  navbar_text_color" href="#">Link</a>-->
                        <!--                                </li>-->


                        <!--                            </ul>-->

                        <!--                        </div>-->
                        <!--                    </nav>-->

                    </div>
                </div>
            </div>
            <div class="col-12 bg-white">
                <div class="row my-4">

                    <div class="col-lg-3 col-6">
                        <h2 class="mx-lg-5 mx-0 mt-lg-2 mt-0 fixheading">NEW SHOP</h2>
                    </div>
                    <div class="col-lg-5 col-6">
                        <nav class="navbar navbar-expand-lg navbar-light" style="font-size:15px;">

                            <button class="navbar-toggler" style="margin-left:-16px; border-color: #fff;" type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                  <i class="fa fa-bars" style="color:#fff; font-size:27px; padding-top:2px;"></i>
                            </span>
                            </button>

                            <div class="collapse navbar-collapse navbar_change mt-lg-0 mt-2" id="navbarSupportedContent2">
                                <ul class="navbar-nav">

                                    @foreach($categories as $category)

                                    <li class="px-3 removeborderright">
                                        <a class="nav-link" href="#">{{$category->name}}</a>
                                    </li>

                                    @endforeach


                                </ul>

                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="has-search mt-2">
                                    <form class="form-inline my-2 my-lg-0">
                                        <span class="fa fa-search form-control-feedback search_icon" style=""></span>
                                        <input class="form-control mr-sm-2" style="padding-left:7px;" type="search"
                                               placeholder="Search"
                                               aria-label="Search">
                                    </form>
                                </div>

                            </div>
                            <div class="col-lg-3 col-6">
                                <i class="fa fa-shopping-cart mt-2 bg-white icon_round"></i>
                                <i class="fa fa-shopping-cart mt-2 bg-white icon_round"></i>
                            </div>
                            <div class="col-lg-3 col-6">
                                <p class="mt-3">CART<span>(1)</span></p>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </header>
@endsection