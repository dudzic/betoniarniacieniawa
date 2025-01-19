<?php
  $about_us_subtitle = get_field('o_nas_podtytul', 'option');
  $about_us_title = get_field('o_nas_tytul', 'option');
  $about_us_content = get_field('o_nas_tresc', 'option');
  $about_us_btn = get_field('o_nas_link', 'option');
  $about_us_image = get_field('o_nas_obrazek', 'option');
?>

<section>
  <div class="section">
    <div class="content-wrap">
      <div class="container">

        <div class="row">
          <div class="col-sm-4 col-md-4">
            <h4 class="section-heading text-black no-after mb-3">
              <span class="text-primary">

                <?php if($about_us_subtitle) echo esc_html($about_us_subtitle); ?>

              </span>
            </h4>
            <h3 class="text-black">

              <?php if($about_us_title) echo esc_html($about_us_title); ?>

            </h3>
            <p>

              <?php if($about_us_content) echo esc_html($about_us_content); ?>

            </p>

            <a href="<?php if($about_us_btn) echo esc_url($about_us_btn['url']); ?>" class="btn btn-secondary">
              <?php if($about_us_btn) echo esc_html($about_us_btn['title']); ?>
              <img class="btn-icon" src="<?php echo get_theme_file_uri('/images/icon-arrow.png'); ?>" alt="icon-arrow">
            </a>

            <div class="spacer-30"></div>
          </div>
          <div class="col-sm-8 col-md-8 pleft">
            <div class="img-subsco">
              <img src="<?php if($about_us_image) echo esc_url($about_us_image['url']); ?>"
                alt="<?php if($about_us_image) echo $about_us_image['name']; ?>" class="img-fluid">
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>