<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class refKategoriBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $faker = Faker::create('id_ID');

        $data = ['Komputer', 'Gedung', 'Ruangan'];

        foreach ($data as $key) {
            # code...
            DB::table('ref_kategori_barangs')->insert([
                'name' => $key,
                'created_at' => now(),
                'updated_at' => now(),
    		]);
        }
    }
}
