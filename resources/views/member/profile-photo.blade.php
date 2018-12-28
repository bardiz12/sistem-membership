@extends('member')
@section('title')
Member | Profile Photo
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
                            <h2>User Profiles</h2>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="frame">

                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <form action=""><br>
                                        <label for="">Upload a new photo</label><br>
                                        <input type="file" placeholder="Upload a New Photo"><br><br>
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </div>

</section>    
@endsection
