<!-- <main>

    <h1>Nos bières</h1>

    <?php for ($i=0 ; $i<6 ; $i++) : ?>
            
        <div class="carte">

            <a href="#">
            
                <img src="public/images/" alt="image de bière">

                <div class="carte-infos">

                    <p class="nom-biere">Minshi</p>
                    <p class="description">Description</p>

                </div>

            </a>

        </div>

   

    <?php endfor ?> -->

    


    



</main>

<main class="trombi">
      <h1>Trombinoscope</h1>
      <div class="student">
        <figure class="photo">
        <?php
              if (empty($student['photo'])){
                $photo='defaut.png';
              } else {
                $photo='big/'. $student['photo'];
              }?>

        <img src="public/images/<?= $photo?>" alt="photo de <?= $student['firstname']?>" />
            </figure>

        <div class="student-infos">
          <p class="name"><?=$student['firstname']?> <span><?=$student['lastname']?></span></p>
          <img src="public/images/dots.svg" id="dots2" alt="" />
          <div class="data">
            <p class="birthdate"><?=$student['birthdate']?></p>
            <p class="group">Groupe<?=$student['group']?></p>
          </div>

          <p class="desc">
            Je suis un brillant élève de l'IUT Sénart Fontainebleau. Je suis
            passionné par le WEB et la création numérique
          </p>
        </div>
      </div>
  