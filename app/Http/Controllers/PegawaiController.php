<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePegawaiRequest;
use App\Http\Requests\StorePegawaiRequest;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pegawais = DB::table('pegawais')
        ->when($request->input('pegawai_name'), function ($query, $name) {
            return $query->where('pegawai_name', 'like', '%' . $name . '%');
        })
        ->select('id', 'npwp','pegawai_name','no_ktp','alamat_ktp','ttl','jns_kelamin','email','phone','phone_perusahaan','no_npwp','kependudukan',
        DB::raw('DATE_FORMAT(created_at, "%d %M %Y")
         as created_at'))
        ->orderBy('id', 'asc')
        ->paginate(15);
    return view('pages.pegawais.index', compact('pegawais'));
    }
   

    /**
     * Store a newly created resource in storage.
     */

    public function create(){
        return view('pages.pegawais.create');
    }

    public function store(StorePegawaiRequest $request)
    {
        Pegawai::create([
            'npwp'=> $request['npwp'],
            'pegawai_name'=> $request['pegawai_name'],
            'no_ktp'=> $request['no_ktp'],
            'alamat_ktp'=> $request['alamat_ktp'],
            'ttl'=> $request['ttl'],
            'jns_kelamin'=> $request['jns_kelamin'],            
            'email'=> $request['email'],
            'phone'=> $request['phone'],
            'phone_perusahaan'=> $request['phone_perusahaan'],            
            'no_npwp'=> $request['no_npwp'],
            'kependudukan'=> $request['kependudukan'],
        ]);
        return redirect(route('pegawai.index'))->with('success', 'New Pegawai Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pages.pegawais.edit')->with('pegawai', $pegawai);
    }

    public function update(UpdatePegawaiRequest $request, Pegawai $pegawai)
    {
        $validate = $request->validated();
        $pegawai->update($validate);
        return redirect()->route('pegawai.index')->with('success', 'Edit Pegawai Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawai.index')->with('success', 'Delete Pegawai Successfully');
    }
}
