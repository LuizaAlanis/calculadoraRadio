<?php

    // Caso a caixa de texto esteja vazia ou possua um valor não-númerico
    if(!is_numeric($_POST['txtval1']) || !is_numeric($_POST['txtval2'])){
        // Volte para a página index
        header('location:index.html');
    }

    // Pegue os valores via POST das caixas de texto bem como o radio
    $num1 = $_POST['txtval1'];
    $num2 = $_POST['txtval2'];
    $op = $_POST['op'];

    switch($op) {
        case 'soma':
            $result = $num1 + $num2;
                echo "<div class='animated animatedFadeInUp fadeInUp'>
                        <h1>$result</h1>
                    </div>";
            break;
        case 'sub':
            $result = $num1 - $num2;
                echo "<div class='animated animatedFadeInUp fadeInUp'>
                        <h1>$result</h1>
                    </div>";
            break;
        case 'multi':
            $result = $num1 * $num2;
                echo "<div class='animated animatedFadeInUp fadeInUp'>
                        <h1>$result</h1>
                    </div>";
            break;
        case 'div':
                $result = $num1 / $num2;
                echo "<div class='animated animatedFadeInUp fadeInUp'>
                        <h1>$result</h1>
                    </div>";
            break;
        default:
            echo "<h1>Selecione uma opção</h1>";
    }

    // Voltar
    echo "<div class='animated animatedFadeInUp fadeInUp'> 
        <br/>
        
        <a href='index.html'>  
            <button class='button'> VOLTAR </button>
        </a>
        
    </div>";

    // Estilizando a página
    echo "<style type='text/css'>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');  
       
        body{
            padding: 200px;
            background-image: linear-gradient(to right, #4CB8C4, #3CD3AD);
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            font-size:2.5vw;
            color: #fff;
        }
        
        @keyframes fadeInUp {
            from {
              -webkit-transform: translate3d(0, 40px, 0);
                      transform: translate3d(0, 40px, 0);
            }
            to {
              -webkit-transform: translate3d(0, 0, 0);
                      transform: translate3d(0, 0, 0);
              opacity: 1;
            }
        }
        
        @-webkit-keyframes fadeInUp {
            from {
              -webkit-transform: translate3d(0, 40px, 0);
                      transform: translate3d(0, 40px, 0);
            }
            to {
              -webkit-transform: translate3d(0, 0, 0);
                      transform: translate3d(0, 0, 0);
              opacity: 1;
            }
        }
        
        .animated {
            animation-duration: 1s;
            animation-fill-mode: both;
            -webkit-animation-duration: 1s;
            -webkit-animation-fill-mode: both;
        }
          
        .animatedFadeInUp {
            opacity: 0;
        }
          
        .fadeInUp {
            opacity: 0;
            animation-name: fadeInUp;
            -webkit-animation-name: fadeInUp;
        }
        
        .button{
            border: 1px solid white;
            border-radius: 20px;
            height: 40px;
            margin: 10px;
            width: 160px;
            padding: 1px;
            background-color: #f1f1f113;
            color: #fff;
            outline: none;
            font-weight: bolder;
        }
        
        a{
            text-decoration: none;
            color: #fff;
            text-size:1.5vw;
        }
    </style>";
?>