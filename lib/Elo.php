<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/20/2016
 * Time: 1:08 AM
 */

define("ELO", 400);

/**
 * Tinh diem cua 2 nguoi duoc vote
 * @param $Ra
 * @param $Rb
 * @param $Aa
 * @param $Ab
 * @return array
 */
function elo($Ra , $Rb , $Aa , $Ab ){
    $Ea = 1/(1 + pow(10 , ($Rb-$Ra)/ELO) );

    $Eb = 1/(1 + pow(10 , ($Ra-$Rb)/ELO) );

    $_Ra = $Ra + K($Ra)*($Aa - $Ea);
    $_Rb = $Rb + K($Rb)*($Ab - $Eb);
    return array($_Ra , $_Rb);
}

/**
 * @param $R
 * @return int
 */
function K($R){
    if ($R > 0 && $R < 1600) {return 25;}
    else{
        if ($R >= 1600 && $R < 2000){return 20;}
        else {
            return $R >= 2000 && $R < 2400 ? 15 : 10;
        }
    }
}