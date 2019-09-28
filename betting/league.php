<!DOCTYPE html>
<html>

<head>
  <title>todays</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    #today {
      margin: 20px;
      display: grid;
      grid-template-columns: 70% auto;
    }

    #tbl {
      background: grey;
      border-radius: 30px;
      overflow: hidden;
      color: white;
      width: 90%;
      display: grid;
      place-items: center;
      height: 50vh;
      text-align: center;
    }

    table {
      margin-top: -200px;

    }

    #sel {
      margin: 20px;
    }

    #pp {
      margin: 20px;
    }

    #info {
      background: red;
      color: white;
      border: none;
      border-radius: 20px;
      line-height: 30px;
      font-size: 20px;
      height: 80vh;
    }

    #videos {
      margin: 20px;
    }

    #story {
      margin: 20px;
      display: grid;
      grid-template-columns: 1fr 1fr;
    }

    #stry {
      display: flex;
      margin: 20px;
    }

    #str {
      display: flex;
      margin: 20px;
    }

    b {
      margin: 20px;
      font-size: 30px;
      color: blue;
    }

    .footer {
      background: grey;
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      height: 30vh;
    }

    #navigation li {
      list-style-type: none;
    }

    #navigation ul li a {
      text-decoration: none;
      margin: 20px;
      color: white;
      display: block;
      transition: .2s linear;
    }

    #navigation ul li a:hover {
      color: blue;
      letter-spacing: 2px;
    }
  </style>

  <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
  <?php

  if (!isset($_GET['league'])) {
    header('location: ./');
  }

  $league = $_GET['league'];

  require_once('php/config.php');

  $sqlFetch = "SELECT * FROM todaysbets where league='$league'";
  $result = mysqli_query($connection, $sqlFetch);

  include __DIR__ . '/components/header.php';
  ?>

  <section id="today">
    <div id="select">
      <div id="tbl">
        <h4><?php echo strtoupper($_GET['league']); ?></h4>
        <table border="1" width="80%" cellspacing="0">
          <tr>
            <th bgcolor="red">league</th>
            <th bgcolor="red">HOME TEAM</th>
            <TH bgcolor="red">AWAY TEAM</TH>
            <TH bgcolor="red">TIP</TH>
          </tr>
          <?php
          if (mysqli_num_rows($result) > 0) :
            while ($row = mysqli_fetch_assoc($result)) : ?>
          <tr>
            <td><?= $row['league']; ?> </td>
            <td><?= $row['home']; ?></td>
            <td><?= $row['away']; ?></td>
            <td><?= $row['tip']; ?></td>
          </tr>
          <?php
            endwhile;
          endif;
          ?>
        </table>
      </div>
      <div id="sel">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste, veniam nobis dolore quam accusamus labore ipsum sunt?
        Laborum minus esse quis, consequatur magni provident recusandae sed ipsam eum modi dolores?
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste, veniam nobis dolore quam accusamus labore ipsum sunt?
        Laborum minus esse quis, consequatur magni provident recusandae sed ipsam eum modi dolores?
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste, veniam nobis dolore quam accusamus labore ipsum sunt?
        Laborum minus esse quis, consequatur magni provident recusandae sed ipsam eum modi dolores?
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste, veniam nobis dolore quam accusamus labore ipsum sunt?
        Laborum minus esse quis, consequatur magni provident recusandae sed ipsam eum modi dolores?
      </div>
    </div>
    <div id="info">
      <div id="pay">
        <img src="image/happy.png" width="50%" height="50%" style="margin-left:30%;">
        <div id="pp">
          <p>Hey guys....enjoying our free bets</p>
          <p>
            you can even enjoy more by joining the vip section where you will
            get your 6 best special bets... there is a high guarantee that you
            will walk away with full pockets
          </p>
          <p>for you to join the vip section</p>
          <ol>
            <li>
              you can pay <font color="blue">500ksh</font> for 1 week predictions or pay<font color="blue">1500ksh</font> for
              monthly predictions
            </li>
            <li>
              during registration you will be required to pay first to complete
              the registration....a verification code will be sent to you
            </li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <b>Related videos</b>
  <div id="videos">

    <div id="story">
      <div id="stryv">
        <div id="stry"><img src="image/hazard.jpg" width="300px" height="200px" style="border:1px solid;">
          <p>This id what hazard has to say about real madrid<a href="www.laliga.com"></a>
          </p>
        </div>
        <div id="stry"><img src="image/messi.jpg" width="300px" height="200px" style="border:1px solid;">
          <p>This id what hazard has to say about real madrid<a href="www.laliga.com"></a>
          </p>
        </div>
        <div id="stry"><img src="image/eden.png" width="300px" height="200px" style="border:1px solid;">
          <p>This id what hazard has to say about real madrid<a href="www.laliga.com"></a>
          </p>
        </div>
      </div>
      <div id="stri">
        <div id="str"><img src="image/chelsea.jpg" width="300px" height="200px" style="border:1px solid;">
          <p>This id what hazard has to say about real madrid<a href="www.laliga.com"></a>
          </p>
        </div>
        <div id="str"><img src="image/player.jpg" width="300px" height="200px" style="border:1px solid;">
          <p>This id what hazard has to say about real madrid<a href="www.laliga.com"></a>
          </p>
        </div>
        <div id="str"><img src="image/hazard.jpg" width="300px" height="200px" style="border:1px solid;">
          <p>This id what hazard has to say about real madrid<a href="www.laliga.com"></a>
          </p>
        </div>
      </div>
    </div>
    <?php include __DIR__ . '/components/footer.php'; ?>
</body>

</html>