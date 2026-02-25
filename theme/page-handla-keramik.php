<?php
add_action('wp_head', function () { ?>
  <meta name="description" content="Köp handgjord keramik av Jenny Thunberg. Hittas på Öster om ån i Uppsala och Hantverket i Öregrund. Beställ direkt från verkstaden i Sommarro." />
  <link rel="canonical" href="<?php echo esc_url(get_permalink()); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Handla keramik | Jenny Thunberg Uppsala" />
  <meta property="og:description" content="Köp handgjord keramik av Jenny Thunberg. Hittas på Öster om ån i Uppsala och Hantverket i Öregrund." />
  <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>" />
  <meta property="og:image" content="https://jennythunberg.se/wp-content/uploads/2024/01/IMG_0907.jpg" />
  <meta property="og:locale" content="sv_SE" />
<?php }, 1);

get_header();
?>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <h1>Handla keramik</h1>
    <p>Handgjord stengods — bruksgods med omsorg om varje detalj</p>
  </div>

  <!-- CONTENT -->
  <section class="section">
    <div class="container">
      <div class="content-block">
        <div class="content-block__text">
          <h2>Var hittar du min keramik?</h2>
          <div class="divider"></div>
          <p>
            I dagsläget säljer jag min keramik på hantverkskooperativen
            <strong>Öster om ån</strong> i Uppsala och <strong>Hantverket</strong> i Öregrund.
          </p>
          <p>
            Jag har ett litet lager av keramik i min verkstad och tar även
            beställningar på förfrågan. Kontakta mig gärna om du letar efter
            något specifikt eller vill göra en specialbeställning.
          </p>
          <p>
            Min produktion består av bruksgods i små serier — koppar, fat,
            skålar och kannor i vit och antracitgrå stengodslera.
          </p>
          <br />
          <a href="<?php echo home_url('/kontakt/'); ?>" class="btn btn--rust">Kontakta mig</a>
        </div>
        <div class="content-block__img">
          <img src="https://jennythunberg.se/wp-content/uploads/2024/01/IMG_0907.jpg"
               alt="Keramik av Jenny Thunberg" />
        </div>
      </div>
    </div>
  </section>

  <!-- WHERE TO BUY CARDS -->
  <section class="section section--alt">
    <div class="container">
      <h2 style="font-size:1.9rem; color:var(--rust); text-align:center; margin-bottom:8px;">Var du kan hitta keramiken</h2>
      <div class="divider" style="margin: 12px auto 48px;"></div>

      <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:32px;">

        <div class="course-card">
          <span class="course-card__tag">Uppsala</span>
          <h2>Öster om ån</h2>
          <p style="color:var(--mid); font-weight:300; font-size:0.95rem; line-height:1.7;">
            Hantverkskooperativ i centrala Uppsala med ett brett utbud av
            handgjort hantverk från svenska konstnärer och hantverkare.
          </p>
        </div>

        <div class="course-card">
          <span class="course-card__tag">Öregrund</span>
          <h2>Hantverket</h2>
          <p style="color:var(--mid); font-weight:300; font-size:0.95rem; line-height:1.7;">
            Hantverkskooperativ i Öregrund vid Upplandskusten. En charmig
            butik med lokalt skapade hantverk och konsthantverk.
          </p>
        </div>

        <div class="course-card">
          <span class="course-card__tag">Beställning</span>
          <h2>Direkt från verkstaden</h2>
          <p style="color:var(--mid); font-weight:300; font-size:0.95rem; line-height:1.7;">
            Kontakta mig direkt för att beställa specifika föremål eller
            diskutera specialbeställningar. Jag har ett litet lager i
            verkstaden i Sommarro, Uppsala.
          </p>
          <br />
          <a href="<?php echo home_url('/kontakt/'); ?>" class="btn btn--rust" style="font-size:0.85rem; padding:10px 24px;">Kontakta mig →</a>
        </div>

      </div>
    </div>
  </section>

  <!-- GALLERY -->
  <div class="gallery">
    <div class="gallery__item">
      <img src="https://jennythunberg.se/wp-content/uploads/2024/01/FC77B80D-1C36-4A71-A4CD-E3618D1FFF61.jpg"
           alt="Keramik" />
    </div>
    <div class="gallery__item">
      <img src="https://jennythunberg.se/wp-content/uploads/2024/01/keramik2.jpg"
           alt="Keramik" />
    </div>
    <div class="gallery__item">
      <img src="https://jennythunberg.se/wp-content/uploads/2024/01/keramik3.jpg"
           alt="Keramik" />
    </div>
  </div>

<?php get_footer(); ?>
