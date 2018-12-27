@extends('member')
@section('title')
    Member | Agenda
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
                            <h2>Daftar Agenda</h2>
                            <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Agenda</th>
                                            <th>Tanggal</th>
                                            <th>Tempat</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Rapat Tahunan</td>
                                            <td>12 Desember 2018</td>
                                            <td>Gedung D12</td>
                                            <td>
                                                <span class="badge badge-success">Terdaftar</span>
                                            </td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#exampleModal">
                                                <span class="btn btn-secondary" >Daftar</span></a>
                                            </td>
                                            <!-- Modal -->
                                           
                                        </tr>
                                        <tr>
                                                <td>1.</td>
                                                <td>Rapat Tahunan</td>
                                                <td>12 Desember 2018</td>
                                                <td>Gedung D12</td>
                                                <td>
                                                    <span class="badge badge-secondary">Belum Terdaftar</span>
                                                </td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal">
                                                    <button class="btn btn-primary" >Daftar</button></a>
                                                </td>
                                                <!-- Modal -->
                                               
                                            </tr>
                                    </tbody>

                            </table>
                        </div>

            </div>
    </div>

</section>    
@endsection
