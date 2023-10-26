<?php

declare(strict_types=1);
/**
 * @var \App\View\AppView $this
 */
?>
<figure>
        <?= $this->Html->image('wg-footer.png', [
            'alt' => 'Banner Image of trees on a field of wheat',
        ]) ?>
    </figure>
<footer>
    <figure>
        <?= $this->Html->image('wg-footer-logo.png', [
            'alt' => 'Woldgate School Logo',
        ]) ?>
    </figure>

    <div class="footer-information">
        <section role="complementary" aria-label="Information on Woldgate School">
            <h2>Information</h2>
            <ul>
                <li>Admissions</li>
                <li>Careers</li>
                <li>Safeguarding</li>
                <li>Contact</li>
                <li>Accessible</li>
            </ul>
        </section>

        <section role="complementary" aria-label="Useful links for parents and carers.">
            <h2>Parent Links</h2>
            <ul>
                <li>Travel Information</li>
                <li>Term Dates</li>
                <li>Friends of Woldgate School</li>
                <li>Online Payments</li>
                <li>Uniform & Equipment</li>
            </ul>

        </section>

        <section role="complementary">
            <h2>Woldgate</h2>
            <ul>
                <li>Prospectus</li>
                <li>Governing Body</li>
                <li>Ethos</li>
                <li>Sixth Form</li>
                <li>Calendar</li>
                <li>School Calendar</li>
            </ul>
        </section>

        <figure>
            <?= $this->Html->image('wg-awards.png', [
                'alt' => 'Woldgate School Logo',
            ]) ?>
        </figure>
    </div>

    <ul class="useful-links">
        <li>Sen</li>
        <li>Life at Woldgate School</li>
        <li>Year 6 Transition</li>
        <li>Letters to Parents/Carers</li>
    </ul>
    <p class="company-information">Woldgate School and Sixth Form College, an Academy, is part of the Wolds Learning Partnership, a charitable company limited by guarantee, registered in England and Wales with Company Number: 10518602. Registered Office: 92 Kilnwick Road Pocklington, York YO42 2LL. </p>

</footer>