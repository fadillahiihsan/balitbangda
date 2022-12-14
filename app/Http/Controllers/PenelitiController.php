<?php

namespace App\Http\Controllers;

use App\Models\Peneliti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PenelitiController extends Controller
{
     /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $peneliti = Peneliti::latest()->paginate(10);
        return view('peneliti.index', compact('peneliti'));
    }
    /**
     * create
     * 
     * @return void
     */
    public function create()
    {
        return view('peneliti.create');
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
             'no'        => 'required',
             'nama'      => 'required',
             'nip'       => 'required',
             'ttl'       => 'required',
             'pangkat'   => 'required',
             'jabatan'   => 'required',
             'kepakaran' => 'required'
         ]);
 
         //upload image
         $image = $request->file('image');
         $image->storeAs('public/images', $image->hashName());
 
 
         $penelitis = Peneliti::create([
             'image'     => $image->hashName(),
             'no'        => $request->no,
             'nama'      => $request->nama,
             'nip'       => $request->nip,
             'ttl'       => $request->ttl,
             'pangkat'   => $request->pangkat,
             'jabatan'   => $request->jabatan,
             'kepakaran' => $request->kepakaran
         ]);
 
         if($penelitis){
             //redirect dengan pesan sukses
             return redirect()->route('peneliti.index')->with(['success' => 'Data Berhasil Disimpan!']);
         }else{
             //redirect dengan pesan error
             return redirect()->route('peneliti.index')->with(['error' => 'Data Gagal Disimpan!']);
         }
     }
      /**
    * edit
    *
    * @param  mixed $penelitis
    * @return void
    */
    public function edit(Peneliti $peneliti)
    {
        return view('peneliti.edit', compact('peneliti'));
    }
    /**
    * update
    *
    * @param  mixed $request
    * @param  mixed $penelitis
    * @return void
    */
    public function update(Request $request, Peneliti $peneliti)
    {
        $this->validate($request, [
            'no'        => 'required',
            'nama'      => 'required',
            'nip'       => 'required',
            'ttl'       => 'required',
            'pangkat'   => 'required',
            'jabatan'   => 'required',
            'kepakaran' => 'required'
        ]);
    
        //get data Blog by ID
        $peneliti = Peneliti::findOrFail($peneliti->id);
    
        if($request->file('image') == "") {
    
            $peneliti->update([
                'no'        => $request->no,
                'nama'      => $request->nama,
                'nip'       => $request->nip,
                'ttl'       => $request->ttl,
                'pangkat'   => $request->pangkat,
                'jabatan'   => $request->jabatan,
                'kepakaran' => $request->kepakaran
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/images/'.$peneliti->image);
    
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/images', $image->hashName());
    
            $peneliti->update([
                'image'     => $image->hashName(),
                'no'        => $request->no,
                'nama'      => $request->nama,
                'nip'       => $request->nip,
                'ttl'       => $request->ttl,
                'pangkat'   => $request->pangkat,
                'jabatan'   => $request->jabatan,
                'kepakaran' => $request->kepakaran
            ]);
    
        }
    
        if($peneliti){
            //redirect dengan pesan sukses
            return redirect()->route('peneliti.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('peneliti.index')->with(['error' => 'Data Gagal Diupdate!']);
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
      $peneliti = Peneliti::findOrFail($id);
      Storage::disk('local')->delete('public/images/'.$peneliti->image);
      $peneliti->delete();
    
      if($peneliti){
         //redirect dengan pesan sukses
         return redirect()->route('peneliti.index')->with(['success' => 'Data Berhasil Dihapus!']);
      }else{
        //redirect dengan pesan error
        return redirect()->route('peneliti.index')->with(['error' => 'Data Gagal Dihapus!']);
      }
    }
}
