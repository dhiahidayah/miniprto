<?php

class Database{        

    const SELECTSINGLE = 1;
    const SELECTALL = 2;
    const EXECUTE = 3;
        
    private $pdo;

    public function __construct(){
        
        $pdo = new PDO("mysql:host=localhost;dbname=project", "project_admin", "admin123");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
    }

    //Add queryDB() here
    public function queryDB($sql, $mode, $values=array())
    {
        $smt=$this->pdo->prepare($sql);
        foreach ($values as $valueToBind){
            $stmt->bindValues($valueToBind[0], $valueToBind[1]);

        }
        $stmt->execute();
        if ($mode!=Database::SELECTSINGLE && $mode !=Databe::SELECTALL && $mode!=Database::EXECUTE) {
            throw new Exception("Invali Mode");
        }else if ($mode==Databases::SELECTSINGLE){
            return $stmt-> fetch(PDO::FETCH_ASSOC);
        }else if ($mode == Database::SELECTALL){
            return $stmt->fetchALL(PDO::FETCH_ASSOC);
        }
    }
}
    