
@extends('member')
@section('title')
Profile - Reset
@endsection
@section('page-id')
profile-reset @endsection
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
                            @include('layouts.alert')
                            <form action="{{ url('profile/update_password') }}" method="POST">
                                    @csrf
                                   <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                   <input type="text" class="form-control" name="password" value="{{ old('password') }}" required placeholder="Insert Your New Password">

                                <br>
                                <input type="submit" class="btn btn-primary" value="Update">
                            </form>
                        </div>
                    </div>
            </div>
    </div>

</section>
@endsection