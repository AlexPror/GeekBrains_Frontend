<?php
$name = "Билл Гейтс";
$prof = "Developer";
$city = "Россия, Москва";
$email = "stivenson@mail.ru";
$phone = "89994565588";

$skills = [
['name'=>'Photoshop','value'=>'88'], ['name'=>'Photography','value'=>'91'],
['name'=>'Illustrator','value'=>'71'], ['name'=>'Media','value'=>'48']];
$languages = [ ['lang'=>'English', 'value'=>'100'], ['lang'=>'German',
'value'=>'70'], ['lang'=>'Spanish', 'value'=>'40'] ]; $work_experience = [
['spec'=>'Frontend Developer', 'data'=>'jan 2015', 'descr'=>'Lorem ipsum dolor
sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est
reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque
repellendus iure, iste.'], ['spec'=>'Web Developer / something.com',
'data'=>'Mar 2012 - Dec 2014', 'descr'=>'Consectetur adipisicing elit.
Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt
hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.'],
['spec'=>'Graphic Designer / designsomething.com', 'data'=>'Jun 2010 - Mar
2012', 'descr'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'] ];
$education = [ ['place'=>'gb.ru', 'data'=>'Forever', 'descr'=>'Web Development!
All I need to know in one place'], ['place'=>'London Business School',
'data'=>'2013 - 2015', 'descr'=>'Master Degree'], ['place'=>'School of Coding',
'data'=>'2010 - 2013', 'descr'=>'Bachelor Degree'] ]; ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <style>
      html,
      body,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-family: "Jost", sans-serif;
      }
    </style>
  </head>
  <body class="w3-light-grey">
    <!-- Page Container -->
    <div class="w3-content w3-margin-top" style="max-width: 1400px">
      <!-- The Grid -->
      <div class="w3-row-padding">
        <!-- Left Column -->
        <div class="w3-third">
          <div class="w3-white w3-text-grey w3-card-4">
            <div class="w3-display-container">
              <img
                src="https://i.pinimg.com/736x/bd/68/b0/bd68b0b87bfa9e6daf428f2a793b9b1c--microsoft-software-bill-gates.jpg"
                style="width: 100%"
                alt="Avatar"
              />
              <div class="w3-display-bottomleft w3-container w3-text-black">
                <h2><?= $name?></h2>
              </div>
            </div>
            <div class="w3-container">
              <p>
                <i
                  class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"
                ></i
                >Профессия:
                <?= $prof?>
              </p>
              <p>
                <i
                  class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"
                ></i
                >Город, страна:
                <?= $city?>
              </p>
              <p>
                <i
                  class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"
                ></i
                >E-mail:
                <?=$email?>
              </p>
              <p>
                <i
                  class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"
                ></i
                >Координаты:
                <?=$phone?>
              </p>
              <hr />

              <p class="w3-large">
                <b
                  ><i
                    class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"
                  ></i
                  >Навыки</b
                >
              </p>
              <?php foreach ($skills as $key => $skill): ?>
                <p><?=$skill['name']?></p>
                <div class="w3-light-grey w3-round-xlarge w3-small">
                  <div
                    class="w3-container w3-center w3-round-xlarge w3-teal"
                    style="width:<?=$skill[ 'value']?>%"
                  >
                    <?=$skill['value']?>%
                  </div>
                </div>
              <?php endforeach; ?>

              <br>

              <p class="w3-large w3-text-theme">
                <b
                  ><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i
                  >Языки</b
                >
              </p>
              <?php foreach ($languages as $key =>
              $skill): ?>
              <p><?=$skill['lang']?></p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div
                  class="w3-container w3-center w3-round-xlarge w3-teal"
                  style="height: 24px; width: <?=$skill[ 'value']?>%"
                ></div>
              </div>

              <?php endforeach; ?>

              <br />
            </div>
          </div>
          <br />

          <!-- End Left Column -->
        </div>

        <!-- Right Column -->
        <div class="w3-twothird">
          <div class="w3-container w3-card w3-white w3-margin-bottom">
            <h2 class="w3-text-grey w3-padding-16">
              <i
                class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"
              ></i
              >Опыт работы
            </h2>
            <div class="w3-container">
              <?php foreach ($work_experience as $key =>
              $skill): ?>
              <h5 class="w3-opacity">
                <b><?=$skill['spec']?></b>
              </h5>
              <h6 class="w3-text-teal">
                <i class="fa fa-calendar fa-fw w3-margin-right"></i>
                <?=$skill['data']?>
                -
                <?php if ($key == 0): ?>
                <span class="w3-tag w3-teal w3-round">Current</span>
              </h6>
              <?php endif; ?>
              <p><?=$skill['descr']?></p>
              <hr />
              <?php endforeach; ?>
            </div>
          </div>
          <div class="w3-container w3-card w3-white">
            <h2 class="w3-text-grey w3-padding-16">
              <i
                class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"
              ></i
              >Образование
            </h2>
            <div class="w3-container">
              <?php foreach ($education as $key =>
              $skill): ?>
              <h5 class="w3-opacity">
                <b><?=$skill['place']?></b>
              </h5>
              <h6 class="w3-text-teal">
                <i class="fa fa-calendar fa-fw w3-margin-right"></i
                ><?=$skill['data']?>
              </h6>
              <p><?=$skill['descr']?></p>
              <hr />
              <?php endforeach; ?>
            </div>
          </div>

          <!-- End Right Column -->
        </div>

        <!-- End Grid -->
      </div>

      <!-- End Page Container -->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-teal w3-center w3-margin-top">
      <p>Find me on social media.</p>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
      <!-- End footer -->
    </footer>
  </body>
</html>
