<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $body = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum architecto voluptatem 
                animi ducimus soluta perspiciatis dolorem magni sequi quas nihil. Nihil quisquam debitis 
                rerum quaerat eaque officia officiis fugiat. Voluptas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis in, 
                consequuntur explicabo voluptatem nisi incidunt deleniti itaque animi, cumque adipisci corporis 
                consequatur obcaecati qui? Provident tenetur veritatis libero eum quae!';
        for ($i=0; $i < 100; $i++) {
            switch (mt_rand(1,11)) {
                case 1:
                    $title = 'Have a nice day';
                    break;
                case 2:
                    $title = 'Happy birthday';
                    break;
                case 3:
                    $title = 'So boring day';
                    break;
                case 4:
                    $title = 'Enjoy my life';
                    break;
                case 5:
                    $title = 'A beautiful girl';
                    break;
                case 6:
                    $title = 'My name is Thach';
                    break;
                case 7:
                    $title = 'About my pet';
                    break;
                case 8:
                    $title = 'This is another';
                    break;
                case 9:
                    $title = 'Have upset day';
                    break;
                case 10:
                    $title = 'Say yes';
                    break;
                default:
                    $title = 'Defaul title';
                    break;
            } 
            Post::create(['title'=>$title,'body'=>$body]);
        }
    }
}
