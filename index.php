<!-- php code with variable data assignment -->
<!-- Internal php, external php -->

<?php 
include 'pure_php.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT BA 3101</title>
</head>
<body>


    <!--<h1>Hello World</h1>-->
    <?php // echo "<h1>Hello World</h1>"; ?>

    <h2>Username: <u><?php echo $username; ?></u> </h2>
    <h2>User ID: <u><?php echo $user_id; ?></u> </h2>
    <h2>Age: <u><?php echo $age; ?></u> </h2>
    <h2>Gender: <u><?php echo $gender; ?></u> </h2>

    <button type="button" onclick="greetUser()">Greet User</button>

    <script>
        //variables
        var username = "<?php echo $username?>";
        var userID = "<?php echo $user_id?>";
        var age = "<?php echo $age?>";
        var gender = "<?php echo $gender?>";

        //function
        function greetUser(){
            alert("Hello "+username+" "+"Your UserID is: "+userID+" "+"Your Age is: "+age+" "+"Gender: "+gender+" ");
        }
        </script>
</body>
</html>