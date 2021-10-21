<?php
                                         

$connection=new mysqli("localhost","root","","project");
$result=mysqli_query($connection,"SELECT `Quantity` FROM `item` WHERE Select_Item='$Items';");
echo "<table>";

while($row=mysqli_fetch_row($result))
{
echo "<tr>";
$id1=max($row);
if($id1==TRUE)
{
   $id1=max($row);
  
      echo "$id1";
    
   }
else
{
  
   
      echo "Not found";
    
   }


echo "</tr>";
}

echo "</table>";
?>