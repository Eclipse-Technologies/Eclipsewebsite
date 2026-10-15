<?php
$currentPage = basename($_SERVER['PHP_SELF']);
require_once __DIR__ . '/guides-data.php';
?>
<header class="site-header">
  <div class="nav-wrap">
    <a class="brand" href="index.php">
      <img src="Eclipselogo2026.png" alt="Eclipse Water Technologies Logo" class="logo" />
    </a>
    <button class="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
    <nav id="main-nav">
      <ul class="nav">
        <li><a href="about.php"<?php if ($currentPage === 'about.php') echo ' class="active"'; ?>>About</a></li>
        <li><a href="services.php"<?php if ($currentPage === 'services.php') echo ' class="active"'; ?>>Services</a></li>
        <li><a href="industries.php"<?php if ($currentPage === 'industries.php') echo ' class="active"'; ?>>Industries</a></li>
        <li><a href="specs.php"<?php if ($currentPage === 'specs.php') echo ' class="active"'; ?>>Technical Specs</a></li>
        <li><a href="sdi-tank-sizing.php"<?php if ($currentPage === 'sdi-tank-sizing.php') echo ' class="active"'; ?>>Tank Sizing</a></li>
        <li><a href="case-studies.php"<?php if ($currentPage === 'case-studies.php') echo ' class="active"'; ?>>Case Studies</a></li>
        <li class="has-menu">
          <a href="resources.php"<?php if ($currentPage === 'resources.php') echo ' class="active"'; ?>>Resources</a>
          <button type="button" class="menu-toggle" aria-label="Show resources menu" aria-expanded="false" aria-controls="resources-menu"><span aria-hidden="true">&#9662;</span></button>
          <div class="mega-menu" id="resources-menu">
            <?php foreach ($guideCategories as $catKey => $catLabel):
              if ($catKey === 'services') continue; ?>
            <div class="mega-col">
              <a class="mega-head" href="resources.php#<?php echo guideSafe($catKey); ?>"><?php echo guideSafe($catLabel); ?></a>
              <ul>
                <?php foreach ($guides as $g): if ($g['cat'] !== $catKey) continue; ?>
                <li><a href="<?php echo guideSafe($g['url']); ?>"><?php echo guideSafe($g['title']); ?></a></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <?php endforeach; ?>
            <a class="mega-all" href="resources.php">Browse all resources &rarr;</a>
          </div>
        </li>
        <li><a href="contact.php" class="btn btn-small<?php if ($currentPage === 'contact.php') echo ' active'; ?>">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>
<script>
  (function() {
    var toggle = document.querySelector('.nav-toggle');
    if (toggle) {
      toggle.addEventListener('click', function() {
        var nav = document.getElementById('main-nav');
        var expanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', String(!expanded));
        nav.classList.toggle('open');
        this.classList.toggle('open');
      });
    }
    var menuToggle = document.querySelector('.menu-toggle');
    if (menuToggle) {
      var item = menuToggle.parentNode;
      menuToggle.addEventListener('click', function(e) {
        e.stopPropagation();
        var open = item.classList.toggle('menu-open');
        this.setAttribute('aria-expanded', String(open));
      });
      document.addEventListener('click', function(e) {
        if (!item.contains(e.target)) {
          item.classList.remove('menu-open');
          menuToggle.setAttribute('aria-expanded', 'false');
          if (item.contains(document.activeElement)) document.activeElement.blur();
        }
      });
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
          item.classList.remove('menu-open');
          menuToggle.setAttribute('aria-expanded', 'false');
          if (item.contains(document.activeElement)) document.activeElement.blur();
        }
      });
    }
  })();
</script>
