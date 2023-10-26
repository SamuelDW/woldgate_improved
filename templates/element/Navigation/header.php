<?php

declare(strict_types=1);
/**
 * @var \App\View\AppView $this
 */

 $isDesktop = ($this->getRequest()->is('mobile') || $this->getRequest()->is('tablet'));
?>
<header class="site-header">
    <ul>
        <li>
            <?= $this->Html->link('GCSEPOD', 'https://www.gcsepod.com/', [
                'aria-label' => 'Visit GCSE Pod for help with your learning and revision',
                'target' => '_blank',
            ]) ?>
        </li>
        <li>
            <?= $this->Html->link('Email', 'https://outlook.office.com/', [
                'aria-label' => 'Go To Microsoft Outlook',
                'target' => '_blank',
            ]) ?>
        </li>
        <li>
            <?= $this->Html->linkFromPath('School', 'Woldgate::index', [
                'aria-label' => 'See more information on our school',
            ]) ?>
        </li>
        <li>
            <?= $this->Html->linkFromPath('Sixth Form', 'Woldgate::index', [
                'aria-label' => 'See more information on our Sixth Form',
            ]) ?>
        </li>
    </ul>
    <div class="search">
        <?= $this->Form->create(null, [
            'role' => 'search',
            'aria-label' => 'Site Search'
        ]) ?>
            <?= $this->Form->search('Search', [
                'label' => false,
                'placeholder' => 'Search...',
                'class' => 'site-search'
            ]) ?>
            <?= $this->Form->button('Search', [
                'class' => 'submit',
            ]) ?>
        <?= $this->Form->end() ?>
        
    </div>
    <div class="header-border"></div>

    <div class="navigation-wrapper">
        <figure>
            <?= $this->Html->image('WG-School.png', [
                'alt' => 'Woldgate School and Sixth Form Logo'
            ]) ?>
        </figure>
        
        <div class="navigation-icon">
            <div class="hamburger" tabindex="0" role="button"   aria-label="Open Menu" aria-controls="menu">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <nav aria-hidden="<?= $isDesktop ? 'true' : 'false' ?>" aria-expanded="false" id="menu">
            <ul class="menu-item" role="menubar" aria-haspopup="true">
                <li tabindex="0" role="menuitem">About Us</li>
                <ul class="menu-dropdown" role="menu" aria-expanded="false">
                    <li tabindex="0" role="menuitem">Headteacher's Welcome</li>
                    <li tabindex="0">Statutory Information</li>
                </ul>
            </ul>

            <ul class="menu-item" role="menubar" aria-haspopup="true">
                <li tabindex="0" role="menuitem">School</li>
                <ul class="menu-dropdown" role="menu" aria-expanded="false">
                    <li tabindex="0" role="menuitem">Headteacher's Welcome</li>
                    <li tabindex="0">Statutory Information</li>
                </ul>
            </ul>

            <ul class="menu-item" role="menubar" aria-haspopup="true">
                <li tabindex="0" role="menuitem">Sixth Form</li>
                <ul class="menu-dropdown" role="menu" aria-expanded="false">
                    <li tabindex="0" role="menuitem">Headteacher's Welcome</li>
                    <li tabindex="0">Statutory Information</li>
                </ul>
            </ul>

            <ul class="menu-item" role="menubar" aria-haspopup="true">
                <li tabindex="0" role="menuitem">Curriculum</li>
                <ul class="menu-dropdown" role="menu" aria-expanded="false">
                    <li tabindex="0" role="menuitem">Our Curriculum</li>
                    <li tabindex="0" role="menuitem">Careers</li>
                </ul>
            </ul>

            <ul class="menu-item" role="menubar" aria-haspopup="true">
                <li tabindex="0" role="menuitem">News</li>
            </ul>

            <ul class="menu-item" role="menubar" aria-haspopup="true">
                <li tabindex="0" role="menuitem">Contact Us</li>
            </ul>
        </nav>
    </div>
</header>