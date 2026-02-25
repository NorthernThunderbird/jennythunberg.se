  <!-- FOOTER -->
  <footer class="footer">
    <div class="container">
      <div class="footer__inner">
        <div class="footer__brand">
          <h3>Jenny Thunberg Keramik</h3>
          <p>Handgjord stengods i Sommarro, Uppsala.<br />
             Formgivare med kärlek till enkelhet och hantverk.</p>
          <div class="footer__social">
            <a href="https://www.instagram.com/jennyathunberg/" target="_blank" rel="noopener" aria-label="Instagram">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
              </svg>
            </a>
          </div>
        </div>
        <div class="footer__links">
          <h4>Sidor</h4>
          <ul>
            <li><a href="<?php echo home_url('/'); ?>">Hem</a></li>
            <li><a href="<?php echo home_url('/handla-keramik/'); ?>">Handla keramik</a></li>
            <li><a href="<?php echo home_url('/om-mig/'); ?>">Om mig</a></li>
            <li><a href="<?php echo home_url('/lera-och-glasyrer/'); ?>">Lera &amp; glasyrer</a></li>
            <li><a href="<?php echo home_url('/inspiration/'); ?>">Inspiration</a></li>
            <li><a href="<?php echo home_url('/keramikkurser/'); ?>">Keramikkurser</a></li>
            <li><a href="<?php echo home_url('/kontakt/'); ?>">Kontakt</a></li>
          </ul>
        </div>
        <div class="footer__links">
          <h4>Kontakt</h4>
          <ul>
            <li><a href="tel:0733844480">073-384 44 80</a></li>
            <li><a href="<?php echo home_url('/kontakt/'); ?>">Skicka meddelande</a></li>
          </ul>
          <br />
          <p style="font-size:0.85rem;">Öster om ån, Uppsala<br />Hantverket, Öregrund</p>
        </div>
      </div>
      <div class="footer__bottom">
        <p>© Jenny Thunberg Keramik · Uppsala</p>
      </div>
    </div>
  </footer>

  <script>
    const toggle = document.getElementById('nav-toggle');
    const links  = document.getElementById('nav-links');
    toggle.addEventListener('click', () => {
      const isOpen = links.classList.toggle('open');
      toggle.classList.toggle('open', isOpen);
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });
    const dropdown = document.querySelector('.nav__dropdown');
    const dropdownToggle = dropdown?.querySelector('.nav__dropdown-toggle');
    dropdownToggle?.addEventListener('click', e => {
      e.stopPropagation();
      const isOpen = dropdown.classList.toggle('open');
      dropdownToggle.setAttribute('aria-expanded', isOpen);
    });
    document.addEventListener('click', () => dropdown?.classList.remove('open'));
  </script>

  <?php if (is_front_page()): ?>
  <script>
    // Page loader — shown once per session only
    const loader = document.getElementById('page-loader');
    if (loader) {
      if (sessionStorage.getItem('loaderShown')) {
        loader.remove();
      } else {
        sessionStorage.setItem('loaderShown', '1');
        document.body.style.overflow = 'hidden';
        setTimeout(() => {
          loader.classList.add('fade-out');
          loader.addEventListener('transitionend', () => {
            loader.remove();
            document.body.style.overflow = '';
          }, { once: true });
        }, 2050);
      }
    }

    // Letter-by-letter hero title animation
    const heroTitle = document.querySelector('.hero__title');
    if (heroTitle) {
      let i = 0;
      heroTitle.innerHTML = heroTitle.textContent.trim().split(' ').map(word => {
        const letters = word.split('').map(ch =>
          `<span class="hero__letter" style="--i:${i++}">${ch}</span>`
        ).join('');
        i++;
        return `<span style="display:inline-block;white-space:nowrap">${letters}</span>`;
      }).join(' ');
    }
  </script>
  <?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
