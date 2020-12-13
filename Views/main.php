<?php require_once('header.php'); ?>
<?php require_once('nav.php'); ?>
<main>

  <header class="row text-white ">
    <div class="container imageContainer" style="align-items:flex-start;">
      <h2 id="greet" class="animate__animated animate__fadeInDown animate__delay-0.5s"><strong>Hello World!</strong></h2>
      <h3 id="presentation" class="animate__animated animate__fadeIn animate__delay-1s">My name is <span class="name" style="color:#77015D;">Matías</span> </h3>
    </div>
  </header>
  <div class="container">

    <section class="row about" style="height:50vh">
      <div class="col-8" data-aos="fade-up" data-aos-duration="2000">
        <h1>Objetivos Personales</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui cumque suscipit eaque minima sequi repellat animi, mollitia nam debitis modi? Voluptatem, quae magni! Fuga iure corporis consequatur distinctio adipisci earum!</p>
      </div>
      <div class="col-4" data-aos="fade-up" data-aos-duration="2000">
        <img src="<?php echo IMG_PATH . 'web dev.jpg' ?>">
      </div>
    </section>
  </div>

</main>
<?php require_once(VIEWS_PATH . 'footer.php'); ?>