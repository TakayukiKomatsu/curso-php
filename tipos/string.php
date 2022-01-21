<div class="title">Tipo String</div>


<?php

    echo 'Eu sou uma string';
    echo '<br>';

    var_dump("Eu também");
    echo '<br>';
    
    // Concatenação
    echo 'Eu sou' . ' Hello World';
    echo '<br>','Também aceito','virgulas';
    echo '<br>';
    
    echo "'Teste'" .  '"Teste"' . '\'Teste\' ' . "\"Teste\" " . "\\";

    print("<br>Tambem exite o função print");
    print"<br>Tambem exite o função print";

    // Algumas funções
    echo '<br>' . strtoupper('maximizado');
    echo '<br>' . strtolower('MINIMIZADO');

    echo '<br>' . ucfirst('só a primeira letra');
    echo '<br>' . ucwords('todas as palavras');
    echo '<br>' . strlen('Quantas letras ?');
    echo '<br>' . mb_strlen('Eu também','utf-8');


    echo '<br>' . substr('só uma parte mesmo',7 ,6); // parte
    echo '<br>' . substr('só uma parte mesmo',7); // parte mesmo

    echo '<br>' . str_replace ('isso','aquilo','Trocar isso')

?>