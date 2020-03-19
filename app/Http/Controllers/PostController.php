<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addition() {
        #ページタイトルの変数格納
        $title = '足し算の計算問題出力';

        # 配列の初期化
        $data = [];

        for ($i = 1; $i <= 10; $i++){
            #足す数と足される数を乱数で取得
            $num_1 = random_int(1, 99);
            $num_2 = random_int(1, 99);

            #足し算の答えを変数に格納
            $num_result = $num_1 + $num_2;

            if (isset($data[0])){
                array_push($data, [
                    'num_1' => $num_1,
                    'num_2' => $num_2,
                    'num_result' => $num_result,
                ]);
            }else{
                $data = [
                    [
                        'num_1' => $num_1,
                        'num_2' => $num_2,
                        'num_result' => $num_result,
                    ]
                ];
            }
        } 

        return view('post.addition', compact('data'));
    }

    public function addition_answer() {
        return view('post.addition_answer');
    }

    public function subtraction() {
        return view('post.subtraction');
    }

    public function subtraction_answer() {
        return view('post.subtraction_answer');
    }

    public function multiplication() {
        #ページタイトルの変数格納
        $title = '足し算の計算問題出力';
        # 配列の初期化
        $data = [];

        for ($i = 1; $i <= 10; $i++){
            #足す数と足される数を乱数で取得
            $num_1 = random_int(1, 99);
            $num_2 = random_int(1, 99);

            #足し算の答えを変数に格納
            $num_result = $num_1 * $num_2;

            if (isset($data[0])){
                array_push($data, [
                    'num_1' => $num_1,
                    'num_2' => $num_2,
                    'total' => $num_result,
                ]);
            }else{
                $data = [
                    [
                        'num_1' => $num_1,
                        'num_2' => $num_2,
                        'total' => $num_result,
                    ]
                ];
            }
        }

        return view('post.multiplication', compact('data'));
    }

    public function multiplication_answer() {
        return view('post.multiplication_answer');
    }
}
