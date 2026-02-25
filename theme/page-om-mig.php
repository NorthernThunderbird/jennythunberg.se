<?php
add_action('wp_head', function () { ?>
  <meta name="description" content="Jenny Thunberg är keramiker och formgivare baserad i Sommarro, Uppsala. Lär känna Jenny och följ hennes keramikvärld på Instagram." />
  <link rel="canonical" href="<?php echo esc_url(get_permalink()); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Om mig | Jenny Thunberg Keramik" />
  <meta property="og:description" content="Keramiker och formgivare baserad i Sommarro, Uppsala. Handgjord stengods med omsorg om varje detalj." />
  <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>" />
  <meta property="og:image" content="https://jennythunberg.se/wp-content/uploads/2024/01/profil-jenny-thunberg2.jpg" />
  <meta property="og:locale" content="sv_SE" />
<?php }, 1);

get_header();
?>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <h1>Om mig</h1>
    <p>Keramiker och formgivare från Uppsala</p>
  </div>

  <!-- PROFILE SECTION -->
  <section class="section">
    <div class="container">
      <div class="content-block">
        <div class="content-block__text">
          <h2>Jenny Thunberg</h2>
          <div class="divider"></div>
          <p>
            Jag är keramiker och formgivare baserad i Sommarro, Uppsala. Med kärlek till hantverk och en bakgrund i
            konsthantverk skapar jag handgjord keramik i små serier — bruksgods med omsorg om varje detalj.
          </p>
          <p>
            Jag arbetar med stengodslera som antingen gjuts i egengjorda gipsformar eller drejas för hand på drejskivan.
            Leran bränns till 1260 grader för att bli vattentät och tålig nog för daglig användning.
          </p>
          <p>
            Mitt formspråk präglas av enkelhet och rena linjer — med spår av handen i varje föremål. Inspiration hittar
            jag i Västerbottens karga natur, barndomens sjö i Krokssjö och Upplandskustens klippor slipade av inlandsisen.
          </p>
          <p>
            Utöver keramiken håller jag kurser i min verkstad i Sommarro för den som vill lära sig dreja, handbygga eller ringla.
          </p>
          <br />
          <a href="<?php echo home_url('/keramikkurser/'); ?>" class="btn btn--rust">Boka kurs</a>
        </div>
        <div class="content-block__img">
          <img src="https://jennythunberg.se/wp-content/uploads/2024/01/profil-jenny-thunberg2.jpg"
               alt="Jenny Thunberg, keramiker i Uppsala"
               onerror="this.style.display='none';" />
        </div>
      </div>
    </div>
  </section>

  <!-- INSTAGRAM SECTION -->
  <section class="section section--alt">
    <div class="container">
      <div style="text-align:center; margin-bottom:40px;">
        <a href="https://www.instagram.com/jennyathunberg/" target="_blank" rel="noopener" class="instagram-heading-link">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:middle; margin-right:8px;">
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
          </svg>
          <span>@jennyathunberg</span>
        </a>
        <h2 style="font-size:1.9rem; color:var(--rust); margin-top:12px; margin-bottom:8px;">Senaste från Instagram</h2>
        <div class="divider" style="margin:12px auto 0;"></div>
      </div>

      <!-- Behold.so Instagram feed widget -->
      <!-- To activate: 1) go to behold.so  2) sign up free  3) connect @jennyathunberg  4) copy your Feed ID and replace YOUR_FEED_ID below -->
      <div class="behold-instagram-wrap">
        <behold-widget feed-id="YOUR_FEED_ID"></behold-widget>
      </div>
      <script type="module" src="https://cdn.behold.so/widget.js"></script>

      <div style="text-align:center; margin-top:40px;">
        <a href="https://www.instagram.com/jennyathunberg/" target="_blank" rel="noopener" class="btn btn--rust">Följ på Instagram</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
