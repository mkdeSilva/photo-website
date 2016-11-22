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
    
    <br><br><br>
    <div class="container">
        <center>
            <h1> Transaction Complete! </h1>
            <h2> You have purchased "The Pier of Dreams" </h2>
            <center>
            <div class="row">
                <div class="col">
                    <img src="labpictures/pier.jpg" width=80%>
                </div>
            </center
            </div>
            <h3> Below are your purchase details : </h3>
        Image Details: <?php echo $_POST['details']; ?>
    </div>
                
</body>

</html>