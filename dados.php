<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body background="./img/Background.png">
    <table bgcolor="#000000" align="center" border="0" width="750px">
        <tr bgcolor="#37ff34" height="60px">
            <td width="150px">
                <a href="index.html"><img src="./img/Logo.png"></a>
            </td>
            <td align="right">
                <a href="index.html">Home</a> |
                <a href="WWAFA,WDWG.html">When we fall asleep, where do we go?</a> |
                <a href="DSAM.html">Don't Smile at Me</a> |
                <a href="sugestoes.html">Fale conosco</a>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <fieldset>
                    <font face="Arial" color="#ffffff">
                        <h2 align="center">Obrigada pela sugestão, nós a rebebemos com sucesso</h2>
                        <h3>Dados:</h3>
                        <?php
                        $email=$_POST['email'];
                        $assunto=$_POST['assunto'];
                        $msg=$_POST['msg'];

                        echo "E-mail: {$email} <br>";
                        echo "Assunto: {$assunto} <br>";
                        echo "Mensagem: {$msg} <br>";
                        ?>
                        <hr>
                        <p align="center">
                            <font color="#ffffff" face="Arial" size="3px">
                                Todos os direitos reservados |
                                <a href="https://www.instagram.com/berh._.kuhl/">
                                    <img src="./img/InstaLogoMenor.png">
                                </a>
                                <a href="https://twitter.com/BerhKuhl">
                                    <img src="./img/TwitterLogoMenor.png">
                                </a>
                            </font>
                        </p>
                    </font>
                </fieldset>

            </td>
        </tr>
    </table>
</body>

</html>