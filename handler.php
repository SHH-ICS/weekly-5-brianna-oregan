<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Pi Calculation Result</title>
</head>

<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Pi Calculation Result</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content" style="margin: 20px;">
        <h3>Pi Calculation Result</h3>

        <?php
        //function to calculate Pi using the Gregory-Leibniz series
        function calculatePi($terms)
        {
          $answer = 0;
          for ($i = 0; $i < $terms; $i++) {
            $answer += 4 * ((-1) ** $i) / (2 * $i + 1);
          }
          return $answer;
        }

        if (isset($_POST['digits'])) {
          $digits = $_POST['digits'];
          if (is_numeric($digits) && $digits > 0) {
            $pi = calculatePi((int)$digits);
            echo "<h2>The calculated value of Pi is: $pi</h2>";
          } else {
            echo "<p>Please enter a positive number.</p>";
          }
        } else {
          echo "<p>No input provided. Please go back and try again.</p>";
        }
        ?>

</body>

</html>