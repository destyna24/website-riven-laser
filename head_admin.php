<head>
    <title>Halaman Admin Riven Laser</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d1dd01a62e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="./assets/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./assets/jQuery/jQuery-3.5.1.min.js"></script>
</head>

<style>
    body{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    nav {
        font-size: 20px;
        
    }
    div{
        font-size: 16px;
    }
</style>
<body>
<!-- header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light px-5 fixed-top" style="background-color: #002A53;">
        <a class="navbar-brand" style="font-size: 20px; font-weight: bold"> <font color="#FFFFFF" style="font-family: 'Times New Roman', Times, serif"><b>Dashboard Admin</b></font> </a>
        <button style="font-size: 10px; background-size: 1.5vw; background: #FFFFFF;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 180px;"></ul>
          <form class="d-flex">
            <input style="font-size: 15px; background-color: #FFFFFF;"  id="searchInput" class="form-control mr-2" placeholder="Cari ..." aria-label="Search" >
            <a class="btn border-dark" style="font-size: 15px; background-size: 1.5vw; background: #FFFFFF;" href="profil_admin.php">
            <i class="fas fa-user-circle" style="font-size: 15pxvw; color: #002A53;"></i></a>
            <a class="btn border-dark" style="font-size: 15px; background-size: 1.5vw; background: #FFFFFF;" href="logout.php">
            <i class="fas fa-sign-out-alt" style="font-size: 15px; color: #002A53;"></i></a>
          </form>
        </div>
      </nav>
</header>