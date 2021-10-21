<?php
                    if($_POST){
                      include('project_con.php');
                        $fName=$_POST['fName'];
                        $Age=$_POST['Age'];
                        $Email=$_POST['Email'];
                        $Location=$_POST['Location'];
                        $Phone_Number=$_POST['Phone_Number'];
                        $Password=$_POST['Password'];
                        $Password1=$_POST['Password1'];
                        if($Password==$Password1)
                        {
                        $query="INSERT INTO signin values('$fName','$Age','$Email','$Location','$Phone_Number','$Password');"; 
                        $result=mysqli_query($connection,$query);     
                        if($result)
                        {
                            
                            header("Location:Log in.php");
                        }
                        }
                        else
                        {
                          echo'
                <meta http-equiv = "refresh" content = "0; url = http://localhost:8080/trial/sign in.php" />
              ';
                        }
                      }
                    ?>