@extends('layout.master')
@section('title','Pegawai')
@section('content')
    @if(session('sukses'))
    <div class="alert alert-success alert-dismissible m-2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-check-circle"></i>
        {{session('sukses')}}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Please check the form below for errors
    </div>
    @endif

    <div class="mt-5">
        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            @method('PUT')
            <div class="form-group">
                <label for="pegawai_nm">Nama</label>
                <input name="pegawai_nm" type="text" class="form-control" value="{{ $pegawai->pegawai_nm }}" id="pegawai_nm">
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin</label><br>
                <select name="jk" class="form-control">
                    <option value="">-Pilih-</option>
                    <option @if($pegawai->jk =="L") selected @endif value="L">Laki-Laki</option>
                    <option @if($pegawai->jk =='P') selected @endif value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <input name="agama" type="text" value="{{ $pegawai->agama }}" class="form-control" id="agama">
            </div>
            <div class="form-group">
                <label for="tmp_lahir">Tempat Lahir</label>
                <input name="tmp_lahir" type="text" class="form-control" id="tmp_lahir"value="{{ $pegawai->tmp_lahir }}">
            </div>
            <div class="form-group">
                <label for="nama">Tanggal Lahir</label>
                <input name="tgl_lahir" value="{{ $pegawai->tgl_lahir }}" type="text" class="form-control" id="date">
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input name="jabatan" type="text" value="{{ $pegawai->jabatan }}" class="form-control" id="jabatan">
            </div>
            <div class="form-group">
                <label for="devisi">Devisi</label>
                <input name="devisi" type="text" value="{{ $pegawai->devisi }}" class="form-control" id="devisi">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input name="alamat" type="text" value="{{ $pegawai->alamat }}" class="form-control" id="alamat">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



@endsection

