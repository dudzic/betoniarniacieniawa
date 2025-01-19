<?php
  $main_offer = get_field('oferta_glowna', 'option');
?>

<section>
  <div class="section">
    <div class="content-wrap pt-0">
      <div class="container">

        <div class="row overlap-row">
          <?php
            if($main_offer):
              foreach($main_offer as $offer):
          ?>

          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="box-image-3 text-black">
              <div class="media-img main-offer-img">
                <img src="<?php echo esc_url($offer['oferta_glowna_obrazek']['url']); ?>"
                  alt="<?php echo $offer['oferta_glowna_obrazek']['name']; ?>" class="img-fluid">
              </div>
              <div class="body-content main-offer">
                <h4 class="main-offer-title"><?php echo esc_html($offer['oferta_glowna_tytul']); ?></h4>
                <p><?php echo esc_html($offer['oferta_glowna_opis']); ?></p>
                <a class="main-offer-link"
                  href="<?php echo esc_url($offer['oferta_glowna_link']['url']); ?>"><?php echo esc_html($offer['oferta_glowna_link']['title']); ?></a>
                <img src="<?php echo get_theme_file_uri('/images/icon-arrow-two.png'); ?>" alt="icon-arrow">
              </div>
            </div>
          </div>

          <?php endforeach; ?>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</section>