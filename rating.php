<?php
                                         

$connection=new mysqli("localhost","root","","project");
$result=mysqli_query($connection,"SELECT Avg(Rating) FROM feedback where Items='$Items';");
echo "<table>";

while($row=mysqli_fetch_row($result))
{
echo "<tr>";
$id1=max($row);
if($id1==TRUE)
{
   $id1=max($row);
   for ($x = 0; $x < $id1; $x++) {
      echo "&#9733;";
    }
   }
else
{
  
   
      echo "&#9733;&#9733;&#9733;&#9733;&#9733;";
    
   }


echo "</tr>";
}

echo "</table>";
?>