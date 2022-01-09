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
              'id' =>  1,
              'title' =>  'Торт.',
              'description' =>  'Описание добавится в бд...',
              'price' =>  1,
              'img' =>  'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
              'hunger' =>  1,
              'ingredients' =>  'водичка и чечевичка',
              'emaciation' =>  0.0
            ],
            [
              'id' =>  2,
              'title' =>  'Торт.',
              'description' =>  'Описание добавится в бд...',
              'price' =>  1,
              'img' =>  'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
              'hunger' =>  1,
              'ingredients' =>  'водичка и чечевичка',
              'emaciation' =>  0.0
            ],
            [
              'id' =>  3,
              'title' =>  'Торт.',
              'description' =>  'Описание добавится в бд...',
              'price' =>  1,
              'img' =>  'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
              'hunger' =>  1,
              'ingredients' =>  'водичка и чечевичка',
              'emaciation' =>  0.0
            ],
            [
              'id' =>  4,
              'title' =>  'Торт.',
              'description' =>  'Описание добавится в бд...',
              'price' =>  1,
              'img' =>  'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
              'hunger' =>  1,
              'ingredients' =>  'водичка и чечевичка',
              'emaciation' =>  0.0
            ],
            [
              'id' =>  5,
              'title' =>  'Торт.',
              'description' =>  'Описание добавится в бд...',
              'price' =>  1,
              'img' =>  'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
              'hunger' =>  1,
              'ingredients' =>  'водичка и чечевичка',
              'emaciation' =>  0.0
            ],
            [
              'id' =>  6,
              'title' =>  'Торт.',
              'description' =>  'Описание добавится в бд...',
              'price' =>  1,
              'img' =>  'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
              'hunger' =>  1,
              'ingredients' =>  'водичка и чечевичка',
              'emaciation' =>  0.0
            ],
            [
              'id' =>  7,
              'title' =>  'Торт.',
              'description' =>  'Описание добавится в бд...',
              'price' =>  1,
              'img' =>  'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
              'hunger' =>  1,
              'ingredients' =>  'водичка и чечевичка',
              'emaciation' =>  0.0
            ],
            [
              'id' =>  8,
              'title' =>  'Торт.',
              'description' =>  'Описание добавится в бд...',
              'price' =>  1,
              'img' =>  'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
              'hunger' =>  1,
              'ingredients' =>  'водичка и чечевичка',
              'emaciation' =>  0.0
            ],
            [
              'id' =>  9,
              'title' =>  'Торт.',
              'description' =>  'Описание добавится в бд...',
              'price' =>  1,
              'img' =>  'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
              'hunger' =>  1,
              'ingredients' =>  'водичка и чечевичка',
              'emaciation' =>  0.0
            ],
            [
              'id' =>  10,
              'title' =>  'Торт.',
              'description' =>  'Описание добавится в бд...',
              'price' =>  1,
              'img' =>  'https://static.wikia.nocookie.net/minecraft_ru_gamepedia/images/2/24/%D0%A2%D0%BE%D1%80%D1%82_JE4.png',
              'hunger' =>  1,
              'ingredients' =>  'водичка и чечевичка',
              'emaciation' =>  0.0
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
        foreach($this->arr as $item){
            if ($item['id'] == $id)
                return $item;
        }
    }
}
