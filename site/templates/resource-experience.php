<?php snippet('header-ricerca') ?>

  <main>

    <a href="<?php echo page('ricerca/risorse')->url() ?>" class="link link-back"><span>Torna indietro</span></a>

    <h1 class="title-article"><?php echo ucfirst( page()->title()->html() ) ?></h1>

    <div class="resource-experience">


    <?php if( page()->movie()->isNotEmpty() ): ?>

      <h2 class="visuallyhidden">Video dell'evento</h2>

        <?php if( page()->alt_video()->isNotEmpty()) : ?>

          <div class="video" aria-label="<?php echo page()->alt_video() ?>">
        
            <iframe src="https://player.vimeo.com/video/<?php echo page()->movie() ?>" allowFullScreen></iframe>
    
          </div>

        <?php else: ?>

          <div class="video" aria-label="<?php echo "Video dell'evento " . page()->title()->html() ?>">
  
            <iframe src="https://player.vimeo.com/video/<?php echo page()->movie() ?>" allowFullScreen></iframe>
      
          </div>

        <?php endif ?>
        

    <?php else: ?>

      <?php if( page()->ext_link()->isNotEmpty()): ?>

        <a href="<?php echo page()->ext_link()->url() ?>">
        <img src="<?php echo page()->image(page()->main_image())->url() ?>" alt="<?php echo page()->image(page()->main_image())->alt()->html() ?>">
        </a>

      <?php else: ?>

        <img src="<?php echo page()->image(page()->main_image())->url() ?>" alt="<?php echo page()->image(page()->main_image())->alt()->html() ?>">

      <?php endif ?>

    <?php endif ?>

    </div>

    <div class="resource-experience-text">
      <div class="border-top">
        <div class="aside">
          <h3 id="partners">In collaborazione con</h3>
          <p><?php echo page()->partner()->html() ?></p>
          <h3 id="location">Data e luogo</h3>
          <p><?php echo page()->date('d.m.Y') ?>, <?php echo page()->location()->html() ?></p>

          <?php if(page()->ext_link()->isNotEmpty()): ?>
  
            <a href="<?php echo page()->ext_link()->url() ?>" id="ext_resource" title="<?php echo page()->title() ?>" class="button"><?php echo page()->ext_link_desc()->kt() ?></a>

          <?php endif ?>

        </div>
        <div id="article">
          <h3 class="subtitle">Descrizione dell'evento</h3>
        <?php echo page()->long()->kt() ?>
        </div>
      </div>
    </div>

    <?php if(page()->gallery()->isNotEmpty()): ?>

    <?php echo js('assets/js/lightbox.js'); ?>

    <section class="resource-experience-gallery">
      <h2>Fotografie dell'evento</h2>

      
      <ul>
        <?php foreach(page()->gallery()->yaml() as $image): ?>
        <li>
          <figure>

          <?php 
            // retrieve the alt text from the image, if not present, use a generic one
            $img = $page->image($image);
            if($img->alt()->isNotEmpty()) {
              $alt_img = $img->alt()->html();
            }
            else {
              $alt_img = "Fotografia dell'evento " . page()->title()->html();
            }
          ?>

            <a href="<?php  echo $img? $img->url() : '' ?>" data-lightbox="prova1" data-title="<?php echo $alt_img ?>">
            <img src="<?php echo $img? $img->url() : '' ?>" alt="<?php echo $alt_img ?>" class="<?php e($img->dimensions()->portrait(), 'portrait', 'landscape'); ?>" />
        </a>
          </figure>
        </li>
        <?php endforeach ?>
        </ul>
      

    </section>

  <?php endif ?>

  </main>

<?php snippet('footer-ricerca') ?>

