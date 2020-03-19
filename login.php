<html>
<head>
<script type="text/javascript">
var wifi4euTimerStart = Date.now();
var wifi4euNetworkIdentifier = '123e4567-e89b-12d3-a456-426655440000';
var wifi4euLanguage = 'en';

</script>
<script type="text/javascript" src="https://collection.wifi4eu.ec.europa.eu/wifi4eu.min.js"></script>

</head>
<body>



   <?php
      $base_grant_url = urldecode($_GET['base_grant_url']);
      $user_continue_url = urldecode($_GET['user_continue_url']);
      $override_continue_url = 'http://mycompany.com/you_are_now_authenticated';
      
      $override_the_users_request = false;
      if ($override_the_users_request) {
        $grant_url = $base_grant_url . "?continue_url=" . urlencode($override_continue_url);
      } else {
        $grant_url = $base_grant_url . "?continue_url=" . urlencode($user_continue_url);
      }

      // The following parameters may be used for tracking purposes. They are not necessary for authentication.
      $node_id = urldecode($_GET['node_id']);
      $gateway_id = urldecode($_GET['gateway_id']);
      $client_ip = urldecode($_GET['client_ip']);
    ?>

    <div>
      <p>Thank you for associating to Public WiFi. By continuing you agree to our terms of service.</p>
      <a href="<?php print $grant_url ?>">Click here to continue to the internet</a>
    </div>	

</body>
</html>