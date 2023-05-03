<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/views/templates/header.php";  ?>

<div class="contacts">
    <h1>Контакты</h1>
    <p class="cont_podzag">С нами можно связаться по телефону. Вы можете отправить нам запрос через онлайн-форму.</p>

    <!-- ЗАПИСЬ НА КОНСУЛЬТАЦИЮ -->
    <div class="cont_infa">
        <div class="container_cont">
            <div class="konsul_cont">
                <h3 class="divzag">ЗАПИСЬ НА КОНСУЛЬТАЦИЮ</h3>
                <p class="podzag">Для записи на бесплатную консультацию, заполните эту форму</p>
                <form enctype="multipart/form-data" action="/app/tables/forma.php" method="POST">
                    <div class="form">
                        <input class="input" type="text" id="name" name="name" placeholder="Введите имя">
                        <input class="input" type="text" id="number" name="number" placeholder="Введите номер телефона">


                        <div class="select_cont">
                            <p class="p_style">Выберите дату</p>
                            <input type="date" class="data" name="data" aria-label="Search">

                            <p class="p_style">Выберите услугу </p>
                            <select class="master_entries" name="service">
                                <?php foreach ($priceServices as $service) : ?>
                                    <option value="<?= $service->id ?>"><?= $service->title ?></option>
                                <?php endforeach ?>
                            </select>

                            <p class="p_style">Выберите стиль тату</p>
                            <select class="master_entries" name="style">
                                <?php foreach ($stylesTattoo as $style) : ?>
                                    <option value="<?= $style->id ?>"> <?= $style->title ?></option>
                                <?php endforeach ?>
                            </select>

                            <p class="p_style">Выберите размер тату</p>
                            <select class="master_entries" name="size">
                                <?php foreach ($sizes as $size) : ?>
                                    <option value="<?= $size->id ?>"> <?= $size->title ?></option>
                                <?php endforeach ?>
                            </select>

                            <p class="p_style">Выберите мастера</p>
                            <select class="master_entries" name="master">
                                <?php foreach ($masters as $master) : ?>
                                    <option value="<?= $master->id ?>"><?= $master->name ?> <?= $master->surname ?> </option>
                                <?php endforeach ?>
                            </select>

                        </div>
                    </div>

                    <div class="form-file">
                        <p class="text-file">Прикрепите эскиз, если есть</p>
                        <input type="hidden" name="MAX_FILE_SIZE" value="30000" aria-label="Search" />
                        <input name="userfile" type="file" />
                    </div>
                    <input class="input" type="text" id="сomment" name="comment" placeholder="Комментарий">
                    <input type="submit" class="otpr" name="otprav" value="Отправить" />
                </form>
            </div>
        </div>

        <!-- КАРТА -->
        <div class="karta_cont">
            <iframe title="myFrame" src="https://yandex.ru/map-widget/v1/?um=constructor%3A1fef3e093074dc8c493430973e5d494dc62b88c072ba8213cd724db8ad7d7c63&amp;source=constructor" width="500" height="500" frameborder="0">
            </iframe>
        </div>

        <div class="cont">
            <?php foreach ($sections as $section) : ?>
                <div class="cont_name">
                    <h3 class="name_contact"><?= $section->name ?></h3>
                </div>
                <div class="cont_infa_con">
                    <?php foreach (\App\models\Section::getSection($section->id) as $contact) : ?>
                        <?php if ($section->id == 3) : ?>
                            <a href="<?= $contact->content ?>"><img class="img_cont" alt="icon" src="/upload/<?= $contact->element ?> "></a>
                        <?php else : ?>
                            <p class="naz"><?= $contact->content ?></p>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>