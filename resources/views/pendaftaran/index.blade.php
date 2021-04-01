@extends('layouts.app')

@section('content')

<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active">Slider</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Page Content
                                <div class="float-right">
                                    <buttton class="btn btn-primary btn-sm" onclick="document.location.href= '{{route('siswa.create')}}'"><i class="fa fa-plus"></i></button>
                                </div>
                            </h4>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <table id="table" class="table table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>NIS</th>
                                        <th>NAMA</th>
                                        <th>KELAMIN</th>
                                        <th>TMP LAHIR</th>
                                        <th>TGL LAHIR</th>
                                        <th>ALAMAT</th>
                                        <th>ASAL SEKOLAH</th>
                                        <th>KELAS</th>
                                        <th>JURUSAN</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tablecontents">
                                	@foreach($siswa as $sis)
                                	<tr>
                                		<td>{{$sis->nis}}</td>
                                		<td>{{$sis->nama}}</td>
                                		<td>{{$sis->jns_kelamin}}</td>
                                		<td>{{$sis->tmp_lahir}}</td>
                                		<td>{{$sis->tgl_lahir}}</td>
                                		<td>{{$sis->alamat}}</td>
                                		<td>{{$sis->asal_sekola}}</td>
                                		<td>{{$sis->kelas}}</td>
                                		<td>{{$sis->jurusan}}</td>
                                		<td>
                                			<button type="button" class="btn btn-secondary btn-sm" onclick="document.location.href='{{route('siswa.edit',$sis->id)}}'"><i class="fa fa-pencil"></i></button>
                                            
                                            <button type="button" class="btn btn-danger btn-sm" onclick="document.location.href='{{route('siswa.delete',$sis->id)}}'"><i class="fa fa-trash"></i></button>
                                        </td>
                                	</tr>

                                	@endforeach
                                	
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>

@endsection