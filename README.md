# aztech/event-bus-extra-mixpanel

## Build status

[![Build Status](https://travis-ci.org/aztech-dev/event-bus-extra-mixpanel.png?branch=master)](https://travis-ci.org/aztech-dev/event-bus-extra-mixpanel)
[![Code Coverage](https://scrutinizer-ci.com/g/aztech-dev/event-bus-extra-mixpanel/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/aztech-dev/event-bus-extra-mixpanel/?branch=master)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/aztech-dev/event-bus-extra-mixpanel/badges/quality-score.png?s=668e4df5ba163c804504257d4a026a0a549f220a)](https://scrutinizer-ci.com/g/aztech-dev/event-bus-extra-mixpanel/)
[![Dependency Status](https://www.versioneye.com/user/projects/53b92a84609ff04f7f000003/badge.svg)](https://www.versioneye.com/user/projects/53b92a84609ff04f7f000003)
[![HHVM Status](http://hhvm.h4cc.de/badge/aztech/event-bus-extra-mixpanel.png)](http://hhvm.h4cc.de/package/aztech/event-bus-extra-mixpanel)

## Stability

[![Latest Stable Version](https://poser.pugx.org/aztech/event-bus-extra-mixpanel/v/stable.png)](https://packagist.org/packages/aztech/event-bus-extra-mixpanel)
[![Latest Unstable Version](https://poser.pugx.org/aztech/event-bus-extra-mixpanel/v/unstable.png)](https://packagist.org/packages/aztech/event-bus-extra-mixpanel)

## Installation

### Via Composer

Composer is the only supported way of installing *aztech/event-bus-extra-mixpanel* . Don't know Composer yet ? [Read more about it](https://getcomposer.org/doc/00-intro.md).


`$ composer require "aztech/event-bus-extra-mixpanel":"~1"`

## Autoloading

Add the following code to your bootstrap file :

```
require_once 'vendor/autoload.php';
```

## Dependencies

  * mixpanel/mixpanel-php : ~2

## Supported elements :

  * Persistent publish

## Configuration options & defaults

| Parameter | Default | Description |
|--------------|-------------|-------------------------------------------------------------------------------------------|
| `project-token` | **required** | Your Mixpanel project token. |
| `always-flush` | `false` | Whether to flush events after each Mixpanel publish. |

The `always-flush` parameter is useful if you want to use the plugin in long running processes. By default,
the Mixpanel API flushes sent events only at the end of the execution cycle. This is fine for most cases,
but in long running processes, you can set this option to true to ensure an event is flushed by the API
after each publish.

## Initialization

```php

require_once 'vendor/autoload.php';

use \Aztech\Events\Bus\Events;
use \Aztech\Events\Bus\Plugins\Mixpanel\Mixpanel;

Mixpanel::loadPlugin('mix');

// See options chart for actual parameters
$options = array('project-token' => 'YOUR_TOKEN');

$publisher = Events::createPublisher('mix', $options);
$event = Events::create('category', array('property' => 'value'));

$publisher->publish($event);
// ...
```
