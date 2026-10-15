<?php
session_start();
$ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
if ($ref !== '' && strpos($ref, 'contact.php') === false && strpos($ref, 'submit-contact') === false) {
    $_SESSION['quote_from'] = substr($ref, 0, 300);
}
$serviceOptions = ['DI tank exchange', 'DI water service', 'Reverse osmosis (RO)', 'Water softener', 'Carbon filtration', 'Equipment / system purchase', 'Other / not sure'];
$pageTitle = 'Industrial Water Treatment Contact Ontario | Eclipse Water Technologies';
$pageDescription = 'Contact Eclipse Water Technologies for industrial water treatment, deionized water service, reverse osmosis, and process water solutions across Ontario and Toronto.';
include 'header.php';

// Handle form feedback
$errors = isset($_SESSION['contact_errors']) ? $_SESSION['contact_errors'] : [];
$success = isset($_SESSION['contact_success']) ? $_SESSION['contact_success'] : false;
$old = isset($_SESSION['contact_post']) ? $_SESSION['contact_post'] : [];
unset($_SESSION['contact_errors'], $_SESSION['contact_success'], $_SESSION['contact_post']);
?>

  <section class="container contact-info">
    <h1>Contact Eclipse Water Technologies</h1>
    <h2>Industrial Water Treatment &amp; Deionized Water Service in Ontario</h2>
    <p><strong>Phone:</strong> <a href="tel:+16473550944">647-355-0944</a></p>
    <p><strong>Email:</strong> <a href="mailto:rlee@eclipsewatertechnologies.com">rlee@eclipsewatertechnologies.com</a></p>
    <p><strong>Location:</strong> Toronto, Ontario, Canada</p>
    <p><strong>Title:</strong> Certified Engineering Technologist &amp; Project Management Professional</p>
    <p>Need a local water treatment partner for industrial, laboratory, or healthcare operations in Ontario? We can help reduce downtime, improve system reliability, and lower exposure to cross-border delays and tariff-driven cost spikes.</p>
  </section>


  <section class="container contact-grid">
    <div>
      <h2>Send Us a Message</h2>
      <?php if ($errors): ?>
        <div class="form-errors" style="color:#b30000;background:#ffeaea;padding:0.8em 1em;border-radius:6px;margin-bottom:1em;">
          <ul style="margin:0;padding-left:1.2em;">
            <?php foreach ($errors as $err): ?><li><?= htmlspecialchars($err) ?></li><?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>
      <?php if ($success): ?>
        <div class="form-success" style="color:#006b2e;background:#eaffea;padding:0.8em 1em;border-radius:6px;margin-bottom:1em;">
          Thank you! Your message has been sent.
        </div>
      <?php endif; ?>
      <form class="form" action="submit-contact.php" method="POST">
        <label for="contact-name">Your Name</label>
        <input id="contact-name" type="text" name="name" placeholder="Your Name" required value="<?= isset($old['name']) ? htmlspecialchars($old['name']) : '' ?>" />
        <label for="contact-email">Your Email</label>
        <input id="contact-email" type="email" name="email" placeholder="Your Email" required value="<?= isset($old['email']) ? htmlspecialchars($old['email']) : '' ?>" />
        <label for="contact-company">Company <span style="font-weight:400;color:#666;">(optional)</span></label>
        <input id="contact-company" type="text" name="company" placeholder="Company (optional)" value="<?= isset($old['company']) ? htmlspecialchars($old['company']) : '' ?>" />
        <label for="contact-phone">Phone <span style="font-weight:400;color:#666;">(optional)</span></label>
        <input id="contact-phone" type="tel" name="phone" placeholder="Phone (optional)" value="<?= isset($old['phone']) ? htmlspecialchars($old['phone']) : '' ?>" />
        <label for="contact-service">What do you need?</label>
        <select id="contact-service" name="service">
          <option value="">Select a service (optional)</option>
          <?php foreach ($serviceOptions as $opt): ?>
            <option value="<?= htmlspecialchars($opt) ?>"<?= (isset($old['service']) && $old['service'] === $opt) ? ' selected' : '' ?>><?= htmlspecialchars($opt) ?></option>
          <?php endforeach; ?>
        </select>
        <label for="contact-message">Your Message</label>
        <textarea id="contact-message" name="message" rows="5" placeholder="Your Message" required><?= isset($old['message']) ? htmlspecialchars($old['message']) : '' ?></textarea>
        <button class="btn" type="submit">Request a Quote</button>
      </form>
    </div>
    <div class="highlight">
      <h3>Why Eclipse?</h3>
      <ul class="checklist">
        <li>Canadian-based, no U.S. tariffs</li>
        <li>Stable pricing and dependable supply</li>
        <li>Expert service and support</li>
      </ul>
    </div>
  </section>

  <section class="container cards">
    <article class="card">
      <h3>Compare Local Service Models</h3>
      <p>If you are reviewing a cross-border service model, we can help identify where local support may reduce freight exposure, response risk, and hidden operating cost.</p>
      <ul class="bullets">
        <li><a class="link" href="local-di-service-cost-savings-ontario.php">General local DI service cost comparison</a></li>
        <li><a class="link" href="local-laboratory-water-service-cost-savings-ontario.php">Laboratory water service cost comparison</a></li>
        <li><a class="link" href="local-hospital-water-service-cost-savings-ontario.php">Hospital water service cost comparison</a></li>
        <li><a class="link" href="local-manufacturing-water-service-cost-savings-ontario.php">Manufacturing water service cost comparison</a></li>
      </ul>
    </article>
    <article class="card">
      <h3>Hidden Costs in Your Water Service Contract</h3>
      <p>Your contract likely includes fees you haven't discovered yet — cross-border freight surcharges, customs administration, emergency premiums, currency exposure, and per-delivery charges that add up fast.</p>
      <a class="link" href="hidden-contract-costs-water-service.php">Learn what you're really paying for water service →</a>
    </article>
  </section>

<?php include 'footer.php'; ?>
</html>
