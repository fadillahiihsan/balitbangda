<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $beritas = Berita::latest()->paginate(10);
        return view('berita.index', compact('beritas'));
    }
    /**
     * create
     * 
     * @return void
     */
    public function create()
    {
        return view('berita.create');
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
            'content'   => 'required',
            'tanggal'   => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/images', $image->hashName());


        $beritas = Berita::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content,
            'tanggal'   => $request->tanggal
        ]);

        if($beritas){
            //redirect dengan pesan sukses
            return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('berita.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    /**
    * edit
    *
    * @param  mixed $berita
    * @return void
    */
    public function edit(Berita $beritum)
    {
        return view('berita.edit', compact('beritum'));
    }
    
    
    /**
    * update
    *
    * @param  mixed $request
    * @param  mixed $berita
    * @return void
    */
    public function update(Request $request, Berita $beritum)
    {
        $this->validate($request, [
            'title'     => 'required',
            'content'   => 'required'
        ]);
    
        //get data Blog by ID
        $beritum = Berita::findOrFail($beritum->id);
    
        if($request->file('image') == "") {
    
            $beritum->update([
                'title'     => $request->title,
                'content'   => $request->content,
                'tanggal'   => $request->tanggal
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/images/'.$beritum->image);
    
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/images', $image->hashName());
    
            $beritum->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content,
                'tanggal'   => $request->tanggal
            ]);
    
        }
    
        if($beritum){
            //redirect dengan pesan sukses
            return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('berita.index')->with(['error' => 'Data Gagal Diupdate!']);
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
      $beritum = Berita::findOrFail($id);
      Storage::disk('local')->delete('public/images/'.$beritum->image);
      $beritum->delete();
    
      if($beritum){
         //redirect dengan pesan sukses
         return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Dihapus!']);
      }else{
        //redirect dengan pesan error
        return redirect()->route('berita.index')->with(['error' => 'Data Gagal Dihapus!']);
      }
    }
}