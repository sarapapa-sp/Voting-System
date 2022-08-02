<?php
session_start();

if(!isset($_SESSION['id'])){

    header('location:../');
}
$data = $_SESSION['data'];

if($_SESSION['status'] == 1){
    $status = '<b class="text-success">Voted</b>';
}else{
    $status = '<b class="text-danger">Not voted</b>';
}


?>
<html>
<head>
    <title>Voting System - Dashboard</title>
    <link rel="stylesheet" href="../style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body class="bg-secondary text-light">

    <div class="container my-5">
        <a href="../"><button class="btn btn-dark text-light px-3">Back</button></a>
        <a href="logout.php"><button class="btn btn-dark text-light px-3">LOGOUT</button></a>
        <h1 class="my-3">Voting System</h1>
        <div class="row my-5">
            <div class="col-md-7">
                <!--        Groups-->
                <?php
                    if(isset($_SESSION['group'])){
                        $groups = $_SESSION['group'];
                        for($i=0;$i<count($groups);$i++){
                            ?>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="../Uploads/<?php echo $groups[$i]['photo']; ?>" alt="image1">
                                </div>
                                <div class="col-md-8">
                                    <strong class="text-dark h5">Group Name :</strong><?php echo $groups[$i]['username']; ?>
                                    <br>
                                    <strong class="text-dark h5">Votes:</strong> <?php echo $groups[$i]['votes']; ?><br>
                                </div>

                            </div>

                            <form action="../Actions/voting.php" method="post">
                                <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes']; ?>"/>
                                <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id']; ?>"/>

                                <?php

                                    if($_SESSION['status']==1){
                                        ?>
                                            <button class="btn btn-success my-4 text-white px-3" disabled>Voted</button>
                                        <?php
                                    }else{
                                        ?>

                                            <button class="btn btn-danger my-4 text-white px-3 " type="submit">Vote</button>
                                        <?php
                                    }
                                ?>

                            </form>
                            <hr>
                <?php
                        }
                    }
                    else{
                ?>
                <div class="container">
                    <p>No groups to display</p>
                </div>
                        <?php
                    }
                ?>


            </div>
            <div class="col-md-5">
<!--User Profile-->
                <img src="../Uploads/<?php echo $data['photo'] ?>" alt="userImage">
                <br>
                <br>
                <strong class="text-dark h5">Name :    </strong><?php echo $data['username']; ?>  <br> <br>
                <strong class="text-dark h5">Mobile :  </strong> <?php echo $data['mobile']; ?> <br> <br>
                <strong class="text-dark h5">Status :</strong>  <?php echo $status; ?> <br> <br>

            </div>
        </div>
    </div>
</body>
</html>
