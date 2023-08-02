<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerPlanos extends ClassRender implements InterfaceView{
    public function __construct(){
        $this->setTitle("Portfolio Lucas Vacari - Planos");
        $this->setDescription("See my best plans that will please you the most.");
        $this->setKeywords("portfolio, lucas, vacari, planos, precos, hospedagem, site");
        $this->setDir("planos");
        $this->renderLayout();
    }
}