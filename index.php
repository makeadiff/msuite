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
    'close',
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
  <body class="dark">
    <span id="navbar_div">
<?php include 'components/navbar.php'; ?>
    </span>

<?php //include 'components/sidebar.php'; ?>

    <div class="elements" id="navbar">
      <h1>Navbar</h1>
      <div class="code">

      </div>
    </div>

    <div class="elements" id="breadcrumb">

      <h1>Breadcrumb</h1>
      <span class="elements_div" id="breadcrumb_div">
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
      <span class="elements_div" id="icons_div">

<?php
      foreach ($icons as $value) {
        echo '    <i class="icon ion-md-'.$value.'"></i>'.PHP_EOL;
      }
?>
      </span>

      <div class="code">
      </div>
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
      <h1>Cards</h1>
      <span class="elements_div" id="card_div">
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
      </span>

      <div class="code">
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

      <div id="copy-successful" class="toast toast-fixed top-right" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="true">
        <div class="toast-body">
          Code copied to Clipboard.
        </div>
      </div>

    </div>

    <div class="elements" id="nav">
      <h1>Nav & Tabs</h1>
      <span class="elements_div" id="nav_div">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Messages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">A</div>
          <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">B</div>
          <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">C</div>
          <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">D</div>
        </div>
      </span>
      <div class="code">

      </div>
    </div>

    <div class="elements" id="table">
      <span class="elements_div" id="table_div">
<?php include 'components/table.php'; ?>
      </span>

      <div class="code">
      </div>
    </div>



    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
    <script src="./js/msuite.js" type="text/javascript"></script>
    <script src="./js/index.js" type="text/javascript"></script>
    <script src="./js/footable.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        codeCopy('navbar','navbar_div');
        codeCopy('breadcrumb','breadcrumb_div');
        codeCopy('nav','nav_div');
        codeCopy('card','card_div');
        codeCopy('icons','icons_div');
      });

      jQuery(function($){
      	$('.table').footable();
      });
    </script>

  </body>
</html>
