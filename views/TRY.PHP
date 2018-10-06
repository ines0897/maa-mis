<!DOCTYPE html>
<html>
<head>
	<title></title>

	 
	<link rel="stylesheet" type="text/css" href="../css/vendor/bootstrap-theme.min">
</head>
<body>


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
    
     
  </tbody>

</table>




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

<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/vendor/jquery.js"</script>
 
</body>
</html>