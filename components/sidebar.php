  <div class="sidebar top-left">
    <nav class="nav">
      <ul>
        <li class="active">
          <a href="#">
            <i class="icon ion-md-home"></i> Welcome
          </a>
        </li>
  <?php
      foreach ($components as $key => $component) {
  ?>
        <li><a href="#<?php echo $key ?>"><?php echo $component ?></a></li>
  <?php
      }
  ?>
      </ul>
    </nav>

    <div class="close">
      <i class="white icon ion-md-close"></i>
    </div>
  </div>
