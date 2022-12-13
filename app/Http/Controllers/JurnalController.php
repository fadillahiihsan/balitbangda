<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class JurnalController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $jurnals = Jurnal::latest()->paginate(10);
        return view('jurnal.index', compact('jurnals'));
    }
    /**
     * create
     * 
     * @return void
     */
    public function create()
    {
        return view('jurnal.create');
    }
    /**
     * store
     * 
     * @param mixed $request
     * @return void
     */
    
     public function store(Request $request)
     {
         $this->validate($request, [
             'image'     => 'required|image|mimes:png,jpg,jpeg',
             'title'     => 'required',
             'penerbit'  => 'required',
             'no'        => 'required',
             'tahun'     => 'required',
             'deskripsi' => 'required',
             'content'   => 'required'
         ]);
 
         //upload image
         $image = $request->file('image');
         $image->storeAs('public/images', $image->hashName());
 
 
         $jurnal = Jurnal::create([
             'image'     => $image->hashName(),
             'title'     => $request->title,
             'penerbit'  => $request->penerbit,
             'no'        => $request->no,
             'tahun'     => $request->tahun,
             'deskripsi' => $request->deskripsi,
             'content'   => $request->content
         ]);
 
         if($jurnal){
             //redirect dengan pesan sukses
             return redirect()->route('jurnal.index')->with(['success' => 'Data Berhasil Disimpan!']);
         }else{
             //redirect dengan pesan error
             return redirect()->route('jurnal.index')->with(['error' => 'Data Gagal Disimpan!']);
         }
     }
     /**
    * edit
    *
    * @param  mixed $jurnal
    * @return void
    */
    public function edit(Jurnal $jurnal)
    {
        return view('jurnal.edit', compact('jurnal'));
    }
    /**
    * update
    *
    * @param  mixed $request
    * @param  mixed $jurnal
    * @return void
    */
    public function update(Request $request, Jurnal $jurnal)
    {
        $this->validate($request, [
             'title'     => 'required',
             'penerbit'  => 'required',
             'no'        => 'required',
             'tahun'     => 'required',
             'deskripsi' => 'required',
             'content'   => 'required'
        ]);
    
        //get data Blog by ID
        $jurnal = Jurnal::findOrFail($jurnal->id);
    
        if($request->file('image') == "") {
    
            $jurnal->update([
             'title'     => $request->title,
             'penerbit'  => $request->penerbit,
             'no'        => $request->no,
             'tahun'     => $request->tahun,
             'deskripsi' => $request->deskripsi,
             'content'   => $request->content
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/images/'.$jurnal->image);
    
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/images', $image->hashName());
    
            $jurnal->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'penerbit'  => $request->penerbit,
                'no'        => $request->no,
                'tahun'     => $request->tahun,
                'deskripsi' => $request->deskripsi,
                'content'   => $request->content
            ]);
    
        }
    
        if($jurnal){
            //redirect dengan pesan sukses
            return redirect()->route('jurnal.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('jurnal.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
     /**
    * destroy
    *
    * @param  mixed $id
    * @return void
    */
    public function destroy($id)
    {
      $jurnal = Jurnal::findOrFail($id);
      Storage::disk('local')->delete('public/images/'.$jurnal->image);
      $jurnal->delete();
    
      if($jurnal){
         //redirect dengan pesan sukses
         return redirect()->route('jurnal.index')->with(['success' => 'Data Berhasil Dihapus!']);
      }else{
        //redirect dengan pesan error
        return redirect()->route('jurnal.index')->with(['error' => 'Data Gagal Dihapus!']);
      }
    }
   
}
