<?php

namespace PluginMastered\healme

use pocketmine\plugin\PluginBase; 
use pocketmine\command\CommandSender; 
use pocketmine\command\Command; 
use pocketmine\Player; 

class HealMe extends PluginBase {

  public function onEnable() {
  
  }
  
  public function onDisable() {
  
  }
  
  public function onCommand(CommandSender $sender,Command $cmd,$label,array $args) {
  if($sender instanceof Player) {
    switch($cmd->getName()) {
      case "heal":
          if (!($sender instanceof Player)){ 
                     $sender->sendMessage("You do not have enough permisions to use this command!"); 
                    return true; 
                 } 
                 $player = $this->getServer()->getPlayer($sender->getName()); 
                 if ($player->hasPermission("healme.heal")){ 
                     $player->setHealth(20)
                     return true; 
                 } 
                 
          }
