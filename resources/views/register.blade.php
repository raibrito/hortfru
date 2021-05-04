@extends('layout')
@section('scriptjs')
{{--    guarda os arqvs e deixa disponível qd necessário--}}
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
    <script>
        $(function (){
            $("#cpf").mask("000.000.000-00")
            $("#cep").mask("00.000-000")
        })
    </script>
@endsection
@section('content')
    <div class="col-12">
            <h2 class="mb-3">Register</h2>
        </div>
        <form action="{{route('register_client')}}" method="post">
            @csrf
            <div class="row">

                <div class="col-6">
                    <div class="form-group">
                        Name: <input type="text" name="name" class="form-control">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        E-mail: <input type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">

                        CPF: <input type="text" name="cpf" id="cpf" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        Password: <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <h5 class="mb-3">Address:</h5>
                </div>
                <div class="col-8">
                    <div class="form-group">
                        Road: <input type="text" name="road" class="form-control">
                    </div>
                </div>
                <div class="col-1">
                    <div class="form-group">
                        Number: <input type="number" name="number" class="form-control">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        City: <input type="text" name="city" class="form-control">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        State: <input type="text" name="state" class="form-control">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        CEP: <input type="text" name="cep" id="cep" class="form-control">
                    </div>
                </div>
            </div>
            <input type="submit" value="register" class="btn btn-success">
        </form>
@endsection
