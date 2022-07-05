<?php include "includes/cabecalho.php" ?>

    <p> <a href="formulario.php"> Voltar </a> </p>

<?php

if ( empty ($_POST["nome"]) || empty ($_POST["fabricantes"])  || empty ($_POST["preco"]) || empty ($_POST["quantidade"]) || empty ($_POST["descricao"])) {

?> 

    <p style="color:red"> Por favor, preencher os campos nome e e-mail. </p>


<?php

} else {

    /* capturando os dados enviados a partir do formulario */
    /* array associativo */

    /* PARA TESTES */

    /* echo "<pre>"; */
    /* var_dump($_POST);   */
    /* echo "<pre>"; */


    /* se for pegar somente um dado - COM LISTAS*/

    $nome = $_POST ["nome"];

    $fabricantes = $_POST ["fabricantes"]  ?? []; 

    /* se existe o $_POST ["fabicantes"],
    o que foi selecionado fica na variavel,
    caso contrario (array vazio) fica na variavel ?? [] */

    $preco = $_POST ["preco"];

    $quantidade = $_POST ["quantidade"];

    $descricao = $_POST ["descricao"];

?> 

    <h2>Dados:</h2>
        
            <!-- Condicional PHP 
            (   e sinalizado como &&   ), 
            (   ou sinalizado como ||   ),
            (   não sinalizado como !   ) invertendo o sim 
            pelo não e o não pelo sim-->

            <!-- Se estiver em branco, o campo de interesses ou 
            se não estiver vazio ( operador coalescencia nula - 
            interrogação dupla ( ?? ) -->

            <?php if ( ! empty ( $fabricantes ) ) { ?>

                <!-- então faça isso -->
                
                <?php

                $fabricantes = ['Asus' , 'Microsoft' , 'LG' , 'Brastemp'];
                ?>

                    <form>
                        <select name="fabricantes">
                            <?php foreach ($fabricantes as $f) { ?>
                                <option value="<?= $f; ?>"> <?= $f; ?> </option>
                            <?php } ?>

                        </select>
                    </form>

            <?php } ?>

    <ul>
        <li> Nome: <?= $nome ?> </li>
        <li> Fabricante: <?= $f ?> </li>
        <li> Preço: R$ <?= $preco ?> </li>
        <li> Quantidade: <?= $quantidade ?> </li>
        <li> Descrição: <?= $descricao ?> </li>
    </ul>

<?php } ?>
 
<?php include "includes/rodape.php" ?>