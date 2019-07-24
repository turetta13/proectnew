@extends ('layout.main')
@section('header')
@endsection
@section('content')
    <br>
    <h2>Редактирование личных данных пользователей</h2>
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
                <a href="{{route('profile.create')}}">Создать пользователя</a>
                <table class="table">
                    <tr>
                        <td><b>id</b></td>
                        <td><b>Аватар</b></td>
                        <td><b>Имя</b></td>
                        <td><b>Email</b></td>
                        <td><b>Телефон</b></td>
                        <td><b>Статус</b></td>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td><img width="50" src ="{{$user->avatar}}"></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->role}}</td>
                            <td><a href="{{route('profile.edit',[$user->id])}}">редактировать </a></td>
                            <td><a input type="submit" onclick="return confirm('Подтвердить удаление')"
                                   href="{{route('profile.delete',[$user->id])}}">удалить(!) </a></td>


                        </tr>
                    @endforeach
                </table>
                {{$users->links()}}
            </div>
        </div>
    </div>
@endsection
@section('footer')
@endsection
