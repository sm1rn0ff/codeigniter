<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" />
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
    </head>
    <body>
        <div id="main-wrapper">
            <header></header>
            <div id="main-content">
                <section><?php echo $cookie_id; ?></section>
                <section><?php echo $nom; ?></section>
                <section><?php echo $prenom; ?></section>
            </div>
            <footer></footer>
        </div>
    </body>
</html>