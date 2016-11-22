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

    <div id="allInputs">
        <center>
        <h1> Registration Form </h1>
        </center>
        <h3> Please fill in the information below </h3>
        <hr>
<!------------------------------------------------------------------------------------------------------------------------>
        
        <form action="ProfileConfirmation.php" method="post">
        <h2> 1. Personal Information : </h2>   
            Full Name <br> <input type = "text" name = "text1"> <br><br>
            Gender 
            <br><input type="radio" name="gender" value="Male" CHECKED> Male
            <br><input type="radio" name="gender" value="Female"> Female
            <br><input type="radio" name="gender" value="Other"> Other
            <br>
            <br>
            Date of Birth:
            <br><select name="DOBMonth">
	           <option> - Month - </option>
	           <option value="January">January</option>
	           <option value="Febuary">Febuary</option>
	           <option value="March">March</option>
	           <option value="April">April</option>
	           <option value="May">May</option>
	           <option value="June">June</option>
	           <option value="July">July</option>
	           <option value="August">August</option>
	           <option value="September">September</option>
	           <option value="October">October</option>
	           <option value="November">November</option>
	           <option value="December">December</option>
            </select>
            

            <select name="DOBDay">
	            <option> - Day - </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            

            <select name="DOBYear">
                <option> - Year - </option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
            </select>
            <br><br>
            <hr>
<!------------------------------------------------------------------------------------------------------------------------>
        <h2> 2. Contact Information :  </h2>  
            E-Mail <br> <input type = "text" name = "text2"> <br><br>
            Phone No. <br> <input type = "text" name = "text4"> <br><br>
            Address <br> <input type = "text" name = "text5"> <br><br>
            State/Province <br> <input type = "text" name = "text6"> <br><br>
            Postal Code <br> <input type = "text" name = "text7"> <br><br>
            City <br> <input type = "text" name = "text8"> <br><br>
            Country <br> <input type = "text" name = "text9"> <br><br>
            <hr>

<!------------------------------------------------------------------------------------------------------------------------>
        <h2> 3. Create Your Log-In :  </h2> 
            Choose Username <br> <input type = "text" name = "text3"> <br><br>
            Choose Password <br> <input type = "password" name = "pass"><br><br>
            Verify Password <br> <input type = "password" name = "pass2"><br><br>

            
<!--            <input type="submit">-->
            <input type="submit" value="Register">
        </form>
    </div>
    </div>
</body>

</html>
