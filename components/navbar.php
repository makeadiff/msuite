  <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">
      <img src="" width="30" height="30" class="d-inline-block align-top" alt=""> &nbsp;
      <strong>M</strong>Suite
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./"> <i class="icon ion-md-home"></i> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./usage.php">Usage</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Components
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
<?php
    foreach ($components as $key => $component) {
?>
            <a class="dropdown-item" href="#<?php echo $key ?>"><?php echo $component ?></a>
            <div class="dropdown-divider"></div>  <!-- Optional -->
<?php
    }
?>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <span class="user_name">
          Naughty
        </span>
        <br/>
        <span class="user_profile">
          Cheif Barking Officer
        </span>
        <div class="profile_image">
          <img src="https://picsum.photos/id/237/200/300">
          <span class="badge badge-notification badge-pill">14</span>
        </div>
      </form>
    </div>
  </nav>
