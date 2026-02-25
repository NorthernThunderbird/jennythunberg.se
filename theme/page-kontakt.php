<?php
add_action('wp_head', function () { ?>
  <meta name="description" content="Kontakta Jenny Thunberg Keramik — frågor om keramik, kursbokning eller beställningar. Ring 073-384 44 80 eller skicka ett meddelande." />
  <link rel="canonical" href="<?php echo esc_url(get_permalink()); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Kontakt | Jenny Thunberg Keramik Uppsala" />
  <meta property="og:description" content="Kontakta Jenny Thunberg — frågor om keramik, kurser eller beställningar. Ring 073-384 44 80." />
  <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>" />
  <meta property="og:image" content="https://jennythunberg.se/wp-content/uploads/2024/01/profil-jenny-thunberg2.jpg" />
  <meta property="og:locale" content="sv_SE" />
<?php }, 1);

get_header();
?>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <h1>Kontakt</h1>
    <p>Välkommen att höra av dig — om keramik, kurser eller beställningar</p>
  </div>

  <!-- CONTACT CONTENT -->
  <section class="section">
    <div class="container">
      <div class="contact-grid">

        <!-- Info -->
        <div class="contact-info">
          <h2>Jenny Thunberg</h2>
          <div class="divider"></div>
          <p>
            Keramiker och formgivare baserad i Sommarro, Uppsala.
            Kontakta mig gärna om du har frågor om keramik, kurser
            eller vill göra en beställning.
          </p>
          <p class="phone">
            <a href="tel:0733844480">073-384 44 80</a>
          </p>

          <br />

          <h3 style="font-family:var(--font-head); font-size:1.2rem; color:var(--dark); margin-bottom:12px;">Var du hittar keramiken</h3>
          <p>
            <strong>Öster om ån</strong><br />
            Hantverkskooperativ, Uppsala
          </p>
          <br />
          <p>
            <strong>Hantverket</strong><br />
            Hantverkskooperativ, Öregrund
          </p>

        </div>

        <!-- Form -->
        <div class="contact-form">
          <h2>Skicka meddelande till mig</h2>
          <div class="divider"></div>

          <form action="mailto:jenny@jennythunberg.se" method="get">
            <div class="form-group">
              <label for="name">Ditt namn</label>
              <input type="text" id="name" name="name" placeholder="Förnamn Efternamn" required />
            </div>
            <div class="form-group">
              <label for="email">E-postadress</label>
              <input type="email" id="email" name="email" placeholder="din@email.se" required />
            </div>
            <div class="form-group">
              <label for="phone">Telefon (valfritt)</label>
              <input type="tel" id="phone" name="phone" placeholder="070-000 00 00" />
            </div>
            <div class="form-group">
              <label for="subject">Ämne</label>
              <select id="subject" name="subject">
                <option value="">Välj ämne...</option>
                <option value="keramik">Köpa keramik / beställning</option>
                <option value="kurs-mandag">Anmälan — Måndag kväll kurs</option>
                <option value="kurs-prova">Anmälan — Prova på keramik</option>
                <option value="ovrig">Övrigt</option>
              </select>
            </div>
            <div class="form-group">
              <label for="message">Meddelande</label>
              <textarea id="message" name="body" placeholder="Skriv ditt meddelande här…" required></textarea>
            </div>
            <button type="submit" class="form-submit">Skicka meddelande</button>
          </form>

          <p style="margin-top:20px; font-size:0.85rem; color:var(--mid); font-weight:300;">
            Du kan även ringa direkt på
            <a href="tel:0733844480">073-384 44 80</a>.
          </p>
        </div>

      </div>
    </div>
  </section>

<?php get_footer(); ?>
