<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background: #FFECD6;
        }
        .heading{
            display: block;
        }
        h2{
            color: red;
            margin: 0 auto;
        }
        p{
            display:flex;
            font-size: 24px;
            justify-content: center;
            align-items: center;
            background-color: #4CB9E7;
            height: 300px;
            
        }
        span{
            color: white;
        }
    </style>
    <?php
    

    $quotes=[
        "Genius is one percent inspiration and ninety-nine percent perspiration. <br><span>'Thomas Edison'</span>",
        "You can observe a lot just by watching. - <br><span>'Yogi Berra'</span>",
        "A house divided against itself cannot stand. - <br><span>'Abraham Lincoln'</span>",
        "Difficulties increase the nearer we get to the goal. - <br><span>'Johann Wolfgang von Goethe'</span>",
        "Fate is in your hands and no one elses - <br><span>'Byron Pulsifer'</span>",
        "Be the chief but never the lord.- <br><span>Lao Tzu</span>",
        "Nothing happens unless first we dream.- <br><span>'Carl Sandburg'</span>"
    ];
    $randomQuote =$quotes[array_rand($quotes)];
    

    ?>
    <div class="heading">

        <h2>PHP TASK 01</h2>
    </div>
    <p><?php echo $randomQuote;?></p>
</body>
</html>