<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
       
        #banner {
            position: relative;
            margin: 0 auto;
            width: 100%;
            height: 100%;
        }

        #background-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;

        }

        #container1 {
            height: 200vh;
            margin: 0;
            width: 100%;
            
            
        }

        #row1 {
            height: 30%;
        }

        #row3 {
            height: 30%;
        }

        .content-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }

        .content-overlay h1 {
            font-size: 2.5em;
            color: #fff;
        }

        .content-overlay p {
            font-size: 1.3em;

        }

        .content-overlay button {
            padding: 10px 20px;
            font-size: 1em;
            background-color:#fff;
            color: #000;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="nav">
        <?php include_once "./navbar.php";  ?>
    </div>
    <div class="container1" id="container1">
        <div class="row border" id="row1">
            <div class="col-sm-10 col-md-8 col-lg-8 border" id="banner">
                <video autoplay muted loop poster="video-poster.jpg" id="background-video">
                    <source src="./docs/bg1.mp4" type="video/mp4">
                </video>
                <div class="content-overlay">
                    <h1>Unleash Your Wanderlust with <br> Travel4Life.com</h1>
                    <p>Embark on a journey of discovery and create timeless memories as you explore the world with Travel4Life.com. From hidden gems to iconic destinations, let us be your guide to a lifetime of extraordinary adventures.</p>
                    <button class="btn btn-dark">Explore Now</button>
                </div>
            </div>
        </div>
        <div class="row border" id="row2">
            <div class="col bg-dark text-light text-center p-1 m-4 fs-5">Explore the options</div>
        </div>
        <div class="row border" id="row3">
            <div class="col-3 m-auto text-center p-1 m-4 fs-5">
                
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>