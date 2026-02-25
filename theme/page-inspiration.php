<?php
add_action('wp_head', function () { ?>
  <meta name="description" content="Jenny Thunbergs inspiration — Västerbottens natur, barndomens sjö i Krokssjö och Upplandskustens klippor formar hennes keramik och formspråk." />
  <link rel="canonical" href="<?php echo esc_url(get_permalink()); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Inspiration | Jenny Thunberg Keramik" />
  <meta property="og:description" content="Naturen i Västerbotten och Upplandskusten inspirerar Jenny Thunbergs keramik och formspråk." />
  <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>" />
  <meta property="og:image" content="https://jennythunberg.se/wp-content/uploads/2024/01/IMG_5452-rotated.jpg" />
  <meta property="og:locale" content="sv_SE" />
<?php }, 1);

get_header();
?>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <h1>Inspiration</h1>
    <p>Naturen, barndomens landskap och en lertäkt i Västerbotten</p>
  </div>

  <!-- SECTION 1: Nature -->
  <section class="section">
    <div class="container">
      <div class="content-block">
        <div class="content-block__text">
          <h2>Naturen som källa</h2>
          <div class="divider"></div>
          <p>
            Min inspiration hittar jag bland annat i Västerbotten vid vår sjö och
            på fjället med dess vidder och vackra milda färger samt i Stenskär
            vid Upplandskusten med dess klippor slipade av inlandsisen.
          </p>
          <p>
            Det finns något i den karga naturen och de milda dova färgerna som
            rör mig på djupet. Jag kan även inspireras av linjer, ytor, strukturer
            i stadsmiljö. Mitt öga söker ständigt nya former och uttryck.
          </p>
        </div>
        <div class="content-block__img">
          <img src="https://jennythunberg.se/wp-content/uploads/2024/01/IMG_5452-rotated.jpg"
               alt="Naturinspiration" />
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Krokssjö -->
  <section class="section section--alt">
    <div class="container">
      <div class="content-block content-block--reverse">
        <div class="content-block__text">
          <h2>Krokssjö i Västerbotten</h2>
          <div class="divider"></div>
          <p>
            I den lilla byn Krokssjö i Västerbotten har jag tillbringat alla
            mina barndoms somrar och lov på mina morföräldrars gård. Där har jag
            fiskat abborrar och badat med mya, knott och "bremsen" som sällskap.
          </p>
          <p>
            Där har jag tjärat båten med morfar och sprungit runt i skogen. Vi
            barn fick alltid sova en natt varje sommar i den lappkåta som min
            morfar byggt till mamma när hon var liten.
          </p>
          <p>
            På den gården finns en lertäkt som alla som bor i vår by och även
            byarna runt omkring fick hämta lera ifrån när de behövde för att mura
            skorstensstockar. En dag ska jag gräva upp lera från vår lertäkt.
          </p>
        </div>
        <div class="content-block__img">
          <img src="https://jennythunberg.se/wp-content/uploads/2024/01/bakgrund-kroksjo-wikipedia-common-by-SEKepler.jpg"
               alt="Krokssjö i Västerbotten" />
        </div>
      </div>
    </div>
  </section>

  <!-- INSPIRATION SOURCES -->
  <section class="section">
    <div class="container">
      <h2 style="font-size:1.9rem; color:var(--rust); text-align:center; margin-bottom:8px;">Inspirationskällor</h2>
      <div class="divider" style="margin:12px auto 48px;"></div>

      <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap:28px;">
        <div style="text-align:center; padding:32px 20px;">
          <div style="font-size:2.5rem; margin-bottom:16px;">⛰</div>
          <h3 style="font-family:var(--font-head); color:var(--rust); margin-bottom:12px;">Fjällen</h3>
          <p style="color:var(--mid); font-size:0.9rem; font-weight:300;">Vidder och milda dova färger i Västerbottens fjällvärld.</p>
        </div>
        <div style="text-align:center; padding:32px 20px;">
          <div style="font-size:2.5rem; margin-bottom:16px;">🌊</div>
          <h3 style="font-family:var(--font-head); color:var(--rust); margin-bottom:12px;">Upplandskusten</h3>
          <p style="color:var(--mid); font-size:0.9rem; font-weight:300;">Stenskär — klippor slipade av inlandsisen vid Upplandskusten.</p>
        </div>
        <div style="text-align:center; padding:32px 20px;">
          <div style="font-size:2.5rem; margin-bottom:16px;">🏡</div>
          <h3 style="font-family:var(--font-head); color:var(--rust); margin-bottom:12px;">Barndomens gård</h3>
          <p style="color:var(--mid); font-size:0.9rem; font-weight:300;">Morföräldrarnas gård i Krokssjö — med en lertäkt som väntade.</p>
        </div>
        <div style="text-align:center; padding:32px 20px;">
          <div style="font-size:2.5rem; margin-bottom:16px;">🏙</div>
          <h3 style="font-family:var(--font-head); color:var(--rust); margin-bottom:12px;">Stadsmiljö</h3>
          <p style="color:var(--mid); font-size:0.9rem; font-weight:300;">Linjer, ytor och strukturer i urban miljö — former söker nya uttryck.</p>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
