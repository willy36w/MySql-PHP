<?php
// 資料庫的位置"school"
$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
//  * 使用new 語法來建立一個PDO連線物件，並將這個物件指定給一個變數，
//  * 方便接下來的操作
//  * 第一個參數位置是資料庫的設定資料
//  * 第二個參數是資料庫的使用者帳號
//  * 第三個參數是資料庫的使用者密碼
//  * 第四個參數是附加設定資料，以陣列方式呈現，這個參數可不填
$pdo = new PDO($dsn, 'root', '');


// 
function all($table, $where)
{
    global $pdo;
    $sql = "SELECT * FROM `{$table}` {$where}";
    $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
}

function find($table, $arg)
{
    global $pdo;

    $sql = "SELECT * FROM `{$table}` WHERE ";

    if (is_array($arg)) {
        $tmp = array2sql($arg);

        $sql .= join(" && ", $tmp);
    } else {

        $sql .= " `id`='{$arg}'";
    }

    $row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    return $row;
}