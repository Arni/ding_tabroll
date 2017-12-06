<?php
/**
 * @file
 * This template defines the basic structure for the frontpage tabroll (with
 * support for responsive design.)
 *
 * @ingroup views_templates
 */
?>
<div class="frontpage-header">
    <div class="ding-tabroll-wrapper">
        <div id="ding-tabroll" class="big-frontpage-image-wrapper">
                <?php foreach ($rows as $id => $row): ?>
                  <div id="fragment-<?php print $id; ?>" class="ui-tabs-panel<?php if ($id >= "1") {
                  print " ui-tabs-hide";
                    } ?>">
                  <?php print $row; ?>
                  </div>
                <?php endforeach; ?>
        </div>
        <!-- Used for responsive -->
        <select class="ding-tabroll-select-tabs">
            <?php foreach ($view->result as $id => $result) : ?>
              <option class="tabroll-tabs-item"><?php print $result->node_title ?></option>
            <?php endforeach; ?>
        </select>

        <div class="frontpage-header-navigation">
            <div class="genre-list">
                <div class="frontpage-links-wrapper">
                    <div class="frontpage-links--first frontpage-links">
                        <h2><a href="/biblioteker">Åbningstider</a></h2>
                    </div>
                    <div class="frontpage-links--second frontpage-links">
                        <h2><a href="/selvbetjening">Selvbetjening</a></h2>
                    </div>
                    <div class="frontpage-links--third frontpage-links">
                        <h2><a href="/info/saadan-bliver-du-laaner">Bliv bruger</a></h2>
                    </div>
                    <div class="frontpage-links--fourth frontpage-links">
                        <h2><a href="/content/anbefalinger/online">Digitale Bibliotek</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


