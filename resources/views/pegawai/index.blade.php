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
            <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-success btn-sm mt-5 mb-1"  data-toggle="modal" data-target="#exampleModal">
            Tambah Data Pegawai
        </button>
        <table class="table table-hover ">
            <thead style="background-color: paleturquoise">
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                    <th>Devisi</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no=0
                @endphp
                @foreach ($pegawai as $peg)
                @php
                    $no++
                @endphp
                    <tr class="text-center">
                        <td>{{ $no }}</td>
                        <td>{{ $peg->pegawai_nm }}</td>
                        <td>{{ $peg->jk }}</td>
                        <td>{{ $peg->agama }}</td>
                        <td>{{ $peg->tmp_lahir }}</td>
                        <td>{{ $peg->tgl_lahir }}</td>
                        <td>{{ $peg->alamat }}</td>
                        <td>{{ $peg->jabatan }}</td>
                        <td>{{ $peg->devisi }}</td>
                        <td>
                            <form action="{{ route('pegawai.destroy',$peg->id) }}" method="POST">
                                <a href="{{ route('pegawai.edit', $peg->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin mau hapus {{ $peg->pegawai_nm }}?')"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-right">{{ $pegawai->links() }}</div>
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masukan Data Dibawah Ini</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data" >
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="pegawai_nm">Nama</label>
                            <input name="pegawai_nm" type="text" class="form-control" id="pegawai_nm" aria-describedby="emailHelp" placeholder="Masukan Nama Anda" >
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label><br>
                            <select name="jk" class="form-control">
                                <option value="">-Pilih-</option>
                                <option @if(old('jk') =='L') selected @endif value="L">Laki-Laki</option>
                                <option @if(old('jk') =='P') selected @endif value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input name="agama" type="text" class="form-control" id="agama" aria-describedby="agama" placeholder="Masukan Agana Anda" >
                        </div>
                        <div class="form-group">
                            <label for="tmp_lahir">Tempat Lahir</label>
                            <input name="tmp_lahir" type="text" class="form-control" id="tmp_lahir" aria-describedby="tempat" placeholder="Masukan Tempat Lahir Anda" >
                        </div>
                        <div class="form-group">
                            <label for="nama">Tanggal Lahir</label>
                            <input name="tgl_lahir" type="text" class="form-control" id="date" aria-describedby="tanggal" placeholder="Masukan tanggal lahir Anda" >
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input name="jabatan" type="text" class="form-control" id="jabatan" aria-describedby="jabatan" placeholder="Masukan Jabatan Anda" >
                        </div>
                        <div class="form-group">
                            <label for="devisi">Devisi</label>
                            <input name="devisi" type="text" class="form-control" id="devisi" aria-describedby="devisi" placeholder="Masukan Devisi Anda" >
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input name="alamat" type="text" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="Masukan Nama Alamat Anda" >
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection

