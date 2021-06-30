<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Albums;
use View;
class AlbumController extends Controller
{
    public function viewAlbum($id)
    {
        $albumDetail = DB::table('albums')
            ->where('id', '=', $id)
            ->get();
        $songs = DB::table('albums')
            ->join('songs', 'albums.id', '=', 'songs.album_id')
            ->select('songs.*')
            ->where('albums.id', '=', $id)
            ->get();

        $comments = DB::table('comments')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->select('comments.*','users.*')
            ->where('comments.album_id', '=', $id)
            ->get();

        return View::make('albums.albumDetails', compact('songs','albumDetail','comments'));
    }
}
