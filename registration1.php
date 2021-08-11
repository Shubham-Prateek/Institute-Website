<!DOCTYPE html>

<head>

    <title>Registration</title>
    
   <?php
        include 'style2.php';
        include 'links.php';
    ?>
    

</head>

<body >
    <div class="main">
        <div class="regis">
            <h1 style="padding-bottom: 10px;">Register Here</h1>
            <form class="regi" method="POST">
                <label>First name: </label>
                <br>
                <input type="text" name="fname" placeholder="Enter your first name" required>
                <br>
                <br>

                <label>Last name:</label>
                <br>

                <input type="text" name="lname" placeholder="Enter your last name" required>
                <br>
                <br>

                

                <label>Gender:</label>
                <br>
                <input type="radio" name="gender"  value="Male" required> Male
                <input type="radio" name="gender" id="gender" value="Female" required>Female

                <br>
                <br>

                <label>Contact number:</label>
                <br>
                <input type="text" name="phone" placeholder="Enter your contact number" required>
                <br>
                <br>

                <label>Email:</label>
                <br>
                <input type="email" name="email" placeholder="Enter your email id" required>
                <br>
                <br>

                <label>Cocurce</label>
                <br>
                <input type="text" name="cource" placeholder="Cocurce ">
                <br>
                <br>
                 
               

                <br>
                <br>
                <a href="websiteindex.php>"><input type="submit" id="submit"  name="submit" value="submit" href="websiteindex.php"></a>
                <a href="websiteindex.php" type="Button"  id="gth">Home</a>
                <a href="database.php">Admin</a>
            </form>
        </div>
    </div>
</body>

</html>

<?php 

include 'connection.php';
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $mail=$_POST['email'];
    $cource=$_POST['cource'];

    $insertq= "INSERT into regestration(FName,LName, Gender,Num, Mail,cource) values('$fname','$lname','$gender','$phone',' $mail','$cource')";

        $result=mysqli_query($con,$insertq);
        if($result)
        {
            ?>
            <script  >
                alert("Data inserted"); 

           </script>
           <?php
        }
        else
        {
            ?>
            <script >
                alert("Data not inserted properly");
            </script>
            <?php
        }
}


?>
