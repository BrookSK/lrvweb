<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView{
    public function __construct(){
        $this->setTitle("Portfolio Lucas Vacari");
        $this->setDescription("The project is in progress with the aim of publicizing Lucas Rodrigues Vacari's portfolio, bringing projects made by him, his contributions and interests.");
        $this->setKeywords("portfolio, lucas, vacari");
        $this->setDir("home");
        $this->renderLayout();
    }
}