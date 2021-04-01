<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

use App\Siswa;

class SiswaController extends Controller
{
    public function index()
    {

    	$siswa = Siswa::all();
        return view('pendaftaran.index',compact('siswa'));
    }

    public function create()
    {
        return view('pendaftaran.create');
    }

    public function store(Request $request)
    {

    	$this->validate($request,[
    		'nis' => 'required',
    		'nama' =>'required',
    		'jns_kelamin' =>'required',
    		'tmp_lahir' =>'required',
    		'tgl_lahir' =>'required',
    		'alamat' =>'required',
    		'asal_sekola' =>'required',
    		'kelas' =>'required',
    		'jurusan' =>'required'

    	]);

    	Siswa::create([
    		'nis' => $request ->nis,
			'nama' => $request ->nama,
			'jns_kelamin' => $request ->jns_kelamin,
			'tmp_lahir' => $request ->tmp_lahir,
			'tgl_lahir' => $request ->tgl_lahir,
			'alamat' => $request ->alamat,
			'asal_sekola' => $request ->asal_sekola,
			'kelas' => $request ->kelas,
			'jurusan' => $request ->jurusan
    	]);
        return redirect(route('siswa.index'));
    }

    public function edit($id)
    {

    	$siswa = Siswa::find($id);
    	return view('pendaftaran.edit',compact('siswa'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'nis' => 'required',
            'nama' =>'required',
            'jns_kelamin' =>'required',
            'tmp_lahir' =>'required',
            'tgl_lahir' =>'required',
            'alamat' =>'required',
            'asal_sekola' =>'required',
            'kelas' =>'required',
            'jurusan' =>'required'

        ]);

        Siswa::where('id',$id)->update([
            'nis' => $request ->nis,
            'nama' => $request ->nama,
            'jns_kelamin' => $request ->jns_kelamin,
            'tmp_lahir' => $request ->tmp_lahir,
            'tgl_lahir' => $request ->tgl_lahir,
            'alamat' => $request ->alamat,
            'asal_sekola' => $request ->asal_sekola,
            'kelas' => $request ->kelas,
            'jurusan' => $request ->jurusan
        ]);
        return redirect(route('siswa.index'));

    }

	public function delete($id)
	{
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect()->back();
    }
}


