<?php

namespace App\Http\Controllers\Api;

Use App\Models\Friends;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $friends = Friends::with('groups')->whereHas('groups')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data Sepatu',
            'data'    => $friends
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $friend = Friends::with('groups')->where('id', $id)->first();

    return response()->json([
        'success' => true,
        'message' => 'Edit Barang',
        'data'    => $friend
    ], 200);
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
        $friend = Friends::find($id)
        ->update([
            'namasepatu' => $request->namabarang,
            'harga' => $request->stock,
            'stock' => $request->keterangan, 
            'groups_id' => $request->groups_id, 
        ]);
        return response()->json([
            'success' =>true,
            'message' =>'Data Barang Berhasil Diubah',
            'data' => $friend
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $friend = Friends::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Hapus',
            'data'    => $friend
        ], 200);
    }
}
