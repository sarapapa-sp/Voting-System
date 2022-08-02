<?php

include ("connect.php");

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

$standard = $_POST['std'];
// For photo
$photo = $_FILES['photo']['name'];
$temp_name = $_FILES['photo']['tmp_name'];

if($password != $confirmpassword){
    echo '<script>
    alert("Passwords do not match")
    window.location = ("../Partials/registration.php")
</script>';
}else{
    echo "<script>

    alert($temp_name)
</script>";

    move_uploaded_file($temp_name,"../uploads/$photo");
    $sql= "insert into `userdata` (username,mobile,password,photo,standard,status,votes) values ('$username','$mobile','$password','$photo','$standard',0,0);";

    // pushing to database
    $result = mysqli_query($con,$sql);

    if($result){
        echo '<script>
    alert("Registration Successful")
    window.location = ("../index.php")
</script>';
    }


}
?>

