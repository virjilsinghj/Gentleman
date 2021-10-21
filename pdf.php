<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/pdf.css" />

    <script src="js/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

</head>

<body>
    <div class=" container d-flex justify-content-center mt-50 mb-50">
        <div class="row">
            <div class="col-md-12 text-right mb-3">
                <button class="btn btn-primary" id="download"> Download pdf</button>
            </div>
            <div class="col-md-12">
                <div class="card" id="invoice">
                    <div class="card-header bg-transparent header-elements-inline">
                        <h6 class="card-title text-primary">Sale invoice</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">

                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4 ">
                                    <div class="text-sm-right">
                                        <h4 class="invoice-color mb-2 mt-md-2"><?php
                                         
                
                                         include('project_con.php');
                                         $result=mysqli_query($connection,"SELECT order_Id FROM Order_List;");
                                         echo "<table>";
                                         
                                         while($row=mysqli_fetch_row($result))
                                         {
                                         echo "<tr>";
                                         $id1=max($row);
                                         
                                         
                                         
                                         
                                         
                                         
                                         echo "</tr>";
                                         }
                                         echo"#GM26{$id1}";
                                         echo "</table>";
                                       
                                                                 ?>
                                        </h4>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex flex-md-wrap">
                            <div class="mb-4 mb-md-2 text-left"> <span class="text-muted">Invoice To:</span>
                                <ul class="list list-unstyled mb-0">
                                    <li>
                                        <h5 class="my-2"> <?php
                                         
                
                include('project_con.php');
                $result=mysqli_query($connection,"SELECT * FROM signin where Name='$fName';");
                echo "<table>";
                
                while($row=mysqli_fetch_row($result))
                {
                echo "<tr>";
                $name1= $row[0];
                
                echo" {$name1}";
                
                
                
                
                echo "</tr>";
                }
                echo "</table>";
              
                                        ?></h5>
                                    </li>
                                    <li></li>
                                    <li>North Street</li>
                                    <li>23 BB Lane</li>
                                    <li><?php
                
                include('project_con.php');
                $result=mysqli_query($connection,"SELECT * FROM signin where Name='$fName';");
                echo "<table>";
                
                while($row=mysqli_fetch_row($result))
                {
                echo "<tr>";
              
                $location1= $row[3];
                echo" {$location1}";
                
                
                
                
                echo "</tr>";
                }
                echo "</table>";
              
                                        ?></li>
                                    <li>234 456 5678</li>
                                    <li><a href="#" data-abc="true"><?php
                
                include('project_con.php');
                $result=mysqli_query($connection,"SELECT * FROM signin where Name='$fName';");
                echo "<table>";
                
                while($row=mysqli_fetch_row($result))
                {
                echo "<tr>";
              
                $Email1= $row[2];
                echo" {$Email1}";
                
                
                
                
                echo "</tr>";
                }
                echo "</table>";
              
                                        ?></a></li>
                                </ul>
                            </div>
                            <?php
                
                include('project_con.php');

                                                $result=mysqli_query($connection,$query="SELECT * FROM `item` where
                                                Select_Item='$Item1' ;");
                                                echo "<table>";

                                                    while($row=mysqli_fetch_row($result))
                                                    {



                                                    $Rate= $row[1];
                                                    $subtotal=(round($Rate*$Quantity, 2));
                                                    $subtotal=(round($Rate*$Quantity, 2));
                                                    $product=(round(($subtotal/7), 2));
                                                    $price=(round(($subtotal+$product), 2));
                                                    






                                                    ;
                                                    }
                                                    echo "</table>";
                                                    ?>
                            <div class="mb-2 ml-auto"> <span class="text-muted">Payment Details:</span>
                                <div class="d-flex flex-wrap wmin-md-400">
                                    <ul class="list list-unstyled mb-0 text-left">
                                        <li>
                                            <h5 class="my-2">Total Due:</h5>
                                        </li>
                                        <li>Bank name:</li>
                                        <li>Country:</li>
                                        <li>City:</li>
                                        <li>Address:</li>
                                        <li>IBAN:</li>
                                        <li>SWIFT code:</li>
                                    </ul>
                                    <ul class="list list-unstyled text-right mb-0 ml-auto">
                                        <li>
                                            <h5 class="font-weight-semibold my-2">&#8377



                                                <?php 
                                                
                                                $result=mysqli_query($connection,$query="SELECT * FROM `item` where
                                                Select_Item='$Item2' ;" ); echo "<table>" ;
                                                $row=mysqli_fetch_row($result);
                                                    
                                                     
                                                    if($Quantity1!=0){ 
                                                            $Rate1=$row[1];
                                                            
                                                            $subtotal1=(round($Rate1*$Quantity1, 2));
                                                            $product1=(round(($subtotal1/7), 2));
                                                            $price1=(round(($subtotal1+$product1), 2));
                                                            $subtotal2=(round($subtotal+$subtotal1, 2));
                                                             $GST=(round($product+$product1, 2));
                                                             $total1=(round($subtotal2+ $GST, 1));
                                                    
                                                    }
                                                     else{
                                                        $Rate1=0;
                                                        $subtotal1=0;
                                                        $product1=0;
                                                        $price1=0;
                                                        $subtotal2=$subtotal;
                                                         $GST=(round($product, 2));
                                                         $total1=(round($subtotal2+ $GST, 1));
                                                         }
                                                         
                                                     
                                                    echo" {$total1}"; ;  echo "</table>" ; ?>
                                            </h5>
                                        </li>
                                        <li><span class="font-weight-semibold">State Bank Of India</span></li>
                                        <li>India</li>
                                        <li>North street, 21</li>
                                        <li>New standard</li>
                                        <li><span class="font-weight-semibold">98574959485</span></li>
                                        <li><span class="font-weight-semibold">BHDHD98273BER</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Rate</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                    <th>GST</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class=" mb-0">
                                            <?php
                                    echo "{$Item1}" ;
                                    ?>
                                        </h6> <span class="text-muted">
                                        </span>
                                    </td>

                                    <td>&#8377 <?php
                                    echo "{$Rate}" ;
                                    ?></td>
                                    <td><?php
                                    echo "{$Quantity}" ;
                                    ?></td>
                                    <td><span class="font-weight-semibold">&#8377 <?php
                                    echo "{$subtotal}" ;
                                    ?></span></td>
                                    <td><span class="font-weight-semibold">&#8377 <?php
                                    echo "{$product}" ;
                                    ?></span></td>
                                    <td><span class="font-weight-semibold">&#8377 <?php
                                    echo "{$price}" ;
                                    ?></span></td>




                                </tr>
                                <tr>
                                    <td>

                                        <h6 class=" mb-0">
                                            <?php
                                            if($Item2!=0){
                                    echo "{$Item2}" ;}
                                    else
                                    {
                                    }
                                    
                                    ?>
                                        </h6>
                                        <span class="text-muted">
                                        </span>
                                    </td>

                                    <?php
                                    if($Rate1!=0)
                                    {
                                    echo "<td>
                                     &#8377

                                        {$Rate1}
                                        
                                        </td>" ;
                                        
                                    }
                                    else
                                    {
                                        echo " <td>
                                        </td>" ;
                                    }
                                    ?>
                                    <?php
                                    if($Quantity1!=0)
                                    {
                                    echo "<td>

                                    {$Quantity1}
                                        </td>" ;
                                        
                                    }
                                    else
                                    {
                                        echo " <td>
                                        </td>" ;
                                    }
                                    
                                    ?>
                                    <?php
                                    if($subtotal1!=0)
                                    {
                                    echo "<td> &#8377

                                        {$subtotal1}
                                        </td>" ;
                                        
                                    }
                                    else
                                    {
                                        echo " <td>
                                        </td>" ;   
                                    }
                                    ?>
                                    <?php
                                    if($product1!=0)
                                    {
                                    echo "<td> &#8377

                                        {$product1}
                                        </td>" ;
                                        
                                    }
                                    else
                                    {
                                        echo " <td>
                                        </td>" ; 
                                    }
                                    ?>
                                    <?php
                                    if($price1!=0)
                                    {
                                    echo "<td> &#8377

                                        {$price1}
                                        </td>" ;
                                        
                                    }
                                    else
                                    {
                                        echo " <td>
                                        </td>" ; 
                                    }
                                    ?>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <div class="d-md-flex flex-md-wrap">
                            <div class="pt-2 mb-3 wmin-md-400 ml-auto">
                                <h6 class="mb-3 text-left">Total due</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="text-left">Subtotal:</th>
                                                <td class="text-right">&#8377 <?php
                                    echo "{$subtotal2}" ;
                                    ?></td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">GST: <span class="font-weight-normal">(7%)</span>
                                                </th>
                                                <td class="text-right">&#8377 <?php
                                                
                                    echo "{$GST}" ;
                                    ?></td>
                                            </tr>
                                            <tr>
                                                <th class="text-left">Total:</th>
                                                <td class="text-right text-primary">
                                                    <h5 class="font-weight-semibold">&#8377 <?php
                                                    
                                                     
                                                                   
                                    echo "{$total1}" ;
                                    ?>

                                                        <?php
                                                            if($_POST){
                                                              include('project_con.php');
                    
                                                                $query="INSERT INTO sales values('$id1','$fName','$subtotal2','$GST','$total1');"; 
                                                                $result=mysqli_query($connection,$query);     
                                                                if($result)
                                                                {
                                                                    echo'';
                                                                    
                                                                }
                                                                }
                                                            ?>
                                                    </h5>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html