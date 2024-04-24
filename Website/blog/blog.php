

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <script src="Script.js"></script>
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <!--navbar-->
        <p class="title">BLOG</p>
        <p class="sub-title">Recipes & Gift Ideas</p>
    </header>
    <div class="card-container">
        <div class="card">
            <img src="https://images.unsplash.com/photo-1519148246701-3dc1897a7a21?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2hvY29sYXRlJTIwcmVjaXBlc3xlbnwwfHwwfHx8MA%3D%3D" alt="brownie-pic">
            <div class="card-content">
            <h3>Chocolate Brownie</h3>
            <p>Here is the recipe of a lucious Chocolate Brownie. Check it out!</p>
            <a href="" class="btn">View Recipe</a>
            </div>
        </div>
        <div class="card">
            <img src="https://images.unsplash.com/photo-1505252929202-c4f39cda4d49?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="brownie-pic">
            <div class="card-content">
            <h3>Chocolat Fondant</h3>
            <p>Here is the recipe of a lucious "Chocolat Fondant". Check it out!</p>
            <a href="" class="btn">View Recipe</a>
            </div>
        </div>
        <div class="card">
            <img src="https://images.unsplash.com/photo-1613563952058-93bc5bff5591?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNob2NvbGF0ZSUyMHJlY2lwZXN8ZW58MHx8MHx8fDA%3D" alt="brownie-pic">
            <div class="card-content">
            <h3>Chocolate Brownie</h3>
            <p>Here is the recipe of a lucious Chocolate Brownie. Check it out!</p>
            <a href="" class="btn">View Recipe</a>
            </div>
        </div>
    </div>











    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active c-item">
            <img src="https://images.unsplash.com/photo-1481391319762-47dff72954d9?q=80&w=1530&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 c-img" alt="Slide 1">
            <div class="carousel-caption top-0 mt-4">
            <p class="mt-5 fs-3 text-uppercase">New Recipe!</p>
            <h1 class="display-1 fw-bolder text-capitalize">Chocolate with Strawberry</h1>
            <button class="btn btn-secondary px-4 py-2 fs-5 mt-5">Discover</button>
            </div>
        </div>
        <div class="carousel-item c-item">
            <img src="https://media.istockphoto.com/id/488182109/photo/chocolates.jpg?s=612x612&w=0&k=20&c=OAzD-G8GZZfzb5bgZ5CJd_PdSIJqdnInLmEeeiDGRe0=" class="d-block w-100 c-img" alt="Slide 2">
            <div class="carousel-caption top-0 mt-4">
            <p class="text-uppercase fs-3 mt-5">New Recipe!</p>
            <p class="display-1 fw-bolder text-capitalize">Chocolate Pie</p>
            <button class="btn btn-secondary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
                data-bs-target="#booking-modal">Discover</button>
            </div>
        </div>
        <div class="carousel-item c-item">
            <img src="https://media.istockphoto.com/id/627574168/photo/gift-of-homemade-fudge.jpg?s=612x612&w=0&k=20&c=IBPbNAZxf1FKvyfOTrcpIpzf2cVyAM14AtIOsBOWiDs=" class="d-block w-100 c-img" alt="Slide 3">
            <div class="carousel-caption top-0 mt-4">
            <p class="text-uppercase fs-3 mt-5">New Recipe!</p>
            <p class="display-1 fw-bolder text-capitalize">Mousse with Chocolate</p>
            <button class="btn btn-secondary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
                data-bs-target="#booking-modal">Discover</button>
            </div>
        </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>






    </div>
   

        <!--footer-->
</body>
</html>