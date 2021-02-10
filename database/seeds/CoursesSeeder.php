<?php

use App\Category;
use App\Course;
use App\User;
use Cocur\Slugify\Slugify;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slugify = new Slugify();


        $course = new Course();
        $course->title = "Les bases de Symfony 4";
        $course->subtitle = "Apprendre à créer un cours avec Symfony 4";
        $course->slug = $slugify->slugify($course->title);
        $course->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dictum a sem et auctor. Sed blandit sollicitudin ante, et malesuada diam fermentum et. Proin convallis efficitur nulla, at faucibus leo volutpat eget. Sed tempus magna a mi suscipit, in iaculis neque luctus. Nunc ornare mattis elit. Integer porta viverra nisl. Praesent vel vestibulum dolor, non cursus ex. Donec elementum bibendum eros, quis pulvinar ipsum facilisis ac. Aliquam erat volutpat. In volutpat urna at erat molestie tempus vel blandit est.";
        $course->price = 19.99;
        $course->category_id = Category::all()->random(1)->first()->id;
        $course->user_id = User::all()->random(1)->first()->id;
        $course->save();

        $course = new Course();
        $course->title = "Créer un site ecommerce avec Wordpress";
        $course->subtitle = "Construire un site ecommerce complet avec Wordpress";
        $course->slug = $slugify->slugify($course->title);
        $course->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dictum a sem et auctor. Sed blandit sollicitudin ante, et malesuada diam fermentum et. Proin convallis efficitur nulla, at faucibus leo volutpat eget. Sed tempus magna a mi suscipit, in iaculis neque luctus. Nunc ornare mattis elit. Integer porta viverra nisl. Praesent vel vestibulum dolor, non cursus ex. Donec elementum bibendum eros, quis pulvinar ipsum facilisis ac. Aliquam erat volutpat. In volutpat urna at erat molestie tempus vel blandit est.";
        $course->price = 14.99;
        $course->category_id = Category::all()->random(1)->first()->id;
        $course->user_id = User::all()->random(1)->first()->id;
        $course->save();

        $course = new Course();
        $course->title = "Les bases de Laravel 7";
        $course->subtitle = "Créer une plateforme d'enseignement avec Laravel 7";
        $course->slug = $slugify->slugify($course->title);
        $course->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dictum a sem et auctor. Sed blandit sollicitudin ante, et malesuada diam fermentum et. Proin convallis efficitur nulla, at faucibus leo volutpat eget. Sed tempus magna a mi suscipit, in iaculis neque luctus. Nunc ornare mattis elit. Integer porta viverra nisl. Praesent vel vestibulum dolor, non cursus ex. Donec elementum bibendum eros, quis pulvinar ipsum facilisis ac. Aliquam erat volutpat. In volutpat urna at erat molestie tempus vel blandit est.";
        $course->price = 39.99;
        $course->category_id = Category::all()->random(1)->first()->id;
        $course->user_id = User::all()->random(1)->first()->id;
        $course->save();

    }
}
