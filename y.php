<?php
  
  $Name=$_POST['Name'];
  $Email Address=$_POST['Email Address'];
  $Contact number=$_POST['Contact number'];
  $Branch=$_POST['Branch'];
  $Class=$_POST['Class'];
  $year=$_POST['year'];

  $con=new mysqli('localhost','root','','form');
  if($con -> connect_error)
  {
    die('Connection Failed :'.$con->connect_error);

  }
  else
  {
  $stm= $con-> prepare("insert into regestration(Name,Email Address,Contact number,Branch,Class,year)values(?,?,?,?,?,?)");
  $stm->bind_param("ssisss",$Name,$Email Address,$Contact number,$Branch,$Class,$year);
  $stm->execute();
  $stm->close();
  $con->close();`
  }

?>