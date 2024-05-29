<?php
    class NovelProcess {
        public $getCon;
        protected $servername = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $dbname = "DB_Novel";

        function __construct(){
            $this->con = mysqli_connect($this ->servername,
                $this->username, $this->password);
            mysqli_select_db($this->con, $this->dbname);
            mysqli_query($this->con, "SET NAMES 'utf8' ");

        }                  
   
public function Del_tbNovel($publisher)
{
    $result = false;
    $sql = "DELETE FROM tbNovel WHERE Publisher = '$publisher'";
    if(mysqli_query($this->con, $sql)){
        $result = true;
    }
    return json_encode($result);
}
}


?>