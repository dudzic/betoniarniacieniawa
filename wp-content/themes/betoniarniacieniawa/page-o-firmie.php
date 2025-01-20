<?php get_header(); ?>

<?php get_template_part('./parts/section', 'page-header'); ?>
<?php get_template_part('./parts/section', 'about-us'); ?>

<?php
  $about_us_management_title = get_field('o_firmie_zarzad_tytul');
  $about_us_management = get_field('o_firmie_zarzad_firmy');
?>

<section class="about-us-management">

  <div class="section">
    <div class="content-wrap pb-0">
      <div class="container about-us-management-container">

        <div class="row">
          <div class="col-sm-12 col-md-12">
            <h4 class="text-black no-after mb-5">
              <?php echo esc_html($about_us_management_title); ?>
            </h4>
          </div>
        </div>

        <div class="row">

          <?php if($about_us_management): ?>
          <?php foreach($about_us_management as $person): ?>

          <div class="col-12 col-sm-6 col-md-4">

            <div class="rs-team-1 mb-5">
              <div class="body">
                <div class="title mb-3"><?php echo esc_html($person['o_firmie_zarzad_osoba']); ?></div>
                <div>Tel: <?php echo esc_html($person['o_firmie_zarzad_telefon']); ?></div>
                <div>E-mail: <a style="text-decoration: underline;"
                    href="mailto:<?php echo esc_html($person['o_firmie_zarzad_e-mail']); ?>"><?php echo esc_html($person['o_firmie_zarzad_e-mail']); ?></a>
                </div>
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


<?php get_footer(); ?>