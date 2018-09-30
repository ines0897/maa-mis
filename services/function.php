<?php
    
    define('DBINFO','mysql:host=localhost;dbname=capstone');
    define('DBUSER','root');
    define('DBPASS','');
    function performquery($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
    function fetchall($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
    
            return $stmt->fetchall();
       
    }


    function fetch($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetch();
    }
  

?>