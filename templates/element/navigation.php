<div class="mobile-grid-100 tablet-grid-100 grid-100 grid-parent">
    <nav id="myDropdown" class="dropdown-content">
        <div class="mobile-grid-90 tablet-grid-90 grid-90 mobile-prefix-5 tablet-prefix-5 prefix-5 nav-link">
            <i class="fa-solid fa-school link-icon nav-header"></i>
            <?= $this->Html->link(
                 ' Home',
                [
                    'prefix' => false,
                    'controller' => 'Woldgate',
                    '_full' => false,
                ]) 
            ?>
        </div>
        <div class="mobile-grid-90 tablet-grid-50 grid-20 mobile-prefix-5 nav-link">
            <h3 class="nav-header">Parents</h3>
            <?= $this->Html->link('School Meals', [
                        'prefix' => false,
                        'controller' => 'Woldgate',
                        '_full' => false,
                    ]) ?>
            <?= $this->Html->link('School Uniform', [
                'prefix' => false,
                'controller' => 'Woldgate',
                '_full' => false,
                ]) ?>
            <?= $this->Html->link('Holidays', [
                        'prefix' => false,
                        'controller' => 'Woldgate',
                        '_full' => false,
                ]) ?>
            <?= $this->Html->link('Abscences', [
                    'prefix' => false,
                    'controller' => 'Woldgate',
                    '_full' => false,
                ]) ?>
            <?= $this->Html->link('Travel', [
                    'prefix' => false,
                    'controller' => 'Woldgate',
                    '_full' => false,
                ]) ?>
        </div>
        <div class="mobile-grid-90 tablet-grid-50 grid-20 mobile-prefix-5 nav-link">
            <h3 class="nav-header">School</h3>
            <?= $this->Html->link(
                    'School',
                    [
                        'prefix' => false,
                        'controller' => 'Woldgate',
                        '_full' => false,
                    ]) 
            ?>
        </div>
        <div class="mobile-grid-90 tablet-grid-50 grid-20 mobile-prefix-5 nav-link">
            <h3 class="nav-header">Sixth Form</h3>
            <?= $this->Html->link(
                    'Sixth Form',
                    [
                        'prefix' => false,
                        'controller' => 'Woldgate',
                        '_full' => false,
                    ]) 
            ?>
        </div>
        <div class="mobile-grid-90 tablet-grid-50 grid-20 mobile-prefix-5 nav-link">
            <h3 class="nav-header">News</h3>
            <?= $this->Html->link(
                    'News',
                    [
                        'prefix' => false,
                        'controller' => 'Woldgate',
                        '_full' => false,
                    ])
            ?>
        </div>
        <div class="mobile-grid-90  tablet-grid-50 grid-20 mobile-prefix-5 nav-link">
            <h3 class="nav-header">Contact</h3>
            <?= $this->Html->link(
                    'Contact',
                    [
                        'prefix' => false,
                        'controller' => 'Woldgate',
                        '_full' => false,
                    ]) 
            ?>
        </div>
    </nav>
</div>