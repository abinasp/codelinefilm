<?php

namespace App\Http\Controllers;


use App\Services\CodelineFilmService;
use App\Services\CommentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AppController extends Controller
{
    public function saveFilmData(Request $request){
        $codelineFilmService = new CodelineFilmService();
        $newFilm = $codelineFilmService->createFilm($request->name, $request->description, $request->release_date, $request->slug, $request->rating, $request->ticket_price, $request->country,$request->genre, $request->photo, $request->token);
        return response()->json($newFilm);
    }

    public function getFilm($slug,$id){
        $codelineFilmService = new CodelineFilmService();
        $film = $codelineFilmService->getFilm($id);

        return view('film-details')->with(compact('film'));
    }

    public function newComment(Request $request){
        $commentService = new CommentService();
        $comment = $commentService->createComment($request->userId, $request->filmId, $request->comment);
        return response()->json($comment);
    }
}