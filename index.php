<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head(); ?>
</head>
<body>
  <h1>Site Title</h1>
  
  <ul>
    <li><a href="#">Airplanes</a></li>
      <ul>
        <li><a href="#">Military</a></li>
        <li><a href="#">GA</a></li>
        <li><a href="#">Ultralights</a></li>
      </ul>
    <li><a href="#">Airports</a></li>
    <li><a href="#">Fly-Ins</a></li>
    <li><a href="#">Jobs</a></li>
    <li><a href="#">Memes</a></li>
  </ul>
  <?php wp_footer(  ); ?>
</body>
</html>