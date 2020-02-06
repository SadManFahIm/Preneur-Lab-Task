<?php
	require "db.php"; 

	if(isset($_POST['submit'])){

        $name = $_POST['name'];

        $email = $_POST['email'];

        $gender = $_POST['gender'];
        
        $phone = $_POST['phone'];
  
        

		$conn = DBconnection();
        if(!$conn)
        {
            echo "DB Error: ".mysqli_connect_error();
        }else
        {

            $sql = "INSERT into test(name,email,gender,phone) values('$name', '$email', '$gender', '$phone')";
            $result = mysqli_query($conn, $sql);
            
            echo "Sucessfully uploaded data *_*";
        }
	}
else
    echo "from not submited";
?>