<?php

namespace App\Http\Controllers;

use App\Models\Friends;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class Cobacontroller extends Controller
{
    
    public function index()
    {
        
        $friends = Friends::all();
        return view('friends.index', compact('friends'));
    }

    public function create()
    {
        
        return view('friends.create');
    }

    public function edit($id)
    {
        $friends= Friends::where('id', $id)->first();
        return view ('friends.edit', ['friend' => $friends]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'namasepatu' => 'required|unique:friends|max:255',
            'harga' =>'required|numeric',
            'stock' =>'required|numeric',
            'ukuran' =>'required|numeric',
            
        ]);
        Friends::find($id)->update([
            'namasepatu' => $request->namabarang,
            'harga' => $request->stock,
            'ukuran' => $request->keterangan,
        ]);

        return redirect ('/');
    }
    public function destroy($id)
    {
        Friends::find($id)->delete();
        return redirect ('/');
    }
}


