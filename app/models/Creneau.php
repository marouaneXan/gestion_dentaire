<?php


  class Creneau extends DB{
      public function getAllCreneau(){
        $sql="SELECT * FROM creneau";
        $res=$this->connect()->prepare($sql);
        if($res->execute())
           return $res->fetchAll(PDO::FETCH_ASSOC);
        return 0;
      }
  }