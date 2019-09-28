<!doctype html>
<html>

<head>
  <title>betting tips</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript">
    function moseti() {
      alert("welcome to moseti predict")
    }
  </script>
</head>

<body onload="moseti()">
  <?php
  require_once('php/config.php');

  $sqlFetch = "SELECT * FROM freebets";
  $result = mysqli_query($connection, $sqlFetch);

  include __DIR__ . '/components/header.php';

  ?>

  <div id="para">
    Welcome to our bet tips..We offer the best bet tips...we also offer
    special tips for the vip every day If you wish to join the vip, follow the
    simple steps shown below
    <ul type="circle">
      <li>click the register button</li>
      <li>fill in all the fields</li>
      <li>
        you will be required to pay money as per the way you want either weekly or monthly
      </li>
      <li>
        after filling everything , a verification code will be sent to you
      </li>
    </ul>
    PS:<b>check the number well before sending the money</b>
  </div>

  <section id="tips">
    <div id="left">
      <h3>FREE BETS</h3>
      <table border="1" width="80%" cellspacing="0">
        <tr>
          <th bgcolor="red">HOME TEAM</th>
          <th bgcolor="red">AWAY TEAM</th>
          <th bgcolor="red">TIPS</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) :
          while ($rows = mysqli_Fetch_assoc($result)) :
            ?>
            <tr>
              <td><?= $rows['home']; ?></td>
              <td><?= $rows['away']; ?></td>
              <td><?= $rows['tip']; ?></td>
            </tr>
          <?php
          endwhile;
        endif;
        ?>
      </table>
    </div>
    <div id="right">
      <div id="thanks">
        <h2>thanks for choosing us</h2>
      </div>

      <div id="pp">
        <p>Hey guys....enjoying our free bets</p>
        <p>
          you can even enjoy more by joining the vip section where you will
          get your 6 best special bets... there is a high guarantee that you
          will walk away with full pockets
        </p>
        <p>
          <font size="5">for you to join the vip section</font>
        </p>
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
      <div id="social">
        share with others
        <button><a href="www.facebook.com">facebook</a></button>
      </div>
    </div>

    </div>

  </section>
  <div id="info">
    <p1>Our bettips are very accurate and precise</p>
      <p2>we provide prediction for all the popular leagues in the world mostly the premier league.....</p2>
      <p3>the tips are of high quality but there is no guarantee that you will win everything though our special tips cover 90% of the winnings</p3>
      <p4>For more predictions click on the prediction and choose the league you want</p4>
  </div>

  <div id="information">
    <p1>Our site is trustworthy...if of any doubt call us or visit the helpdesk for assistance</p>
      <p2>we dont sell correct scores or even fixed odds....</p2>
      <p3>dont get tricked by others...only moseti predict</p3><br>
      <p4>For more predictions click on the prediction and choose the league you want</p4>
  </div>
  <div id="informative">
    <p1>Our bettips are very accurate and precise</p>
      <p2>we provide prediction for all the popular leagues in the world mostly the premier league.....</p2>
      <p3>the tips are of high quality but there is no guarantee that you will win everything though our special tips cover 90% of the winnings</p3>
      <p4>For more predictions click on the prediction and choose the league you want</p4>
  </div>
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