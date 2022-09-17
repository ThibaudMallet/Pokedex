    <main class="pokedex">
    <?php foreach ($viewData as $pokemon) { ?>
        <article>
            <a href="<?= $router->generate('pokemon-detail', ['id' => $pokemon->getNumber()]); ?>">
                <img src="<?= $router->generate('home') . '/img/' . $pokemon->getNumber() . '.png'; ?>" alt="Photo du pokemon">
                <h4>#<?= $pokemon->getNumber() . ' ' . $pokemon->getName(); ?></h4>
            </a>
        </article>
    <?php } ?>
    </main>
</body>
</html>