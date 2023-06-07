<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'kode_satuan' => 'LS',
                'nama_satuan' => 'Lusin'
            ],
            [
                'kode_satuan' => 'PX',
                'nama_satuan' => 'pax'
            ],
            [
                'kode_satuan' => 'GRS',
                'nama_satuan' => 'Gross'
            ],
            [
                'kode_satuan' => 'UT',
                'nama_satuan' => 'Unit'
            ],
        ]);
    }
}
