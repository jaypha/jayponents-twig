<?php
//----------------------------------------------------------------------------
//
//----------------------------------------------------------------------------

use Jaypha\Jayponents\Component;
use Jaypha\Jayponents\Twig\TwigEngineAdaptor;

require "../vendor/autoload.php";

$loader = new Twig_Loader_Filesystem(__DIR__);
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__."/cache",
));

Component::setDefaultEngine(new TwigEngineAdaptor($twig));

$page = new Component("template.twig");
$page->setTemplate("template.twig");
$page->set("title", "User Profile");

$content = new Component();
$content->setTemplate("profile.twig");
$content->setVars([ "name" => "Jonathon", "word" => "ser&pity" ]);

$page->set("content", $content);
$page->display();

//echo $page;

//----------------------------------------------------------------------------
// Copyright (C) 2017 Jaypha.
// License: BSL-1.0
// Author: Jason den Dulk
//
