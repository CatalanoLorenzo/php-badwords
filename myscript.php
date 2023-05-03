<?php

$word = $_POST["word"];
$censorship = $_POST["censorship"];
echo $word;
echo strlen($word);

    echo str_ireplace($censorship,"***",$word);
    echo strlen($censorship);

