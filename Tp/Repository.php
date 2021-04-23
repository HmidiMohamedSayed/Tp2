<?php

include_once 'autoload.php';

class Repository
{
    protected $bd;
    protected $tableName;

    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->bd = ConnexionBD::getInstance();
    }

    public function findAll()
    {
        $request = "select * from " . $this->tableName;
        $response = $this->bd->prepare($request);
        $response->execute([]);
        return $response->fetchAll(PDO::FETCH_OBJ);
    }

    public function ajouter($firstname1, $name1, $age1)
    {
        $request = "INSERT INTO " . $this->tableName . " (name,firstname,age) VALUES('$name1','$firstname1','$age1')";
        $response = $this->bd->prepare($request);
        $response->execute([]);
        // return $response->fetchAll(PDO::FETCH_OBJ);
    }

    public function findById($id)
    {
        $request = "select * from " . $this->tableName . " where id = ?";
        $response = $this->bd->prepare($request);
        $response->execute([$id]);
        return $response->fetch(PDO::FETCH_OBJ);
    }

    public function supprimer($firstname1,$name1,$age1)
    {
        $request = "DELETE from " . $this->tableName . " where name=? and firstname=? and age=?" ;
        $response = $this->bd->prepare($request);
        $response->execute([$name1,$firstname1,$age1]);
    }
    public function modifier($firstname2,$name2,$age2,$firstname1,$name1,$age1)
    {
        $request = "UPDATE ". $this->tableName . "
SET firstname = ? ,name=?, age=? WHERE firstname=? and name=? and age=?";
        $response = $this->bd->prepare($request);
        $response->execute([$firstname2,$name2,$age2,$firstname1,$name1,$age1]);
    }
}