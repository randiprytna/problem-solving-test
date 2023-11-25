<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Inventory::create([
            'no' => 'DK - FG - 001 - 2020',
            'kode_kategori' => 'DK',
            'kode_klasifikasi' => 'FG',
            'kode_jenis' => '001',
            'tahun_mesin' => '2020',
        ]);

        \App\Models\Inventory::create([
            'no' => 'DK - FG - 002 - 2020',
            'kode_kategori' => 'DK',
            'kode_klasifikasi' => 'FG',
            'kode_jenis' => '002',
            'tahun_mesin' => '2020',
        ]);

        \App\Models\Inventory::create([
            'no' => 'DK - FG - 003 - 2020',
            'kode_kategori' => 'DK',
            'kode_klasifikasi' => 'FG',
            'kode_jenis' => '003',
            'tahun_mesin' => '2020',
        ]);

        \App\Models\Inventory::create([
            'no' => 'DK - FI - 001 - 2020',
            'kode_kategori' => 'DK',
            'kode_klasifikasi' => 'FI',
            'kode_jenis' => '001',
            'tahun_mesin' => '2020',
        ]);

        \App\Models\Inventory::create([
            'no' => 'DK - FI - 002 - 2020',
            'kode_kategori' => 'DK',
            'kode_klasifikasi' => 'FI',
            'kode_jenis' => '002',
            'tahun_mesin' => '2020',
        ]);

        \App\Models\Inventory::create([
            'no' => 'DB - DC - 001 - 2020',
            'kode_kategori' => 'DB',
            'kode_klasifikasi' => 'DC',
            'kode_jenis' => '001',
            'tahun_mesin' => '2020',
        ]);

        \App\Models\Inventory::create([
            'no' => 'DB - DC - 002 - 2020',
            'kode_kategori' => 'DB',
            'kode_klasifikasi' => 'DC',
            'kode_jenis' => '002',
            'tahun_mesin' => '2020',
        ]);
    }
}
