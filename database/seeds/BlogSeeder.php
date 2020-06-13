<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new \App\Blog();
        $blog->title = 'Blog 1';
        $blog->description = 'Blog 1 is...';
        $blog->content = "Content 1";
        $blog->image = 'default.jpn';
        $blog->user_id = 1;
        $blog->category_id = 1;
        $blog->save();

        $blog = new \App\Blog();
        $blog->title = 'Blog 2';
        $blog->description = 'Blog 2 is...';
        $blog->content = "Content 2";
        $blog->image = 'default.jpn';
        $blog->user_id = 1;
        $blog->category_id = 2;
        $blog->save();

        $blog = new \App\Blog();
        $blog->title = 'Blog 3';
        $blog->description = 'Blog 3 is...';
        $blog->content = "Content 3";
        $blog->image = 'default.jpn';
        $blog->user_id = 1;
        $blog->category_id = 3;
        $blog->save();

        $blog = new \App\Blog();
        $blog->title = 'Blog 4';
        $blog->description = 'Blog 4 is...';
        $blog->content = "Content 4";
        $blog->image = 'default.jpn';
        $blog->user_id = 1;
        $blog->category_id = 4;
        $blog->save();

        $blog = new \App\Blog();
        $blog->title = 'Blog 5';
        $blog->description = 'Blog 5 is...';
        $blog->content = "Content 5";
        $blog->image = 'default.jpn';
        $blog->user_id = 1;
        $blog->category_id = 5;
        $blog->save();

        $blog = new \App\Blog();
        $blog->title = 'Blog 6';
        $blog->description = 'Blog 6 is...';
        $blog->content = "Content 6";
        $blog->image = 'default.jpn';
        $blog->user_id = 1;
        $blog->category_id = 6;
        $blog->save();

        $blog = new \App\Blog();
        $blog->title = 'Blog 7';
        $blog->description = 'Blog 7 is...';
        $blog->content = "Content 7";
        $blog->image = 'default.jpn';
        $blog->user_id = 1;
        $blog->category_id = 7;
        $blog->save();

    }
}
