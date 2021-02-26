<?php
/**
 * @author freegeek
 * 附近的人，根据经纬度计算出距离
 * remarK:作为公共函数用就行了 
 **/


/**
 *
 * @param array $a a目标经纬度
 * @param array $b b目标经纬度
 * 单位：米
 */
function getDistance($a, $b) {
    $a_lng=fD($a['lng'], -180, 180);
    $a_lat=jD($a['lat'], -74, 74);
    $b_lng=fD($b['lng'], -180, 180);
    $b_lat=jD($b['lat'], -74, 74);
    return Ce(yk($a_lng), yk($b_lng), yk($a_lat), yk($b_lat));
}

function fD($a,$b,$c) {
    return $a;
}
function jD($a, $b, $c) {
    return $a;
}
function yk($a) {
    return pi()* $a / 180;
}
function Ce($a, $b, $c, $d) {
    $dO = 6370996.81;
    return $dO * acos(sin($c) * sin($d) + cos($c) * cos($d) * cos($b - $a));
}
