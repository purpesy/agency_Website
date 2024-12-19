<?php
$ok = 0;
$okDb = 0;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vedors/email/Exception.php';
require 'vedors/email/PHPMailer.php';
require 'vedors/email/SMTP.php';
require 'admin/conexao.php';

if (isset($_POST['nome'])) {
    $nome    = $_POST['nome'];
    $tel     = $_POST['tel'];
    $email   = $_POST['email'];
    $mens    = $_POST['mens'];

    // Banco de Dados
    try {
        $inserir = $conn->prepare("INSERT INTO tbl_contato(nome_contato, telefone_contato, email_contato, mensagem_contato, status_contato) VALUES(:nome, :tel, :email, :mens, 'Aguardando')");
        $inserir->bindparam(':nome', $nome);
        $inserir->bindparam(':tel', $tel);
        $inserir->bindparam(':email', $email);
        $inserir->bindparam(':mens', $mens);

        if (!$inserir->execute()) {
            $okDb = 1;
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }

    // PHPMailer
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = '='; // username da hostinger para login
        $mail->Password   = '='; // senha do login
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('=', 'Contato Criativo Dev'); // email de contato
        $mail->addAddress('=', 'Criativo Dev'); // email para receber as mensagens

        $mail->isHTML(true);
        $mail->msgHTML("Nome: $nome <br> Telefone: $tel <br> E-mail: $email <br> Mensagem: $mens");

        $mail->AltBody = "Nome: $nome\nTelefone: $tel\nE-mail: $email\nMensagem: $mens";

        $mail->send();
        $ok = 1;
    } catch (Exception $e) {
        $ok = 2;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criativo Dev</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css" />
    <link href="assets/css/lity.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="pagina-contato">
    <?php require_once('conteudo/topo.php')?>

    <main>
        <section class="contato-cntt">
            <div class="site">

                <h2 class="wow animate__animated animate__fadeInLeft">Meios de Contato</h2>
                <div class="box-cntt">
                    <div class="wow animate__animated animate__fadeInLeft">
                        <img src="assets/img/tel.png" alt="">
                        <a href="https://wa.me/" target="_blank"> 
                            <p>Telefone</p>
                        </a>
                    </div>
                    <div class="wow animate__animated animate__fadeInRight">
                        <img src="assets/img/mail.png" alt="">
                        <a href="mailto:email"> <!-- adicione seu email -->
                            <p>email</p>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="wow animate__animated animate__fadeIn">Solicite um Orçamento</h3>
                    <p class="wow animate__animated animate__fadeInUp">Tem um projeto em mente? Preencha o formulário
                        abaixo e nossa equipe retornará rapidamente.</p>
                </div>
            </div>
        </section>

        <section class="cont-cntt">

            <?php 
                if ($ok == 1 && $okDb != 1) {
                 echo "<h3 class='mensagem-resultado'>$nome, sua mensagem foi enviada com sucesso!</h3>"; 
                } elseif ($ok == 2) 
                { echo "<h3 class='mensagem-resultado'>$nome, não foi possível enviar a sua mensagem. Tente mais tarde!</h3>"; } 
            ?>

            <div class="site">

                <div class="formulario-cntt">

                    <form action="" method="POST" class="contate-nos" id="formContato">
                        <div class="wow animate__animated animate__fadeInUp">
                            <input type="text" name="nome" id="nameContato" placeholder="Nome" required>
                            <input type="tel" name="tel" id="telContato" placeholder="Telefone" required>
                        </div>

                        <div class="wow animate__animated animate__fadeInUp">
                            <input type="email" name="email" id="mailContato" placeholder="E-mail" required>
                        </div>

                        <div class="wow animate__animated animate__fadeInUp">
                            <textarea name="mens" id="menContato" placeholder="Mensagem" cols="30" rows="10"></textarea>
                        </div>
            
                        <div class="botoes-cntt wow animate__animated animate__fadeInUp">
                            <button type="button" id="btnEnviarWhats">Enviar WhatsApp</button>
                            <button type="submit">Enviar Email</button>
                        </div>
                    </form>

                </div>
            </div>
        </section>

        <section class="sobre-cntt">
            <div class="site">
                <div class="wow animate__animated animate__fadeInLeft"><img src="assets/img/imgContato.png" alt="">
                </div>
                <div class="wow animate__animated animate__fadeInRight">
                    <h2>Nome Agencia</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At vitae hic totam quas ipsam non recusandae nobis voluptatum, inventore dolor alias excepturi rerum. Error asperiores officiis placeat? Fugit, quibusdam numquam! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed mollitia commodi odit dignissimos a ducimus quasi soluta aliquam quam aspernatur! Quia, eveniet. Vel fugit, harum magnam neque earum quasi esse..</p>
                </div>
            </div>
        </section>
    </main>

 
    <footer>
        <div class="site wow animate__animated animate__fadeInLeft">
            <div class="robotoBold">
                <div>
                    <h2>nome agencia</h2>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eligendi sed vero dolor veniam nam quibusdam doloremque, porro laudantium necessitatibus. Esse ab non tenetur mollitia commodi quod autem doloribus labore!</p>
                </div>

            </div>

            <div class="robotoBold">
                <div>
                    <h2>
                        Entre em Contato
                    </h2>
                </div>
                <div>
                    <p>Rua , 123 - Cidade, Estado <br>
                        (11) 1234-5678 <br>
                        email</p>
                </div>
            </div>

            <div>

                <div class="robotoBold">
                    <h2>Redes sociais</h2>
                </div>

                <div class="redeSocial">
                    <ul>
                        <li><a href="#" class="insta"><img src="assets/img/insta.png" alt="Intagram"></a></li>
                        <li><a href="#" class="face"><img src="assets/img/face.png" alt="Facebook"></a></li>
                        <li><a href="#" class="linkedin"><img src="assets/img/link.png" alt="Linkedin"></a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="footer">
            <div class="site">
                <p>© 2024 agencia. Todos os direitos reservados.</p>
            </div>
        </div>

    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/lity.min.js"></script>
    <script src="assets/js/animacoes.js"></script>
</body>

</html>