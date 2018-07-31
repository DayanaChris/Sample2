<!DOCTYPE html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="sample2";

 
 $mysqli = new mysqli($servername,$username, $password, $dbname);

if($mysqli->connect_error){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();

}
?>


<?php session_start(); ?>

<?php 
    //check to see id score is set_error_handler
    if(!isset($_SESSION['score'])){
        $_SESSION['score'] = 0;
    }

    if($_POST){
        $number = $POST['number'];
        $selected_choice = $_POST['choice'];
        $next = $number+1;

        //get total questions
        $query = "SELECT * FROM `questions`";
        //get results
        $results= $mysqli->query($query) or die ($mysqli->error.__LINE__);
        $total= $results->num_rows;


        //get correct choice
        $query= "SELCT * FROM `choices` WHERE question_number = $number AND is_correct= 1";

        //get result
        $result= $mysqli->query($query) or die ($mysqli->error.__LINE__);

        //get row
        $row = $result->fetech_assoc();

        //set correct choice 
        $correct_choice = $row['id'];

        //compare
        if($correct_choice ==$selected_choice){
            //answer is correct
            $_SESSION['score']++;
        }
        //check if last question
        if($number == $total){
            header("Location: aafinal");
            exit();
        }else{
            header("Location: aaquiz?n=".$next);


        }


    }

?>

