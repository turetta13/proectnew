@extends ('layout.main')
@section('header')
@endsection
@section('content')

    <br>
    <h2>Редактирование главного меню</h2>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <a href="{{route('menu.create')}}">Добавить категорию</a>
                <table class="table">
                    <tr>
                        <td><b>id</b></td>
                        <td><b>Название</b></td>
                        <td><b>slug</b></td>
                        <td><b>Описание </b></td>
                        <td><b>Родитель</b></td>
                        <td><b>Публикация</b></td>


                    </tr>
                    @foreach($categories as $categorie)
                        <tr>
                            @if($categorie->parent_id == 0)
                                <td><h4>{{$categorie->id}}</h4></td>
                            @else
                                <td>{{$categorie->id}}</td>
                            @endif
                            <td>{{$categorie->name}}</td>
                            <td>{{$categorie->slug}}</td>

                            <td>{{$categorie->description}}</td>
                            <td>{{$categorie->parent_id}}</td>
                            <td>{{$categorie->is_publish}}</td>

                            <td><a href="{{route('menu.edit',[$categorie->id])}}">редактировать </a></td>
                            <td><a input type="submit" onclick="return confirm('Подтвердить удаление')" href="{{route('menu.delete',[$categorie->id])}}">удалить(!) </a></td>


                        </tr>
                    @endforeach

                </table>
                {{$categories->links()}}

            </div>
        </div>
    </div>
@endsection
@section('footer')
@endsection
