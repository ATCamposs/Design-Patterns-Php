<?php

require_once "./ArquivoInterface.php";

class Diretorio implements ArquivoInterface
{
    protected $name;
    protected $files = [];

    public function __construct($name)
    {
        $this->name = $name;
    }
    /*
        O metodo add é a principal diferença entre as duas
        classes, e a parte mais importante é: um arquivo não
        pode conter um diretório, já um diretório pode conter
        um ou mais arquivos.
        para garantir o funcionamento, permitimos que add só aceite
        objetos vindos da interface ArquivoInterface, com isso, só diretórios
        e arquivos podem ser adicionados.
    */
    public function add(ArquivoInterface $file)
    {
        //adiciona os arquivos/diretorios ao array
        array_push($this->files, $file);
    }

    public function ls()
    {
        echo "nome da pasta: " . $this->name."<br>";
        //retorna o numero de arquivos/diretorios no array
        echo "Numero de arquivos: ".count($this->files)."<br/>";
        for($i =0; $i < count($this->files); $i++) {
            //posso chamar o metodo ls já que tanto arquivo quanto
            //diretorio são derivados da interface principal, logo
            //todos eles terão este método.
            $this->files[$i]->ls();
        }
    }
}