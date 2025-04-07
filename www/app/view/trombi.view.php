<main class="trombi">

      <h1>Trombinoscope</h1>

      <div class="line-decoration" aria-hidden="true">
        <div class="line" id="line1"></div>
        <div class="line" id="line2"></div>
      </div>


      <div class="trombi-decoration" aria-hidden="true">
        <img src="public/images/dots.svg" id="dots1" alt="" />
        <img src="public/images/dots.svg" id="dots2" alt="" />
      </div>


      <div class="student-cards">

        <?php foreach($students as $student): ?> 
            <div class="student-card">

            <a href="index.php?route=fiche&id=<?= $student['id']?>">

                <figure class="photo">

                <?php
                if (empty($student['photo'])) {
                  $photo = 'defaut.png';
                } else {
                  $photo = 'small/'.$student['photo'];
                }
                ?>
                  <img src='public/images/<?=$photo?>' alt="photo de <?= $student['firstname']?> <?= $student['lastname']?>" />
                </figure>

                <div class="card-infos">
                <p class="name"><?= $student['firstname'] ?> <span><?= $student['lastname'] ?></span></p>
                <p class="birthdate"><?= $student['birthdate'] ?></p>
                <p class="group">groupe <span><?= $student['group'] ?></span></p>
                <p class="desc"><?= $student['description'] ?></p>
                </div>

            </a>

            </div>
        <?php endforeach ?>

      </div>
