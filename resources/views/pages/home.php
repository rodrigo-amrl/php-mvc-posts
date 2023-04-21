<?php

$albuns = [
    [
        'id' => 1,
        'nome' => "Minhas fotos",
        'descricao_curta' => "Teste",
        'descricao' => 'Teste',
        'imagem_inicial' => 'floresta.jpg'
    ], [
        'id' => 1,
        'nome' => "teste",
        'descricao_curta' => "Tes\zxfsfte",
        'imagem_inicial' => 'floresta.jpg',
        'descricao' => 'Teste'
    ]
];
?>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Bem vindo ao Álbum</h1>
            <p class="lead text-muted">Fique a vontade para olhar as fotos, códigos, estrutura...</p>
        </div>
    </div>
</section>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach ($albuns as $album) {  ?>
                <?php include('album/album_card.php') ?>
            <?php } ?>
        </div>
    </div>
</div>