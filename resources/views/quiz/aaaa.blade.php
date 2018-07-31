<!doctype html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="sample2";
$x="correct";
$y="incorrect";
 
try{
$conn = mysqli_connect($servername,$username, $password, $dbname);
//echo("successfully");
}
catch(MySQLi_Sql_Exception $ex)
{
echo("error");
}
if(isset($_POST['submit'])){
$mteverest=$_POST['mteverest'];
$query= "INSERT INTO `questions`(`questions`) VALUES ($mteverest)" ;
mysqli_stmt_bind_param($query,'s',$mteverest);


 
    try{
    $result=mysqli_query($conn, $query);

    //$result = mysqli_stmt_execute($query);
    
        if($result){
            if(mysqli_affected_rows($conn)>0){
            echo "submitted successfully";
        }
        else{
            echo "error in submission";
            }
        }
    }catch(Exception $ex){
        echo ("error in connection");
    }

    $querytwo = "select questions.questions, answers.answers from answers inner join (select questions from questions order by id desc limit 1) as questions on questions.questions = answers.answers";
    $resulttwo = mysqli_query($conn, $querytwo);
    if($resulttwo){
        if(mysqli_affected_rows($conn)>0){
        $querythree= "INSERT INTO `compare`(`value`) VALUES ('Correct')";
        $resultthree=mysqli_query($conn, $querythree);
    }else{
        $querythree= "INSERT INTO `compare`(`value`) VALUES ('Incorrect')";
        $resultthree=mysqli_query($conn, $querythree);
        }
 
    }
}
    if(isset($_POST['check'])){
        $queryfour = "select value from compare order by id desc limit 1";
        $resultfour = mysqli_query($conn, $queryfour);
            if($resultfour){
                if(mysqli_num_rows($resultfour)){
                    while($rows = mysqli_fetch_array($resultfour, MYSQL_BOTH)){
                    echo($rows['value']."<br>");
    
                }
            }
    }else{
        echo "error in result";
        }
    }
 
 
 
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
 
<body>
<form action="{{ route('aaaa') }}" method="post">
<table align="center">
<tr>
<td>What is the height of mt everest?</td>
 
</tr>
<tr>
<td></td>
<td><input type="radio" name="mteverest" value="8848">8848</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="mteverest" value="9848">9848</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="mteverest" value="1048">10848</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="mteverest" value="11848">11848</td>
</tr>
<tr>
<td><input type="submit" name="submit" value="submit"></td>
<td><input type="submit" name="check" value="check result"></td>
</tr>
 
</table>
</form>
</body>
</html>