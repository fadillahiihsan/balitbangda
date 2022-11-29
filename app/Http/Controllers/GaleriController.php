<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $galeris = Galeri::latest()->paginate(10);
        return view('galeri.index', compact('galeris'));
    }
    /**
     * create
     * 
     * @return void
     */
    public function create()
    {
        return view('galeri.create');
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
            'title'     => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/images', $image->hashName());

        $galeris = Galeri::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content,
            'tanggal'   => $request->tanggal
        ]);

        if($galeris){
            //redirect dengan pesan sukses
            return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    
    /**
    * edit
    *
    * @param  mixed $berita
    * @return void
    */
    public function edit(Galeri $galeri)
    {
        return view('galeri.edit', compact('galeri'));
    }
        
    /**
    * update
    *
    * @param  mixed $request
    * @param  mixed $galeri
    * @return void
    */
    public function update(Request $request, Galeri $galeri)
    {
        $this->validate($request, [
            'title'     => 'required',
        ]);
    
        //get data Blog by ID
        $galeri = Galeri::findOrFail($galeri->id);
    
        if($request->file('image') == "") {
    
            $galeri->update([
                'title'     => $request->title
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/images/'.$galeri->image);
    
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/images', $image->hashName());
    
            $galeri->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content,
                'tanggal'   => $request->tanggal
            ]);
    
        }
    
        if($galeri){
            //redirect dengan pesan sukses
            return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Diupdate!']);
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
      $galeri = Galeri::findOrFail($id);
      Storage::disk('local')->delete('public/images/'.$galeri->image);
      $galeri->delete();
    
      if($galeri){
         //redirect dengan pesan sukses
         return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Dihapus!']);
      }else{
        //redirect dengan pesan error
        return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Dihapus!']);
      }
    }
}