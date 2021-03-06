<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 04/11/18
 * Time: 8:54 AM
 */
namespace App\Auto\Mems;
use App\Auto\Mems\Session;

class Token{
    public static function generate(){
        return Session::put(Config::get('sessions/token_name'),md5(uniqid()));
    }
    public static function check($token){
        $tokenName= Config::get('sessions/token_name');
        if (Session::exists($tokenName) && $token ===Session::get($tokenName)){
            Session::delete($tokenName);
            return true;
        }
        return false;
    }
}