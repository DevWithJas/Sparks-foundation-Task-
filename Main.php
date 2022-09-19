<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>

</head>

<body>

<!-- Child.1 !-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SBS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/SBS/Main.php#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/SBS/transfrer_money.php ">Pay</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/SBS/transactionhistory.php">Transaction History</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="http://localhost/SBS/Contactme.php ">Contact us</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!-- child.2-->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="los1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Los Angles</h5>
                    <p>We had a great time in LA</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="c1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Chicago</h5>
                    <p>Thank you, Chicago</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="b3.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>New York</h5>
                    <p>We love the big apple</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<!--child.3-->    

    <section class="my-3">
        <div class="py-3">
            <h2 class="text-center"> About us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="l1.jpg" class="img-fluid" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                   <h2 class = "display-4">We are SBS</h2>
                   <p class ="py-5"> Being one of the most trusted bank through out the world 
                    we are always avaialbe in your serviecs. SBS is the most secure and
                    safe bank you will ever find. We promise to make your transactions a lot 
                    easier to manage. Feel free to call us any time, we are avaialbe 24*7.
                   </p>
                   <a href="about.php" class= "btn btn-success">Check more</a>
                </div>
            </div>

    </section>



</body>

</html>