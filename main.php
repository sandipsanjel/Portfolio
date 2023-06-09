<?php
session_start()

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing-page</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;500&display=swap');

    * {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }

    nav {
      background-color: black;
      color: #fff;
      font-size: 2em;
      height: 100px;
      text-align: center;
    }

    nav ul {
      list-style: none;
      margin: 0px;
      padding: 20px;
    }

    nav li {
      display: inline-block;
      margin-right: 20px;
    }

    nav li:last-child {
      margin-right: 10px;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      display: block;
      line-height: 50px;
      padding: 0 10px;
    }

    nav a:hover {
      background-color: #555;
    }

    html,
    body {
      line-height: 1.4;
      font-weight: 300;
      font-family: "Roboto", sans-serif;
    }

    .hero_section {
      background-image: url(img/developer.png);
      min-height: 100vh;
      background-position: center;
      background-size: cover;
      background-repeat: repeat;
    }

    .text_container {
      color: white;
      max-width: 900px;
      margin: 0px auto;
      padding-top: 70px;
      padding-left: 50px;
    }

    .lg_text {
      font-size: 60px;
      font-weight: 200px;
    }

    .black_box {
      font-size: 20px;
      text-align: center;
      background-color: black;
      color: black;
      background-color: white;
    }

    .black_box h2 {
      font-size: 40px;
      color: black;
      text-align: center;
      font-weight: 300;
    }

    .black_box h2 span {
      font-weight: 600;

      font-size: 50px;
    }

    .work {
      display: grid;
      gap: 20px;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));

      max-width: 1100px;
      margin: 50px auto;
    }

    .grid_item {

      justify-content: center;
      align-items: center;
    }

    .card {
      max-width: 320px;
      height: 400px;
      border-radius: 10px;
      box-shadow: 3px 5px 5px rgba(1, 1, 1, 0.2);
      transition: 0.3s ease-in-out;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 3px 5px 5px rgba(1, 1, 1, 0.3);
      transition: 0.3s ease-in-out;
    }

    .card_content h3,
    p {
      text-align: center;
      margin-bottom: 20px;
      text-overflow: inherit;

    }

    .card_content p {
      width: 100%;
      overflow:hidden;
      white-space: nowrap;
      text-overflow: ellipsis;
    }




    .card_content {
      text-align: center;
      padding: 10px;
      width: 100%;
     

    }


    .bottom_section {
      display: flex
    }

    .bottom_section p {
      text-align: justify;
    }

    .contact {
      background-color: #722300;

    }

    .About {
      background-color: #515603;

    }

    .contact,
    .About {
      min-height: 300px;
      padding: 32px;
      color: white;
    }


    .About h2,
    .contact h2 {
      font-size: 64px;
      font-weight: 300;
    }

    .About p,
    .contact p {
      margin-bottom: 20px;
    }

    footer {
      color: white;
      padding: 20px;
      background-color: black;
      text-align: center;
      text-transform: capitalize;

    }

    @media (max-width: 786px) {
      .hero_section {
        min-height: 40vh;
      }

      .text_container {
        padding: 10px 0;
        text-align: center;
      }

      .lg_text {
        font-size: 32px;
      }

      .black_box h2 {
        font-size: 24px;
      }

      .black_box h2 span {
        font-weight: 400;
        font-size: 32px;
      }

      .bottom_section {
        flex-direction: column;
      }

      h1 {
        font-size: 30px;
      }

      .About h2,
      .contact h2 {
        font-size: 10px;
      }
    
  @keyframes movingText {
    0% {
      transform: translateX(-100%);
    }
    100% {
      transform: translateX(100%);
    }
  }

  .lg_text{
    animation: movingText 5s linear infinite;
  }


    }
  </style>
  <nav>
    <ul>
      <li>
         User Name : 
        <?php  echo $_SESSION["sun"]; ?>
      </li>
      <li><a href="#home">Home</a></li>
      <li><a href="#about-me">About Me</a></li>
      <li><a href="form.php">Contact Me</a></li>
      <?php
      //  if  ($sun ==='sandip'){
      //   echo ""
      //  }
      ?>
      <li><a href="list.php">List</a></li>
      <li><a href="registerpro.php">Register</a></li>
      <li><a href="loginform.php">Login</a></li>
      <li><a href="logout.php">Log OUt</a></li>
    </ul>
  </nav>

<body>
  <section id="home">
    <section class="hero_section">
      <div class="text_container">
        <h2><span class="lg_text">HI..</span> I am .......</h2>
        <h1 class="lg_text">FULL-STACK DEVELOPER</h1>
      </div>
    </section>
  </section>
  <section class="black_box">
    <h2>WORK, I CAN DO FOR <span>YOU</span></h2>
    <section class="work">
      <div class="grid_item">
        <div class="card">
          <div class="image_container">
            <img src="img/web.png" alt="web development" />
          </div>
          <div class="card_content">
            <h3>Web Development</h3>
            <p>
              <!-- As a freelance web developer, I specialize in PHP and Laravel framework, complemented by strong frontend
              skills in HTML, CSS, and JavaScript. With this skill set, I offer comprehensive web development services
              to clients seeking robust and visually appealing web applications. Using PHP and Laravel, I can create
              scalable and efficient web solutions, while my expertise in HTML, CSS, and JavaScript allows me to craft
              engaging user interfaces, implement responsive designs, and add interactive elements for an enhanced user
              experience. By combining backend and frontend skills, I deliver cohesive and comprehensive solutions that
              meet the unique needs of modern web applications. As a freelancer, I am committed to providing
              high-quality work, meeting project deadlines, and ensuring client satisfaction. -->
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nemo quidem, facere earum fugit inventore
              magnam ea consequuntur est aperiam aliquid perspiciatis incidunt labore dolorem, rerum ducimus!
              Voluptatem, deserunt debitis.
            </p>
          </div>
        </div>
      </div>
      <div class="grid_item">
        <div class="card">
          <div class="image_container">
            <img src="img/mobile.png" alt="app development" />
          </div>
          <div class="card_content">
            <h3>App Development</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione
              quibusdam ex quaerat quasi nostrum tempore.
            </p>
          </div>
        </div>
      </div>
      <div class="grid_item">
        <div class="card">
          <div class="image_container">
            <img src="img/uiux.png" alt="web development" />
          </div>
          <div class="card_content">
            <h3>UI UX Design</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione
              quibusdam ex quaerat quasi nostrum tempore.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="bottom_section">
      <!-- <div class="contact">
        <h2>Contact Me</h2>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus aut
          cupiditate est hic minima ratione distinctio porro eveniet aliquid
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum, aut!
          molestiae cum optio nemo earum numquam sapiente, molestias saepe nulla
          Qui dolorum, corporis obcaecati iusto, accusamus reiciendis, modi in
          magni incidunt molestias ipsam magnam impedit ex nemo. Praesentium,
          voluptatem odit.
        </p>
        <a   href="form.php">click here</a> 
      </div> -->
      <section id=about-me>
        <div class="About">
          <h2>About Me</h2>
          <p>

            I am a PHP + Laravel developer with a strong passion for technology and a diverse skill set. Alongside my
            expertise in PHP and Laravel, I also possess UI/UX design capabilities and a background in software
            development. I am deeply enthusiastic about leveraging my technical skills to create exceptional user
            experiences and innovative software solutions. With a keen eye for detail and a commitment to staying
            up-to-date with the latest industry trends, I am dedicated to delivering high-quality products that meet and
            exceed client expectations. My passion for technology drives me to continually expand my knowledge and
            explore new possibilities within the realm of web development.
          </p>
        </div>
      </section>
    </section>
    <footer>
      <a href="#" style="color: white">CopyrightⒸ</a> 1999-2022 by Refsnes Data.
      All Rights Reserved. SANDIP is Power by sandip sanjel.
    </footer>
</body>

</html>