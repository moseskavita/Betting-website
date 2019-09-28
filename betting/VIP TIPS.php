<!DOCTYPE html>
<html>
<style>
  .left {
    background: grey;
    width: 80%;
    height: 50vh;
    margin: 20px;
    border-radius: 30px;
  }

  h1 {
    text-align: center;
  }
</style>

<head>
  <title>betting tips</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <?php
  include __DIR__ . '/components/header.php';


  require_once('admin/config.php');
  $sqlfetch = "SELECT * FROM vip";
  $result = mysqli_query($connection, $sqlfetch);

  ?>
  <section class="tbl-vip">
    <div class="left">
      <h1>VIP Tips</h1>
      <table width="80%" cellspacing="0" border=1>
        <tr>
          <th>League</th>
          <th>Home</th>
          <th>Away</th>
          <th>Tip</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result)) : ?>
          <tr>
            <td><?php echo $row['leagues']; ?></td>
            <td><?php echo $row['hometeam']; ?></td>
            <td><?php echo $row['awayteam']; ?></td>
            <td><?php echo $row['tips']; ?></td>
          </tr>
        <?php endwhile; ?>
    </div>




</body>

</html>