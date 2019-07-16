@extends ('layout.main')
<title>Sayadova Baker</title>
@section('content')
    <div class="banner">
        <div class="container">
            <h2 class="hdng"><span>S.Baker</span> with love</h2>
            <p>Наши торты сделают ваш день особенным</p>
            <a href="{{route('products')}}">Купить сейчас</a>
            <div class="banner-text">
                <img src="images/2.png" alt=""/>
            </div>
        </div>
    </div>

    <div class="gallery">
        <div class="container">
            <div class="gallery-grids">
                <div class="col-md-8 gallery-grid glry-one">
                    <a href="{{route('single',[$productsrand->id])}}"><img src="{{$productsrand->image_path}}"
                                                                           class="img-responsive" alt=""/>
                        <div class="gallery-info">
                            <p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Подробнее</p>
                            <a class="shop" href="/single">подробнее</a>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <div class="galy-info">
                        <p>{{$productsrand->name}}</p>
                        <div class="galry">
                            <div class="prices">
                                <h5 class="item_price">₴{{$productsrand->price}}</h5>
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
                    </div>
                </div>

                @foreach($productsrand2 as $key)
                    <div class="col-md-4 gallery-grid glry-two">
                        <a href="{{route('single',[$key->id])}}"><img src="{{$key->image_path}}" class="img-responsive" alt=""/>
                            <div class="gallery-info galrr-info-two">
                                <p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Посмотреть</p>
                                <a class="shop" href="{{route('single',[$key->id])}}">Подробнее</a>
                                <div class="clearfix"></div>
                            </div>

                        </a>
                        <div class="galy-info">
                            <p>{{$key->name}}</p>
                            <div class="galry">
                                <div class="prices">
                                    <h5 class="item_price">₴{{$key->price}}</h5>
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
                        </div>
                    </div>
                @endforeach


            </div>
@endsection

@section('footer')
@endsection

