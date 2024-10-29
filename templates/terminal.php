<?php

use App\Controller\PizzaController;
use App\Repository\SauceRepository;
require_once 'base.html';

?>

<h1>Терминал для заказа пиццы</h1>

<div class="pizza-container">
    <?php
    $pizzaController = new PizzaController();
    $pizzas = $pizzaController->getPriceInBYN();
    foreach ($pizzas as $pizza) { ?>
        <div class="pizza">
            <img src="../<?php echo $pizza->getImages(); ?>" alt="<?php echo $pizza->getName(); ?>">
            <h3><?php echo $pizza->getName(); ?></h3>
            <label for="pizzaSize">Размер, см:</label>
            <label>
                <select class="pizzaSize" data-prices='<?php echo json_encode([
                    "21" => $pizza->getSize21(),
                    "26" => $pizza->getSize26(),
                    "31" => $pizza->getSize31(),
                    "45" => $pizza->getSize45(),
                ]); ?>'>
                    <?php foreach ($pizzaController->getSizes() as $size) { ?>
                        <option value="<?php echo $size; ?>"><?php echo $size; ?></option>
                    <?php } ?>
                </select>
            </label>
            <div class="price"><?php echo $pizza->getSize21() ?> BYN</div>
            <div>
                <button class="select-button" data-pizza-id="<?php echo $pizza->getId(); ?>">Выбрать</button>
            </div>
        </div>
    <?php } ?>
</div>
<form id="orderForm" class="sauce-container">
    <label for="sauce">Соус:</label>
    <?php $sauceRepository = new SauceRepository(); ?>
    <select class="sauce">
        <option>Не выбрано</option>
        <?php foreach ($sauceRepository->getSauces() as $sauce) { ?>
            <option value="<?php echo $sauce->getName(); ?>" data-sauce-id="<?php echo $sauce->getId(); ?>" data-price="<?php echo $sauce->getPrice(); ?>">
                <?php echo $sauce->getName(); ?>
            </option>
        <?php } ?>
    </select>
    <div class="price-sauce"></div>
    <div class="result" id="result"></div>
    <div>
        <button class="submit">Заказать</button>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>
</body>
</html>

