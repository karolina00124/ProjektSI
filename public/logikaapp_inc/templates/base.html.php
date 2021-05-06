
<?php
/**
 * Layout file.
 *
 * @link https://epi.chojna.info.pl
 * @author EPI UJ <epi@uj.edu.pl>
 * @copyright (c) 2017-2020
 */
?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title><?php echo $title ?? ''; ?></title>
    </head>
    <body>
    <?php require_once dirname(__FILE__) . '/' . $template . '.html.php'; ?>
    </body>
</html>