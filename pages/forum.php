<body>
    <div class="posts">
        <?php foreach ($posts as $post): ?>
        
        <div class="post-card">
            <h2 class="post-card-title">
                <?= $post->titulo ?>
            </h2>
            <p>
                <?= $post->corpo ?>
            </p>
        </div>
        <?php endforeach; ?>
    </div>
    <div>
        <form action="../praticaphp/api/post" method="POST">
            <input type="text" name="titulo" placeholder="Título">
            <input type="text" name="corpo" placeholder="Corpo">
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>