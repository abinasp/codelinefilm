<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 9/20/2018
 * Time: 10:25 PM
 */

namespace App\Services;


use App\CodelineFilm;

class CodelineFilmService
{
    public function createFilm($name,$description,$releaseDate,$slug,$rating,$ticketPrice,$country,$genre,$photo,$token){
        $codelineFilm = new CodelineFilm();
        $codelineFilm->name = $name;
        $codelineFilm->description = $description;
        $codelineFilm->release_date = $releaseDate;
        $codelineFilm->slug = $slug;
        $codelineFilm->rating = $rating;
        $codelineFilm->ticket_price = $ticketPrice;
        $codelineFilm->country = $country;
        $codelineFilm->genre = $genre;
        $codelineFilm->photo = $photo;
        $codelineFilm->remember_token = $token;
        if($codelineFilm->save()){
            return $codelineFilm;
        }else{
            return null;
        }
    }

    public function getFilm($id){
        $film = CodelineFilm::where('id','=',$id)->first();
        if($film){
            return $film;
        }else{
            return null;
        }
    }
}