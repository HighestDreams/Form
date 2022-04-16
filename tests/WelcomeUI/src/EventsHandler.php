<?php

declare(strict_types=1);

namespace HighestDreams\WelcomeUI;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class EventsHandler implements Listener
{
    public function onPlayerJoinEvent(PlayerJoinEvent $event)
    {
        $player = $event->getPlayer();
        $player->sendForm(new WelcomeForm());
    }
}