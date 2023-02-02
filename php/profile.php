<?php
// if(isset($_POST['submit'])){
// $email = $_POST['email'];
// $password = $_POST['password'];
// if( $email !=''&& $password !='')
// {
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "guvi_profile";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
$test = mysqli_query($conn, "SELECT id from users where email = '$email' and password = '$password'");
// if($rowcount==1){
//         header('Location:../profile.html');
// }else{
//         echo "<script>";
//         echo " alert('Please check your credentials.');      
//                 window.location.href='../login.html';
//               </script>";
// }
// }
// else{
// ?><span><?php echo "Please fill all fields...";?></span> <?php
// }
// }
?>