<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function index()
    {
        return view('pages.inventory.index');
    }

    public function dataInventory()
    {
        $inventories = Inventory::get();

        $datas = [];        
        foreach ($inventories as $inventory) {
            $datas[] = [
                'id' => $inventory['id'],
                'no' => $inventory['no'],
                'kode_kategori' => $inventory['kode_kategori'],
                'kode_klasifikasi' => $inventory['kode_klasifikasi'],
                'kode_jenis' => $inventory['kode_jenis'],
                'tahun_mesin' => $inventory['tahun_mesin'],
            ];
        }

        return \DataTables::of($datas)->toJson();
    }
}
