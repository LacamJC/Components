<?php

require_once './vendor/autoload.php';
try {
    if ($_GET) {
        $class = $_GET['class'];
        if (class_exists($class)) {
            $pagina = new $class;
            var_dump( $pagina);
          
            if (method_exists($pagina, 'show')) {
                $pagina->show();
            } else {
                echo "Método 'show' não encontrado na classe.";
            }
        } else {
            echo "Classe '{$class}' não encontrada.";
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
