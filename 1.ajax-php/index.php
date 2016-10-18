<h1>AJAX and PHP</h1>
<?php
$dirs = scandir(".");
foreach ($dirs as $dir) {
  if (in_array($dir, ['.', '..'])) {
    continue;
  }
  if (!is_dir($dir)) {
    continue;
  }
  echo "<a href=\"{$dir}/index.php\">{$dir}</a><br />";
}
