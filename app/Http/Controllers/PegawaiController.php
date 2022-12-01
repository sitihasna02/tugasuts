<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cobas = pegawai::all();
        return view('pegawai.index', compact('cobas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crud = new pegawai;
        return view('pegawai.create', compact('crud'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crud = new pegawai;
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->gelar = $request->gelar;
        $crud->jurusan = $request->jurusan;
        $crud->nip = $request->nip;
        $crud->tnggal_lahir = $request->tnggal_lahir;
        $crud->save();

        return redirect('pegawai');
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
        $crud = pegawai::find($id);
        return view('pegawai.edit', compact('crud'));
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
        $crud = pegawai::find($id);
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->gelar = $request->gelar;
        $crud->jurusan = $request->jurusan;
        $crud->nip = $request->nip;
        $crud->tnggal_lahir = $request->tnggal_lahir;
        $crud->save();

        return redirect('pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud = pegawai::find($id);
        $crud->delete();
        return redirect('pegawai');
    }
}
