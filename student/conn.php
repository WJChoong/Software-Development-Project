
<?php
//first '' -> server ip address
//second '' ->username for login database
//third '' ->password
//fourth '' ->database name
$conn = mysqli_connect('localhost','root','','student','3306');

if(mysqli_connect_errno())
{
die('<script>alert("Connection failed: Please check your SQL connection!");</script>');
}

else
{	
echo ('<script>alert("Connection Successful!");</script>');
}

?>