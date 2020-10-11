<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="index.css" />
</head>

<body>
  <?php
  error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
  ?>
  <div class="main__container">
    <div class="form__container">
      <form action="index.php" method="post">
        <div class="form__heading">
          <h2>Data Form</h2>
        </div>
        <div>
          <b>Name:</b> <br />
          <input type="text" name="name" class="form__input" placeholder="Name" />
        </div>
        <div>
          <b>City:</b> <br />
          <input type="text" name="city" class="form__input" id="" placeholder="City" />
        </div>
        <div>
          <b> Occupation:</b> <br />
          <input type="text" name="occupation" class="form__input" id="" placeholder="Occupation" />
        </div>
        <div class="form__button"><input type="submit" value="Submit" name="submit" /></div>
      </form>
    </div>
    <div class="result__container">
      <div class="table__heading">Result Data</div>
      <div class="table__container">
        <table>
          <tr>
            <th>Name</th>
            <th>City</th>
            <th>Occupation</th>
          </tr>
          <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
              <td> <?php echo $row['name'] ?> </td>
              <td> <?php echo $row['city'] ?> </td>
              <td> <?php echo $row['occupation'] ?> </td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
</body>

</html>