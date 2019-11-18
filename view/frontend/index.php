<?php $title = ('Billet simple pour l\'Alaska - Accueil'); ?>

<?php ob_start(); ?>
<section class="homePage">
        <h2>Bienvenue</h2>
        <p>Eminuit autem inter humilia supergressa iam impotentia fines mediocrium delictorum nefanda Clematii cuiusdam Alexandrini Eminuit autem inter humilia supergressa iam impotentia fines mediocrium delictorum nefanda Clematii cuiusdam Alexandrini nobilis mors repentina; cuius socrus cum misceri sibi generum, flagrans eius amore, non impetraret, ut ferebatur, per palatii pseudothyrum introducta, oblato pretioso reginae monili id adsecuta est, ut ad Honoratum tum comitem orientis formula missa letali omnino scelere nullo contactus idem Clematius nec hiscere nec loqui permissus occideretur.</p>
    </section>
    <section class="liens">
        <div>
            <i class="fas fa-book-open"></i>
            <p>Chapitres</p>
        </div>
        <div>
            <i class="fas fa-user-tie"></i>
            <p>Auteur</p>
        </div>
        <div>
            <i class="fas fa-envelope-open"></i>
            <p>Contact</p>
        </div>
    </section>
<?php $content = ob_get_clean(); ?>
<?php require 'view/frontend/template.php'; ?>