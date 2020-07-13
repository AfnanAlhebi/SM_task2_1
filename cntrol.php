<?php

$dbSrevername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "sm_map"; 

// Creat connection with the database 
$con =mysqli_connect($dbSrevername, $dbUsername, $dbPassword, $dbName) or die ("Unable to connect");



if(isset($_POST["right"]))
{

    $sql = "INSERT INTO `map`(`right`) VALUES ('R')";

    if (mysqli_query($con,$sql))
    {
        echo "---> Enter Right";
    }
    else
    {
        echo "ERROR: Unable to execute $sql. ".mysqli_error($con);
    }
}

elseif(isset($_POST["left"]))
{

    $sql = "INSERT INTO `map`(`left`) VALUES ('L')";

    if (mysqli_query($con, $sql))
    {
        echo "---> Enter Lift";
    }
    else
    {
        echo "ERROR: Unable to execute $sql. ".mysqli_error($con );
    }
}
    elseif (isset($_POST["forward"])){
    $sql = "INSERT INTO `map`(`forward`) VALUES ('F')";

    if (mysqli_query($con,$sql)){
        echo "---> Enter FORWARDS";
    }
    else{
        echo "ERROR: Unable execute $sql. ".mysqli_error($con);
    }
}

elseif(isset($_POST["backward"]))
{

    $sql = "INSERT INTO `map`(`backward`) VALUES ('B')";

    if (mysqli_query($con,$sql))
    {
        echo "---> Enter Backwords";
    }
    else
    {
        echo "ERROR: Unable to execute $sql. ".mysqli_error($con);
    }
}
else
{
    $sql = "INSERT INTO `map`(`stop`) VALUES ('S')";

    if (mysqli_query($con,$sql))
    {
        echo "---> Enter Stop";
    }
    else
    {
        echo "ERROR: Unable to execute $sql. ".mysqli_error($con);
    }
    mysqli_close($con); 
} 

?>
