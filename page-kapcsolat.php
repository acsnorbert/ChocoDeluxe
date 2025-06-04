<?php
/*
Template Name: Kapcsolat
Template Post Type: page
*/
get_header();
?>

<div class="kapcsolat">
  <div class="content">
    <?php the_content(); ?>
  </div>
</div>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

       

  <style>
    body {
      margin: 0;
      font-family: 'Georgia', serif;
      background: #2a1a14 url('https://example.com/csokolade-hatter.jpg') top center no-repeat;
      background-size: cover;
    }

    .contact-box {
      background-color: #f3d7c7;
      max-width: 100%;
      margin: 10px auto;
      padding: 40px;
      display: flex;
      gap: 40px;
      border-radius: 12px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    .contact-text {
      flex: 1;
      color: #2a1a14;
      font-size: 20px;
    }

    .contact-text h2 {
      font-size: 28px;
      margin-bottom: 10px;
    }

    .contact-text p {
      font-size: 18px;
      margin-bottom: 20px;
    }

    .contact-text img {
      width: 120px;
    }

    .contact-form {
      flex: 1;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 16px;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      font-family: 'Georgia', serif;
    }

    .contact-form textarea {
      height: 120px;
      resize: vertical;
    }

    .contact-form button {
      background-color: #5b2e1e;
      color: white;
      padding: 12px 24px;
      border: none;
      border-radius: 20px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .contact-form button:hover {
      background-color: #3f1e14;
    }

    @media (max-width: 768px) {
      .contact-box {
        flex-direction: column;
        padding: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="contact-box">
    <div class="contact-text">
      <h2>Küldj üzenetet!</h2>
      <p>Ügyfélszolgálatunk<br>24 órán belül válaszol</p>
      <img src="https://pngimg.com/uploads/chocolate/chocolate_PNG27.png" alt="Csokoládé" />
    </div>
    <div class="contact-form">
      <form>
        <input type="text" placeholder="Név" required>
        <input type="email" placeholder="Email" required>
        <textarea placeholder="Üzenet" required></textarea>
        <button type="submit">Küldés</button>
      </form>
    </div>
  </div>
</body>
</html>

    </div>
    <?php get_footer(); ?>
    <main>