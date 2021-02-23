<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $pegawai = Pegawai::where('pegawai_nm', 'LIKE', '%' . $request->cari . '%')->paginate(5);
        } else {
            $pegawai = Pegawai::orderBy('pegawai_nm', 'Asc')->paginate(5);
        }

        // dd($pegawai);
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'pegawai_nm'  => 'required||string',
            'jk' => 'required',
            'agama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
            'devisi' => 'required',
        ], [
            'pegawai_nm.required' => 'Nama Product Harus Di Isi',
            'jk.required' => 'Jenis Kelamain Harus Di Isi',
            'agama.required' => 'Agama Harus Di Isi',
            'tmp_lahir.required' => 'Tempat Lahir Harus Di Isi',
            'tgl_lahir.required' => 'Tanggal Lahir Harus Di Isi',
            'alamat.required' => 'Alamat Harus Di Isi',
            'jabatan.required' => 'Jabatan Harus Di Isi',
            'devisi.required' => 'Devisi Harus Di Isi',
        ]);

        $pegawai = Pegawai::create($request->all());
        return redirect()->route('pegawai.index')->with('sukses', 'Data berhasil diinput');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        // dd($pegawai);
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'pegawai_nm'  => 'required||string',
            'jk' => 'required',
            'agama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
            'devisi' => 'required',
        ], [
            'pegawai_nm.required' => 'Nama Product Harus Di Isi',
            'jk.required' => 'Jenis Kelamain Harus Di Isi',
            'agama.required' => 'Agama Harus Di Isi',
            'tmp_lahir.required' => 'Tempat Lahir Harus Di Isi',
            'tgl_lahir.required' => 'Tanggal Lahir Harus Di Isi',
            'alamat.required' => 'Alamat Harus Di Isi',
            'jabatan.required' => 'Jabatan Harus Di Isi',
            'devisi.required' => 'Devisi Harus Di Isi',
        ]);
        Pegawai::findOrFail($id)->update($request->all());
        return redirect()->route('pegawai.index')->with('sukses', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = \App\Pegawai::find($id);
        $pegawai->delete($id);
        return redirect()->route('pegawai.index')->with('sukses', 'Data berhasil dihapus');
    }
}
