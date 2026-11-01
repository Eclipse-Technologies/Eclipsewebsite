<?php
// header.php - Shared site header for Eclipse Water Technologies
// Basic error logging setup (logs to error_log in project root)
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/error_log');
// Optionally, hide errors from users in production
ini_set('display_errors', 0);
$canonicalPage = basename($_SERVER['PHP_SELF'] ?? 'index.php');
$canonicalUrl = $canonicalPage === 'index.php'
    ? 'https://eclipsewatertechnologies.com/'
    : 'https://eclipsewatertechnologies.com/' . rawurlencode($canonicalPage);
$hasCanonical = isset($pageExtraHead)
    && preg_match('/<link\b[^>]*\brel\s*=\s*(["\'])canonical\1/i', $pageExtraHead) === 1;

$siteUrl = 'https://eclipsewatertechnologies.com';
$orgId = $siteUrl . '/#organization';
$seoTitle = $pageTitle ?? 'Eclipse Water Technologies';
$seoDescription = $pageDescription ?? 'High-purity water systems, DI service, and technical support across Canada.';
$extraHead = $pageExtraHead ?? '';
$isNoindex = preg_match('/<meta\b[^>]*name\s*=\s*["\']robots["\'][^>]*noindex/i', $extraHead) === 1;
$hasOpenGraph = stripos($extraHead, 'og:title') !== false;
$hasTwitterCard = stripos($extraHead, 'twitter:card') !== false;

// Structured data shared by every page; pages can opt in to Service schema with $pageService = ['name' => ..., 'serviceType' => ...].
$schemas = [];
if ($canonicalPage !== 'index.php' && !$isNoindex) {
    $schemas[] = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => trim(explode(' | ', $seoTitle)[0]), 'item' => $canonicalUrl],
        ],
    ];
}
if (isset($pageService)) {
    $schemas[] = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => $pageService['name'],
        'serviceType' => $pageService['serviceType'],
        'description' => $seoDescription,
        'url' => $canonicalUrl,
        'provider' => ['@id' => $orgId],
        'areaServed' => [
            ['@type' => 'AdministrativeArea', 'name' => 'Ontario'],
            ['@type' => 'Country', 'name' => 'Canada'],
        ],
    ];
}
$webPageTypes = ['about.php' => 'AboutPage', 'contact.php' => 'ContactPage'];
if (isset($webPageTypes[$canonicalPage])) {
    $schemas[] = [
        '@context' => 'https://schema.org',
        '@type' => $webPageTypes[$canonicalPage],
        'name' => $seoTitle,
        'description' => $seoDescription,
        'url' => $canonicalUrl,
        'about' => ['@id' => $orgId],
    ];
}
?>
<!DOCTYPE html>
<html lang="en-CA">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Eclipse Water Technologies'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : 'High-purity water systems, DI service, and technical support across Canada.'; ?>">
    <link rel="icon" href="/Eclipselogo2026.png" type="image/png">
    <link rel="stylesheet" href="/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <?php if (!$hasCanonical): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <?php endif; ?>
    <?php if (!$hasOpenGraph): ?>
    <meta property="og:title" content="<?php echo htmlspecialchars($seoTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($seoDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?php echo $siteUrl; ?>/Eclipselogo2026.png">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_CA">
    <?php endif; ?>
    <?php if (!$hasTwitterCard): ?>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($seoTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($seoDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="<?php echo $siteUrl; ?>/Eclipselogo2026.png">
    <meta name="twitter:site" content="@EclipseWaterTech">
    <?php endif; ?>
    <?php if (isset($pageExtraHead)) echo $pageExtraHead; ?>
    <?php foreach ($schemas as $schema): ?>
    <script type="application/ld+json"><?php echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG); ?></script>
    <?php endforeach; ?>
</head>
<body>
<a class="skip-link" href="#main-content">Skip to main content</a>
<?php include 'navbar.php'; ?>
<main id="main-content">
