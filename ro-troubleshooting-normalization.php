<?php
require_once __DIR__ . '/guides-data.php';
$pageTitle = 'RO Troubleshooting & Maintenance Ontario | Eclipse Water Technologies';
$pageDescription = 'RO output down, quality slipping or pressure rising? See common RO symptoms, why they are easy to misread, and how Eclipse troubleshooting and preventive maintenance can help.';
$faqs = [
  ['Why did my RO output drop?', 'Common reasons include fouling or scaling, a clogged cartridge filter, pretreatment problems, or simply colder feed water. Telling these apart takes proper review of your operating data.'],
  ['Why is my RO permeate quality getting worse?', 'It can be fouling, scaling, membrane damage from chlorine, or a mechanical leak. Each has a different fix, and cleaning will not solve a damaged membrane or leak.'],
  ['How long do RO membranes last?', 'It varies with feed water quality, pretreatment, and maintenance. Well-maintained systems can run for years, while neglected ones can fail much sooner.'],
  ['What does RO preventive maintenance include?', 'Typically regular data review, prefilter changes, chemical dosing checks, instrument calibration, pump and control checks, and planned cleaning or membrane replacement.']
];
$pageExtraHead = <<<'EXTRAHEAD'
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <meta name="author" content="Eclipse Water Technologies" />
  <link rel="canonical" href="https://eclipsewatertechnologies.com/ro-troubleshooting-normalization.php" />
  <meta property="og:title" content="RO Troubleshooting and Maintenance | Eclipse Water Technologies" />
  <meta property="og:description" content="Common RO symptoms, why they are easy to misread, and how Eclipse can help." />
  <meta property="og:image" content="https://eclipsewatertechnologies.com/Eclipselogo2026.png" />
  <meta property="og:url" content="https://eclipsewatertechnologies.com/ro-troubleshooting-normalization.php" />
  <meta property="og:type" content="article" />
  <meta property="og:locale" content="en_CA" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="RO Troubleshooting and Maintenance | Eclipse Water Technologies" />
  <meta name="twitter:description" content="Common RO symptoms and how Eclipse can help." />
  <meta name="twitter:image" content="https://eclipsewatertechnologies.com/Eclipselogo2026.png" />
  <meta name="twitter:site" content="@EclipseWaterTech" />
EXTRAHEAD;
$pageExtraHead .= faqSchemaScript($faqs);
include 'header.php';
?>

  <section class="hero hero-sub">
    <div class="section-inner">
      <h1>RO Troubleshooting and Maintenance</h1>
      <p>RO problems rarely announce their cause. We read your system's data, find the real issue, and keep it from coming back.</p>
      <a href="contact.php" class="btn">Request RO Support</a>
    </div>
  </section>

  <section class="container" style="margin-top:2rem;">
    <h2 style="font-family:'Montserrat',sans-serif;color:#003366;margin-bottom:1rem;">Common RO symptoms</h2>
    <div class="cards">
      <article class="card"><h3>Output is down</h3><p>Fouling, scaling, a clogged prefilter, or pretreatment issues.</p></article>
      <article class="card"><h3>Quality is slipping</h3><p>Membrane wear, chlorine damage, scaling, or a leak in the system.</p></article>
      <article class="card"><h3>Pressure is rising</h3><p>Deposits or biological growth building up in the membranes.</p></article>
      <article class="card"><h3>Pump or alarms trip</h3><p>Feed supply, interlocks, controls, or a worn pump.</p></article>
    </div>
  </section>

  <section class="container" style="margin-top:1.5rem;">
    <h2 style="font-family:'Montserrat',sans-serif;color:#003366;margin-bottom:1rem;">Why it is easy to misread</h2>
    <p style="margin-bottom:1rem;">Temperature, pressure, and feed water changes can look just like fouling, and different problems can show similar symptoms. Raw readings can mislead, so performance data is normally adjusted (normalized) to show what the membranes are really doing. Guessing wrong can mean wasted cleanings, damaged membranes, and more downtime.</p>
  </section>

  <section class="container" style="margin-top:1.5rem;">
    <h2 style="font-family:'Montserrat',sans-serif;color:#003366;margin-bottom:1rem;">What preventive maintenance covers</h2>
    <ul style="padding-left:1.2rem;">
      <li style="margin-bottom:0.4rem;">Regular performance review and trending</li>
      <li style="margin-bottom:0.4rem;">Cartridge filters and <a href="industrial-water-softener-service.php">softener</a> or <a href="activated-carbon-filtration-service.php">carbon</a> pretreatment</li>
      <li style="margin-bottom:0.4rem;">Chemical dosing checks (see <a href="ro-chemicals-antiscalant-pretreatment.php">RO chemicals</a>)</li>
      <li style="margin-bottom:0.4rem;">Pumps, controls, and instrument calibration</li>
      <li>Planned <a href="ro-membrane-cleaning-cip.php">cleaning</a> and membrane replacement</li>
    </ul>
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
      <h2>Want a second set of eyes on your RO?</h2>
      <p>Call <a href="tel:6473550944" style="color:inherit;font-weight:700;">647-355-0944</a> or send us your recent readings. We will tell you what is going on and what to do next.</p>
      <a href="contact.php" class="btn" style="margin-top:0.75rem;">Request RO Support</a>
      &nbsp;
      <a href="reverse-osmosis-service-canada.php" class="btn btn-outline" style="margin-top:0.75rem;background:transparent;color:var(--blue);border-color:var(--blue);">RO Service Overview</a>
    </div>
  </section>

<?php include 'footer.php'; ?>
