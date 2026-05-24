<?php
add_action('wp_head', function () { ?>
  <meta name="description" content="Boka keramikkurs i Uppsala hos Jenny Thunberg. Kurser i drejning, handbygge och ringla i liten grupp om max 6 deltagare i Sommarro. Från 1 500 kr." />
  <meta name="keywords" content="keramikkurs Uppsala, drejningskurs Uppsala, keramik kurs, handbygge keramik, boka keramikkurs" />
  <link rel="canonical" href="<?php echo esc_url(get_permalink()); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Keramikkurser Uppsala | Jenny Thunberg" />
  <meta property="og:description" content="Boka keramikkurs i Uppsala. Drejning, handbygge och ringla i liten grupp om max 6 deltagare. Från 1 500 kr." />
  <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>" />
  <meta property="og:image" content="https://jennythunberg.se/wp-content/uploads/2024/01/IMG_7467.jpg" />
  <meta property="og:locale" content="sv_SE" />
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Course",
    "name": "Keramikkurs — måndag kväll",
    "description": "En kurs fördelad på fem måndagskvällar med drejning, handbygge och ringla. Max 6 deltagare.",
    "provider": {
      "@type": "Person",
      "name": "Jenny Thunberg",
      "url": "https://jennythunberg.se"
    },
    "offers": {
      "@type": "Offer",
      "price": "3900",
      "priceCurrency": "SEK"
    },
    "location": {
      "@type": "Place",
      "name": "Jenny Thunbergs verkstad, Sommarro",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Uppsala",
        "addressCountry": "SE"
      }
    }
  }
  </script>
<?php }, 1);

get_header();
?>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <h1><?php echo jt_text('hero_title', 'Keramikkurser'); ?></h1>
    <p><?php echo jt_text('hero_subtitle', 'Lär dig dreja, handbygga och ringla i Sommarro, Uppsala'); ?></p>
  </div>

  <!-- INTRO -->
  <section class="section">
    <div class="container" style="max-width:720px;">
      <p style="color:var(--mid); font-size:1.05rem; font-weight:300; line-height:1.85; text-align:center;">
        <?php echo jt_text('intro', 'Jag håller keramikkurser i min verkstad i Sommarro, Uppsala. Kurserna hålls i små grupper om max 6 deltagare för en personlig och lärorik upplevelse. Välkommen oavsett om du är nybörjare eller har lite erfarenhet av keramik.'); ?>
      </p>
    </div>
  </section>

  <!-- COURSES -->
  <section class="section section--alt">
    <div class="container">
      <div class="courses-grid">

        <!-- Course 1 -->
        <div class="course-card">
          <span class="course-card__tag"><?php echo jt_text('c1_tag', '5 tillfällen'); ?></span>
          <h2><?php echo jt_text('c1_title', 'Keramikkurs — måndag kväll'); ?></h2>
          <p style="color:var(--mid); font-weight:300; font-size:0.95rem; line-height:1.7; margin-bottom:8px;">
            <?php echo jt_text('c1_desc', 'En kurs fördelad på fem måndagskvällar klockan 17–20. De fyra första kvällarna skapar du dina föremål; den sista kvällen glaserar vi tillsammans.'); ?>
          </p>

          <div class="course-card__price"><?php echo jt_text('c1_price', '3 900 kr'); ?></div>
          <p style="color:var(--mid); font-size:0.85rem; margin-top:-12px; margin-bottom:20px;">
            <?php echo jt_text('c1_price_note', 'Lera tillkommer — 100 kr/kg'); ?>
          </p>

          <ul>
            <?php echo jt_list('c1_list', "Max 6 deltagare\nHandbygge (handbygga)\nDrejning — 4 drejar finns i verkstaden\nRingla (ringla)\nGlasyrkvällen ingår\nKräver minst 4 anmälda"); ?>
          </ul>

          <div class="course-card__dates">
            <?php echo jt_text('c1_info', "<strong>Lera:</strong> Vit eller antracitgrå stengodslera<br />\n<strong>Tider:</strong> Måndag kl. 17:00–20:00<br />\n<br />\n<strong>Kommande datum:</strong><br />\n2/2 &nbsp;·&nbsp; 9/2 &nbsp;·&nbsp; 23/2 &nbsp;·&nbsp; 2/3 &nbsp;·&nbsp; 9/3"); ?>
          </div>

          <br />
          <a href="<?php echo home_url('/kontakt/'); ?>" class="btn btn--rust" style="font-size:0.85rem; padding:10px 24px;"><?php echo jt_text('c1_btn', 'Anmälan →'); ?></a>
        </div>

        <!-- Course 2 -->
        <div class="course-card">
          <span class="course-card__tag"><?php echo jt_text('c2_tag', 'Prova på'); ?></span>
          <h2><?php echo jt_text('c2_title', 'Prova på keramik'); ?></h2>
          <p style="color:var(--mid); font-weight:300; font-size:0.95rem; line-height:1.7; margin-bottom:8px;">
            <?php echo jt_text('c2_desc', 'En heldagsworkshop på 5 timmar där du provar på grundtekniker i keramik. Jenny bränner och glaserar dina föremål; du hämtar dem inom 3–4 veckor.'); ?>
          </p>

          <div class="course-card__price"><?php echo jt_text('c2_price', '1 500 kr'); ?></div>
          <p style="color:var(--mid); font-size:0.85rem; margin-top:-12px; margin-bottom:20px;">
            <?php echo jt_text('c2_price_note', 'Inkl. 1,5 kg lera · Extra lera 100 kr/kg'); ?>
          </p>

          <ul>
            <?php echo jt_list('c2_list', "Max 6 deltagare\nTumma (pinching)\nKavla (slab rolling)\nDreja (wheel-throwing)\nJenny glaserar & bränner åt dig\nHämtning inom 3–4 veckor"); ?>
          </ul>

          <div class="course-card__dates">
            <?php echo jt_text('c2_info', "<strong>Lera:</strong> Vit eller antracitgrå stengodslera<br />\n<br />\n<strong>Kommande datum:</strong><br />\nLördag 24/1 <span class=\"fullt\">Fullt</span><br />\nLördag 28/2 <span class=\"fullt\">Fullt</span><br />\nLördag 7/3 <span class=\"fullt\">Fullt</span><br />\nLördag 11/4 <span class=\"fullt\">Fullt</span>"); ?>
          </div>

          <br />
          <a href="<?php echo home_url('/kontakt/'); ?>" class="btn btn--rust" style="font-size:0.85rem; padding:10px 24px;"><?php echo jt_text('c2_btn', 'Intresseanmälan →'); ?></a>
        </div>

      </div>
    </div>
  </section>

  <!-- CONTACT TEASER -->
  <section class="section">
    <div class="container" style="text-align:center;">
      <h2 style="font-size:1.9rem; color:var(--rust); margin-bottom:12px;"><?php echo jt_text('contact_title', 'Frågor om kurserna?'); ?></h2>
      <div class="divider" style="margin:12px auto 24px;"></div>
      <p style="color:var(--mid); max-width:500px; margin:0 auto 32px; font-weight:300;">
        <?php echo jt_text('contact_text', 'Kontakta mig gärna om du har frågor om innehåll, datum eller om du vill boka en privat kurs för en grupp.'); ?>
      </p>
      <a href="<?php echo home_url('/kontakt/'); ?>" class="btn btn--rust"><?php echo jt_text('contact_btn', 'Kontakta Jenny'); ?></a>
    </div>
  </section>

<?php get_footer(); ?>
