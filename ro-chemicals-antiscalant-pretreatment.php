<?php
require_once __DIR__ . '/guides-data.php';
$pageTitle = 'RO Chemicals: Antiscalant, Sodium Metabisulfite & More | Eclipse Water Technologies';
$pageDescription = 'Reverse osmosis depends on the right chemistry: antiscalant, sodium metabisulfite, pH control, biocides and cleaning acids. See where problems start and how Eclipse can help.';
$faqs = [
  ['What chemicals does a reverse osmosis system use?', 'Common ones include antiscalant to prevent scale, sodium metabisulfite or carbon to remove chlorine, acid or caustic for pH control, coagulants for pretreatment, biocides, and cleaning chemicals such as citric, malic, and glycolic acid. What your system needs depends on your water.'],
  ['What is antiscalant?', 'Antiscalant is a chemical fed continuously in very small amounts to keep dissolved minerals from forming scale on RO membranes.'],
  ['Why is sodium metabisulfite used with RO?', 'It removes chlorine from the feed water. Chlorine damages RO membranes, so removing it is essential. Too little or too much can both cause problems, which is why dosing should be set up and monitored properly.'],
  ['Can the wrong RO chemical damage my system?', 'Yes. Incompatible chemicals, overdosing, underdosing, or a failed dosing pump can foul or damage membranes and shorten their life. Some chemicals are also dangerous if mixed or stored together.']
];
$pageExtraHead = <<<'EXTRAHEAD'
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <meta name="author" content="Eclipse Water Technologies" />
  <link rel="canonical" href="https://eclipsewatertechnologies.com/ro-chemicals-antiscalant-pretreatment.php" />
  <meta property="og:title" content="RO Chemicals: Antiscalant, Sodium Metabisulfite and More" />
  <meta property="og:description" content="The chemistry RO systems depend on, where problems start, and how Eclipse can help." />
  <meta property="og:image" content="https://eclipsewatertechnologies.com/Eclipselogo2026.png" />
  <meta property="og:url" content="https://eclipsewatertechnologies.com/ro-chemicals-antiscalant-pretreatment.php" />
  <meta property="og:type" content="article" />
  <meta property="og:locale" content="en_CA" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="RO Chemicals: Antiscalant, Sodium Metabisulfite and More" />
  <meta name="twitter:description" content="The chemistry RO systems depend on and where problems start." />
  <meta name="twitter:image" content="https://eclipsewatertechnologies.com/Eclipselogo2026.png" />
  <meta name="twitter:site" content="@EclipseWaterTech" />
EXTRAHEAD;
$pageExtraHead .= faqSchemaScript($faqs);
include 'header.php';
?>

  <section class="hero hero-sub">
    <div class="section-inner">
      <h1>Chemicals Used to Run Reverse Osmosis</h1>
      <p>A healthy RO depends on the right chemistry, set up for your water. Small mistakes here are a leading cause of membrane failure.</p>
      <a href="contact.php" class="btn">Review My RO Chemistry</a>
    </div>
  </section>

  <section class="container" style="margin-top:2rem;">
    <h2 style="font-family:'Montserrat',sans-serif;color:#003366;margin-bottom:1rem;">What an RO system relies on</h2>
    <div class="cards">
      <article class="card"><h3>Antiscalant</h3><p>Keeps dissolved minerals from forming scale on the membrane.</p></article>
      <article class="card"><h3>Sodium metabisulfite</h3><p>Removes chlorine that would otherwise destroy the membrane. Activated carbon is a common alternative.</p></article>
      <article class="card"><h3>pH control</h3><p>Acid or caustic to manage scaling potential and permeate quality.</p></article>
      <article class="card"><h3>Coagulants and biocides</h3><p>Protect the RO from particles, metals, and biological growth.</p></article>
      <article class="card"><h3>Cleaning acids and alkalis</h3><p>Citric, malic, glycolic and other acids, plus alkaline cleaners, used to restore fouled membranes.</p></article>
      <article class="card"><h3>Storage solutions</h3><p>Preservatives that protect idle membranes during shutdowns.</p></article>
    </div>
  </section>

  <section class="container" style="margin-top:1.5rem;">
    <h2 style="font-family:'Montserrat',sans-serif;color:#003366;margin-bottom:1rem;">Where problems start</h2>
    <ul style="padding-left:1.2rem;">
      <li style="margin-bottom:0.4rem;">Dosing that is too high, too low, or stopped by a failed pump.</li>
      <li style="margin-bottom:0.4rem;">Chlorine getting through to the membrane.</li>
      <li style="margin-bottom:0.4rem;">Chemicals that are incompatible with each other or with the membrane.</li>
      <li style="margin-bottom:0.4rem;">Settings that no longer match changes in your incoming water.</li>
      <li>Unsafe storage or mixing of acids, caustics, oxidizers, and sulfites.</li>
    </ul>
    <p style="margin-top:0.75rem;">Dosing and selection depend on your feed water analysis and membrane specifications, so they should be set for your system rather than copied from a general guide.</p>
  </section>

  <section class="container" style="margin-top:1.5rem;">
    <h2 style="font-family:'Montserrat',sans-serif;color:#003366;margin-bottom:1rem;">How Eclipse helps</h2>
    <p>We review your pretreatment and dosing, spot risks before they damage membranes, and help you keep chemical handling safe and compliant. See also our <a href="ro-membrane-cleaning-cip.php">RO cleaning</a> and <a href="ro-troubleshooting-normalization.php">troubleshooting</a> pages, or <a href="activated-carbon-filtration-service.php">activated carbon service</a>.</p>
  </section>

  <section class="container" style="margin-top:1.5rem;">
    <h2 style="font-family:'Montserrat',sans-serif;color:#003366;margin-bottom:1rem;">Frequently asked questions</h2>
    <div class="cards">
      <?php foreach ($faqs as $f): ?>
      <article class="card"><p><strong><?php echo guideSafe($f[0]); ?></strong><br><?php echo guideSafe($f[1]); ?></p></article>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="strip cta-strip" style="margin-top:1rem;">
    <div class="section-inner" style="text-align:center;">
      <h2>Not sure your RO chemistry is right?</h2>
      <p>Call <a href="tel:6473550944" style="color:inherit;font-weight:700;">647-355-0944</a> or send us your system details. We will review it with you.</p>
      <a href="contact.php" class="btn" style="margin-top:0.75rem;">Contact Eclipse</a>
    </div>
  </section>

<?php include 'footer.php'; ?>
