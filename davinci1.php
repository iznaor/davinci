<?php
    #php dio
    $title = 'Da Vincijev kod';
    $link  = 'https://hr.wikipedia.org/Da_Vincijev_kod';
    print '
    <!DOCTYPE HTML> 
    <html lang="hr">
        <head>
            <meta name="author" content="Ivan Znaor">
        </head>
    <body>
        <h1>';
        print $title;
        print '</h1>
	<!-- p paragraf -->
	<p>Da Vincijev kod je kriminalistički triler američkog pisca 
Dana Browna.<br>
        <a href="';
        print $link;
        print '" target="_blank">';
        print $link;
        print '</a></p>
    </body>
    </html>';
#h1 naslov
?>
