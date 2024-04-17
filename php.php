<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uygulama</title>
</head>
<body>
	 <?php
 $profilAdi="BarisReal";
 $yil="2077";
 mkdir("Ladies/".$profilAdi);
 mkdir("Ladies/".$profilAdi."/".$yil);
 $aylar=["Jill Valentine","Ada Wong","Lara Croft","Cheryl Mason","Kate Denson","Haziran","Ashley" , 
"Bela Dimitrescu", "Daniela Dimitrescu","Cassandra Dimitrescu","Sheva Alomar","Maria"];
 for($i=0;$i<12;$i++){
    $url="Ladies/".$profilAdi."/".$yil."/".$aylar[$i];
    mkdir($url);
 }


 ?>

</body>
</html>