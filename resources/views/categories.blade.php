
{{--@section('header')--}}
{{--@stop--}}

{{--@extends ('layout.main')--}}
{{--@section('content')--}}

 {{--@foreach($category as $value)--}}

        {{--<li class="dropdown grid">--}}
            {{--<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">{{$value->name}} <b class="caret"></b></a>--}}
            {{--<ul class="dropdown-menu multi-column columns-1">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-10">--}}
                        {{--<ul class="multi-column-dropdown">--}}

                            {{--@if ($value->child()->coint()>0)--}}
                                {{--@foreach ($value->child()->get() as $cat)--}}

                                    {{--<li><a class="list"--}}
                                           {{--href="{{route('categories.index',['slug'=>$cat->slug])}}"> dsfsdf </a>--}}
                                        {{--@endforeach--}}
                                        {{--@endif--}}
                                    {{--</li>--}}
                                    {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</ul>--}}
        {{--</li>--}}
    {{--@endforeach--}}

{{--@stop--}}

    {{--@section('footer')--}}
       {{--@stop--}}

