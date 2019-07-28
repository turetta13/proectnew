@extends('layout.main')

@section('content')

    <br>
    <h2 class="hdng">Редактировать меню </h2>

    <br>
    <div class="container">

        {{--ВСПЛЫВЫЮЩЕЕ УВЕДОМЛЕНИЕ--}}

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card">

                    <div class="card-body">

                        <form method="POST"
                              action="{{route('menu.save',[$categories->id])}}">
                            @csrf

                            {{--NAME--}}
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">
                                    Название </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control"
                                           name="name" value="{{$categories->name}}">
                                </div>
                            </div>

                            <br>
                            {{--SLUG--}}
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">
                                    Slug </label>

                                <div class="col-md-6">
                                    <input id="slug" type="text"
                                           class="form-control"
                                           name="slug" value="{{$categories->slug}}">
                                    @if ($errors->has('slug'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <br>
                            {{--description--}}
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">
                                    Описание </label>

                                <div class="col-md-6">
                                    <input id="description" type="text"
                                           class="form-control"
                                           name="description" value="{{$categories->description}}">
                                </div>
                            </div>

                            <br>
                            {{--parent_id--}}
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">
                                    Родительская категория </label>

                                <div class="col-md-6">
                                    <input id="parent_id" type="number"
                                           class="form-control"
                                           name="parent_id" value="{{$categories->parent_id}}">
                                </div>
                            </div>

                            <br>
                            {{--is_publish--}}
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">
                                    Включение\Выключение </label>

                                <div class="col-md-6">
                                    <input id="is_publish" type="number"
                                           class="form-control"
                                           name="is_publish" value="{{$categories->is_publish}}">
                                    @if ($errors->has('is_publish'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('is_publish') }}</strong>
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

                                    <a href="{{route('admin.menu')}}">назад</a>

                                    <br>
                                    <br>


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
