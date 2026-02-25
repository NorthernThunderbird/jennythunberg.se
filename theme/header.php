<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Jenny Thunberg" />
  <link rel="icon" href="https://jennythunberg.se/wp-content/uploads/2024/01/cropped-favicon.png" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php if (is_front_page()): ?>
  <!-- PAGE LOADER -->
  <div id="page-loader" class="page-loader" aria-hidden="true">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-icon.png" alt="" class="page-loader__logo" />
  </div>
<?php endif; ?>

  <!-- NAV -->
  <nav class="nav">
    <div class="nav__inner">
      <a class="nav__logo" href="<?php echo home_url('/'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/logotyp.png"
             alt="Jenny Thunberg Keramik"
             onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" />
        <span class="nav__logo-text" style="display:none;">Jenny Thunberg</span>
      </a>
      <ul class="nav__links" id="nav-links">
        <li><a href="<?php echo home_url('/'); ?>"<?php echo is_front_page() ? ' class="active"' : ''; ?>>Hem</a></li>
        <li><a href="<?php echo home_url('/handla-keramik/'); ?>"<?php echo is_page('handla-keramik') ? ' class="active"' : ''; ?>>Handla keramik</a></li>
        <li><a href="<?php echo home_url('/keramikkurser/'); ?>"<?php echo is_page('keramikkurser') ? ' class="active"' : ''; ?>>Keramikkurser</a></li>
        <li class="nav__dropdown">
          <button class="nav__dropdown-toggle<?php echo is_page(['om-mig', 'kontakt', 'lera-och-glasyrer', 'inspiration']) ? ' active' : ''; ?>" aria-expanded="false">Om mig / Kontakt <span class="nav__dropdown-arrow">▾</span></button>
          <ul class="nav__dropdown-menu">
            <li><a href="<?php echo home_url('/om-mig/'); ?>"<?php echo is_page('om-mig') ? ' class="active"' : ''; ?>>Om mig</a></li>
            <li><a href="<?php echo home_url('/kontakt/'); ?>"<?php echo is_page('kontakt') ? ' class="active"' : ''; ?>>Kontakt</a></li>
            <li><a href="<?php echo home_url('/lera-och-glasyrer/'); ?>"<?php echo is_page('lera-och-glasyrer') ? ' class="active"' : ''; ?>>Lera &amp; glasyrer</a></li>
            <li><a href="<?php echo home_url('/inspiration/'); ?>"<?php echo is_page('inspiration') ? ' class="active"' : ''; ?>>Inspiration</a></li>
          </ul>
        </li>
      </ul>
      <button class="nav__toggle" id="nav-toggle" aria-label="Meny">
        <span></span><span></span><span></span>
      </button>
    </div>
  </nav>
