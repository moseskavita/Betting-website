<html>

<head>
  <title>admin</title>
  <style>
    h1 {
      color: red;
      font-size: 40px;
      margin: 20px;
    }

    #nav {
      background: grey;
      width: 100%;
      height: 10vh;
      margin-top: 0;
      display: grid;
      grid-template-columns: 30% auto;
    }

    #nav li {
      list-style-type: none;
      display: inline-block;
    }

    #nav ul li a {
      text-decoration: none;
      display: block;
      border: 1px solid;
      border-radius: 30px;
      color: white;
      padding: 8px;
      margin: 10px;
    }

    #nav ul li a:hover {
      background: red;
    }

    #today {
      background: url("images/eden.png");
      background-position: center;
      position: relative;
      width: 100%;
      background-repeat: no-repeat;
      height: 100vh;
      background-size: cover;
    }

    .fr-td {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      width: 80%;
    }


    input[type="text"] {
      padding: 8px;
      margin: 20px;
      border-radius: 30px;
      outline: none;
      border: 1px solid;
    }

    input[type="submit"] {
      padding: 8px;
      background: red;
      border-radius: 40px;
      margin: 20px;
      width: 30%;
      border: none;
      outline: none;
    }

    h2 {
      background: grey;
      color: white;
      width: 50%;
      border-radius: 30px;
      height: 8vh;
      text-align: center;
    }

    h3 {
      background: grey;
      color: white;
      width: 50%;
      border-radius: 30px;
      height: 8vh;
      text-align: center;
    }

    h4 {
      background: grey;
      color: white;
      width: 50%;
      border-radius: 30px;
      height: 8vh;
      text-align: center;
    }
  </style>
</head>

<body>

  <?php

  include_once('config.php');

  session_start();

  // Freebets
  $_SESSION['id'] = '';
  $_SESSION['homes'] = '';
  $_SESSION['aways'] = '';
  $_SESSION['tipsy'] = '';
  $_SESSION['update_freebets'] = false;

  // Todays bets
  $_SESSION['id'] = '';
  $_SESSION['league'] = '';
  $_SESSION['home'] = '';
  $_SESSION['away'] = '';
  $_SESSION['tip'] = '';
  $_SESSION['update_tdsbets'] = false;

  // Vip bets
  $_SESSION['id'] = '';
  $_SESSION['leagues'] = '';
  $_SESSION['hometeam'] = '';
  $_SESSION['awayteam'] = '';
  $_SESSION['tips'] = '';
  $_SESSION['update_vipbets'] = false;

  if (isset($_GET['update_freebets'])) {

    $id = $_GET['update_freebets'];

    $sqlFetch = "SELECT * FROM freebets WHERE id=$id LIMIT 1";
    $result = mysqli_query($connection, $sqlFetch);

    if (mysqli_num_rows($result) == 1) {

      $_SESSION['update_freebets'] = true;

      $row = mysqli_fetch_assoc($result);

      $_SESSION['id'] = $row['id'];
      $_SESSION['homes'] = $row['home'];
      $_SESSION['aways'] = $row['away'];
      $_SESSION['tipsy'] = $row['tip'];
    }
  } else if (isset($_GET['update_tdsbets'])) {

    $id = $_GET['update_tdsbets'];

    $sqlFetch = "SELECT * FROM todaysbets WHERE id=$id LIMIT 1";
    $result = mysqli_query($connection, $sqlFetch);

    if (mysqli_num_rows($result) == 1) {

      $_SESSION['update_tdsbets'] = true;

      $row = mysqli_fetch_assoc($result);

      $_SESSION['id'] = $row['id'];
      $_SESSION['league'] = $row['league'];
      $_SESSION['home'] = $row['home'];
      $_SESSION['away'] = $row['away'];
      $_SESSION['tip'] = $row['tip'];
    }
  } else if (isset($_GET['update_vipbets'])) {

    $id = $_GET['update_vipbets'];

    $sqlFetch = "SELECT * FROM vip WHERE id=$id LIMIT 1";
    $result = mysqli_query($connection, $sqlFetch);

    if (mysqli_num_rows($result) == 1) {

      $_SESSION['update_vipbets'] = true;

      $row = mysqli_fetch_assoc($result);

      $_SESSION['id'] = $row['id'];
      $_SESSION['leagues'] = $row['leagues'];
      $_SESSION['hometeam'] = $row['hometeam'];
      $_SESSION['awayteam'] = $row['awayteam'];
      $_SESSION['tips'] = $row['tips'];
    }
  }

  ?>

  <div id="nav">
    <ul>
      <li><a href="freebets.php">freebets</a></li>
      <li><a href="today.php">todays</a></li>
      <li><a href="VIP.php">VIP Tips</a></li>
      <li><a href="admin.php">home</a></li>
    </ul>
    <h1>BETTING TIPS ADMINISTRATION</h1>
  </div>

  <section id="today">
    <div class="fr-td">
      <div id="free">

        <!-- Freebets form -->
        <form id="fr-bets" action="action.php" method="post" autocomplete="off">
          <h2>FREEBETS</h2>
          <input type="hidden" name="id" value="<?= $_SESSION['id']; ?>" />
          <input type="text" name="home" value="<?= $_SESSION['homes']; ?>" placeholder="home team" required />
          <input type="text" name="away" value="<?= $_SESSION['aways']; ?>" placeholder="away team" required />
          <input type="text" name="tip" value="<?= $_SESSION['tipsy']; ?>" placeholder="tips" required />
          <?php if ($_SESSION['update_freebets'] == true) : ?>
            <input type="submit" name="update_freebets" value="update" required />
          <?php else : ?>
            <input type="submit" name="reg_freebets" value="add" required />
          <?php endif; ?>
        </form>
      </div>

      <!-- Todays bets -->
      <div id="td-bets">
        <form id="tdy" action="action.php" method="post" autocomplete="off">
          <h3>TODAYSBETS</h3>
          <input type="hidden" name="id" value="<?= $_SESSION['id']; ?>" />
          <input type="text" name="league" value="<?= $_SESSION['league']; ?>" placeholder="league" required />
          <input type="text" name="home" value="<?= $_SESSION['home']; ?>" placeholder="home team" required />
          <input type="text" name="away" value="<?= $_SESSION['away']; ?>" placeholder="away team" required />
          <input type="text" name="tip" value="<?= $_SESSION['tip']; ?>" placeholder="tips" required />

          <?php if ($_SESSION['update_tdsbets'] == true) : ?>
            <input type="submit" name="update_todaysbets" value="update" required />
          <?php else : ?>
            <input type="submit" name="td_bets" value="add" />
          <?php endif; ?>
        </form>
      </div>

      <!-- Vip form -->
      <div id="vip">
        <form id="vip" action="action.php" method="post" autocomplete="off">
          <h4>VIP Tips</h4>
          <input type="hidden" name="id" value="<?= $_SESSION['id']; ?>" />
          <input type="text" name="leagues" value="<?= $_SESSION['leagues']; ?>" placeholder="league" required />
          <input type="text" name="hometeam" value="<?= $_SESSION['hometeam']; ?>" placeholder="home team" required />
          <input type="text" name="awayteam" value="<?= $_SESSION['awayteam']; ?>" placeholder="away team" required />
          <input type="text" name="tips" value="<?= $_SESSION['tips']; ?>" placeholder="tips" required />

          <?php if ($_SESSION['update_vipbets'] == true) : ?>
            <input type="submit" name="update_vip" value="update" required />
          <?php else : ?>
            <input type="submit" name="tb_vip" value="add" />
          <?php endif; ?>
        </form>
      </div>

    </div>
  </section>
</body>

</html>