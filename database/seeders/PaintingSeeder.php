<?php

namespace Database\Seeders;

use App\Models\Painting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaintingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Painting::insert(['title'=>"Primavera",'artist'=>'Sandro Botticelli','year'=>'1482','width'=>314,'height'=>203,'price'=>24000000,'link'=>'/images/IMG_7155.JPG']);
        Painting::insert(['title'=>'Katedral Jakarta','artist'=>'Sulistyo,JB','year'=>'2021','type'=>'Oil on canvas','width'=>55,'height'=>45,'price'=>9000000,'link'=>'/images/IMG_7922.PNG']);
        Painting::insert(['title'=>'Pura Goa Gajah Bali','artist'=>'Dandung B Kahono','year'=>'2003','type'=>'Oil on canvas','width'=>60,'height'=>50,'price'=>12000000,'link'=>'/images/IMG_7924.PNG']);
        Painting::insert(['title'=>'Perkampungan','artist'=>'Daeng','year'=>'2018','type'=>'Oil on canvas','width'=>50,'height'=>60,'price'=>5000000,'link'=>'/images/IMG_7926.PNG']);
        Painting::insert(['title'=>'Kapal','artist'=>'Atika haryadi','type'=>'Oil on canvas','width'=>60,'height'=>70,'price'=>5000000,'link'=>'/images/images/IMG_7929.PNG']);
        Painting::insert(['title'=>'Sudut Kota','artist'=>'Atika haryadi','type'=>'Oil on canvas','width'=>70,'height'=>60,'price'=>5000000,'link'=>'/images/IMG_7930.PNG']);
        Painting::insert(['title'=>'Perkampungan','artist'=>'Aminudin','type'=>'Acrylics on canvas','width'=>60,'height'=>50,'price'=>3000000,'link'=>'/images/IMG_7931.PNG']);
        Painting::insert(['title'=>'Tanah lot','artist'=>'Iwan Sulistyo, JB','year'=>'2013','type'=>'Oil on canvas','width'=>55,'height'=>45,'price'=>9000000,'link'=>'/images/IMG_7932.PNG']);
        Painting::insert(['title'=>'Trading Under the Tree','artist'=>'Iwan Sulistyo, JB','year'=>'2013','type'=>'Oil on canvas','width'=>55,'height'=>45,'price'=>9000000,'link'=>'/images/IMG_7934.PNG']);
        Painting::insert(['title'=>'Arnolfini Portrait ','artist'=>'Jan van Eyck','year'=>'1434','type'=>'Oil on Oak','width'=>59.5,'height'=>82,'link'=>'/images/IMG_7935.JPG']);
        Painting::insert(['title'=>'Lady with an Ermine','artist'=>'Leonardo da Vinci','year'=>'1489-1490','type'=>'Oil on wood panel','width'=>39,'height'=>54,'link'=>'/images/IMG_7937.JPG']);
        Painting::insert(['title'=>'Starry Night Over the Rhone','artist' =>'Vincent van Gogh','year'=>'1888','type'=>'Oil on canvas','width'=>920,'height'=>720,'link'=>'/images/IMG_7943.JPG']);
        Painting::insert(['title'=>'Wheat Field with Cypresses','artist'=>'Vincent van Gogh','year'=>'1889','type'=>'Oil on Canvas','width'=>93.4,'height'=> 73.2,'link'=>'/images/IMG_7946.JPG']);
        Painting::insert(['title'=>'Farmhouse in Provence','artist'=>'Vincent van Gogh','year'=>'1888','type'=>'Oil on Canvas','width'=>60.9,'height'=>46.1,'link'=>'/images/IMG_7947.JPG']);
        Painting::insert(['title'=>'Green Wheat Fields, Auvers','artist'=>'Vincent van Gogh','year'=>'1890','type'=>'Oil on Canvas','width'=>91.4,'height'=>72.4,'link'=>'/images/IMG_7952.JPG']);
        Painting::insert(['title'=>'Still Life of Oranges and Lemons with Blue Gloves','artist'=>'Vincent van Gogh','year'=>'1889','type'=>'Oil on Canvas','width'=>62,'height'=>48,'link'=>'/images/IMG_7953.JPG']);
        Painting::insert(['title'=>'The Roofs of Paris','artist'=>'Vincent van Gogh','year'=>' 1886','type'=>'Oil on Canvas','width'=>72.8,'height'=>53.9,'link'=>'/images/IMG_7955.JPG']);
        Painting::insert(['title'=>'Olive Grove - Orange Sky','artist'=>'VIncent van Gogh','year'=>'1889','type'=>'Oil on Canvas','width'=>74,'height'=>93,'link'=>'/images/IMG_7958.JPG']);
        Painting::insert(['title'=>'Street in Auvers-sur-Oise','artist'=>'Vincent van Gogh ','year'=>'1890','type'=>'Oil on Canvas','width'=>92,'height'=>73,'link'=>'/images/IMG_7960.JPG']);
        // Painting::insert();
        // Painting::insert([
        //     ,
        //     ,
        //     ,
        //     ,
        //     // ['title','artist','year','type','width','height','link'=>'/images/IMG_.JPG'],

        // ]);
    }
}
