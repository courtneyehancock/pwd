<footer>
  <div class="container pb-5">
    <div class="row">
      <div class="col-lg-9">
        <!--Logo/text widget-->
        <?php dynamic_sidebar('left-footer'); ?>
      </div>
      <div class="col-lg-4">
        <!--Middle Footer-->
        <?php dynamic_sidebar('middle-footer'); ?>
      </div>
      <div class="col-lg-3">
        <!--Middle Right Footer-->
        <?php dynamic_sidebar('middle-right-footer'); ?>
      </div>
    </div>
  </div>

  <div class="container-fluid final-footer">
    <div class="row align-items-center">
      <div class="col-lg-9">
        <p> © <?php echo date("Y"); ?> University of Florida Professional and Workforce Development | <a href="mailto:cehancock@mail.ufl.edu">Website Feedback</a> | <a href="https://privacy.ufl.edu/privacy-policies-and-procedures/onlineinternet-privacy-statement/">UF Privacy Policy</a></p>
      </div>

      <div class="col-lg-3">
        <a href="https://www.ufl.edu/" target="_blank"><img alt="UF Logo" src="https://cwde.aa.ufl.edu/wp-content/uploads/sites/2/2020/05/UF_Signature_white.png"/></a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
