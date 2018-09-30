<?php
 include ("../function.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>LEAVE REQUEST</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/Leave.css">
<body>
<?php $root_path = '../' ?>
<?php require 'header.php' ?>

<?php require 'superAdminNavigator.php'; ?>
<center><h1> LEAVE REQUEST'S</center></h1>
</div>
<form>

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
         <button data-id="<?php echo $row['ID']; ?>" class="accept">ACCEPT</button>
         <button data-id="<?php echo $row['ID']; ?>" class="reject">REJECT</button>
          </p>
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


<script type="text/javascript">

  const somethingWentWrong = function() {
    swal({
      type: 'error',
      title: 'Oops...',
      text: 'Something went wrong!',
    }).then(function() {
      location.reload();
    });
    return;
  }

  $('.accept').on('click', function(e) {
    const ID = $( this ).attr('data-id');

    if (!ID) {
      somethingWentWrong();
      return;
    }

    swal({
      title: 'Are you sure?',
      text: "DO YOU WANT TO ACCEPT THIS",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, accept it!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url: "../services/api/AcceptLeave.php",
          data: {
            id,
          },
          method: 'POST',
          accepts: "application/json; charset=utf-8",
          success: function( result ) {
            if (!result) {
              somethingWentWrong();
              return;
            }

            const data = JSON.parse(result);

            if (data.success) {
              swal(
                'ACCEPTTED!',
                'The request has been acceptted.',
                'success'
              );
              location.reload();
            } else {
              somethingWentWrong();
            }
          },
          error: function(err) {
            somethingWentWrong();
          },
        });
      }
    })
  });
</script>



<?php require 'footer.php' ?>
</body>
</html>