@extends('layouts.app')

@section('content')

<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item "><a href="{{ route('siswa.index') }}">Siswa</a></li>
        <li class="breadcrumb-item active">edit</li>
    </ol>
    <form action="{{ route('siswa.update',$siswa->id) }}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                                Add New Slider
                                    <div class="float-right">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i></button>
                                    </div>
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nis">Nis</label>
                                    <input type="text" name="nis" class="form-control" value="{{$siswa->nis}}" required>
                                    <p class="text-danger">{{ $errors->first('nis') }}</p>
                                </div>

                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" required>
                                    <p class="text-danger">{{ $errors->first('nama') }}</p>
                                </div>

                                <div class="form-group">
                                    <label for="jns_kelamin">Jenis kelamin</label>
                                    <select name="jns_kelamin" id="jns_kelamin" class="form-control" required>
                                            <option value="" disabled selected>Pilih</option>
                                            <option value="laki-laki" {{($siswa->jns_kelamin == 'laki-laki') ? 'selected' : ''  }}>Laki-laki</option>
                                            <option value="perempuan" {{($siswa->jns_kelamin == 'perempuan') ? 'selected' : ''  }}>Perempuan</option>
                                    </select>
                                    <p class="text-danger">{{ $errors->first('jns_kelamin') }}</p>
                                </div>
                                
                                <div class="form-group">
                                    <label for="tmp_lahir">Tempat Lahir</label>
                                    <input type="text" name="tmp_lahir" class="form-control" value="{{ $siswa->tmp_lahir }}" required>
                                    <p class="text-danger">{{ $errors->first('tmp_lahir') }}</p>
                                </div>

                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahirr</label>
                                    <input type="date" name="tgl_lahir" class="form-control" value="{{ $siswa->tgl_lahir }}" required>
                                    <p class="text-danger">{{ $errors->first('tgl_lahir') }}</p>
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <p class="text-danger">{{ $errors->first('alamat') }}</p>
                                    <textarea name="alamat" id="textarea" class="form-control">{{ $siswa->alamat }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="asal_sekola">Asal Sekolah</label>
                                    <input type="text" name="asal_sekola" class="form-control" value="{{ $siswa->asal_sekola }}" required>
                                    <p class="text-danger">{{ $errors->first('asal_sekola') }}</p>
                                </div>

                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <input type="text" name="kelas" class="form-control" value="{{ $siswa->kelas }}" required>
                                    <p class="text-danger">{{ $errors->first('kelas') }}</p>
                                </div>

                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <input type="text" name="jurusan" class="form-control" value="{{ $siswa->jurusan }}" required>
                                    <p class="text-danger">{{ $errors->first('jurusan') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>

@endsection