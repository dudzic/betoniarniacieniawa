<?php get_header(); ?>

<?php
  $contact_map_description = get_field('kontakt_opis_mapy');
  $contact_title = get_field('kontakt_tytul_danych');
  $contact_data = get_field('kontakt_dane');
?>

<?php get_template_part('./parts/section', 'page-header'); ?>

<div class="container">

  <div class="contact-map">
    <?php get_template_part('./parts/section', 'map'); ?>
  </div>

  <div class="row map-description">
    <div class="col-sm-12 col-md-4"></div>
    <div class="col-sm-12 col-md-8 pleft">

      <?php if($contact_map_description) echo esc_html($contact_map_description); ?>

    </div>
  </div>

  <div class="row contact-data">

    <div class="col-sm-12 col-md-4">

      <div class="widget info-detail">
        <h4 class="section-heading text-black no-after mb-3">
          <?php if($contact_title) echo esc_html($contact_title); ?>
        </h4>
        <ul class="list-info">

          <?php if($contact_data): ?>
          <?php foreach($contact_data as $data): ?>

          <li>
            <div class="info-icon text-black">
              <img src="<?php echo esc_url($data['kontakt_dane_ikona']['url']); ?>"
                alt="<?php echo $data['kontakt_dane_ikona']['title']; ?>">
            </div>
            <div class="info-text"><?php echo $data['kontakt_dane_info']; ?></div>
          </li>

          <?php endforeach; ?>
          <?php endif; ?>


        </ul>
      </div>

    </div>

    <div class="col-sm-12 col-md-8 pleft">

      <h4 class="text-black mt-0"><?php _e('Napisz do nas', 'betoniarniacieniawa');?></h4>

      <div class="form-contact">

        <?php echo do_shortcode('[contact-form-7 id="7dd0670" title="Formularz kontaktowy"]'); ?>

      </div>

    </div>

  </div>


</div>


<?php get_footer(); ?>