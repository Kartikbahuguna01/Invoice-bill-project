<?php include('include/navbar.php') ?>

<style>

.main {
  
  width: 1359px;
  height:1800px;
  float: left;
  
  
  
  }

</style>

    <div class="body">

    <script>
     
     function myfunction() {

         var a = document.getElementById("name").value;
         var b = document.getElementById("email").value;
         var c = document.getElementById("no").value;
         var d = document.getElementById("pass").value;
         var e = document.getElementById("confirm").value;

      if(a==""){

      alert("Username Required");
  

      }

      else{
     
        if(b==""){

         alert("Email Required");


        }
       
        else {

         if(c=="") {
       
          alert("Phone-No Required");
      
           
         }
         

         else{


         if(d==""){

         
          alert("Password Required");
          


         }

         else{

          if(e=="") {

             alert("Retype Password");


          }

          else {

           if(d!=e) {

             alert("Password Unmatch");
            

           }

           else {

             alert("Registration Succesfully");


           }


          }



         }
        


         }

        }

      }

     }

      



    </script>


     <div class="structure" style="background-image: url('images/reg.png');  height: 80%; width: 100%; float: left;  background-size: 100% 100%;" >
  
  
  

      <div class="form1">
    
        <form>
          <h6 style="margin-left: 180px; margin-top: 50px; color: #017143; font-weight: 1000; font-size: 30px;">Registration</h6>
          <div class="mb-3" style="margin-top:25px;">
              <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="User Name">
            </div>
          <div class="mb-3">
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email address">
          </div>
          <div class="mb-3">
            <input type="number" class="form-control" id="no" aria-describedby="emailHelp" placeholder="Mobile no">
          </div>

          <div class="mb-3">
            <input type="password" class="form-control" id="pass" placeholder="Password">
          </div>
          <div class="mb-3">
              <input type="password" class="form-control" id="exampleInputPassword12" placeholder="Confirm Password" id="confirm">
            </div>
          <button type="submit" class="btn btn-primary" style="width: 30%; margin-left: 190px; background-color:#017143" onclick="myfunction()" >Submit</button><br><br>
          <p1 style="margin-left: 150px;">If you already have account ?</p1><a href="login1.html" style="margin-left: 5px;">Log In</a>
  

        </form>  

      </div>


       
     
      <img src="images/newrg.png" alt="" style="margin-top: 230px; height: 320px;  border-radius: 50%;">
       
    </div>
     

      </div>  
      
       <?php include('include/footer.php')?> 