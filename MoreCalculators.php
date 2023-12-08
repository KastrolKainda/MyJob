<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>

<style>
html{
    /*background: #222;*/
    background: #abb0b0c9;
}
    /* Reset some default styles */
body, h1, h2, ul {
    margin: 0;
    padding: 0;
}

/* Global styles */
body {
    font-family: Arial, sans-serif;
    color: #333;

}

header {
    color: #000000;
    padding: 20px;
    text-align: center;
}

main {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: 20px;
}

.calculator {
    background-color: white;
    margin: 20px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0.2, 0.4);
    border-radius: 5px;
    text-align: center;
}

.calculator a {
    height: 10px;
    width: 500px;
    display: block;
    margin-top: 10px;
    text-decoration:solid;
    color: #ff5722;
    font-weight: bold;
}

footer{
    text-align: center;

}

        /* the home page of C.I.T */
ul{
    list-style-type: none;
    padding: 0px;
    margin: 0px;
    overflow: hidden;
    background: rgb(8, 37, 54);   
}

        /* for the main content found at CUZ */
ul a{
    font-size: 20px;
    float: left;
    display: block;
    border-radius: 4px;
    color: #fff;
    padding: 20px;
    text-decoration: none;
    text-align: center;
}
        /* the colour for appearance when you click/press on the bar */
ul a:hover{
   /* text-decoration: underline 1.0px solid #fff;*/
   color: rgb(29, 154, 226);
}

a{
    text-decoration: none;
    font-size: 15px;
    color: #fff;
}

        /*the property of the what is inside the HEADER part when clicked or hovered*/
ul li ul li{
    display: none;
    text-align: left;
    color: #fff;
    padding-left: 10px;
    margin: 0px;
    margin-top: 1px;
    border-bottom: 15px;
    text-decoration: none;
    height: 30px;
    width: 140px;
    border-bottom: 15px;
    background-color: rgba(56, 99, 99, 0.454);
    border-bottom: 1px solid #000000;
}



    </style>
</head>

<body>
    <ul>
        <!--the services that are being offered at the CIT of the people -->
        <li><a href="HomaPage_1.php"> Home </a></li>
        <li><a href="##"> Calculator </a></li>
        <li><a href="about.php"> About </a></li>
        <li><a href="##"> Contact </a></li>
        <li><a href="##"> Blog</a></li>
    </ul>
    <header>
        <h1>Welcome to AbrahShimi Online Calculators</h1>
    </header>

    <main>
        <section class="calculator">
            <h2>Basic Calculator</h2>
            <h4>Calculating basic Math Operations </h4>
            <a id="p1" href="calculator.php" target="_blank">TryNow</a>
        </section>

        <section class="calculator">
            <h2>BMI Calculator</h2>
            <h4>Calculating your Body Mass Index</h4>
            <a href="calculator2.html">TryNow</a>
        </section>

        <section class="calculator">
            <h2>Temperature Calculator</h2>
            <h4>Calculating all your different Temperatures</h4>
            <a href="calculator3.html">TryNow</a>
        </section>
        
        <section class="calculator">
            <h2>Distance Calculator</h2>
            <h4>Calculating your Speed, Distance and Time</h4>
            <a href="calculator3.html">TryNow</a>
        </section>

        
        <section class="calculator">
            <h2>Currency Calculator</h2>
            <h4>Calculating your Currency Convection</h4>
            <a href="calculator3.html">TryNow</a>
        </section>

        
        <section class="calculator">
            <h2>Programming Calculator</h2>
            <h4>Calculating all your Programming Problems</h4>
            <a href="calculator3.html">TryNow</a>
        </section>

       
    </main>

    <footer>
        <br>
        <p>&copy; 2023 Online Calculator</p>
    </footer>

</body>
</html>

