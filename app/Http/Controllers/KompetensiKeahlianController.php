<?php

namespace App\Http\Controllers;

use App\Models\KompetensiKeahlian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KompetensiKeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kompetensi_keahlian.index', [
            'kompetensikeahlian' => KompetensiKeahlian::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kompetensi_keahlian.create-or-edit',['act'=>'create']);
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
            'nama' => 'required',
            'kaprog_id' => 'required',
            'sambutan' => 'required',
            'tentang'=>'required',

        ]);


    $file = $request->file('gambar');
    $thumbname = time() . '-' . $file->getClientOriginalName();
    $file->move(public_path() . '/thumbKompetensi' . '/', $thumbname);

        KompetensiKeahlian::create([
            'nama' => $request->nama,
            'kaprog_id' => $request->kaprog_id,
            'thumb' => $thumbname,
            'sambutan' => $request->sambutan,
            'slug' => $request->slug,
            'tentang' => $request->tentang,
        ]);

        return redirect()->route('kompetensikeahlian.index')->with(['message'=>'KompetensiKeahlian berhasil ditambahkan','status'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KompetensiKeahlian  $kompetensi_keahlian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = KompetensiKeahlian::find($id);
        return view('kompetensi_keahlian.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KompetensiKeahlian  $kompetensi_keahlian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = KompetensiKeahlian::find($id);
        return view('kompetensi_keahlian.create-or-edit', [
            'data' => $data,
            'act' => 'edit'
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KompetensiKeahlian  $kompetensi_keahlian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $thumbname = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/thumbKompetensi' . '/', $thumbname);


        KompetensiKeahlian::where('id', $id)
        ->update([
            'nama' => $request->nama,
            'kaprog_id' => $request->kaprog_id,
            'thumb' => $thumbname,
            'sambutan' => $request->sambutan,
            'slug' => $request->slug,
            'tentang' => $request->tentang,
        ]);

        }else {

            KompetensiKeahlian::where('id', $id)
            ->update([
                'nama' => $request->nama,
                'kaprog_id' => $request->kaprog_id,

                'sambutan' => $request->sambutan,
                'slug' => $request->slug,
                'tentang' => $request->tentang,
            ]);

        }


        return redirect()->route('kompetensikeahlian.index')->with(['message'=>'KompetensiKeahlian berhasil di update','status'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KompetensiKeahlian  $kompetensi_keahlian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        KompetensiKeahlian::destroy($id);
        return redirect()->route('kompetensikeahlian.index')->with(['message'=>'KompetensiKeahlian berhasil di delete','status'=>'success']);
    }
}
