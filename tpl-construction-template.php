<?php
/*
 * Template Name: Construction Template
 */

$image_data = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full' );
$image_url = $image_data[0]; /* Gets the URL of the featured image and is passed in as the background below */

get_header();
?>


<div id="primary" class="content-area">

  <?php if ($how_it_works = get_field('how_it_works')): ?>

    <section id="how-it-works">

      <div class="container">

        <div class="row">

          <div class="col">

            <div class="hiw-write-up">

              <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#hiw-text" aria-expanded="false" aria-controls="hiw-text">
                Click here for more information
              </button>

              <?php while ( have_posts() ) : the_post(); ?>

                <div class="collapse" id="hiw-text">
                  <?php the_content(); ?>

                  <?php if ($technologies = get_field('technologies')): ?>

                    <div class="tech-heading">
                      <h2>Technologies Used:</h2>
                    </div>

                      <?php foreach ($technologies as $t): ?>

                        <div class="row justify-content-center">

                          <?php if($t['html']): ?>
                            <div class="tech-item">
                              <span class="fab fa-html5"></span>
                              <p>HTML</p>
                            </div>
                          <?php endif; ?>

                          <?php if($t['css']): ?>
                            <div class="tech-item">
                              <span class="fab fa-css3-alt"></span>
                              <p>CSS</p>
                            </div>
                          <?php endif; ?>

                          <?php if($t['javascript']): ?>
                            <div class="tech-item">
                              <span class="fab fa-js-square"></span>
                              <p>JavaScript jQuery</p>
                            </div>
                          <?php endif; ?>

                          <?php if($t['php']): ?>
                            <div class="tech-item">
                              <span class="fab fa-php"></span>
                              <p>PHP</p>
                            </div>
                          <?php endif; ?>

                        </div>

                      <?php endforeach; ?>

                  <?php endif; ?>

                </div>

              <?php endwhile; wp_reset_query(); ?>

            </div>

          </div>

        </div>

      </div>

    </section>

  <?php endif; ?>

  <main id="main" class="site-main" style="scroll-behavior: smooth;height: 1000px; margin: 2em;border: solid 4px #fff;border-radius: 2em;overflow: scroll; box-shadow: 0px 0px 20px 5px #0f0f0f;">

    <section id="construction-template-hm-hero" style="background:url('<?= $image_url ?>');">

      <div class="container">

        <div class="row align-content-center">

          <div class="hero-content">

            <h1 class="hero-heading">JPS Groundworks</h1>
            <p class="hero-sub-text">Kent's <strong>leader</strong> in all things groundwork</p>

            <a href="#construction-template-our-work"><div class="btn btn-learn">Learn More</div></a>
            <a href="#construction-template-contact"><div class="btn btn-contact">Get in Touch</div></a>

          </div>

        </div>

      </div>

    </section>

    <section id="construction-template-scrolling-numbers">

      <script>

        setTimeout(function(){
          odometer.innerHTML = '34';
          odometer1.innerHTML = '9267';
          odometer2.innerHTML = '33';
          odometer3.innerHTML = '0.7';
        }, 1000);

      </script>

      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">

            <div class="work-numbers">

              <span id="odometer" class="odometer"></span>

              <p>Projects Completed</p>

            </div>

          </div>

          <div class="col-lg-3 col-md-6">

            <div class="work-numbers">

              <span id="odometer1" class="odometer"></span>

              <p>Holes Dug</p>

            </div>

          </div>

          <div class="col-lg-3 col-md-6">

            <div class="work-numbers">

              <span id="odometer2" class="odometer"></span>

              <p>Happy Customers</p>

            </div>

          </div>

          <div class="col-lg-3 col-md-6">

            <div class="work-numbers">

              <span id="odometer3" class="odometer"></span>

              <p>Death Stars Repaired</p>

            </div>

          </div>

        </div>

      </div>

    </section>


    <section id="construction-template-our-work" style="background: url('<?= the_field('bg_texture') ?>')">

      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6">

            <div class="our-work-card">

              <span class="fal fa-digging"></span>

              <div class="our-work-card-content">

                <h2 class="our-work-card-text">Digging</h2>
                <p>Some text to go into more details about this point</p>

              </div>

            </div>

          </div>

          <div class="col-lg-4 col-md-6">

            <div class="our-work-card">

              <span class="fal fa-hard-hat"></span>

              <div class="our-work-card-content">

                <h2 class="our-work-card-text">Site Work</h2>
                <p>Some text to go into more details about this point</p>

              </div>

            </div>

          </div>

          <div class="col-lg-4 col-md-12">

            <div class="our-work-card">

              <span class="fal fa-space-station-moon-alt"></span>

              <div class="our-work-card-content">

                <h2 class="our-work-card-text">Death Star Repair</h2>
                <p>Some text to go into more details about this point</p>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

    <section id="construction-template-about-us">

      <h2>About Us</h2>

      <div class="container">

        <div class="row">

          <div class="col-md-6">

            <img src="<?= the_field('about_img') ?>" style="border-radius: <?=rand(20,80) ?>% <?=rand(30,60) ?>% <?=rand(30,60) ?>% <?=rand(5,95) ?>% / <?=rand(5,95) ?>% <?=rand(30,60) ?>% <?=rand(30,60) ?>% <?=rand(5,95) ?>%;">

          </div>

          <div class="col-md-6">

            <div class="about-us-text">

              <p><?= the_field('about_text') ?></p>

            </div>

          </div>

        </div>

      </div>

    </section>

    <?php if($gallery = get_field('gallery')): ?>

      <section id="construction-template-portfolio">

            <div class="slider">

              <?php foreach ($gallery as $image): ?>

                <div class="slider-img">

                  <img src="<?= $image['gallery-image']; ?>" alt="">

                </div>

              <?php endforeach; ?>

            </div>

      </section>

    <?php endif; ?>

    <section id="construction-template-contact">

      <h2>Get in Touch</h2>

      <div class="container">

        <div class="row">

          <div class="col-md-6">

            <div class="contact-form">

              <div class="row">

                <div class="col-md-6"><input type="text" placeholder="Name" name="name"></div>
                <div class="col-md-6"><input type="text" placeholder="Email" name="email"></div>
                <div class="col-md-12"><textarea placeholder="Message" name="message"></textarea></div>
                <button class="contact-submit">Send Message</button>

              </div>

            </div>

          </div>

          <div class="col-md-6">

            <div class="contact-info">

              <div class="contact-phone"><span class="fal fa-phone"></span>01827 901823</div>

              <div class="contact-address"><span class="fal fa-home"></span>JPS, Unit 1 Industrial Estate, Indust, Rial IN12 3DU</div>

            </div>

          </div>

        </div>

      </div>

    </section>

  </main><!-- #main -->

</div><!-- #primary -->

<?php
get_footer();
