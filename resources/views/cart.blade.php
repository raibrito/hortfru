@extends('layout')
@section('content')
    <h3>Cart</h3>

    @if(isset($cart) && count($cart) > 0)
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Photo</th>
                <th>Value</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cart as $index => $p)
            <tr>
                <td>
                    <a href="{{route('cart_delete', ['index'=>$index])}}" class="btn btn-danger btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </a>
                </td>
                <td>{{$p->name}}</td>
                <td><img src="{{asset($p->photo)}}" height="50px"></td>
                <td>${{$p->value}} kg</td>
                <td>{{$p->description}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <p>No items added to cart</p>
    @endif
@endsection
