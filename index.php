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
                <div class="btn">
                    <input type="submit" name="save" value="Save"/>
                </div>
                
            </form>
        </div>
    </div>
    <?php
    // $serverName = "";
    // $connOptions = array(
    //     "Database" => "",
    //     "Uid" => "",
    //     "PWD" => ""
    // )

    // $conn = sqlsrv_connect($serverName,$connOptions);

    // if($conn){
        // $queryInsert = "INSERT INTO ";
        
        // if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['save'])){
            $user_name = $_POST['name'];
            echo  "<h2>Selamat Datang " . $user_name . "</h2>";
        }
        // }
    // }


    ?>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>