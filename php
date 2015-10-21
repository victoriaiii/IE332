<html>

<body>

 

 

<?php

$con = mysql_connect("mydb.ics.purdue.edu","g1040994","group12"
);

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("g1040994", $con);

 

$sql= "INSERT INTO OrderName(Material, Head, Arms, Body, Legs, Sensors, Addon, Processor, FirstName, LastName,email,street,city,state,zip,country,BillFirstName,BillLastName,BillEmail,BillStreet,BillCity,BillState,BillZip,BillCountry)

VALUES
('$_POST[Material]', '$_POST[Head]','$_POST[Arms]','$_POST[Body]','$_POST[Legs]','$_POST[Sensors]','$_POST[Addon]','$_POST[Processor]','$_POST[FirstName]','$_POST[LastName]','$_POST[email]','$_POST[street]','$_POST[city]','$_POST[state]','$_POST[zip]','$_POST[country]','$_POST[BillFirstName]','$_POST[BillLastName]','$_POST[BillEmail]','$_POST[BillStreet]','$_POST[BillCity]','$_POST[BillState]','$_POST[BillZip]','$_POST[BillCountry]')";


 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

//for price sum in html ($sql= SELECT sum() FROM ___ WHERE_____ -- $v = query($sql)
//php mysql display select result  

mysql_close($con)

?>

</body>

</html>

 

 


