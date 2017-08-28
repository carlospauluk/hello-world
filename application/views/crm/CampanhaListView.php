<h2><?php echo $title; ?></h2>

<?php foreach ($itens as $item): ?>

        <h3><?php echo $item['descricao']; ?></h3>
        <div class="main">
                <?php echo $item['descricao']; ?>
        </div>
        <p><a href="<?php echo site_url('news/'.$item['id']); ?>">View</a></p>

<?php endforeach; ?>