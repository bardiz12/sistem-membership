@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile Edit</div>

                <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="id" class="col-md-2 col-form-label text-md-right">id</label>
                            <div class="col-md-6">
                                <input id="ID" type="email" class="form-control" name="id" value="{{Auth::user()->id}}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{Auth::user()->name}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{Auth::user()->email}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-2 col-form-label text-md-right">Alamat</label>
                            <div class="col-md-6">
                                <textarea id="alamat" class="form-control {{ !isset(Auth::user()->detail->alamat) ? ' is-invalid' : '' }}" name="alamat" required>{{isset(Auth::user()->detail->alamat) ? Auth::user()->detail->alamat : ''}}</textarea>
                                @if(!isset(Auth::user()->detail->alamat))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Alamat belum diisi</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-2 col-form-label text-md-right">Telepon</label>
                            <div class="col-md-6">
                                <input type="text" id="telepon" class="form-control {{ !isset(Auth::user()->detail->alamat) ? ' is-invalid' : '' }}" name="telepon" value="{{isset(Auth::user()->detail->telepon) ? Auth::user()->detail->telepon : ''}}" required/>
                                @if(!isset(Auth::user()->detail->alamat))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>No Hp belum diisi</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
