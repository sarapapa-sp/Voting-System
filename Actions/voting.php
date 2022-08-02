<?php
session_start();
include ('connect.php');

$votes = $_POST['groupvotes'];
$gid = $_POST['groupid'];

$totalvotes = $votes + 1;

$uid = $_SESSION['id'];
$updatevotes = mysqli_query($con,"update `userdata` set votes='$totalvotes' where id='$gid'");

$updatestatus  = mysqli_query($con,"update `userdata` set status=1 where id='$uid'");

if($updatevotes and $updatestatus){
    $sqlgroup = "select username,photo,votes,id from `userdata` where standard='group'";
    $resultgroup = mysqli_query($con,$sqlgroup);

    $groups = mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);

    $_SESSION['group'] = $groups;
    $_SESSION['status']=1;
    echo '<script>alert("Voting Successful");
        window.location = "../Partials/dashboard.php"
    </script>';

}else{
    echo '<script>alert("Technical Error !! try again later");
    window.location = "../Partials/dashboard.php"
</script>';
}
?>
<html>
<head>
    <title>VOTING SYSTEM</title>

</head>
<body>

</body>
</html>
