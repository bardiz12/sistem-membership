@extends('member')
@section('title')
Dashboard | Event Diikuti
@endsection
@section('page-id')
dashboard-my-event @endsection
@section('content')
<section id="content">
    <div class="wrap">
            <div class="row">
                    <div class="col-lg-4">
                        @include('member.template.nav-dashboard')
                    </div>
                    <div class="col-lg-8">
                        <div class="right">                            
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    Event :
                                    <br/>
                                    <div class="list-group">
                                        @foreach($events->items() as $i => $item)
                                        <div class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <h5 class="mb-1">{{$item->nama_event}}</h5>
                                                    <hr>
                                                    <p class="text-justify">
                                                        {{$item->description}}
                                                        <br/>
                                                        <small>
                                                                <i class="fa fa-calendar"></i> 
                                                                {{date('d-M-Y',strtotime($item->tanggal_mulai_event))}} - {{date('d-M-Y',strtotime($item->tanggal_berakhir_event))}}
                                                                </small>
                                                                <small style="margin-left: 10px;">
                                                                    <i class="fa fa-users"></i>
                                                                    <?php
                                                                    echo count($item->peserta()->get());
                                                                    ?> Pendaftar
                                                                    <i class="fa fa-users"></i>
                                                                    <?php
                                                                    echo count($item->peserta()->where('accepted','=','1')->get());
                                                                    ?> Terdaftar
                                                        </small>
                                                    </p>
                                                    
                                                </div>
                                                <div class="col-md-3 align-items-center">
                                                        @if($item->alreadyRegister()->accepted)
                                                            <i class="fa fa-check"></i> Sudah terdaftar 
                                                            <br>
                                                            <span class="badge badge-success small">{{date('d-M-Y', strtotime($item->alreadyRegister()->updated_at))}}</span>
                                                            
                                                        @else
                                                            <i class="fa fa-clock-o"></i> Dalam antrian
                                                            
                                                        @endif
                                                        
                                                </div>
                                            </div>
                                            <!--<div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">{{$item->nama_event}}</h5>
                                            <small><button class="btn btn-primary btn-sm">Daftar</button></small>
                                            </div>
                                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                            <small>Donec id elit non mi porta.</small>-->
                                        </div>
                                        @endforeach

                                        
                                    </div>
                                    <div class="my-1 d-flex justify-content-center"  style="margin-top:10px;">
                                    
                                    {!! $events->render() !!}
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="col-md-4">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </div>

</section>    
@endsection
