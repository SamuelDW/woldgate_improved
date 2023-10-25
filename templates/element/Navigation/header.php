<?php

declare(strict_types=1);
/**
 * @var \App\View\AppView $this
 */
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
            <div class="hamburger" tabindex="0">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <nav aria-hidden="true" aria-expanded="false">
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
                    <li tabindex="0" role="menuitem">Headteacher's Welcome</li>
                    <li tabindex="0">Statutory Information</li>
                </ul>
            </ul>

            <ul class="menu-item" role="menubar" aria-haspopup="true">
                <li tabindex="0" role="menuitem">News</li>
                <ul class="menu-dropdown" role="menu" aria-expanded="false">
                    <li tabindex="0" role="menuitem">Headteacher's Welcome</li>
                    <li tabindex="0">Statutory Information</li>
                </ul>
            </ul>

            <ul class="menu-item" role="menubar" aria-haspopup="true">
                <li tabindex="0" role="menuitem">Contact Us</li>
                <ul class="menu-dropdown" role="menu" aria-expanded="false">
                    <li tabindex="0" role="menuitem">Headteacher's Welcome</li>
                    <li tabindex="0">Statutory Information</li>
                </ul>
            </ul>
        </nav>
    </div>
</header>

<script>
    const menuItems = document.querySelectorAll('[role="menubar"')
    const hamburger = document.querySelector('.hamburger')
    const navigationMenu = document.querySelector('nav')

    hamburger.addEventListener('click', () => {
        const isVisible = navigationMenu.getAttribute('aria-hidden') != 'false'
        const isExpanded = navigationMenu.getAttribute('aria-expanded') == 'false'
        navigationMenu.setAttribute('aria-hidden', isVisible ? 'false' : 'true')
        navigationMenu.setAttribute('aria-expanded', isExpanded ? 'true' : 'false')
    })

    hamburger.addEventListener('keydown', (e) => {
        if (e.key !== 'Enter') return
        
        const isVisible = navigationMenu.getAttribute('aria-hidden') != 'false'
        const isExpanded = navigationMenu.getAttribute('aria-expanded') == 'false'
        navigationMenu.setAttribute('aria-hidden', isVisible ? 'false' : 'true')
        navigationMenu.setAttribute('aria-expanded', isExpanded ? 'true' : 'false')
    })

    menuItems.forEach(menuItem => {
        menuItem.addEventListener('click', () => {
            const dropdown = menuItem.querySelector('ul')
            const isExpanded = dropdown.getAttribute('aria-expanded') != 'false'
            dropdown.setAttribute('aria-expanded', isExpanded ? 'false' : 'true')
        })

        menuItem.addEventListener('keydown', (e) => {
            if (e.key !== 'Enter') return
            const dropdown = menuItem.querySelector('ul')
            const isExpanded = dropdown.getAttribute('aria-expanded') != 'false'
            dropdown.setAttribute('aria-expanded', isExpanded ? 'false' : 'true')
        })
    })
</script>