<?php 

use Livro\Control\Page;
use Livro\Widgets\Form\SimpleForm;

class SimpleFormControl extends Page{
    public function __construct() {
        // parent::__construct();

        $form = new SimpleForm('my_form');
        $form->setTitle('Titulo');
        $form->addField('Nome', 'name', 'text', 'Maria', 'form-control');
        $form->addField('Endereço', 'endereco', 'text', 'Rua das flores', 'form-control');
        $form->addField('Telefone', 'fone', 'text', '(51) 1234-12345', 'form-control');
        $form->setAction('index.php?class=SimpleFormControl&method=onGravar');
    }

  

    public function onGravar($params){
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    }
}