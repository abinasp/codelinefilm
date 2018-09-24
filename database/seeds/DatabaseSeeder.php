<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Codeline user Table Seeder

        DB::table('users')->insert(
            [
                'name' => 'John Doe',
                'email' => 'johndoe@gmail.com',
                'password' => '$2y$10$imBF1hhnHZpVGMjqsMjCgOlDE0VBhmNlQTS8tMlvrEi7nuO0NuUk2'
            ]
        );

        //Codeline Films Table Seeder

        DB::table('codeline_films')->insert([
            [
                'name' => 'Inception',
                'description' => 'Cobb steals information from his targets by entering their dreams. He is wanted for his alleged role in his wife\'s murder and his only chance at redemption is to perform the impossible, an inception.',
                'release_date' => '2010-07-16',
                'slug' => 'inception',
                'rating' => 4,
                'ticket_price' => 25,
                'country' => 'USA',
                'genre' => 'Science Fiction',
                'photo' => 'https://upload.wikimedia.org/wikipedia/en/2/2e/Inception_%282010%29_theatrical_poster.jpg'
            ],
            [
                'name' => 'The Dark Knight',
                'description' => 'After Gordon, Dent and Batman begin an assault on Gotham\'s organised crime, the mobs hire the Joker, a psychopathic criminal mastermind, who wants to bring all the heroes down to his level.',
                'release_date' => '2008-07-18',
                'slug' => 'the-dark-knight',
                'rating' => 5,
                'ticket_price' => 34,
                'country' => 'USA',
                'genre' => 'Drama/Thriller',
                'photo' => 'http://www.gstatic.com/tv/thumb/v22vodart/173378/p173378_v_v8_at.jpg'
            ],
            [
                'name' => 'The Godfather',
                'description' => 'Don Vito Corleone, head of a mafia family, decides to hand over his empire to his youngest son Michael. However, his decision unintentionally puts the lives of his loved ones in grave danger.',
                'release_date' => '1972-03-14',
                'slug' => 'the-godfather',
                'rating' => 5,
                'ticket_price' => 19,
                'country' => 'USA',
                'genre' => 'Drama/Crime',
                'photo' => 'https://upload.wikimedia.org/wikipedia/en/thumb/a/af/The_Godfather%2C_The_Game.jpg/220px-The_Godfather%2C_The_Game.jpg'
            ],
            [
                'name' => 'Schindler\'s List',
                'description' => 'Oskar Schindler, a German industrialist and member of the Nazi party, tries to save his Jewish employees after witnessing the persecution of Jews in Poland.',
                'release_date' => '1994-02-04',
                'slug' => 'schindler\'s-list',
                'rating' => 3,
                'ticket_price' => 19,
                'country' => 'USA',
                'genre' => 'Biography, Drama, History',
                'photo' => 'http://www.gstatic.com/tv/thumb/v22vodart/15227/p15227_v_v8_ad.jpg'
            ]
        ]);

        //Comment Table Seeder

        DB::table('comments')->insert([
            [
                'user_id' => 1,
                'film_id' => 1,
                'comment' =>  'Inception is written, produced, and directed by Christopher Nolan. The film stars Leonardo DiCaprio, Ken Watanabe, Joseph Gordon-Levitt, Marion Cotillard, Ellen Page, Tom Hardy, Cillian Murphy, Dileep Rao, Tom Berenger, and Michael Caine. The musical score is by Hans Zimmer and Wally Pfister is the cinematographer. Plot finds DiCaprio playing Dom Cobb, a specialised spy for hire who steals ideas from the dreams of people. But one day he gets a different offer, one that will enable him to see his estranged children. To get his reward he must enact Inception, the planting of an idea in the mind of the selected target. But Inception is thought impossible and should Cobb and his selected team fail? The consequences are unthinkable.'
            ],
            [
                'user_id' => 1,
                'film_id' => 2,
                'comment' => 'I saw the dark knight about three years ago when I was in the 8th grade. And I was blown away at how beautifully done it was, the camera work, the acting, the story, it all took me by surprise. It is to this day one of the best movies I have ever seen or will see. No other movie can impact you in such an intense way than The Dark Knight. It is a movie worth seeing due to the fact that the workers put so much time and effort into this one film and they did not want to waste money putting up garbage. So Christopher Nolan, thank you for not wasting our time, instead earning our time with this film. To this day I still am anxious to see the movie at home. I recommend it to anyone who likes action movies in general. To anyone who doesn\'t, don\'t waste your time write bad reviews about this film.'
            ],
            [
                'user_id' => 1,
                'film_id' => 3,
                'comment' => 'I love this movie and all of the GF movies. I see something new every time I have seen it (countless, truly). The story of tragedy and (little) comedy that exists in this film is easily understood by people all over the world. This film has been called an American story however I have met others who have seen this movie in other languages and they seem to have the same love and appreciation for it that I do. I love the characters and all of the different personalities that they represent not just in families but in society itself. It seems like the entire cast is part of every other movie that I love as well. The sounds, music, color and light in the film are just as much a part of the film as the people. This could be attributed to the method in which it was filmed. At many parts of the film I can still find myself feeling the emotions conveyed in the film. I never tire of appreciating this film. I thank God that FFC is an American treasure. We are fortunate to have him.'
            ],
            [
                'user_id' => 1,
                'film_id' => 4,
                'comment' =>  'A movie which is so beautifully portrayed and is so hopeful that it won\'t let you take your eyes off it. The black and white portrayal is just exquisite and beyond words. I had a pleasure watching it and people out there must watch it there as well. This is literally one of the best artwork of cinema and the crown for Mr. Spielberg. The direction and screenplay is just astounding and for me this really is the most astonishing work of Mr. Fiennes. It was a great cinematic experience.'
            ]
        ]);
    }
}
