<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
</head>

<style>



.dropbtn {
  background-color:  #017143;
  color: white;
  padding: 7px;
  font-size: 13.9px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  width: 70px;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: rgba(234,199,132)
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}


</style>

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
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
          </div>
        </div></td><td>
        
         <a  class="text3"href="about.html">About</a></td>
        <td> <a class="text4" href="contact.html">Contact</a></td>
         <td><a class="text5" href="registraion.html"><img src="images/login.svg" alt=""></a></td></tr></table>

         </div>

    </div>
</body>
</html>