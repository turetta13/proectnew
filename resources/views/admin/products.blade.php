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

    <table class="table">
        <tr>
            <td><b>id</b></td>
            <td><b>Название</b></td>
            <td><b>Категория</b></td>
            <td><b>Цена</b></td>
            <td><b>Краткое описание </b></td>
            <td><b>Описание</b></td>
            <td><b>Состав</b></td>
            <td><b>Публикация</b></td>
            <td><b>Фото</b></td>
            <td><b>Редактирвоание</b></td>
            <td><b>Удаление</b></td>

        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->category_id}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->shortdesc}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->composition}}</td>
                <td>{{$product->publish}}</td>
                <td><img width="50" src="{{$product->image_path}}"></td>

                <td><a href="{{route('products.edit',[$product->id])}}">редактировать </a></td>
                <td><a input type="submit" onclick="return confirm('Подтвердить удаление')"
                       href="{{route('products.delete',[$product->id])}}">удалить(!) </a></td>


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
