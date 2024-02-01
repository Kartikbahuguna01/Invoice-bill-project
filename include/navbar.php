<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/html(b).css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
</head>





<script>
  /* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  </script>
<body>
    <div class="main">
   
       
      <div class="header">


      <a  class="logo"><img src="images/gif1.gif" alt="" srcset="" style="height: 80px; border-radius: 50%;"></a>
            <table  style="margin-top: 17px;"><tr><td>
            <a class="text1" href="indexnew(a).html">Home</a></td><td>         <div class="dropdown">
             <button onclick="myFunction()" class="dropbtn">Menu</button>
             <div id="myDropdown" class="dropdown-content">
               <a href="index.html">Home</a>
               <a href="about.html">About</a>
               <a href="contact.html">Contact</a>
             </div>
           </div></td><td>
           
            <a  class="text3"href="about.html">About</a></td>
           <td> <a class="text4" href="contact.html">Contact</a></td>
            <td><a class="text5" href="registraion.html"><img src="images/login.svg" alt=""></a></td></tr></table> 
   
            </div>