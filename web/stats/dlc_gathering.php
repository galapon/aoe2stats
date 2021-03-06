<?php

$changes_json = <<<JSON
{
	 "Fish traps with japanese": {
			"speed": "0.375 - 0.506 F/s",
			"note": "Usually used fish has run out. Gives quite good wood to food ratio. Japanese get faster working fishing ships by 5% in each age, and the Gillnets tech further boosts the rate, making them faster than Farms for Japanese. Experimental results - 0.375 F/s in Feudal, 0.391 F/s in Castle, 0.486 F/S with Gillnets, 0.407 F/s in Imperial age and 0.506 F/s with Gillnets in Imperial Age (<a href=\"https://1drv.ms/f/s!Ark-SUz3-qr5qRXNLlEPG9Ii3Zuy\">Tests</a>)."
		},
	 "Fish traps": {
		"speed": "0.342 - 0.425 F/s",
		"note": "Usually used fish has run out. Gives quite good wood to food ratio. The Gillnets tech further increases gather rate so that they are similar to Farms. In realistic <a href=\"https://1drv.ms/f/s!Ark-SUz3-qr5qRXNLlEPG9Ii3Zuy\">tests</a> 0.342 (when directly adjacent to the dock) or 0.425 F/s with Gillnets."
		},
	"Fishing shore fish": {
			"speed": "0.280 - 0.348 F/s",
			"note": "Fishing shore fish with fishing ships should be avoided and only using it if deep fish is very far. In <a href=\"https://1drv.ms/f/s!Ark-SUz3-qr5qRSkwXtCvEJ5-88m\">tests</a> 0.280 F/s and 0.348 F/s with Gillnets (Fish Traps being the better alternative when investing into Gillnets)."
		},
	"Fishing shore fish with japanese":	{
			"speed": "0.294 - 0.415 F/s",
			"note": "Japanese have a bonus to their fishing ship work speed: 5% in Dark, 10% in Feudal, 15% in Castle and 20% in Imperial and Gillnets also boosts the gathering rate (Though Fish Traps are usually the better alternative when investing into Gillnets). These values correspond to 0.294 F/s in Dark age, 0.308 F/s in Feudal Age, 0.322 F/s in Castle age, 0.398 F/s with Gillnets, 0.336 F/s in Imperial Age and 0.415 F/s with Gillnets in Imperial Age. Note these values hold only when the fishing ship doesn't have to move to drop off resources. Real values will be lower based on the distance."
		},
	"Fishing deep fish with japanese": {
			"speed": "0.511 - 0.726 F/s",
			"note": "Japanese have a bonus to their fishing ship work speed: 5% in Dark, 10% in Feudal, 15% in Castle, 20% in Imperial and Gillnets also boosts the gathering rate. These correspond to 0.511 F/s in Dark age, 0.536 F/s in Feudal Age, 0.559 F/s in Castle age, 0.692 F/s with Gillnets, 0.585 F/s in Imperial Age and 0.726 F/s with Gillnets in Imperial Age (<a href=\"https://1drv.ms/f/s!Ark-SUz3-qr5qRSkwXtCvEJ5-88m\">Tests</a>). Note these values hold only when the fishing ship doesn't have to move to drop off resources. Real values will be lower based on the distance."
		},
	"Fishing deep fish": {
			"speed": "0.49 - 0.604 F/s",
			"note": "0.604 F/s with the Gillnets technology. Ship fishing is a good alternate in maps that has lakes and seas. Sea economy expand very quickly, when compared to villager based economies. They can expand even in Dark Age, whilst villager economies show great expansion only from the Castle Age onwards."
	},
	"Sheep/Turkey/Cow": {
			"source": "Livestock",
			"note": "Includes sheep, turkey, cow and goat. Livestock have a interesting attribute: they can be positioned underneath the Town Center, nullifying the walk time. Usually only two livestock are placed in the Town Center per time (yes, this requires some micromanagement and experience). Probably, the only downside is that you have to search for them."
		}, 
	"Sheep/Turkey/Cow with Britons": {
		"source": "Livestock with Britons",
		"note": "Includes sheep, turkey, cow and goat. Livestock are specially important for Britons. Finding about 12-14 livestock on land nomad can be enough for them to very quickly reach the Castle Age."
	},

	"Boars": {
		"source": "Eatable predators",
		"note": "Includes wild boars and elephants. These animals fight back when attacked, althought they rush the villagers who shot at them blindly. This way they can be lured to the Town Center to nullify the walking time, pretty much like livestock, except that you cannot actively control them. Most random maps have 2 of them close to your city, which are very useful. In some cases, it might be necessary to research Loom before luring to avoid the villager dying to the boar."
	},
	"Boars with Mongols": {
		"source": "Eatable predators with Mongols",
		"note": "Includes wild boars and elephants. Mongol hunters receive a bonus to gather food faster from these animals."
	},
	"Deer": {
		"source": "Prey animals",
		"note": "Include deer, zebras and ostriches. These animals, unlike predators, flee when attacked, or when a unit comes near them. Because of this attribute, it's quite difficult to lure them closer to the Town Center, althought a Scout can do the trick. But, usually, players build a Mill close to the pocket. There are usually 2 pockets of prey per player in a random game."
	},
	"Deer with Mongols":{
		"source": "Prey animals with Mongols",
		"note": "Include deer, zebras and ostriches. Mongol hunters receive a bonus to gather food faster from these animals."
	},
	"Farming with Mayans" : {
		"speed": "0.30 - 0.37 F/s",
		"note": "0.30 F/s without upgrades, 0.34 F/s with Wheelbarrow+Heavy Plow, 0.37 F/s after Hand Cart (<a href=\"https://1drv.ms/f/s!Ark-SUz3-qr5qROIwgp19j7Ml9-u\">Tests</a>). <br />To offset their extra resource bonus, Mayan farmers work slower. This effect has become stronger in the expansions, with Mayan farmers working between 8-10% slower than other civilizations."
	},
	"Mining with Turks": {
		"speed": "0.455 - 0.601 G/s",
		"note": "Turks get 20 % gold mining bonus (gold mining work rate x 1.2). 0.523 G/s after Gold mining (x1.15) and 0.601 G/s after Gold Shaft Mining (x1.15)."
	}
}
JSON;

$changes = json_decode($changes_json, true);

$new_gather_json = <<<JSON
[
	{
		"type": "Gold",
		"source": "Relics with Indians after Sultans",
		"speed": "0.55 - 0.73 G/s",
		"note": "The unique Tech \"Sultans\" boosts all gold income by 10%. This makes their relics gather 0.55 G/s, or 0.73 G/s with an Aztec ally."
	},
	{
		"type": "Gold",
		"source": "Mining with Indians after Sultans",
		"speed": "0.417 - 0.551 G/s",
		"note": "The unique Tech \"Sultans\" boosts all gold income by 10%. 0.479 G/s after Gold mining (x1.15) and 0.551 G/s after Gold Shaft Mining (x1.15)."
	},
	{
		"type": "Food",
		"source": "Foraging with Franks",
		"speed": "0.3875 F/s",
		"note": "Franks get 25% faster berry gathering. This bonus makes it faster than gathering food from sheep."
	},
	{
		"type": "Food",
		"source": "Fishing with villagers with Indians",
		"speed": "0.4945 F/s",
		"note": "Indians get a 15% gathering bonus. Their fishermen can also carry +15 food, so a total of 25 food"
	},
	{
		"type": "Food",
		"source": "Farming with slavs",
		"speed": "0.39 - 0.41 F/s",
		"note": "0.39 F/s without upgrades, 0.41 F/s with Wheelbarrow+Heavy Plow, 0.41 F/s after Hand Cart (<a href=\"https://1drv.ms/f/s!Ark-SUz3-qr5qROIwgp19j7Ml9-u\">Tests</a>). Slavs get a 15% bonus to their farming rate. After the Wheelbarrow research, the advantage over other civilizations is down to about 5% and almost vanishes when everyone has researched Hand Cart."
	},
	{
		"type": "Food",
		"source": "Farming with berbers",
		"speed": "0.34 - 0.41 F/s",
		"note": "0.39 F/s without upgrades, 0.41 F/s with Wheelbarrow+Heavy Plow, 0.41 F/s after Hand Cart (<a href=\"https://1drv.ms/f/s!Ark-SUz3-qr5qROIwgp19j7Ml9-u\">Tests</a>). Berber villagers walk 10% faster, which makes them spend more time actually collecting food from a farm and thus boosts their gathering rate by a small 1-3%"
	}
]
JSON;

$new_gather = json_decode($new_gather_json);

$string = file_get_contents("aoc_gathering.json");
$json_a = json_decode($string, true);

foreach($json_a['data'] as &$gathering) {
	if(array_key_exists($gathering['source'], $changes)) {
		$gathering = array_replace_recursive($gathering, $changes[$gathering['source']]);
	}
}

$json_a['data'] = array_merge($json_a['data'], $new_gather);	

echo json_encode($json_a);
?>