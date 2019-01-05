
<html>
<header>
    <link rel="stylesheet" href="dist/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/Stylesheeti_index.css">
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">

</header>

<body>

<nav class="navbar navbar-expand-lg navbar-light " id="nav01">
    <img id="image01" src="dist/image/WorldWineLogo.png">
    <div><h3 id="name">World Wine House</h3></div>
</nav>


<!--===============================================-->

<nav class="navbar navbar-expand-lg navbar-light bg-dark h-15 " >

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link " style="color: white ; font-size:14px" href="index.php" id="home">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: white; font-size:14px" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Wine
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="font-size:14px ; background-color: #3f464c; color: white">
                    <a class="dropdown-item" href="#" id="red">red wine</a>
                    <a class="dropdown-item" href="#" id="white">White Wine</a>
                    <a class="dropdown-item" href="#" id="rose">Rose Wine</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<script src="dist/js/bootstrap.bundle.min.js" ></script>
<script src="dist/js/jquery-3.3.1.min.js"></script>

</body>
</html>
