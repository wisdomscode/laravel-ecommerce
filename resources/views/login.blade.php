@extends('base')

@section('content')
<div class="container mt-5 login-custom">
    <div class="row">
        <div class="col">
            <form action="login" method="post">
                @csrf
                <div class="form-group m-3">
                    <label for="">Name</label>
                    <input type="email" name="email" id="" class="form-control">
                </div>
                <div class="form-group m-3">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" class="form-control">
                </div>
                <div class="m-3">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection