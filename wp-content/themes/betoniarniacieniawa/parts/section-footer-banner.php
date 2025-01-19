<?php
  $footer_banner_caption = get_field('pasek_stopka_napis', 'option');
  $footer_banner_btn= get_field('pasek_stopka_link', 'option');
?>

<div class="section bg-primary">
  <div class="content-wrap py-5">
    <div class="container">

      <div class="row align-items-center cta-block-1">
        <div class="col-sm-8 col-md-8">
          <h4 class="my-1 text-white">
            <?php
              if($footer_banner_caption)
                echo esc_html($footer_banner_caption);
            ?>
          </h4>
        </div>

        <?php if($footer_banner_btn): ?>

        <div class="col-sm-4 col-md-4">
          <div class="tbutton">
            <a href="<?php echo esc_url($footer_banner_btn['url']); ?>"
              class="btn btn-secondary"><?php echo esc_html($footer_banner_btn['title']); ?>
              <img class="btn-icon" src="<?php echo get_theme_file_uri('/images/icon-arrow.png'); ?>" alt="icon-arrow">
            </a>
          </div>
        </div>

        <?php endif; ?>

      </div>

    </div>
  </div>
</div>