<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    public function showServiceProvider()
    {
        $encrypt = app()->make('encrypter');
        $password = $encrypt->encrypt('password'); //パスワードを暗号化する
        $sample = app()->make('serviceProvider');
        dd($password, $sample, $encrypt->decrypt($password)); //パスワードを暗号化を戻す decrypt関数
    }

    public function showServiceContainer()
    {
        app()->bind('lifeCycleTest', function() {
            return 'ライフサイクルのテスト';
        });

        $test = app()->make('lifeCycleTest');

        //サービスコンテナなしのパターン
        // $message = new Message();
        // $sample = new Sample($message);
        // $sample->run();

        //サービスコンテナありのパターン
        app()->bind('sample', Sample::class);
        $sample = app()->make('sample');
        $sample->run();

        dd($test, app());
    }
}

class Sample
{
    public $message;
    public function __construct(Message $message)
    {
        $this->message = $message;
    }
    public function run()
    {
        $this->message->send();
    }
}
class Message
{
    public function send()
    {
        echo('メッセージを表示');
    }
}