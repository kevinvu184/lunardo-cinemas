<?php

$codes = array("STA", "STP", "STC", "FCA", "FCP", "FCC");

$GLOBALS = [
  "DESCRISPTION" => [
    "STA" => "Standard - Adult",
    "STP" => "Standard - Concession",
    "STC" => "Standard - Children",
    "FCA" => "First Class - Adult",
    "FCP" => "First Class - Concession",
    "FCC" => "First Class - Children"
  ],

  "PRICES_DISCOUNT" => [
    "STA" => 14.00,
    "STP" => 12.50,
    "STC" => 11.00,
    "FCA" => 24.00,
    "FCP" => 22.50,
    "FCC" => 21.00
  ],
  "PRICES_NORMAL" => [
    "STA" => 19.80,
    "STP" => 17.50,
    "STC" => 15.30,
    "FCA" => 30.00,
    "FCP" => 27.00,
    "FCC" => 24.00
  ],
  "TIME_CODE" => [
    "T12" => "12:00pm",
    "T15" => "15:00pm",
    "T18" => "18:00pm",
    "T21" => "21:00pm"
  ],

  "TITLE_ARRAY" => [
    "ACT" => "Avengers: Endgame",
    "RMC" => "Top End Wedding",
    "ANM" => "Dumbo",
    "AHF" => "The Happy Prince"
  ]
];

function preShow($arr, $returnAsString = false)
{
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else
    echo $ret;
}

function printMyCode()
{
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<section class='noprint code-section'>";
  echo "<h3>Page Code</h3>";
  echo "<pre class='mycode'><ul>";
  $lineNo = 0;
  foreach ($lines as $line) {
    $space = ($lineNo < 10) ? '   ' : (($lineNo < 100) ? '  ' : ' ');
    echo '<li>' . "$space$lineNo:" . rtrim(htmlentities($line)) . '</li>';
    $lineNo++;
  }
  echo '</ul></pre></section>';
}

function php2js($arr, $arrName)
{
  $lineEnd = "";
  echo "<script>\n";
  echo "/* Generated with A4's php2js() function */";
  echo "  var $arrName = " . json_encode($arr, JSON_PRETTY_PRINT);
  echo "</script>\n\n";
}

function table($title, $arr)
{
  echo "<section class='noprint data-section'>";
  echo "<hr>";
  echo "<h3>$title contains:</h3>";
  if (!empty($arr)) {
    echo "<table class=\"data-table tree\">";
    foreach ($arr  as $i => $item) {
      foreach ($item as $j => $subitem) {
        echo "<tr>";
        echo "<td>{$i}</td>";
        echo "<td>{$j}</td>";
        echo "<td>{$subitem}</td>";
        echo "</tr>";
      }
    }
    echo "</table>";
  } else {
    echo "<p>Nothing</p>";
  }
  echo '</section>';
}

function debugModule()
{
  printMyCode();
}

function movieTitle(&$id)
{
  $id = $GLOBALS['TITLE_ARRAY'][$id];
}

function movieHour(&$hour)
{
  $hour = $GLOBALS['TIME_CODE'][$hour];
}

function movieDes($seat_code)
{
  return $GLOBALS['DESCRISPTION'][$seat_code];
}

function movieUnitPrice($seat_code, $day, $time)
{
  $unit_price = 00.00;
  if (($day == 'MON') || ($day == 'WED') || (($day == 'TUE') && ($time == '12:00pm')) || (($day == 'WED') && ($time == '12:00pm')) || (($day == 'THU') && ($time == '12:00pm')) || (($day == 'FRI') && ($time == '12:00pm'))
  ) {
    $unit_price = floatval($GLOBALS['PRICES_DISCOUNT'][$seat_code]);
  } else {
    $unit_price = floatval($GLOBALS['PRICES_NORMAL'][$seat_code]);
  }
  return number_format($unit_price, 2);
}


function validateName($name, &$nameError, &$errorFound)
{
  $nameRegex = "/^[A-Za-z .\-']{1,50}$/";
  if (empty($name) || $name == '0') {
    $nameError =  '<div class="form-error">Name cannot be blank</div>';
    $errorFound = true;
  } else if (!preg_match($nameRegex, $name)) {
    $nameError =  '<div class="form-error">Please input correct name format</div>';
    $errorFound = true;
  }
}
function validateCreditCard($creditCard, &$creditCardError, &$errorFound)
{
  $creditCardRegex = "/^(?! )^( ?\d){14,19}(?<! )$/";
  if (empty($creditCard) || $creditCard == '0') {
    $creditCardError =  '<div class="form-error">Credit card cannot be blank </div>';
    $errorFound = true;
  } else if (!preg_match($creditCardRegex, $creditCard)) {
    $creditCardError =  '<div class="form-error">Please enter valid credit card </div>';
    $errorFound = true;
  }
}
function validatePhone($phone, &$phoneError, &$errorFound)
{
  $phoneRegex = "/^(\(04\)|04|\+614)( ?\d){8}$/";
  if (!preg_match($phoneRegex, $phone)) {
    $errorFound = true;
    if (empty($phone) || $phone == '0') {
      $phoneError = "<div class=\"form-error\">Phone cannot be blank </div>";
    } else {
      $phoneError = "<div class=\"form-error\">Please enter correct phone format </div>";
    }
  }
}
function validateEmail($email, &$emailError, &$errorFound)
{
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorFound = true;
    if (empty($email) || $email == '0') {
      $emailError =  "<div class=\"form-error\"> Email cannot be blank </div>";
    } else {
      $emailError =  "<div class=\"form-error\"> Please enter correct email format </div>";
    }
  }
   
}
function validateSeat($seatArray, &$seatError,&$errorFound)
{
  $totalSeatSelected = 0;
  $minRangeSeat = 1;
  $maxRangeSeat = 10;
  foreach ($seatArray as $seatCode => $value) {
    //if different from blank then must be a positive integer 1-10
    if ($value != '') {
      if (!filter_var($value, FILTER_VALIDATE_INT, array("options" => array("min_range" => $minRangeSeat, "max_range" => $maxRangeSeat)))) {
        $errorFound = true;
      } else {
        $totalSeatSelected++;
      }
    }
  }
  if ($totalSeatSelected == 0) {
    $seatError = '<div class="form-error"> Please choose your seats </div>';
    $errorFound = true;
  }
}
function validateExpiryDate($expiryMonth, $expiryYear, &$errorFound, &$expiryError)
{
  $rangeYearMin = date("Y");
  $rangeYearMax = $rangeYearMin + 20;
  $rangeMonthMin = 1;
  $rangeMonthMax = 12;
  
  if (!is_numeric($expiryMonth) || !is_numeric($expiryYear)) {
    $expiryError =  '<div class="form-error">Please specify this field</div>';
    $errorFound = true;
  } else {
    if (!filter_var($expiryYear, FILTER_VALIDATE_INT, array("options" => array("min_range" => $rangeYearMin, "max_range" => $rangeYearMax))) || !filter_var($expiryMonth, FILTER_VALIDATE_INT, array("options" => array("min_range" => $rangeMonthMin, "max_range" => $rangeMonthMax)))) {
      $errorFound = true;
      $expiryError =  '<div class="form-error">Stop hacking my site !!!</div>';
    } else {
      if ($expiryYear == date("Y")) {
        if ($expiryMonth < date("m")) {
          $expiryError =  '<div class="form-error">Stop hacking my site !!!</div>';
          $errorFound = true;
        } else if ($expiryMonth == date("m")) {
          $expiryError =  '<div class="form-error">Expiry month cannot be within month of purchase</div>';
          $errorFound = true;
        }
      }
    }
  }
}
function validateMovieID($movieID, &$errorFound)
{
  if ($movieID != 'ACT' && $movieID != 'AHF' && $movieID != 'ANM' && $movieID != 'RMC') {
    $errorFound = true;
    return false;
  }
  return true;
}
function validateMovieDay($movieDay, &$errorFound)
{
  if ($movieDay != 'MON' && $movieDay != 'TUE' && $movieDay != 'WED' && $movieDay != 'THU' && $movieDay != 'FRI' && $movieDay != 'SAT' && $movieDay != 'SUN') {
    $errorFound = true;
  }
}
function validateMovieHour($movieHour, &$errorFound)
{
  if ($movieHour != 'T12' && $movieHour != 'T15' && $movieHour != 'T18' && $movieHour != 'T21') {
    $errorFound = true;
  }
}