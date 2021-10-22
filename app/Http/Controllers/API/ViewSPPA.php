<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\SPPA\Master;
use Illuminate\Http\Request;

class ViewSPPA extends Controller
{
    public function all(Request $request)
    {
        $key = $_GET['key'];
        // access key
        if($key=='123') {
            $id = $request->input('id');
            // untuk pagination
            $limit = $request->input('limit', 6);
            $name = $request->input('name');
            
            // cari berdasarkan id
            if ($id) {
                $product = Master::with(['tanaman','tanaman.risk','tanaman.location','tanaman.detail','tanaman.risk_area','tanaman.additionalInfo','tanaman.additionalInfo.telephone','tanaman.additionalInfo.additional'])->find($id);
                
                if ($product)
                return ResponseFormatter::success(
                    $product,
                    'Data berhasil diambil'
                );
                else
                return ResponseFormatter::error(
                    null,
                    'Data produk tidak ada',
                    404
                );
        }   

        // manampilkan seluruh data beserta larasinya 
        $product = Master::with(['tanaman','tanaman.risk','tanaman.location','tanaman.detail','tanaman.risk_area','tanaman.additionalInfo','tanaman.additionalInfo.telephone','tanaman.additionalInfo.additional']);
        if ($name)
            $product->where('name', 'like', '%' . $name . '%');
            return ResponseFormatter::success(
            $product->paginate($limit),
            'Data list berhasil diambil'
        );
    }

    }
}
