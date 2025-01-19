<?php
  $footer_logo = get_field('stopka_logo','option');
  $footer_info = get_field('stopka_info','option');
  $footer_copyright = get_field('stopka_prawa_autorskie','option');
?>

<div class="footer">
  <div class="content-wrap">
    <div class="container">

      <div class="row">

        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="footer-item">
            <a href="<?php echo esc_url(site_url('/')); ?>"><img
                src="<?php if($footer_logo) echo esc_url($footer_logo['url']); ?>" alt="logo" class="logo-bottom"></a>
            <div class="spacer-30"></div>
            <p><?php if($footer_info) echo $footer_info; ?></p>
          </div>
        </div>


        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="footer-item">
            <div class="footer-title">
              <?php echo wp_get_nav_menu_name('footer-menu-left'); ?>
            </div>

            <div class="row">
              <div class="col-md-12">

                <?php
                  wp_nav_menu(
                    array(
                      'theme_location'    => 'footer-menu-left',
                      'container'         => false,
                      'menu_class'        => 'list'
                    )
                  )
                ?>

              </div>
            </div>

          </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="footer-item">
            <div class="footer-title">
              <?php echo wp_get_nav_menu_name('footer-menu-right'); ?>
            </div>

            <div class="row">
              <div class="col-md-12">

                <?php
                  wp_nav_menu(
                    array(
                      'theme_location'    => 'footer-menu-right',
                      'container'         => false,
                      'menu_class'        => 'list'
                    )
                  )
                ?>

              </div>
            </div>

          </div>
        </div>

      </div>

    </div>
  </div>
  <div class="fcopy">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <p class="mt-3 text-center"><?php if($footer_copyright) echo esc_html($footer_copyright); ?></p>
        </div>
      </div>
    </div>
  </div>

</div>
</footer>