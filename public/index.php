<?php

require __DIR__ . '/../vendor/autoload.php';

//use Alura\Cursos\Controller\InterfaceControladorRequisicao;

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
}

$classeControladora = $rotas[$caminho];
$controlador = new $classeControladora();
$controlador->processaRequisicao();


/*switch ($_SERVER['PATH_INFO']) {
    case '/listar-cursos':
        $controlador = new ListarCursos();
        $controlador->processaRequisicao();
        break;
    case '/novo-curso':
        $controlador = new FormularioInsercao();
        $controlador->processaRequisicao();
        break;
    case '/salvar-curso':
        $controlador = new Persistencia();
        $controlador->processaRequisicao();
        break;
    default:
        echo "Erro 404";
        break;
}*/
