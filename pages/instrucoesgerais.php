<?php include '../views/header.php'; ?>

<?php include '../includes/logingrupos.php'; ?>


<div class="w3-container larguraBar w3-margin-bottom ">






    <h2 class="w3-margin w3-padding w3-center ">Como serão nossas aulas?</h2>



    <p>Bem-vindos! Na disciplina de Geografia vamos estudar o Espaço Geográfico e o mundo ao nosso redor! Aqui
        está
        um guia sobre como será nossa jornada de aprendizado:</p>

    <p><strong>Aulas</strong>: O Professor vai começar com uma rápida introdução do tema do dia e dos objetivos
        que
        queremos alcançar. Depois, vamos mergulhar na leitura e interpretação de materiais interessantes
        fornecidos
        pelo professor (Aplicativo Duvid, site e/ou material fornecido pela escola). Após essa atividade
        solitária,
        teremos momentos em grupo para realizar o Desafio da aula sob orientação do Professor. Ao final, teremos
        uma
        revisão para consolidar o que aprendemos e definir os próximos passos!</p>

    <p><strong>Metodologia</strong>: Aqui na nossa sala de aula, a aprendizagem vai além das exposições
        tradicionais. O Professor adora trazer elementos de jogos digitais para tornar tudo mais interessante.
        Imagine aprender sobre Geografia de uma maneira que você já ama – através de elementos de jogos
        digitais!
    </p>

    <p><strong>Avaliação</strong>: A parte da avaliação não coloca medo em ninguém. Teremos três tipos de
        avaliações
        tranquilas para manter as coisas dinâmicas. Primeiro, teremos uma prova tradicional em laboratórios de
        informática, com agendamento prévio e correção automática – isso é muito bom. Em seguida, teremos um
        trabalho em grupo superlegal, onde você vai mostrar como os temas que discutimos podem ser incorporados
        no
        desenvolvimento de um jogo com temas geográficos. E, para finalizar, uma autoavaliação, onde você terá a
        chance de expressar suas próprias descobertas de maneira descontraída.</p>

    <p><strong>Pesos das Avaliações</strong>: Claro, sobre os pesos das avaliações, não se preocupe. Cada parte
        é
        importante, mas a ideia é tornar o aprendizado mais criativo. A prova tem peso 4, o trabalho em grupo
        também
        tem peso 4, e a autoavaliação tem peso 2.</p>

    <p>Nossa comunicação fora do horário de aula ocorrerá no atendimento ao aluno, bem como no e-mail
        institucional
        do professor: <strong>leandro.henrique@ifsp.edu.br</strong></p>

    <p>Bons estudos!</p>




    <div class="w3-container w3-padding">
        <h2><mark>Links Importantes</mark></h2>
        <div class="w3-card w3-padding w3-light-grey">
            <h3>Links para os Grupos</h3>


            <p>Link para o grupo de desenvolvimento do jogo.</p>

            <div class="w3-container w3-padding">
           

                <form class="w3-container" action="../includes/logingrupos.php" method="POST">
                    <label class="w3-text" for="password">Senha:</label>
                    <input class="w3-input w3-border" type="password" id="password" name="password">
                    <button id="btnAviso" class="w3-button w3-blue w3-margin-top" type="submit">Entrar</button>

                  
                </form><br><br>
                <!-- Área para exibir mensagem de erro -->
                <p id="errorMessage" class="w3-text-red w3-margin-top w3-center">  <?php echo $error_message; ?></p>
              
            </div>


            <a href="https://drive.google.com/file/d/1i479qRAbNm38qVuRXydsDx5nR8pIRt5e/view?usp=sharing" class="w3-button w3-light-green  w3-margin-bottom" target="_blank">Demo do Jogo para Android</a>

            <p>Link para a demo do jogo para Android.</p>

            <a href="https://drive.google.com/drive/folders/15cTExhiIohHhbDrESx7xycLqXgfYRUgA?usp=sharing" class="w3-button w3-light-green w3-margin-bottom" target="_blank">Baixar o Aseprite</a>

            <p>Link para baixar o software Aseprite para desenhar em pixel art.</p>

            <a href="https://drive.google.com/drive/folders/1z06k1Z9Y5Ch35Ug31TxdApbVXHN6r4sc?usp=sharing" class="w3-button w3-light-green w3-margin-bottom" target="_blank">Acessar Pasta do Jogo</a>
            <p>Link para acessar a pasta do jogo com livros e artes produzidas.</p>
        </div>
    </div>








</div>


<?php include '../views/footer.php'; ?>