
<?php include('include/nav.php');?>



<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Logo</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="addcategories.html">Add Categories</a></li>
        <li><a href="#section3">Gender</a></li>
        <li><a href="#section3">Geo</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well" style="height: 500px; overflow:auto; ">
        
        <div class="addform1">

         <?php
         
         if(isset($_POST['btn']))
         {
         
          $ctg=$_POST['ctg'];
          $scat=$_POST['scat'];
          $mrp=$_POST['mrp'];
          $dis=$_POST['dis'];
          $img= rand(1000,10000)."_".$_FILES['img']['name'];
          $pic_loc=$_FILES['img']['tmp_name'];
          $img="images/".$img;
          move_uploaded_file($pic_loc,$img);
          
          $qry="insert into subcat(ctg,scat,mrp,dis,img)values('$ctg','$scat','$mrp','$dis','$img')";
          if(mysqli_query($conn,$qry))
          { ?>

          <script>
           alert('Successfully');
           </script>

           <?php
          }
          else{
            ?>

          <script>
           alert('Sorry');
           </script>

           <?php
          }
          
          }
        
         
         ?>


           <form style="margin-left: 40px;" action="" method="post" enctype="multipart/form-data">

           <table class="catgry" style="margin-top: 85px; margin-left:200px;" >
            
           <tr><td colspan="2" style=" font-weight: 1000; font-size:20px;">Add Subcategory</td></tr>
            <tr>
                 
                <td><h4> Categories:-</h4></td>
                <td><select class="form-select" name="ctg" aria-label="Default select example" style="width: 177px; height: 25px;" >
                  <option selected>Open this select menu</option>
                 
                  <?php
                  
                  $qr="select  * from categories order by cid asc";
                  $res=mysqli_query($conn,$qr);
                  while($row=mysqli_fetch_assoc($res))
{

            ?>


             
                  
               




                  <option value="<?php echo $row['cid']?>"><?php echo $row['cate']?></option>
                 <?php }?>
                </select></td>


            </tr>

            <tr>
           
                <td style="margin-top: 10px;"><h4>Sub.category:-</h4></td>
                <td>
                    <form>

                     <input type="text" placeholder="Category" name="scat">
                     
                     
                      </form>      

                </td>


            </tr>

            <tr>
           
                <td style="margin-top: 10px;"><h4>Price:-</h4></td>
                <td> <input type="text" placeholder="Price" name="mrp"></td>


            </tr>

            <tr>
           
                <td style="margin-top: 10px;"><h4>Description:-</h4></td>
                <td><input type="text" placeholder="Description" name="dis"></td>


            </tr>

            <tr>
           
           <td style="margin-top: 10px;"><h4>Add Image:-</h4></td>
           <td><input type="file" placeholder="add image" name="img" ></td>


       </tr>
               

            <tr>
           
                <td colspan="2" style="margin-top: 10px;"> <button type="submit" class="btn btn-primary" style="margin-top: 20px; margin-left: 130px;" name="btn">Submit</button></td>
                


            </tr>
               





            
           </table>
         
         
            <!-- <button type="submit" class="btn btn-primary" style="margin-top: 20px; margin-left: 50px;">Submit</button> -->
          </form>      

        </div>
        
         <div class="addtable1">
        
          <table border="2" style=" margin-left: 150px; margin-top: 90px; " width="50%" height="6%">
         
            <tr>
  
            <th>S.No</th>
            <th>Categories</th>
            <th>Sub.Categary</th>
            <th>Price</th>
            <th style="width:200px">Description</th>
  
            </tr>

            <tr>
            
              <td>1</td>
              <td>Coffee</td>
              <td>Latte</td>
              <td>300</td>
              <td></td>



            </tr>
  
  
           </table> 




         </div>
         


      </div>
     
</body>
</html>


     
     
      


    </div>
    <div class="footer"></div>






    </div>
</body>
</html>