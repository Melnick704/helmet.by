<!--Хедер-->

<?php include 'include/header.php'; ?>

<!--Скролл-->

<?php include 'include/skroll.php'; ?>

<!--Главный экран-->

<div class="content">
  <div class="sub-main-container">
    <div class="main-text-container">
      <div class="text-wrapper">
        <div class="blue-line"></div>
        <div class="main-text">Инструмент и оборудование в аренду</div>
        <div class="mini-main-text">C доставкой в удобное для Вас время</div>
      </div>
      <div class="for-buttons">
        <div class="button mini-main-text">Заказать</div>
        <div class="second-button mini-main-text">Написать нам</div>
      </div>
    </div>
    <img class="zubr rellax" data-rellax-speed="2" src="files/zubr.png"></img>
  </div>

  <!--Почему выбирают нас?-->

  <div class="select">
  <div class="grid-select">
    <p class="select-item what-main-title">Почему выбирают нас?</p>
    <div class="select-item">
      <p class="select-item-title what-title">Разумно</p>
      <p class="select-item-text mini-main-text">Прокат позволяет Вам попробовать товары, перед тем как Вы их купите и решить подходят ли они Вам, нравятся ли они Вам.</p>
    </div>
    <div class="select-item">
      <p class="select-item-title what-title">Выгодно</p>
      <p class="select-item-text mini-main-text">Потому что товары стоят дорого, а прокат дает возможность сэкономить значительную часть бюджета.</p>
    </div>
    <div class="select-item">
      <p class="select-item-title what-title">Доступно</p>
      <p class="select-item-text mini-main-text"> В нашем прокате низкие цены, огромный ассортимент, отсутствие длительных очередей.</p>
    </div>
  </div>
    
  </div>
</div>

<!--Подвал-->

<?php include 'include/footer.php'; ?>

<script src="<script>.js"></script>
<script src="index.js"></script>

<!--Параллакс бибилотека-->
<script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
<script>
  // Accepts any class name
  var rellax = new Rellax('.rellax');
</script>

</body>

</html>