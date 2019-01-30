<?php
//----------------------------------------------------------------------------
// Adaptor for Twig template engine
//----------------------------------------------------------------------------

namespace Jaypha\Jayponents\Twig;

use Jaypha\Jayponents\TemplateEngineAdaptor;
use Jaypha\Jayponents\Component;

class TwigEngineAdaptor implements TemplateEngineAdaptor
{
  protected $engine;

  function __construct(\Twig_Environment $twigEngine)
  {
    $this->engine = $twigEngine;
  }

  function render(Component $component)
  {
    $template = $this->engine->load($component->getTemplate());
    $template->display($component->getVars());
  }
}

//----------------------------------------------------------------------------
// Copyright (C) 2018 Jaypha.
// License: BSL-1.0
// Author: Jason den Dulk
//
