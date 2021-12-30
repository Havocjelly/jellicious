<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css" />
    <style >
        body{
background-image:url(assets/images/bg.png);
background-size:100% 100%;
background-repeat:no-repeat;
background-attachment:fixed;
}

h1{
text-align:center;
font-size:400%;
font-family:    Times New Roman;
color: red;
}


    </style>
    <title>Search</title>
</head>

<body>
    <div class="wrapper homepage">
        <div class="mainsection">
           <h1>JELLICIOUS</h1>
            <div class="search_container">
                <form action="results.php" method="GET">
                    <input type="text" class="search_box" name="searchTerm" autofocus placeholder="Search" />
                    <input type="submit" class="search_btn" value="Search" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>