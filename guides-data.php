<?php
// Single source of truth for guides: drives the navbar dropdown, the
// resources hub filters, and the rotating "Featured guides" row on the home page.
// To add a guide, append one entry. Set 'featured' => true to include it in the home rotation.
$guideCategories = [
    'technology' => 'Technology',
    'ro'         => 'Reverse Osmosis',
    'tools'      => 'Tools & Specs',
    'industry'   => 'Industries',
    'services'   => 'Services',
    'cost'       => 'Cost & Contracts',
];

$guides = [
    ['title' => 'Mixed-Bed vs. Two-Bed Deionization', 'cat' => 'technology', 'url' => 'mixed-bed-vs-two-bed-deionization.php', 'cta' => 'Read the white paper',
     'desc' => 'One mixed-bed tank or a cation + anion pair? Purity, tanks regenerated per cycle, capacity and cost impact.', 'featured' => true],
    ['title' => 'How Service Deionization Works', 'cat' => 'technology', 'url' => 'how-sdi-works.php', 'cta' => 'Read the guide',
     'desc' => 'A plain-language explanation of ion exchange, mixed-bed resin, cation vs. anion resin, and what a tank exchange program looks like.', 'featured' => true],
    ['title' => 'What is Mixed-Bed Deionization?', 'cat' => 'technology', 'url' => 'what-is-mixed-bed-deionization.php', 'cta' => 'Read the explainer',
     'desc' => 'How cation and anion resin combine in a single tank to produce 1–18 MegOhm water, and when to use it.', 'featured' => false],
    ['title' => 'SDI vs RO: Which is Right for You?', 'cat' => 'technology', 'url' => 'sdi-vs-ro-canada.php', 'cta' => 'Compare the technologies',
     'desc' => 'Service deionization and reverse osmosis compared: when to use each, when to combine them, and how the costs compare.', 'featured' => true],
    ['title' => 'How Often Should SDI Tanks Be Regenerated?', 'cat' => 'technology', 'url' => 'sdi-tank-regeneration-frequency.php', 'cta' => 'Learn about service intervals',
     'desc' => 'The four factors that determine tank life, plus how to monitor and plan service intervals.', 'featured' => false],
    ['title' => 'SDI Troubleshooting', 'cat' => 'technology', 'url' => 'sdi-troubleshooting.php', 'cta' => 'Read the troubleshooting guide',
     'desc' => 'Diagnosing low resistivity, channeling and silica breakthrough: causes, identification and practical fixes.', 'featured' => false],

    ['title' => 'SDI Tank Sizing Calculator', 'cat' => 'tools', 'url' => 'sdi-tank-sizing.php', 'cta' => 'Open the calculator',
     'desc' => 'Enter flow rate, feed water TDS and target quality to get a tank size recommendation and engineering report.', 'featured' => true],
    ['title' => 'Technical Specifications', 'cat' => 'tools', 'url' => 'specs.php', 'cta' => 'View specs',
     'desc' => 'Tank models, capacities, flow rates, resin types and media options for Eclipse SDI tanks.', 'featured' => false],

    ['title' => 'Lab DI Water Systems Ontario', 'cat' => 'industry', 'url' => 'lab-di-water-systems-ontario.php', 'cta' => 'Lab water guide',
     'desc' => 'High-purity water for Ontario laboratories: resistivity targets, ASTM water grades and service-backed support.', 'featured' => false],
    ['title' => 'DI Water for Metal Finishing', 'cat' => 'industry', 'url' => 'metal-finishing-di-water-systems.php', 'cta' => 'Metal finishing guide',
     'desc' => 'Rinse water quality, spotting prevention and sizing guidance for plating and surface treatment.', 'featured' => false],
    ['title' => 'High Purity Water Systems Canada', 'cat' => 'industry', 'url' => 'high-purity-water-systems-canada.php', 'cta' => 'High purity guide',
     'desc' => 'Configuration, monitoring and service programs for tight conductivity and resistivity control.', 'featured' => false],
    ['title' => 'Hospital DI Water Systems Ontario', 'cat' => 'industry', 'url' => 'hospital-di-water-systems-ontario.php', 'cta' => 'Healthcare water guide',
     'desc' => 'DI water for sterilization, pharmacy compounding and other healthcare applications.', 'featured' => false],
    ['title' => 'DI Water for CNC & Machine Shops', 'cat' => 'industry', 'url' => 'cnc-machine-shop-di-water-ontario.php', 'cta' => 'CNC water guide',
     'desc' => 'Prevent scale in coolant lines, meet EDM resistivity specs and improve part washdown quality.', 'featured' => false],
    ['title' => 'DI Water for Food & Beverage', 'cat' => 'industry', 'url' => 'food-beverage-di-water-ontario.php', 'cta' => 'Food & beverage guide',
     'desc' => 'Prevent boiler scale, protect CIP systems and meet sanitation rinse water requirements.', 'featured' => false],
    ['title' => 'DI Water for Pharmaceutical & Biotech', 'cat' => 'industry', 'url' => 'pharmaceutical-di-water-ontario.php', 'cta' => 'Pharma & biotech guide',
     'desc' => 'USP Purified Water-grade DI for compounding, biotech research and analytical labs.', 'featured' => false],

    ['title' => 'DI Tank Exchange Service', 'cat' => 'services', 'url' => 'di-tank-exchange-service.php', 'cta' => 'Learn about the service',
     'desc' => 'How tank exchange works: scheduling, connections, monitoring and what to expect from a service program.', 'featured' => false],
    ['title' => 'Reverse Osmosis Service Canada', 'cat' => 'ro', 'url' => 'reverse-osmosis-service-canada.php', 'cta' => 'RO service',
     'desc' => 'RO CIP and membrane cleaning, chemical dosing, prefilters, pumps, replacement and troubleshooting for industrial and laboratory systems.', 'featured' => false],
    ['title' => 'RO Membrane Cleaning (CIP)', 'cat' => 'ro', 'url' => 'ro-membrane-cleaning-cip.php', 'cta' => 'Read the CIP guide',
     'desc' => 'Warning signs your RO needs cleaning, what usually causes them, and how we help restore performance.', 'featured' => true],
    ['title' => 'RO Chemicals: Antiscalant, SMBS & More', 'cat' => 'ro', 'url' => 'ro-chemicals-antiscalant-pretreatment.php', 'cta' => 'Read the chemicals guide',
     'desc' => 'Antiscalant, sodium metabisulfite and the other chemistry RO relies on, and where problems start.', 'featured' => false],
    ['title' => 'RO Troubleshooting & Maintenance', 'cat' => 'ro', 'url' => 'ro-troubleshooting-normalization.php', 'cta' => 'Read the troubleshooting guide',
     'desc' => 'Common RO symptoms, why they are easy to misread, and what preventive maintenance covers.', 'featured' => false],
    ['title' => 'Activated Carbon Filtration', 'cat' => 'services', 'url' => 'activated-carbon-filtration-service.php', 'cta' => 'Carbon filtration',
     'desc' => 'Chlorine removal, resin protection and pretreatment reliability upstream of your DI or RO system.', 'featured' => false],
    ['title' => 'Industrial Water Softener Service', 'cat' => 'services', 'url' => 'industrial-water-softener-service.php', 'cta' => 'Softener service',
     'desc' => 'Hardness control for boilers, wash systems and pretreatment, reducing DI resin exhaustion when used upstream.', 'featured' => false],

    ['title' => 'DI Water Service Pricing Guide', 'cat' => 'cost', 'url' => 'di-water-service-pricing.php', 'cta' => 'See pricing guide',
     'desc' => 'What drives SDI tank exchange cost in Ontario (tank size, feed TDS, service frequency) and how to calculate cost per litre.', 'featured' => true],
    ['title' => 'Hidden Contract Costs in Water Service', 'cat' => 'cost', 'url' => 'hidden-contract-costs-water-service.php', 'cta' => 'Read the guide',
     'desc' => 'Fees and terms to look for in a water service contract before you sign or renew.', 'featured' => true],
    ['title' => 'How to Cancel a Water Service Contract', 'cat' => 'cost', 'url' => 'how-to-cancel-water-service-contract.php', 'cta' => 'Read the guide',
     'desc' => 'A step-by-step approach to reviewing terms, giving notice and transitioning service.', 'featured' => false],
];

function guideSafe($s) { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

// Builds FAQPage JSON-LD from the same [question, answer] pairs used for the visible FAQ.
function faqSchemaScript(array $faqs) {
    $items = [];
    foreach ($faqs as $f) {
        $items[] = ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]];
    }
    return '<script type="application/ld+json">' . json_encode(
        ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $items],
        JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG
    ) . '</script>';
}
