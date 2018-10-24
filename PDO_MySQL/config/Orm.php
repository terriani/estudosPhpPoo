<?php

class Orm extends PDO
{
    public function __construct($sgdb, $host, $dbName, $user, $password, $persistent)
    {

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        $dns = "$sgdb:host=$host;dbname=$dbName;charset=utf8";
        
        parent::__construct($dns, $user, $password, $option);
    }


    

    public function select($querySQL, array $where = [], $responseAll = true, $fetchMode = PDO::FETCH_OBJ)
    {
        $stmt = $this->prepare($querySQL);

        foreach($where as $key => $value){

            $type = (is_int($value))? PDO::PARAM_INT : PDO::PARAM_STR;

            $stmt->bindValue(":$key", $value);
        }

        $stmt->execute();

        if($responseAll){
            return $stmt->fetchAll($fetchMode);
        }

        return $stmt->fetch($fetchMode);
    }
}