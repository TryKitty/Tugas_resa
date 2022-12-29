<?php

namespace App\Http\Controllers;

use App\Models\categoriesM;
use App\Models\productM;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
class qtasnimC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


             $showw = categoriesM::latest()->get();
             $show = productM::where([
                ['nama_barang', '!=', Null],
                [function ($query) use ($request) {
                    if (($s = $request->s)) {
                        $query->orWhere('nama_barang', 'LIKE', '%' . $s . '%')
                            ->orWhere('tanggal_transaksi', 'LIKE', '%' . $s . '%')
                            ->get();
                    }
                }]
            ])->paginate();

        return view ('home.show',compact('show','showw'));
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
            'categories_id'=>'required',
            'nama_barang'=>'required',
            'stok'=>'required',
            'jumlah_terjual'=>'required',
            'tanggal_transaksi'=>'required'
        ]);

        productM::create($validatedData);
        toast('Your Menu as been submited!','success');


        if ($validatedData) {
            return redirect()
            ->route('barang.index')
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
        $show = productM::findOrFail($id);
        $showw = categoriesM::latest()->get();
     return view ('home.update',compact('show','showw'));
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
            'categories_id'=>'required',
            'nama_barang'=>'required',
            'stok'=>'required',
            'jumlah_terjual'=>'required',
            'tanggal_transaksi'=>'required'

        ];

        $validatedData = $request->validate($rules);
        productM::where('id',$id)
        ->update($validatedData);
        toast('Barang telah di uupdate!','success');


        if ($validatedData) {
            return redirect()
            ->route('barang.index')
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
        $hapus = productM::findOrFail($id);
        $hapus->delete();
        toast('Your Menu as been deleted!','warning');
        if ($hapus) {
            return redirect()
            ->route('barang.index')
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
    }

