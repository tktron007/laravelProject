<?php
    $message = $_POST['message'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    if(!empty($message) || !empty($name) || !empty($email) || !empty($subject)){
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "login";

        //Create Connection
        $conn = new mysqli($host , $dbUsername ,$dbPassword , $dbname);

        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());

        }
        else{
            $SELECT = "SELECT email From contact Where email = ? Limit 1";
            $INSERT = "INSERT Into contact(message , name, email , subject) values(? , ? , ? , ? )";

            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s" , $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if($rnum==0){
                $stmt->close();

                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssss" , $message , $name , $email , $subject );
                $stmt->execute();

                echo "Thank you for contacting us . We will get back you soon.";
            }
            else{
                echo "Someone already contacted using this email";
            }
            $stmt->close();
            $conn->close();
        }

     }
     else{
         echo "All field are required";
         die();
     }


?>

<style>
    h1{
        color:skyblue;
        font-family:arial;
    }

</style>

<h1> Go Back To Home Page : <a class="nav-link" href="/">ManTarYudh Hospital</a> </h1>
