
@extends('member')
@section('title')

@endsection
@section('content')
<section id="content">
    <div class="wrap">
            <div class="row">
                    <div class="col-lg-4">
                        <div class="left">
                            <ul>
                                <li><a href="">Account</a></li>
                                <li><a href="">Email & Text Update</a></li>
                                <li><a href="">Password</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="right">
                            <h2>Password Reset</h2>
                            <form action="">
                                <input type="text" class="form-control" placeholder="Email Address"><br>
                                <input type="submit" class="btn btn-primary" value="Send Password Reset Link">
                            </form>
                        </div>
                    </div>
            </div>
    </div>

</section>
@endsection