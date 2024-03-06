<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('index', ['userName' => 'Anderson']);
    }

    function list(){
        $users = [
            [
                'name' => 'Maria Aparecida',
                'email' => 'maria.aparecida@gmail.com',
                'birthday' => '10/03/1975'
            ],
            [
                'name' => 'João Paulo',
                'email' => 'joao.paulo@gmail.com',
                'birthday' => '02/08/1985'
            ]
        ];
        return view('list',compact('users'));
    }
}
