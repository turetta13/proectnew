@extends ('layout.main')
@section('header')
@endsection
@section('content')
    <br>
    <h2>Редактирование товаров</h2>
    <br>
    <div class="container" >
    <div class="row justify-content-center" >
    <div >

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

    <table class="table" width="100%">
        <tr>
            <td><b>id</b></td>
            <td><b>Название</b></td>
            <td><b>Категория</b></td>
            <td><b>Краткое описание </b></td>
            <td><b>Описание</b></td>
            <td><b>Публикация</b></td>
            <td><b>Фото</b></td>

        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->category_id}}</td>

                <td>{{$product->shortdesc}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->publish}}</td>
                <td><img width="50" src="{{$product->image_path}}"></td>

                {{--<td><a href="{{route('profile.edit',[$user->id])}}">редактировать </a></td>--}}
                {{--<td><a href="{{route('profile.delete',[$user->id])}}">удалить(!) </a></td>--}}


            </tr>
        @endforeach
    </table>
    {{$products->links()}}
    </div>
    </div>
    </div>
@endsection
@section('footer')
@endsection
