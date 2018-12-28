@extends('member')
@section('title')
Member | Profile
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
                            <h3>Personal Information</h3>
                            <form action="{{url('profile/edit')}}" method="POST" >
                                @csrf
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}"  required><br>
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}" required><br>
                                <div class="form-group">
                                        <label class="" style="display:block;width:100%;" for="telepon">Telepon</label>
                                        <div class="">
                                            <input type="text" id="telepon" class="form-control {{ !isset(Auth::user()->detail->telepon) ? ' is-invalid' : '' }}" name="telepon" value="{{isset(Auth::user()->detail->telepon) ? Auth::user()->detail->telepon : ''}}" required/>
                                            @if(!isset(Auth::user()->detail->telepon))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>No Hp belum diisi</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                <label for="">Alamat</label>
                                <textarea id="alamat" class="form-control {{ !isset(Auth::user()->detail->alamat) ? ' is-invalid' : '' }}" name="alamat" required>{{isset(Auth::user()->detail->alamat) ? Auth::user()->detail->alamat : ''}}</textarea>
                                @if(!isset(Auth::user()->detail->alamat))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Alamat belum diisi</strong>
                                    </span>
                                @endif
                                <br>

                                <input type="submit" class="btn btn-primary" value="Update">
                            </form>
                        </div>
                    </div>
            </div>
    </div>

</section>    
@endsection
