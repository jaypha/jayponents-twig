<?php
//----------------------------------------------------------------------------
//
//----------------------------------------------------------------------------

use PHPUnit\Framework\TestCase;
use Jaypha\Jayponents\Component;
use Jaypha\Jayponents\Twig\TwigEngineAdaptor;

class TwigTest extends TestCase
{
  function testTwig()
  {
    $loader = new Twig_Loader_Filesystem(__DIR__);
    $twig = new Twig_Environment($loader);
    $c = new Component();
    $c->setEngine(new TwigEngineAdaptor($twig));
    $c->setTemplate("template.twig");
    $c->set("abc", "tent");
    $c->set("mon", "nom");

    // Important to note that the template file does end with a newline.
    // This may not appear in some text editors.
    $this->assertEquals("123tentxyznom.twig\n", $c->__toString());
  }
}

//----------------------------------------------------------------------------
// Copyright (C) 2019 Jaypha.
// License: BSL-1.0
// Author: Jason den Dulk
//
