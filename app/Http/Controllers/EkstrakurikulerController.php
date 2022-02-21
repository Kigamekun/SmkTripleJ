<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EkstrakurikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ekstrakurikuler.index', [
            'ekstrakurikuler' => Ekstrakurikuler::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ekstrakurikuler.create-or-edit',['act'=>'create']);
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
            'pembina' => 'required',
            'jadwal' => 'required',

        ]);


    $file = $request->file('thumb');
    $thumbname = time() . '-' . $file->getClientOriginalName();
    $file->move(public_path() . '/thumbEkskul' . '/', $thumbname);

        Ekstrakurikuler::create([
            'nama' => $request->nama,
            'pembina' => $request->pembina,
            'thumb' => $thumbname,
            'jadwal' => $request->jadwal,

        ]);

        return redirect()->route('ekstrakurikuler.index')->with(['message'=>'Ekstrakurikuler Berhasil di Tambah!','status'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ekstrakurikuler  $ekstrakurikuler
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Ekstrakurikuler::find($id);
        return view('ekstrakurikuler.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ekstrakurikuler  $ekstrakurikuler
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Ekstrakurikuler::find($id);
        return view('ekstrakurikuler.create-or-edit', [
            'data' => $data,
            'act' => 'edit'
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ekstrakurikuler  $ekstrakurikuler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if ($request->hasFile('thumb')) {
            $file = $request->file('thumb');
            $thumbname = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path() . '/thumbEkskul' . '/', $thumbname);


        Ekstrakurikuler::where('id', $id)
        ->update([
            'nama' => $request->nama,
            'pembina' => $request->pembina,
            'thumb' => $thumbname,
            'jadwal' => $request->jadwal,

        ]);

        }else {

            Ekstrakurikuler::where('id', $id)
            ->update([
                'nama' => $request->nama,
                'pembina' => $request->pembina,
                'jadwal' => $request->jadwal,
            ]);

        }


        return redirect()->route('ekstrakurikuler.index')->with(['message'=>'Ekstrakurikuler Berhasil di Update!','status'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ekstrakurikuler  $ekstrakurikuler
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Ekstrakurikuler::destroy($id);
        return redirect()->route('ekstrakurikuler.index')->with(['message'=>'Ekstrakurikuler Berhasil di Delete','status'=>'success']);
    }
}
