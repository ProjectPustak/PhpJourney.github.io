<?php

   try{
    $server = 'localhost';
    $user ='root';
    $password ='';
    $db = 'phppdo';
 
    $dbcon = new PDO("mysql:host=$server; dbname=$db",$user,$password);

    $dbcon->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


   //  $insertdb = "insert into student
   //  (name,age,class)
   //  values (:name,:age,:class) ";
   //  $stmt = $dbcon->prepare($insertdb);

   //  $stmt->bindparam(':name',$name);
   //  $stmt->bindparam(':age',$age);
   //  $stmt->bindparam(':class',$class);


   //  $name = "Sri Krishna Givinda Hare Murari";
   //  $age = 50;

   //  $class =8;

   //  $stmt->execute(['name'=>$name,'age'=>$age,':class'=>$class]);

   // $idnum = 102;

   // $name = 'Sri Krishna Givinda Hare Murari';

   $sql = "select * from student ";

   $stmt = $dbcon->prepare($sql);

   $stmt->execute();
   
   // $result =$stmt->fetch();

   // while($result =$stmt->fetch()){
   //    echo "My name is : " .$result->name. " And My age is" .$result->age ."<br>";
   // }

   $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
   foreach($result as $val){
      echo "My name is : " .$val['name']. " And My age is" .$val['age'] ."<br>";
   }

   




    

    
    

 
   }catch(PDOException $e){
        echo 'Error: ' .$e->getMessage();
   }

   
   
?> 