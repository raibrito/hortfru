@extends('layout')
@section('content')
    @include('_products', ['list' => $list])
@endsection
