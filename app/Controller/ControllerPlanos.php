<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerPlanos extends ClassRender implements InterfaceView{
    public function __construct(){
        $this->setTitle("Portfolio Lucas Vacari - Planos");
        $this->setDescription("Veja os melhores preços para a criação de um site profissional.");
        $this->setKeywords("portfolio, lucas, vacari, planos, precos, hospedagem, site, lrvweb, lrv, web, desenvolvimento, criacao, sites, ecommerce");
        $this->setDir("planos");
        $this->renderLayout();
    }
}