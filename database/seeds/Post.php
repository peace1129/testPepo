<?php

use Illuminate\Database\Seeder;

class Post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('posts')->insert([
        'title' => Str::random(10),
        'body' => Str::random(100),]);
      // 'user_name' => Str::random(10),
      // 'follow_count' => random_int(1, 999),
      // 'followers' => random_int(1, 999),
      // 'prof_image' => Str::random(10),
      // 'dog_name1' => Str::random(10),
      // 'dog_name2' => Str::random(10),
      // 'dog_name3' => Str::random(10),
      // 'dog_name4' => Str::random(10),
      // 'dog_name5' => Str::random(10),
      // 'dog_age1' => random_int(1, 20),
      // 'dog_age2' => random_int(1, 20),
      // 'dog_age3' => random_int(1, 20),
      // 'dog_age4' => random_int(1, 20),
      // 'dog_age5' => random_int(1, 20),
      // 'dog_sex1' => random_int(1, 2),
      // 'dog_sex2' => random_int(1, 2),
      // 'dog_sex3' => random_int(1, 2),
      // 'dog_sex4' => random_int(1, 2),
      // 'dog_sex5' => random_int(1, 2),
      // 'comment' => Str::random(100),]);
    }
}
