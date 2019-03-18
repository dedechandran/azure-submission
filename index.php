<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Skuy</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Skuy!</a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <form class="col s12" action="index.php" method="post">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="user_name"  type="text" class="validate" name="name">
                        <label for="user_name">Name</label>
                    </div>
                </div>
                <div class="row">
                        <div class="input-field col s6">
                            <input id="user_email"  type="email" class="validate" name="email">
                            <label for="user_email">Email</label>
                        </div>
                </div>
                <div class="row">
                        <div class="input-field col s6">
                            <input id="user_job"  type="text" class="validate" name="job">
                            <label for="user_job">Job</label>
                        </div>
                </div>
                <input class="waves-effect waves-light btn" type="submit" name="save" value="Save"/>
            </form>
        </div>
    </div>
    <?php
     $serverName = "skuywebapp.database.windows.net";
     $userName = "skuyadmin";
     $password = "Dd12345678";
     $database = "db-user";

     $conn = mysqli_connect($serverName,$userName,$password,$database);

    // if($conn){
        // $queryInsert = "INSERT INTO ";
        
        // if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $job = $_POST['job'];
        if(isset($_POST['save'])){
            $queryInsert = "INSERT INTO [dbp].[User] (name,email,job,date) VALUES ('$name','$email','$job',now())";
            $result = mysqli_query($conn,$queryInsert);
            if($result){
                echo  "<h4>1 Record Added !</h4>";
            }
        }
        // }
    // }


    ?>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>