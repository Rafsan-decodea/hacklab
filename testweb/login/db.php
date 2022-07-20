<?php
ini_set('display_errors', 1);
class DB
{

    public $server = "localhost"; // this is my  mysql host 
    public $username = "root";// usernmae
    public $password = "rafsan123";// password 
    // public $password = "";
    public $dbname = "test";// db name 
    public $conn; // this is Connection global variable 

    public function __construct()
    {
        $this->conn = mysqli_connect($this->server, $this->username, $this->password, $this->dbname);

        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        // That code try to say if your connection is success Then Ok .. if not okey 
        // Then There  Connection failed Message Appar on screen 
    }

    public function query($sql)
    {
        $result = mysqli_query($this->conn, $sql);
        return $result;// This is a function Which is Execute our Extarnel mysql code 

    }

}

// That is actullay a database class which we can you agina and again 
