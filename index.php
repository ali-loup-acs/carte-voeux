<?php
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    $msg = "Bonne année et joyeuses fêtes :\r\n".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $headers = "From: ALI LOUP<ali.j@codeur.online>\r\n".
             "MIME-Version: 1.0" . "\r\n" .
             "Content-type: text/plain; charset=UTF-8" . "\r\n";
    // send email
    mail($email,"Happy New Year",$msg,$headers);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Carte de Voeux</title>
    <meta name="description" content="awesome wish card">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
      <h2>AWESOME WISH CARD</h2>
    </header>
    <main>
      <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      width="100%" height="100%" viewBox="0 0 1280 800" enable-background="new 0 0 1280 800" xml:space="preserve">
        <g id="animation_6_">
          <g id="lune_12_">
            <path id="lune_13_" fill="#FFFF00" d="M633.299,69.257c182.147,0,332.384,147.629,335.564,329.738
            c3.18,182.11-141.903,329.738-324.051,329.738c-182.146,0-332.383-147.628-335.563-329.738
            C306.071,216.886,451.152,69.257,633.299,69.257z"/>

            <text id="name_6_" transform="matrix(1.0002 0 0 1 364.5483 417.0059)" fill="#003366" font-family="'Algerian'" font-size="65.3456">HAPPY NEW YEAR</text>
          </g>
          <path id="eclipse_7_" fill="#003366" d="M634.867,66.622c184.158,0,336.052,149.259,339.269,333.378
          c3.214,184.122-143.471,333.38-327.629,333.38c-184.159,0-336.054-149.258-339.268-333.38
          C304.025,215.88,450.709,66.622,634.867,66.622z"/>
        </g>
        <g id="background">
          <path fill="#003366" d="M0,0v800h1280V0H0z M640,727.994c-181.146,0-327.994-146.848-327.994-327.994
          c0-181.146,146.848-327.994,327.994-327.994c181.146,0,327.994,146.848,327.994,327.994
          C967.994,581.146,821.146,727.994,640,727.994z"/>
          <g id="stars">
            <path fill="#FFFF00" d="M247.683,634.28l13.243-41l13.244,41l-34.832-25.398h43.177L247.683,634.28z"/>
            <path fill="#FFFF00" d="M163.376,716.132l13.243-41l13.244,41l-34.832-25.397h43.177L163.376,716.132z"/>
            <path fill="#FFFF00" d="M452.827,92.506l13.243-41l13.243,41l-34.832-25.398h43.178L452.827,92.506z"/>
            <path fill="#FFFF00" d="M156.837,349.568l13.243-41l13.244,41l-34.832-25.398h43.177L156.837,349.568z"/>
            <path fill="#FFFF00" d="M200.014,103.005l13.243-41l13.244,41l-34.832-25.398h43.177L200.014,103.005z"/>
            <path fill="#FFFF00" d="M1078.112,251.632l13.241-41l13.244,41l-34.832-25.398h43.177L1078.112,251.632z"/>
            <path fill="#FFFF00" d="M396.977,757.132l13.242-41l13.244,41l-34.832-25.397h43.177L396.977,757.132z"/>
            <path fill="#FFFF00" d="M733.156,777.632l13.243-41l13.244,41l-34.832-25.397h43.177L733.156,777.632z"/>
            <path fill="#FFFF00" d="M1092.524,727.994l13.242-41l13.244,41l-34.832-25.398h43.178L1092.524,727.994z"/>
            <path fill="#FFFF00" d="M77.156,525.719l13.243-41l13.244,41L68.812,500.32h43.177L77.156,525.719z"/>
            <path fill="#FFFF00" d="M1004.329,113.006l13.242-41l13.243,41l-34.832-25.398h43.179L1004.329,113.006z"/>
            <path fill="#FFFF00" d="M298.769,210.632l13.243-41l13.244,41l-34.832-25.398h43.177L298.769,210.632z"/>
            <path fill="#FFFF00" d="M1092.524,484.719l13.243-41l13.244,41l-34.832-25.397h43.177L1092.524,484.719z"/>
            <path fill="#FFFF00" d="M954.749,654.78l13.243-41l13.243,41l-34.832-25.398h43.178L954.749,654.78z"/>
            <path fill="#FFFF00" d="M833.149,92.506l13.242-41l13.244,41l-34.832-25.398h43.176L833.149,92.506z"/>
          </g>
          <path id="nuage_left" fill="#131D3E" d="M452.63,349.568c-40.938,0-78.53,19.344-102.344,51.063c-8.391-2.032-16.953-3.063-25.656-3.063
          c-61.75,0-112,50.25-112,112c0,1.563,0.031,3.094,0.095,4.625c-46.267,13.75-80.094,56.688-80.094,107.375
          c0,61.75,50.25,112,112,112h272c70.595,0,128.001-57.406,128.001-128c0-46.656-25.656-88.813-65.156-111.125
          c0.781-5.563,1.156-11.219,1.156-16.875C580.631,407.006,523.224,349.568,452.63,349.568L452.63,349.568z"/>
          <path id="nuage_right" fill="#131D3E" d="M857.68,29.422c-40.938,0-78.529,19.344-102.344,51.063c-8.391-2.032-16.953-3.063-25.656-3.063
          c-61.75,0-112,50.25-112,112c0,1.563,0.031,3.094,0.096,4.625c-46.267,13.75-80.095,56.688-80.095,107.375
          c0,61.75,50.25,112,111.999,112h272c70.596,0,128.002-57.406,128.002-128c0-46.656-25.656-88.813-65.156-111.125
          c0.781-5.563,1.156-11.219,1.156-16.875C985.682,86.86,928.273,29.422,857.68,29.422L857.68,29.422z"/>
        </g>
      </svg>
    </main>
    <footer>
      <form class="" action="" method="post">
        <fieldset>
          <legend>Share with your people :</legend>
          <label for="email">Email :</label>
          <input type="email" name="email" id="email" value="">
          <input type="submit" name="submit" id="submit" value="share">
        </fieldset>
      </form>
    </footer>

  </body>
</html>
