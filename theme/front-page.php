<?php
add_action('wp_head', function () { ?>
  <meta name="description" content="Handgjord keramik från Sommarro, Uppsala. Jenny Thunberg skapar stengods i vit och antracitgrå lera — koppar, fat och skålar. Boka keramikkurs eller handla direkt." />
  <meta name="keywords" content="keramik Uppsala, handgjord keramik, keramikkurs Uppsala, stengods, drejning, Jenny Thunberg" />
  <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Jenny Thunberg Keramik | Handgjord stengods från Uppsala" />
  <meta property="og:description" content="Handgjord keramik från Sommarro, Uppsala. Boka keramikkurs eller handla stengods direkt från verkstaden." />
  <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>" />
  <meta property="og:image" content="https://jennythunberg.se/wp-content/uploads/2024/01/IMG_7466.jpg" />
  <meta property="og:locale" content="sv_SE" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Jenny Thunberg Keramik | Handgjord stengods från Uppsala" />
  <meta name="twitter:description" content="Handgjord keramik från Sommarro, Uppsala. Boka keramikkurs eller handla stengods direkt." />
  <meta name="twitter:image" content="https://jennythunberg.se/wp-content/uploads/2024/01/IMG_7466.jpg" />
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Jenny Thunberg Keramik",
    "description": "Handgjord stengods i vit och antracitgrå lera från Sommarro, Uppsala. Keramikkurser i drejning, handbygge och ringla.",
    "url": "https://jennythunberg.se",
    "telephone": "+46733844480",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Uppsala",
      "addressRegion": "Uppsala län",
      "addressCountry": "SE"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 59.8586,
      "longitude": 17.6389
    },
    "priceRange": "kr–krrr",
    "image": "https://jennythunberg.se/wp-content/uploads/2024/01/IMG_7466.jpg",
    "founder": {
      "@type": "Person",
      "name": "Jenny Thunberg",
      "jobTitle": "Keramiker och formgivare"
    },
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Keramik och kurser",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": { "@type": "Product", "name": "Handgjord stengods keramik" }
        },
        {
          "@type": "Offer",
          "itemOffered": { "@type": "Service", "name": "Keramikkurs — måndag kväll", "offers": { "@type": "Offer", "price": "3900", "priceCurrency": "SEK" } }
        },
        {
          "@type": "Offer",
          "itemOffered": { "@type": "Service", "name": "Prova på keramik", "offers": { "@type": "Offer", "price": "1500", "priceCurrency": "SEK" } }
        }
      ]
    },
    "sameAs": []
  }
  </script>
<?php }, 1);

get_header();
?>

  <!-- HERO -->
  <section class="hero">
    <video class="hero__video" autoplay muted loop playsinline
           poster="https://jennythunberg.se/wp-content/uploads/2024/01/test-scaled.jpg">
      <source src="https://jennythunberg.se/wp-content/uploads/2024/01/test.mp4" type="video/mp4" />
    </video>
    <div class="hero__overlay"></div>
    <div class="hero__content">
      <h1 class="hero__title">Handgjord keramik från Uppsala</h1>
      <p class="hero__subtitle">Upptäck handgjord keramik eller boka kurser i drejningsteknik och lär dig dreja</p>
      <div class="hero__buttons">
        <a href="<?php echo home_url('/keramikkurser/'); ?>" class="btn btn--primary">Boka kurs</a>
        <a href="<?php echo home_url('/handla-keramik/'); ?>" class="btn">Handla keramik</a>
      </div>
    </div>
  </section>

  <!-- ABOUT STRIP -->
  <div class="about-strip">
    <div class="about-strip__text">
      <div class="about-strip__text-inner">
        <h2>Jenny Thunberg keramik i Sommarro Uppsala</h2>
        <div class="divider"></div>
        <p>Jag är keramiker och formgivare som arbetar med småskalig tillverkning av handgjord keramik.</p>
        <p>Jag arbetar med stengodslera som antingen gjuts i egengjorda gipsformar eller drejas för hand. Jag vill att du ska uppleva att det varit en hand med hela vägen i processen. Ränderna i koppen som kan anas från drejningen, hänkeln som dragits av en hand för en hand. Små spår av handens arbete med omsorg i alla detaljer.</p>
        <p>Min produktion består främst av bruksgods i små serier där form och funktion ligger mig varmt om hjärtat. I mitt formspråk strävar jag efter enkelhet och rena linjer.</p>
        <br />
        <a href="<?php echo home_url('/handla-keramik/'); ?>" class="btn btn--rust">Se keramiken</a>
      </div>
    </div>
    <div class="about-strip__img">
      <img src="https://jennythunberg.se/wp-content/uploads/2024/01/IMG_7466.jpg"
           alt="Jenny Thunbergs keramik" />
    </div>
  </div>

  <!-- GALLERY -->
  <section class="section section--alt">
    <div class="container">
      <h2 style="font-size:2rem; color:var(--rust); text-align:center; margin-bottom:8px;">Keramik</h2>
      <p style="text-align:center; color:var(--mid); margin-bottom:40px; font-weight:300;">Handgjord stengods i små serier</p>
    </div>
    <div class="gallery">
      <div class="gallery__item">
        <img src="https://jennythunberg.se/wp-content/uploads/2024/01/FC77B80D-1C36-4A71-A4CD-E3618D1FFF61.jpg"
             alt="Keramik av Jenny Thunberg" />
      </div>
      <div class="gallery__item">
        <img src="https://jennythunberg.se/wp-content/uploads/2024/01/keramik2.jpg"
             alt="Keramik av Jenny Thunberg" />
      </div>
      <div class="gallery__item">
        <img src="https://jennythunberg.se/wp-content/uploads/2024/01/keramik3.jpg"
             alt="Keramik av Jenny Thunberg" />
      </div>
    </div>
  </section>

  <!-- QUOTE BANNER -->
  <section class="quote-banner"
           style="background-image: url('https://jennythunberg.se/wp-content/uploads/2024/01/test-scaled.jpg');">
    <div class="quote-banner__inner">
      <blockquote>
        "Enkelhet och rena linjer — form och funktion i harmoni"
      </blockquote>
    </div>
  </section>

  <!-- KURSER TEASER -->
  <section class="section">
    <div class="container" style="text-align:center;">
      <h2 style="font-size:2rem; color:var(--rust); margin-bottom:12px;">Keramikkurser</h2>
      <div class="divider" style="margin: 12px auto 28px;"></div>
      <p style="color:var(--mid); max-width:600px; margin:0 auto 36px; font-weight:300;">
        Lär dig grunderna i keramik — drejning, handbygge och ringla — i en liten grupp om max 6 personer i min verkstad i Sommarro.
      </p>
      <a href="<?php echo home_url('/keramikkurser/'); ?>" class="btn btn--rust">Se kurser &amp; anmälan</a>
    </div>
  </section>

<?php get_footer(); ?>
