<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $name = isset($_POST["name"]) ? $_POST["name"] : "";
        $date = isset($_POST["date"]) ? $_POST["date"] : "";
        $time = isset($_POST["time"]) ? $_POST["time"] : "";
        $adult=isset($_POST["adult"]) ? $_POST["adult"] : "";
        $child = isset($_POST["child"]) ? $_POST["child"] : "";
        $c5 = isset($_POST["c5"]) ? $_POST["c5"] : "";
        $camera = isset($_POST["camera"]) ? $_POST["camera"] : "";
        $veh = isset($_POST["veh"]) ? $_POST["veh"] : "";
       
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webpro";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    
    // using sql to create a data entry query
    $sql = "INSERT INTO qr(name, date, time, adult,child,c5,camera,veh) VALUES ('$name', '$date', '$time', '$adult','$child',
    '$c5','$camera','$veh')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo include"last.php";
    }
  
    // close connection
    mysqli_close($con);

?>