<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "capstone");  
      $output = '';  
      $query = "  
           SELECT * FROM acceptedleave  
           WHERE Sdate BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                     <th width="20%">BADGE</th>  
                     <th width="20%">FULLName</th>  
                     <th width="20%">REASON</th> 
                     <th width="30%">START DATE</th>  
                     <th width="30%">LAST DATE</th>  
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["Badge"] .'</td>  
                          <td>'. $row["Fullname"] .'</td>  
                          <td>'. $row["Reason"] .'</td>
                          <td>'. $row["Sdate"] .'</td>  
                          <td>'. $row["Ldate"] .'</td>    
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>

