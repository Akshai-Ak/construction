<?php

define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'kvassets');
define('DB_PORT', '3306');
class Data
{
    public $connection;
    public $result;
    function __construct()
    {
        $this->con();
    }
    public function con()
    {
        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
        if (mysqli_connect_errno()) {
            die("Database connection failed badly" . mysqli_connect_error());
        } else {
            // echo "success <br>";
        }
    }
    public function query($sql)
    {
        $result = mysqli_query($this->connection, $sql);
        return $result;
    }
    public  function confirm_query($result)
    {
        if (!$result) {
            die("query failed");
        }
    }
}
$database = new Data();
