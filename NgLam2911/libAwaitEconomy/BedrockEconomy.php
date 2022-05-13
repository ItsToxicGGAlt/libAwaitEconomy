<?php
declare(strict_types=1);

namespace NgLam2911\libAwaitEconomy;

use cooldogedev\BedrockEconomy\api\BedrockEconomyAPI;
use cooldogedev\BedrockEconomy\libs\cooldogedev\libSQL\context\ClosureContext;
use Generator;
use pocketmine\player\Player;
use SOFe\AwaitGenerator\Await;

class BedrockEconomy implements Economy{

	public function init() : void{
		//NOTHING
	}

	public function getMoney(Player $player) : Generator{
		BedrockEconomyAPI::legacy()->getPlayerBalance($player->getName(), ClosureContext::create(yield));
	}

	public function setMoney(Player $player, float $value) : Generator{
		BedrockEconomyAPI::legacy()->setPlayerBalance($player->getName(), (int) $value, ClosureContext::create(yield));
	}

	public function addMoney(Player $player, float $value) : Generator{
		BedrockEconomyAPI::legacy()->addToPlayerBalance($player->getName(), (int) $value, ClosureContext::create(yield));
	}

	public function takeMoney(Player $player, float $value) : Generator{
		BedrockEconomyAPI::legacy()->subtractFromPlayerBalance($player->getName(), (int) $value, ClosureContext::create(yield));
	}
}