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
                            <table>

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
                            </table>

                            <BR>


                            <a href="{{route('profile.edit')}}">
                                <button type="submit" class="btn">
                                    Редактировать данные
                                </button>
                            </a>

                        @else Вы не авторизированы
                        <p>
                            <a href="{{route('login')}}">
                                <button type="submit" class="btn">
                                    Авториизироваться
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
