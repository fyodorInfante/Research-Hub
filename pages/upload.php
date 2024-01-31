<?php
session_start();

if (isset($_SESSION['fullname'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Upload</title>
        <link rel="shortcut icon" type="image/x-icon" href=".././assets/img/logo/logo.png" />
        <link rel="stylesheet" href=".././node_modules/bootstrap/dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../assets/css/upload.css" />
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-bottom shadow">
            <a class="navbar-brand ms-5" href="#">
                <h5>Research<span class="text-primary">Hub</span></h5>
            </a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Repository</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>

                <ul class="navbar-nav me-5">
                    <li class="nav-item">
                        <a class="nav-link" href="../scripts/authentication/logout.php">
                            <img src="../assets/img/icons/logout.svg" alt="logout button" height="25" />
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="form-container mt-4 mx-5">
            <h3 class="text-black ms-5">Upload Research</h3>
            <form class="mt-1" action="./scripts/authentication/signup.php" method="POST">
                <div class="mx-3">
                    <div class="row g-2 mt-2 justify-content-around">
                        <div class="col-sm-5 me-5">
                            <label for="PASSWORD">Enter your Research Title</label>
                            <input type="text" class="form-control mt-1 border border-0 input" placeholder="ex. ACLC Research Hub" required />
                        </div>
                        <div class="col-sm-5">
                            <label for="REPASSWORD">Enter Research Categories</label>
                            <input type="text" class="form-control mt-1 border border-0 input" placeholder="ex. Technologies, Psychology, Science, etc" required />
                        </div>
                    </div>
                </div>
                <div class="mx-3">
                    <div class="row g-2 mt-2 justify-content-around">
                        <div class="col-sm-5 me-5">
                            <label for="PASSWORD">Enter the Authors</label>
                            <input type="text" class="form-control mt-1 border border-0 input" placeholder="ex. Jerome Infante, Jhayen Villanueva, ..." required />
                        </div>
                        <div class="col-sm-5">
                            <label for="REPASSWORD">Published Date</label>
                            <input type="date" class="form-control mt-1 border border-0 input" placeholder="ex. Technologies, Psychology, Science, etc" required id="date" />
                        </div>
                    </div>
                </div>
                <div class="mx-2 mt-3">
                    <div class="mx-5">
                        <label for="exampleFormControlTextarea1">Enter a Description</label>
                        <textarea class="form-control border border-0 input" rows="3" placeholder="This research is about..."></textarea>
                    </div>
                </div>

                <div class="mt-4 mx-5">
                    <label for="UploadResearchPDF"></label>
                    <input placeholder="Upload" type="file" id="UploadResearchPDF" />
                </div>
                <button type="button" class="btn btn-primary mx-5 mt-3" id="submitButton">SUBMIT</button>
            </form>
        </div>
        <script src=".././node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>

    </html>
<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>