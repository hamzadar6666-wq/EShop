<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=[
            ['name'=>'product1'],
            ['name'=>'product2'],
            ['name'=>'product3'],
            ['name'=>'product4']
        ];
        Category::insert($categories);
    }
}
