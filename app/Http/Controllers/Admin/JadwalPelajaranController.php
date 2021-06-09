<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\JadwalPelajaran;

class JadwalPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagename = 'Data Kendaraan 172';
        $data = JadwalPelajaran::all();
        return view('admin/JadwalPelajaran/index', compact('pagename', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pagename = 'Masukkan data kendaraan172';
        return view('admin/JadwalPelajaran/create', compact('pagename'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);

        $request->validate([
            'no_plat' => 'required',
            'merk_kendaraan' => 'required',
            'nama_pemilik' => 'required',
        ]);

        $jadwalpelajaran = new JadwalPelajaran([

            'no_plat' => $request->get('no_plat'),
            'merk_kendaraan' => $request->get('merk_kendaraan'),
            'nama_pemilik' => $request->get('nama_pemilik'),
        ]);


        $jadwalpelajaran->save();
        return redirect('admin\jadwalpelajaran')->with('sukses', 'data kendaraan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data_jadwal = JadwalPelajaran::all();
        $pagename = 'update data Kendaraan172';
        $data = JadwalPelajaran::find($id);
        return view('admin.jadwalpelajaran.edit', compact('pagename', 'data', 'data_jadwal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'no_plat' => 'required',
            'merk_kendaraan' => 'required',
            'nama_pemilik' => 'required',
        ]);

        $jadwalpelajaran = JadwalPelajaran::find($id);

        $jadwalpelajaran->no_plat = $request->get('no_plat');
        $jadwalpelajaran->merk_kendaraan = $request->get('merk_kendaraan');
        $jadwalpelajaran->nama_pemilik = $request->get('nama_pemilik');


        $jadwalpelajaran->save();
        return redirect('admin\jadwalpelajaran')->with('sukses', 'data kendaraan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tugas = JadwalPelajaran::find($id);

        $tugas->delete();
        return redirect('admin/jadwalpelajaran')->with('sukses', 'data kendaraan berhasil dihapus');
    }
}
