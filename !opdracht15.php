<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

 <?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
$voornaam = $_POST ['voornaam']; 

mysqli_query($conn, "INSERT INTO opdracht15 (voornaam) VALUES ('$voornaam')");
} ?> 

<?php
error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$database = "challenge16";

$conn = new mysqli($servername, $username, $password, $database); 

$conn = mysqli_connect('localhost', 'root','', 'challenge16');
 
  // connectie checken
  if(!$conn){ 
    echo 'connectie error:' . mysqli_connect_error();
  }

  // query schrijven voor alle producten
  $sql = 'SELECT voornaam FROM opdracht15 ORDER BY voornaam ASC';

  //query maken en resultaat ophalen
  $result = mysqli_query($conn, $sql);


  //kolom resultaat ophalen als 'array'
  $opdracht15 = mysqli_fetch_all ($result, MYSQLI_ASSOC);

  //connectie afbreken
  mysqli_close($conn);
?>

<form method="POST">
<input type='text' name="voornaam">
<button type="submit" name="submit"></button>
</form>

<?php
foreach ($opdracht15 as $voornaam){?>

<p> <?= $voornaam['voornaam'] ?> </p> 

<?php } ?>

<style>

.namen {
    height: 80vw;
    width: 80vw;
}

</style>