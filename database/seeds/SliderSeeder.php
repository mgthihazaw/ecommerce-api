<?php

use App\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $sliders = [
      ["image" => "http://localhost:8000/images/sliders/image1.jpg"],
      ["image" => "http://localhost:8000/images/sliders/image2.jpg"],
      ["image" => "http://localhost:8000/images/sliders/image3.jpg"],
      ["image" => "http://localhost:8000/images/sliders/image4.jpg"],
      ["image" => "http://localhost:8000/images/sliders/image5.jpg"]
    ];
    public function run()
    {
        foreach($this->sliders as $slider){
         Slider::create($slider);
        }
    }
}
