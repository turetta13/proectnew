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
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  {{$user->name}}  Вы авторизированы! <p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
@stop
