<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
class SongController extends Controller
{
    public function viewSong($id)
    {
        $songDetail = DB::table('songs')
            ->where('id', '=', $id)
            ->get();
        $comments = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->select('comments.*','users.*')
            ->where('comments.song_id', '=', $id)
            ->get();

        return View::make('songs.songDetails', compact('songDetail','comments'));
    }
}
