<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $Edu = $_POST['Edu'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    //Database connection
    $conn = new mysqli('localhost','root','','group 14');
    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into Details_of_Applicants(firstName, lastName, Edu, email, number) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $firstName, $lastName, $Edu, $email, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration is successfull";
		$stmt->close();
		$conn->close();
	}

?>

