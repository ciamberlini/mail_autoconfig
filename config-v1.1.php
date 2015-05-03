<?php
  header("Content-Type: application/xml");
  $data = $_GET["emailaddress"];
  list($account, $domain) = split('@', $data);
?>
<?php echo '<?xml version="1.0" encoding="utf-8" ?>'; ?>
 <clientConfig version="1.1">
  <emailProvider id="dominio.it">
   <domain><?php echo $domain; ?></domain>
   <displayName>Creso Mail Server</displayName>
   <displayShortName>cresosrl.it</displayShortName>
 
   <incomingServer type="pop">
    <hostname><?php echo 'pop.'.$domain; ?></hostname>
    <port>110</port>
    <socketType>plain</socketType>
    <username><?php echo $data; ?></username>
    <authentication>password-cleartext</authentication>
   </incomingServer>
 
   <incomingServer type="imap">
    <hostname><?php echo 'pop.'.$domain; ?></hostname>
    <port>110</port>
    <socketType>plain</socketType>
    <username><?php echo $data; ?></username>
    <authentication>password-cleartext</authentication>
   </incomingServer>
 
   <outgoingServer type="smtp">
    <hostname><?php echo 'mail.'.$domain; ?></hostname>
    <port>587</port>
    <socketType>plain</socketType>
    <username><?php echo $data; ?></username>
    <authentication>password-cleartext</authentication>
    <addThisServer>true</addThisServer>
    <useGlobalPreferredServer>true</useGlobalPreferredServer>
   </outgoingServer>
 
   <identity></identity>
  </emailProvider>
 </emailProvider>
</clientConfig>