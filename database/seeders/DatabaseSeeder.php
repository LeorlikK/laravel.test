<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Glasses;
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
        Brand::factory(4)->create();
        $glasses = Glasses::factory(100)->create();
        $category = Category::factory(20)->create();

        foreach ($glasses as $glass) {
            $id = $category->random(3)->pluck('id');
            $glass->category()->attach($id);
        }
//        dd($category, $category());
    }
}
