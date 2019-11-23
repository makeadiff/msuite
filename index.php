<?php

  $components = [
    'navbar' => 'Navbar',
    'breadcrumb' => 'Breadcrumb',
    'icons' => 'Icons',
    'cards' => 'Cards',
    'sidebar' => 'Sidebar',
    'shadow' => 'Shadows',
    'toast' => 'Notification Toast',
    'nav' => 'Nav and Tabs',
    'table' => 'Tables',
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


<?php include 'global_header.php'; ?>

    <!-- Navbar Code Section -->
    <span id="navbar_div">
<?php include 'components/navbar.php'; ?>
    </span>

    <span id="sidebar_div">
<?php include 'components/sidebar.php'; ?>
    </span>

    <div class="container">
      <div class="elements" id="usage">
        <h1>Usage & Documentation</h1>
        <h3>For HTML/CSS/JS Projects</h3>
        <pre>
          <code>
    &lt;!DOCTYPE html&gt;
    &lt;html lang="en" dir="ltr"&gt;
      &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
        &lt;title&gt;...&lt;/title&gt;

        &lt;!-- Style Sheet for MSuite V0.2.0 --&gt;
        <span class="highlight-code">&lt;link rel="stylesheet" href="https://makeadiff.in/apps/common/msuite/css/msuite.css"&gt;</span>

      &lt;/head&gt;
      &lt;body&gt;...
      ...
    <span class="highlight-code">&lt;script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"&gt;&lt;/script&gt;
    &lt;script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'&gt;&lt;/script&gt;
    &lt;script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'&gt;&lt;/script&gt;
    &lt;script src="https://makeadiff.in/apps/common/msuite/js/msuite.js" type="text/javascript"&gt;&lt;/script&gt;
    &lt;script src="https://makeadiff.in/apps/common/msuite/js/footable.js" type="text/javascript"&gt;&lt;/script&gt;</span>
          </code>
        </pre>
          <h3>For Vue.Js Projects</h3>
        <pre>
          <code>
    <span class="highlight-code">npm install --save msuite-vue</span></code>
        </pre>
      </div>

      <div class="elements" id="navbar">
        <h1>Navbar</h1>
        <div class="code">

        </div>
      </div>

      <div class="elements" id="sidebar">
        <h1>Sidebar</h1>
        <div class="code">

        </div>
      </div>

      <div class="elements" id="breadcrumb">

        <h1>Breadcrumb</h1>
        <span class="elements_div" id="breadcrumb_div">
<?php include 'components/breadcrumb.php'; ?>
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
<?php include 'components/cards.php'; ?>
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
            <img src="..." class="rounded mr-2" alt="...">
            <strong class="mr-auto">Bootstrap</strong>
            <small class="text-muted">just now</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="toast-body">
            See? Just like this.
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
  <?php include 'components/tabs.php'; ?>
        </span>
        <div class="code">

        </div>
      </div>

      <div class="elements" id="table">
        <h1>Table</h1>
        <span class="elements_div" id="table_div">
  <?php include 'components/table.php'; ?>
        </span>

        <div class="code">
        </div>
      </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
    <script src="./js/msuite.js" type="text/javascript"></script>
    <script src="./js/footable.js" type="text/javascript"></script>
    <script src="./js/index.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        codeCopy('navbar','navbar_div');
        codeCopy('sidebar','sidebar_div');
        codeCopy('breadcrumb','breadcrumb_div');
        codeCopy('nav','nav_div');
        codeCopy('card','card_div');
        codeCopy('icons','icons_div');
        codeCopy('table','table_div');
      });

      jQuery(function($){
      	$('.table').footable();
      });
    </script>

  </body>
</html>
