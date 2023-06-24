<?php

namespace Database\Seeders;

use App\Models\Kandidat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KandidatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kandidats')->insert([
            // [
            //     'nama_kandidat' => 'Drs. H. Mutiri, M.M',
            //     'nbm' => 'nbm' => ,
            //     'tempat_lahir',
            //     'tanggal_lahir',
            //     'status' => 1,
            // ],
        ]);
    }
}
