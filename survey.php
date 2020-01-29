<?php include 'global_header.php'; ?>

    <!-- Navbar Code Section -->
<?php include 'components/navbar.php'; ?>

<?php include 'template/survey.php'; ?>

<?php include 'global_footer.php'; ?>

  <script type="text/javascript">
    $(document).ready(function(){
      codeCopy('survey','survey_div');
    });

    jQuery(function($){
      $('.table').footable();
    });
  </script>

  </body>
  </html>
