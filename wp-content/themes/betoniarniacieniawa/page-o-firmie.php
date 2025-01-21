<?php get_header(); ?>

<?php get_template_part('./parts/section', 'page-header'); ?>
<?php get_template_part('./parts/section', 'about-us'); ?>
<?php get_template_part('./parts/section', 'about-us-banner'); ?>


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



  <?php
    $about_us_partners_title = get_field('o_firmie_partnerzy_tytul');
    $about_us_partners_list = get_field('o_firmie_partnerzy_lista');
  ?>


  <div class="section about-us-partners mb-5">
    <div class="container about-us-partners-container">

      <div class="row">

        <div class="col-sm-12 col-md-12">
          <h4 class="text-black no-after mb-5">
            <?php if($about_us_partners_title) echo esc_html($about_us_partners_title); ?></h4>
        </div>

      </div>

      <?php if(have_rows('o_firmie_partnerzy_lista')): ?>

      <?php while(have_rows('o_firmie_partnerzy_lista')) : 
        the_row();
        $label = get_sub_field('o_firmie_partnerzy_lista_nazwa');
        $partners = get_sub_field('o_firmie_partnerzy_lista_nazwy_partnerow');
      ?>

      <div class="mb-4">

        <div class="about-us-partners-wrapper pb-2">
          <h6 class="about-us-partners-label text-black"><?php echo esc_html($label); ?></h6>
          <div class="about-us-partners-line"></div>
        </div>

        <div class="row mt-5">

          <?php foreach($partners as $partner): ?>


          <div class="col-sm-12 col-md-3 text-center">
            <a href="
            <?php 
              if($partner['o_firmie_partnerzy_lista_nazwy_partnerow_link']) echo esc_url($partner['o_firmie_partnerzy_lista_nazwy_partnerow_link']['url']);
              else echo '';
            ?>
             ">
              <img src="<?php echo esc_url($partner['o_firmie_partnerzy_lista_nazwy_partnerow_logo']['url']); ?>"
                alt="<?php echo $partner['o_firmie_partnerzy_lista_nazwy_partnerow_logo']['title']; ?>">
              <div class="pt-2"><?php echo esc_html($partner['o_firmie_partnerzy_lista_nazwy_partnerow_nazwa']); ?>
              </div>
            </a>
          </div>




          <?php endforeach; ?>

        </div>

      </div>

      <?php endwhile; ?>

      <?php endif; ?>

    </div>
  </div>


</section>






<?php get_footer(); ?>