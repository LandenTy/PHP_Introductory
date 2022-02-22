<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

        $conn= mysqli_connect('localhost', 'root', '', 'lan-test') or die("An Error has Occured:" .mysqli_connect_error());

        if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['password'])) {

            $email = $_POST['email'];
            $name = $_POST['name'];
            $password= $_POST['password'];

            $sql= "INSERT INTO `players` (`email`, `name`, `password`) VALUES ('$email', '$name', '$password')";
            $query = mysqli_query($conn, $sql);

            if ($query) {
                echo 'Registration Sucessful! Welcome to the Program!'; 
            }
            else {
                echo 'Registration Failed! Please try again later.';
            }
        }
    }
?>