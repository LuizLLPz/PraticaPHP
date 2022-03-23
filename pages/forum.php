<body>
    <div class="posts">
        <?php foreach ($posts as $post): ?>
        
        <div class="post-card">
            <h2 class="post-card-title">
                <?= $post->titulo ?>
            </h2>
            <p>
                <?= $post->texto ?>
            </p>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>