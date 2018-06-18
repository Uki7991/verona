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
        $app = new \App\App([
            'title' => 'Bay Service Development',
            'phone1' => '+996 (557) 174 074',
            'phone2' => '+996 (702) 174 074',
            'phone3' => '+996 (559) 300 810',
            'phone4' => '+996 (558) 595 959',
            'description' => 'Hello, world!',
            'facebook' => 'https://www.facebook.com/iman_group.kg',
            'instagram' => 'https://www.instagram.com/iman_group.kg',
        ]);
        $app->save();
    }
}
