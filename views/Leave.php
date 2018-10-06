 <?php
 include ("../function.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>LEAVE REQUEST</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/Leave.css"> 

<style>
 .modal-backdrop {
    position: relative !important;
  }
  body{
    padding:0px !important;
    margin: 0px !important;
  }
  
</style>


<body>
<?php $root_path = '../' ?>
<?php require 'header.php' ?>

<?php require 'superAdminNavigator.php'; ?>
<br><br>
<table class="table table-hover" style="background-color: white">
  <thead>
      <th>BADGE NO#</th>
      <th>FULL NAME</th>
      <th>REASON</th>
      <th>START DATE</th>
      <th>END DATE</th>
      <th>ACTION</th>
  </thead>
  <tbody>
    
       <?php

            $query= "SELECT * from leave1";
            if(count(fetchall($query))>0){
              foreach (fetchall($query) as $row) {
                ?>
          <td><?php echo $row['Badge'];?></td>
          <td><?php echo $row['Fullname']?></td>
          <td><?php echo $row['Reason']?></td>
          <td><?php echo $row['Sdate']?></td>
          <td><?php echo $row['Ldate']?></td>
          
         <td> <a class="btn btn-success" id="mybutton" 
                                   data-toggle="modal" 
                                   data-target="#accept" 
                                   data-id="<?php echo $row['ID']?>"> Accept</a>
         <a class="btn btn-danger" id="mybutton" 
                                   data-toggle="modal" 
                                   data-target="#myModal" 
                                   data-id="<?php echo $row['ID']?>"> Reject</a>
          </tr> 
        <?php        
              }

            }else{
              // echo "no pending request.";
            }

        ?>
  </tbody>

</table>

<div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog modal-l">
     <!-- Modal content-->
     <div class="modal-content">

        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Rejecting Record</h4>
        </div>

        <div class="modal-body">
              
        <p style="color: red"> Do you really want to Rejecting this record?</p>
        <form method="POST">
        <input type="comment" name="reason" placeholder="why ?">
        </form>
        </div>

       <div class='modal-footer'  >
      

          <input type="hidden" name="ID" value="<?php echo $row['ID']?>">
           
           <a href="delete.php?ID=<?php echo $row['ID']?>" class="btn btn-danger">Reject</a>
          <a class='btn btn-default'  data-dismiss="modal"> Cancel</a>
      
      </div>

     </div>                                       
   </div>
</div>


<div class="modal fade" id="accept" role="dialog">
   <div class="modal-dialog modal-sm">
     <!-- Modal content-->
     <div class="modal-content">

        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Rejecting Record</h4>
        </div>

        <div class="modal-body">
              
        <p style="color: green"> Do you really want to Accept this record?</p>
        </div>

       <div class='modal-footer'  >
      

          <input type="hidden" name="ID" value="<?php echo $row['ID']?>">
           
           <a href="accept.php?ID=<?php echo $row['ID']?>" class="btn btn-success">Accept</a>
          <a class='btn btn-default'  data-dismiss="modal"> Cancel</a>
      
      </div>

     </div>                                       
   </div>
</div>


<?php require 'footer.php' ?>
</body>
</html>