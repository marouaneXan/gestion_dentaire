<?php

  class Rdv extends DB{
      public function getRdv($id){
        $sql="SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
            FROM Orders
            INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID";
        $sql=$this->connect()->prepare($sql);
        if($id)
         return 1;
         
      }
  }