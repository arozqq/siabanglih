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
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 30; $i++) {
            Kandidat::create([
                'nama_kandidat' => $faker->name(),
                'visi' => 'loremIpsumDolorimetVISI',
                'misi' => 'loremIpsumDolorimetMISI',
                'status' => 1,
                'foto_kandidat' => $faker->imageUrl(640, 480)
            ]);
        }
    }
}
