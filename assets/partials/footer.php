<?php
$year = new DateTime('now');
?>
<footer>
    Copyright &copy; 1999-<?php echo $year->format('Y'); ?>. All right reserved.
    | <a href="https://twitter.com/cowglow">@cowglow</a>
</footer>
<?php echo PHP_EOL; ?>
<?php if ($GLOBALS['isDev']) { ?>
    <!-- This is a Generated File. Offline use only. -->
    <script src="assets/js/InstagramEmbeds.js"></script>
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<?php } else { ?>
    <script src="https://platform.instagram.com/en_US/embeds.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
<?php } ?>
</body>
</html>