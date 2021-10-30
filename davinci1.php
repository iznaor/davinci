<?php
    #php dio
    echo "<img src='https://images-na.ssl-images-amazon.com/images/I/41KuPr7kpZL._SX277_BO1,204,203,200_.jpg' alt='book' />"; 
    $title = 'Da Vincijev kod';
    $link  = 'https://hr.wikipedia.org/Da_Vincijev_kod';
	
    $txt1="<p>PHP";
    $txt2="test 👋</p>";
    echo $txt1 . " " . $txt2;
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
	
	$godinaFilma = 2006;
	$godinaKnjige = 2003;
	echo "Godina izlaska filma je $godinaFilma. Godina izdanja knjige: $godinaKnjige";
	echo '<body style="background-color:#FFFFF0">';
	
#h1 naslov
?>
