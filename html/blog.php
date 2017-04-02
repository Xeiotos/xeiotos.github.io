<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Chris Soberon | Personal blog and website</title>
    <link rel="stylesheet" href="../css/normalise.css" />
    <link href='//fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link rel="stylesheet" href="../css/site.css" />
</head>

<body>
    <div id="container">
        <header>
            <nav id="navigation">
                <div class="nav-wrapper">
                    <ul>
                        <li><a href="../index.html">Chris Soberon</a></li>
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="html/blog.php">Blog</a></li>
                        <li><a id="photographyLink" href="#photography">Photography</a></li>
                        <li><a href="#about">About</a></li>
                        <li>
                            <a href="#about"><i class="fa fa-bars"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <?php
        foreach(glob("blogposts/*") as $file) {
            readfile($file);
        } ;?>
    </div>
</body>

</html>