<?php
  $about_us_banner_title = get_field('o_firmie_baner_tytul');
  $about_us_banner_description = get_field('o_firmie_baner_opis');
  $about_us_banner_numbers = get_field('o_firmie_baner_liczby');
?>

<section class="about-us-banner">

  <div class="section bg-gray-light">
    <div class="content-wrap pb-10">
      <div class="container">

        <div class="row">

          <div class="col-sm-12 col-md-12">
            <h3 class="text-black pb-3">

              <?php if($about_us_banner_title) echo $about_us_banner_title; ?>

            </h3>
            <p>

              <?php if($about_us_banner_description) echo $about_us_banner_description; ?>

            </p>

          </div>

        </div>

        <div class="row">

          <?php if($about_us_banner_numbers): ?>
          <?php foreach($about_us_banner_numbers as $number): ?>

          <div class="col-sm-12 col-md-6 col-lg-4">

            <div class="d-flex align-items-center pt-4">
              <h2 class="text-primary m-0 p-0"><?php echo esc_html($number['o_firmie_baner_liczby_liczba']); ?></h2>
              <p class="m-0 p-0 pl-3"><?php echo $number['o_firmie_baner_liczby_opis_liczby']; ?></p>
            </div>

          </div>

          <?php endforeach; ?>
          <?php endif;?>

        </div>

      </div>
    </div>
  </div>


</section>