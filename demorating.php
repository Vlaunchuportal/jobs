<?php
include('./DBConnect.php');

$wall=0;


$sql = "SELECT DISTINCT jobid FROM canrating" ;					
$result = $conn->query($sql);					
if($result->num_rows > 0)
{
while($row = $result -> fetch_assoc())
{


?>

<input type="text" name="viewid" value="<?php echo $row['jobid']; ?>">



<?php
}
}


$sql="SELECT * FROM canrating where jobid = '4' ";
$result = $conn->query($sql);
$bb = $result->num_rows;

if($result->num_rows > 0)
{
while($row = $result -> fetch_assoc())

{

$wall+= $row['rating'];
	
}
$poll = $wall/$bb;	
echo $poll;					
}
else
{
echo 'no rating';
}



?>