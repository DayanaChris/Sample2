<!doctype html>
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

    $number= (int) $_GET['n'];

    $query="SELECT * FROM `question`  WHERE question_number = $number ";

    $result= $mysqli->query($query) or die($mysqli->error.__LINE__);

    $question= $result->fetch_assoc();


     $query="SELECT * FROM `choices`  WHERE question_number = $number ";

    $choices= $mysqli->query($query) or die($mysqli->error.__LINE__);

?>


<?php
$query= "SELECT * FROM question";
$results= $mysqli->query($query) or die($mysqli->error.__LINE__);

$total = $results->num_rows;

?>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">



<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

{{-- bootstrap --}}

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>


<body class="run-animation">
       @include('inc.messages')
       @yield('content') 

       <div class="container">
           <div class="current"> QUESTION <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
           <p class="question">
               <?php echo $question['text']; ?>

           </p>

       <form action="/aaprocess" method="POST">
        <ul class = "choices">
            <?php while ($row = $choices->fetch_assoc()): ?>
                <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" />  <?php echo $row['text']; ?></li>


            <?php endwhile; ?>

               
         <input type="submit" value="Submit"/>
         <input type="hidden" value="number" value="<?php echo $number; ?>"/>

        
         </form>

       </div>
      

     <form action="/aaprocess" method="POST">
        <ul class = "choices">
      <input type="image" name="choice" value="1" style="width:10%"  src="SPEDEMY/sub_menu/btn_lesson.png" border="0" alt="Submit" />AAAAAA 
    
    
    
      <li> <input type="radio" name="choice" value="1"> <img class="card-img-top img-fluid zoom btn center" style="width:10%"  src="SPEDEMY/sub_menu/btn_lesson.png" alt="Card image cap"> A </li>
                
                
        </ul>
                <input type="submit" value="Submit">
        </form>
         
</body>
</html>
