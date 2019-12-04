<?php
function countDown($arg1){
    $arg1 = 0-10;
    try {
        if($arg1<1){
        throw new Exception('Er is iets fout gegaan');
        }elseif ($arg1>10) {
        throw new Exception('Er is iets fout gegaan');
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>