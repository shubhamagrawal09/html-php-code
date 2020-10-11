<?php 
    
    $name="";
    $city="";
    $occupation="";

    $db=mysqli_connect('localhost','test','Asdf@1234','test');

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $city=$_POST['city'];
        $occupation=$_POST['occupation'];

        $query = "INSERT INTO formdata (name, city, occupation) VALUES('$name','$city','$occupation')";
        mysqli_query($db, $query);
        header('location:index.php');
    }

    $results = mysqli_query($db, "SELECT * FROM formdata");
