<?php

namespace Database\Seeders;

use App\Models\Profile_questions;
use App\Models\questions;
use App\Models\Questions_translation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        //seeder question profile
        Profile_questions::create([
            'questions'=>"Gender"
        ]);
        Profile_questions::create([
            'questions'=>"Country"
        ]);
        Profile_questions::create([
            'questions'=>"Age"
        ]);
        Profile_questions::create([
            'questions'=>"Business Type"
        ]);
        Profile_questions::create([
            'questions'=>"Business Field"
        ]);

        //seeder question survey
        questions::create([
            'questions'=>"Government policies support entrepreneurial development"
        ]);
        questions::create([
            'questions'=>"Government policies make the entrepreneurial climate grow healthily"
        ]);
        questions::create([
            'questions'=>"The government provides a network for entrepreneurs"
        ]);
        questions::create([
            'questions'=>"One of the reasons for entrepreneurial success is the network facilitated by the government"
        ]);
        questions::create([
            'questions'=>"I have the potential resources to move my business forward"
        ]);
        questions::create([
            'questions'=>"My business progress is due to my ability to manage the resources I have"
        ]);
        questions::create([
            'questions'=>"Innovation is the strength and uniqueness of my business"
        ]);
        questions::create([
            'questions'=>"My business continues to grow because of continuous innovation"
        ]);
        questions::create([
            'questions'=>"I am able to target business opportunities with precision"
        ]);
        questions::create([
            'questions'=>"I have the competence in predicting the chances of success in a business"
        ]);
        questions::create([
            'questions'=>"I try to be active in increasing entrepreneurial competence"
        ]);
        questions::create([
            'questions'=>"I have a strategy that is always ready to be executed"
        ]);
        questions::create([
            'questions'=>"Through the business that I have developed, I feel that it continues to grow 
            and is enriched with various competencies as an entrepreneur"
        ]);
        questions::create([
            'questions'=>"I feel prosperous in running my business"
        ]);
        questions::create([
            'questions'=>"I am able to compete with competitors"
        ]);
        questions::create([
            'questions'=>"I am capable of dealing with complex situations in my business"
        ]);

        //seeder translate question survey
        Questions_translation::create([
            'questions'=>"Government policies support entrepreneurial development"
        ]);
        Questions_translation::create([
            'questions'=>"Government policies make the entrepreneurial climate grow healthily"
        ]);
        Questions_translation::create([
            'questions'=>"The government provides a network for entrepreneurs"
        ]);
        Questions_translation::create([
            'questions'=>"One of the reasons for entrepreneurial success is the network facilitated by the government"
        ]);
        Questions_translation::create([
            'questions'=>"I have the potential resources to move my business forward"
        ]);
        Questions_translation::create([
            'questions'=>"My business progress is due to my ability to manage the resources I have"
        ]);
        Questions_translation::create([
            'questions'=>"Innovation is the strength and uniqueness of my business"
        ]);
        Questions_translation::create([
            'questions'=>"My business continues to grow because of continuous innovation"
        ]);
        Questions_translation::create([
            'questions'=>"I am able to target business opportunities with precision"
        ]);
        Questions_translation::create([
            'questions'=>"I have the competence in predicting the chances of success in a business"
        ]);
        Questions_translation::create([
            'questions'=>"I try to be active in increasing entrepreneurial competence"
        ]);
        Questions_translation::create([
            'questions'=>"I have a strategy that is always ready to be executed"
        ]);
        Questions_translation::create([
            'questions'=>"Through the business that I have developed, I feel that it continues to grow 
            and is enriched with various competencies as an entrepreneur"
        ]);
        Questions_translation::create([
            'questions'=>"I feel prosperous in running my business"
        ]);
        Questions_translation::create([
            'questions'=>"I am able to compete with competitors"
        ]);
        Questions_translation::create([
            'questions'=>"I am capable of dealing with complex situations in my business"
        ]);
    }
}
