<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/views/templates/header.php";  ?>

<section class="likebody">
  <!-- основная картинка и надпись -->
  <main class="photo-zaglav">
    <div class="zaglav">
      <div class="tekst">
        <h1 class="slogan">Твоё тело — чистый холст</h1>
      </div>
    </div>
  </main>

  <!-- блок с фото студии -->
  <main class="salonInfa">
    <div class="img"><img src="/assets/img/studia.jpg" alt="salonFoto" class="fotoSalon" /></div>
    <div class="text">
      <p class="text1">
        Добро пожаловать! <br>
        Лучший тату-салон Челябинска</p>
      <p class="text2"> Большой выбор стилей тату, профессиональные мастера, качественное
        оборудование и разумные цены.
      </p>
    </div>
  </main>

  <!-- блок с мастерами -->
  <div class="mastera">
    <h1>Наши мастера</h1>
    <div class="master">
      <?php foreach ($masters as $master) : ?>
        <div class="masterr">
          <img src="/upload/<?= $master->photo ?>" alt="oneMaster" class="oneMaster" />
          <p class="textFI"><?= $master->name ?> <?= $master->surname ?></p>
          <p class="textM">Тату-Мастер</p>
          <a class="link" href="/app/tables/show_master.php?id=<?= $master->id ?>">Смотреть</a>
        </div>
      <?php endforeach ?>
    </div>
  </div>


  <!-- Слайдера -->
  <h1>Последние работы</h1>
  <div id="carouselExampleCaptions" class="carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php foreach ($products as $key => $product) : ?>
        <div class="carousel-item <?= $key == 0 ? 'active' : ' ' ?>">
          <img src="/upload/<?= $product->photo ?>" class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
            <a href="/app/tables/product.php?id=<?= $product->id ?>" class="product-a" name="btn"></a>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Предыдущий</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Следующий</span>
    </button>
  </div>

  <!-- ЗАПИСЬ НА КОНСУЛЬТАЦИЮ -->
  <div class="container">
    <div>
      <h2>ЗАПИСЬ НА КОНСУЛЬТАЦИЮ БЕСПЛАТНО!</h2>
      <h3>Правила заполнения формы:</h3>
      <ul>
        <li>Прикрепите картинку с эскизом или фотографией желаемой татуировки.</li>
        <li>Опишите желаемый размер, место нанесения и личные пожелания.</li>
        <li>Добавьте свои контактные данные для получения консультации.</li>
      </ul>

    </div>
    <div class="konsul">
      <h3 class="divzag">ЗАПИСЬ НА КОНСУЛЬТАЦИЮ</h3>
      <p class="podzag">Для записи на бесплатную консультацию, заполните эту форму</p>
      <form enctype="multipart/form-data" action="/app/tables/forma.php" method="POST">
        <div class="form">
          <input class="input" type="text" id="name" name="name" placeholder="Введите имя">
          <input class="input" type="text" id="number" name="number" placeholder="Введите номер телефона">

          <div class="select">
            <p class="p_style">Выберите дату</p>
            <input type="date" class="data" name="data"  aria-label="Search">
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
          <input type="hidden" name="MAX_FILE_SIZE" value="30000"  aria-label="Search" />
          <input name="userfile" type="file" />
        </div>
        
        <input class="input" type="text" id="сomment" name="comment" placeholder="Комментарий">

        <input type="submit" class="otpr" name="otprav" value="Отправить" />
      </form>
    </div>
  </div>


  <!-- КАРТА -->
  <div class="karta">
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A1fef3e093074dc8c493430973e5d494dc62b88c072ba8213cd724db8ad7d7c63&amp;source=constructor" width="800" height="600" frameborder="0">
    </iframe>
  </div>
</section>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/views/templates/footer.php"  ?>