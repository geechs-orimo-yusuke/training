<?php

namespace classes;

function test()
{

}

/**
 * Utilクラス
 *
 * Class util
 */
class util
{
    /**
     * セッションに登録されているメッセージを取り出し返却する。
     * セッションに登録されたメッセージを削除する。
     *
     * @return string
     */
    static function getSessionMessage()
    {
        // 人情報編集の結果メッセージを設定
        if (!isset($_SESSION)) {
            session_start();
        }
        if (isset($_SESSION['message'])) {
            $message = $_SESSION['message'];
            unset($_SESSION['message']);
            return $message;
        }

        return '';
    }

    /**
     * パラメーター取得
     *
     * @param string $name 取得したいリクエスト名
     *
     * @return null
     */
    static function getParam(string $name)
    {
        if (isset($_POST[$name])) {
            return $_POST[$name];
        }
        if (isset($_GET[$name])) {
            return $_GET[$name];
        }
        return null;
    }

    /**
     * 入力された値が$_POSTに存在するか判別する
     *
     * @param $name
     *
     * @return bool
     */
    static function isExistsInputParam(String $name)
    {
        return isset($_POST[$name]);
    }
}