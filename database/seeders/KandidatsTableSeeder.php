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
            [
                'nama_kandidat' => 'Ahmad Ripaih',
                'foto_kandidal' => NULL,
                'nbm' => '270665111104761',
                'tempat_lahir' => 'Tangerang',
                'tanggal_lahir' => '12/4/1965',
                'status' => 1,
            ],
            [
                'nama_kandidat' => "Ba'Lawi Nu'man, Drs.",
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'Bastianon, Drs.H.,S.H., M.H',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'Datum Hadi Saputra, Drs.H',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'E. Sutisna, H.,S.Pd',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'Edi Amin. Dr.',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'Hudaefi, Drs.',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'Iwan, S.Pd., M.M',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'Jamhari, H.,S.Pd',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'M. Abduh Sandia, Dr.H',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'M. Badrus, Drs.',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'M. Nuryasin, Drs.H.,M.Si',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'Maryadi, S.E',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'Musanif, M.Pd',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'Mutiri, Drs.H.M.M',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'Nasruddin, Drs.H.,M.Pd',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'Saidul Fatah, ST',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'Setyo Warjanto, M.Pd',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'Sudrajat, S.Pd',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'Syafruddin Ilyas, M.Pd',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'Usep Kasman, M.Pd',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
            [
                'nama_kandidat' => 'Yahya Harun Al Rasyid, Drs.H',
                'foto_kandidal' => NULL,
                'nbm' => NULL,
                'tempat_lahir' => NULL,
                'tanggal_lahir' => NULL,
                'status' => 1,
            ],
        ]);
    }
}
