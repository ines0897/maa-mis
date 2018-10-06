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
<center><h1 style="color: white;">LEAVE REQUEST</center></h1>



<table id = "myTable">
<tr class="header">
  
     <th style="width:20%;">BADGE NO.</th>
    <th style="width:40%;">FULL NAME</th>
     <th style="width:20%;">REASON</th>
     <th style="width:20%;">START DATE</th>
     <th style="width:20%;">LAST DATE</th>
     <th style="width:20%;">ACTION</th>
    </tr>
    <tr>

       <?php

            $query= "SELECT * from leave1";
            if(count(fetchall($query))>0){
              foreach (fetchall($query) as $row) {
                ?>
          <td><?php echo $row['Fullname'];?></td>
          <td><?php echo $row['Badge']?></td>
          <td><?php echo $row['Reason']?></td>
          <td><?php echo $row['Sdate']?></td>
          
         <td><button data-id="<?php echo $row['ID']; ?>" class="accept"><img class="pic" src="../css/image/accept.png"></button></td>
         <td><button data-toggle='modal' data-target='#myModal' data-id="<?php echo $row['ID']; ?>" class="reject"><img class="pic" src="../css/image/reject.png"></button></td>
          </tr> 
    <?php        
              }

            }else{
              echo "no pending request.";
            }

        ?>
        




  <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog modal-sm">
     <!-- Modal content-->
     <div class="modal-content">

        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Modal Header</h4>
        </div>

        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>

       <div class='modal-footer' style='background-color:#1F4E78;'>
          <a class='btn btn-danger' href='deleteposthome.php?id=".$row['post_id']."'> Delete</a>
      </div>

     </div>                                       
   </div>
</div>



<script>
  

$(document).ready(function(){

  $('#delete').on('show.bs.modal', function(){
      var button = $(event.relatedTarget)
      var myid = button.data('myid');

      var modal = $(this)

      modal.find('.modal-body #myid').val(myid)


  }); 


});

</script>


<!-- <form>

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


    </main> -->


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
    const Badge = $( this ).attr('data-id');

    if (!Badge) {
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
            Badge,
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
                'The request has been accepted.',
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

  

  $('.reject').on('click', function(e) {
    const Badge = $( this ).attr('data-id');

    if (!Badge) {
      somethingWentWrong();
      return;
    }

    swal({
      title: 'Are you sure?',
      text: "DO YOU WANT TO REJECT THIS",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, reject it!'
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url: "../services/api/RejectLeave.php",
          data: {
            Badge,
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
                'REJECTED!',
                'The request has been rejected.',
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