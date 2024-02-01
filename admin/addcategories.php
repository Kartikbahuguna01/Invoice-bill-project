<?php include('include/nav.php');?>


<?php



if(isset($_POST['submit']))
{
$cate=$_POST['cate'];

$qry="insert into categories(cate)values('$cate')";
if(mysqli_query($conn,$qry))
{
  echo 'Successfully';

}
else{
  echo 'Sorry';
}

}




?> 



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
        
        <div class="addform">

           <form  method="post" action="">

            <h1 style="margin-top: 20px; float: left; font-weight: 1000; margin-left: 50px; font-size:20px;">Add Categories</h1>
            <div class="mb-3" style="margin-top: 60px;">

              <input type="text" name="cate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Categories" style="height: 40px; width: 80%; margin-top: 30px; margin-left: 50px; ">
             
            </div>
         
         
            <input type="submit" class="btn btn-primary" style="margin-top: 20px; margin-left: 50px;" value="submit" name="submit">
          </form>      

        </div>
        
         <div class="addtable">
        
          <table border="2" style=" margin-left: 150px; margin-top: 90px; text-align: center;" width="50%" height="6%">
         
            <tr>
  
            <th>S.No</th>
            <th>Categories</th>
            <th>Button</th>
  
            </tr>


            <?php
  $qr="select  * from categories order by cid asc";
 $res=mysqli_query($conn,$qr);
while($row=mysqli_fetch_assoc($res))
{

            ?>

            <tr>
            
              <td><?php echo $row['cid']?></td>
              <td><?php echo $row['cate']?></td>
              <td><button>Delete</button></td>



            </tr>
  <?php }?>
  
           </table> 




         </div>
         


      </div>
     
</body>
</html>
