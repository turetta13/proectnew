<title>Sayadova Baker | Товар</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- js -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<script src="js/imagezoom.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<!--//FlexSlider -->


@extends ('layout.main')
@section('header')
@stop
<!--//single-page-->
@section('content')

    <div class="single">
        <div class="container">
            <div class="single-grids">
                <div class="col-md-4 single-grid">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="{{$single->image_path}}">
                                <div class="thumb-image"><img src="{{$single->image_path}}" data-imagezoom="true"
                                                              class="img-responsive"></div>

                            </li>
                            <li data-thumb="{{$single->image_path}}">
                                <div class="thumb-image"><img src="{{$single->image_path}}" data-imagezoom="true"
                                                              class="img-responsive"></div>
                            </li>
                            <li data-thumb="{{$single->image_path}}">
                                <div class="thumb-image"><img src="{{$single->image_path}}" data-imagezoom="true"
                                                              class="img-responsive"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 single-grid simpleCart_shelfItem">
                    <h3>{{$single->name}}</h3>
                    <p>{{$single->shortdesc}}</p>
                    <ul class="size">
                        <h3>Size</h3>
                        <li><a href="#">1 KG</a></li>
                        <li><a href="#">2 KG</a></li>
                        <li><a href="#">3 KG</a></li>
                        <li><a href="#">4 KG</a></li>
                    </ul>
                    <ul class="size">
                        <h3>2-3 Tier Cakes</h3>
                        <li><a href="#">1 Step</a></li>
                        <li><a href="#">2 Step</a></li>
                        <li><a href="#">3 Step</a></li>
                    </ul>
                    <div class="galry">
                        <div class="prices">
                            <h5 class="item_price">₴{{$single->price}}</h5>
                        </div>
                        <div class="rating">
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p class="qty"> Qty : </p><input min="1" type="number" id="quantity" name="quantity" value="1"
                                                     class="form-control input-small">
                    <div class="btn_form">
                        <a href="#" class="add-cart item_add">ADD TO CART</a>
                    </div>
                    <div class="tag">
                        <p>Category : <a href="#"> Cakes</a></p>
                        <p>Tag : <a href="#"> Lorem ipsum </a></p>
                    </div>
                </div>
                <div class="col-md-4 single-grid1">
                    <h2>Account</h2>
                    <ul>
                        <li><a href="#">Offers</a></li>
                        <li><a href="/prod">New products</a></li>
                        <li><a href="/register">Register</a></li>
                        <li><a href="/register">Forgot Your Password</a></li>
                        <li><a href="/register">My account</a></li>
                        <li><a href="/cont">Address</a></li>
                        <li><a href="/check">wishlist</a></li>
                        <li><a href="/check">Order history</a></li>

                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- collapse -->
    <div class="collpse tabs">
        <div class="container">
            <div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                               aria-expanded="true" aria-controls="collapseOne">
                                Description
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="headingOne">
                        <div class="panel-body">
                            {{$single->description}}
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                additional information
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                reviews (5)
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingThree">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                help
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingFour">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//collapse -->
    <!--related-products-->
    <div class="related-products">
        <div class="container">
            <h3>Похожие продукты</h3>
            <div class="product-model-sec single-product-grids">

                @foreach($similar as $sim )

                    <div class="product-grid single-product">
                        <a href="{{route('single',[$sim->id])}}">
                            <div class="more-product"><span> </span></div>
                            <div class="product-img b-link-stripe b-animate-go  thickbox">
                                <img src="{{$sim->image_path}}" class="img-responsive" alt="">
                                <div class="b-wrapper">
                                    <h4 class="b-animate b-from-left  b-delay03">
                                        <button>Подробнее</button>
                                    </h4>
                                </div>
                            </div>
                        </a>
                        <div class="product-info simpleCart_shelfItem">
                            <div class="product-info-cust prt_name">
                                <h4>{{$sim->name}}</h4>
                                <span class="item_price">{{$sim->price}}</span>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                @endforeach

                <div class="clearfix"></div>

            </div>


        </div>

    </div>

@stop
<!--related-products-->
@section('footer')
@stop