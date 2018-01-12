
  <?php
    include_once("classes/alarm.php");
    $geta = Alarm::Instance($_GET['id']);
    $getj = json_encode($geta);
    $gstate = $geta->state;
    echo $getj;
    echo "<br>";
    echo "state";
    var_dump($gstate);
    echo "<br>";
    echo "state no q =";
    var_dump($gstate === 1);
    echo "<br>";
    echo "state q = ";
    var_dump($gstate === '1');
    echo "<br>";
    if ($gstate === '1') {
      $geta->state = 2;
      // $getback = json_decode($getj)
      // echo json_encode(Alarm::update_db($_GET['id']),JSON_PRETTY_PRINT);
      $geta->update_db();
    }
   ?>
