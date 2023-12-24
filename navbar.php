<?php
require_once "./db-connect.php";
$id = $_GET['id'];
$qry = "select * from users where id=$id";
$conn = $connection->query($qry);
$vals = $conn->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>navigation</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .profile {
      height: 100%;
      width: 100%;
      background-position: center;
      background-size: cover;
    }

    .dark-theme {
      background-color: #252526;
      color: #fff;
    }

    .light-theme {
      background-color: whitesmoke;
      color: #252526;
    }

    body {
      transition: background-color 0.5s ease, color 0.5s ease;
    }
  </style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <!-- component -->
  <div class="h-screen w-full relative flex overflow-hidden">

    <!-- Sidebar -->
    <aside class="h-full w-16 flex flex-col space-y-10 items-center justify-center relative bg-dark text-white">
      <!-- Profile -->
      <div id="profileIcon" class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
        </svg>
      </div>

      <!-- Courses -->
      <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
        </svg>
      </div>

      <!-- Theme -->
      <div id="themeToggle" class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
        </svg>
      </div>
    </aside>

    <div class="w-full h-full flex flex-col justify-between">
      <!-- Header -->
      <header class="h-16 w-full flex items-center relative justify-end px-5 space-x-10 bg-dark">
        <!-- Informação -->
        <div class="flex flex-shrink-0 items-center space-x-4 text-white">

          <!-- Texto -->
          <div class="flex flex-col items-end ">
            <!-- Nome -->
            <div class="text-md font-medium ">Welcome !</div>
            <!-- Título -->
            <div class="text-sm font-regular"><?php echo $vals['name']; ?></div>
          </div>

          <!-- Foto -->
          <div class="h-10 w-10 rounded-full cursor-pointer bg-gray-200">
            <img src="https://e1.pxfuel.com/desktop-wallpaper/890/170/desktop-wallpaper-bmo-face-adventure-time-adventure-time-bmo.jpg" alt="" class="profile">
          </div>
        </div>
      </header>

      <!-- Main -->
      <main class="max-w-full h-full flex relative overflow-y-hidden">
        <!-- Container -->
        <div class="h-full w-full m-4 flex flex-wrap items-start justify-start rounded-tl grid-flow-col auto-cols-max gap-4 overflow-y-scroll">
          <!-- Container -->
          <div class="w-96 h-60 rounded-lg flex-shrink-0 flex-grow bg-gray-400">
            <?php
            include_once "./header.php";
            ?>
          </div>
        </div>
      </main>
    </div>

  </div>


</body>
<script>
  const themeToggle = document.getElementById('themeToggle');

  themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme');
  });
</script>

</html>