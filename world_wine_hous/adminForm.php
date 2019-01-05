
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
            <li class="nav-item active">
                <a class="nav-link " style="color: white ; font-size:14px" href="index.php" id="home">Oder <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link " style="color: white ; font-size:14px" href="index.php" id="home">item <span class="sr-only">(current)</span></a>
            </li>



        </ul>
    </div>
</nav>


<!--=============form=============-->

<div id="customerForm">

    <div class="row">
        <div class="container">
            <form id="itenForm">
                <div class="form-row container">
                    <div class="col-md-4 col-mb-12 col-sm-12">
                        <label for="validationDefault01">Item Code</label>
                        <input id="itemCode" name="itemCode" type="text" class="form-control"  placeholder="Item Code" required>
                    </div>
                    <div class="col-md-4 col-mb-12 col-sm-12" >
                        <label for="validationDefault02">Type</label>
                        <input id="type" name="type" type="text" class="form-control"  placeholder="Type" required>
                    </div>

                    <div class="col-md-4 col-mb-12 col-sm-12" >
                        <label for="validationDefault02">Cuntries</label>
                        <input id="cuntries" name="cuntries" type="text" class="form-control"  placeholder="Cuntries"  required>
                    </div>

                    <div class="col-md-4 col-mb-12 col-sm-12" >
                        <label for="validationDefault02">Brand</label>
                        <input id="brand" name="brand" type="text" class="form-control"  placeholder="Brand"  required>
                    </div>
                    <div class="col-md-4 col-mb-12 col-sm-12" >
                        <label for="validationDefault02">Unit Price</label>
                        <input id="price" name="price" type="text" class="form-control"  placeholder="Unit Price"  required>
                    </div>
                    <div class="col-md-4 col-mb-12 col-sm-12" >
                        <label for="validationDefault02">Size</label>
                        <input id="size" name="size" type="text" class="form-control"  placeholder="Size" required>
                    </div>
                    <div class="col-md-4 col-mb-12 col-sm-12" >
                        <label for="validationDefault02">Age</label>
                        <input id="age" name="age" type="text" class="form-control"  placeholder="Age"  required>
                    </div>
                    <div class="col-md-4 col-mb-12 col-sm-12" >
                        <label for="validationDefault02">ABV</label>
                        <input id="abv" name="abv" type="text" class="form-control"  placeholder="ABV"  required>
                    </div>

                </div>


            </form>
            <button class="btn btn-primary" type="button" style="height: 40px ;margin-left: 20px" id="btnSave">Save</button>
        </div>



    </div>

</div>

<!--==== table====-->

<div class="row py-5">
    <div class="col-12">
        <table class="table table-hover table-bordered">
            <thead class="bg-dark">
            <tr style="color:white;">
                <th>ID</th>
                <th>Type</th>
                <th>Countries</th>
                <th>Brand</th>
                <th>Unit Price</th>
                <th>Size</th>
                <th>Age</th>
                <th>ABV</th>
            </tr>
            </thead>
            <tbody id="cusTable"></tbody>
        </table>


    </div>

</div>



<script src="dist/js/bootstrap.bundle.min.js" ></script>
<script src="dist/js/jquery-3.3.1.min.js"></script>
<script src="dist/controller/adminFornmScript.js"></script>
</body>
</html>
