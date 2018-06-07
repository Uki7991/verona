<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = new \App\Menu([
            'name' => 'Description',
            'object_id' => 1,
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'name' => 'Gallery',
            'object_id' => 1,
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'name' => 'Benefits',
            'object_id' => 1,
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'name' => 'Plans',
            'object_id' => 1,
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'name' => 'Stages',
            'object_id' => 1,
        ]);
        $menu->save();
    }
}
