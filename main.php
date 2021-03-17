<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<header>
    <? include "inc/header.inc.php"; ?>
</header>


<main>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="row about">
                    <div class="col-4 myImg">
                        <img src="img/2010-Ex0146-PHP8_m.png" alt="avatar">
                    </div>
                    <div class="col-8"> 
                        <div class="row">
                            <h1> <? echo $hello ?> </h1>
                        </div>
                        <div class="row">
                            <div>
                                    <p>
                                        Меня зовут <? echo $name, ' ', $surname, '</br>';
                                                    echo 'город ', $city, '.';
                                                    ?>
                                    </p>

                                    <p>
                                        Мне <? echo $age; ?>  лет.
                                    </p>
                                    <p>
                                        Мы научились создавать переменные <br>
                                        Изучали просты операции с ними
                                    </p>


                                <div class="knowlege">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <article>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis 
                        voluptatem, aliquam aut, laudantium eligendi non doloribus amet ipsum 
                        voluptate nam temporibus repudiandae distinctio quod voluptatibus enim, magnam repellendus sunt aliquid!
                    </p>
                    
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis 
                        voluptatem, aliquam aut, laudantium eligendi non doloribus amet ipsum 
                        voluptate nam temporibus repudiandae distinctio quod voluptatibus enim, magnam repellendus sunt aliquid!
                    </p>
                </article>

            </div>
        </div>
    </div>
</main>


<footer>
    <? include "inc/footer.inc.php"; ?>
</footer>
    
</body>
</html>