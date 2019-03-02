<?php include"cabecalho.php"; ?>
<?php
    function fat($n){
        if($n > 1 ){
            $n *= fat($n-1);
        }
        return $n;

    }

    echo fat(4);
?>
<?php include"rodape.php"; ?>