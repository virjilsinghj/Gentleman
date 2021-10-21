<?php
                    if($_POST){
                      include('project_con.php');
                        $fName=$_POST['fName'];
                        $Phone_Number=$_POST['Phone_Number'];
                        $Item1=$_POST['Item'];
                        $Quantity=$_POST['Quantity'];
                        $Item2=$_POST['Item1'];
                        $Quantity1=$_POST['Quantity1'];
                        if($Item2=="Select item")
                        {
                          $Item2 = 0;
                          $Quantity1= 0;
                          
                          
                        
                        }
                        else
                        {
                          $Item2=$_POST['Item1'];
                          $Quantity1=$_POST['Quantity1'];
                        
                        }
                  
                        
                        $date=$_POST['date'];
                        $time=$_POST['time'];
                        $payment=$_POST['payment'];
                        $instructions=$_POST['instructions'];
                        $date1=date("Y-m-d");
                       
                        if($Item1!=$Item2 && $date1<$date ){
                          
                        $query="INSERT INTO Order_List values('','$fName','$Phone_Number','$Item1','$Quantity','$Item2','$Quantity1','$date','$time','$payment','$instructions');"; 
                        $result=mysqli_query($connection,$query);     
                        if($result) 
                        {
                            
                            include('pdf.php');
                        }
                     
                      
                    }
                      else
                      {
                        echo'
                        <meta http-equiv = "refresh" content = "1; url = http://localhost:8080/trial/order.php" />
                      ';
                      }
                        }
                    ?>