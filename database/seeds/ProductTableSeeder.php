<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product=new \App\Product([

        	'imagePath'=>'http://www.novafeel.de/buch_dvd/harry%20potter/harry-potter-band-5.jpg',
        	'title'=>'Harry Pottar',
        	'description'=>'yes, I am cool',
        	'price'=>10

        	]);
        $product->save();
        $product=new \App\Product([

        	'imagePath'=>'http://www.hp-fc.de/hpfc/inhalte/img/inhaltsangabe/1_de.jpg',
        	'title'=>'Lords of things',
        	'description'=>'no one is going to survive',
        	'price'=>20

        	]);
        $product->save();
        $product=new \App\Product([

        	'imagePath'=>'http://www.mein-lesetipp.de/wp-content/uploads/2011/07/Harry_Potter.jpg',
        	'title'=>'Game of throns',
        	'description'=>'still, no one is going to survive',
        	'price'=>15

        	]);
        $product->save();
        $product=new \App\Product([

        	'imagePath'=>'https://s-media-cache-ak0.pinimg.com/236x/f2/d0/07/f2d00721168b90678588fa448274122d.jpg',
        	'title'=>'A Storm of Sward',
        	'description'=>'can, I am cool',
        	'price'=>10

        	]);
        $product->save();
        $product=new \App\Product([

        	'imagePath'=>'http://www.novafeel.de/buch_dvd/harry%20potter/harry-potter-band-5.jpg',
        	'title'=>'Harry Pottar',
        	'description'=>'yes, I am cool',
        	'price'=>10

        	]);
        $product->save();
    }
}
