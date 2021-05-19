<?php
 
    $db = [
        'texts' => [
            [
                'question' => 'Come state implementando la recente decisione della Corte di giustizia dell Unione europea (CGUE) relativa al diritto all oblio?',
                'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ipsum, soluta et, eligendi reprehenderit corporis dolorum minus provident laborum iure explicabo odio, at porro quisquam nam veritatis eos illum error deleniti?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                
                Ipsum, soluta et, eligendi reprehenderit corporis dolorum minus provident laborum iure explicabo odio, at porro quisquam nam veritatis eos illum error deleniti?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                
                Ipsum, soluta et, eligendi reprehenderit corporis dolorum minus provident laborum iure explicabo odio, at porro quisquam nam veritatis eos illum error deleniti?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ipsum, soluta et, eligendi reprehenderit corporis dolorum minus provident laborum iure explicabo odio, at porro quisquam nam veritatis eos illum error deleniti?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ipsum, soluta et, eligendi reprehenderit corporis dolorum minus provident laborum iure explicabo odio, at porro quisquam nam veritatis eos illum error deleniti?'
            ],
            [
                'question' => 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
                'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ipsum, soluta et, eligendi reprehenderit corporis dolorum minus provident laborum iure explicabo odio, at porro quisquam nam veritatis eos illum error deleniti?
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                
                Ipsum, soluta et, eligendi reprehenderit corporis dolorum minus provident laborum iure explicabo odio, at porro quisquam nam veritatis eos illum error deleniti?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ipsum, soluta et, eligendi reprehenderit corporis dolorum minus provident laborum iure explicabo odio, at porro quisquam nam veritatis eos illum error deleniti?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. '
            ],
            [
                'question' => 'Perché il mio account è associato a un paese?',
                'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ipsum, soluta et, eligendi reprehenderit corporis dolorum minus provident laborum iure explicabo odio, at porro quisquam nam veritatis eos illum error deleniti?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. '
            ],
            [
                'question' => 'Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?',
                'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ipsum, soluta et, eligendi reprehenderit corporis dolorum minus provident laborum iure explicabo odio, at porro quisquam nam veritatis eos illum error deleniti?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                
                Ipsum, soluta et, eligendi reprehenderit corporis dolorum minus provident laborum iure explicabo odio, at porro quisquam nam veritatis eos illum error deleniti?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ipsum, soluta et, eligendi reprehenderit corporis dolorum minus provident laborum iure explicabo odio, at porro quisquam nam veritatis eos illum error deleniti?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                
                Ipsum, soluta et, eligendi reprehenderit corporis dolorum minus provident laborum iure explicabo odio, at porro quisquam nam veritatis eos illum error deleniti?
                Lorem ipsum dolor sit amet consectetur adipisicing elit.'
            ]
        ],
    ];
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Faq</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>

    <div class="logo">
        <img src="img/googlelogo_color_160x56dp.png" alt="#">
    </div>

    <nav>
        <ul>
            <li>
                <a href="#">Introduzione</a>
            </li>
            <li>
                <a href="#">Norme sulla privacy</a>
            </li>
            <li>
                <a href="#">Termini di servizio</a>
            </li>
            <li>
                <a href="#">Tecnologie</a>
            </li>
            <li>
                <a href="#">Domande Frequenti</a>
            </li>
        </ul>
    </nav>

    </header>

    <main>
    
    <div class="testo">
    <?php foreach($db['texts'] as $text) { ?>
            <h2><?php echo $text ['question']?></h2>
            <p><?php echo $text ['answer']?></p>
        <?php } ?>
    </div>

    </main>

</body>
</html>