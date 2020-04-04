<?php

/*
* This is a template for beginners.

* Made by BlueWhaleYT.

* There are some templates if you want to create commands or when player join then give items.

* If any developers find some error in my template,tell me and I will fix it.

* I am a beginner of plugin developing.
*/

namespace BlueWhaleYT\PluginTemplate;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\utils\Utils;
use pocketmine\utils\TextFormat as TF;

use pocketmine\command\{CommandSender, Command};

use pocketmine\item\Item;
use pocketmine\item\ItemIds;

class Main extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onCommand(CommandSender $sender, Command $command, $label, array $args): bool{
    switch($command->getName()){
      case "test":{
        $sender->sendMessage("This is a test message.");
      }
      return true;
    }
  }
  
  public function onJoin(PlayerJoinEvent $event){
    $player = $event->getPlayer();
    $name = $player->getName();
    $player->sendMessage(TF::GREEN . "You have gain an" . TF::WHITE . " apple " . TF::GREEN . "."); //You can also use "§"
    $player->getInventory()->setItem(0, Item::get(260, 0, 1)); //Apple's id is 260
  }
}
