<?php

  if(
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['date']) &&
    isset($_POST['number'])
  ){
    $login='lambda';$password='lambda';
    try{
      $PDO = new PDO('mysql:dbname=lambda;hostname=serveraddr',$login,$password);
    }
    catch(PDOException $e){
      print($e->getMessage());
    }
    $req='INSERT INTO reservations VALUES fname=\':fname\',femail=\':femail\',fdate=\':fdate\',fnumber=\':fnumber\'';
    $stat=$PDO->prepare($req);
    $stat->execute($DATA);
  }
  else{
    echo "You must completing Name, Email and Date options.";
  }
