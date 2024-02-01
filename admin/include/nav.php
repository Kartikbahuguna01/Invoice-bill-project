<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Categories</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 90%;
      width: 20%;
      margin-left: 30px;
      margin-top: 25px;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }

     .well {

  
      background-repeat: no-repeat;
      background-size: 800px 600px;
      
      margin-left: 20px;
      background-position: center;

      

     }

     .addform {

            height: 100%;
            width: 40%;
           
            float: left;
            
           

     }

     .addtable{

height: 100%;
width: 60%;
float: left;
text-align: center;

     }

.addform1 {

height: 100%;
width: 100%;

float: left;



}

.addtable1{

height: 100%;
width: 100%;
/* float: left; */
text-align: center;
margin-left:50px;



}
  th,td {

 text-align: center;

  }

  </style>
</head>
<body>
<br><br><br>
<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Add Categories</a></li>
        <li><a href="#">Gender</a></li>
        <li><a href="#">Geo</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php


$host='localhost';
$user='root';
$pswd="";
$db='star_bugs';
$conn=mysqli_connect($host,$user,$pswd,$db);

?>