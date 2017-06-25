<?php

$str = '';
for ($i = 1; $i <= 170; $i++)\
{
    $str += sprintf("%05d", $i).".jpg\n";
}
file_put_contents("train.txt", $str);

