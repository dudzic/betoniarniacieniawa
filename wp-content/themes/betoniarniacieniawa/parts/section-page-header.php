<?php
  $banner_image = get_field('baner_obrazek_tla');
?>

<div class="section banner-page" data-background="<?php if($banner_image) echo esc_url($banner_image['url']); ?>">
  <div class="content-wrap pos-relative">
    <div class="container">
      <div class="col-12 col-md-12">
        <div class="bd-highlight mb-2">
          <div class="title-page text-center"><?php echo get_the_title(); ?></div>
        </div>
        <!-- <nav aria-label="breadcrumb">
          <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
          </ol>
        </nav> -->
      </div>
    </div>

  </div>
</div>