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

    
?>


<?php
$query= "SELECT * FROM question";
$results= $mysqli->query($query) or die($mysqli->error.__LINE__);

$total = $results->num_rows;

?>
<html >
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
<header>
       <div class="container">
           <h1>PHP QUIZZER</h1>

       </div>
    </header>

       <div class="container">
           <h2>TEST YOUR PHP KNOWLEDGE</h2>
           <ul>
               <li><strong>Number of questions:</strong>    <?php echo $total; ?>   </li>
               <li><strong>Type:</strong> Multiple Choice</li>
               <li><strong>Estimated Time:</strong>     <?php echo $total * .5; ?>   </li>
           </ul>
           <a href="aaquiz?n=1" class="start">Start Quiz</a>
 

       </div>
      

     
         
</body>
</html>
