<?php
require_once __DIR__ . '/guides-data.php';
$pageTitle = 'SDI & Water Treatment Resources | Eclipse Water Technologies';
$pageDescription = 'Free resources on service deionization, DI water quality, system sizing, troubleshooting, and water treatment selection for Canadian industrial and laboratory facilities.';
$pageExtraHead = <<<'EXTRAHEAD'
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <link rel="canonical" href="https://eclipsewatertechnologies.com/resources.php" />
  <meta property="og:title" content="SDI & Water Treatment Resources | Eclipse Water Technologies" />
  <meta property="og:description" content="Free guides on service deionization, DI water quality, system sizing, and troubleshooting for Canadian industrial and laboratory facilities." />
  <meta property="og:image" content="https://eclipsewatertechnologies.com/Eclipselogo2026.png" />
  <meta property="og:url" content="https://eclipsewatertechnologies.com/resources.php" />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="en_CA" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="SDI & Water Treatment Resources | Eclipse Water Technologies" />
  <meta name="twitter:description" content="Free guides on service deionization, tank sizing, troubleshooting, and water treatment for Canadian facilities." />
  <meta name="twitter:image" content="https://eclipsewatertechnologies.com/Eclipselogo2026.png" />
  <meta name="twitter:site" content="@EclipseWaterTech" />
EXTRAHEAD;
include 'header.php';
?>

  <section class="hero hero-sub">
    <div class="section-inner">
      <h1>Water Treatment Resources</h1>
      <p>Free guides, explainers, and tools to help Canadian facilities understand, optimize, and troubleshoot service deionization and water treatment systems.</p>
    </div>
  </section>

  <section class="container" style="margin-top:2rem;">
    <div class="res-toolbar">
      <div class="chip-row" role="group" aria-label="Filter resources by topic">
        <button type="button" class="chip is-active" data-filter="all" aria-pressed="true">All <span class="chip-count"><?php echo count($guides); ?></span></button>
        <?php foreach ($guideCategories as $key => $label):
          $n = count(array_filter($guides, function ($g) use ($key) { return $g['cat'] === $key; })); ?>
          <button type="button" class="chip" data-filter="<?php echo guideSafe($key); ?>" aria-pressed="false"><?php echo guideSafe($label); ?> <span class="chip-count"><?php echo $n; ?></span></button>
        <?php endforeach; ?>
      </div>
      <label class="res-search"><span class="sr-only">Search resources</span>
        <input type="search" id="res-search" placeholder="Search guides…" autocomplete="off" />
      </label>
    </div>

    <div class="cards res-grid" id="res-grid">
      <?php foreach ($guides as $g): ?>
      <article class="card res-card" data-cat="<?php echo guideSafe($g['cat']); ?>">
        <span class="res-tag"><?php echo guideSafe($guideCategories[$g['cat']]); ?></span>
        <h3><a class="link" href="<?php echo guideSafe($g['url']); ?>"><?php echo guideSafe($g['title']); ?></a></h3>
        <p><?php echo guideSafe($g['desc']); ?></p>
        <a class="link" href="<?php echo guideSafe($g['url']); ?>"><?php echo guideSafe($g['cta']); ?> →</a>
      </article>
      <?php endforeach; ?>
    </div>
    <p id="res-empty" class="res-empty" hidden>No guides match your search. <a class="link" href="contact.php">Ask us a question →</a></p>
  </section>

  <section class="strip cta-strip">
    <div class="section-inner" style="text-align:center;">
      <h2>Have a question not covered here?</h2>
      <p>Our team answers technical questions about DI water, ion exchange, RO, and water treatment system design for Canadian facilities. No sales pressure, just straightforward answers.</p>
      <a href="contact.php" class="btn">Ask a Question</a>
    </div>
  </section>

  <script>
    (function () {
      var chips = document.querySelectorAll('.chip');
      var cards = document.querySelectorAll('.res-card');
      var search = document.getElementById('res-search');
      var empty = document.getElementById('res-empty');
      var active = 'all';
      function apply() {
        var q = (search.value || '').toLowerCase().trim();
        var shown = 0;
        cards.forEach(function (c) {
          var okCat = active === 'all' || c.getAttribute('data-cat') === active;
          var okText = !q || c.textContent.toLowerCase().indexOf(q) !== -1;
          c.hidden = !(okCat && okText);
          if (!c.hidden) shown++;
        });
        empty.hidden = shown !== 0;
      }
      chips.forEach(function (chip) {
        chip.addEventListener('click', function () {
          active = chip.getAttribute('data-filter');
          chips.forEach(function (c) {
            var on = c === chip;
            c.classList.toggle('is-active', on);
            c.setAttribute('aria-pressed', String(on));
          });
          apply();
        });
      });
      search.addEventListener('input', apply);
      var hash = location.hash.replace('#', '');
      if (hash) {
        var target = document.querySelector('.chip[data-filter="' + hash + '"]');
        if (target) target.click();
      }
    })();
  </script>

<?php include 'footer.php'; ?>
