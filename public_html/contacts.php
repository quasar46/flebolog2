<!doctype html>
<html lang="ru">
<head>
    <?php include 'head.php'; ?>

    <title>Контакты</title>
</head>
<body>
    <?php include 'header.php'; ?>




    <div class="location">
      <div class="container">

        <h2 class="location__title section__title">Адрес клиники: <br>Москва, ул. Краснопролетарская 8, с1</h2>

        <p class="location__time"><strong>6 мин. от м. Новослободская <span class="d-none d-lg-inline">|</span><br class="d-inline d-lg-none"> 14 мин. от м. Цветной бульвар</strong></p>
        <div class="location__info">
        <span>Телефон клиники:</span> <span class="location__info-tel">8 (495) 008 48 83</span><br class="d-none d-lg-inline">
        <span>Личный номер доктора:</span> <span class="location__info-tel">8 (926) 197-36-43</span>


        </div>



        <a href="https://yandex.ru/maps/-/CCU7AIR33B" target="_blank" class="btn btn-white location__btn">Маршрут</a>

        <div class="row">
          <div class="col-lg-12">
            <div class="map">
          <!--
          
            https://yandex.ru/map-widget/v1/?ll=37.607916%2C55.776032&mode=poi&poi%5Bpoint%5D=37.607726%2C55.776030&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D123903603038&utm_source=share&z=21
            -->
              <iframe src="https://yandex.ru/map-widget/v1/-/CCU7AIR33B" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
              <div class="map__watch">
                <div class="map__watc">
                  <div class="map__watch-logo-wrap">
                    <div class="map__watch-logo">
                      <img src="images/location-icon.png" alt="">
                    </div>
                  </div>
                  <a href="https://yandex.ru/maps/-/CCU7AIR33B">СМОТРЕТЬ НА КАРТЕ</a>
                </div>

              </div>
            </div>
          </div>

        </div>

        <div class="appointment">
          <a href="#" class="btn appointment__btn" data-toggle="modal" data-target="#form">Записаться на приём</a>
        </div>

      </div>
    </div>
    
    
    <?php include 'footer.php'; ?>           
    <?php include 'scripts.php'; ?>

  </body>
</html> 