<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace Atlqs\SeparatedCMDs\Commands;

use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\player\Player;
use pocketmine\plugin\Plugin;
use pocketmine\utils\TextFormat;

class Greet extends PluginCommand {
    public function __construct(Plugin $plugin) {
        parent::__construct("greet", $plugin);
        $this->setPermission("greet.separatedcmds");
        $this->setDescription("Greeting command");
    }
    public function execute(CommandSender $sender, string $commandLabel, array $args): bool {
        if (!$sender->hasPermission($this->getPermission())) {
            $sender->sendMessage(TextFormat::RED . "You do not have permissions to run this command.");
        }
        if (!$sender instanceof Player) {
            $sender->sendMessage("Please run the command in-game.");
            return true; //Cancels the command if console sends it.
        }
        switch ($args[0] ?? "greet") {
            case "greet":
                    //What the command does here.
                    $name = $sender->getName();
                    $sender->sendMessage(TextFormat::BLUE . "Hello $name!");
        }
        return true;
    }
}
