@extends('layout.main')

@section('content')
    <br>
    <h2 class="hdng">Редактировать профиль </h2>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="{{route('profile.save')}}">
                            @csrf
                                   {{--NAME--}}
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">
                               Изменить имя </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" value="{{$user->name}}" >

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

<br>
                            {{--EMAIL--}}
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">Изменить електронную почту</label>

                                <div class="col-md-6">
                                    <input id="email" type="text"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{$user->email}}" >

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
<br>
                            {{--PHONE--}}
                            <div class="form-group row">
                                <label for="phone" class="col-sm-4 col-form-label text-md-right">
                                    Изменить телефон </label>

                                <div class="col-md-6">
                                    <input id="phone" type="text"
                                           class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                           name="phone" value="{{$user->phone}}">

                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

 <br>
                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">
                                    Изменить пароль</label>

                                <div class="col-md-6">
                                    <input type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" autocomplete="off" value="">

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                                                       <br>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn">
                                      Сохранить
                                    </button>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
@stop
