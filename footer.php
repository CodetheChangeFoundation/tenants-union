<?php
/**
 * Code the Change template for the footer
 *
 * @package startertheme
 */
 ?>

<html>
<head>
<!--<link rel="stylesheet" type="text/css" href="assets/css/style.css">-->
<style><?php include 'style.css';?></style>
</head>

<body>
  <footer class="footer">
    <div class="flex-container">
          <div>

        <?php dynamic_sidebar('footer_text');?>
        </div>
        <p>
          &copy <?php echo date("Y"); ?> Vancouver Tenants Union 2019. <a href="http://codethechange.ca"> Developed by Code the Change Foundation.</a>
        </p>
        </div>
    </div>
  </div>
  </footer>
  <?php wp_footer() ?>
</body>
</html>
