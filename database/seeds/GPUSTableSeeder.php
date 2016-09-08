<?php

use Illuminate\Database\Seeder;

class GPUSTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gpus')->insert([
            'name' => 'EVGA GeForce GTX 1080 Founders Edition',
            'specs' => 'Stream Processors: 2,560 | Core Clock: 1,607MHz | Memory: 8GB GDDR5X | Memory Clock: 7,010MHz |
             Power Connectors: 1 x 6-pin, 1 x 8-pin | Length: 266.7mm | Outputs: 3 x DisplayPort, 1 x HDMI, 1 x DVI',
            'model' => 'GTX 1080',
            'release_date' => '2016-05-10',
            'price' => '689.99',
            'reviews' => 'GIGABYTE has completely surprised me with their efforts on the GeForce GTX 1080 G1 Gaming card, and what\'s possible with some excellent engineering, cooling technology, and a single 8-pin PCIe power connector.'
        ]);

        DB::table('gpus')->insert([
            'name' => 'Zotac GeForce GTX 980Ti AMP Extreme Edition',
            'specs' => 'Stream Processors: 2816 | Core Clock: 1253MHz | Memory: 6GB | Memory Clock: 7220MHz | Power Conn
            ectors: 2 x 8-pin | Length: 267mm | Outputs: 3 x DisplayPort, 1 x HDMI, 1 x DVI',
            'model' => 'GTX 1080',
            'release_date' => '2015-06-01',
            'price' => '420.35',
            'reviews' => 'During gaming, the Gigabyte GTX 980 Ti G1 Gaming uses quite a bit more power than the reference design, but it makes up for that with much higher performance.'
        ]);

        DB::table('gpus')->insert([
            'name' => 'Gigabyte Radeon R9 Fury X',
            'specs' => 'Stream Processors: 4096 | Core Clock: 1050MHz | Memory: 4GB | Memory Clock: 1000MHz | Power Conn
            ectors: 2 x 8-pin | Length: 195mm | Outputs: 3 x DisplayPort, 1 x HDMI',
            'model' => 'Radeon R9',
            'release_date' => '2015-06-01',
            'price' => '585.82',
            'reviews' => 'The version without "OC" comes at reference design clocks of 1000 MHz and the OC version we are reviewing today is clocked at 1040 MHz on the GPU.'
        ]);

        DB::table('gpus')->insert([
            'name' => 'Sapphire Radeon R9 Nano',
            'specs' => 'Stream Processors: 4096 | Core Clock: 1000MHz | Memory: 4GB | Memory Clock: 1000MHz | Power Conn
            ectors: 1 x 8-pin | Length: 152mm | Outputs: 1 x DisplayPort, 1 x HDMI, 2 x DVI',
            'model' => 'Radeon R9',
            'release_date' => '2015-09-01',
            'price' => '493.26',
            'reviews' => 'The Radeon R9 Nano matches impressive scale with high-end performance, but the price is prohibitive especially when size is really not so much of an issue anymore.'
        ]);

        DB::table('gpus')->insert([
            'name' => 'MSI GeForce 1070 Gaming X',
            'specs' => 'Stream Processors: 1,920 | Core Clock: 1,607MHz | Memory: 8GB GDDR5 | Memory Clock: 8,108MHz | 
            Power Connectors: 1 x 6-pin, 1 x 8-pin | Length: 279mm | Outputs: 3 x DisplayPort 1.4, 1 x HDMI 2.0, 1 x DVI',
            'model' => 'GTX 1070',
            'release_date' => '2015-09-01',
            'price' => '524.00',
            'reviews' => 'Nvidia has once again nailed what the GTX 1070 should be about. 1440p is the new 1080p as the place to be, and the GTX 1070 makes gaming at this resolution a reality. If you\'re gaming at 1080p now and are looking to upgrade to those denser pixels in the future, this GPU is a fine answer to that problem.'
        ]);
        DB::table('gpus')->insert([
            'name' => 'Sapphire Radeon R9 Tri-X 390X',
            'specs' => 'Stream Processors: 2816 | Core Clock: 1055MHz | Memory: 8GB | Memory Clock: 6000MHz | Power Conn
            ectors: 2 x 8-pin | Length: 308mm | Outputs: 1 x DisplayPort, 1 x HDMI, 2 x DVI',
            'model' => 'Radeon R9',
            'release_date' => '2015-10-01',
            'price' => '399.99',
            'reviews' => 'The R9 390X is a great little 1080p card, but often struggles running at the 1440p level AMD is aiming it at. Asus has undoubtedly made a great version of the card though, with quality cooling and almost silent operation.'
        ]);

        DB::table('gpus')->insert([
            'name' => 'MSI GeForce GTX 970 Gaming Edition',
            'specs' => 'Stream Processors: 1664 | Core Clock: 1140MHz | Memory: 4GB | Memory Clock: 7010MHz | Power Conn
            ectors: 1 x 6-pin, 1 x 8-pin | Length: 269mm | Outputs: 1 x DisplayPort, 1 x HDMI, 2 x DVI',
            'model' => 'GTX 970',
            'release_date' => '2014-09-01',
            'price' => '242.58',
            'reviews' => 'Nvidia has once again nailed what the GTX 1070 should be about. 1440p is the new 1080p as the place to be, and the GTX 1070 makes gaming at this resolution a reality. If you\'re gaming at 1080p now and are looking to upgrade to those denser pixels in the future, this GPU is a fine answer to that problem.'
        ]);

        DB::table('gpus')->insert([
            'name' => 'AMD Radeon RX 480',
            'specs' => 'Stream processors: 2,304 | Core Clock: 1,120MHz | Memory: 8GB GDDR5 | Memory Clock: 8,000MHz |
             Power connections: 1x 6-pin | Length: 241mm | Outputs: 1 x HDMI, 3 x DisplayPort',
            'model' => 'Radeon RX 480',
            'release_date' => '2016-06-01',
            'price' => '229.99',
            'reviews' => 'AMD has returned with another value-driven card that delivers the goods. Whether you\'re looking to game at 60 fps at 1080p, hook up a 120Hz FreeSync monitor or even dip your toes into 1440p gaming, this card does it all without breaking the bank.'
        ]);

        DB::table('gpus')->insert([
            'name' => 'Nvidia GeForce GTX 1060',
            'specs' => 'Stream Processors: 1,280 | Core Clock: 1,506MHz | Memory: 8GB GDDR5 | Memory Clock: 8,000MHz |
             Power Connectors: 1 x 6-pin | Length: 249.5mm | Outputs: 1 x DisplayPort, 1 x HDMI, 1 x Dual Link-DVI',
            'model' => 'GTX 1060',
            'release_date' => '2015-07-01',
            'price' => '239.99',
            'reviews' => 'The jump from Maxwell to Pascal is exceptional. The GTX 1080 sealed the high end with an almost 50% improvement over last generation\'s equivalent, and the same can be said for the GTX 1060. It\'s cool, quiet, and fantastically well rounded for a card at this price point.'
        ]);

        DB::table('gpus')->insert([
            'name' => 'EVGA GeForce GTX 750Ti SC',
            'specs' => 'Stream Processors: 640 | Core Clock: 1176MHz | Memory: 2GB | Memory Clock: 5400MHz | Power Conn
            ectors: None | Length: 170mm | Outputs: 1 x HDMI, 1 x DVI, 1 x VGA',
            'model' => 'GTX 750Ti',
            'release_date' => '2014-02-01',
            'price' => '132.12',
            'reviews' => 'As a low-cost, low-power graphics card, the 750 Ti is currently a very good option for anyone building a value gaming PC, especially if it\'s a Steam Machine.'
        ]);
    }
}
