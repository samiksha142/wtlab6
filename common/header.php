<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <style>
      .nav-items {
        color: white !important;
        }

        html body {
        height: 100%;
        width: 100%;
        margin: 0;
        position: relative;
        }

        .indexbg {
        position: absolute;
        z-index: -1;
        height: 100vh;
        width: 100%;
        background-image: url("https://i.ibb.co/F71htWz/indexbg.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }

        .regbg {
        position: absolute;
        z-index: -1;
        height: 100vh;
        width: 100%;
        background-image: url("https://i.ibb.co/W6kGB91/regbg.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }

        .showbg {
        position: absolute;
        z-index: -1;
        height: 100vh;
        width: 100%;
        background-image: url("https://i.ibb.co/QY7ky8d/showbg.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }

        .blurback {
        position: absolute;
        z-index: -1;
        height: 100vh;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.45);
        top: 0;
        }

        .textbox {
        color: white;
        display: block;
        text-align: center;
        }

        .texthold {
        display: inline-block;
        margin-top: 16%;
        color: white;
        text-align: center;
        width: 100%;
        }

        .showhold {
        display: inline-block;
        margin-top: 5%;
        width: 50%;
        }

        .reghold {
        display: inline-block;
        margin-top: 6%;
        width: 35%;
        }

        .formblock {
        text-align: left;
        margin-top: 20px;
        }

        input {
        color: white !important;
        background-color: transparent !important;
        }

        select {
        color: white !important;
        background-color: transparent !important;
        }

        option {
        color: black !important;
        background-color: transparent !important;
        }

        textarea {
        background-color: transparent !important;
        color: #fff !important;
        }

        a {
        color: #fff;
        }

        #right {
        margin-left: 40px;
        }

        .navbar {
        position: absolute !important;
        width: 100vw !important;
        }

        thead td {
        font-weight: 600 !important;
        font-size: large !important;
        width: 16em;
        }

        table td {
        padding-top: 0.5em;
        }

        a:hover {
        color: black;
        text-decoration: none;
        }

  </style>
  <title><?php echo $title ?></title>
</head>

<body id="bodym">
  <div class="mainreg">
    <nav class="navbar navbar-expand-sm navbar-dark bg-none">
      <a class="navbar-brand gohome" href="index.php?req=home">Event X</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link gohome" href="index.php?req=home">
              Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link goreg" href="index.php?req=register">Register</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link goshow" href="index.php?req=attendies">Attendies</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="textbox" id="index">