<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

class CreneauController{
      public function index(){
            $res=new Creneau();
            $data=$res->getAllCreneau();
            echo json_encode($data);
      }
  }