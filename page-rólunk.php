<?php
/*
Template Name: Rólunk
Template Post Type: page
*/
get_header();
?>
<main class="homepage">

  <section class="hero" style="text-align: center; padding: 50px;">
    
    <h1>Mit lehet tudni rólunk?</h1>
    
  </section>

  <section class="gyar">
  <img src="<?php echo get_template_directory_uri(); ?>/Képek/2.jpg" alt="Gyár képe" style="max-width: 400px;">
  <div class="rightgyar">
    <h2>legkiemelkedőbb csokoládé gyárunk</h2>
  <p id="szoveg">"Where life meets luxury, there is chocolate."</p>
  <a href="#" class="button" style="padding: 10px 20px; display: inline-block; border: 1px solid #000; margin-top: 10px;">Továbbiak</a>
  </div>

  </section>
  <section class="random3kep" style="display: flex; justify-content: center; gap: 20px; padding: 30px 0;">
    <img src="<?php echo get_template_directory_uri(); ?>/Képek/img-gallery-1.jpg" alt="Csoki 1" >
    <img src="<?php echo get_template_directory_uri(); ?>/Képek/img-gallery-2.jpg" alt="Csoki 2" >
    <img src="<?php echo get_template_directory_uri(); ?>/Képek/img-gallery-3.jpg" alt="Csoki 3">
  </section>


  <section class="reviews" style="text-align: center; padding: 40px;">
    <h2>Csokoládé vélemények</h2>
    <p style="font-size: 24px; color: gold;">★★★★★</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <div>
      <button>&lt;</button>
      <button>&gt;</button>
    </div>
  </section>


  <section class="developers" style="padding: 40px; text-align: center;">
    <h2>Fejlesztők</h2>
    <div style="display: flex; justify-content: center; gap: 40px; margin-top: 20px;">
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/Képek/Névtelen.png" alt="Ács Benjámin" style="width: 200px; height: 350px; border-radius: 20%;">
        <p><strong>Ács Benjámin</strong></p>
        <p>fn</p>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/Képek/Image.jpg" alt="Felencsity Miklós" style="width: 200px;height: 350px; border-radius: 20%;">
        <p><strong>Jelencsity Miklós</strong></p>
        <p>Rep warrior fn</p>
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/Képek/Névtelen1.png" alt="Ács Norbert" style="width: 200px;height: 350px; border-radius: 20%;">
        <p><strong>Ács Norbert</strong></p>
        <p>fn</p>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
