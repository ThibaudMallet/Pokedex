<main class="pokedex">
    <article class="pokemonCard">
            <h2 class="titleCardName">Détails de <?= $viewData[0]->pokemon_name; ?></h2>
            <section class="detail">
                <img class= "imgCard" src="<?= $router->generate('home') . '/img/' . $viewData[0]->getNumber() . '.png'; ?>" alt="Image du pokemon">
                <div class="statsCard">
                    <h4 class="PokemonCardName" >#<?= $viewData[0]->getNumber(); ?> <?= $viewData[0]->pokemon_name; ?></h4>
                    <?php foreach($viewData as $pokemon) { ?>
                    <a style="background-color:#<?= $pokemon->color; ?>" class="typeSection__link--cardDetail" href="<?= $router->generate('pokemon-by-type', ['id' => $pokemon->type_id]); ?>"><?= $pokemon->type_name ?></a>
                    <?php } ?>
                    <h5 class="statsCard__subtitle">Statistiques</h5>
                    <div class="gridItems">
                        
                            <p>PV</p>
                            <p><?= $viewData[0]->getHp(); ?></p>
                            <div class="container">
                                <div style="width:<?= ($viewData[0]->getHp()/3); ?>%" class="skill"><?= $viewData[0]->getHp(); ?></div>
                            </div>
                        
                        
                            <p>Attaque</p>
                            <p><?= $viewData[0]->getAttack(); ?></p>
                            <div class="container">
                                <div style="width:<?= ($viewData[0]->getAttack()/3); ?>%" class="skill"><?= $viewData[0]->getAttack(); ?></div>
                            </div>
                        
                        
                            <p>Défense</p>
                            <p><?= $viewData[0]->getDefense(); ?></p>
                            <div class="container">
                                <div style="width:<?= ($viewData[0]->getDefense()/3); ?>%" class="skill"><?= $viewData[0]->getDefense(); ?></div>
                            </div>
                        
                        
                            <p>Attaque Spé.</p>
                            <p><?= $viewData[0]->getSpe_attack(); ?></p>
                            <div class="container">
                                <div style="width:<?= ($viewData[0]->getSpe_attack()/3); ?>%" class="skill"><?= $viewData[0]->getSpe_attack(); ?></div>
                            </div>
                        
                        
                            <p>Défense Spé.</p>
                            <p><?= $viewData[0]->getSpe_defense(); ?></p>
                            <div class="container">
                                <div style="width:<?= ($viewData[0]->getSpe_defense()/3); ?>%" class="skill"><?= $viewData[0]->getSpe_defense(); ?></div>
                            </div>
                        
                        
                            <p>Vitesse</p>
                            <p><?= $viewData[0]->getSpeed(); ?></p>
                            <div class="container">
                                <div style="width:<?= ($viewData[0]->getSpeed()/3); ?>%" class="skill"><?= $viewData[0]->getSpeed(); ?></div>
                            </div>
                        
                    </div>
                </div>
            </section>
            <a class="backToHomeList" href="<?= $router->generate('home'); ?>">Revenir à la liste</a>

    </article>
    </main>
</body>
</html>