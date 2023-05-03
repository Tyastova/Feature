<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/views/templates/header.php";

use App\models\Price;
?>

<h1>Сколько стоит сделать таутировку?</h1>
<p class="bloc_price">Цена на тату складывается из следующих факторов:</p>

<div class="div_rod">
    <div class="div_price">
        <div class="text_left">
            <div class="text_one">
                <h4 class="zag_style">Стиль</h4>
                <div class="style_text">Важным фактором ценообразования является выбранный стиль</div>
            </div>

            <div class="text_two">
                <h4 class="zag_style">Разработка эскиза</h4>
                <div class="style_text">Вы можете предоставить свой эскиз, но если Вы хотите индивидуальную тату, то можно нарисовать эскиз, с учетом Ваших пожеланий</div>
            </div>

            <div class="text_three">
                <h4 class="zag_style">Размер тату</h4>
                <div class="style_text">Размер татуировки самым прямым образом влияет на её стоимость! Он должен быть пропорционален месту нанесения</div>
            </div>
        </div>

        <div class="img_price">
            <p class="price_img"><img src="/upload/image 1.jpg"></p>
        </div>

        <div class="text_right">
            <div class="text_two">
                <h4 class="zag_style">Детализация</h4>
                <div class="style_text">Более детализованная тату стоит дороже. Для большего количества деталей зачастую приходиться увеличивать и размер татуировки</div>
            </div>

            <div class="text_two">
                <h4 class="zag_style">Тени и градиенты</h4>
                <div class="style_text">Тени, и плавность графических и цветовых переходов, значительно влияют на ценник</div>
            </div>

            <div class="text_three">
                <h4 class="zag_style">Место нанесения</h4>
                <div class="style_text">Кожа на разных частях тела отличается по своим свойствам и по разному реагирует на процесс нанесения татуировки</div>
            </div>
        </div>
    </div>
</div>

<h1>Наш прайс</h1>
<div class="container py-3">
    <?php foreach ($priceServices as $service) : ?>
        <?php $priceServices = Price::price(); ?>
        <div class="accordion accordion-flush po" id="menu">
            <div class="accordion-item fy">
                <h2 class="accordion-header he">
                    <button class="accordion-button ka" type="button" data-bs-toggle="collapse" data-bs-target="#item-1">
                        <?= $service->title ?> <?=  'от '. $service->price  .' руб. '?>
                    </button>
                </h2>
                <!-- класс show делает пункт открытым -->
                <div id="item-1" class="accordion-collapse collapse show" data-bs-parent="#menu">
                    <div class="accordion-body la">

                        <?php foreach ($sizes as $size) : ?>
                            <tr class="tr">
                                <td><?= $size->title ?></td>
                            <?php endforeach ?>

                            <?php foreach (\App\models\Tattoo::tattoos($service->id) as $tattoo) : ?>
                                <p><img src="/upload/<?= $tattoo->photo ?>" class="foto_price" /></p>
                                <?php foreach ($sizes as $size) : ?>
                                    <td class="pr_td"><?= $tattoo->price * (1 + $size->percent / 100) ?>  руб. </td>
                            </tr>
                        <?php endforeach ?>
                    <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/views/templates/footer.php"  ?>