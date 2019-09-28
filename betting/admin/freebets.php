<html>

<head>
  <title>freebets</title>
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

    #table-bt {
      background: #efefef;
      height: 100vh;
    }

    table {
      margin: 30px;
    }
  </style>
</head>

<body>
  <?php

  require('config.php');
  $sqlFetch = "SELECT * FROM freebets";
  $result = mysqli_query($connection, $sqlFetch);

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
  <section id="table-bt">
    <table border="1" width="50%" cellspacing="0">
      <tr>
        <th>Home team</th>
        <th>away team</th>
        <th>tips</th>
        <th>service</th>
      </tr>
      <?php
      while ($row = mysqli_fetch_assoc($result)) :
        ?>
        <tr>
          <td><?php echo $row['home']; ?></td>
          <td><?php echo $row['away']; ?></td>
          <td><?php echo $row['tip']; ?></td>
          <td><a href="admin.php?update_freebets=<?php echo $row['id']; ?>">update</a>
            <a href="action.php?delete=<?php echo $row['id']; ?>">delete</a></td>
        </tr>
      <?php endwhile; ?>
    </table>
  </section>

</body>

</html>