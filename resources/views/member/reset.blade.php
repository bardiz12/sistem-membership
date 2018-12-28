
@extends('member')
@section('title')

@endsection
@section('content')
<section id="content">
    <div class="wrap">
            <div class="row">
                    <div class="col-lg-4">
                        @include('member.template.nav-profile')
                    </div>
                    <div class="col-lg-8">
                        <div class="right">
                            <h2>Password Reset</h2>
                            <form action="{{ route('password.email') }}" method="POST">
                                    @csrf
                                   
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                <br>
                                <input type="submit" class="btn btn-primary" value="Send Password Reset Link">
                            </form>
                        </div>
                    </div>
            </div>
    </div>

</section>
@endsection