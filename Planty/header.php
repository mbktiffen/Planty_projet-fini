<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne&display=swap" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css2?family=Syne:wght@400;800&display=swap');
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
<nav class="menu-container">
  <!-- burger menu -->
  <input type="checkbox" aria-label="Toggle menu" />
  <span></span>
  <span></span>
  <span></span>

  <!-- logo -->
  <a href="http://localhost:10010/" class="menu-logo">
    <img src="http://localhost:10010/wp-content/themes/Planty/img/Logo.png" alt="My Awesome Website"/>
  </a>

  <!-- menu items -->
  <div class="menu">
    <ul>
    </ul>
    <ul>
      <li class="menu-item-20">
        <a href="http://localhost:10010/nous-rencontrer/">
          Nous rencontrer
        </a>
      </li>
      <li class="menu-item-22">
        <a href="#login">
        <?php if (is_user_logged_in()): ?><a target="_blank" href="<?php echo admin_url(); ?>">Admin</a><?php endif ;?>
        </a>
      </li>
      <li class="menu-item-27">
        <a href="http://localhost:10010/commander/">
          Commander
        </a>
      </li>
    </ul>
  </div>
</nav>
</header>
