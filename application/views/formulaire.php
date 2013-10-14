<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="" />
        <title></title>
        <meta charset="utf-8" />
        <!--[if lte IE 7]>
            <link rel="stylesheet" href="style_ie_7.css" />
        <![endif]-->
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="style_ie_8.css" />
        <![endif]-->
        <!--[if lt IE 9]>
            <link rel="stylesheet" href="style_ie_9.css" />
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <?php echo '<link rel="stylesheet" href="' . css_url('bootstrap.min') . '" type="text/css">'; ?>
    </head>
    <body>
        <div id="main-wrapper">
            <header></header>
            <div id="main-content">
                <section>
                        <form method="post" action="">
                        <label for="pseudo">Pseudo : </label>
                        <input type="text" name="pseudo" value="<?php echo set_value('pseudo'); ?>" />
                        <?php echo form_error('pseudo'); ?>
                     
                        <label for="mdp">Mot de passe :</label>
                        <input type="password" name="mdp" value="" />
                        <?php echo form_error('mdp'); ?>
                     
                        <input type="submit" value="Envoyer" />
                    </form>
                </section>
                <section></section>
                <section></section>
            </div>
            <footer></footer>
        </div>
        <?php echo '<script src="' . js_url('bootstrap.min') . '"></script>'; ?>
    </body>
</html>
