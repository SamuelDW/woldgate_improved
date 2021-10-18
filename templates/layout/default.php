<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
$siteDescription = "Woldgate School and Sixth Form College, an Academy, is part of the
Wolds Learning Partnership, a charitable company limited by guarantee,
registered in England and Wales with Company Number: 10518602. 
Registered Office: 92 Kilnwick Road Pocklington, York YO42 2LL. "
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset(); ?>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Walker Studios">
        <meta name="description" content="<?= $siteDescription ?>">

        <title><?= $this->fetch('title'); ?></title>

        <?= $this->Html->css([
            'main'
        ]) ?>

        <?= $this->fetch('css') ?>
        <script src="https://kit.fontawesome.com/dbca3d3ac0.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?= $this->element('header'); ?>
    </body>
</html>