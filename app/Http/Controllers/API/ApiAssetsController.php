<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Assets;
use Exception;
use Illuminate\Http\Request;

class ApiAssetsController extends Controller
{
    public function listAssets()
    {

        try {
            // buat variable untuk menampung hasil quary tabel Assetss
            $Assets = Assets::orderby('nama_Assets', 'ASC')->where('status','1')->first();

            // outputnya berupa data bertipe json (format standar api zaman sekarang)
            return response()->json([
                'success' => true,
                'messege' => "success",
                'Assets' => $Assets
            ], 200);
        } catch (Exception $error) {
            return response()->json([
                'success' => false,
                'massage' => 'fail : ' . $error->getMessage(),
                'Assets' => null
            ], 500);
        }
    }

    // menampilkan hotel berdasarkan id yang telah dipilih
    public function detailHotel (Request $request){
        
    }
}
