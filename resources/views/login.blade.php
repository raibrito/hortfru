@extends('layout')
@section('content')

            <div class="col-md-6">

                <h2 class="mb-3">Login</h2>

                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        Login:
                        <input type="text" name="login" class="form-control">
                    </div>
                    <div class="form-group">
                        Password:
                        <input type="password" name="password" class="form-control">
                    </div>
                    <input type="submit" value="Enter" class="btn btn-lg btn-primary">
                </form>
            </div>

@endsection
