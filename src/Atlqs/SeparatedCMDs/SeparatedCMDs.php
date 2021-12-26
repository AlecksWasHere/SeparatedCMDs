<?php /** @noinspection PhpUnused */

declare(strict_types=1);

namespace Atlqs\SeparatedCMDs;

use Atlqs\SeparatedCMDs\Commands\Greet;
use pocketmine\plugin\PluginBase;

class SeparatedCMDs extends PluginBase {
    public function onEnable(): void {
        $this->getServer()->getCommandMap()->register("greet", new Greet($this));
    }
}
