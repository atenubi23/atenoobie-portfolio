<?php
function renderFaqAccordion(array $faqs, string $idPrefix): void {
    echo '<div class="accordion faq-accordion" id="'.$idPrefix.'">';
    foreach ($faqs as $i => $faq) {
        $itemId = $idPrefix.'-item-'.$i;
        $expanded = $i === 0 ? 'true' : 'false';
        $show = $i === 0 ? 'show' : '';
        ?>
        <div class="accordion-item">
          <h3 class="accordion-header">
            <button class="accordion-button <?= $i === 0 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $itemId ?>" aria-expanded="<?= $expanded ?>">
              <?= htmlspecialchars($faq['q']) ?>
            </button>
          </h3>
          <div id="<?= $itemId ?>" class="accordion-collapse collapse <?= $show ?>" data-bs-parent="#<?= $idPrefix ?>">
            <div class="accordion-body"><?= htmlspecialchars($faq['a']) ?></div>
          </div>
        </div>
        <?php
    }
    echo '</div>';
}

function renderCta(string $heading, string $text, string $btnText, string $btnHref): void {
    ?>
    <div class="cta-band">
      <div>
        <h2><?= htmlspecialchars($heading) ?></h2>
        <p><?= htmlspecialchars($text) ?></p>
      </div>
      <a href="<?= htmlspecialchars($btnHref) ?>" class="btn btn-amber btn-lg flex-shrink-0"><?= htmlspecialchars($btnText) ?></a>
    </div>
    <?php
}
