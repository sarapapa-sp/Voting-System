<html>
<head>
    <title>Voting System</title>
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

        <h2 class="text-center">Login</h2>
        <div class="container text-center">
            <form action="./Actions/login.php" method="post">
                <div class="mb-3">
                    <input type="text" name="username" placeholder="Enter Your username" required="required" class="form-control w-50 m-auto" />
                </div>
                <div class="mb-3">
                    <input type="password" name="password" placeholder="Enter Your Password" required="required" class="form-control w-50 m-auto" />
                </div>
                <div class="mb-3">
                    <input type="text" name="mobile" placeholder="Enter Your mobile number" required="required" class="form-control w-50 m-auto" maxlength="10" minlength="10"/>
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option class="" value="group">GROUP</option>
                        <option class="" value="voter">VOTER</option>
                    </select>
                </div>
                <button class="btn btn-dark my-4" type="submit">LOGIN</button>
                <p>Dont have an account <a href="./Partials/registration.php" class="text-white">REGISTER</a></p>
            </form>
        </div>
    </div>
</body>
</html>
