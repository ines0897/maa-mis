<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link href="../barcode_style.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="../css/CreateID.css">
<style type="text/css">
	#camera {
  width: 30%;
  height:550px;
}
</style>
<?php $root_path = '../' ?>
<?php require 'header.php' ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="jpeg_camera/jpeg_camera_with_dependencies.min.js" type="text/javascript"></script>
<script>
    var options = {
      shutter_ogg_url: "jpeg_camera/shutter.ogg",
      shutter_mp3_url: "jpeg_camera/shutter.mp3",
      swf_url: "jpeg_camera/jpeg_camera.swf",
    };
    var camera = new JpegCamera("#camera", options);
  
  $('#take_snapshots').click(function(){
    var snapshot = camera.capture();
    snapshot.show();
    
    snapshot.upload({api_url:"action.php"}).done(function(response) {
$('#imagelist').prepend("<tr><td><img src='"+response+"' width='100px' height='100px'></td><td>"+response+"</td></tr>");
}).fail(function(response) {
  alert("Upload failed with status " + response);
});
})

function done(){
    $('#snapshots').html("uploaded");
}
</script>
<body>


<body>
<center>  <h1 style="color:white;"> CREATE VISITOR'S ID </h1> 
<div class="div">
<form method="POST" action="../try/picqer_php_barcode_generator_0.2.2.0_require/index.php" enctype="multipart/form-data">
<center>
<pre class="pic">	
<!-- <video id="video" width="300px" height="0px" autoplay></video>
  <div class="col-md-6">
            <div class="text-center">
        <div id="camera_info"></div>
    <div id="camera"></div><br>
    <button id="take_snapshots" class="btn btn-success btn-sm">Take Snapshots</button>
      </div>
        </div>
        <div class="col-md-6">
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th><th>Image Name</th>
                </tr>
            </thead>
            <tbody id="imagelist">
            
            </tbody>
        </table>
        </div> -->
        <img src="../css/image/addphoto.png">
<input type="file" name="image">
</pre></center>
<pre class="field">
                NAME:    <input type="text" name="name1" >
                AGE:     <input type="del" name="age" >
                ADDRESS: <input type="text" name="address">
                CELL NO: <input type="del" name="cp_no">
</pre><br><br>
     <input type="submit" name="submit" id="submit" value="SUBMIT">
    <a class="back" href="secondAdmin.php">BACK</a>
    </form>
    </div>

<?php require 'footer.php' ?>
</body>
</html>