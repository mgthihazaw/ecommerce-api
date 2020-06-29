<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $categories = [
        ["title" => "Phone", "image" => "http://localhost:8000/images/phone.png"],
        ["title" => "laptop", "image" => "http://localhost:8000/images/laptop.png"],
        ["title" => "Glass", "image" => "http://localhost:8000/images/glass.png"],
        ["title" => "Tshirt", "image" => "http://localhost:8000/images/tshirt.jpg"],
        ["title" => "Head", "image" => "http://localhost:8000/images/head.png"],
        
    ];
    public function run()
    {
        foreach($this->categories as $category){
            Category::create($category);
        }
    }
}
