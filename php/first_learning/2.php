<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $sample_text = 'uuid sample_text';
    ?>
    <h1>title</h1>
    <p><?= $sample_text; ?></p>
    <p><?php echo $sample_text; ?></p>
    <span>
      <pre>
      <?php
      $sample="b";
      print("a".$sample); // => ab
      echo '<br/>';
      $array = array("a", "b", "c"."d");
      print_r($array);
      var_dump($array);
      echo 123 . 100;
      echo "a"."b";
      ?>
      </pre>
    </span>
  </body>
</html>
