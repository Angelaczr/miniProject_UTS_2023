<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'KA01',
                'nama_barang' => 'Kipas Angin',
                'harga_barang' => 34000000,
                'deksripsi_barang' => 'Kipas Angin Philips',
                'satuan_id' => 1,
            ],
            [
                'kode_barang' => 'BK02',
                'nama_barang' => 'Buku Binder',
                'harga_barang' => 7000,
                'deksripsi_barang' => 'Binder Lucu Cinderela',
                'satuan_id' => 2
            ],
            [
                'kode_barang' => 'MK01',
                'nama_barang' => 'Masker Duckbill',
                'harga_barang' => 15000,
                'deksripsi_barang' => 'Masker Duckbill 1 set',
                'satuan_id' => 3
            ],
            [
                'kode_barang' => 'TOP09',
                'nama_barang' => 'Toples Cantik Lebaran',
                'harga_barang' => 78000,
                'deksripsi_barang' => 'Toples Unik Lebaran',
                'satuan_id' => 4
            ],

            ]);
    }
}



