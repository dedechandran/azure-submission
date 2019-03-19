<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            <form class="col s12" action="" method="post">
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
                <input type="submit" name="save" value="Save"/>
                <input type="submit" name="load-data" value="Load Data"/>
            </form>
        </div>
    </div>
    <?php
 

     $serverName = "skuywebapp.database.windows.net"; 
     $connectionOptions = array(
         "Database" => "user-db", 
         "Uid" => "skuyadmin", 
         "PWD" => "Dd12345678" 
     );
  
     $conn = sqlsrv_connect($serverName, $connectionOptions);

     if(!$conn){
        echo "<h4>Gagal Connect !</h4>";
     }
     echo "<h4>Connect !</h4>";

    // if(isset($_POST['save'])){
        // $name = $_POST['name'];
        // $email = $_POST['email'];
        // $job = $_POST['job'];
        $date = date("Y-m-d",time());
        echo $date;

    //     $queryInsert = "INSERT INTO [dbo].[Users] (name,email,job,date) VALUES (?,?,?,?)";
    //     $param = array($name,$email,$job,$date);
    //     $result= sqlsrv_query($conn,$queryInsert,$param);
    //     if($result){
    //         echo  "<h4>1 Record Added !</h4>";
    //     }else{
    //         echo  "<h4>Gagal Menambahkan Record!</h4>";
    //     }
    // }else if(isset($_POST['load-data'])){
    //     $querySelect = "SELECT * FROM [dbo].[Users]";
    //     $result = sqlsrv_query($conn,$querySelect);
    //     if($result){
    //         echo "<table>";
    //         echo "<thead>";
    //         echo "<tr><th>Name</th>";
    //         echo "<th>Email</th>";
    //         echo "<th>Job</th>";
    //         echo "<th>Date</th></tr>";
    //         echo "</thead>";
    //         echo "<tbody>";
    //         while($row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC)){
    //             echo "<tr><td>" . $row['name'] . "</td>";
    //             echo "<td>" . $row['email'] . "</td>";
    //             echo "<td>" . $row['job'] . "</td>";
    //             echo "<td>" . $row['date'] . "</td></tr>";
    //         }
    //         echo "</tbody>";
    //         echo "</table>";
    //     }
    // }
    ?>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>