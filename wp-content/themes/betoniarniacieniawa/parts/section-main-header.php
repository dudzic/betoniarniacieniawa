<div id="home" class="banner">
  <div class="owl-carousel owl-theme full-screen">

    <?php
      $main_header = get_field('naglowek_na_stronie_glownej', 'option');
      if($main_header):
        foreach($main_header as $item):
    ?>

    <div class="item">
      <img src="<?php echo $item['naglowek_na_stronie_glownej_obrazek_tla']['url']; ?>" alt="Slider">
      <div class="overlay-bg"></div>
      <div class="container d-flex align-items-center h-center">
        <div class="wrap-caption">
          <h1 class="caption-heading text-white"><?php echo esc_html($item['naglowek_na_stronie_glownej_tytul']); ?>
          </h1>
          <p class="uk18 text-white"><?php echo esc_html($item['naglowek_na_stronie_glownej_opis']); ?></p>
          <a href="<?php echo esc_url($item['naglowek_na_stronie_glownej_link1']['url']); ?>"
            class="btn btn-primary"><?php echo esc_html($item['naglowek_na_stronie_glownej_link1']['title']); ?></a>
          <a href="<?php echo esc_url($item['naglowek_na_stronie_glownej_link2']['url']); ?>"
            class="btn btn-secondary"><?php echo esc_html($item['naglowek_na_stronie_glownej_link2']['title']); ?></a>
        </div>
      </div>
    </div>

    <?php endforeach; ?>
    <?php endif;?>

  </div>
  <div class="custom-nav owl-nav"></div>
</div>