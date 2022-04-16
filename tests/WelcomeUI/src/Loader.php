<?php

declare(strict_types=1);

namespace HighestDreams\WelcomeUI;

use pocketmine\plugin\PluginBase;
use form\FormHandler; /* So important for fix images */

class Loader extends PluginBase
{
    protected function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents(new EventsHandler(), $this);
        FormHandler::fixImages($this); /* So important for fix images */
    }
}
