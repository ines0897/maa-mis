

<?php
session_start();
 include ("function.php");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>LEAVE</title>

</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/stylesheets/style.css">
<Style>

</Style>

<body>
<ul>
  <li><a href="admin.php"><img src="home.png"></a></li>
  <li><a href="personnel.php"><img src="personal.png"></a></li>
  <li><a class="active" href="leave.php"><img src="leave.png"></a></li>
  <li><a href="duty.php"><img src="reminder.png"></a></li>
  <li style="float: right;"><a href="index.php"><img src="logout.png"></a></li>
</ul>
<form>
<center><h1> LEAVE REQUEST'S</center></h1>



</div>
<center>
    <main role="main">

       <section class="jumbotron text-center">
        <div class="container">
        <?php

            $query= "SELECT * from leave1";
            if(count(fetchall($query))>0){
              foreach (fetchall($query) as $row) {
                ?>
          <h1 class="jumbotron-heading"><?php echo $row['Fullname'];?></h1>
          <p class="lead-text-muted"><?php echo "<b>BADGE:</b>".$row['Badge']?></p>
          <p class="lead-text-muted"><?php echo "<b>REASON:</b>   ".$row['Reason']?></p>
          <p class="lead-text-muted"><?php echo "<b>FROM:</b>     ".$row['Sdate']."<b> until </b>".$row['Ldate']?></p>
          <p>
         <a href="accept.php?ID=<?php echo $row['ID']?>" class="btn-primary">accept</a>
            <a href="reject.php?ID=<?php echo $row['ID']?>" class="btn-primary">reject</a>
          </p>

          
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>


          <hr>
    <?php        
              }

            }else{
              echo "no pending request.";
            }

        ?>
        

        </div>
      </section>


    </main>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>