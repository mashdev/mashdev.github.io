<?php require_once 'views/header.php' ?>

<nav>
  <div class="navbar">
    <ul>
      <li>Link 1</li>
      <li>Link 2</li>
      <li>Link 3</li>
      <li>Link 4</li>
      <li>Link 5</li>
    </ul>
  </div>
</nav>

<div class="container">
  <div> Box 1</div>
  <div> Box 2</div>
  <div> Box 3</div>
  <div> Box 4</div>
  <div> Box 5</div>
  <div> Box 6</div>
  <div> Box 7</div>
</div>

<h1>Container</h1>

<?php 

  


  $f = exif_read_data('images/bg.jpeg');

//var_dump($f);
  echo "<br><br>";
  
  $f = pathinfo('images/bg.jpeg');

  var_dump($f);
  echo "<br><br>";

  $g = getimagesize('images/bg.jpeg');
  echo "<br><br>";
  echo $g[0];
$asn = ldap_connect('link_identifier');

?>

<p class="para">Below is a demonstration of a 3 column responsive layout. I have added borders to the columns so you can see that there is padding between and around each column.</p>

<div class="flexContainer flexSpaceAround">
    <div class="col">
What? We're not at all alike! Some days you get the bear, and some days the bear gets you. Maybe if we felt any human loss as keenly as we feel one of those close to us, human history would be far less bloody. Yesterday I did not know how to eat gagh. I'd like to think that </div>
    <div class="col">
What? We're not at all alike! Some days you get the bear, and some days the bear gets you. Maybe if we felt any human loss as keenly as we feel one of those close to us, human history would be far less bloody. Yesterday I did not know how to eat gagh. I'd like to think that</div>
    <div class="col">
What? We're not at all alike! Some days you get the bear, and some days the bear gets you. Maybe if we felt any human loss as keenly as we feel one of those close to us, human history would be far less bloody. Yesterday I did not know how to eat gagh. I'd like to think that </div>
</div>






<?php require_once 'views/footer.php' ?>
