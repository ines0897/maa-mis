

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
	body{
			background-image: url("w.png");
			background-repeat: no-repeat;

		}


	.head{
		background-color: gray;
		height: 80px;
		width: 1365px;
		margin-top: -20px;
		margin-left: -10px;
		opacity:0.3;
		}	

	.title{
   		margin-top:-70px;
   		margin-left: 70px;
   		font-family: courier;
		font-size: 40px;
		color: white;

		}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #f3f3f3;
    margin-top: -10px;
    margin-left: -10px;
    margin-right: -8px;
    height: 60px;
    opacity: 0.7;
    position: sticky;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: #666;
    text-align: center;
    padding: 22px 30px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
h1{
   letter-spacing: 4px;
   font-size: 50px;
   color: white;
   text-decoration: underline;
   text-decoration-color: white;
}
   div {
    width: 80%;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
    margin-top: 10px;
    opacity: 0.8;

}

input[type=text],select {
    width: 40%;
    padding: 12px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=comment],select {
    width: 100%;
    padding: 12px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date],select {
    width: 40%;
    padding: 12px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=number], select {
    width: 40%;
    padding: 12px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 90%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}


    div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
    margin-top: -20px;
    opacity: 0.6;


}
img{
  height: 50px;
  width: 50px;
  margin-top: -20px;
}
.bg-modal{
  width: 100%;
  height: 100%;
  background-color: black;
  opacity: 0.7;
  position: absolute;
  top:0;
  display: flex;
  justify-content: center;
  align-items: center;
  display: none;
}

.modal-content{
  width: 500px;
  height: 300px;
  background-color: white;
  position: relative;
  border-radius: 4px;
  text-align: center;
}
.close{
  position: absolute;
  top: 0;
}
.jumbotron-heading{
  color: black;
  text-decoration-color: black;
  margin-top: 10px;
}
.lead-text-muted{
  color: black;
  font-size: 15px;
  margin-top: 10px;


}

.btn-primary {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center; 
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.btn-primary:hover {background-color: #3e8e41}


/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}


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
    <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>