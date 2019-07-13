


    @foreach ($categories->where('parent_id',0) as $cat)


        <li class="dropdown grid">
            <a href="{{route('categories',['slug'=>$cat->slug])}}" class="dropdown-toggle list1"
               data-toggle="dropdown">{{$cat->name}} <b class="caret"></b></a>
            <ul class="dropdown-menu multi-column columns-1">
                <div class="row">
                    <div class="col-sm-10">
                        <ul class="multi-column-dropdown">
                            @if ( $cat->child()->count()>0)
                                @foreach ($cat->child()->get() as $cat2)


                                    <li><a class="list"
                                           href="{{route('categories',['slug'=>$cat2->slug])}}"> {{$cat2->name}}</a>
                                @endforeach
                            @endif
                                    </li>
                                    </li>
    
                        </ul>
                    </div>
                </div>
            </ul>
        </li>
@endforeach


@section('footer')
@stop
