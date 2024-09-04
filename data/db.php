<?php

$db = [
    new Food('Crocchette Salmone','2cm', 45,'le migliori crocchette secche al salmone',['salmone','riso','grano'],'Adulti', new Category('Dog','Nutrimento'), true),
    new Toy('Pallina','5cm', 3.5,'La pallina che il tuo cane adorerà', new Category('Dog','Giochi'),['blu'],true),
    new Accessories('Guinzaglio','65cm', 11.9,'Guinzaglio ultra resistente', new Category('Dog','Accessori'),'Esterno', true),

    new Food('Crocchette Pollo', '1.5cm', 40, 'Crocchette nutrienti a base di pollo', ['pollo', 'patate', 'carote'], 'Cuccioli', new Category('Cane', 'Nutrimento'), true),
    new Food('Crocchette Salmone per Gatti', '1cm', 35, 'Crocchette al salmone formulate per gatti', ['salmone', 'riso', 'mais'], 'Cuccioli', new Category('Gatto', 'Nutrimento'), false),
    new Toy('Topolino di Peluche', '15cm', 5.0, 'Topolino di peluche per gatti', new Category('Gatto', 'Giochi'), ['grigio'], true),
    new Toy('Rana di Gomma', '10cm', 4.5, 'Rana di gomma per cani', new Category('Cane', 'Giochi'), ['verde'], true),
    new Accessories('Collare in Pelle', '35cm', 14.5, 'Collare in pelle per cani di taglia media', new Category('Cane', 'Accessori'), 'Adatto per passeggiate', true),
    new Accessories('Guanto di Spazzola per Gatti', 'Taglia Unica', 9.0, 'Guanto per spazzolare il pelo dei gatti', new Category('Gatto', 'Accessori'), 'Interiore', true),
    new Food('Snack per Cani', '2cm', 25, 'Snack gustosi per cani', ['manzo', 'grano'], 'Tutte le età', new Category('Cane', 'Snack'), true),
    new Food('Cibo Secco per Gatti', '1cm', 30, 'Cibo secco completo per gatti', ['pollo', 'riso'], 'Adulti', new Category('Gatto', 'Nutrimento'), true),
    new Food('Crocchette Agnello', '1.8cm', 38, 'Crocchette al gusto di agnello per cani', ['agnello', 'riso'], 'Adulti', new Category('Cane', 'Nutrimento'), true),
    new Food('Cibo Umido per Gatti', '400g', 4.5, 'Cibo umido al tonno per gatti', ['tonno', 'piselli'], 'Adulti', new Category('Gatto', 'Nutrimento'), true),
    new Toy('Corda per Cani', '30cm', 7.0, 'Corda robusta per giochi interattivi con cani', new Category('Cane', 'Giochi'), ['rosso'], true),
    new Toy('Pesce di Gomma', '12cm', 6.5, 'Pesce di gomma per cani', new Category('Cane', 'Giochi'), ['giallo'], true),
    new Accessories('Cuccia in Peluche', 'S', 45.0, 'Cuccia morbida e accogliente per gatti', new Category('Gatto', 'Accessori'), 'Interiore', true),
    new Accessories('Cintura di Sicurezza per Auto', 'Universal', 19.0, 'Cintura di sicurezza per cani in auto', new Category('Cane', 'Accessori'), 'Per auto', true),
    new Food('Cibo Secco per Cuccioli di Cane', '1cm', 32, 'Cibo secco formulato per cuccioli di cane', ['pollo', 'cereali'], 'Cuccioli', new Category('Cane', 'Nutrimento'), true),
    new Food('Snack Dentale per Gatti', '2cm', 20, 'Snack dentale per la pulizia dei denti dei gatti', ['pollo', 'menta'], 'Gatti', new Category('Gatto', 'Snack'), true),
    new Toy('Topolino in Lattice', '8cm', 4.0, 'Topolino in lattice per cani', new Category('Cane', 'Giochi'), ['bianco'], true),
    new Toy('Pallina di Natale', '6cm', 5.5, 'Pallina di Natale per gatti', new Category('Gatto', 'Giochi'), ['rosso', 'verde'], true),
];