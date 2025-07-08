<?php
session_start();

$conn = new mysqli("localhost", "root", "", "user");

if ($conn->connect_error) {
      die("Connection failed");
}

$userprofile = $_SESSION['username'];

$query = "select * from register where Username='$userprofile'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
?>


<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ric</title>
</head>

<body id="content" style="background-color:grey" ;>
      <h6>WElCOME..! <?php echo "$userprofile" ?></h6>

      <a href="logout.php">Logout</a>

      <!--navbar start-->
      <div>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                  <div class="container-fluid">
                        <a class="navbar-brand" href="#">RISHI SAKARIYA</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                              aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="main.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown
                                          </a>
                                          <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">DropDown1</a></li>
                                                <li><a class="dropdown-item" href="#">DropDown2</a></li>
                                                <li>
                                                      <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">DropDown3</a></li>
                                          </ul>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                    </li>
                              </ul>
                              <form class="d-flex" role="search" id="searchForm">
                                    <input class="form-control me-2" type="search" id="searchInput" placeholder="Search"
                                          aria-label="Search" />
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                              </form>

                              <button type="button" class="btn btn-primary" style="margin-left: 20px;"
                                    onclick="window.location.href='Login.php'">Login</button>


                        </div>
                  </div>
            </nav>
      </div>
      <!--navbar end-->

      <!--slider start-->
      <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                  <div class="carousel-item active">
                        <!--<img src="1.png" class="d-block w-100" alt="pic1">-->
                        <img src="4.jpg" class="d-block w-100" alt="pic1" style="height: 600px; object-fit: cover;">
                  </div>
                  <div class="carousel-item">
                        <img src="2.jpg" class="d-block w-100" alt="pic2" style="height: 600px; object-fit: cover;">
                  </div>
                  <div class="carousel-item">
                        <img src="3.jpg" class="d-block w-100" alt="pic3" style="height: 600px; object-fit: cover;">
                  </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
            </button>
      </div>

      <!--slider end-->
      <!--<div>
      <div class="card" style="width: 18rem;">
  <img src="1.png " class="card-img-top" alt="picture">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

       <div class="card" style="width: 18rem;">
  <img src="1.png " class="card-img-top" alt="picture">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

       <div class="card" style="width: 18rem;">
  <img src="1.png " class="card-img-top" alt="picture">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</div>-->

      <div class="d-flex justify-content-center gap-3 flex-wrap" style="padding:20px;">

            <div class="card" style="width: 18rem; color: white; background-color:black; margin-right: 30px;">
                  <img src="1.png" class="card-img-top" alt="picture">
                  <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                              the card’s content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
            </div>

            <div class="card" style="width: 18rem; color: white; background-color:black; margin-right: 30px;">
                  <img src="1.png" class="card-img-top" alt="picture">
                  <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                              the card’s content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
            </div>

            <div class="card" style="width: 18rem; color: white; background-color:black; margin-right: 30px;">
                  <img src="1.png" class="card-img-top" alt="picture">
                  <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                              the card’s content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
            </div>

            <div class="card" style="width: 18rem; color: white; background-color:black; margin-right: 30px;">
                  <img src="1.png" class="card-img-top" alt="picture">
                  <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                              the card’s content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
            </div>
      </div>

</body>

</html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
      crossorigin="anonymous"></script>


<!-- scricpt-->


<!--<div id="content">
  <p>This is some example text about cats, dogs, and birds.</p>
  <p>Try searching for "cats" or "birds".</p>
</div>-->

<script>
      document.getElementById('searchForm').addEventListener('submit', function (e) {
            e.preventDefault(); // prevent page reload

            const searchTerm = document.getElementById('searchInput').value.trim().toLowerCase();
            if (!searchTerm) return;

            // Remove previous highlights
            const paragraphs = document.querySelectorAll('#content p');
            paragraphs.forEach(p => {
                  p.innerHTML = p.textContent;
            });

            let firstMatchElement = null;

            for (let p of paragraphs) {
                  const text = p.textContent.toLowerCase();
                  if (text.includes(searchTerm)) {
                        // Highlight matched term(s)
                        const regex = new RegExp(`(${searchTerm})`, 'gi');
                        p.innerHTML = p.textContent.replace(regex, `<mark>$1</mark>`);

                        if (!firstMatchElement) firstMatchElement = p;
                  }
            }

            if (firstMatchElement) {
                  // Scroll to the first matching paragraph smoothly
                  firstMatchElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
            } else {
                  alert('No results found!');
            }
      });
</script>