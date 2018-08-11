<?php
// https://qiita.com/kazu56/items/06660b0dc8638a6c948f
// https://qiita.com/suin/items/31a1c7c47f49cb53f2a7
// https://qiita.com/hisomura/items/382b0a98cc4e07dce6b8

// $file = new SplFileObject('test.csv');
// $file->setFlags(SplFileObject::READ_CSV);

// foreach ($file as $line) {
//     //終端の空行を除く処理　空行の場合に取れる値は後述
//     // if(is_null($line[0])){
//     //     $records[] = $line;
//     // }
//     $records[] = $line;
// }

// var_dump($records);

// $file_obj = new SplFileObject('hoge.txt');
// $file_obj->setFlags(SplFileObject::READ_AHEAD | SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE);

// foreach ($file_obj as $line_num => $line) {
//     echo "$line_num $line\n";
// }

foreach (new DirectoryIterator('./') as $file) { 
    // .と..は省く
    if($file->isDot()){ continue; }
    echo $file, PHP_EOL;
}