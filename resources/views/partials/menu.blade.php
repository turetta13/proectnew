@foreach(\App\Menu::$categories as $url => $category)

    {{--@if(isset($category['name']))--}}
        {{--<li class="dropdown grid">--}}
            {{--<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">{{$category['name']}} <b class="caret"></b></a>--}}
            {{--<ul class="dropdown-menu multi-column columns-1">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-10">--}}
                        {{--<ul class="multi-column-dropdown">--}}
                            {{--@foreach($category['children'] as $url => $category)--}}
                                {{--<li><a class="list" href="/{{$url}}"> {{$category}}</a></li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</ul>--}}
        {{--</li>--}}
    {{--@else--}}

        {{--<li class="dropdown">--}}
            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Торты<b class="caret"></b></a>--}}
            {{--<ul class="dropdown-menu multi-column columns-4">--}}
                {{--<div class="row">--}}
                    {{--@foreach($category as $url => $categor)--}}
                        {{--<div class="col-sm-4">--}}
                            {{--<h4>{{$categor['name']}}</h4>--}}
                            {{--<ul class="multi-column-dropdown">--}}
                                {{--@foreach($categor['children'] as $url => $category)--}}
                                    {{--<li><a class="list" href="/{{$url}}"> {{$category}}</a></li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--</ul>--}}
        {{--</li>--}}
    {{--@endif--}}

{{--@endforeach--}}

<li class="dropdown grid">
    <a href="#" class="dropdown-toggle list1" data-toggle="dropdown">ИЗ БД <b class="caret"></b></a>
    <ul class="dropdown-menu multi-column columns-1">
        <div class="row">
            <div class="col-sm-10">
                <ul class="multi-column-dropdown">
                    @foreach(\App\Category::all()  as  $category)
                        <li><a class="list"
                               href="{{route('categories.index',['slug'=>$category->slug])}}"> {{$category->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </ul>
</li>
@endforeach