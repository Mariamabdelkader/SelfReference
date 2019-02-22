<html>
  <form method="post" action="">
        <p>
            <label>name
                <input type="tel" name="id" required>
            </label>
        </p>
        <p><button name="Submit">Submit Booking</button></p>
<?php
if(isset($_POST['Submit'])) {	
$id=$_POST['id'];

addres($id);
}
function addres($userid){

$con = new mysqli("localhost", "root", "","project");

 $result =mysqli_query($con,"SELECT * FROM `address` WHERE ID=$userid");
while($row = mysqli_fetch_array($result))
    {
     echo $row['Name'];
     $i =$row['AddressID'];
    }
if($userid!=0)
{
    
      addres($i);
}else(exit());
 
   


}
?>
</html>