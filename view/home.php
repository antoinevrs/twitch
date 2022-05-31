<?php
ob_start();

session_start();
?>

<h1>Bienvenue</h1>

<div id="twitch-embed"></div>
    <script src="https://embed.twitch.tv/embed/v1.js"></script>
    <script type="text/javascript">
      new Twitch.Embed("twitch-embed", {
        width: "100%",
        height: 600,
        channel: "arerty",
        theme: "dark",
      });
    </script>
    
<?php
$content = ob_get_clean();

require 'template.php';