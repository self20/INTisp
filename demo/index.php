<?php

/**
 * index.php.
 *
 * Validate all installation settings and connection to mysql
 *
 * @category Important
 *
 * @author    Adaclare
 * @copyright 2017 Adaclare
 */
 if (file_exists(".lock")) {
     ?>
     <p>Please enter your mysql credentials here.</p>
     <form method="POST" action="install.php">
  Username:<br>
  <input type="text" name="username"><Br>
  Password:<br>
  <input type="password" name="password"><Br>
  Database:<br>
  <input type="text" name="database"><Br>
      <input type="submit" value="Submit">
</form>
     <?php
     die();
 }
if (!isset($_GET['page'])) {
    header('Location: index.php?page=main');
    die();
}
if (file_exists($_GET['page'].'.php')) {
    include $_GET['page'].'.php';
    die();
} else {
    header('HTTP/1.0 404 Not Found'); ?>
<!doctype html><html><head><title>404 Not Found</title><style>
body { background-color: #fcfcfc; color: #333333; margin: 0; padding:0; }
h1 { font-size: 1.5em; font-weight: normal; background-color: #9999cc; min-height:2em; line-height:2em; border-bottom: 1px inset black; margin: 0; }
h1, p { padding-left: 10px; }
code.url { background-color: #eeeeee; font-family:monospace; padding:0 2px;}
</style>
</head><body><h1>Not Found</h1><p>The requested resource <code class="url">index.php?page=<?php echo $_GET['page']; ?></code> was not found on this server.</p></body></html>
<?php

}
?>
