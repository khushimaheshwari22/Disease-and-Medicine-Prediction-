<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbms pbl";
$conn = new mysqli($servername,$username,$password,$dbname);
$username = filter_input(INPUT_POST,'username');

$qry="Select * from patient_details where username='$username'" ;
?>
<table width="414" border="1" cellspacing="10" cellpadding="5" align="center">
  <tr>
    <td width="74">Patient_id</td>
    <td width="63">Patient_name</td>
    <td width="199">Gender</td>
    <td width="74">Age</td>
    <td width="63">Blood_Group</td>
    <td width="199">Weight</td>
    <td width="74">Mobile_no</td>
  </tr>
  <?php 
$qry="Select * from patient_details where username='$username' ";
$rc=mysqli_query($conn,$qry);
while($tmp=mysqli_fetch_array($rc))
{
$patient_id=$tmp['patient_id'];
$patient_name=$tmp['patient_name'];
$gender=$tmp['gender'];
$age=$tmp['age'];
$blood_group=$tmp['blood_group'];
$weight=$tmp['weight'];
$mobile_no= $tmp['mobile_no'];
}
?>
  <tr>
    <td><?php echo $patient_id;?></td>
    <td><?php echo $patient_name;?></td>
    <td><?php echo $gender;?></td>
    <td><?php echo $age;?></td>
    <td><?php echo $blood_group;?></td>
    <td><?php echo $weight;?></td>
    <td><?php echo $mobile_no;?></td>
  </tr>
<?php
?>
</table>

