# Jayponents Twig

Written by Jason den Dulk

A template engine adaptor to enable Twig useable with Jayponents.

## Requirements

PHP v5.4.0 or greater.
Jayponents
Twig

## Installation

```
composer require jaypha/jayponents-twig
```

## Usage

Create a Twig Engine as normal. Create an engine adaptor and set the
template adaptor in Component.

### Examples

```
use Jaypha\Jayponents\Component;

$loader = new Twig_Loader_Filesystem(__DIR__);
$twig = new Twig_Environment($loader);

$adaptor = new TwigEngineAdaptor($twig);

// Can make the template adaptor the default for all components.
Component::setDefaultEngine($adaptor);

// Can assign template adaptor to individual components.
$component = new Component();
$component->setEngine($adaptor);
```

## Caveat

For a jayponent component to display properly, you need to turn autoescape off.

### Example

```
{% autoescape false %}
{{ content }}
{% endautoescape %}
```

## License

Copyright (C) 2017-9 Jaypha.  
Distributed under the Boost Software License, Version 1.0.  
See http://www.boost.org/LICENSE_1_0.txt

