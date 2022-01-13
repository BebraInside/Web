<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

/**
 * Контроллер для управления товарами
 */
class ProductController extends Controller
{
    public $arr = array(
        [
            'id' => 1,
            'title' => 'Bandana I',
            'year' => '2021',
            'description' => 'Совместный студийный альбом российских рэп-исполнителей  Big Baby Tape и Kizaru',
            'time' => '36:06',
            'price' => '200',
            'image' => 'C:\Users\vera\PhpstormProjects\Lab1\frontend\src\assets\images\posters\1.jpg',
            'author' => 'Big Baby Tape, Kizaru',
            'genre' => 'hip-hop'
        ],
        [
            'id' => 2,
            'title' => 'Born To Trap',
            'year' => '2020',
            'description' => 'Описание...',
            'time' => '53:00',
            'price' => '200',
            'image' => 'C:\Users\vera\PhpstormProjects\Lab1\frontend\src\assets\images\posters\2.jpg',
            'author' => 'Kizaru',
            'genre' => 'hip-hop'
        ],
        [
            'id' => 3,
            'title' => 'Karmageddon',
            'year' => '2019',
            'description' => 'Описание...',
            'time' => '45:00',
            'price' => '200',
            'image' => 'C:\Users\vera\PhpstormProjects\Lab1\frontend\src\assets\images\posters\3.jpg',
            'author' => 'Kizaru',
            'genre' => 'hip-hop'
        ],
        [
            'id' => 4,
            'title' => 'Назад в будущее',
            'year' => '2018',
            'description' => 'Описание...',
            'time' => '36:45',
            'price' => '200',
            'image' => 'C:\Users\vera\PhpstormProjects\Lab1\frontend\src\assets\images\posters\4.jpg',
            'author' => 'Kizaru',
            'genre' => 'hip-hop'
        ],
        [
            'id' => 5,
            'title' => 'Яд',
            'year' => '2017',
            'description' => 'Описание...',
            'time' => '60:31',
            'price' => '200',
            'image' => 'C:\Users\vera\PhpstormProjects\Lab1\frontend\src\assets\images\posters\5.jpg',
            'author' => 'Kizaru',
            'genre' => 'hip-hop'
        ],
        [
            'id' => 6,
            'title'=> 'Mas Fuerte',
            'year' => '2016',
            'description' => 'Описание...',
            'time' => '52:25',
            'price' => '200',
            'image' => 'C:\Users\vera\PhpstormProjects\Lab1\frontend\src\assets\images\posters\6.jpg',
            'author' => 'Kizaru',
            'genre' => 'hip-hop'
        ]
    );

    /**
     * Список товаров.
     * @return array[]
     */
    public function list()
    {
        return $this->arr;
    }

    /**
     * Информация о товаре
     * @param $id
     * @return array
     */
    public function info($id)
    {
        foreach ($this->arr as $item) {
            if ($item['id'] == $id)
                return $item;
        }
    }
}
