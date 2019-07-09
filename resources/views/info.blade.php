<title>Sayadova Baker | Команда</title>


@extends ('layout.main')
@section('header')
@stop

@section('content')
    <div class="account">
        <div class="container">
            <div class="register">
                <form>
                    <div class="register-top-grid">
                            <h3>{{$info->title}}</h3>
                            <div class="input">
                                <center>   <div><img src="{{$info->image}}"></div></center>
                                <p><br>{{$info->description}}</br>
                            </div>

                </form>

            </div>
        </div>
    </div>
    </div>
@stop


@section('footer')
@stop

