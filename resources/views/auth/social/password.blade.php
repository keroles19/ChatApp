@extends('layouts.app')

@section('title') renew Password  @endsection

@section('content')

    <div class="container mt-5" id="app">
        <div class="d-flex justify-content-center h-100">
            <div class="card pt-5">
                <div class="card-header">
                    <h3>Create Password</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('createPassword') }}">
                        @csrf
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password" value="{{ old('password') }}"  autocomplete="password"
                                   autofocus placeholder="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation"  placeholder="confirm password" >
                        </div>
                        <div class="form-group pt-5">
                            <input type="submit" value="save" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





@endsection
