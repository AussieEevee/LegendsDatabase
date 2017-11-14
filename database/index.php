<?php
require("etc/config.php") or die("Unable to load configuration file."); // Load the configuration file.

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $sitename; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo $sitestylefile; ?>">
</head>
<body>
    
<div class="header">
  <h2>Header</h2>
  <h3>CSS Template using Flexbox</h3>
  <p>In this example, we have created a header, three unequal columns and a footer. On smaller screens, the columns will stack on top of each other. Resize the browser window to see the responsive effect.</p>
  <p><strong>Note:</strong> Flexbox is not supported in Internet Explorer 10 eand earlier versions.</p>
</div>

<div class="row">
  <div class="column side" style="background-color:#aaa;">Column</div>
  <div class="column middle" style="background-color:#bbb;">Column</div>
  <div class="column side" style="background-color:#ccc;">Column</div>
</div>

<div class="footer">
  <p>Footer</p>
</div>
</body>
</html>
