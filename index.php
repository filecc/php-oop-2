<!-- 
    Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende *prodotti* per animali.
- I prodotti sono categorizzati, le *categorie* sono Cani o Gatti.
- I prodotti saranno oltre al *cibo*, anche *giochi*, *cucce*, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
 -->

<?php
include __DIR__ . '/Database/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main class="pt-3">

        <div class="container">
            <h1>The PetShop</h1>
            <div class="row">
                <?php foreach ($products as $product) : ?>
                    <div class="col-3 p-2">
                        <div class="card h-100">
                            <div class="position-relative h-100">
                            <img src=<?php echo "'$product->image'" ?> alt="" class="h-100 card-img-top">
                            <p class="position-absolute top-0 end-0 m-4 rounded-circle d-flex justify-content-center align-items-center">
                                <?php if($product->category == 'Cat'): ?>
                                <i class="fa-solid fa-cat fs-3 p-2 rounded-circle bg-info"></i>
                                <?php elseif($product->category == 'Dog'): ?>
                                <i class="fa-solid fa-dog fs-3 p-2 rounded-circle bg-warning"></i>
                                <?php else:?>
                                    <i class="fa-solid fa-cube p-2 rounded-circle fs-3 bg-success"></i>
                                <?php endif; ?>
                            </p>
                            </div>
                          
                            <div class="card-body">
                                <h6 class="card-title fw-bold"><?php echo $product->name ?></h6>
                                <p class="card-text">
                                    Prezzo: <?php echo $product->price; ?>€
                                </p>
                                <p class="card-text">
                                    <?php if(property_exists($product, 'family')) : ?>
                                    Categoria: <?php echo $product->family; ?>
                                    <?php else: ?>
                                        Categoria: Altro
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

</body>

</html>