<html>
<body>
<form action="logout.php">                                <!--logout button-->
    <button>LOG OUT</button>
 </form>
 <form action="student.php">                                <!--back button-->
    <button><-</button>
 </form>
<?php
 session_start(); 
 $conn=mysqli_connect("localhost","root","21122012s","login");           //connecting to database named login
 if(!$conn)
 {
 die("connection failed: ".mysql_connect_error());
 } 
 //displaying details 
 $i=$_SESSION['Emailid'];
 $sql1="SELECT* FROM alumni WHERE Emailid='$i'";
 $result1 = $conn->query($sql1);
if ($result1->num_rows > 0) 
{
  echo "your details are"."</br>";
  while($row1 = $result1->fetch_assoc()) {
        echo "id: " . $row1["id"]."<br>";
		echo "firstname: " . $row1["Fname"]."     ";

		echo '<a href="studentupdate2.php?Edit_type=firstname">Edit</a>'."<br>";
        echo "lastname: " . $row1["Lname"]."     ";
		echo '<a href="studentupdate2.php?Edit_type=lastname">Edit</a>'."<br>";
        echo "batch: " . $row1["BATCH"]."     ";
		echo '<a href="studentupdate2.php?Edit_type=batch">Edit</a>'."<br>";
		echo "DOB: ". $row1["DD"]."/".$row1["MM"]."/".$row1["YY"]."     ";
		echo '<a href="studentupdate2.php?Edit_type=dob">Edit</a>'."<br>";
		echo "city: ". $row1["CITY"]."     ";
		echo '<a href="studentupdate2.php?Edit_type=city">Edit</a>'."<br>";
	    echo "mobile No.: ". $row1["MOBILENO"]."     ";
		echo '<a href="studentupdate2.php?Edit_type=mobileno">Edit</a>'."<br>";
        echo "Email: ". $row1["Emailid"]."     ";
		echo "address: ". $row1["ADDRESS"]."     ";
		echo '<a href="studentupdate2.php?Edit_type=address">Edit</a>'."<br>";
		echo "present status: ". $row1["PRESENTST"]."     ";
		echo '<a href="studentupdate2.php?Edit_type=presentstatus">Edit</a>'."<br>";
		echo "college: ". $row1["COLLEGE"]."     ";
		echo '<a href="studentupdate2.php?Edit_type=college">Edit</a>'."<br>";
		echo "degree: ". $row1["DEGREE"]."     ";
		echo '<a href="studentupdate2.php?Edit_type=degree">Edit</a>'."<br>";
		echo "stream: ". $row1["STREAM"]."     ";
		echo '<a href="studentupdate2.php?Edit_type=stream">Edit</a>'."<br>";
		echo "sem: ". $row1["SEM"]."     ";
		echo '<a href="studentupdate2.php?Edit_type=sem">Edit</a>'."<br>";
		echo "year: ". $row1["YR"]."     ";
		echo '<a href="studentupdate2.php?Edit_type=year">Edit</a>'."<br>";
		echo "org: ". $row1["ORG"]."     ";
		echo '<a href="studentupdate2.php?Edit_type=org">Edit</a>'."<br>";
		echo "designation: ". $row1["designation"]."     ";
		echo '<a href="studentupdate2.php?Edit_type=designation">Edit</a>'."<br>";
		echo "office address: ". $row1["OFFADDRESS"]."     ";
		echo '<a href="studentupdate2.php?Edit_type=officeaddress">Edit</a>'."<br>";
		echo "salary: ". $row1["SALARY"]."     ";
		echo '<a href="studentupdate2.php?Edit_type=salary">Edit</a>'."<br>";
	    echo"<br/><br/><br/>";
		 }	
  mysqli_close($conn);
}
else
{ 
echo "please fill the details, record is not present in database";
 mysqli_close($conn);
 }
?>
 </body>
 </html>
