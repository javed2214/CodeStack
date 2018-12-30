<?php

include 'dbhelper.php';

if($conn)
    echo "Connection Eshtablised!<br>";

$a=isset($_POST['question']) ? $_POST['question'] : '';
$b=isset($_POST['solution']) ? $_POST['solution'] : '';

if(isset($_POST['submit']))
{
$sql="INSERT INTO programs (question, solution) value ('$a', '$b');";

$result=mysqli_query($conn, $sql);

if($result)
    echo "Record Submitted!";
else
    echo "Failed to Submit Record !";
}
?>