# libAwaitEconomy
Economy library for plugin developer
* WARNING: This library is still incomplete.

# Usage
## Setup
```php
protected function onEnable() : void{
	AwaitEconomy::init($this);
}
```
* Your plugin MUST have `capital-selector` in plugin config
```
#config.yml
capital-selector: coin //currency like $, coin, bla bla ...
```
## GetMoney
```php
/** Player $player */
Await::f2c(function() use ($player){
	$money = yield from AwaitEconomy::getEconomy()->getMoney($player); //Return int|float|null
});
```
## SetMoney
```php
/** Player $player */
/** float $amount */
Await::f2c(function() use ($player, $amount){
	$result = yield from AwaitEconomy::getEconomy()->setMoney($player, $amount); //Return bool (true if sucess, false if fail)
});
```
## AddMoney
```php
/** Player $player */
/** float $amount */
Await::f2c(function() use ($player, $amount){
	$result = yield from AwaitEconomy::getEconomy()->addMoney($player, $amount); //Return bool (true if sucess, false if fail)
});
```
## TakeMoney
```php
/** Player $player */
/** float $amount */
Await::f2c(function() use ($player, $amount){
	$result = yield from AwaitEconomy::getEconomy()->takeMoney($player, $amount); //Return bool (true if sucess, false if fail)
});
```

