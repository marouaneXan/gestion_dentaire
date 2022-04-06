<?php

  class Register extends DB {
      public function sign_up($data){
          $sql="INSERT INTO client VALUES (?,?,?,?,?)";
          $sql=$this->connect()->prepare($sql);
          if($sql->execute([$data['uniqId'],$data['nom'],$data['prenom'],$data['date_naissance'],$data['email']]))
               return 1;
          return 0;
      }
      public function login($uniqId){
          $sql="SELECT * FROM client where uniqId like ? ";
          $sql=$this->connect()->prepare($sql);
         if($sql->execute(array($uniqId))){
            if($sql->rowCount()>0)
                return 1;
            return 0;
         }
      }
      public function email_already_exist($email){
          $sql="SELECT * FROM client where email like ?";
          $sql=$this->connect()->prepare($sql);
          if($sql->execute(array($email)))
             if($sql->rowCount())
                return 1;
            return 0;
      }

      // get all clients

      public function get_all_clients(){
        $sql="SELECT * FROM `client`";
        $sql=$this->connect()->prepare($sql);
        if($sql->execute())
           return $sql->fetchAll();
        return 0;
      }
  }