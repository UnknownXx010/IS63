<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  $username ="atha123";
  $password ="asd";
  
  if($username == "atha123" && $password =="atha27"){
   echo "$username benar  dan password benar, login kamu berhasil";
  }elseif($username !="atha123" && $password =="atha27"){
    echo "$username salah ,password benar";
  }elseif($username =="atha123" && $password !="atha27"){
    echo "$username benar ,password salah";
  }else{
    echo "lu GOBLOK ITU AJA LUPA";
  }
  


// $nama ="higan";
// $nilai =100;

// if($nilai >=70){
//   echo "<h2>$nama,selamat kamu lulus </h2>";
// }elseif($nilai >=40 ){
//   echo "<h2>$nama,maaf belum lulus </h2>";
// }else{
//   echo "<h2>$nama,hati hati kamu remedial </h2>";
// }
    
   
  
  ?>

</body>
</html>