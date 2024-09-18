<?php
    function matchCredential($username, $password)
    {
        $isValid = false;
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "secondapp";
    
        $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
        if ($conn->connect_error) {
            die("Connection failed : " . $conn->connect_error);
        } else {
            echo "Connected with the database";
        }
   
        $query = "SELECT *FROM userinfo WHERE email = '$username' AND password = '$password';";
        
        $result = $conn->query("$query");
    
        if ($result->num_rows === 1) {
            $_SESSION['userId'] = $userInfo['id'];
            $_SESSION['loggedInTime'] = time();
            $isValid = true;
        }
        return $isValid;
    }

    function isInserted($fname,$cnum,$gender,$email,$password){

        $isValid = false;
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "secondapp";
    
        $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
        if ($conn->connect_error) {
            die("Connection failed : " . $conn->connect_error);
        } else {
            echo "Connected with the database";
        }

        $query = "SELECT *FROM userinfo WHERE email = '$email';";
        $result = $conn->query("$query");
        if ($result->num_rows === 1) {
            return false;
        }else{
            $query = "INSERT INTO `userinfo` (`name`, `email`, `password`, `gender`, `contact_number`)
            VALUES ('$fname', '$email', '$password', '$gender', '$cnum');";
            $result = $conn->query("$query");
            return true;
        }

    }
    function getUser($email){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "secondapp";
        $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
        if ($conn->connect_error) {
            die("Connection failed : " . $conn->connect_error);
        }
        $query = "SELECT *FROM userinfo WHERE email = '$email';";

        $result = $conn->query("$query");

        $userinfo = $result->fetch_assoc();
        return $userinfo;
    }
    function updateDatabase($newPassword, $name, $contact_number, $gender, $email) {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "secondapp";
  
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $query = "UPDATE userinfo 
                  SET password = ?, name = ?, contact_number = ?, gender = ? 
                  WHERE email = ?";
    
        if ($stmt = $conn->prepare($query)) {
            
            $stmt->bind_param("sssss", $newPassword, $name, $contact_number, $gender, $email);
    
            if ($stmt->execute()) {
                echo "Updated successfully";
            } else {
                echo "Error updating: " . $stmt->error;
            }
    
            $stmt->close();
        } else {
            echo "Error preparing your statement: " . $conn->error;
        }
    
        $conn->close();
    }
    
?>