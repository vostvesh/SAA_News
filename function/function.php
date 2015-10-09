<?php
function dbConnect(){
    mysql_connect(SERVER, USER, PASS);
    mysql_select_db(DB);
}

function GetAllNews($sql){
    dbConnect();
    $result = [];
    $res = mysql_query($sql);
    while($row = mysql_fetch_assoc($res)){
        $result[] = $row;
    }
    return $result;
}

function CreateNews($sql){
    $dir = __DIR__. "/content/";
    move_uploaded_file($_FILES['tmp_name'], $dir . $_FILES['name']);
    dbConnect();
    mysql_query($sql);
}