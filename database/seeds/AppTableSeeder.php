<?php

use Illuminate\Database\Seeder;

class AppTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $app = new \App\App();
        $app->title = 'Bay Service Development';
        $app->phone1 = '0700 (700) 700 - 700';
        $app->description = 'Hello, World!';
        $app->save();
    }
}
