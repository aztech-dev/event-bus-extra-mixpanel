<?php

namespace Aztech\Events\Bus\Plugins\Mixpanel;

use Aztech\Events\Bus\Events;
use Aztech\Events\Bus\GenericPluginFactory;

class Mixpanel
{
    public static function loadPlugin($name = 'mixpanel')
    {
        Events::addPlugin($name, new GenericPluginFactory(function () {
            return new MixpanelChannelProvider();
        }), new MixpanelOptionsDescriptor());
    }
}
