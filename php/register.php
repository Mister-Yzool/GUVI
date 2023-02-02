
<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];
if($name !=''&& $email !=''&& $contact !='')
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "guvi_profile";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
$test = mysqli_query($conn, "INSERT INTO users (name,dob,age,contact,email,password)
VALUES ('$name','$dob','$age','$contact','$email','$password');");
if($test==1){
        header('Location:../login.html');
}
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>