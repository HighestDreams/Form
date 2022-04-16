<?php

declare(strict_types=1);

namespace YourName\Space;

use form\CustomForm;
use pocketmine\player\Player;

class YourClass extends CustomForm
{
    protected function title(): string
    {
        return 'The title';
    }

    /* Add content with this method (Content like: Dropdown, Label, Input, Slider, StepSlider) */
    protected function content(): void
    {
        // Like:
        // $this->addLabel('+ Did you just learbed ?');
        // $this->addInput('Your answer :', 'Write your answer here...', 'Yes, Tysm :).');
        // You can also define Dropdown, StepSlider, Slider here!
    }

    /* When player clicks the submit button, this function will be executed */
    protected function onSubmit(Player $player, array $data): void
    {
        /* $data[0] is the first thing we added to our content (Here is label) So the second thing we added is input, We can get result of our input with below variable : */
        // $input = $data[1];
        // $player->sendMessage('Your answer is : ' . $input);
    }

    protected function onClose(Player $player): void
    {
        $player->sendMessage('You closed the form');
    }
}