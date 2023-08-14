<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView{
    public function __construct(){
        $this->setTitle("Portfolio Lucas Vacari");
        $this->setDescription("O projeto LRV Web tem o objetivo de divulgar o portfólio de Lucas Rodrigues Vacari, trazendo projetos realizados por ele, suas contribuições e interesses. Além disso, trazer os preços e orçamentos dados por ele para a criação de um site profissional.");
        $this->setKeywords("portfolio, lucas, vacari, planos, precos, hospedagem, site, lrvweb, lrv, web, desenvolvimento, criacao, sites, ecommerce");
        $this->setDir("home");
        $this->renderLayout();
    }
}