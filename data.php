<?php

    //获取到函数名
    $func = $_GET['callback']; //假设$func 接收到的是 f1

    $arr = array(
        "name" => "jack",
        "age" => 16
    );

    $json =  json_encode($arr);

    echo "$func($json)";
?>