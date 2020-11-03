<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PieceofCakeData</title>
    <!-- CSS file -->
    <link rel="stylesheet" type="text/css" href="assets/css/style2.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <table>
      <tbody>
          <tr>
              <td>
                <img src="assets/img/cake.jpg">
              </td>
              <td>
                <p><?php echo htmlspecialchars($_POST['email']); ?></p><br>
                  <p style="display:inline; color:black;">Bonjour <p style="display:inline"> <?php echo htmlspecialchars($_POST['nom_prenom']); ?></p><br><br>
                  nous vous remerciion pour votre message<br><br><br>
                <div id="ps">
                  <p > <?php echo htmlspecialchars($_POST['message']); ?></p>
                </div>
                
                <br>Lorem ipsum dolor sit amet, consectur
                      adipiscing<br> elit, sed do eiusmod tempor
                      incididunt ut labore et<br> dolore magna
                      aliqua
              </td>
          </tr>
      </tbody>
    </table>
  </body>
</html>