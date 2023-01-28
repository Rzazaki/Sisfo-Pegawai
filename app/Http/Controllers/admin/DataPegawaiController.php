<?php

namespace App\Http\Controllers\admin;

use App\Models\UnitKerja;
use App\Models\DataPegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\DataPegawaiRequest;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class DataPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Pegawai';
        $pegawai    = DataPegawai::all();
        // return $pegawai;

        return view('pages.admin.data-pegawai.index', compact('title', 'pegawai'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Data Pegawai';
        $dataunit   = UnitKerja::all();

        // return ($dataunit);
        return view('pages.admin.data-pegawai.create', compact('title', 'dataunit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataPegawaiRequest $request)
    {
        // $message []
        // dd($request);
        // return $request;
        $slug = str_replace('', '-', $request->nama);
        $data = $request->all();
        $data['slug'] = $slug;
        // $slug = preg_replace('/[^A-Za-z0-9\-]/', '', $slug);
        // return $data['slug'];

        // $data['slug'] = Auth::user()->slug; 

        DataPegawai::create($data);

        // $request->session()->flash('success', 'Data berhasil disimpan!');
        
        return redirect()->back('pegawai')->with('success', 'Data berhasil ditambahkan!');
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
    }
}
