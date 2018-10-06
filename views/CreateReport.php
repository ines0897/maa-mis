<?php  
 $connect = mysqli_connect("localhost", "root", "", "capstone");  
 $query = "SELECT * FROM acceptedleave ORDER BY ID desc";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>LEAVE REPORT</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <h2 align="center">CREATE LEAVE REPORT</h2>  
                
                <div class="col-md-3">  
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3">  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-5">  
                     <input type="button" name="filter" id="filter" value="FILTER" class="btn btn-info" />
                     <input type="button" name="print" id="print" value="PRINT" onclick="window.print();" class="btn btn-info" />
                    <a href="superAdmin.php"> <input type="button" name="filter" id="filter" value="BACK" class="btn btn-info" /></a>

                </div>  
                <div style="clear:both"></div>                 
                <br />  
                <div id="order_table">  
                     <table class="table table-bordered">  
                          <tr>  
                              
                               <th width="30%">BADGE</th>  
                               <th width="30%">FULLName</th>  
                               <th width="30%">REASON</th> 
                               <th width="30%">START DATE</th>  
                               <th width="30%">LAST DATE</th> 

                              
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["Badge"]; ?></td>  
                               <td><?php echo $row["Fullname"]; ?></td>  
                               <td><?php echo $row["Reason"]; ?></td>
                               <td><?php echo $row["Sdate"]; ?></td>  
                               <td><?php echo $row["Ldate"]; ?></td>  
                          
                          </tr>  
                     <?php  
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                          url:"filter.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>