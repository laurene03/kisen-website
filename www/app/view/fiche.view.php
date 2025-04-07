<main class="trombi">
      <h1>Trombinoscope</h1>
      <div class="student">
        <figure class="photo">
              <?php
                if (empty($student['photo'])) {
                  $photo = 'defaut.png';
                } else {
                  $photo = 'big/'.$student['photo'];
                }
                ?>
          <img src='public/images/<?=$photo?>' alt="photo de <?= $student['firstname']?> <?= $student['lastname']?>" />
        </figure>
        <div class="student-infos">
          <p class="name"><?= $student['firstname'] ?> <span><?= $student['lastname'] ?></span></p>
          <img src="public/images/dots.svg" id="dots2" alt="" />
          <div class="data">
            <p class="birthdate"><?= $student['birthdate'] ?></p>
            <p class="group">groupe <span><?= $student['group'] ?><span></p>
          </div>
          <p class="desc"><?= $student['description'] ?></p>
        </div>
      </div>