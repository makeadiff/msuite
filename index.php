<?php

  $components = [
    'navbar' => 'Navbar',
    'breadcrumb' => 'Breadcrumb',
    'icons' => 'Icons'
  ];

  $icons = [
    'add-circle-outline',
    'add',
    'alarm',
    'albums',
    'alert',
    'analytics',
    'apps',
    'archive',
    'arrow-back',
    'arrow-down',
    'arrow-forward',
    'arrow-back',
    'arrow-dropdown',
    'arrow-dropleft',
    'arrow-dropup',
    'arrow-dropright',
    'attach',
    'backspace',
    'bookmark',
  ];
?>

<!-- Picture Template Lorem Ipsum: https://picsum.photos/ -->


</<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MSuite</title>

    <!-- Style Sheet for MSuite V0.0.1 -->
    <link rel="stylesheet" href="./css/msuite.css">

  </head>
  <body>
    <span id="navbar_div">
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">
          <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
          <strong>M</strong>Suite
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"> <i class="icon ion-md-home"/></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Components
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <div class="profile_image">
              <img src="https://picsum.photos/id/237/200/300">
            </div>
            <span class="user_name">
              Naughty
            </span>
          </form>
        </div>
      </nav>
    </span>

    <div class="elements" id="navbar">
      <h1>Navbar</h1>
      <div class="code">

      </div>
    </div>

    <div class="elements" id="breadcrumb">

      <span id="breadcrumb_div">
        <h1>Breadcrumb</h1>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
          </ol>
        </nav>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
          </ol>
        </nav>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
          </ol>
        </nav>
      </span>

      <div class="code">

      </div>


    </div>

    <div class="elements" id="icons">
      <h1>Icons</h1>

<?php
      foreach ($icons as $value) {
        echo '<i class="icon ion-md-'.$value.'"></i>';
      }
?>
    </div>

    <div class="elements" id="dropdown">
      <h1>Dropdown</h1>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </div>

    <div class="elements" id="card">
      <div class="row">
        <div class="col-sm-2">
          <div class="card shadow border-0">
            <img src="https://picsum.photos/500/500" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="https://picsum.photos/500/500" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button class="btn btn-primary waves-effect waves-light">Go somewhere</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="elements" id="shadow">
      <h1>Shadows</h1>
    </div>

    <!-- <div class="elements" id="tabs">
      <nav class="navbar fixed-bottom navbar-light bg-light">
        <a class="navbar-brand" href="#">Fixed bottom</a>
      </nav>
    </div> -->

    <div class="elements" id="toast">
      <h1>Notification Toast</h1>

      <button class="toast-toggle btn btn-primary" id="top-right">Toggle Toast Top Right</button>
      <button class="toast-toggle btn btn-primary" id="top-left">Toggle Toast Top Left</button>

      <div id="toast-top-right" class="toast toast-fixed top-right" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
        <div class="toast-header">
          <img src="https://picsum.photos/20/20" class="rounded mr-2" alt="...">
          <strong class="mr-auto">Bootstrap</strong>
          <small class="text-muted">11 mins ago</small>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body">
          Hello, world! This is a toast message.
        </div>
      </div>

      <div id="toast-top-left" class="toast toast-fixed top-left" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
        <div class="toast-header">
          <img src="https://picsum.photos/20/20" class="rounded mr-2" alt="...">
          <strong class="mr-auto">Bootstrap</strong>
          <small class="text-muted">11 mins ago</small>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body">
          Hello, world! This is a toast message.
        </div>
      </div>

      <!-- <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
        <div class="toast-body">
          Hello, world! This is a toast message.
        </div>
      </div> -->

    </div>



    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
    <script src="./js/msuite.js" type="text/javascript"></script>
    <script src="./js/index.js" type="text/javascript"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      codeCopy('navbar','navbar_div');
      codeCopy('breadcrumb','breadcrumb_div');
    });
    </script>

  </body>
</html>
