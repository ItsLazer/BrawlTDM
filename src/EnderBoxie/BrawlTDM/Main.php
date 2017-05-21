<?php
namespace EnderBoxie\BrawlTDM;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
class main extends PluginBase {
    public function onLoad(){
        $this->getLogger()->info("BrawlTDM loading.");
    }
    public function onEnable(){
        $this->getLogger()->info("BrawlTDM enabled.");
    }
    public function onDisable(){
        $this->getLogger()->info("BrawlTDM disabled.");
    }
}
