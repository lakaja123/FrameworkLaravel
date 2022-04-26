<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function lessonOne() {
        return 'Моя первая программа';
    }
    public function lessonTow(Request $request) {
        $data = [ ];
        if($request->has('text'))
            $data['text'] = $request->input('text');
        $data['token'] = $request->input('token', 'none-token');
        return $data;
    }


    public function loveChrt() {
        return 'Я люблю учиться в ЧРТ';
    }

    public function nameIvan(Request $request) {
        $data = [ ];
        if($request->has('name'))
            $data['name'] = $request->input('name');
        return 'Меня зовут ' . $data['name'];
    }
    public function nameIvanApple(Request $request) {
        $data = [ ];
        if($request->has('name') && $request->has('fruit')) {
            $data['name'] = $request->input('name');
            $data['fruit'] = $request->input('fruit');
            return 'Меня зовут ' . $data['name'] . ' и я люблю есть ' . $data['fruit'];
        }
    }
    public function sumP(Request $request) {
        $sum = 1 + 2;
        return $sum;
    }
    public function sumGet(Request $request) {
        $data = [ ];
        if($request->has('a') && $request->has('b')) {
            $data['a'] = $request->input('a');
            $data['b'] = $request->input('b');
            $sum = $data['a'] + $data['b'];
            return 'Сумма равна ' . $sum;
        }
    }
    public function Cipher(Request $request) {
        $data = [ ];
        if($request->has('cipher')) {
            $data['cipher'] = $request->input('cipher');
            if ($data['cipher'] == 'keyOneTest') {
                return 'Я взломал шифр';
            } else {
                return 'Нет доступа';
            }
        }
    }
}
