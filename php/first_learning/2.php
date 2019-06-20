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

    <div class="section3">
      <h3>session 3</h3>
      <p>if</p>
      <?php $a = 1 ?>
      <?php if ($a >= 1){?>
        <p>a >= 1</p>
      <?php }else if ($a === 0) {?>
        <p>a = 0</p>
      <?php} else {?>
        <p>a < 0</p>
      <?php } ?>

      <?php if ($a >= 1):?>
        <p>a >= 1</p>
      <?php elseif ($a === 0): ?>
        <p>a = 0</p>
      <?php else: ?>
        <p>a < 0</p>
      <?php endif ?>
      <p>switch</p>
      <p>while</p>
      <p>do-while</p>
      <p>for</p>
    </div>

    <div class="section4">
      <h3>函数</h3>
      <div>
        <?php
        for ($i=0; $i < 10; $i++) {
          $num = mt_rand(100, 200);
          echo $num . "<br/>";
        }
        ?>
      </div>
      <?php
      $a = "this is global";
      function sample(int $a, float $b, $c):bool {
        static $sample;
        global $a;
        echo $a;
        return "sa";
      }
      sample(1, 2, 3);
      echo "<br/>123";
      $test = function ($x=0) use($a) {
        echo "a: ".$a;
      };
      $test();
      $a = "after";
      echo "<br/>123";
      $test();
      ?>
    </div>
  </body>
</html>
