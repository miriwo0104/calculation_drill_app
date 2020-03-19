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
                
                #計算データが格納された配列$dataをsessionに格納
        session()->put('addition_data', $data);
        
        return view('post.addition', compact('data', 'title'));
    }
    
    public function addition_answer() {
        
        #sessionに格納された値を取得
        $data = session()->get('addition_data');
 
        #ページタイトルの格納
        $title = '足し算の計算問題解答出力';
        return view('post.addition_answer', compact('data', 'title'));
    }
    
    public function subtraction() {
        #ページタイトルの変数格納
        $title = '引き算の計算問題出力';
        
        # 配列の初期化
        $data = [];
        
        for ($i = 1; $i <= 10; $i++){
            #足す数と足される数を乱数で取得
            $num_1 = random_int(1, 99);
            $num_2 = random_int(1, 99);
            
            #引かれる数が大きくなるようにする処理
            while ($num_1 < $num_2) {
                $num_1 = random_int(1, 99);
            }

            #足し算の答えを変数に格納
            $num_result = $num_1 - $num_2;

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
        return view('post.subtraction', compact('data', 'title'));
    }

    public function subtraction_answer() {
        return view('post.subtraction_answer');
    }

    public function multiplication() {
        #ページタイトルの変数格納
        $title = '掛け算の計算問題出力';
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

        return view('post.multiplication', compact('data', 'title'));
    }

    public function multiplication_answer() {
        return view('post.multiplication_answer');
    }
}
