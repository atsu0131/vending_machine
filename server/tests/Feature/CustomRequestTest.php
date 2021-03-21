<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\vendingRequest;

class CustomRequestTest extends TestCase
{
        /**
        * バリデーションテスト
        *
        * @param array 項目名の配列
        * @param array 値の配列
        * @param boolean 期待値(true:バリデーションOK、false:バリデーションNG)
        * @dataProvider dataOrderRegistration
        */
    public function testOrderRegistration(array $keys, array $values, bool $expect)
    {
        //入力項目の配列（$keys）と値の配列($values)から、連想配列を生成する
        $dataList = array_combine($keys, $values);

        $request = new vendingRequest($dataList);
        //フォームリクエストで定義したルールを取得
        $rules = $request->rules();

        //Validatorファサードでバリデーターのインスタンスを取得、その際に入力情報とバリデーションルールを引数で渡す
        $validator = Validator::make($dataList, $rules);
        //入力情報がバリデーショルールを満たしている場合はtrue、満たしていな場合はfalseが返る
        $result = $validator->passes();
        //期待値($expect)と結果($result)を比較
        $this->assertEquals($expect, $result);
    }

    public function dataOrderRegistration()
    {
    // vendor/bin/phpunit をコンテナ内で実行すること
    return [

        '数値確認' => [
            ['money'],[249],true
            ],
        ];
    }
}

