<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css">
    <title>Login app</title>
  </head>
  <body>
      <div class="site">
      <header><nav><ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="<?= $logged_in ? 'account.php' : 'login.php'; ?>">Account</a></li>
          <?= $logged_in ? '<li><a href="logout.php">Logout</a></li>' : '<li><a href="login.php">Login</a></li>'; ?>
          
      </ul></nav></header>
      <main>