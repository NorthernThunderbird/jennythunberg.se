<?php
/**
 * Editable text — per-page meta boxes that appear on "Redigera sida".
 *
 * Each page (matched by slug, or front page) gets a "Sidans texter" meta box
 * with the text fields used by its template. Values are stored in post_meta
 * and read by jt_text() / jt_paragraphs() / jt_list() from the queried page.
 *
 * Render helpers:
 *   jt_text($key, $default)        → escaped single-line / inline HTML
 *   jt_paragraphs($key, $default)  → multi-paragraph (wpautop wraps each in <p>)
 *   jt_list($key, $default)        → one bullet per line, wrapped in <li>
 */

if (!defined('ABSPATH')) { exit; }

/* --------------------------------------------------------------------------
 * Which post supplies meta for the current template
 * -------------------------------------------------------------------------- */

function jt_current_page_id() {
    if (is_front_page()) {
        return (int) get_option('page_on_front');
    }
    return (int) get_queried_object_id();
}

function jt_get_meta($key, $default = '') {
    $val = get_post_meta(jt_current_page_id(), '_jt_' . $key, true);
    return ($val !== '' && $val !== null) ? $val : $default;
}

/* --------------------------------------------------------------------------
 * Render helpers (used from templates)
 * -------------------------------------------------------------------------- */

function jt_text($key, $default = '') {
    return wp_kses_post(jt_get_meta($key, $default));
}

function jt_paragraphs($key, $default = '') {
    return wpautop(wp_kses_post(jt_get_meta($key, $default)));
}

function jt_list($key, $default = '') {
    $text  = jt_get_meta($key, $default);
    $items = array_filter(array_map('trim', explode("\n", (string) $text)));
    $out   = '';
    foreach ($items as $item) {
        $out .= '<li>' . wp_kses_post($item) . '</li>';
    }
    return $out;
}

/* --------------------------------------------------------------------------
 * Field definitions — one set per page slug (or 'front-page' for the front page)
 * -------------------------------------------------------------------------- */

function jt_fields_for_page($slug) {
    $f = function ($key, $label, $default, $type = 'text') {
        return compact('key', 'label', 'default', 'type');
    };

    switch ($slug) {

        case 'front-page':
            return [
                $f('hero_title',         'Hero — rubrik',                                'Handgjord keramik från Uppsala'),
                $f('hero_subtitle',      'Hero — underrubrik',                           'Upptäck handgjord keramik eller boka kurser i drejningsteknik och lär dig dreja'),
                $f('hero_btn_primary',   'Hero — knapp 1',                               'Boka kurs'),
                $f('hero_btn_secondary', 'Hero — knapp 2',                               'Handla keramik'),
                $f('about_title',        'Om — rubrik',                                  'Jenny Thunberg keramik i Sommarro Uppsala'),
                $f('about_text',         'Om — text (en tom rad mellan stycken)',
                    "Jag är keramiker och formgivare som arbetar med småskalig tillverkning av handgjord keramik.\n\nJag arbetar med stengodslera som antingen gjuts i egengjorda gipsformar eller drejas för hand. Jag vill att du ska uppleva att det varit en hand med hela vägen i processen. Ränderna i koppen som kan anas från drejningen, hänkeln som dragits av en hand för en hand. Små spår av handens arbete med omsorg i alla detaljer.\n\nMin produktion består främst av bruksgods i små serier där form och funktion ligger mig varmt om hjärtat. I mitt formspråk strävar jag efter enkelhet och rena linjer.",
                    'textarea'),
                $f('about_btn',          'Om — knapp',                                   'Se keramiken'),
                $f('gallery_title',      'Galleri — rubrik',                             'Keramik'),
                $f('gallery_subtitle',   'Galleri — underrubrik',                        'Handgjord stengods i små serier'),
                $f('quote',              'Citat-banner',                                 '"Enkelhet och rena linjer — form och funktion i harmoni"', 'textarea'),
                $f('kurser_title',       'Kurser-teaser — rubrik',                       'Keramikkurser'),
                $f('kurser_text',        'Kurser-teaser — text',
                    'Lär dig grunderna i keramik — drejning, handbygge och ringla — i en liten grupp om max 6 personer i min verkstad i Sommarro.',
                    'textarea'),
                $f('kurser_btn',         'Kurser-teaser — knapp',                        'Se kurser & anmälan'),
            ];

        case 'om-mig':
            return [
                $f('hero_title',    'Hero — rubrik',                          'Om mig'),
                $f('hero_subtitle', 'Hero — underrubrik',                     'Keramiker och formgivare från Uppsala'),
                $f('profile_title', 'Profil — rubrik',                        'Jenny Thunberg'),
                $f('profile_text',  'Profil — text (en tom rad mellan stycken)',
                    "Jag är keramiker och formgivare baserad i Sommarro, Uppsala. Med kärlek till hantverk och en bakgrund i konsthantverk skapar jag handgjord keramik i små serier — bruksgods med omsorg om varje detalj.\n\nJag arbetar med stengodslera som antingen gjuts i egengjorda gipsformar eller drejas för hand på drejskivan. Leran bränns till 1260 grader för att bli vattentät och tålig nog för daglig användning.\n\nMitt formspråk präglas av enkelhet och rena linjer — med spår av handen i varje föremål. Inspiration hittar jag i Västerbottens karga natur, barndomens sjö i Krokssjö och Upplandskustens klippor slipade av inlandsisen.\n\nUtöver keramiken håller jag kurser i min verkstad i Sommarro för den som vill lära sig dreja, handbygga eller ringla.",
                    'textarea'),
                $f('profile_btn',   'Profil — knapp',                         'Boka kurs'),
                $f('ig_handle',     'Instagram — handle',                     '@jennyathunberg'),
                $f('ig_title',      'Instagram — rubrik',                     'Senaste från Instagram'),
                $f('ig_btn',        'Instagram — knapp',                      'Följ på Instagram'),
            ];

        case 'keramikkurser':
            return [
                $f('hero_title',    'Hero — rubrik',                          'Keramikkurser'),
                $f('hero_subtitle', 'Hero — underrubrik',                     'Lär dig dreja, handbygga och ringla i Sommarro, Uppsala'),
                $f('intro',         'Intro-text',
                    'Jag håller keramikkurser i min verkstad i Sommarro, Uppsala. Kurserna hålls i små grupper om max 6 deltagare för en personlig och lärorik upplevelse. Välkommen oavsett om du är nybörjare eller har lite erfarenhet av keramik.',
                    'textarea'),

                $f('c1_tag',        'Kurs 1 — tagg',                          '5 tillfällen'),
                $f('c1_title',      'Kurs 1 — rubrik',                        'Keramikkurs — måndag kväll'),
                $f('c1_desc',       'Kurs 1 — beskrivning',
                    'En kurs fördelad på fem måndagskvällar klockan 17–20. De fyra första kvällarna skapar du dina föremål; den sista kvällen glaserar vi tillsammans.',
                    'textarea'),
                $f('c1_price',      'Kurs 1 — pris',                          '3 900 kr'),
                $f('c1_price_note', 'Kurs 1 — prisnotering',                  'Lera tillkommer — 100 kr/kg'),
                $f('c1_list',       'Kurs 1 — lista (en punkt per rad)',
                    "Max 6 deltagare\nHandbygge (handbygga)\nDrejning — 4 drejar finns i verkstaden\nRingla (ringla)\nGlasyrkvällen ingår\nKräver minst 4 anmälda",
                    'textarea'),
                $f('c1_info',       'Kurs 1 — info & datum (HTML tillåts)',
                    "<strong>Lera:</strong> Vit eller antracitgrå stengodslera<br />\n<strong>Tider:</strong> Måndag kl. 17:00–20:00<br />\n<br />\n<strong>Kommande datum:</strong><br />\n2/2 &nbsp;·&nbsp; 9/2 &nbsp;·&nbsp; 23/2 &nbsp;·&nbsp; 2/3 &nbsp;·&nbsp; 9/3",
                    'textarea'),
                $f('c1_btn',        'Kurs 1 — knapp',                         'Anmälan →'),

                $f('c2_tag',        'Kurs 2 — tagg',                          'Prova på'),
                $f('c2_title',      'Kurs 2 — rubrik',                        'Prova på keramik'),
                $f('c2_desc',       'Kurs 2 — beskrivning',
                    'En heldagsworkshop på 5 timmar där du provar på grundtekniker i keramik. Jenny bränner och glaserar dina föremål; du hämtar dem inom 3–4 veckor.',
                    'textarea'),
                $f('c2_price',      'Kurs 2 — pris',                          '1 500 kr'),
                $f('c2_price_note', 'Kurs 2 — prisnotering',                  'Inkl. 1,5 kg lera · Extra lera 100 kr/kg'),
                $f('c2_list',       'Kurs 2 — lista (en punkt per rad)',
                    "Max 6 deltagare\nTumma (pinching)\nKavla (slab rolling)\nDreja (wheel-throwing)\nJenny glaserar & bränner åt dig\nHämtning inom 3–4 veckor",
                    'textarea'),
                $f('c2_info',       'Kurs 2 — info & datum (HTML tillåts)',
                    "<strong>Lera:</strong> Vit eller antracitgrå stengodslera<br />\n<br />\n<strong>Kommande datum:</strong><br />\nLördag 24/1 <span class=\"fullt\">Fullt</span><br />\nLördag 28/2 <span class=\"fullt\">Fullt</span><br />\nLördag 7/3 <span class=\"fullt\">Fullt</span><br />\nLördag 11/4 <span class=\"fullt\">Fullt</span>",
                    'textarea'),
                $f('c2_btn',        'Kurs 2 — knapp',                         'Intresseanmälan →'),

                $f('contact_title', 'Kontakt-teaser — rubrik',                'Frågor om kurserna?'),
                $f('contact_text',  'Kontakt-teaser — text',
                    'Kontakta mig gärna om du har frågor om innehåll, datum eller om du vill boka en privat kurs för en grupp.',
                    'textarea'),
                $f('contact_btn',   'Kontakt-teaser — knapp',                 'Kontakta Jenny'),
            ];

        case 'inspiration':
            return [
                $f('hero_title',    'Hero — rubrik',                          'Inspiration'),
                $f('hero_subtitle', 'Hero — underrubrik',                     'Naturen, barndomens landskap och en lertäkt i Västerbotten'),

                $f('s1_title', 'Sektion 1 — rubrik', 'Naturen som källa'),
                $f('s1_text',  'Sektion 1 — text (en tom rad mellan stycken)',
                    "Min inspiration hittar jag bland annat i Västerbotten vid vår sjö och på fjället med dess vidder och vackra milda färger samt i Stenskär vid Upplandskusten med dess klippor slipade av inlandsisen.\n\nDet finns något i den karga naturen och de milda dova färgerna som rör mig på djupet. Jag kan även inspireras av linjer, ytor, strukturer i stadsmiljö. Mitt öga söker ständigt nya former och uttryck.",
                    'textarea'),

                $f('s2_title', 'Sektion 2 — rubrik', 'Krokssjö i Västerbotten'),
                $f('s2_text',  'Sektion 2 — text (en tom rad mellan stycken)',
                    "I den lilla byn Krokssjö i Västerbotten har jag tillbringat alla mina barndoms somrar och lov på mina morföräldrars gård. Där har jag fiskat abborrar och badat med mya, knott och \"bremsen\" som sällskap.\n\nDär har jag tjärat båten med morfar och sprungit runt i skogen. Vi barn fick alltid sova en natt varje sommar i den lappkåta som min morfar byggt till mamma när hon var liten.\n\nPå den gården finns en lertäkt som alla som bor i vår by och även byarna runt omkring fick hämta lera ifrån när de behövde för att mura skorstensstockar. En dag ska jag gräva upp lera från vår lertäkt.",
                    'textarea'),

                $f('sources_title', 'Inspirationskällor — rubrik', 'Inspirationskällor'),

                $f('card1_title', 'Kort 1 — rubrik', 'Fjällen'),
                $f('card1_desc',  'Kort 1 — text',   'Vidder och milda dova färger i Västerbottens fjällvärld.', 'textarea'),
                $f('card2_title', 'Kort 2 — rubrik', 'Upplandskusten'),
                $f('card2_desc',  'Kort 2 — text',   'Stenskär — klippor slipade av inlandsisen vid Upplandskusten.', 'textarea'),
                $f('card3_title', 'Kort 3 — rubrik', 'Barndomens gård'),
                $f('card3_desc',  'Kort 3 — text',   'Morföräldrarnas gård i Krokssjö — med en lertäkt som väntade.', 'textarea'),
                $f('card4_title', 'Kort 4 — rubrik', 'Stadsmiljö'),
                $f('card4_desc',  'Kort 4 — text',   'Linjer, ytor och strukturer i urban miljö — former söker nya uttryck.', 'textarea'),
            ];

        case 'kontakt':
            return [
                $f('hero_title',    'Hero — rubrik',                          'Kontakt'),
                $f('hero_subtitle', 'Hero — underrubrik',                     'Välkommen att höra av dig — om keramik, kurser eller beställningar'),
                $f('info_title',    'Info — rubrik',                          'Jenny Thunberg'),
                $f('info_text',     'Info — text',
                    'Keramiker och formgivare baserad i Sommarro, Uppsala. Kontakta mig gärna om du har frågor om keramik, kurser eller vill göra en beställning.',
                    'textarea'),
                $f('phone_label',   'Telefon — visad text',                   '073-384 44 80'),
                $f('locations_title', 'Försäljningsställen — rubrik',         'Var du hittar keramiken'),
                $f('loc1', 'Försäljningsställe 1 (HTML tillåts)',
                    "<strong>Öster om ån</strong><br />\nHantverkskooperativ, Uppsala",
                    'textarea'),
                $f('loc2', 'Försäljningsställe 2 (HTML tillåts)',
                    "<strong>Hantverket</strong><br />\nHantverkskooperativ, Öregrund",
                    'textarea'),
                $f('form_title',   'Formulär — rubrik',                       'Skicka meddelande till mig'),
                $f('form_btn',     'Formulär — knapp',                        'Skicka meddelande'),
                $f('form_footer',  'Formulär — footer-text (HTML tillåts)',
                    'Du kan även ringa direkt på <a href="tel:0733844480">073-384 44 80</a>.',
                    'textarea'),
            ];

        case 'lera-och-glasyrer':
            return [
                $f('hero_title',    'Hero — rubrik',                          'Lera och glasyrer'),
                $f('hero_subtitle', 'Hero — underrubrik',                     'Material och teknik bakom varje föremål'),

                $f('main_title', 'Huvudtext — rubrik', 'Stengods bränt till 1260°'),
                $f('main_text',  'Huvudtext (en tom rad mellan stycken, HTML tillåts)',
                    "Leran jag använder bränns i hög temperatur för att tåla daglig användning. Jag bränner min keramik till <strong>1260 grader</strong>. Vid den temperaturen säger man att leran sintrar — med det menas att keramiken blir vattentät och tålig.\n\nMin keramik tål både <strong>mikrovågsugn</strong> och att <strong>diskas i maskin</strong>.\n\nLera är ett naturmaterial och ibland kan det finnas små ojämnheter eller prickar i den färdiga produkten. Det är inget jag ser som felaktigheter utan ett tecken på ett småskaligt hantverk.\n\nJag tycker om att utforska nya idéer och skapa nytt. Därför förändras mitt sortiment över tid men givet att jag har leran och glasyren kvar till något som du önskar komplettera så försöker jag ordna det.",
                    'textarea'),

                $f('facts_title', 'Material — rubrik', 'Material i korthet'),

                $f('card1_tag',   'Kort 1 — tagg',   'Leran'),
                $f('card1_title', 'Kort 1 — rubrik', 'Vit stengodslera'),
                $f('card1_desc',  'Kort 1 — text',   'Ger ett ljust, rent uttryck. Bränns till 1260° för full sintring.', 'textarea'),

                $f('card2_tag',   'Kort 2 — tagg',   'Leran'),
                $f('card2_title', 'Kort 2 — rubrik', 'Antracitgrå stengodslera'),
                $f('card2_desc',  'Kort 2 — text',   'Mörkare, mer dramatiskt uttryck. Samma hållbarhet och tålighet.', 'textarea'),

                $f('card3_tag',   'Kort 3 — tagg',   'Egenskaper'),
                $f('card3_title', 'Kort 3 — rubrik', 'Diskmaskinssäker'),
                $f('card3_desc',  'Kort 3 — text',   'Tål maskinsdisk och mikrovågsugn tack vare den höga bränningstemperaturen.', 'textarea'),

                $f('card4_tag',   'Kort 4 — tagg',   'Karaktär'),
                $f('card4_title', 'Kort 4 — rubrik', 'Naturliga variationer'),
                $f('card4_desc',  'Kort 4 — text',   'Små ojämnheter och prickar är tecken på äkta hantverk, inte defekter.', 'textarea'),

                $f('quote', 'Citat-banner',
                    '"Ränderna i koppen som kan anas från drejningen, hänkeln som dragits av en hand för en hand — små spår av handens arbete med omsorg i alla detaljer."',
                    'textarea'),
            ];

        case 'handla-keramik':
            return [
                $f('hero_title',    'Hero — rubrik',                          'Handla keramik'),
                $f('hero_subtitle', 'Hero — underrubrik',                     'Handgjord stengods — bruksgods med omsorg om varje detalj'),

                $f('main_title', 'Huvudtext — rubrik', 'Var hittar du min keramik?'),
                $f('main_text',  'Huvudtext (en tom rad mellan stycken, HTML tillåts)',
                    "I dagsläget säljer jag min keramik på hantverkskooperativen <strong>Öster om ån</strong> i Uppsala och <strong>Hantverket</strong> i Öregrund.\n\nJag har ett litet lager av keramik i min verkstad och tar även beställningar på förfrågan. Kontakta mig gärna om du letar efter något specifikt eller vill göra en specialbeställning.\n\nMin produktion består av bruksgods i små serier — koppar, fat, skålar och kannor i vit och antracitgrå stengodslera.",
                    'textarea'),
                $f('main_btn', 'Huvudtext — knapp', 'Kontakta mig'),

                $f('locations_title', 'Försäljningsställen — rubrik', 'Var du kan hitta keramiken'),

                $f('card1_tag',   'Kort 1 — tagg',   'Uppsala'),
                $f('card1_title', 'Kort 1 — rubrik', 'Öster om ån'),
                $f('card1_desc',  'Kort 1 — text',   'Hantverkskooperativ i centrala Uppsala med ett brett utbud av handgjort hantverk från svenska konstnärer och hantverkare.', 'textarea'),

                $f('card2_tag',   'Kort 2 — tagg',   'Öregrund'),
                $f('card2_title', 'Kort 2 — rubrik', 'Hantverket'),
                $f('card2_desc',  'Kort 2 — text',   'Hantverkskooperativ i Öregrund vid Upplandskusten. En charmig butik med lokalt skapade hantverk och konsthantverk.', 'textarea'),

                $f('card3_tag',   'Kort 3 — tagg',   'Beställning'),
                $f('card3_title', 'Kort 3 — rubrik', 'Direkt från verkstaden'),
                $f('card3_desc',  'Kort 3 — text',   'Kontakta mig direkt för att beställa specifika föremål eller diskutera specialbeställningar. Jag har ett litet lager i verkstaden i Sommarro, Uppsala.', 'textarea'),
                $f('card3_btn',   'Kort 3 — knapp',  'Kontakta mig →'),
            ];

        case 'boka-kurs':
            return [
                $f('hero_title',    'Hero — rubrik',                          'Boka kurs'),
                $f('hero_subtitle', 'Hero — underrubrik',                     'Lär dig dreja, handbygga och ringla i Sommarro, Uppsala'),
                $f('intro',         'Intro-text',
                    'Jag håller keramikkurser i min verkstad i Sommarro, Uppsala. Kurserna hålls i små grupper om max 6 deltagare för en personlig och lärorik upplevelse. Välkommen oavsett om du är nybörjare eller har lite erfarenhet av keramik.',
                    'textarea'),

                $f('c1_tag',        'Kurs 1 — tagg',                          '5 tillfällen'),
                $f('c1_title',      'Kurs 1 — rubrik',                        'Keramikkurs — måndag kväll'),
                $f('c1_desc',       'Kurs 1 — beskrivning',
                    'En kurs fördelad på fem måndagskvällar klockan 17–20. De fyra första kvällarna skapar du dina föremål; den sista kvällen glaserar vi tillsammans.',
                    'textarea'),
                $f('c1_price',      'Kurs 1 — pris',                          '3 900 kr'),
                $f('c1_price_note', 'Kurs 1 — prisnotering',                  'Lera tillkommer — 100 kr/kg'),
                $f('c1_list',       'Kurs 1 — lista (en punkt per rad)',
                    "Max 6 deltagare\nHandbygge\nDrejning — 4 drejar finns i verkstaden\nRingla\nGlasyrkvällen ingår\nKräver minst 4 anmälda",
                    'textarea'),
                $f('c1_info',       'Kurs 1 — info (HTML tillåts)',
                    "<strong>Tider:</strong> Måndag kl. 17:00–20:00<br />\n<strong>Lera:</strong> Vit eller antracitgrå stengodslera",
                    'textarea'),
                $f('c1_btn',        'Kurs 1 — knapp',                         'Boka nu →'),

                $f('c2_tag',        'Kurs 2 — tagg',                          'Prova på'),
                $f('c2_title',      'Kurs 2 — rubrik',                        'Prova på keramik'),
                $f('c2_desc',       'Kurs 2 — beskrivning',
                    'En heldagsworkshop på 5 timmar där du provar på grundtekniker i keramik. Jenny bränner och glaserar dina föremål; du hämtar dem inom 3–4 veckor.',
                    'textarea'),
                $f('c2_price',      'Kurs 2 — pris',                          '1 500 kr'),
                $f('c2_price_note', 'Kurs 2 — prisnotering',                  'Inkl. 1,5 kg lera · Extra lera 100 kr/kg'),
                $f('c2_list',       'Kurs 2 — lista (en punkt per rad)',
                    "Max 6 deltagare\nTumma (pinching)\nKavla (slab rolling)\nDreja (wheel-throwing)\nJenny glaserar & bränner åt dig\nHämtning inom 3–4 veckor",
                    'textarea'),
                $f('c2_info',       'Kurs 2 — info (HTML tillåts)',
                    "<strong>Lera:</strong> Vit eller antracitgrå stengodslera",
                    'textarea'),
                $f('c2_btn',        'Kurs 2 — knapp',                         'Boka nu →'),

                $f('cal_title', 'Kalender — rubrik', 'Välj datum & boka'),
                $f('cal_text',  'Kalender — text',   'Klicka på ett markerat datum för att se detaljer och boka.', 'textarea'),

                $f('questions_title', 'Frågor — rubrik', 'Frågor om kurserna?'),
                $f('questions_text',  'Frågor — text',
                    'Kontakta mig gärna om du har frågor om innehåll, datum eller vill boka en privat kurs för en grupp.',
                    'textarea'),
                $f('questions_btn', 'Frågor — knapp', 'Kontakta Jenny'),
            ];
    }

    return [];
}

function jt_slug_for_post($post) {
    if (!$post) return '';
    if ((int) $post->ID === (int) get_option('page_on_front')) return 'front-page';
    return $post->post_name;
}

/* --------------------------------------------------------------------------
 * Meta box — registered on every page, shows the matching fields
 * -------------------------------------------------------------------------- */

add_action('add_meta_boxes_page', function ($post) {
    $slug = jt_slug_for_post($post);
    if (empty(jt_fields_for_page($slug))) return;

    add_meta_box(
        'jt_editable_text',
        'Sidans texter',
        'jt_render_meta_box',
        'page',
        'normal',
        'high'
    );
});

function jt_render_meta_box($post) {
    $slug   = jt_slug_for_post($post);
    $fields = jt_fields_for_page($slug);

    wp_nonce_field('jt_save_text_' . $post->ID, 'jt_text_nonce');
    ?>
    <style>
        #jt_editable_text .jt-help { color:#666; font-size:12px; margin:0 0 14px; }
        #jt_editable_text .jt-field { margin-bottom:18px; }
        #jt_editable_text .jt-field label { display:block; font-weight:600; margin-bottom:6px; }
        #jt_editable_text .jt-field input[type=text],
        #jt_editable_text .jt-field textarea { width:100%; padding:8px; font-size:14px; }
        #jt_editable_text .jt-field textarea { min-height:90px; font-family:inherit; }
    </style>
    <p class="jt-help">Redigera texterna som visas på sidan. Lämna ett fält tomt för att återgå till standardtexten.</p>
    <?php
    foreach ($fields as $field) {
        $name  = '_jt_' . $field['key'];
        $val   = get_post_meta($post->ID, $name, true);
        $value = ($val !== '' && $val !== null) ? $val : $field['default'];
        ?>
        <div class="jt-field">
            <label for="<?php echo esc_attr($name); ?>"><?php echo esc_html($field['label']); ?></label>
            <?php if ($field['type'] === 'textarea'): ?>
                <textarea id="<?php echo esc_attr($name); ?>" name="<?php echo esc_attr($name); ?>" rows="5"><?php echo esc_textarea($value); ?></textarea>
            <?php else: ?>
                <input type="text" id="<?php echo esc_attr($name); ?>" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr($value); ?>" />
            <?php endif; ?>
        </div>
        <?php
    }
}

/* --------------------------------------------------------------------------
 * Save handler
 * -------------------------------------------------------------------------- */

add_action('save_post_page', function ($post_id, $post) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!isset($_POST['jt_text_nonce'])) return;
    if (!wp_verify_nonce($_POST['jt_text_nonce'], 'jt_save_text_' . $post_id)) return;
    if (!current_user_can('edit_post', $post_id)) return;

    $slug   = jt_slug_for_post($post);
    $fields = jt_fields_for_page($slug);
    if (empty($fields)) return;

    foreach ($fields as $field) {
        $name = '_jt_' . $field['key'];
        if (!isset($_POST[$name])) continue;

        $raw = wp_unslash($_POST[$name]);
        $val = $field['type'] === 'textarea'
            ? wp_kses_post($raw)
            : sanitize_text_field($raw);

        if ($val === '') {
            delete_post_meta($post_id, $name);
        } else {
            update_post_meta($post_id, $name, $val);
        }
    }
}, 10, 2);

/* --------------------------------------------------------------------------
 * Force Classic Editor for pages with text meta boxes — otherwise Gutenberg
 * hides them at the bottom and shows the legacy Divi shortcodes up top.
 * -------------------------------------------------------------------------- */

add_filter('use_block_editor_for_post', function ($use_block_editor, $post) {
    if ($post && $post->post_type === 'page' && !empty(jt_fields_for_page(jt_slug_for_post($post)))) {
        return false;
    }
    return $use_block_editor;
}, 10, 2);

/* --------------------------------------------------------------------------
 * Hide the main post-content editor on pages that use our meta box —
 * the body content is unused by these templates (and contains Divi cruft).
 * -------------------------------------------------------------------------- */

add_action('admin_init', function () {
    add_action('edit_form_after_title', function ($post) {
        if ($post->post_type !== 'page') return;
        if (empty(jt_fields_for_page(jt_slug_for_post($post)))) return;
        echo '<p style="color:#666; margin:8px 0 0;"><em>Sidans innehåll redigeras i fälten nedan.</em></p>';
    });
});

add_action('admin_head', function () {
    $screen = get_current_screen();
    if (!$screen || $screen->id !== 'page') return;
    global $post;
    if (!$post || empty(jt_fields_for_page(jt_slug_for_post($post)))) return;
    echo '<style>#postdivrich{display:none!important;}</style>';
});
