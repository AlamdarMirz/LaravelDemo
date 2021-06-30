<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peaches = [
            'released_year' => 2021,
            'song_writer' => 'Daniel Caesar'
        ];
        $peaches = json_encode($peaches);
        $tffa = [
            'released_year' => 2021,
            'featured_artist' => 'FINNEAS'
        ];
        $tffa = json_encode($tffa);
        $wob = [
            'released_year' => 2021,
            'genre' => 'R&B/Soul'
        ];
        $wob = json_encode($wob);
        $btrmis = [
            'released_year' => 2021,
            'genre' => 'POP'
        ];
        $btrmis = json_encode($btrmis);
        $wtl = [
            'released_year' => 2021,
            'featured_artist' => 'MoStack'
        ];
        $wtl = json_encode($wtl);
        DB::table('songs')->insert([
            [
                'album_id' => 1,
                'name' => 'Peaches',
                'artist' => 'Justin Bieber',
                'metadata' => $peaches,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'album_id' => 1,
                'name' => 'Deserve You',
                'artist' => 'Justin Bieber',
                'metadata' => $peaches,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'album_id' => 2,
                'name' => 'Til forever falls apart',
                'artist' => ' Ashe',
                'metadata' => $tffa,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'album_id' => 2,
                'name' => 'Love is not Enough',
                'artist' => ' Ashe',
                'metadata' => $tffa,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'album_id' => 3,
                'name' => 'Waves of Blue',
                'artist' => 'Majid Jordan',
                'metadata' => $wob,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'album_id' => 3,
                'name' => 'Hold On We are Going Home',
                'artist' => 'Majid Jordan',
                'metadata' => $wob,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'album_id' => 4,
                'name' => 'Better Mistakes',
                'artist' => 'Bebe Rexha',
                'metadata' => $btrmis,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'album_id' => 4,
                'name' => 'In The Name Of Love',
                'artist' => 'Bebe Rexha',
                'metadata' => $btrmis,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'album_id' => 5,
                'name' => 'Way Too Long',
                'artist' => 'Nathan Dawe',
                'metadata' => $wtl,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'album_id' => 5,
                'name' => 'No Time For Tears',
                'artist' => 'Nathan Dawe',
                'metadata' => $wtl,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
