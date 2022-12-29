<?php

namespace App\Http\Controllers;

use App\Models\categoriesM;
use Illuminate\Http\Request;

class categoriesC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = categoriesM::latest()->get();
        return view ('categories.show',compact('show'));
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
        $validatedData = $request->validate([
            'nama'=>'required'
        ]);
        categoriesM::create($validatedData);
        toast('Jenis Barang Ditambahkan!','success');
        if ($validatedData) {
            return redirect()
            ->route('jenis_barang.index');
            # code...
        }
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
        $show = categoriesM::findOrFail($id);

        return view ('categories.update',compact('show'));
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
        $rules = [
            'nama' =>'required',

        ];

        $validatedData = $request->validate($rules);
       categoriesM::where('id',$id)
        ->update($validatedData);
        toast('Jenis Barang DiUpdate!','success');


        if ($validatedData) {
            return redirect()
            ->route('jenis_barang.index')
            ->with([
                'Success'=> 'Data berhasil dimasukan'
            ]);
          } else {
              return redirect()
              ->back()
              ->withInput()
              ->with([
                  'error'=>"data bermasalah,silahkan coba kembali"
              ]);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $show = categoriesM::latest()->get();
        $hapus = categoriesM::findOrFail($id);
        $hapus->delete();
        toast('Jenis Barang dihapus!','warning');
        if ($hapus) {
            return redirect()
            ->route('jenis_barang.index')
            ->with([
                'Success'=> 'Data berhasil dihapus'
            ]);
          } else {
              return redirect()
              ->back()
              ->withInput()
              ->with([
                  'error'=>"data bermasalah,silahkan coba kembali"
              ]);
          }

    }
    }

