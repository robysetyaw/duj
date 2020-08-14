<?php

$error=''; 

include "api/config.php";
if(isset($_POST['submit']))
{               
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $id_role      = $_POST['id_role'];
                    
    $query = mysqli_query($koneksi, "SELECT * FROM userr WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query) == 0)
    {
        $error = "Username or Password is invalid";
    }
    else
    {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['username']=$row['username'];
        $_SESSION['id_role'] = $row['role'];
        
        if($row['l'] = $id_role=="1")
        {
            
            header("Location: home.php");
        }
        else if($row['id_role'] = $id_role=="2")
        {
            header("Location: hall.php");
        }
        // else if($row['id_role'] == "Mahasiswa" && $id_role=="3")
        // {
            
        //     header("Location: halstudent.php");
        // }
        else
        {
            $error = "Failed Login";
        }
    }
}
            
?>