<?php echo PHP_EOL; ?>
    <script src="https://platform.instagram.com/en_US/embeds.js"></script>
<?php if ($GLOBALS['isDev']) { ?>
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<?php } else { ?>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php } ?>
</body>
</html>