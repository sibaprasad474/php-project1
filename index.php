<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body style="background-color:antiquewhite;padding:10px;overflow-x:hidden;">
    <div id="nav">
        <?php include_once "./navbar.php";  ?>
    </div>
    <div class="container1" id="container1" style="height:80vh;">
        <div class="row" id="row1" style="height:100%">
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
    </div>
    <h1 style="text-align: center; margin:2rem;">Explore staying options</h1>
    <p style="text-align: center;padding:1rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit commodi assumenda ex voluptate necessitatibus animi omnis asperiores consequatur hic, aspernatur placeat, cupiditate corrupti ea enim nulla saepe eum laboriosam?</p>

    <div class="container2">
        <div class="left">
            <h1 style="text-align: center;">DELUXE ROOMS</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis consequatur, distinctio pariatur quae quo adipisci aspernatur modi, eveniet quam, labore nisi dolore eius voluptate voluptatem sapiente? Accusamus eaque tempore placeat.</p>
            <button style="width:25%;margin:auto; height:3rem;">Explore</button>
        </div>
        <div class="right">

        </div>
    </div>
    <div class="container2 container3">
        <div class="left">
            <h1 style="text-align: center;">VILLAS</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis consequatur, distinctio pariatur quae quo adipisci aspernatur modi, eveniet quam, labore nisi dolore eius voluptate voluptatem sapiente? Accusamus eaque tempore placeat.</p>
            <button style="width:25%;margin:auto; height:3rem;">Explore</button>
        </div>
        <div class="right" style="background:url('https://images.unsplash.com/photo-1613490493576-7fde63acd811?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');background-position:center;background-size:center;">
        </div>
    </div>
    <h1 style="text-align: center; margin-top:1rem">Explore Packages</h1><br>
    <p style="text-align: center;padding:1rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit commodi assumenda ex voluptate necessitatibus animi omnis asperiores consequatur hic, aspernatur placeat, cupiditate corrupti ea enim nulla saepe eum laboriosam?</p>

    <!-- -------------------  -->
    <div class="container2">
        <div class="left"style="background:url('https://images.unsplash.com/photo-1531685250784-7569952593d2?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D;">
            <h1 style="text-align: center;">ADVENTURE PACKAGES</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis consequatur, distinctio pariatur quae quo adipisci aspernatur modi, eveniet quam, labore nisi dolore eius voluptate voluptatem sapiente? Accusamus eaque tempore placeat.</p>
            <button style="width:25%;margin:auto; height:3rem;">Explore</button>
        </div>
        <div class="right" style="background:url('https://images.unsplash.com/photo-1696235683834-888c871ef91d?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');background-position:center;background-size:center;">
        </div>
    </div>
    <div class="container2 container3">
        <div class="left">
            <h1 style="text-align: center;">SPIRITUALS</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis consequatur, distinctio pariatur quae quo adipisci aspernatur modi, eveniet quam, labore nisi dolore eius voluptate voluptatem sapiente? Accusamus eaque tempore placeat.</p>
            <button style="width:25%;margin:auto; height:3rem;">Explore</button>
        </div>
        <div class="right" style="background:url('https://images.unsplash.com/photo-1620766182966-c6eb5ed2b788?q=80&w=1496&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');background-position:center;background-size:center;">
        </div>
    </div>
    <footer id="footer" style="background-color:#000;bottom:0; color:#fff;">
    <p style="text-align:center">©2024 sibaprasad mishra all rights reserved.</p>
    </footer>
</body>

</html>