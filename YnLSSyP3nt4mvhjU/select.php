<?php  
 $connect = mysqli_connect("localhost", "root", "", "gurman");  
 $output = '';  
 $sql = "SELECT * FROM orders";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="40%">Username</th>  
                     <th width="20%">Phone Number</th>  
                     <th width="30%">Foods</th>  
                     <th width="30%">Price</th>  
                     <th width="10%">Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["order_id"].'</td>  
                     <td class="first_name" data-id1="'.$row["order_id"].'">'.$row["cl_username"].'</td>  
                     <td class="last_name" data-id2="'.$row["order_id"].'">'.$row["phone_number"].'</td>  
                     <td class="last_name" data-id3="'.$row["order_id"].'">'.$row["products"].'</td>  
                     <td class="last_name" data-id4="'.$row["order_id"].'">'.$row["total_amount"].'</td>  
                     <td><button type="button" name="delete_btn" data-id5="'.$row["order_id"].'" class="btn btn-xs btn-success btn_delete">Արդեն Առաքված է</button></td>  
                </tr>  
           ';  
      }  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>