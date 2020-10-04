<?php
require_once "./Arquivo.php";
require_once "./Diretorio.php";
//Cria uma pasta
$pastaDeCursos = new Diretorio("Pasta de cursos");

//Cria 3 arquivos
$cursoDePhp = new Arquivo("cursoPHP.zip");
$cursoDejavascript = new Arquivo("cursojavascript.zip");
$cursoDePython = new Arquivo("cursoPython.zip");

//Adiciona cada arquivo dentro de uma pasta
$pastaDeCursos->add($cursoDePhp);
$pastaDeCursos->add($cursoDejavascript);
$pastaDeCursos->add($cursoDePython);

//Cria uma nova pasta
$pastaDiretorio2 = new Diretorio("Diretorio2");

//Cria 2 arquivos
$arquivosJavascript = new Arquivo("ArquivosJs.zip");
$arquivosPython = new Arquivo("ArquivosPython");

//Adiciona cada arquivo dentro da segunda pasta
$pastaDiretorio2->add($arquivosJavascript);
$pastaDiretorio2->add($arquivosPython);

//Adiciona a segunda pasta dentro da primeira
$pastaDeCursos->add($pastaDiretorio2);

//Mostra o conteudo da pasta e por tabela os arquivos e conteudos da segunda pasta

$pastaDeCursos->ls();