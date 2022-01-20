<div class="title">Operações Aritméticas</div>


<?php
    echo 1 + 1, '<br>';
    var_dump(1 + 1.0);

    echo'<br>';
    echo 1 + 2.5, '<br>';
    echo 10 - 2, '<br>';
    echo 2 * 5, '<br>';
    echo 7 / 4, '<br>';
    echo intdiv(7,4),'<br>';       # Trunca o valor
    echo round(7,4),'<br>';        # Arredonda o valor
    echo 7 % 4,'<br>';             # operador módulo
    echo 7 / 4,'<br>';             # Valor inf

    // echo intdiv(7,0),'<br>';    # Erro
    echo 4 ** 2,'<br>';            # Exponenciação

    // Precedência de operadores:
    // () => ** => / * % => + - 

    echo '<p>Precedência</p>';
    echo 2 + 12 ,'<br>'; 
    echo (2 * 3) * 4,'<br>';
    echo 2 + 3 * 4 **2,'<br>';
    echo ((2 + 3)*4) * 2,'<br>'; 
?>