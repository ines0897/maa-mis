<title>HOME</title>
<?php $root_path = '../' ?>
<?php require 'header.php' ?>

<link rel="stylesheet" type="text/css" href="../css/superAdmin.css">

<?php require 'superAdminNavigator.php'; ?>

<div class="col-md-12">
  <div class="col-md-6 container">
    <h1>REMINDERS</h1>

    <table class="base-table">
    <tr class="header">
      <th style="width:9%;">EVENT</th>
      <th style="width:10%;">MESSAGE</th>
      <th style="width:10%;">DATE</th>
      <th style="width:10%;">DATE TODAY</th>
      <th style="width:10%;">ACTION</th>
    </tr>
    <tr>
    <?php
      $connect=mysqli_connect('localhost','root','','capstone');

      $sql = " SELECT id , event , message , date , datenow FROM reminders ";

      $recon = mysqli_query($connect, $sql);

      if(mysqli_num_rows($recon) > 0){ // table data start
        while ($row = mysqli_fetch_assoc($recon)) { // loop data startS

          echo 
          "<td>".$row["event"]."</td>".
          "<td>".$row["message"]."</td>".
          "<td>".$row["date"]."</td>".
          "<td>".$row["datenow"]."</td>";
          ?>

          <td><button data-id="<?php echo $row['id']; ?>" class="delete" class="btn btn-danger">DELETE</button></td>

          </tr>
        <?php
   
        } 
      } else{
        echo "NO RECORD YET";
      }
    ?>
    </table>
  </div>

  <div class="col-md-6 container">
  <center>
    <h2>ACCEPTED LEAVES</h2> <a href="CreateReport.php"><img class="calendar" src="../css/image/calendar.png"></a>

    <table id = "myTable1">
    <tr class="header">
      
         <th style="width:10%;">BADGE</th>
        <th style="width:20%;">FULLNAME</th>
         <th style="width:10%;">REASON</th>
         <th style="width:10%;">FROM</th>
         <th style="width:10%;">TO</th>
        </tr>
        <tr>



    <?php
    $connect=mysqli_connect('localhost','root','','capstone');

      $sql = " SELECT * FROM `acceptedleave` ";

      $recon = mysqli_query($connect, $sql);

          if(mysqli_num_rows($recon) > 0){ // table data start
      while ($row = mysqli_fetch_assoc($recon)) { // loop data startS

        echo 
        "<td>".$row["Badge"]."</td>".
        "<td>".$row["Fullname"]."</td>".
        "<td>".$row["Reason"]."</td>".
        "<td>".$row["Sdate"]."</td>".
        "<td>".$row["Ldate"]."</td>";
      
        ?>
        </tr>
        <?php
      } 
    }else{
      echo "NO RECORD YET";
    }
    ?>
    </table>
  </div>
</div>

<script type="text/javascript">

  const somethingWentWrong = function() {
    swal({
      type: 'error',
      title: 'Oops...',
      text: 'Something\'s wrong!',
    }).then(function() {
      location.reload();
    });
    return;
  }

  $('.delete').on('click', function(e) {
    const id = $( this ).attr('data-id');

    if (!id) {
      somethingWentWrong();
      return;
    }

    swal({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url: "../services/api/deleteReminderService.php",
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
                'Deleted!',
                'Your reminder has been deleted.',
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