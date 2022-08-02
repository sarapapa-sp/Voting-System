<html>
<head>
    <title>Voting System - Registration Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        body{
            background-color: black;
        }
    </style>
</head>
<body>
<h1 class="text-info text-center p-4">Voting System</h1>
<div class="bg-info py-4">
    <h2 class="text-center">Registration</h2>
    <div class="container text-center">
        <form action="../Actions/register.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="text" name="username" placeholder="Enter Your username" require="required" class="form-control w-50 m-auto" />
            </div>
            <div class="mb-3">
                <input type="text" name="mobile" placeholder="Enter Your mobile number" require="required" class="form-control w-50 m-auto" />
            </div>
            <div class="mb-3">
                <input type="password" name="password" placeholder="Enter Your password" require="required" class="form-control w-50 m-auto" />
            </div>
            <div class="mb-3">
                <input type="password" name="confirmpassword" placeholder="Confirm Your password" require="required" class="form-control w-50 m-auto" />
            </div>
            <div class="mb-3">
                <input type="file" name="photo" class="form-control w-50 m-auto" />
            </div>
            <div class="mb-3">
                <select name="std" class="form-select w-50 m-auto">
                    <option class="" value="group">GROUP</option>
                    <option class="" value="voter">VOTER</option>
                </select>
            </div>
            <button class="btn btn-dark my-4" type="submit">REGISTER</button>
            <p>Already have an account <a href="../index.php" class="text-white">LOGIN</a></p>
        </form>
    </div>
</div>
</body>
</html>
