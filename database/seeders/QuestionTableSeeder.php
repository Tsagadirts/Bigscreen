<?php

namespace Database\Seeders;
use App\Models\Questions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Question\Question;


class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Questions::factory()->count(20)->create();
    }
}
