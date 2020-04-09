
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $time = $_POST['time'];
    $note = $_POST['note'];

    if(!empty($name) || !empty($email) || !empty($service) || !empty($time) ||
     !empty($note)){
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
            $SELECT = "SELECT email From register Where email = ? Limit 1";
            $INSERT = "INSERT Into register(name , email, service , time , note) values(? , ? , ? , ? , ? )";

            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s" , $email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if($rnum==0){
                $stmt->close();

                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sssss" , $name , $email , $service , $time ,$note );
                $stmt->execute();

                echo "NEW Appointment Registered Successfully.Thank you for using our service.";
            }
            else{
                echo "Someone already register using this email";
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
