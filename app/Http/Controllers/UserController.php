<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $arr = [];

    public function init()
    {
        $this->arr = User::query()->get();
    }

    /**
     * Список пользователей.
     * @return array[]
     */
    public function list()
    {
        $this->init();
        return $this->arr;
    }

    /**
     * Информация о пользователе
     * @param $id
     * @return array
     */
    public function info($id)
    {
        $this->init();
        return $this->arr[$id - 1];
    }

    public function authorization(Request $request)
    {
        $arr = User::query()->where(['name' => $request->get('name')])->first();
        if ($arr == NULL) {
            return [
                'userId' => -1
            ];
        } else {
            if ($arr['password'] == $request->get('password')) {
                return [
                    'userId' => $arr['id']
                ];
            } else {
                return [
                    'userId' => -1
                ];
            }
        }

    }
}
