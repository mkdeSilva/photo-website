<html>

<head>

    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body>   
    <div id="nav">
        <div id="navWrapper">
            <ul>
                <li><a href="main.html">Home</a></li>
                 <li><a>Gallery</a>
                    <ul>
                        <li><a href="landscapes.html">Landscapes</a></li>
                        <li><a href="automobiles.html">Automobiles</a></li>
                        <li><a href="minimal.html">Minimal</a></li>
                    </ul>

                </li>
                <li><a href="aboutUs.html">About Us</a></li>
                <li><a href="registration.php">Sign Up</a></li>
             
            </ul>

        </div>
    </div>
<!-- --------------------------------------------------------------------------- -->
   
   
    <br>
    <br>
    <div class="container">
        <center>
            <h3> 1. Personal Information : </h3>
            <?php
	            echo "Full Name: " . $_POST['text1'];
            ?>
        <br><br> Gender: <?php echo $_POST['gender']; ?>
        <br><br> Date of Birth: <?php echo $_POST['DOBMonth'] ?> 
                            <?php echo $_POST['DOBDay'] ?> 
                            <?php echo $_POST['DOBYear'] ?>
        </center>
        <hr>
<!------------------------------------------------------------------------------------->
        <center>
            <h3> 2. Contact Information : </h3>
            <?php
                echo "E-Mail: " . $_POST['text2'];
                echo "<br><br>"."Phone No: " . $_POST['text4'];
                echo "<br><br>"."Address: " . $_POST['text5'];
                echo "<br><br>"."State/Province: " . $_POST['text6'];
                echo "<br><br>"."Postal Code: " . $_POST['text7'];
                echo "<br><br>"."City: " . $_POST['text8'];
                echo "<br><br>"."Country: " . $_POST['text9'];
            ?>
        <hr>    
<!------------------------------------------------------------------------------------->
        <center>
            <h3> 3. Login Information : </h3>
            <?php
                echo "Username: " . $_POST['text3']; 
            ?>
        <br><br> Password : <?php echo $_POST['pass']; ?>
        </center>
    </div>
</body>

</html>
