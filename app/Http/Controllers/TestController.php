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
    public function lessonTemplateOne($detach) {
        $detachment = 'Нет отряда';
        switch($detach) {
            case 1: $detachment = 'Отряд 287'; break;
            case 2: $detachment = 'Отряд 54'; break;
            case 3: $detachment = 'Отряд 925'; break;
            case 4: $detachment = 'Отряд 9'; break;
            default: $detachment = '-';
        }


        $user = [];
        $user[] = 'Иванов Иван Иванович';
        $user[] = 'Петров Аркадий Иванович';
        $user[] = 'Люлькин Акакий Романович';


        return view('template', compact('detachment', 'user'));
    }
    public function TextPolCon() {
        return view('textpolcon');
    }
    public function TextPolConOrg() {
        $organization = "ООО Школа Совета";
        return view('textpolconorg', compact('organization'));
    }
    public function MyFavouriteString() {
        $favourite = "Есть преступления хуже, чем сжигать книги";
        return view('myfavouritestring', compact('favourite'));
    }
    public function NoskiColor() {
        $noski = ['Белые', 'Синие', 'Красные'];
        return view('noski', compact('noski'));
    }
    public function PalkiSize() {
        $palki = ['Большие', 'Средние', 'Маленькие'];
        return view('palki', compact('palki'));
    }
    public function ChislaChet() {
        $chisla = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        return view('chisla', compact('chisla'));
    }
}
