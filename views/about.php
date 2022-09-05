<?php
require '../includes/client/head.php';
@session_start();
?>
<head>
  <link rel="stylesheet" href="../styles/about.css" />
</head>
<?php
require '../includes/client/header.php'
?>


<div id="about-intro" class="container-fluid d-flex flex-column align-items-center justify-content-center">
  <div id="intro-img" class="container-fluid d-flex align-items-center justify-content-center">
    <img src="../images/top/about.jpg" alt="" />
  </div>
  <div>
    <h2>About</h2>
  </div>
</div>

<div id="company-desc" class="container-fluid d-flex align-items-center justify-content-center">
  <div><img src="../images/yani-transparent.png" alt="" /></div>
  <div class="vr"></div>
  <div class="p">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate
    illum magnam voluptates et animi quibusdam, magni nam facilis est iste
    neque, in voluptatum, adipisci repellendus dolores consequatur rem
    voluptatem voluptatibus hic delectus quod dolorem officiis molestias
    totam. Amet iure incidunt dicta repellendus autem eveniet officia sit
    mollitia veniam. Quo, error!
  </div>
</div>

<hr />

<div id="team-cards" class="container-fluid d-flex flex-column align-items-center justify-content-center">
  <div>
    <h1>Meet the Team</h1>
  </div>
  <div>
    <div class="card" style="width: 30rem">
      <img src="../images/team-members/person.jpg" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5>Ayana</h5>
        <p class="card-text">CEO/Head Coordinator</p>
      </div>
    </div>
  </div>
  <div class="container-fluid d-flex flex-row align-items-center justify-content-center">
    <div class="card" style="width: 24rem">
      <img src="../images/team-members/person.jpg" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5>Ferle</h5>
        <p class="card-text">Officer In Charge</p>
      </div>
    </div>
    <div class="card" style="width: 24rem">
      <img src="../images/team-members/person.jpg" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5>Gillian</h5>
        <p class="card-text">Officer In Charge</p>
      </div>
    </div>
    <div class="card" style="width: 24rem">
      <img src="../images/team-members/person.jpg" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5>Heds</h5>
        <p class="card-text">Officer In Charge</p>
      </div>
    </div>
  </div>
  <div class="row d-flex flex-row align-items-center justify-content-center">
    <div class="col-3 card" style="width: 18rem">
      <img src="../images/team-members/person.jpg" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5>Patricia</h5>
        <p class="card-text">On-the-day Coordinator</p>
      </div>
    </div>
    <div class="col-3 card" style="width: 18rem">
      <img src="../images/team-members/person.jpg" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5>Glenny</h5>
        <p class="card-text">On-the-day Coordinator</p>
      </div>
    </div>
    <div class="col-3 card" style="width: 18rem">
      <img src="../images/team-members/person.jpg" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5>Shimmay</h5>
        <p class="card-text">On-the-day Coordinator</p>
      </div>
    </div>
    <div class="col-3 card" style="width: 18rem">
      <img src="../images/team-members/person.jpg" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5>Donna</h5>
        <p class="card-text">On-the-day Coordinator</p>
      </div>
    </div>
    <div class="col-3 card" style="width: 18rem">
      <img src="../images/team-members/person.jpg" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5>Frenzel</h5>
        <p class="card-text">On-the-day Coordinator</p>
      </div>
    </div>
    <div class="col-3 card" style="width: 18rem">
      <img src="../images/team-members/person.jpg" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5>Mehzi</h5>
        <p class="card-text">On-the-day Coordinator</p>
      </div>
    </div>
    <div class="col-3 card" style="width: 18rem">
      <img src="../images/team-members/person.jpg" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5>Erika</h5>
        <p class="card-text">On-the-day Coordinator</p>
      </div>
    </div>
  </div>
</div>

<div id="testimonial-footer" class="container-fluid d-flex align-items-center justify-content-center">
  <figure>
    <blockquote class="blockquote">
      <p>This is a sample testimonial from a client.</p>
    </blockquote>
    <figcaption class="blockquote-footer">Mr. Smith</figcaption>
  </figure>
</div>

<div id="about-the-planner" class="container-fluid d-flex flex-column align-items-center justify-content-center">
  <div>
    <img id="pic-planner" src="../images/about-the-planner/planner-pic.png" alt="" />
  </div>
  <div>
    <img id="text-planner" src="../images/about-the-planner/about-the-planner.png" alt="" />
  </div>
</div>
<hr />
<div id="about-the-team" class="container-fluid d-flex flex-column align-items-center justify-content-center">
  <div><img src="../images/team-members/full-team.jpg" alt="" /></div>
  <div>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ipsam
      inventore illo dicta nihil a iure eum autem temporibus, officiis odio
      sunt, itaque molestias eveniet distinctio totam quisquam! Repudiandae,
      quis numquam quas vel rem voluptatum fuga cum amet maiores in, quod
      ullam quidem facilis exercitationem omnis eveniet, at hic. Dolores.
    </p>
  </div>
</div>

<?php
require '../includes/client/footer.php'
?>