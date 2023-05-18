<?php
include __DIR__.'/../Traits/Weight.php';
include __DIR__.'/../Models/Product.php';
include __DIR__.'/../Models/Food.php';
include __DIR__.'/../Models/Bed.php';
include __DIR__.'/../Models/Toy.php';

$products = 
[
    new Product('Collare', '10', 'https://i.etsystatic.com/7365095/r/il/583dd5/3993267015/il_570xN.3993267015_59sf.jpg', 'Cat and Dog'),
    new Bed('Cuccia M', '35', 'Cucce', 'Cat and Dog', 'https://www.kasa-store.com/15325-large_default/qeeboo-cat-cave-cuccia-per-gatti-disegnata-da-stefano-giovannoni.jpg'),
    new Bed('Cuccia XL', '60', 'Cucce', 'Cat and Dog', 'https://cdn.manomano.com/images/images_products/4659689/P/8903976_1.jpg'),
    new Product('Pattine da interni', '22', 'https://www.loradeglianimali.it/173984-thickbox_default/camon-pantofole-in-peluche-con-squeaker-per-cani-da-24-cm.jpg', 'Cat and Dog'),
    new Food('Crocchette', '16', 'Dry Food', 'https://www.naturepetshop.it/wp-content/uploads/ndoceangattoneut.jpg', 'Cat', 1000, 'gr'),
    new Food('Crocchette', '12', 'Dry Food', 'https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dw40644a39/idt/dmo-124621-1-124621.jpg?sw=800&sh=800', 'Dog', 1500, 'gr'),
    new Toy('Laccio emostatico', '5', 'https://gvmedicali.it/73-large_default/laccio-emostatico-in-gomma-tubolare.jpg', 'Cat'),
    new Toy('Osso umano (fac simile)', '25', 'https://m.media-amazon.com/images/I/41NpY5MTgfL._AC_SL1500_.jpg', 'Dog'),
    new Food('Bocconcini di Pollo', '2', 'Wet Food', 'https://www.pedigree.com/sites/g/files/fnmzdf1201/files/migrate-product-files/images/ytyyeemm2nmwrddrotut.png', 'Dog', 150, 'gr'),
    new Food('Tonno dell\'Atlantico', '1.29', 'Wet Food', 'https://cdn.shopify.com/s/files/1/0524/0658/3462/products/gatto_36_tonno_te_verde.jpg?v=1666542193', 'Cat', 75, 'gr'),
];

