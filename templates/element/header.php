<?php

/**
 * @var \App\View\AppView $this
 */
?>
<header>
    <div class="grid-container header-container">
        <div class="mobile-grid-50 tablet-grid-50 grid-50" id="header-logo">
            <?= $this->Html->image('WG-School.png', [
                'alt' => 'Woldgate School',
                'class' => 'header-logo',
            ]) ?>
        </div>
        <div class="mobile-grid-50 tablet-grid-50 grid-50 dropdown" id="mobile-nav">
            <i class="fa fa-bars" id="hamburger-menu"></i>
        </div>

        <div class="mobile-grid-100 tablet-grid-100 grid-100 grid-parent" id="secondary-menu">
            <div class="mobile-grid-33 tablet-grid-33 grid-33">
                <h4>GCSEPOD <i class="fa-solid fa-chalkboard-user"></i></h4>
            </div>
            <div class="mobile-grid-33 tablet-grid-33 grid-33">
                <h4>Parents <i class="fa-solid fa-users" style="color:white"></i></h4>
            </div>
            <div class="mobile-grid-33 tablet-grid-33 grid-33">
                <h4>Contact <i class="fas fa-envelope"></i></h4>
                
            </div>
        </div>
        <?= $this->element('navigation'); ?>
        
    </div>
</header>
<?= $this->Html->script('navigation.js') ?>