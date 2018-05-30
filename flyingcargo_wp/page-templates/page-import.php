<?php
    /* Template Name: Import */
?>

<?php get_header(); ?>

<!-- Page title section STARTS -->
<div class="page-title">
    <div class="container">
        <h1><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
            '[:rs]Uvoz[:][:en]Import[:]'
        )?></h1>
    </div>
</div>
<!-- Page title section ENDS -->

<!-- Content section STARTS -->
<section class="section section--regular">
    <div class="container">
        <h3><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
            '[:rs]Uvoz u Srbiju[:][:en]Importing to Serbia[:]'
        )?></h3>
        <p><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
            '[:rs]Očekujete pošiljku iz inostranstva a još uvek niste izabrali zastupnika u carinskom postupku? FedEx u Srbiji nudi Vam i uslugu uvoznog carinjenja. Iskustvo od preko 15 godina u Srbiji osiguralo nam je odlično poznavanje carinskih regulativa. Šta nas razlikuje od drugih:[:][:en]Do you expect shipment from abroad and you still haven’t chosen your Customs representative? FedEx in Serbia offers you an import customs clearance service. The experience of over 15 years in Serbia ensured us an excellent knowledge of customs regulations. What makes us different from other courier companies:[:]'
        )?></p>
        <ul class="text-list">
            <li><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                '[:rs]Dobro umrežen operativni sistem na globalnom nivou[:][:en]Great global network system [:]'
            )?></li>
            <li><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                '[:rs]Briga i pristupačnost Carinskog odeljenja[:][:en]Close communication and care of our Customs Department[:]'
            )?></li>
            <li><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                '[:rs]Mogućnost praćenja Vaših pošiljaka u svakom trenutku[:][:en]Real time shipment tracking at any moment[:]'
            )?></li>
            <li><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                '[:rs]Blagovremena obaveštenja o prispeću Vaših pošiljaka[:][:en]Timely notifications about arrival of your shipments[:]'
            )?></li>
            <li><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                '[:rs]Brzo i efikasno okončanje carinskih postupaka[:][:en]Fast and efficient customs clearance[:]'
            )?></li>
            <li><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                '[:rs]Isporuka „od vrata do vrata“[:][:en]Door-to-Door delivery[:]'
            )?></li>
        </ul>
    </div>
</section>
<!-- Content section ENDS -->

<!-- Import/export wizzard section START -->
<div class="section section--gray section--wizzard">
    <div class="container">
        <div class="import-wrapper import-wizzard-wrapper">
            <div id="import-wizzard"></div>
        </div>
    </div>
</div>
<div class="section section--blue p-0">
    <div class="import-wrapper import-wizzard-finish-wrapper">
        <div id="import-wizzard-finish"></div>
    </div>
</div>
<!-- Import/export wizzard section ENDS -->

<!-- FAQ section STARTS -->
<section class="section section--faq">
    <div class="container">
        <h3>FAQ</h3>
        <div class="collapsible-block-wrapper">
            <div class="collapsible-block__header d-flex align-items-center" data-toggle="collapse" href="#collapse1">
                <i class="mdi mdi-plus-circle small-icon mr-2"></i>
                <h4><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Zašto moram da popunjavam dokumentaciju za carinjenje pošiljke?[:][:en]Why do I have to fill in the documentation for customs clearance?[:]'
                )?></h4>
            </div>
            <div class="collapse collapsible-block" id="collapse1">
                <p><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Dokumentaciju za carinjenje popunjava lično primalac radi verodostojnosti podataka koji se navode kroz izjave i prilaže istu pod punom odgovornošću.[:][:en]The customs clearance documentation is filled by the consignee for the authenticity of the information in the statements and attached to it under full responsibility.[:]'
                )?></p>
            </div>
        </div>
        <div class="collapsible-block-wrapper">
            <div class="collapsible-block__header d-flex align-items-center" data-toggle="collapse" href="#collapse2">
                <i class="mdi mdi-plus-circle small-icon mr-2"></i>
                <h4><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Zašto se naplaćuju troškovi zastupanja u procesu carinjenja?[:][:en]Why do I have to pay customs clearance service?[:]'
                )?></h4>
            </div>
            <div class="collapse collapsible-block" id="collapse2">
                <p><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Troškovi koji nastaju prilikom redovnog carinjenja pošiljke su troškovi carinskog zastupanja u procesu samog carinjenja robe. Carinski zastupnici naše kompanije u procesu carinjenja pošiljke izrađuju deklaraciju sa kojom vrše carinjenje pošiljke.[:][:en]The costs incurred during the formal entry are the costs of customs representation during the process of the customs clearance itself. Customs Agent in FedEx Serbia has to create a Bill of entry (customs declaration) with which he carries out customs clearance of the shipment.[:]'
                )?></p>
            </div>
        </div>
        <div class="collapsible-block-wrapper">
            <div class="collapsible-block__header d-flex align-items-center" data-toggle="collapse" href="#collapse3">
                <i class="mdi mdi-plus-circle small-icon mr-2"></i>
                <h4><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Zašto se naplaćuju usluge zastupanja u carinskom postupku, ako sam pošiljku platio ino-pošiljaocu po sistemu isporuke „od vrata do vrata“?[:][:en]Why am I charged for customs clearance procedure if I paid the shipment to sender via door-to-door service?[:]'
                )?></h4>
            </div>
            <div class="collapse collapsible-block" id="collapse3">
                <p><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Isporuka “od vrata do vrata“ podrazumeva da se nakon carinskog postupanja sa pošiljkom roba isporuči na adresu primaoca, ali nije oslobođena uvoznih procedura i dažbina.[:][:en]Door-to-door  delivery means that, after customs clearance is completed (if required), shipment will be delivered  to recipient´s address, but it is not exempted from import procedures and fees.[:]'
                )?></p>
            </div>
        </div>
        <div class="collapsible-block-wrapper">
            <div class="collapsible-block__header d-flex align-items-center" data-toggle="collapse" href="#collapse4">
                <i class="mdi mdi-plus-circle small-icon mr-2"></i>
                <h4><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Zašto troškovi transporta, osiguranja i ostali troškovi koji su naznačeni na fakturi ulaze u carinsku i poresku osnovicu?[:][:en]Why do transportation charges, insurance and other costs indicated on the invoice enter the customs and tax base?[:]'
                )?></h4>
            </div>
            <div class="collapse collapsible-block" id="collapse4">
                <p><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Svi troškovi koji  su iskazani na profakturi ili fakturi koju šalje ino pošiljalac ulaze u obračun carinskog duga po zakonu Republike Srbije.[:][:en]All costs that are stated on the invoice issued by sender are included in the calculation of the customs debt under the law of the Republic of Serbia.[:]'
                )?></p>
            </div>
        </div>
        <div class="collapsible-block-wrapper">
            <div class="collapsible-block__header d-flex align-items-center" data-toggle="collapse" href="#collapse5">
                <i class="mdi mdi-plus-circle small-icon mr-2"></i>
                <h4><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Zbog čega je cena carine I PDV veća od vrednosti robe koju sam poručio preko interneta?[:][:en]Why is the price of customs and VAT greater than he value of the goods I have ordered on  the internet?[:]'
                )?></h4>
            </div>
            <div class="collapse collapsible-block" id="collapse5">
                <p><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Jedan od razloga koji može dovesti do toga da iznos dažbina bude veći nego vrednost robe, jeste slučaj kada pristigla roba podleže naplati carine I PDV-a, a u carinsku osnovicu uđe I trošak poštarine. Usluge brze pošte, odnosno ekspresnih kurirskih službi čije pošiljke imaju prioritetni status, skuplje su u odnosu na običnu poštu, a samim tim I carinska osnovica može biti podignuta. Ova informacija istaknuta je I na sajtu Uprave Carine.[:][:en]One of the reason that can lead to the amount of import fees being greater than the value of the goods is when the formal entry is required and received goods are subject to duties and taxes. Express courier services whose shipments have a priority status are more expensive than regular post, and therefore customs base can be raised. This information is posted on the official Customs Administration website.[:]'
                )?></p>
            </div>
        </div>
    </div>
</section>
<!-- FAQ section ENDS -->

<!-- Forbidden Goods section STARTS -->
<div class="section section--bkg-image section--bkg-image-2">
    <div class="container">
        <h3><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
            '[:rs]Zabranjena roba za uvoz u Srbiju[:][:en]Restricted Goods for Serbia[:]'
        )?></h3>
        <div class="d-flex justify-content-center flex-wrap">
            <div class="text-card-item">
                <i class="mdi mdi-treasure-chest small-icon mr-2"></i>
                <span><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Antikviteti[:][:en]Antiques[:]'
                )?></span>
            </div>
            <div class="text-card-item">
                <i class="mdi mdi-cash-multiple small-icon mr-2"></i>
                <span><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Novačani nalozi[:][:en]Money Orders[:]'
                )?></span>
            </div>
            <div class="text-card-item">
                <i class="mdi mdi-car-battery small-icon mr-2"></i>
                <span><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Baterije[:][:en]Batteries, haz[:]'
                )?></span>
            </div>
            <div class="text-card-item">
                <i class="mdi mdi-file-multiple small-icon mr-2"></i>
                <span><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Politički materijali[:][:en]Political Material[:]'
                )?></span>
            </div>
            <div class="text-card-item">
                <i class="mdi mdi-file-document small-icon mr-2"></i>
                <span><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Tapije[:][:en]Deeds[:]'
                )?></span>
            </div>
            <div class="text-card-item">
                <i class="mdi mdi-access-point small-icon mr-2"></i>
                <span><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Rendgenski snimci[:][:en]X-Rays[:]'
                )?></span>
            </div>
            <div class="text-card-item">
                <i class="mdi mdi-pill small-icon mr-2 rotate-90"></i>
                <span><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Lekovi, bez recepta[:][:en]Drugs, non-prescription[:]'
                )?></span>
            </div>
            <div class="text-card-item">
                <i class="mdi mdi-spray small-icon mr-2"></i>
                <span><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Rashladni gel, suvi led[:][:en]Ice, Blue[:]'
                )?></span>
            </div>
            <div class="text-card-item">
                <i class="mdi mdi-elephant small-icon mr-2"></i>
                <span><?php echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage(
                    '[:rs]Slonovača[:][:en]Ivory[:]'
                )?></span>
            </div>
        </div>
    </div>
</div>
<!-- Forbidden Goods section ENDS -->

<?php get_footer(); ?>
