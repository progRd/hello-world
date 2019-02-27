<?php
/* Template name: Sign In Register*/
get_header();?>

<div id="primary" class="content-area login-page">
  <main id="main" class="site-main" role="main">
  <div class="container">
    <div class="login-sec">
      <div class="row">
        <div class="col-md-8 col-lg-7 ">
          <?php
global $post;
$post_thumbnail_id = get_post_thumbnail_id($post->ID);
$banner = wp_get_attachment_image_src($post_thumbnail_id, $size = 'full');
$banner = $banner[0];
if (!empty($banner)) {
	?>
          <div class="pg-banner-sign-in">
            <h1>Nice to <span>see you<span class="yellow">!</span></span></h1>
            <img src="<?php echo $banner; ?>" class="img-responsive">
            <div class="overlay"></div>
          </div>
          <?php }?>
        </div>
        <div class="col-md-4 col-lg-5 ">
          <div class="loginBox">
            <div class="loginBox1">
              <h2 class="">Log In</h2>
              <div class="social-login clearfix"> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets-output/images/Facebook-login.png" alt="facebook" /></a> <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets-output/images/Google-login.png" alt="google" /></a> </div>
              <?php echo do_shortcode('[login_btn_nav]'); ?>
              <p class="text-right signup-txt">Don't have an account? <b><a href="#" class="sign-up">Sign Up</a></b></p>
              </div>
              <div class="col-md-12 col-lg-12 registrationBox hide">
                <h2 class="">Register</h2>
                <?php echo do_shortcode('[signup_btn_nav]'); ?>
                <p class="text-right signup-txt">Already a member? <b><a href="#" class="sign-in">Log In</a></b></p>
              </div>
              <div class="col-md-12 col-lg-12 fgd-pwd hide">
                <h2 class="entry-title">Enter Email</h2>
                <?php echo do_shortcode('[forgot_btn_nav]'); ?>
                <p>Already a member?<b><a href="#" class="sign-in">Log In</a></b></p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</main>
<!-- #main -->
</div>
<!-- #primary -->
<?php
get_footer();
?>
<script type="text/javascript">
	 (function($){
  $(document).on('click', '.sign-up', function(event) {
   event.preventDefault();
   $(this).parent().parent().parent('.loginBox1').addClass('hide');
   $('.registrationBox').removeClass('hide');
  });
  $(document).on('click', '.sign-in', function(event) {
   event.preventDefault();
   $(this).parent().parent().parent('.registrationBox, .fgd-pwd').addClass('hide');
   $('.loginBox1').removeClass('hide');
  });
  $(document).on('click', '.forget-password', function(event) {
   $('.registrationBox').addClass('hide');
   $('.loginBox1').addClass('hide');
   $('.fgd-pwd').removeClass('hide');
  })
 })(jQuery)
</script>
