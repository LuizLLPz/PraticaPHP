<style>
    <?php require '../css/teste.css' ?>
</style>
<body>
    <div class="doce">
        <?php foreach ($doces as $doce): ?>  
        <div class="doce-card">
            <h2 class="doce-title">
                <?= $doce->nome ?>
            </h2>
            <h3 class="doce-tipo">
                Tipo: <?= $doce->tipo ?>
            </h3>
            <p class="doce-desc">
                <?= $doce->descricao ?>
            </p>
        </div>
        <?php endforeach; ?>
        
    </div>
    <button onClick=<?php $modalVisibility = !$modalVisibility ?>>
            Aperte aqui!
    </button>
</body>
</html>