@extends('layout')
@section('content')
    <div class="col-2">
        @if(isset($listCategory) && count($listCategory) > 0)
            <div class="list-group">
                    <a href="{{route('category')}}"
                       class="list-group-item list-group-action
                           @if(0 == $idcategory) active @endif ">All</a>
                    @foreach($listCategory as $cats)
                        <a href="{{route('category_id', ['idcategory'=> $cats->id] )}}"
                           class="list-group-item list-group-action
                           @if($cats->id == $idcategory) active @endif ">
                            {{$cats->category}}</a>
                    @endforeach
            </div>
        @endif
    </div>
    <div class="col-10">
        @include('_products', ['list' => $list])
    </div>
@endsection
