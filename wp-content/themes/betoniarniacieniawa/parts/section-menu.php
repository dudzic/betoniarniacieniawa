<div class="animationload">
  <div class="loader"></div>
</div>


<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

<nav>
  <div class="header header-1">

    <div class="middlebar d-none d-sm-block">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-3 col-md-3">
            <div class="logo">
              <a href="<?php echo esc_url(get_home_url()); ?>">

                <?php
                $customLogoId = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($customLogoId, 'full');

                if(has_custom_logo())
                {
                  echo '<img src="' .esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                }
                else
                {
                  echo '<h2>' . get_bloginfo('name') . '</h2>';
                }
              ?>

              </a>
            </div>
          </div>
          <div class="col-9 col-md-9">
            <div class="contact-info">

              <?php
              $contact_details = get_field('dane_kontaktowe', 'option');
              if($contact_details):
                foreach($contact_details as $contact):
            ?>

              <div class="rs-icon-1">
                <div class="icon">
                  <img src="<?php echo $contact['dane_kontaktowe_ikona']['url']; ?>"
                    alt="<?php echo $contact['dane_kontaktowe_ikona']['title']; ?>">
                </div>
                <div class="body-content">
                  <div><?php echo esc_html($contact['dane_kontaktowe_naglowek']); ?></div>
                  <?php echo esc_html($contact['dane_kontaktowe_tresc']); ?>
                </div>
              </div>

              <?php endforeach; ?>
              <?php endif;?>

            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="navbar-main">
      <div class="container">
        <nav id="navbar-example" class="navbar navbar-expand-lg navbar-bg">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link"
                  href="<?php echo esc_url(site_url('/')); ?>"><?php echo esc_html__('Strona główna', 'betoniarnia-cieniawa'); ?></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?php echo esc_url(site_url('/oferta')); ?>" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Oferta
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item"
                    href="<?php echo esc_url(site_url('/oferta/beton')); ?>"><?php echo esc_html__('Beton', 'betoniarnia-cieniawa'); ?></a>
                  <a class="dropdown-item"
                    href="<?php echo esc_url(site_url('/oferta/wyroby-betonowe')); ?>"><?php echo esc_html__('Wyroby betonowe', 'betoniarnia-cieniawa'); ?></a>
                  <a class="dropdown-item"
                    href="<?php echo esc_url(site_url('/oferta/uslugi')); ?>"><?php echo esc_html__('Usługi', 'betoniarnia-cieniawa'); ?></a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link"
                  href="<?php echo esc_url(site_url('/realizacje')); ?>"><?php echo esc_html__('Realizacje', 'betoniarnia-cieniawa'); ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"
                  href="<?php echo esc_url(site_url('/o-firmie')); ?>"><?php echo esc_html__('O Firmie', 'betoniarnia-cieniawa'); ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"
                  href="<?php echo esc_url(site_url('/kontakt')); ?>"><?php echo esc_html__('Kontakt', 'betoniarnia-cieniawa'); ?></a>
              </li>
            </ul>

          </div>

          <a href="<?php echo esc_url(site_url('/kontakt')); ?>"
            class="btn btn-primary btn-navbar d-none d-sm-block"><?php echo esc_html__('Skontaktuj się z nami', 'betoniarnia-cieniawa'); ?></a>
        </nav>


      </div>
    </div>

  </div>
</nav>