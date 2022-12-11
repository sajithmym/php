    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>- Initial -</title>
        <link rel="stylesheet" href="./Design.css">
    </head>
    <body>
        
    </body>
    </html>
    <body>
        <h1 style="color: orange;font-size:20pt">

            <?php
                print "Welcome <br>";

                $sajith = 11;
                if ($sajith != 100)
                    echo "Sajithmym Creation...";
                else
                    echo "<br> False value 15";
                echo "<br/> <br>";

                $count = 1;
                while ($count != 13) {
                    echo '<br>', $count, 'x', $sajith, '=', $count * $sajith;
                    $count = $count + 1;
                }
                echo "<br/> <br>";

                for ($i=1;$i!=11;$i++){
                    echo "This is for loop :- ",$i,'<br/>';
                }

                $pic = array("https://www.notebookcheck.net/fileadmin/Notebooks/News/_nc3/marvels_spider_man_header.jpg",
                "https://cdn1.epicgames.com/undefined/offer/batman-arkham-knight_promo-2048x1152-ed2be22b3f24f446534b90b122ed560d.jpg",
                "https://m.media-amazon.com/images/I/817DeJPpJ4L._RI_.jpg",
                "https://pyxis.nymag.com/v1/imgs/e93/256/33377ea3faee0abaafe5e2b7706a463cf6-19-superman.rsquare.w700.jpg",
                "https://media.newyorker.com/photos/635abdb1b120c5ac7a42baea/master/pass/brody-black-adam.jpg",
                "https://assets.reedpopcdn.com/iron-man_aJ1y3LP.jpg/BROK/thumbnail/1600x900/quality/100/iron-man_aJ1y3LP.jpg",
                "https://i.pinimg.com/originals/12/0f/65/120f658cfd7d8399dc474964f260a45c.jpg",
                "https://static1.colliderimages.com/wordpress/wp-content/uploads/2022/04/shazam-zachary-levi-social-featured.jpg",
                "https://static1.cbrimages.com/wordpress/wp-content/uploads/2022/04/martian-manhunter-on-knightmare.jpg",
                "https://m.media-amazon.com/images/M/MV5BMTk3NDE5MzM3NF5BMl5BanBnXkFtZTgwNDQ3Nzk3ODE@._V1_.jpg",
                "https://economictimes.indiatimes.com/thumb/height-450,width-600,imgsize-1032582,msid-69724545/hugh-jackman-holds-a-guinness-world-record-for-longest-career-as-a-live-action-marvel-superhero-for-his-role-as-wolverine-.jpg?from=mdr",
                "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/hulk-thor-ragnarok-2-1548346471.jpg",
                "https://ichef.bbci.co.uk/images/ic/640x360/p09t1hg0.jpg",
                "https://i.annihil.us/u/prod/marvel/i/mg/9/f0/57fe4ef408a29/standard_incredible.jpg",
                );

                for ($i=0;$i!=count($pic);$i++){
                    echo '<img src=',"'",$pic[$i],"'",'/>','<br/>';
                }
            ?>
        </h1>
    </body>