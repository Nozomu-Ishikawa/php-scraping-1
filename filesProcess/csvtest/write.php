<?php
// https://qiita.com/hisomura/items/382b0a98cc4e07dce6b8

$file = new SplFileObject("test.txt", "w");
$file->fwrite("aiueo\n");