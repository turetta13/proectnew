@extends ('layout.main')
@section('header')
@stop

@section('content')
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>Личный кабинет</h2></div>
                    <br>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($user)
                            <table class="table">
                                <tr>
                                    <th><img width="100" src ="{{$user->avatar}}"></th>


                                </tr>

                                <tr>
                                    <th>Имя:</th>
                                    <td>{{$user->name}}</td>

                                </tr>
                                <tr>
                                    <th>Електронная почта:</th>
                                    <td>{{$user->email}}</td>

                                </tr>

                                <tr>
                                    <th>Телефон</th>
                                    <td>{{$user->phone}}</td>

                                </tr>

                                @if($user->isAdmin())
                                    <h4>админ панель</h4>
                                    <a href="{{route('admin.list')}}"><li>редактировать пользователей</a><br>
                                    <a href="{{route('admin.menu')}}"><li>редактировать меню</a><br>
                                    <a href="{{route('admin.products')}}"><li>редактировать продукты</a><br>
                                @endif

                            </table>

                            <BR>


                            <a href="{{route('profile.edit',[$user->id])}}">
                                <button type="submit" class="btn">
                                    Редактировать данные
                                </button>
                            </a>

                        @else Вы не авторизированы

<p><br>
                       <a href="{{route('login')}}">
                                <button type="submit" class="btn">
                                    Войти
                                </button>
                            </a>


                                <a href="{{route('register')}}">
                                    <button type="submit" class="btn">
                                        Регистрация
                                    </button>
                                </a>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
@stop
