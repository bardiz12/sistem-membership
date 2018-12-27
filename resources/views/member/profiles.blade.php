@extends('member')
@section('title')
Member | Profile
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
                            <h2>User Photo</h2>
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
                            </div><br>
                            <hr>
                            <h3>Personal Information</h3>
                            <form action="">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control"><br>
                                <label for="">Email</label>
                                <input type="text" class="form-control"><br>
                                <label for="">Alamat</label>
                                <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea><br>
                                <label for="">Username</label>
                                <input type="text" class="form-control"><br>
                                <input type="submit" class="btn btn-primary" value="Update">
                            </form>
                        </div>
                    </div>
            </div>
    </div>

</section>    
@endsection
