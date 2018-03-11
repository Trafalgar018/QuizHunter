<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 20)->create()->each(function (\App\User $user) {
            factory(\App\Document::class, 5)->create(['user_id' => $user->id]);
            factory(\App\Questionary::class, 30)->create(['user_id' => $user->id])->each(function(\App\Questionary $questionary){
                factory(\App\Comment::class,5)->create(['questionary_id' => $questionary->id],['user_id']);
                factory(\App\Valoration::class,1)->create(['questionary_id' => $questionary->id],['user_id']);
            });

            factory(\App\Question::class,90)->create(['user_id' => $user->id])->each(function(\App\Question $question){
                factory(\App\Answer::class,3)->create(['question_id' => $question->id],['user_id']);
            });
        });


    }
}
