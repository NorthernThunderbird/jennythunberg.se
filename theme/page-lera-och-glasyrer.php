<?php
add_action('wp_head', function () { ?>
  <meta name="description" content="Lär dig om leran och glasyrerna bakom Jenny Thunbergs keramik — stengods bränt till 1260°, diskmaskinssäkert och gjort med omsorg om varje detalj." />
  <link rel="canonical" href="<?php echo esc_url(get_permalink()); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Lera och glasyrer | Jenny Thunberg Keramik" />
  <meta property="og:description" content="Stengods bränt till 1260° — diskmaskinssäkert och gjort med omsorg om varje detalj." />
  <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>" />
  <meta property="og:image" content="https://jennythunberg.se/wp-content/uploads/2024/01/IMG_5429.jpg" />
  <meta property="og:locale" content="sv_SE" />
<?php }, 1);

get_header();
?>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <h1>Lera och glasyrer</h1>
    <p>Material och teknik bakom varje föremål</p>
  </div>

  <!-- MAIN CONTENT -->
  <section class="section">
    <div class="container">
      <div class="content-block">
        <div class="content-block__text">
          <h2>Stengods bränt till 1260°</h2>
          <div class="divider"></div>
          <p>
            Leran jag använder bränns i hög temperatur för att tåla daglig
            användning. Jag bränner min keramik till <strong>1260 grader</strong>.
            Vid den temperaturen säger man att leran sintrar — med det menas att
            keramiken blir vattentät och tålig.
          </p>
          <p>
            Min keramik tål både <strong>mikrovågsugn</strong> och att
            <strong>diskas i maskin</strong>.
          </p>
          <p>
            Lera är ett naturmaterial och ibland kan det finnas små ojämnheter
            eller prickar i den färdiga produkten. Det är inget jag ser som
            felaktigheter utan ett tecken på ett småskaligt hantverk.
          </p>
          <p>
            Jag tycker om att utforska nya idéer och skapa nytt. Därför förändras
            mitt sortiment över tid men givet att jag har leran och glasyren kvar
            till något som du önskar komplettera så försöker jag ordna det.
          </p>
        </div>
        <div class="content-block__img">
          <img src="https://jennythunberg.se/wp-content/uploads/2024/01/IMG_5429.jpg"
               alt="Lera och glasyrer" />
        </div>
      </div>
    </div>
  </section>

  <!-- FACTS SECTION -->
  <section class="section section--alt">
    <div class="container">
      <h2 style="font-size:1.9rem; color:var(--rust); text-align:center; margin-bottom:8px;">Material i korthet</h2>
      <div class="divider" style="margin:12px auto 48px;"></div>

      <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap:32px;">

        <div class="course-card">
          <span class="course-card__tag">Leran</span>
          <h2 style="font-size:1.2rem;">Vit stengodslera</h2>
          <p style="color:var(--mid); font-weight:300; font-size:0.9rem; line-height:1.7;">
            Ger ett ljust, rent uttryck. Bränns till 1260° för full sintring.
          </p>
        </div>

        <div class="course-card">
          <span class="course-card__tag">Leran</span>
          <h2 style="font-size:1.2rem;">Antracitgrå stengodslera</h2>
          <p style="color:var(--mid); font-weight:300; font-size:0.9rem; line-height:1.7;">
            Mörkare, mer dramatiskt uttryck. Samma hållbarhet och tålighet.
          </p>
        </div>

        <div class="course-card">
          <span class="course-card__tag">Egenskaper</span>
          <h2 style="font-size:1.2rem;">Diskmaskinssäker</h2>
          <p style="color:var(--mid); font-weight:300; font-size:0.9rem; line-height:1.7;">
            Tål maskinsdisk och mikrovågsugn tack vare den höga bränningstemperaturen.
          </p>
        </div>

        <div class="course-card">
          <span class="course-card__tag">Karaktär</span>
          <h2 style="font-size:1.2rem;">Naturliga variationer</h2>
          <p style="color:var(--mid); font-weight:300; font-size:0.9rem; line-height:1.7;">
            Små ojämnheter och prickar är tecken på äkta hantverk, inte defekter.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- QUOTE BANNER -->
  <section class="quote-banner"
           style="background-image: url('https://jennythunberg.se/wp-content/uploads/2024/01/test-scaled.jpg');">
    <div class="quote-banner__inner">
      <blockquote>
        "Ränderna i koppen som kan anas från drejningen, hänkeln som dragits av en hand för en hand — små spår av handens arbete med omsorg i alla detaljer."
      </blockquote>
    </div>
  </section>

<?php get_footer(); ?>
