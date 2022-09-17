<main>
        <h3>Cliquez sur un type pour voir tous les Pokémon de ce type</h3>
        <section class="typeSection">
            <?php foreach($viewData as $type) {
            ?>
            <a style="background-color:#<?= $type->getColor(); ?>" class="typeSection__link" href="<?= $router->generate('pokemon-by-type', ['id' => $type->getId()]); ?>"><?= $type->getName(); ?></a>    
            <?php 
            }
            ?>
        </section>
    </main>
</body>
</html>