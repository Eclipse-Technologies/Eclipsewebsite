<?php
require_once __DIR__ . '/guides-data.php';
$pageTitle = 'Commercial & Industrial Reverse Osmosis Systems: Planning Guide | Eclipse Water Technologies';
$pageDescription = 'A practical guide to evaluating commercial and industrial reverse osmosis systems: water analysis, capacity, pretreatment, recovery, downstream treatment, lifecycle costs, and service planning.';
$faqs = [
  ['What is a commercial or industrial reverse osmosis system?', 'It is a membrane treatment system used to reduce dissolved constituents in water for a defined commercial, institutional, or industrial application. System design depends on feed-water quality, required permeate quality, demand, recovery goals, and the treatment train around it.'],
  ['How do I size an industrial RO system?', 'Start with the required permeate volume and the pattern of demand, including average and peak use, operating hours, storage, and expected future changes. A water analysis and process requirements are also needed before selecting a configuration.'],
  ['Does reverse osmosis replace pretreatment?', 'Usually not. Feed-water analysis and system design determine whether filtration, softening, dechlorination, chemical treatment, or other pretreatment is required to protect membranes and achieve reliable operation.'],
  ['Does RO water need further treatment?', 'That depends on the end use. Some processes use RO permeate directly; others need additional polishing, such as deionization, or specific post-treatment, storage, and distribution controls. Define the required water quality before selecting equipment.'],
  ['Does Eclipse service residential RO systems?', 'No. Eclipse focuses on industrial, commercial, and institutional process-water and high-purity systems, not under-sink, countertop, or whole-home drinking-water RO.'],
  ['What information should I prepare for an RO project discussion?', 'Provide the facility location, application, feed-water source and analysis, required water quality, average and peak demand, operating schedule, existing equipment, and any constraints on space, utilities, concentrate disposal, or maintenance.']
];
$pageExtraHead = <<<'EXTRAHEAD'
  <link rel="canonical" href="https://eclipsewatertechnologies.com/industrial-ro-system-planning.php" />
  <meta property="og:title" content="Commercial & Industrial Reverse Osmosis Systems: Planning Guide" />
  <meta property="og:description" content="How to evaluate feed water, capacity, pretreatment, recovery, downstream treatment, lifecycle cost, and service for a commercial or industrial RO system." />
  <meta property="og:image" content="https://eclipsewatertechnologies.com/Eclipselogo2026.png" />
  <meta property="og:url" content="https://eclipsewatertechnologies.com/industrial-ro-system-planning.php" />
  <meta property="og:type" content="article" />
  <meta property="og:locale" content="en_CA" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Commercial & Industrial RO System Planning Guide" />
  <meta name="twitter:description" content="A facility-focused guide to planning reverse osmosis for process water and high-purity applications. Not residential RO." />
  <meta name="twitter:image" content="https://eclipsewatertechnologies.com/Eclipselogo2026.png" />
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "@id": "https://eclipsewatertechnologies.com/industrial-ro-system-planning.php#article",
    "headline": "Commercial and Industrial Reverse Osmosis System Planning Guide",
    "description": "A practical guide to evaluating reverse osmosis systems for commercial, institutional, and industrial process-water applications.",
    "author": {
      "@type": "Organization",
      "@id": "https://eclipsewatertechnologies.com/#organization",
      "name": "Eclipse Water Technologies"
    },
    "publisher": {
      "@type": "Organization",
      "@id": "https://eclipsewatertechnologies.com/#organization",
      "name": "Eclipse Water Technologies"
    },
    "mainEntityOfPage": "https://eclipsewatertechnologies.com/industrial-ro-system-planning.php",
    "about": [
      { "@type": "Thing", "name": "Commercial reverse osmosis" },
      { "@type": "Thing", "name": "Industrial water treatment" }
    ]
  }
  </script>
EXTRAHEAD;
$pageExtraHead .= faqSchemaScript($faqs);
include 'header.php';
?>

<section class="hero hero-sub">
  <div class="section-inner">
    <h1>Commercial &amp; Industrial Reverse Osmosis System Planning</h1>
    <p>A facility-focused guide to evaluating RO for process water and high-purity applications—from feed-water analysis and system sizing to pretreatment, downstream treatment, and ongoing service.</p>
    <p><strong>For industrial, commercial, and institutional facilities.</strong> Eclipse does not serve residential under-sink, countertop, or whole-home RO systems.</p>
    <a href="contact.php" class="btn">Discuss an RO Project</a>
  </div>
</section>

<section class="container">
  <h2>Start with the water requirement, not a catalogue rating</h2>
  <p>A reverse osmosis system is selected for the water a facility needs to make and the conditions under which it must operate. A headline flow rate alone does not establish that a system will meet a site's demand or water-quality target. Begin by defining the end use, required permeate quality, daily volume, peak flow, operating hours, and acceptable interruption or storage.</p>
  <p>RO reduces many dissolved constituents by separating a permeate stream from a concentrate stream. Actual performance depends on feed-water composition, membrane selection, operating conditions, recovery, pretreatment, and system configuration. Water analysis and application requirements should inform the design.</p>
</section>

<section class="container cards">
  <article class="card">
    <h2>1. Define the application and quality target</h2>
    <p>Identify where the water goes and what the process needs. Boiler or utility feed, equipment rinsing, ingredient water, laboratory use, and pretreatment ahead of deionization can have different requirements. Set measurable quality criteria with the process owner before comparing equipment.</p>
  </article>
  <article class="card">
    <h2>2. Characterize feed water</h2>
    <p>Use a representative analysis and note seasonal or source changes. Relevant constituents and variability help determine membrane selection, pretreatment needs, scaling and fouling risks, and how performance should be monitored.</p>
  </article>
  <article class="card">
    <h2>3. Size for real demand</h2>
    <p>Review average and peak permeate demand, operating schedule, storage, recovery, and likely future changes. Confirm that pumps, controls, pretreatment, tanks, and downstream equipment can support the intended operating pattern.</p>
  </article>
  <article class="card">
    <h2>4. Design the treatment train</h2>
    <p>RO is often one stage in a larger system. Depending on the analysis and end use, the train may include particle filtration, softening, carbon or chemical treatment, storage, disinfection, or downstream polishing such as DI. Each stage should have a defined purpose.</p>
  </article>
  <article class="card">
    <h2>5. Plan concentrate and utilities</h2>
    <p>Review feed-water supply, electrical and physical requirements, concentrate flow and disposal, access for maintenance, and any site-specific operating constraints before selecting a configuration.</p>
  </article>
  <article class="card">
    <h2>6. Compare lifecycle requirements</h2>
    <p>Consider more than purchase price: energy, pretreatment consumables, chemicals, water recovery, concentrate handling, maintenance labour, cleaning, monitoring, and eventual membrane replacement all affect ownership cost. Use site-specific assumptions when comparing options.</p>
  </article>
</section>

<section class="container">
  <h2>Questions to ask when comparing RO proposals</h2>
  <ul>
    <li>What feed-water analysis and water-quality target does the proposal assume?</li>
    <li>What permeate capacity is expected under the site's actual feed and operating conditions?</li>
    <li>What pretreatment is included, and what risks does it address?</li>
    <li>How are recovery, concentrate flow, storage, and peak demand addressed?</li>
    <li>What instrumentation and routine readings are needed to monitor performance?</li>
    <li>What maintenance, chemical handling, cleaning, and replacement tasks should the facility plan for?</li>
    <li>Which items are included in the project scope, and which remain the facility's responsibility?</li>
  </ul>
  <p>Ask for assumptions to be documented. If two proposals use different feed-water data, demand profiles, or quality targets, their price and performance figures may not be directly comparable.</p>
</section>

<section class="container">
  <h2>New system planning and service for existing RO</h2>
  <p>If you are evaluating a new or upgraded system, begin with the application, water analysis, quality target, and demand profile. For an existing RO with falling output, rising pressure, or changing permeate quality, begin with operating data and maintenance history; cleaning or replacement should not be assumed before the cause is assessed.</p>
  <ul>
    <li><a href="industrial-reverse-osmosis-systems.php">Industrial RO system engineering, supply, installation, start-up, and maintenance</a> for new and upgraded facility systems</li>
    <li><a href="reverse-osmosis-service-canada.php">Industrial and commercial RO service</a> for existing process-water and high-purity systems</li>
    <li><a href="ro-troubleshooting-normalization.php">RO troubleshooting and maintenance</a></li>
    <li><a href="ro-membrane-cleaning-cip.php">RO membrane cleaning (CIP)</a></li>
    <li><a href="ro-chemicals-antiscalant-pretreatment.php">RO pretreatment and chemical considerations</a></li>
    <li><a href="sdi-vs-ro-canada.php">Compare RO and service deionization</a></li>
  </ul>
  <p>Project scope and available service depend on the application and facility. Contact Eclipse with the project details to discuss the appropriate next step.</p>
  <a href="contact.php" class="btn">Discuss Your Facility's RO Requirements</a>
</section>

<section class="container">
  <h2>Frequently asked questions</h2>
  <div class="cards">
    <?php foreach ($faqs as $f): ?>
    <article class="card"><p><strong><?php echo guideSafe($f[0]); ?></strong><br><?php echo guideSafe($f[1]); ?></p></article>
    <?php endforeach; ?>
  </div>
</section>

<?php include 'footer.php'; ?>
