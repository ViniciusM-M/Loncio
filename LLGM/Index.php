
{
	"siteVersion": "1.154.2",
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1652816153,
		"dateLastModified": 1652816153
	},
	"monster": [
		{
			"name": "Caçador De Sangue",
			"source": "Lolncio",
			"page": 345,
			"basicRules": true,
			"size": [
				"M"
			],
			"type": {
				"type": "humanoid",
				"tags": [
					"any race"
				]
			},
			"alignment": [
				"L",
				"NX",
				"C",
				"E"
			],
			"ac": [
				{
					"ac": 25,
					"from": [
						"Hunter´s Grab"
					]
				}
			],
			"hp": {
				"formula": "39d8 + 273",
				"average": 448
			},
			"speed": {
				"walk": 50
			},
			"str": 18,
			"dex": 28,
			"con": 24,
			"int": 22,
			"wis": 18,
			"cha": 19,
			"passive": 30,
			"cr": "25",
			"environment": [
				"arctic",
				"coastal",
				"desert",
				"forest",
				"grassland",
				"hill",
				"urban"
			],
			"soundClip": {
				"type": "external",
				"url": "https://5e.tools/audio/bestiary/commoner.mp3"
			},
			"damageTags": [
				"O",
				"P",
				"S"
			],
			"hasFluff": true,
			"tokenUrl": "https://5e.tools/img/MM/Commoner.png",
			"shortName": "Hunter",
			"senses": [
				"darkvision 120 ft (Magic Darkness).",
				"blindsight 30 ft."
			],
			"senseTags": [
				"SD",
				"B"
			],
			"languages": [
				"All exotic",
				"Common"
			],
			"languageTags": [
				"C"
			],
			"save": {
				"str": "+12",
				"con": "+15",
				"cha": "+12",
				"int": "+14",
				"wis": "+12",
				"dex": "+17"
			},
			"skill": {
				"acrobatics": "+25",
				"athletics": "+12",
				"perception": "+20",
				"survival": "+12"
			},
			"resist": [
				{
					"resist": [
						"cold",
						"fire",
						"lightning"
					]
				},
				{
					"resist": [
						"bludgeoning",
						"piercing",
						"slashing"
					]
				}
			],
			"immune": [
				{
					"immune": [
						"bludgeoning",
						"piercing",
						"slashing"
					],
					"note": "from non magic attack"
				}
			],
			"conditionImmune": [
				{
					"conditionImmune": [
						"charmed",
						"exhaustion",
						"frightened"
					]
				}
			],
			"trait": [
				{
					"name": "Blood Frenzy",
					"entries": [
						"The hunter has advantage on melee attack rolls against any creature that doesn't have all its hit points."
					]
				},
				{
					"name": "Aggressive",
					"entries": [
						"As a bonus action, the hunter can move up to its speed toward a hostile creature that it can see."
					]
				},
				{
					"name": "Devil's Sight",
					"entries": [
						"Magical darkness doesn't impede the hunter's darkvision."
					]
				},
				{
					"name": "Magic Weapons",
					"entries": [
						"The hunter's weapon attacks are magical."
					]
				},
				{
					"name": "Nimble Escape",
					"entries": [
						"The hunter can take the {@action Disengage} or {@action Hide} action as a bonus action on each of its turns."
					]
				},
				{
					"name": "Legendary Resistance (3/Day)",
					"entries": [
						"If the hunter fails a saving throw, it can choose to succeed instead."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"The hunter makes three scythe attacks, he can replace one if gun blast or a leaping scythe. He can also exchange two scythe attacks for one scythe charge attack."
					]
				},
				{
					"name": "Scythe",
					"entries": [
						"{@atk mw} {@hit 17} to hit, reach 10 ft., one target. {@h}27 ({@damage 4d8 + 9}) slashing damage, plus 9 ({@damage 2d8}) force damage."
					]
				},
				{
					"name": "Leaping Scythe Attack",
					"entries": [
						"{@atk mw} {@hit 17} to hit, reach 10 ft., one target. {@h}63 ({@damage 12d8 + 9}) slashing damage, plus 9 ({@damage 2d8}) force damage."
					]
				},
				{
					"name": "Charge Scythe Attack",
					"entries": [
						"The hunter makes a charge attack with his scythe, all creatures in a 60-foot cone must make a {@dc 20} Dexterity saving throw or take 70 ({@damage 20d6}) force damage. If it succeeds, it takes half damage. This attack destroys objects. Fuck you echo knight."
					]
				},
				{
					"name": "Gun Blast",
					"entries": [
						"{@atk rw} {@hit 17} to hit, range 5/20 ft., one target. {@h}31 ({@damage 5d8 + 9}) piercing damage, plus 9 ({@damage 2d8}) force damage."
					]
				}
			],
			"actionTags": [
				"Multiattack"
			],
			"traitTags": [
				"Aggressive",
				"Devil's Sight",
				"Legendary Resistances",
				"Magic Weapons"
			],
			"miscTags": [
				"MW",
				"RCH",
				"AOE",
				"RW"
			],
			"spellcasting": [
				{
					"name": "Constant Effects",
					"headerEntries": [
						"The hunter is always under the effect of one of the following spells, requiring no concentration. At the start of its turn the hunter can change which spell affects him or reactivate it if it was dispelled (no action required).",
						"Constant Spells: "
					],
					"constant": [
						"{@spell armor of Agathys} 6°th",
						"{@spell investiture of flame|XGE}",
						"{@spell investiture of ice|XGE}",
						"{@spell investiture of stone|XGE}",
						"{@spell investiture of wind|XGE}",
						"{@spell kinetic jaunt|SCC}",
						"{@spell Tasha's otherworldly guise|TCE} (Upper or Lower)"
					],
					"type": "spellcasting"
				}
			],
			"damageTagsSpell": [
				"B",
				"C",
				"F",
				"O"
			],
			"legendaryActions": 3,
			"isNamedCreature": true,
			"legendary": [
				{
					"name": "Move",
					"entries": [
						"The hunter moves up to its speed without provoking opportunity attacks."
					]
				},
				{
					"name": "Strike (Coast 2 Actions)",
					"entries": [
						"The hunter jump 50 feet and makes one Leaping Scythe Attack."
					]
				}
			],
			"fluff": {
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.pinimg.com/564x/c9/e4/76/c9e476931cdd4d23bedcd34e46bc003a.jpg"
						}
					}
				]
			}
		}
	]
}
{
	"siteVersion": "1.154.2",
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1652788072,
		"dateLastModified": 1652788072
	},
	"monster": [
		{
			"name": "Caçador De Sangue",
			"source": "Lolncio",
			"page": 345,
			"basicRules": true,
			"size": [
				"M"
			],
			"type": {
				"type": "humanoid",
				"tags": [
					"any race"
				]
			},
			"alignment": [
				"L",
				"NX",
				"C",
				"E"
			],
			"ac": [
				{
					"ac": 25,
					"from": [
						"Hunter´s Grab"
					]
				}
			],
			"hp": {
				"formula": "39d8 + 273",
				"average": 448
			},
			"speed": {
				"walk": 50
			},
			"str": 18,
			"dex": 28,
			"con": 24,
			"int": 22,
			"wis": 18,
			"cha": 19,
			"passive": 30,
			"cr": "25",
			"environment": [
				"arctic",
				"coastal",
				"desert",
				"forest",
				"grassland",
				"hill",
				"urban"
			],
			"soundClip": {
				"type": "external",
				"url": "https://5e.tools/audio/bestiary/commoner.mp3"
			},
			"damageTags": [
				"O",
				"P",
				"S"
			],
			"hasFluff": true,
			"tokenUrl": "https://5e.tools/img/MM/Commoner.png",
			"shortName": "Hunter",
			"senses": [
				"darkvision 120 ft (Magic Darkness).",
				"blindsight 30 ft."
			],
			"senseTags": [
				"SD",
				"B"
			],
			"languages": [
				"All exotic",
				"Common"
			],
			"languageTags": [
				"C"
			],
			"save": {
				"str": "+12",
				"con": "+15",
				"cha": "+12",
				"int": "+14",
				"wis": "+12",
				"dex": "+17"
			},
			"skill": {
				"acrobatics": "+25",
				"athletics": "+12",
				"perception": "+20",
				"survival": "+12"
			},
			"resist": [
				{
					"resist": [
						"cold",
						"fire",
						"lightning"
					]
				},
				{
					"resist": [
						"bludgeoning",
						"piercing",
						"slashing"
					]
				}
			],
			"immune": [
				{
					"immune": [
						"bludgeoning",
						"piercing",
						"slashing"
					],
					"note": "from non magic attack"
				}
			],
			"conditionImmune": [
				{
					"conditionImmune": [
						"charmed",
						"exhaustion",
						"frightened"
					]
				}
			],
			"trait": [
				{
					"name": "Freedom of Movement",
					"entries": [
						"The hunter ignores {@quickref difficult terrain||3}, and magical effects can't reduce its speed or cause it to be {@condition restrained}. It can spend 5 feet of movement to escape from nonmagical restraints or being {@condition grappled}."
					]
				},
				{
					"name": "Blood Frenzy",
					"entries": [
						"The hunter has advantage on melee attack rolls against any creature that doesn't have all its hit points."
					]
				},
				{
					"name": "Aggressive",
					"entries": [
						"As a bonus action, the hunter can move up to its speed toward a hostile creature that it can see."
					]
				},
				{
					"name": "Devil's Sight",
					"entries": [
						"Magical darkness doesn't impede the hunter's darkvision."
					]
				},
				{
					"name": "Magic Weapons",
					"entries": [
						"The hunter's weapon attacks are magical."
					]
				},
				{
					"name": "Nimble Escape",
					"entries": [
						"The hunter can take the {@action Disengage} or {@action Hide} action as a bonus action on each of its turns."
					]
				},
				{
					"name": "Legendary Resistance (3/Day)",
					"entries": [
						"If the hunter fails a saving throw, it can choose to succeed instead."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"The hunter makes three scythe attacks, he can replace one if gun blast or a leaping scythe. He can also exchange two scythe attacks for one scythe charge attack."
					]
				},
				{
					"name": "Scythe",
					"entries": [
						"{@atk mw} {@hit 17} to hit, reach 10 ft., one target. {@h}27 ({@damage 4d8 + 9}) slashing damage, plus 9 ({@damage 2d8}) force damage."
					]
				},
				{
					"name": "Leaping Scythe Attack",
					"entries": [
						"{@atk mw} {@hit 17} to hit, reach 10 ft., one target. {@h}63 ({@damage 12d8 + 9}) slashing damage, plus 9 ({@damage 2d8}) force damage."
					]
				},
				{
					"name": "Charge Scythe Attack",
					"entries": [
						"The hunter makes a charge attack with his scythe, all creatures in a 60-foot cone must make a {@dc 20} Dexterity saving throw or take 70 ({@damage 20d6}) force damage. If it succeeds, it takes half damage. This attack destroys objects. Fuck you echo knight."
					]
				},
				{
					"name": "Gun Blast",
					"entries": [
						"{@atk rw} {@hit 17} to hit, range 5/20 ft., one target. {@h}31 ({@damage 5d8 + 9}) piercing damage, plus 9 ({@damage 2d8}) force damage."
					]
				}
			],
			"actionTags": [
				"Multiattack"
			],
			"traitTags": [
				"Aggressive",
				"Devil's Sight",
				"Legendary Resistances",
				"Magic Weapons"
			],
			"miscTags": [
				"MW",
				"RCH",
				"AOE",
				"RW"
			],
			"spellcasting": [
				{
					"name": "Constant Effects",
					"headerEntries": [
						"The hunter is always under the effect of one of the following spells, requiring no concentration. At the start of its turn the hunter can change which spell affects him or reactivate it if it was dispelled (no action required).",
						"Constant Spells: "
					],
					"constant": [
						"{@spell armor of Agathys} 6°th",
						"{@spell investiture of flame|XGE}",
						"{@spell investiture of ice|XGE}",
						"{@spell investiture of stone|XGE}",
						"{@spell investiture of wind|XGE}",
						"{@spell kinetic jaunt|SCC}",
						"{@spell Tasha's otherworldly guise|TCE} (Upper or Lower)"
					],
					"type": "spellcasting"
				}
			],
			"damageTagsSpell": [
				"B",
				"C",
				"F",
				"O"
			],
			"legendaryActions": 3,
			"isNamedCreature": true,
			"legendary": [
				{
					"name": "Move",
					"entries": [
						"The hunter moves up to its speed without provoking opportunity attacks."
					]
				},
				{
					"name": "Strike (Coast 2 Actions)",
					"entries": [
						"The hunter jump 50 feet and makes one Leaping Scythe Attack."
					]
				}
			],
			"fluff": {
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.pinimg.com/564x/c9/e4/76/c9e476931cdd4d23bedcd34e46bc003a.jpg"
						}
					}
				]
			}
		}
	]
}
{
	"siteVersion": "1.142.0",
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1638907052,
		"dateLastModified": 1638907052
	},
	"monster": [
		{
			"name": "Chishi - 致死",
			"source": "Lolncio",
			"page": 201,
			"size": "M",
			"type": {
				"type": "fiend",
				"tags": [
					"devil"
				]
			},
			"alignment": [
				"N",
				"E"
			],
			"ac": [
				{
					"ac": 18,
					"from": [
						"renegade's cloak"
					]
				}
			],
			"hp": {
				"formula": "8d8 + 40",
				"average": 76
			},
			"speed": {
				"walk": 40,
				"climb": 20
			},
			"str": 16,
			"dex": 20,
			"con": 20,
			"int": 14,
			"wis": 18,
			"cha": 22,
			"save": {
				"dex": "+8",
				"con": "+8",
				"wis": "+7",
				"cha": "+10"
			},
			"skill": {
				"perception": "+7",
				"stealth": "+11",
				"acrobatics": "+9",
				"sleight of hand": "+13",
				"investigation": "+10",
				"deception": "+10",
				"arcana": "+6",
				"persuasion": "+14"
			},
			"senses": [
				"darkvision 120 ft.",
				"blindsight 30 ft.",
				"devil's sight 120."
			],
			"passive": 17,
			"cr": "10",
			"trait": [
				{
					"name": "Gunslinger",
					"entries": [
						"Being within 5 feet of a hostile creature or attacking at long range doesn't impose disadvantage on Clay ranged attack rolls with a gun. In addition, he ignores half cover and three-quarters cover when making ranged attacks."
					]
				},
				{
					"name": "Finder's Magic.",
					"entries": [
						"Chishi can cast the {@spell hunter's mark} spell with this trait. And, he can also cast the locate object spell with it. Once Chishi cast either spell with this trait, he can't cast that spell with it again until finish a long rest."
					]
				},
				{
					"name": "Relentless Endurance.",
					"entries": [
						"When Chishi are reduced to 0 hit points but not killed outright, he drop to 1 hit point instead. Chishi can't use this feature again until finish a long rest."
					]
				},
				{
					"name": "Hellish Bullets",
					"entries": [
						"When Chishi lands a critical hit with a ranged weapon attack, he can choose to deal {@damage 4d6} fire damage."
					]
				},
				{
					"name": "Nimble Escape.",
					"entries": [
						"Chishi can take the {@action Disengage} or {@action Hide} action as a bonus action on each of its turns."
					]
				},
				{
					"name": "Fast Hands",
					"entries": [
						"Chishi can reload his weapon and drop bombs with his bonus action."
					]
				},
				{
					"name": "Hellish Rebuke",
					"entries": [
						"When Chishi is the target of a melee attack, it can cast 2nd  {@spell Hellish Rebuke}  {@dc 16} Dexterity saving throw"
					]
				},
				{
					"name": "Devil's Sight",
					"entries": [
						"Magical darkness doesn't impede the chishi's darkvision."
					]
				},
				{
					"name": "Assassinate",
					"entries": [
						"During its first turn, the chishi has advantage on attack rolls against any creature that hasn't taken a turn. Any hit the chishi scores against a surprised creature is a critical hit."
					]
				},
				{
					"name": "Evasion",
					"entries": [
						"If the chishi is subjected to an effect that allows it to make a Dexterity saving throw to take only half damage, the chishi instead takes no damage if it succeeds on the saving throw, and only half damage if it fails."
					]
				},
				{
					"name": "Ethereal Jaunt",
					"entries": [
						"As a bonus action, the chishi can magically shift from the Material Plane to the Ethereal Plane, or vice versa."
					]
				}
			],
			"senseTags": [
				"SD",
				"B"
			],
			"damageTags": [
				"P",
				"B"
			],
			"tokenUrl": "https://i.imgur.com/mpcrLLF.png",
			"fluff": {
				"entries": [
					{
						"type": "entries",
						"entries": [
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": []
									}
								]
							}
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.pinimg.com/564x/ee/f4/a2/eef4a20bcc14ac802e3b168b0cb3c3b4.jpg"
						}
					}
				]
			},
			"languages": [
				"Common",
				"Infernal",
				"Thieves' cant"
			],
			"languageTags": [
				"C",
				"I",
				"TC"
			],
			"environment": [
				"urban"
			],
			"action": [
				{
					"name": "Multiattack.",
					"entries": [
						"Chishi pode realizar dois ataques com armas a distancia, três ataques com armas corpo a corpo leves e com propriedade acuidade.",
						"Ações : End Of Line, Shotgun, Rifle Butt."
					]
				},
				{
					"name": "Automatic Pistol",
					"entries": [
						"{@atk rw} {@hit 9} to hit, range 50/150 ft., one target. {@h}12 ({@damage 2d6 + 5}) piercing damage.",
						"***Hellish Bullets .*** ({@dice 4d6}) fire damage."
					]
				},
				{
					"name": "Hunting Rifle",
					"entries": [
						"{@atk rw} {@hit 9} to hit, range 80/240 ft., one target. {@h}16 ({@damage 2d10 + 5}) piercing damage.",
						"***Hellish Bullets .*** ({@dice 4d6}) fire damage."
					]
				},
				{
					"name": "Dagger of Blindsight",
					"entries": [
						"{@atk mw,rw} {@hit 7} to hit, reach 5 ft. or range 20/60 ft., one target. {@h}5 ({@damage 1d4 + 3}) piercing damage in melee, or 5 ({@damage 1d4 + 3}) piercing damage at range.",
						"This rare magic item requires attunement. A creature attuned to it gains blindsight out to a range of 30 feet. The dagger has a saw-toothed edge and a black pearl nested in its pommel."
					]
				},
				{
					"name": "End Of Line",
					"entries": [
						"{@atk rw} {@hit 9} to hit, range 240/240 ft., one target. {@h}27 ({@damage 4d10 + 5}) piercing damage.",
						"***Hellish Bullets .*** ({@dice 4d6}) fire damage."
					]
				},
				{
					"name": "Shotgun",
					"entries": [
						"{@atk rw} {@hit 9} to hit, range 15/60 ft., one target. {@h}28 ({@damage 2d12 + 15}) piercing damage.",
						"If the target is a creature, it must succeed on a {@dc 16} Strength saving throw or be knocked {@condition prone}.",
						"***Hellish Bullets .*** ({@dice 4d6}) fire damage."
					]
				},
				{
					"name": "Rifle Butt",
					"entries": [
						"{@atk mw} {@hit 9} to hit, reach 5 ft., one target. {@h}10 ({@damage 2d6 + 3}) bludgeoning damage.",
						"Whenever Chishi hits a creature with this attacks, he can impose one of the following effects on that target.",
						"It must succeed on a CD 17 Dexterity saving throw or be knocked {@condition prone}.",
						"It must make a CD 17 Strength saving throw. If it fails, you can push it up to 15 feet away from Chishi.",
						"It can't take reactions until the end of Chishi´s next turn."
					]
				}
			],
			"miscTags": [
				"RW",
				"MW",
				"THW",
				"AOE"
			],
			"bonus": [
				{
					"name": "Bomb {@recharge 4}",
					"entries": [
						"Chishi lights this bomb and drops it at a point up to 60 feet away. Each creature within 5 feet of that spot must make a {@dc 16} Dexterity saving throw or take [[{@dice 3d6}]] fire damage."
					]
				}
			],
			"conditionInflict": [
				"prone"
			],
			"shortName": "Chishi",
			"resist": [
				{
					"resist": [
						"fire",
						"poison"
					]
				},
				{
					"resist": []
				}
			],
			"conditionImmune": [
				"poisoned"
			],
			"isNpc": true,
			"traitTags": [
				"Devil's Sight"
			]
		}
	]
}
{
	"siteVersion": "1.136.0",
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1632393355,
		"dateLastModified": 1632393355
	},
	"monster": [
		{
			"name": "Clay Allison",
			"source": "Lolncio",
			"page": 201,
			"size": "M",
			"type": {
				"type": "humanoid",
				"tags": [
					"orc"
				]
			},
			"alignment": [
				"N"
			],
			"ac": [
				{
					"ac": 18,
					"from": [
						"renegade's cloak"
					]
				}
			],
			"hp": {
				"formula": "8d8 + 40",
				"average": 76
			},
			"speed": {
				"walk": 40,
				"climb": 20
			},
			"str": 16,
			"dex": 20,
			"con": 20,
			"int": 14,
			"wis": 18,
			"cha": 8,
			"save": {
				"dex": "+8",
				"con": "+8",
				"wis": "+7"
			},
			"skill": {
				"perception": "+7",
				"stealth": "+11",
				"intimidation": "+2",
				"acrobatics": "+8",
				"survival": "+7",
				"sleight of hand": "+8",
				"medicine": "+7",
				"insight": "+7",
				"investigation": "+5"
			},
			"senses": [
				"darkvision 120 ft.",
				"blindsight 30 ft."
			],
			"passive": 17,
			"cr": "10",
			"trait": [
				{
					"name": "Gunslinger",
					"entries": [
						"Being within 5 feet of a hostile creature or attacking at long range doesn't impose disadvantage on Clay ranged attack rolls with a gun. In addition, he ignores half cover and three-quarters cover when making ranged attacks."
					]
				},
				{
					"name": "Hunter's Intuition.",
					"entries": [
						"When Clay make a Wisdom (Perception) or Wisdom (Survival) check, he can roll a {@dice d4} and add the number rolled to the ability check."
					]
				},
				{
					"name": "Finder's Magic.",
					"entries": [
						"Clay can cast the {@spell hunter's mark} spell with this trait. And, he can also cast the locate object spell with it. Once Clay cast either spell with this trait, he can't cast that spell with it again until finish a long rest."
					]
				},
				{
					"name": "Relentless Endurance.",
					"entries": [
						"When Clay are reduced to 0 hit points but not killed outright, he drop to 1 hit point instead. Clay can't use this feature again until finish a long rest."
					]
				},
				{
					"name": "Dead Eye.",
					"entries": [
						"When Clay score a critical hit with a ranged weapon attack, he can it maximizes the damage from this attack."
					]
				},
				{
					"name": "Nimble Escape.",
					"entries": [
						"The clay allison can take the {@action Disengage} or {@action Hide} action as a bonus action on each of its turns."
					]
				},
				{
					"name": "Fast Hands",
					"entries": [
						"Clay can reload his weapon and drop bombs with his bonus action."
					]
				},
				{
					"name": "Skirmisher",
					"entries": [
						"Clay can move up to half his speed as a reaction when an enemy approaches. This move does not provoke attacks of opportunity."
					]
				}
			],
			"senseTags": [
				"SD",
				"B"
			],
			"damageTags": [
				"P",
				"B"
			],
			"tokenUrl": "https://i.imgur.com/mpcrLLF.png",
			"fluff": {
				"entries": [
					{
						"type": "entries",
						"entries": [
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": []
									}
								]
							}
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://cdn.discordapp.com/attachments/720360860974841968/889316983080886372/5d1a0696c1560fdbc16f789855ff81e8.png"
						}
					}
				]
			},
			"languages": [
				"Common",
				"Infernal",
				"Thieves' cant",
				"Orc"
			],
			"languageTags": [
				"C",
				"I",
				"TC",
				"O"
			],
			"environment": [
				"urban"
			],
			"shortName": true,
			"action": [
				{
					"name": "Multiattack.",
					"entries": [
						"Clay pode realizar dois ataques com armas a distancia, três ataques com armas corpo a corpo leves e com propriedade acuidade.",
						"Ações : End Of Line, Shotgun, Rifle Butt."
					]
				},
				{
					"name": "Automatic Pistol",
					"entries": [
						"{@atk rw} {@hit 9} to hit, range 50/150 ft., one target. {@h}12 ({@damage 2d6 + 5}) piercing damage.",
						"***Dead Eye.*** ({@damage 29}) piercing damage."
					]
				},
				{
					"name": "Hunting Rifle",
					"entries": [
						"{@atk rw} {@hit 9} to hit, range 80/240 ft., one target. {@h}16 ({@damage 2d10 + 5}) piercing damage.",
						"***Dead Eye.*** ({@damage 45}) piercing damage."
					]
				},
				{
					"name": "Dagger of Blindsight",
					"entries": [
						"{@atk mw,rw} {@hit 7} to hit, reach 5 ft. or range 20/60 ft., one target. {@h}5 ({@damage 1d4 + 3}) piercing damage in melee, or 5 ({@damage 1d4 + 3}) piercing damage at range.",
						"This rare magic item requires attunement. A creature attuned to it gains blindsight out to a range of 30 feet. The dagger has a saw-toothed edge and a black pearl nested in its pommel."
					]
				},
				{
					"name": "End Of Line",
					"entries": [
						"{@atk rw} {@hit 9} to hit, range 240/240 ft., one target. {@h}27 ({@damage 4d10 + 5}) piercing damage.",
						"***Dead Eye.*** ({@damage 85}) piercing damage."
					]
				},
				{
					"name": "Shotgun",
					"entries": [
						"{@atk rw} {@hit 9} to hit, range 15/60 ft., one target. {@h}28 ({@damage 2d12 + 15}) piercing damage.",
						"If the target is a creature, it must succeed on a {@dc 16} Strength saving throw or be knocked {@condition prone}.",
						"***Dead Eye.*** ({@damage 63}) piercing damage."
					]
				},
				{
					"name": "Rifle Butt",
					"entries": [
						"{@atk mw} {@hit 9} to hit, reach 5 ft., one target. {@h}10 ({@damage 2d6 + 3}) bludgeoning damage.",
						"Whenever Clay hits a creature with this attacks, he can impose one of the following effects on that target.",
						"It must succeed on a CD 17 Dexterity saving throw or be knocked {@condition prone}.",
						"It must make a CD 17 Strength saving throw. If it fails, you can push it up to 15 feet away from you.",
						"It can't take reactions until the end of your next turn."
					]
				}
			],
			"miscTags": [
				"RW",
				"MW",
				"THW",
				"AOE"
			],
			"bonus": [
				{
					"name": "Bomb {@recharge 4}",
					"entries": [
						"Clay lights this bomb and drops it at a point up to 60 feet away. Each creature within 5 feet of that spot must make a {@dc 16} Dexterity saving throw or take [[{@dice 3d6}]] fire damage."
					]
				}
			],
			"conditionInflict": [
				"prone"
			]
		}
	]
}
{
	"name": "Keelboat",
	"source": "GoS",
	"page": 188,
	"vehicleType": "SHIP",
	"size": "G",
	"dimensions": [
		"60 ft.",
		"20 ft."
	],
	"terrain": [
		"sea"
	],
	"capCrew": 3,
	"capPassenger": 4,
	"capCargo": 0.5,
	"pace": 3,
	"str": 16,
	"dex": 7,
	"con": 13,
	"int": 0,
	"wis": 0,
	"cha": 0,
	"immune": [
		"poison",
		"psychic"
	],
	"conditionImmune": [
		"blinded",
		"charmed",
		"deafened",
		"exhaustion",
		"frightened",
		"incapacitated",
		"paralyzed",
		"petrified",
		"poisoned",
		"prone",
		"stunned",
		"unconscious"
	],
	"hull": {
		"ac": 15,
		"hp": 100,
		"dt": 10
	},
	"control": [
		{
			"name": "Helm",
			"ac": 12,
			"hp": 50,
			"entries": [
				"Move up to the speed of one of its movement components, with one 90-degree turn. If the helm is destroyed, the keelboat can't turn."
			]
		}
	],
	"movement": [
		{
			"name": "Oars",
			"ac": 12,
			"hp": 100,
			"hpNote": "-5 ft. speed per 25 damage taken",
			"speed": [
				{
					"mode": "water",
					"entries": [
						"20 ft."
					]
				}
			]
		},
		{
			"name": "Sails",
			"ac": 12,
			"hp": 100,
			"hpNote": "-5 ft. speed per 20 damage taken ",
			"speed": [
				{
					"mode": "water",
					"entries": [
						"25 ft.; 15 ft. while sailing into the wind; 35 ft. while sailing with the wind."
					]
				}
			]
		}
	],
	"weapon": [
		{
			"name": "Ballista",
			"ac": 15,
			"hp": 50,
			"entries": [
				"{@atk rw} {@hit 6} to hit, range 120/480 ft., one target. {@h}16 ({@damage 3d10}) piercing damage.",
				"Keelboats typically include a ballista only when they are equipped for combat."
			]
		}
	],
	"actionThresholds": {
		"0": 0,
		"1": 1,
		"2": 2
	},
	"action": [
		"On its turn, the keelboat can take 2 actions, choosing from the options below. It can take only 1 action if it has only one crew. It can't take these actions if it has no crew.",
		{
			"type": "list",
			"style": "list-hang-notitle",
			"items": [
				{
					"type": "item",
					"name": "Fire Ballista",
					"entry": "The keelboat can fire its {@object ballista} (DMG, ch. 8)."
				},
				{
					"type": "item",
					"name": "Move",
					"entry": "The keelboat can use its helm to move with its oars or sails."
				}
			]
		}
	],
	"hasFluff": true,
	"hasFluffImages": true
}

{
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1601704747,
		"dateLastModified": 1601704747
	},
	"monster": [
		{
			"name": "Devil Blade",
			"source": "Lolncio",
			"size": "M",
			"type": "fiend",
			"alignment": [
				"L",
				"E"
			],
			"ac": [
				{
					"ac": 18,
					"from": [
						"Doragon  Plate"
					]
				}
			],
			"hp": {
				"average": 127,
				"formula": "15d8 + 60"
			},
			"speed": {
				"walk": 30
			},
			"str": 18,
			"dex": 14,
			"con": 18,
			"int": 11,
			"wis": 12,
			"cha": 14,
			"skill": {
				"athletics": "+7",
				"perception": "+4"
			},
			"senses": [
				"darkvision 60 ft."
			],
			"passive": 14,
			"resist": [
				"cold",
				{
					"resist": [
						"bludgeoning",
						"piercing",
						"slashing"
					],
					"note": "from nonmagical attacks"
				}
			],
			"immune": [
				"fire",
				"poison"
			],
			"conditionImmune": [
				"exhaustion",
				"frightened",
				"poisoned",
				"unconscious"
			],
			"cr": "8",
			"trait": [
				{
					"name": "Essência De Avernus",
					"entries": [
						"Com a ação bônus o devil blade faz um ataque com sua espada, esse ataque causa ({@damage 2d8}) dano de fogo extra quando acerta. Quando usado o devil blade tem vantagem em seus ataques até o inicio de seu próximo turno.  "
					]
				},
				{
					"name": "Devil's Sight",
					"entries": [
						"Magical darkness doesn't impede the devil blade's darkvision."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"O Devil Blade faz dois ataques com sua Hellfire Sword."
					]
				},
				{
					"name": "Hellfire Longsword",
					"entries": [
						"{@atk mw} {@hit 7} to hit, reach 5 ft., one target. 9 ({@damage 1d10 + 4}) slashing damage if used with two hands. Any humanoid killed by an attack made with this weapon has its soul funneled into the River Styx, where it's reborn instantly as a lemure devil."
					]
				},
				{
					"name": "Longbow",
					"entries": [
						"{@atk rw} {@hit 5} to hit, range 150/600 ft., one target. {@h}6 ({@damage 1d8 + 2}) piercing damage."
					]
				},
				{
					"name": "Chamado Infernal",
					"entries": [
						"O Devil Blade pode convocar {@dice 1d4 + 1} {@creature Spined Devil} para o combate. Os diabos obedecem os comandos do Devil Blade até a morte. Quando mortos eles se tornam uma poça de acido."
					]
				}
			],
			"environment": [
				"urban"
			],
			"actionTags": [
				"Multiattack"
			],
			"damageTags": [
				"S",
				"P"
			],
			"miscTags": [
				"MW",
				"RW",
				"RNG"
			],
			"tokenUrl": "https://i.imgur.com/bE5IQ4v.png",
			"fluff": {
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.pinimg.com/564x/a5/5d/81/a55d81c311087f3a5b94c6625630c830.jpg"
						}
					}
				]
			},
			"shortName": true,
			"languages": [
				"Common",
				"Infernal"
			],
			"languageTags": [
				"C",
				"I"
			],
			"senseTags": [
				"D"
			],
			"traitTags": [
				"Devil's Sight"
			]
		}
	]
}
{
	"_meta": {
		"sources": [
			{
				"json": "XAPLAU",
				"abbreviation": "XAP",
				"full": "XAPLAU",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1612559964,
		"dateLastModified": 1612559964
	},
	"monster": [
		{
			"name": "Doragon Draconic",
			"source": "XAPLAU",
			"page": 212,
			"size": "M",
			"type": {
				"type": "humanoid",
				"tags": [
					"dragonborn"
				]
			},
			"alignment": [
				"C",
				"N"
			],
			"ac": [
				{
					"ac": 20,
					"from": [
						"Doragon Plate"
					]
				}
			],
			"hp": {
				"formula": "22d8 + 110",
				"average": 209
			},
			"speed": {
				"walk": 40,
				"fly": 40,
				"canHover": false,
				"climb": 20
			},
			"str": 25,
			"dex": 15,
			"con": 20,
			"int": 10,
			"wis": 14,
			"cha": 18,
			"save": {
				"str": "+12",
				"con": "+10",
				"cha": "+9"
			},
			"skill": {
				"athletics": "+17",
				"intimidation": "+9",
				"perception": "+7",
				"history": "+5"
			},
			"passive": 17,
			"languages": [
				"Common",
				"Draconic",
				"Infernal"
			],
			"cr": "15",
			"trait": [
				{
					"name": "Indomitable (2/Day)",
					"entries": [
						"The Doragon Draconiano rerolls a failed saving throw."
					]
				},
				{
					"name": "Second Wind (Recharges after a Short or Long Rest)",
					"entries": [
						"As a bonus action, the champion can regain 50 hit points."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"The Doragon Draconic makes three attacks with its greatsword or one with its sword and one breath."
					]
				},
				{
					"name": "Dragon tooth",
					"entries": [
						"{@atk mw} {@hit 12} to hit, reach 10 ft., one target. {@h}14 ({@damage 2d6 + 7}) slashing damage, plus 7 ({@damage 3d4}) fire damage."
					]
				},
				{
					"name": "Fire Breath (Recharge {@dice 6}).",
					"entries": [
						"The Doragon Draconic exhales fire in a 60-foot cone. Each creature in that area must make a {@dc 18} Dexterity saving throw, taking 38 ({@damage 9d6}) fire damage on a failed save, or half as much damage on a successful one."
					]
				}
			],
			"environment": [
				"desert",
				"urban"
			],
			"soundClip": {
				"type": "external",
				"url": "https://5e.tools/audio/bestiary/champion.mp3?v=1.121.2"
			},
			"actionTags": [
				"Multiattack"
			],
			"languageTags": [
				"C",
				"DR",
				"I"
			],
			"damageTags": [
				"S",
				"F"
			],
			"tokenUrl": "https://5e.tools/img/VGM/Champion.png?v=1.121.2",
			"fluff": {
				"name": "Champion",
				"source": "VGM",
				"entries": [
					{
						"type": "entries",
						"entries": [
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											"Champions are mighty warriors who honed their fighting skills in wars or gladiatorial pits. To soldiers and other people who fight for a living, champions are as influential as nobles, and their presence is courted as a sign of status among rulers."
										]
									}
								]
							}
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "internal",
							"path": "bestiary/VGM/Champion.jpg"
						}
					}
				]
			},
			"senses": [
				"tremorsense 60 ft.",
				"blindsight 20 ft."
			],
			"senseTags": [
				"T",
				"B"
			],
			"immune": [
				"fire"
			],
			"resist": [
				"cold"
			],
			"conditionImmune": [
				"charmed",
				"frightened"
			],
			"shortName": true,
			"miscTags": [
				"MW",
				"RCH",
				"AOE"
			],
			"bonus": [
				{
					"name": "Fire Dash",
					"entries": [
						"When used, everyone in a 40-foot line must do a CD 18 dexterity resistance test or receive 6 ({@dice 2d6}) fire. Non-magical and flammable objects are spliced. An action to put out the fire. "
					]
				}
			],
			"spellcasting": [
				{
					"name": "Spellcasting",
					"will": [
						"{@spell fire bolt}"
					],
					"daily": {
						"1": [
							"{@spell plane shift}",
							"{@spell power word heal}"
						],
						"3": [
							"{@spell dragon's breath|XGE}",
							"{@spell fire shield}",
							"{@spell fireball}"
						]
					},
					"type": "spellcasting"
				}
			]
		}
	]
}
{
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1603568666,
		"dateLastModified": 1603568666
	},
	"monster": [
		{
			"name": "Doragon Eg Laad",
			"source": "Lolncio",
			"page": 187,
			"size": "M",
			"type": {
				"type": "humanoid",
				"tags": [
					"warforged"
				]
			},
			"alignment": [
				{
					"alignment": null
				},
				{
					"alignment": [
						"L",
						"N"
					]
				}
			],
			"ac": [
				{
					"ac": 18,
					"from": [
						"Doragon Plate"
					]
				}
			],
			"hp": {
				"average": 150,
				"formula": "20d8 + 60"
			},
			"speed": {
				"walk": 40
			},
			"str": 14,
			"dex": 14,
			"con": 16,
			"int": 12,
			"wis": 14,
			"cha": 22,
			"save": {
				"dex": "+6",
				"con": "+7",
				"wis": "+6",
				"cha": "+10"
			},
			"skill": {
				"perception": "+6",
				"stealth": "+6"
			},
			"senses": [
				"darkvision 120 ft."
			],
			"passive": 16,
			"cr": "11",
			"spellcasting": [
				{
					"name": "Innate Spellcasting",
					"will": [
						"{@spell disguise self}",
						"{@spell hex}",
						"{@spell shield}"
					],
					"daily": {
						"1e": [
							"{@spell armor of Agathys}",
							"{@spell darkness}",
							"{@spell levitate} (self only)",
							"{@spell plane shift} (self only)"
						]
					},
					"type": "spellcasting"
				}
			],
			"trait": [
				{
					"name": "Shadow Step",
					"entries": [
						"While in dim light or darkness, the warforged can teleport as a bonus action up to 60 feet to an unoccupied space it can see that is also in dim light or darkness. It then has advantage on the first melee attack it makes before the end of the turn."
					]
				},
				{
					"name": "Devil's Sight",
					"entries": [
						"Magical darkness doesn't impede the doragon eg laad's darkvision."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"The warforged makes two attacks with its shadow sword. If either attack hits and the target is within 10 feet of a 5-foot cube of darkness created by the shadow sword on a previous turn, the drow can dismiss that darkness and cause the target to take 21 ({@damage 6d6}) force damage. The drow can dismiss darkness in this way no more than once per turn."
					]
				},
				{
					"name": "Force Sword",
					"entries": [
						"{@atk mw} {@hit 10} to hit, reach 5 ft., one target. {@h}8 ({@damage 1d6 + 5}) piercing damage plus 10 ({@damage 3d6}) force damage and 10 ({@damage 3d6}) force damage. The warforged can then fill an unoccupied 5-foot cube within 5 feet of the target with magical darkness, which remains for 1 minute."
					]
				}
			],
			"soundClip": {
				"type": "external",
				"url": "https://5e.tools/audio/bestiary/drow-shadowblade.mp3?v=1.113.9"
			},
			"senseTags": [
				"SD"
			],
			"actionTags": [
				"Multiattack"
			],
			"damageTags": [
				"O",
				"P"
			],
			"miscTags": [
				"AOE",
				"MW"
			],
			"tokenUrl": "https://i.imgur.com/aN5229P.png",
			"fluff": {
				"entries": [
					{
						"type": "entries",
						"entries": [
							{
								"type": "entries",
								"entries": [
									{
										"type": "quote",
										"entries": [
											"Many creatures enjoy torture, but the dark elves have made it into an exquisite art."
										],
										"by": "Mordenkainen"
									},
									{
										"type": "entries",
										"name": "Drow Shadowblade",
										"entries": [
											"Drow shadowblades steal down the darkened passages of the Underdark, bound on errands of mayhem. Ruthless killers, shadowblades find employment with a noble house, usually involving the elimination of a rival in another house. Shadowblades also protect enclaves and Underdark cities from enemies and track down thieves who make off with prized treasures. In whatever role they serve, they move undetected until the moment they attack. And then they are the last thing their victims see.",
											"A shadowblade harnesses a dark magic that is said to arise from a fiendish ritual in which the drow kills a lesser demon and mystically prevents it from reforming in the Abyss. This ritual creates a shadow demon and infuses the drow with shadow magic."
										]
									}
								]
							}
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.pinimg.com/564x/e4/cd/b2/e4cdb2759c3d83042279883f609f9587.jpg"
						}
					}
				]
			},
			"languages": [
				"Common",
				"Infernal"
			],
			"languageTags": [
				"C",
				"I"
			],
			"immune": [
				"fire",
				"poison"
			],
			"resist": [
				"cold"
			],
			"spellcastingTags": [
				"I"
			],
			"traitTags": [
				"Devil's Sight"
			]
		}
	]
}
{
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1604773453,
		"dateLastModified": 1604773453
	},
	"monster": [
		{
			"name": "Doragon Forest Keeper",
			"source": "Lolncio",
			"page": 210,
			"size": "M",
			"type": {
				"type": "humanoid",
				"tags": [
					"wood elf"
				]
			},
			"alignment": [
				"C",
				"N"
			],
			"ac": [
				{
					"ac": 22,
					"from": [
						"Doragon Wood Plate"
					]
				}
			],
			"hp": {
				"formula": "24d8 + 96",
				"average": 204
			},
			"speed": {
				"walk": 45,
				"climb": 20
			},
			"str": 10,
			"dex": 22,
			"con": 18,
			"int": 12,
			"wis": 26,
			"cha": 18,
			"save": {
				"wis": "+14",
				"cha": "+10",
				"dex": "+12",
				"con": "+10"
			},
			"skill": {
				"medicine": "+14",
				"nature": "+7",
				"perception": "+20",
				"acrobatics": "+12",
				"survival": "+20"
			},
			"passive": 30,
			"languages": [
				"Druidic,Common",
				"Elvish"
			],
			"cr": "18",
			"spellcasting": [
				{
					"name": "Spellcasting",
					"headerEntries": [
						"The Doragon Forest Keeper is an 20th-level spellcaster. Its spellcasting ability is Wisdom (spell save {@dc 22}, {@hit 14} to hit with spell attacks). It has the following druid spells prepared:"
					],
					"spells": {
						"0": {
							"spells": [
								"{@spell druidcraft}",
								"{@spell mending}",
								"{@spell poison spray}",
								"{@spell primal savagery|XGE}",
								"{@spell produce flame}",
								"{@spell thorn whip}"
							]
						}
					},
					"will": [
						"{@spell entangle}",
						"{@spell longstrider}",
						"{@spell warding wind|XGE}"
					],
					"daily": {
						"1": [
							"{@spell heal}",
							"{@spell plane shift}",
							"{@spell storm of vengeance}"
						]
					},
					"ability": "wis",
					"type": "spellcasting"
				}
			],
			"environment": [
				"forest",
				"mountain",
				"swamp"
			],
			"soundClip": {
				"type": "external",
				"url": "https://5e.tools/audio/bestiary/archdruid.mp3?v=1.115.0"
			},
			"languageTags": [
				"C",
				"DU",
				"E"
			],
			"damageTags": [
				"S",
				"F",
				"A",
				"P"
			],
			"conditionInflictSpell": [
				"blinded",
				"charmed",
				"paralyzed",
				"prone",
				"restrained"
			],
			"tokenUrl": "https://media.discordapp.net/attachments/727134232157225001/774417662435786783/DB1YsoU.png",
			"fluff": {
				"entries": [
					{
						"type": "entries",
						"entries": [
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											"Archdruids watch over the natural wonders of their domains. They seldom interact with civilized folk unless there is a great threat to the natural order. An archdruid typically has one or more pupils who are druids (see the Monster Manual for statistics), and the archdruid's lair is usually guarded by loyal beasts and fey creatures."
										]
									}
								]
							}
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.pinimg.com/564x/3b/2e/49/3b2e490b830eb1406dd92cc7076f1479.jpg"
						}
					}
				]
			},
			"shortName": true,
			"senses": [
				"blindsight 60 ft."
			],
			"senseTags": [
				"B"
			],
			"conditionImmune": [
				"charmed"
			],
			"spellcastingTags": [
				"CD"
			],
			"immune": [
				"necrotic"
			],
			"resist": [
				"cold"
			],
			"trait": [
				{
					"name": "Shapechanger",
					"entries": [
						"The doragon forest keeper can use its action to polymorph into a Small or Medium humanoid it has seen, or back into its true form. Its statistics, other than its size, are the same in each form. Any equipment it is wearing or carrying isn't transformed. It reverts to its true form if it dies."
					]
				},
				{
					"name": "Fey Ancestry",
					"entries": [
						"The doragon forest keeper has advantage on saving throws against being {@condition charmed}, and magic can't put the doragon forest keeper to sleep."
					]
				},
				{
					"name": "Magic Resistance",
					"entries": [
						"The doragon forest keeper has advantage on saving throws against spells and other magical effects."
					]
				},
				{
					"name": "Magic Weapons",
					"entries": [
						"The doragon forest keeper's weapon attacks are magical."
					]
				}
			],
			"traitTags": [
				"Fey Ancestry",
				"Magic Resistance",
				"Magic Weapons",
				"Shapechanger"
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"Doragon Forest Keeper faz dois ataque com sua Men YoYu Ken e conjura um truque."
					]
				},
				{
					"name": "Kiru Shindo",
					"entries": [
						"{@atk mw} {@hit 14} to hit, reach 5 ft., one target. {@h}16 ({@damage 3d6 + 6}) slashing damage."
					]
				},
				{
					"name": "Doragon Flame Blade",
					"entries": [
						"{@atk mw} {@hit 14} to hit, reach 5 ft., one target. {@h}10 ({@damage 3d6}) fire damage."
					]
				},
				{
					"name": "Primal Savagery",
					"entries": [
						"{@atk mw} {@hit 14} to hit, reach 5 ft., one target. {@h}22 ({@damage 4d10}) acid damage."
					]
				},
				{
					"name": "Thorn Whip",
					"entries": [
						"{@atk mw} {@hit 14} to hit, reach 30 ft., one target. {@h}14 ({@damage 4d6}) piercing damage."
					]
				},
				{
					"name": "Forgetfulness (Recharge 6).",
					"entries": [
						"The Doragon Forest Keeper targets one creature it can see within 60 feet of it. That creature must make a {@dc 18} Intelligence saving throw and on a failure the target is {@condition stunned} for 1 minute. A {@condition stunned} creature repeats the saving throw at the end of each of its turns, ending the effect on itself on a success. If the target remains {@condition stunned} for the full minute, it forgets everything it sensed, experienced, and learned during the last 5 hours."
					]
				}
			],
			"miscTags": [
				"MW",
				"RCH"
			],
			"actionTags": [
				"Multiattack"
			],
			"conditionInflict": [
				"stunned"
			]
		}
	]
}
{
	"_meta": {
		"sources": [
			{
				"json": "LolncioGM",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1615518309,
		"dateLastModified": 1615518309
	},
	"monster": [
		{
			"name": "Doragon Lokhir Fellheart",
			"isNamedCreature": true,
			"source": "LolncioGM",
			"page": 288,
			"size": "M",
			"type": "aberration",
			"alignment": [
				"C",
				"E"
			],
			"ac": [
				{
					"ac": 21,
					"from": [
						"natural armor"
					]
				}
			],
			"hp": {
				"average": 325,
				"formula": "31d8 + 186"
			},
			"speed": {
				"walk": 40,
				"fly": {
					"number": 40,
					"condition": "(hover)"
				},
				"canHover": true
			},
			"str": 26,
			"dex": 21,
			"con": 22,
			"int": 26,
			"wis": 23,
			"cha": 24,
			"save": {
				"int": "+15",
				"wis": "+13",
				"cha": "+14"
			},
			"skill": {
				"arcana": "+15",
				"history": "+15",
				"insight": "+13",
				"perception": "+13"
			},
			"senses": [
				"truesight 120 ft."
			],
			"passive": 23,
			"resist": [
				"poison",
				"psychic"
			],
			"conditionImmune": [
				"blinded",
				"charmed",
				"exhaustion",
				"frightened",
				"poisoned",
				"prone"
			],
			"languages": [
				"Deep Speech",
				"telepathy 120 ft."
			],
			"cr": "24",
			"trait": [
				{
					"name": "Alien Mind",
					"entries": [
						"If a creature tries to read Dyrrn's thoughts or deals psychic damage to it, that creature must succeed on a {@dc 23} Intelligence saving throw or be {@condition stunned} for 1 minute. The {@condition stunned} creature can repeat the saving throw at the end of each of its turns, ending the effect on itself on a success."
					]
				},
				{
					"name": "Legendary Resistance (3/Day)",
					"entries": [
						"If Dyrrn fails a saving throw, it can choose to succeed instead."
					]
				},
				{
					"name": "Magic Resistance",
					"entries": [
						"Dyrrn has advantage on saving throws against spells and other magical effects."
					]
				},
				{
					"name": "Regeneration",
					"entries": [
						"Dyrrn regains 20 hit points at the start of its turn. If Dyrrn takes radiant damage, this trait doesn't function at the start of its next turn. Dyrrn dies only if it starts its turn with 0 hit points and doesn't regenerate."
					]
				},
				{
					"name": "Teleport",
					"entries": [
						"As a bonus action, Dyrrn can teleport up to 30 feet to an unoccupied space it can see."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"Dyrrn makes one Tentacle Whip attack and uses its Corruption once. Dyrrn can replace its Tentacle Whip attack with Extract Brain if it has a creature {@condition grappled}."
					]
				},
				{
					"name": "Tentacle Whip",
					"entries": [
						"{@atk mw} {@hit 15} to hit, reach 10 ft., one target. {@h}24 ({@damage 3d10 + 8}) slashing damage. If the target is a Medium or smaller creature, it is {@condition grappled} (escape {@dc 23}), pulled into an unoccupied space within 5 feet of Dyrrn, and must succeed on a {@dc 23} Intelligence saving throw or be {@condition stunned} until this grapple ends. Dyrrn can't use the same tentacle whip on another target until this grapple ends. Dyrrn has two tentacle whips."
					]
				},
				{
					"name": "Corruption",
					"entries": [
						"Dyrrn targets one creature it can see within 60 feet of it. The target must succeed on a {@dc 23} Constitution saving throw or take 22 ({@damage 4d6 + 8}) necrotic damage and become corrupted for 1 minute.",
						"A corrupted creature's flesh twists in alien ways. The creature has disadvantage on attack rolls, its speed is reduced by half, and if it tries to cast a spell, it must first succeed on a {@dc 15} Intelligence check or the spell fails and is wasted. The corrupted creature can repeat the saving throw at the end of each of its turns, ending the effect on itself on a success."
					]
				},
				{
					"name": "Extract Brain",
					"entries": [
						"{@atk mw} {@hit 15} to hit, reach 5 ft., one {@condition incapacitated} creature {@condition grappled} by Dyrrn. {@h}55 ({@damage 10d10}) piercing damage. If this damage reduces the target to 0 hit points, Dyrrn kills the target by extracting and devouring its brain."
					]
				}
			],
			"legendary": [
				{
					"name": "Tentacle Whip",
					"entries": [
						"Dyrrn makes one attack with its Tentacle Whip."
					]
				},
				{
					"name": "Spawn Aberration (Costs 2 Actions)",
					"entries": [
						"Dyrrn regurgitates an intellect devourer in an unoccupied space within 5 feet of it. The intellect devourer is under Dyrrn's control and acts immediately after Dyrrn in the initiative order."
					]
				},
				{
					"name": "Mind Blast (Costs 3 Actions)",
					"entries": [
						"Dyrrn magically emits psychic energy in a 60-foot cone. Each creature in that area must succeed on a {@dc 23} Intelligence saving throw or take 30 ({@damage 5d8 + 8}) psychic damage and be {@condition stunned} for 1 minute. A creature can repeat the saving throw at the end of each of its turns, ending the effect on itself on a success."
					]
				}
			],
			"legendaryGroup": {
				"name": "Dyrrn",
				"source": "ERLW"
			},
			"traitTags": [
				"Legendary Resistances",
				"Magic Resistance",
				"Regeneration"
			],
			"senseTags": [
				"U"
			],
			"actionTags": [
				"Multiattack"
			],
			"languageTags": [
				"DS",
				"TP"
			],
			"damageTags": [
				"S",
				"N",
				"P",
				"Y"
			],
			"miscTags": [
				"MW",
				"RCH",
				"AOE"
			],
			"conditionInflict": [
				"stunned",
				"grappled"
			],
			"conditionInflictLegendary": [
				"restrained"
			],
			"hasFluff": true,
			"hasFluffImages": true,
			"fluff": {
				"entries": [
					{
						"type": "entries",
						"entries": [
							"Dyrrn is known to its followers as the Corruptor, the Stealer of Thoughts, the Slithering Lord, and the Foul Labyrinth. In the lore of the Gatekeepers, it is said that Dyrrn plants thoughts in the weak minded—the seeds of terrible ideas that fester and grow. Those who are particularly brilliant often draw the attention of the Foul Labyrinth, which hungers to consume unique minds.",
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"name": "Twisting Flesh and Thought",
										"entries": [
											"The mind flayers of Eberron know Dyrrn as the Overmind, and it serves as the cornerstone of their collective consciousness. Of all the daelkyr, the Corruptor is the most adept at twisting minds and bodies to create monsters. It was Dyrrn who turned goblinoid prisoners into the first dolgaunts and dolgrims, creating the legions that would savage the nations of Khorvaire. Dyrrn is also a prolific creator of symbionts—treasures that tempt people to bind alien entities to their flesh."
										]
									},
									{
										"type": "entries",
										"name": "Dyrrn's Cults",
										"entries": [
											"Dyrrn's lair touches the Eldeen Reaches, and the druids of the Towering Wood are always watching for Dyrrn's influence. At the start of the Last War, the dwarves of the Mror Holds discovered passages to the daelkyr's realm below their halls, and Dyrrn's cults have spread from there.",
											"Mind flayers often work with Dyrrn's cults, many of which are obsessed with evolution—through the use of symbionts or by becoming an aberration. Those who worship the Stealer of Thoughts believe that Dyrrn will consume all sentient beings, except for its servants.",
											"Dyrrn most often appears as a tall humanoid male with pale skin, clad in a heavy cassock of interwoven black leather that slithers unsettlingly around the daelkyr's form. Dyrrn can extend tentacles from its body, using them to extract the brains of others."
										]
									}
								]
							},
							{
								"type": "entries",
								"name": "Dyrrn's Lair",
								"entries": [
									"Dyrrn makes its lair in the Palace of Sinew, a horrid site shaped from the leftover flesh and bones of the daelkyr's sculpting. The walls of the palace undulate as air flows through them, as if the space were breathing."
								]
							},
							{
								"type": "entries",
								"name": "Madness of Dyrrn",
								"entries": [
									"If a creature goes mad in Dyrrn's lair or while it can see the daelkyr, it gains a form of indefinite madness. Roll on the Madness of Dyrrn table to determine the nature of this madness, which takes the form of a character flaw that lasts until cured. Chapter 8 of the {@book Dungeon Master's Guide|DMG} has more information on madness.",
									{
										"type": "table",
										"caption": "Madness of Dyrrn",
										"colLabels": [
											"d6",
											"Flaw (lasts until cured)"
										],
										"colStyles": [
											"col-2 text-center",
											"col-10"
										],
										"rows": [
											[
												"1",
												"\"There's an illithid parasite living in my brain!\""
											],
											[
												"2",
												"\"I can feel myself evolving into an aberration.\""
											],
											[
												"3",
												"\"Aberrations are the only natural things.\""
											],
											[
												"4",
												"\"A part of me has become a conscious entity.\""
											],
											[
												"5",
												"\"My opponents must bow down to a mind flayer!\""
											],
											[
												"6",
												"\"Dyrrn and the mind flayers simply want to unite all sentient creatures in collective consciousness. And I receive messages from the group mind!\""
											]
										]
									}
								]
							}
						]
					},
					{
						"type": "entries",
						"entries": [
							{
								"type": "entries",
								"name": "Lair Actions",
								"entries": [
									"While within the Palace of Sinew, Dyrrn can invoke the ambient magic to take lair actions. On initiative count 20 (losing initiative ties), Dyrrn can take a lair action to cause one of the following effects; it can't use the same effect two rounds in a row:",
									{
										"type": "list",
										"items": [
											"Dyrrn uses its Corruption action.",
											"A 30-foot-square area of ground within 120 feet of Dyrrn sprouts tentacles until initiative count 20 on the next round. Any creature that starts or ends its turn in the area must succeed on a {@dc 23} Strength saving throw or be {@condition restrained}. A creature can escape the tentacles with a successful {@dc 23} Strength ({@skill Athletics}) or Dexterity ({@skill Acrobatics}) check as an action.",
											"Each creature of Dyrrn's choice that it can see within 120 feet of it must succeed on a {@dc 23} Wisdom saving throw or take 26 ({@damage 4d12}) psychic damage. Unless the target has immunity to psychic damage, its Intelligence score is reduced by {@dice 1d4} each time it fails the saving throw for this lair action. The target dies if its Intelligence score is reduced to 0. The reduction lasts until the target finishes a short or long rest."
										]
									}
								]
							}
						]
					},
					{
						"type": "entries",
						"entries": [
							{
								"type": "entries",
								"name": "Regional Effects",
								"entries": [
									"A region containing a passage to Dyrrn's lair is warped in one or more of these ways:",
									{
										"type": "list",
										"items": [
											"Plants and animals raised within 2 mile of the passage have twisted, aberrant forms. Use the Daelkyr Modifications table for inspiration.",
											"Creatures within 1 mile of the passage frequently feel as if something is crawling under their skin.",
											"If a humanoid spends at least 1 hour within 1 mile of the passage, that creature must succeed on a {@dc 22} Wisdom saving throw or descend into a type of madness (see \"Madness of Dyrrn\" below). A creature that succeeds on this saving throw can't be affected by this regional effect again for 24 hours."
										]
									},
									"If Dyrrn dies, these effects fade away after {@dice 1d10} days."
								]
							}
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://cdn.discordapp.com/attachments/557321504220643349/819767667262750740/234.jpg"
						}
					}
				]
			},
			"tokenUrl": "https://cdn.discordapp.com/attachments/557321504220643349/819767555866624070/Dy.png"
		}
	]
}
{
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LL",
				"full": "Lolôncio",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1601682671,
		"dateLastModified": 1601682671
	},
	"monster": [
		{
			"name": "Doragon Mage",
			"size": "M",
			"type": "fiend",
			"source": "Lolncio",
			"alignment": [
				{
					"alignment": [
						"L"
					]
				}
			],
			"ac": [
				{
					"ac": 20,
					"from": [
						"Doragon Plate"
					]
				}
			],
			"hp": {
				"formula": "50d12 + 200",
				"average": 525
			},
			"speed": {
				"walk": 30,
				"fly": 80,
				"canHover": false
			},
			"str": 10,
			"dex": 14,
			"con": 18,
			"int": 24,
			"wis": 20,
			"cha": 16,
			"passive": 23,
			"cr": "28",
			"shortName": true,
			"senses": [
				"truesight 120 ft."
			],
			"senseTags": [
				"U"
			],
			"languages": [
				"All"
			],
			"skill": {
				"arcana": "+23",
				"history": "+23",
				"religion": "+23",
				"perception": "+13"
			},
			"save": {
				"con": "+12",
				"int": "+15",
				"wis": "+13",
				"cha": "+11"
			},
			"resist": [
				{
					"resist": [
						{
							"special": "damage from spells"
						}
					]
				},
				{
					"resist": [
						"bludgeoning",
						"piercing",
						"slashing"
					],
					"preNote": "nonmagical"
				}
			],
			"immune": [
				"cold",
				"fire",
				"necrotic",
				"poison",
				"psychic"
			],
			"conditionImmune": [
				"frightened",
				"paralyzed",
				"poisoned"
			],
			"legendaryActions": 3,
			"legendary": [
				{
					"name": "Kōri -  氷",
					"entries": [
						"The lich uses its Kōri -  氷"
					]
				},
				{
					"name": "Spell",
					"entries": [
						"The lich casts a 1st or 2 st Spell."
					]
				},
				{
					"name": "Disrupt Life (Costs 3 Actions).",
					"entries": [
						"Each non-undead creature within 20 feet of the doragon mage must make a {@dc 22} Constitution saving throw against this magic, taking 21 ({@damage 6d6}) necrotic damage on a failed save, or half as much damage on a successful one."
					]
				}
			],
			"damageTags": [
				"C",
				"N"
			],
			"action": [
				{
					"name": "Multiattack.",
					"entries": [
						"Doragon faz um ataque com a Kōri, conjura uma Spell e um Truque"
					]
				},
				{
					"name": "Kōri -  氷",
					"entries": [
						"{@atk mw} {@hit 15} to hit, reach 5 ft., one creature. {@h}10 ({@damage 3d8 + 6}) cold damage. "
					]
				}
			],
			"miscTags": [
				"MW"
			],
			"trait": [
				{
					"name": "Stgya Aura",
					"entries": [
						"Ao receber um ataque Doragon Mage exala uma explosão gélida, todos no raio de 15 pés precisão fazer um teste de resistência de constituição CD 20 ou serão paralisados. "
					]
				},
				{
					"name": "Legendary Resistance (3/Day)",
					"entries": [
						"If the doragon mage fails a saving throw, it can choose to succeed instead."
					]
				}
			],
			"spellcasting": [
				{
					"name": "Spellcasting",
					"headerEntries": [
						"The doragon mage is an 20th-level spellcaster. Its spellcasting ability is Intelligence (spell save {@dc 22}, +12 to hit with spell attacks)."
					],
					"ability": "int",
					"type": "spellcasting"
				},
				{
					"name": "Spellcasting",
					"spells": {
						"0": {
							"spells": [
								"{@spell chill touch}",
								"{@spell dancing lights}",
								"{@spell mage hand}",
								"{@spell toll the dead|XGE}"
							]
						},
						"1": {
							"spells": [
								"{@spell absorb elements|XGE}",
								"{@spell chromatic orb}",
								"{@spell magic missile}",
								"{@spell shield}"
							],
							"slots": 4
						},
						"2": {
							"spells": [
								"{@spell misty step}",
								"{@spell Nystul's magic aura}",
								"{@spell ray of enfeeblement}",
								"{@spell shatter}"
							],
							"slots": 3
						},
						"3": {
							"spells": [
								"{@spell animate dead}",
								"{@spell counterspell}",
								"{@spell dispel magic}",
								"{@spell slow}"
							],
							"slots": 3
						},
						"4": {
							"spells": [
								"{@spell dimension door}",
								"{@spell ice storm}"
							],
							"slots": 3
						},
						"5": {
							"spells": [
								"{@spell cloudkill}",
								"{@spell Rary's telepathic bond}"
							],
							"slots": 3
						},
						"6": {
							"spells": [
								"{@spell scatter|XGE}",
								"{@spell Tenser's transformation|XGE}"
							],
							"slots": 3
						},
						"7": {
							"spells": [
								"{@spell crown of stars|XGE}",
								"{@spell plane shift}"
							],
							"slots": 2
						},
						"8": {
							"spells": [
								"{@spell feeblemind}",
								"{@spell mind blank}"
							],
							"slots": 2
						},
						"9": {
							"spells": [
								"{@spell time stop}"
							],
							"slots": 1
						}
					},
					"type": "spellcasting"
				}
			],
			"traitTags": [
				"Legendary Resistances"
			],
			"tokenUrl": "https://i.imgur.com/WAJ5uS2.png",
			"fluff": {
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.pinimg.com/564x/5b/27/c3/5b27c354368667c73571d431c8895b12.jpg"
						}
					}
				]
			}
		}
	]
}
{
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1603711734,
		"dateLastModified": 1603711734
	},
	"monster": [
		{
			"name": "Doragon Obliteration",
			"source": "Lolncio",
			"page": 201,
			"size": "M",
			"type": {
				"type": "humanoid",
				"tags": [
					"warforged"
				]
			},
			"alignment": [
				"N"
			],
			"ac": [
				{
					"ac": 18,
					"from": [
						"Doragon Plate"
					]
				}
			],
			"hp": {
				"formula": "13d10 + 39",
				"average": 111
			},
			"speed": {
				"walk": 40
			},
			"str": 14,
			"dex": 20,
			"con": 16,
			"int": 11,
			"wis": 13,
			"cha": 20,
			"save": {
				"dex": "+9",
				"con": "+7",
				"wis": "+5"
			},
			"skill": {
				"perception": "+5",
				"stealth": "+13",
				"intimidation": "+9"
			},
			"senses": [
				"darkvision 120 ft."
			],
			"passive": 15,
			"cr": "11",
			"spellcasting": [
				{
					"name": "Innate Spellcasting",
					"will": [
						"{@spell dancing lights}",
						"{@spell detect thoughts}",
						"{@spell disguise self}",
						"{@spell hex}",
						"{@spell levitate}",
						"{@spell misty step}"
					],
					"daily": {
						"1e": [
							"{@spell banishing smite}",
							"{@spell globe of invulnerability}",
							"{@spell greater invisibility}",
							"{@spell plane shift} (Self only)"
						]
					},
					"type": "spellcasting"
				},
				{
					"name": "Innate Spellcasting",
					"daily": {
						"3": [
							"{@spell dimension door}",
							"{@spell scatter|XGE}"
						]
					},
					"type": "spellcasting"
				}
			],
			"trait": [
				{
					"name": "Gunslinger",
					"entries": [
						"Being within 5 feet of a hostile creature or attacking at long range doesn't impose disadvantage on the doragon's ranged attack rolls with a gun. In addition, the doragon ignores half cover and three-quarters cover when making ranged attacks."
					]
				},
				{
					"name": "Magic Resistance",
					"entries": [
						"The doragon obliteration has advantage on saving throws against spells and other magical effects."
					]
				},
				{
					"name": "Magic Weapons",
					"entries": [
						"The doragon obliteration's weapon attacks are magical."
					]
				},
				{
					"name": "Evasion",
					"entries": [
						"If the doragon obliteration is subjected to an effect that allows it to make a Dexterity saving throw to take only half damage, the doragon obliteration instead takes no damage if it succeeds on the saving throw, and only half damage if it fails."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"The doragon makes two Antimatter rifle attacks and cast spell."
					]
				},
				{
					"name": "Antimatter rifle",
					"entries": [
						"{@atk rw} {@hit 12} to hit, range 120/360 ft., one target. {@h}19 ({@damage 4d6 + 5}) force damage."
					]
				},
				{
					"name": "Hex Antimatter rifle",
					"entries": [
						"{@atk rw} {@hit 12} to hit, range 120/360 ft., one target. {@h}22 ({@damage 5d6 + 5}) force damage, plus 4 ({@damage 1d6}) necrotic damage."
					]
				},
				{
					"name": "Penetrating Shot",
					"entries": [
						"{@atk rw} {@hit 12} to hit, range 120/360 ft., one target. {@h}19 ({@damage 4d6 + 5}) force damage. A creature 10 feet from the target takes damage from the shot."
					]
				},
				{
					"name": "Empowered shooting {@recharge 5}",
					"entries": [
						"The doragon shoot in one single target  in a 360ft. The creature in that range must make a {@dc 19} Dexterity saving throw, taking 63 ({@damage 18d6}) force damage on a failed save, or half as much damage on a successful one."
					]
				}
			],
			"senseTags": [
				"SD"
			],
			"actionTags": [
				"Multiattack"
			],
			"damageTags": [
				"O",
				"N"
			],
			"spellcastingTags": [
				"I"
			],
			"tokenUrl": "https://i.imgur.com/WdkwqgJ.png",
			"fluff": {
				"entries": [
					{
						"type": "entries",
						"entries": [
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											"Firearms aren't widely available in the North, but some members of Bregan D'aerthe are equipped with Lantanese pistols, bullets, and packets of smokepowder. These drow gunslingers are expert pistoleers, as skilled with their guns as the best archers are with their bows."
										]
									}
								]
							}
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.pinimg.com/564x/90/bf/b8/90bfb8477f32dfd44510c48b6170d5cf.jpg"
						}
					}
				]
			},
			"languages": [
				"Common",
				"Infernal",
				"Elvish",
				"Celestial",
				"Undercommon"
			],
			"languageTags": [
				"C",
				"I",
				"E",
				"CE",
				"U"
			],
			"traitTags": [
				"Magic Resistance",
				"Magic Weapons"
			],
			"environment": [
				"urban"
			],
			"miscTags": [
				"RW"
			],
			"immune": [
				"necrotic",
				"poison"
			],
			"resist": [
				"cold"
			]
		}
	]
}
{
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1608342898,
		"dateLastModified": 1608342898
	},
	"monster": [
		{
			"name": "Doragon Skull Lord",
			"source": "Lolncio",
			"page": 230,
			"size": "M",
			"type": "undead",
			"alignment": [
				"L",
				"E"
			],
			"ac": [
				{
					"ac": 18,
					"from": [
						"{@item plate armor|phb}"
					]
				}
			],
			"hp": {
				"average": 105,
				"formula": "14d8 + 42"
			},
			"speed": {
				"walk": 40
			},
			"str": 14,
			"dex": 16,
			"con": 17,
			"int": 16,
			"wis": 15,
			"cha": 21,
			"skill": {
				"athletics": "+7",
				"history": "+8",
				"perception": "+12",
				"stealth": "+8"
			},
			"senses": [
				"darkvision 60 ft."
			],
			"passive": 22,
			"resist": [
				{
					"resist": [
						"bludgeoning",
						"piercing",
						"slashing"
					],
					"note": "from nonmagical attacks"
				}
			],
			"immune": [
				"cold",
				"necrotic",
				"poison"
			],
			"conditionImmune": [
				"blinded",
				"charmed",
				"deafened",
				"exhaustion",
				"frightened",
				"poisoned",
				"stunned",
				"unconscious"
			],
			"languages": [
				"all the languages it knew in life"
			],
			"cr": "15",
			"spellcasting": [
				{
					"name": "Spellcasting",
					"headerEntries": [
						"The skull lord is a 13th-level spellcaster. Its spellcasting ability is Charisma (spell save {@dc 18}, {@hit 10} to hit with spell attacks). The skull lord knows the following sorcerer spells:"
					],
					"spells": {
						"0": {
							"spells": [
								"{@spell chill touch}",
								"{@spell fire bolt}",
								"{@spell mage hand}",
								"{@spell poison spray}",
								"{@spell ray of frost}",
								"{@spell shocking grasp}"
							]
						},
						"1": {
							"spells": [
								"{@spell magic missile}",
								"{@spell shield}",
								"{@spell thunderwave}"
							],
							"slots": 4
						},
						"2": {
							"spells": [
								"{@spell mirror image}",
								"{@spell scorching ray}"
							],
							"slots": 3
						},
						"3": {
							"spells": [
								"{@spell fear}",
								"{@spell haste}"
							],
							"slots": 3
						},
						"4": {
							"spells": [
								"{@spell dimension door}",
								"{@spell ice storm}"
							],
							"slots": 3
						},
						"5": {
							"spells": [
								"{@spell cloudkill}",
								"{@spell cone of cold}"
							],
							"slots": 2
						},
						"6": {
							"spells": [
								"{@spell eyebite}"
							],
							"slots": 1
						},
						"7": {
							"spells": [
								"{@spell finger of death}"
							],
							"slots": 1
						}
					},
					"ability": "cha",
					"type": "spellcasting"
				}
			],
			"trait": [
				{
					"name": "Legendary Resistance (3/Day)",
					"entries": [
						"If the skull lord fails a saving throw, it can choose to succeed instead."
					]
				},
				{
					"name": "Master of the Grave",
					"entries": [
						"While within 30 feet of the skull lord, any undead ally of the skull lord makes saving throws with advantage, and that ally regains {@dice 3d6} hit points whenever it starts its turn there."
					]
				},
				{
					"name": "Evasion",
					"entries": [
						"If the skull lord is subjected to an effect that allows it to make a Dexterity saving throw to take only half the damage, the skull lord instead takes no damage if it succeeds on the saving throw, and only half damage if it fails."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"The skull lord makes three bone staff attacks or make two attacks and cast a spell."
					]
				},
				{
					"name": "Bone Blade",
					"entries": [
						"{@atk mw} {@hit 10} to hit, reach 5 ft., one target. {@h}9 ({@damage 2d6 + 5}) slashing damage, plus 14 ({@damage 4d6}) necrotic damage."
					]
				}
			],
			"legendary": [
				{
					"name": "Bone Staff (Costs 2 Actions)",
					"entries": [
						"The skull lord makes a bone staff attack."
					]
				},
				{
					"name": "Cantrip",
					"entries": [
						"The skull lord casts a cantrip."
					]
				},
				{
					"name": "Move",
					"entries": [
						"The skull lord moves up to its speed without provoking opportunity attacks."
					]
				},
				{
					"name": "Summon Undead (Costs 3 Actions)",
					"entries": [
						"Up to five {@creature skeleton||skeletons} or {@creature zombie||zombies} appear in unoccupied spaces within 30 feet of the skull lord and remain until destroyed. Undead summoned in this way roll initiative and act in the next available turn. The skull lord can have up to five undead summoned by this ability at a time."
					]
				},
				{
					"name": "Comand Undead",
					"entries": [
						"The skull lord can command an undead in 60 feet, he needs to see the undead."
					]
				}
			],
			"environment": [
				"desert",
				"swamp",
				"underdark"
			],
			"soundClip": {
				"type": "external",
				"url": "https://5e.tools/audio/bestiary/skull-lord.mp3?v=1.117.4"
			},
			"traitTags": [
				"Legendary Resistances"
			],
			"senseTags": [
				"D"
			],
			"actionTags": [
				"Multiattack"
			],
			"languageTags": [
				"LF"
			],
			"damageTags": [
				"S",
				"N"
			],
			"spellcastingTags": [
				"CS"
			],
			"miscTags": [
				"MW"
			],
			"tokenUrl": "https://i.imgur.com/QYLRKYV.png",
			"fluff": {
				"entries": [
					{
						"type": "entries",
						"entries": [
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"name": "Skull Lord",
										"entries": [
											"The skull lords have claimed vast regions of the Shadowfell as their dominion. From these blighted lands, they wage war against their rivals, commanding hordes of undead in a bid to establish dominance. Yet skull lords always prove to be their own worst enemies; as a combined being born from three hateful individuals, they constantly plot against themselves."
										]
									},
									{
										"name": "Creatures of Betrayal",
										"type": "entries",
										"entries": [
											"Infighting and treachery brought the skull lords into existence. The first of them appeared in the aftermath of Vecna's bid to conquer the world of Greyhawk, after the vampire Kas betrayed Vecna and took his eye and hand. In the confusion resulting from this turn of events, Vecna's warlords turned against each other, and the dark one's plans were dashed. In a rage, Vecna gathered up his generals and captains and bound them in groups of three, fusing them into undead abominations cursed to fight among themselves for all time. Since the first skull lords were exiled into shadow, others have joined them, typically after being created from other leaders who betrayed their masters."
										]
									},
									{
										"name": "Undead Nature",
										"type": "entries",
										"entries": [
											"A skull lord doesn't require air, food, drink, or sleep."
										]
									}
								]
							}
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.pinimg.com/564x/ac/14/ad/ac14ad3e1ffa5f777800e46c7b9f9a55.jpg"
						}
					}
				]
			},
			"save": {
				"cha": "+10",
				"int": "+8",
				"con": "+8",
				"dex": "+8"
			}
		}
	]
}
{
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LL",
				"full": "Lolôncio",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1601566331,
		"dateLastModified": 1601566331
	},
	"monster": [
		{
			"name": "Drow Acolyte",
			"source": "Lolncio",
			"page": 201,
			"traitTags": [
				"Fey Ancestry",
				"Sunlight Sensitivity"
			],
			"size": "M",
			"type": {
				"type": "humanoid",
				"tags": [
					"elf"
				]
			},
			"alignment": [
				"A"
			],
			"ac": [
				10
			],
			"hp": {
				"average": 9,
				"formula": "2d8"
			},
			"speed": {
				"walk": 30
			},
			"str": 10,
			"dex": 10,
			"con": 10,
			"int": 10,
			"wis": 14,
			"cha": 11,
			"skill": {
				"medicine": "+4",
				"religion": "+2",
				"perception": "+4"
			},
			"passive": 12,
			"languages": [
				"any one language (usually Common)",
				"Elvish"
			],
			"cr": "1/4",
			"spellcasting": [
				{
					"name": "Spellcasting",
					"headerEntries": [
						"The acolyte is a 1st-level spellcaster. Its spellcasting ability is Wisdom (spell save {@dc 12}, {@hit 4} to hit with spell attacks). The acolyte has following cleric spells prepared:"
					],
					"spells": {
						"0": {
							"spells": [
								"{@spell light}",
								"{@spell sacred flame}",
								"{@spell thaumaturgy}"
							]
						},
						"1": {
							"slots": 3,
							"spells": [
								"{@spell bless}",
								"{@spell cure wounds}",
								"{@spell sanctuary}"
							]
						}
					},
					"ability": "wis",
					"type": "spellcasting"
				},
				{
					"name": "Innate Spellcasting",
					"headerEntries": [
						"The drow acolyte's innate spellcasting ability is Charisma (spell save DC 10). The drow acolyte can innately cast the following spells, requiring no material components:"
					],
					"will": [
						"{@spell dancing lights}"
					],
					"daily": {
						"1e": [
							"{@spell darkness}",
							"{@spell faerie fire}"
						]
					},
					"ability": "cha",
					"type": "spellcasting"
				}
			],
			"action": [
				{
					"name": "Club",
					"entries": [
						"{@atk mw} {@hit 2} to hit, reach 5 ft., one target. {@h}2 ({@damage 1d4}) bludgeoning damage."
					]
				}
			],
			"languageTags": [
				"C",
				"X"
			],
			"damageTags": [
				"B"
			],
			"spellcastingTags": [
				"CC"
			],
			"miscTags": [
				"MW"
			],
			"senses": [
				"darkvision 120 ft."
			],
			"trait": [
				{
					"name": "Fey Ancestry",
					"entries": [
						"The drow acolyte has advantage on saving throws against being charmed, and magic can't put the drow acolyte to sleep."
					]
				},
				{
					"name": "Sunlight Sensitivity",
					"entries": [
						"While in sunlight, the drow acolyte has disadvantage on attack rolls, as well as on Wisdom ({@skill Perception}) checks that rely on sight."
					]
				}
			],
			"tokenUrl": "https://5e.tools/img/OotA/Drow Acolyte.png?v=1.112.4"
		}
	]
}
{
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LL",
				"full": "Lolôncio",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1601566730,
		"dateLastModified": 1601566730
	},
	"monster": [
		{
			"name": "Drow Guard",
			"source": "Lolncio",
			"page": 195,
			"traitTags": [
				"Fey Ancestry",
				"Sunlight Sensitivity"
			],
			"size": "M",
			"type": {
				"type": "humanoid",
				"tags": [
					"elf"
				]
			},
			"alignment": [
				"A"
			],
			"ac": [
				{
					"ac": 16,
					"from": [
						"{@item chain shirt|phb}",
						"{@item shield|phb}"
					]
				}
			],
			"hp": {
				"average": 11,
				"formula": "2d8 + 2"
			},
			"speed": {
				"walk": 30
			},
			"str": 13,
			"dex": 12,
			"con": 12,
			"int": 10,
			"wis": 11,
			"cha": 10,
			"skill": {
				"perception": "+2"
			},
			"passive": 12,
			"languages": [
				"any one language (usually Common)",
				"Elvish"
			],
			"cr": "1/8",
			"action": [
				{
					"name": "Spear",
					"entries": [
						"{@atk mw,rw} {@hit 3} to hit, reach 5 ft. or range 20/60 ft., one target. {@h}4 ({@damage 1d6 + 1}) piercing damage, or 5 ({@damage 1d8 + 1}) piercing damage if used with two hands to make a melee attack."
					]
				}
			],
			"languageTags": [
				"C",
				"X"
			],
			"damageTags": [
				"P"
			],
			"miscTags": [
				"MW",
				"RW",
				"THW"
			],
			"senses": [
				"darkvision 120 ft."
			],
			"spellcasting": [
				{
					"name": "Innate Spellcasting",
					"headerEntries": [
						"The drow guard's innate spellcasting ability is Charisma (spell save DC 10). The drow guard can innately cast the following spells, requiring no material components:"
					],
					"will": [
						"{@spell dancing lights}"
					],
					"daily": {
						"1e": [
							"{@spell darkness}",
							"{@spell faerie fire}"
						]
					},
					"ability": "cha",
					"type": "spellcasting"
				}
			],
			"trait": [
				{
					"name": "Fey Ancestry",
					"entries": [
						"The drow guard has advantage on saving throws against being charmed, and magic can't put the drow guard to sleep."
					]
				},
				{
					"name": "Sunlight Sensitivity",
					"entries": [
						"While in sunlight, the drow guard has disadvantage on attack rolls, as well as on Wisdom ({@skill Perception}) checks that rely on sight."
					]
				}
			],
			"tokenUrl": "https://5e.tools/img/OotA/Drow Guard.png?v=1.112.4"
		}
	]
}
{
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LL",
				"full": "Lolôncio",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1601574657,
		"dateLastModified": 1601574657
	},
	"monster": [
		{
			"name": "Drow Scout",
			"source": "Lolncio",
			"page": 191,
			"traitTags": [
				"Fey Ancestry",
				"Keen Senses",
				"Sunlight Sensitivity"
			],
			"size": "M",
			"type": {
				"type": "humanoid",
				"tags": [
					"elf"
				]
			},
			"alignment": [
				"A"
			],
			"ac": [
				{
					"ac": 13,
					"from": [
						"{@item leather armor|phb}"
					]
				}
			],
			"hp": {
				"average": 16,
				"formula": "3d8 + 3"
			},
			"speed": {
				"walk": 30
			},
			"str": 11,
			"dex": 14,
			"con": 12,
			"int": 11,
			"wis": 13,
			"cha": 11,
			"skill": {
				"nature": "+4",
				"perception": "+5",
				"stealth": "+6",
				"survival": "+5"
			},
			"passive": 15,
			"languages": [
				"any one language (usually Common)",
				"Elvish"
			],
			"cr": "1/2",
			"trait": [
				{
					"name": "Keen Hearing and Sight",
					"entries": [
						"The scout has advantage on Wisdom ({@skill Perception}) checks that rely on hearing or sight."
					]
				},
				{
					"name": "Fey Ancestry",
					"entries": [
						"The drow scout has advantage on saving throws against being charmed, and magic can't put the drow scout to sleep."
					]
				},
				{
					"name": "Sunlight Sensitivity",
					"entries": [
						"While in sunlight, the drow scout has disadvantage on attack rolls, as well as on Wisdom ({@skill Perception}) checks that rely on sight."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"The scout makes two melee attacks or two ranged attacks."
					]
				},
				{
					"name": "Shortsword",
					"entries": [
						"{@atk mw} {@hit 4} to hit, reach 5 ft., one target. {@h}5 ({@damage 1d6 + 2}) piercing damage."
					]
				},
				{
					"name": "Longbow",
					"entries": [
						"{@atk rw} {@hit 4} to hit, ranged 150/600 ft., one target. {@h}6 ({@damage 1d8 + 2}) piercing damage."
					]
				}
			],
			"actionTags": [
				"Multiattack"
			],
			"languageTags": [
				"C",
				"X"
			],
			"damageTags": [
				"P"
			],
			"miscTags": [
				"MW",
				"RNG",
				"RW"
			],
			"senses": [
				"darkvision 120 ft."
			],
			"spellcasting": [
				{
					"name": "Innate Spellcasting",
					"headerEntries": [
						"The drow scout's innate spellcasting ability is Charisma (spell save DC 10). The drow scout can innately cast the following spells, requiring no material components:"
					],
					"will": [
						"{@spell dancing lights}"
					],
					"daily": {
						"1e": [
							"{@spell darkness}",
							"{@spell faerie fire}"
						]
					},
					"ability": "cha",
					"type": "spellcasting"
				}
			],
			"tokenUrl": "https://5e.tools/img/OotA/Drow Scout.png?v=1.112.4"
		}
	]
}
{
	"siteVersion": "1.177.1",
	"_meta": {
		"sources": [
			{
				"json": "Krakak",
				"abbreviation": "GAK",
				"full": "Krakak",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1678130169,
		"dateLastModified": 1678130169
	},
	"monster": [
		{
			"name": "Four-Armed Gargoyle",
			"source": "Krakak",
			"page": 129,
			"size": [
				"H"
			],
			"type": "elemental",
			"alignment": [
				"C",
				"E"
			],
			"ac": [
				{
					"ac": 15,
					"from": [
						"natural armor"
					]
				}
			],
			"hp": {
				"average": 63,
				"formula": "7d8 + 21"
			},
			"speed": {
				"walk": 30,
				"fly": 60
			},
			"str": 26,
			"dex": 11,
			"con": 16,
			"int": 6,
			"wis": 11,
			"cha": 7,
			"senses": [
				"darkvision 60 ft."
			],
			"passive": 12,
			"resist": [
				{
					"resist": [
						"bludgeoning",
						"piercing",
						"slashing"
					],
					"note": "from nonmagical attacks that aren't adamantine",
					"cond": true
				}
			],
			"immune": [
				"poison"
			],
			"conditionImmune": [
				"exhaustion",
				"petrified",
				"poisoned"
			],
			"languages": [
				"Terran"
			],
			"cr": "2",
			"trait": [
				{
					"name": "False Appearance",
					"entries": [
						"While the gargoyle remains motionless, it is indistinguishable from an inanimate statue."
					]
				},
				{
					"name": "Immutable Form",
					"entries": [
						"The four-armed gargoyle is immune to any spell or effect that would alter its form."
					]
				},
				{
					"name": "Glyph Arm",
					"entries": [
						"Each arm has a glyph, the gargoyle can use the action to activate a glyph of your choice:",
						"1st - Warding Wind",
						"2nd - Hunger of Hadar",
						"3rd - Storm Sphere",
						"4° - Investiture of Ice"
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"The gargoyle makes three attacks: one with its bite and two with its claws."
					]
				},
				{
					"name": "Bite",
					"entries": [
						"{@atk mw} {@hit 10} to hit, reach 5 ft., one target. {@h} ({@damage 1d6 + 8}) piercing damage."
					]
				},
				{
					"name": "Claws",
					"entries": [
						"{@atk mw} {@hit 10} to hit, reach 5 ft., one target. {@h} ({@damage 1d6 + 8}) slashing damage."
					]
				}
			],
			"traitTags": [
				"False Appearance",
				"Immutable Form"
			],
			"senseTags": [
				"D"
			],
			"actionTags": [
				"Multiattack"
			],
			"languageTags": [
				"T"
			],
			"damageTags": [
				"S"
			],
			"miscTags": [
				"MW"
			],
			"tokenUrl": "https://5e.tools/img/TftYP/Four-Armed Gargoyle.png",
			"save": {
				"str": "+10",
				"con": "+5",
				"wis": "+2"
			},
			"skill": {
				"athletics": "+12",
				"perception": "+2"
			}
		}
	]
}
{
	"siteVersion": "1.142.0",
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1638539909,
		"dateLastModified": 1638539909
	},
	"monster": [
		{
			"name": "Glaza Oruzhiye",
			"source": "Lolncio",
			"page": 201,
			"size": "M",
			"type": {
				"type": "humanoid",
				"tags": [
					"dragonborn"
				]
			},
			"alignment": [
				"L",
				"N"
			],
			"ac": [
				{
					"ac": 24,
					"from": [
						"renegade's cloak"
					]
				}
			],
			"hp": {
				"formula": "20d8 + 100",
				"average": 190
			},
			"speed": {
				"walk": 40,
				"climb": 40
			},
			"str": 12,
			"dex": 20,
			"con": 20,
			"int": 18,
			"wis": 18,
			"cha": 22,
			"save": {
				"dex": "+13",
				"str": "+9",
				"con": "+13",
				"cha": "+14"
			},
			"skill": {
				"acrobatics": "+21",
				"deception": "+22",
				"investigation": "+12",
				"perception": "+20",
				"persuasion": "+14",
				"sleight of hand": "+21",
				"stealth": "+21",
				"history": "+12",
				"survival": "+12",
				"athletics": "+9"
			},
			"senses": [
				"darkvision 120 ft.",
				"blindsight 30 ft."
			],
			"passive": 30,
			"trait": [
				{
					"name": "Gunslinger",
					"entries": [
						"Being within 5 feet of a hostile creature or attacking at long range doesn't impose disadvantage on gunslinger ranged attack rolls with a gun. In addition, he ignores half cover and three-quarters cover when making ranged attacks."
					]
				},
				{
					"name": "Hunter's Intuition.",
					"entries": [
						"When gunslinger make a Wisdom (Perception) or Wisdom (Survival) check, he can roll a {@dice d4} and add the number rolled to the ability check."
					]
				},
				{
					"name": "Finder's Magic.",
					"entries": [
						"The gunslinger can cast the {@spell hunter's mark} spell with this trait. And, he can also cast the locate object spell with it. Once gunslinger cast either spell with this trait, he can't cast that spell with it again until finish a long rest."
					]
				},
				{
					"name": "Relentless Endurance.",
					"entries": [
						"When gunslinger are reduced to 0 hit points but not killed outright, he drop to 1 hit point instead. gunslinger can't use this feature again until finish a long rest."
					]
				},
				{
					"name": "Dead Eye.",
					"entries": [
						"When gunslinger score a critical hit with a ranged weapon attack, he can it maximizes the damage from this attack."
					]
				},
				{
					"name": "Avoidance",
					"entries": [
						"If the gunslinger is subjected to an effect that allows it to make a saving throw to only take half damage, it instead takes no damage if it succeeds on the saving throw, and only half damage if it fails."
					]
				},
				{
					"name": "Magic Weapons",
					"entries": [
						"The gunslinger's weapon attacks are magical."
					]
				},
				{
					"name": "Special Equipment.",
					"entries": [
						"The gunslinger wears a white {@item Mantle of Spell Resistance}, {@item Dagger of Blindsight}, {@item Adamantine armor} (renegade's cloak) & {@item Wakened Dragon's Wrath}"
					]
				},
				{
					"name": "Adamantine Plating.",
					"entries": [
						"Any critical hit against the gunslinger becomes a normal hit. Because the adamantine armor."
					]
				},
				{
					"name": "Not in the face",
					"entries": [
						"If the gunslinger shoots a fallen target at 5 feet with the shotgun, this attack is considered critical if it hits."
					]
				},
				{
					"name": "Infused Magazine.",
					"entries": [
						"1. Power bullets; when hitting someone with this ammo, objects and creatures within 10 feet of the target take {@damage 4d6} force damage, including who was hit.",
						"2. Stun Bullets; the target of this attack has its mind bombarded with psychic energy, the target must make a wisdom saving throw {@dc 22} or it takes {@damage 4d6} psychic damage and will be {@condition stunned} until the end of the gunslinger's next turn.",
						"3. Curved bullets; if this attack misses the target, the bullet is redirected to a target within 60 feet of the original target; if it hits, the damage of that attack is reduced by half."
					]
				}
			],
			"senseTags": [
				"SD",
				"B"
			],
			"damageTags": [
				"P",
				"B"
			],
			"tokenUrl": "https://media.discordapp.net/attachments/557321504220643349/915621034210779166/dago_linguer.png",
			"fluff": {
				"entries": [
					{
						"type": "entries",
						"entries": [
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": []
									}
								]
							}
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://media.discordapp.net/attachments/557321504220643349/916316581909385256/testessss.png"
						}
					}
				]
			},
			"environment": [
				"hill",
				"urban"
			],
			"action": [
				{
					"name": "Multiattack.",
					"entries": [
						"O gunslinger pode realizar dois ataques com armas a distancia, três ataques com armas corpo a corpo leves e com propriedade acuidade.",
						"Ações : End Of Line, Shotgun, Rifle Butt."
					]
				},
				{
					"name": "Automatic Pistol",
					"entries": [
						"{@atk rw} {@hit 13} to hit, range 50/150 ft., one target. {@h}19 ({@damage 4d6 + 5}) piercing damage.",
						"***Dead Eye.*** ({@damage 53}) piercing damage."
					]
				},
				{
					"name": "Hunting Rifle",
					"entries": [
						"{@atk rw} {@hit 13} to hit, range 80/240 ft., one target. {@h}21 ({@damage 3d10 + 5}) piercing damage.",
						"***Dead Eye.*** ({@damage 65}) piercing damage."
					]
				},
				{
					"name": "Dagger of Blindsight",
					"entries": [
						"{@atk mw,rw} {@hit 13} to hit, reach 5 ft. or range 20/60 ft., one target. {@h}5 ({@damage 1d4 + 3}) piercing damage in melee, or 5 ({@damage 1d4 + 3}) piercing damage at range.",
						"This rare magic item requires attunement. A creature attuned to it gains blindsight out to a range of 30 feet. The dagger has a saw-toothed edge and a black pearl nested in its pommel."
					]
				},
				{
					"name": "End Of Line",
					"entries": [
						"{@atk rw} {@hit 13} to hit, range 240/240 ft., one target. {@h}38 ({@damage 6d10 + 5}) piercing damage.",
						"***Dead Eye.*** ({@damage 125}) piercing damage."
					]
				},
				{
					"name": "Shotgun",
					"entries": [
						"{@atk rw} {@hit 13} to hit, range 15/60 ft., one target. {@h}34 ({@damage 3d12 + 15}) piercing damage.",
						"If the target is a creature, it must succeed on a {@dc 22} Strength saving throw or be knocked {@condition prone}.",
						"***Dead Eye.*** ({@damage 87}) piercing damage."
					]
				},
				{
					"name": "Rifle Butt",
					"entries": [
						"{@atk mw} {@hit 13} to hit, reach 5 ft., one target. {@h}10 ({@damage 2d6 + 3}) bludgeoning damage.",
						"Whenever gunslinger hits a creature with this attacks, he can impose one of the following effects on that target.",
						"It must succeed on a {@dc 22} Dexterity saving throw or be knocked {@condition prone}.",
						"It must make a {@dc 22} Strength saving throw. If it fails, gunslinger can push it up to 15 feet away from he.",
						"It can't take reactions until the end of gunslinger next turn."
					]
				},
				{
					"name": "It's High Noon {@recharge}",
					"entries": [
						"The gunslinger gives up all his moves to lock the crosshairs on a target. The gunslinger's next attack is considered a critical hit."
					]
				},
				{
					"name": "Burst Fire",
					"entries": [
						"The gunslinger can spray a 30-foot cone area with the automatic gun. Each creature in the area must make a Dexterity saving throw {@dc 22} or takes [[{@dice 12d6 + 5}]] piercing"
					]
				},
				{
					"name": "Wakened Dragon's Wrath Automatic Pistol",
					"entries": [
						"The gunslinger can spray a 30-foot cone area with the automatic gun. Each creature in the area must make a Dexterity saving throw {@dc 22} or takes [[{@dice 12d6 + 5}]] piercing and [[{@dice 8d6}]] cold damage."
					]
				}
			],
			"miscTags": [
				"RW",
				"MW",
				"THW",
				"AOE"
			],
			"bonus": [
				{
					"name": "Icy Bomb {@recharge 5}",
					"entries": [
						"The gunslinger lights this bomb and drops it at a point up to 60 feet away. Each creature within 5 feet of that spot must make a {@dc 22} Dexterity saving throw or take 21 [[{@dice 8d6}]] cold damage."
					]
				},
				{
					"name": "The Gunslinger Inventory.",
					"entries": [
						"As a bonus action. The Gunslinger can send any object he carrying to a demiplane. He can also retrieve an object previously sent there."
					]
				},
				{
					"name": "Eagle's Eye",
					"entries": [
						"As a bonus action, the gunslinger can add {@dice 2d8} to its next attack or damage roll with a End Of Line. or Shotgun."
					]
				},
				{
					"name": "Fast Hands",
					"entries": [
						"The gunslinger can reload his weapon and drop bombs with his bonus action."
					]
				},
				{
					"name": "Nimble Escape.",
					"entries": [
						"The gunslinger allison can take the {@action Disengage} or {@action Hide} action as a bonus action on each of its turns."
					]
				}
			],
			"conditionInflict": [
				"prone",
				"stunned"
			],
			"reaction": [
				{
					"name": "Mobile",
					"entries": [
						"When the gunslinger is hit by a magical or physical attack, he can use the reaction and reduce the damage by 40. When using this reaction, he can roll up to 20 feet, this move does not provoke attacks of opportunity. After moving, in the same reaction, he can make an attack."
					]
				},
				{
					"name": "Skirmisher",
					"entries": [
						"The gunslinger can move up to half his speed as a reaction when an enemy approaches. This move does not provoke attacks of opportunity."
					]
				}
			],
			"traitTags": [
				"Magic Weapons"
			],
			"resist": [
				{
					"resist": [],
					"preNote": "All damages"
				}
			],
			"spellcasting": [
				{
					"name": "Innate Spellasting.",
					"headerEntries": [
						"The gunslinger spellcasting ability is Charisma (spell save {@dc 24}, +14 to hit with spell attacks). It can innately cast the following spells, requiring no material components:"
					],
					"will": [
						"{@spell fog cloud}",
						"{@spell major image}",
						"{@spell swift quiver}",
						"{@spell wristpocket|EGW}"
					],
					"daily": {
						"1": [
							"{@spell ashardalon's stride|FTD} 6° Spell",
							"{@spell freedom of movement}",
							"{@spell teleport}"
						]
					},
					"rest": {
						"1": [
							"{@spell hunter's mark}",
							"{@spell locate creature}"
						]
					},
					"ability": "cha",
					"type": "spellcasting"
				}
			],
			"spellcastingTags": [
				"I"
			],
			"legendary": [
				{
					"name": "Teleport",
					"entries": [
						"The Gunslinger magically teleports, along with any equipment it is wearing or carrying, up to 30 feet to an unoccupied space it can see."
					]
				},
				{
					"name": "Reload",
					"entries": [
						"The gunslinger reload your weapons."
					]
				},
				{
					"name": "Tick Tack",
					"entries": [
						"The Gunslinger make a ranged weapon attack."
					]
				},
				{
					"name": "Spell ( 2 actions)",
					"entries": [
						"The gunslinger cast a spell"
					]
				},
				{
					"name": "It's High Noon (If the skill is loaded) (3 actions)",
					"entries": [
						"The gunslinger gives up all his moves to lock the crosshairs on a target. The gunslinger's next attack is considered a critical hit."
					]
				}
			],
			"cr": "28",
			"languages": [
				"All languages"
			],
			"shortName": "Glaza",
			"immune": [
				"cold"
			],
			"conditionImmune": [
				{
					"conditionImmune": [
						"charmed",
						"frightened",
						"stunned"
					]
				}
			]
		}
	]
}
{
	"siteVersion": "1.154.0",
	"_meta": {
		"sources": [
			{
				"json": "UlucaiDM",
				"abbreviation": "ULDM",
				"full": "Ulucai DM",
				"url": "",
				"authors": [
					"Ulucai"
				],
				"convertedBy": [
					"Ulucai"
				]
			}
		],
		"dateAdded": 1651057791,
		"dateLastModified": 1651057791
	},
	"monster": [
		{
			"name": "Grieving Blade",
			"source": "UlucaiDM",
			"page": 187,
			"size": [
				"M"
			],
			"type": {
				"type": "humanoid",
				"tags": [
					"Kenku"
				]
			},
			"alignment": [
				"C",
				"N"
			],
			"ac": [
				{
					"ac": 20,
					"from": [
						"Shroud of Shadows"
					]
				}
			],
			"hp": {
				"formula": "22d8 + 88",
				"average": 187
			},
			"speed": {
				"walk": 40,
				"climb": 40
			},
			"str": 10,
			"dex": 21,
			"con": 18,
			"int": 12,
			"wis": 14,
			"cha": 16,
			"save": {
				"dex": "+10",
				"con": "+9",
				"wis": "+7"
			},
			"skill": {
				"perception": "+7",
				"stealth": "+10",
				"acrobatics": "+10",
				"arcana": "+6"
			},
			"senses": [
				"darkvision 120 ft."
			],
			"passive": 17,
			"conditionImmune": [
				"charmed"
			],
			"languages": [
				"Common",
				"Dwarvish",
				"Elvish",
				"Infernal",
				"Undercommon"
			],
			"cr": "13",
			"spellcasting": [
				{
					"name": "Innate Spellcasting",
					"headerEntries": [
						"The grieving blade's innate spellcasting ability is Charisma (spell save {@dc 16}). It can innately cast the following spells, requiring no material components:"
					],
					"will": [
						"{@spell dancing lights}",
						"{@spell invisibility}",
						"{@spell sword burst|TCE} "
					],
					"daily": {
						"1e": [
							"{@spell antilife shell}",
							"{@spell dimension door}",
							"{@spell faerie fire}",
							"{@spell levitate} (self only)",
							"{@spell shadow of moil|XGE}"
						]
					},
					"ability": "cha",
					"type": "spellcasting"
				}
			],
			"trait": [
				{
					"name": "Shadow Step",
					"entries": [
						"While in dim light or darkness, the grieving blade can teleport as a bonus action up to 60 feet to an unoccupied space it can see that is also in dim light or darkness. It then has advantage on the first melee attack it makes before the end of the turn."
					]
				},
				{
					"name": "Avoidance",
					"entries": [
						"If the grieving blade is subjected to an effect that allows it to make a saving throw to only take half damage, it instead takes no damage if it succeeds on the saving throw, and only half damage if it fails."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"The grieving blade makes two attacks with its shadow blade or daggers. If either attack hits and the target is within 10 feet of a 5-foot cube of darkness created by the shadow blade, the grieving blade can dismiss that darkness and cause the target to take ({@damage 6d6}) necrotic damage. The grieving blade can dismiss darkness in this way no more than once per turn."
					]
				},
				{
					"name": "Shadow Blade",
					"entries": [
						"{@atk mw} {@hit 10} to hit, reach 5 ft., one target. {@h}8 ({@damage 1d6 + 5}) piercing damage plus 10 ({@damage 3d6}) necrotic damage and 10 ({@damage 3d6}) poison damage. The grieving blade can then fill an unoccupied 5-foot cube within 5 feet of the target with magical darkness, which remains for 1 minute."
					]
				},
				{
					"name": "Shadow Dagger",
					"entries": [
						"{@atk rw} {@hit 10} to hit, range 20/60 ft., one target. {@h} 7 ({@damage 1d4 + 5}) piercing damage plus 10 ({@damage 3d6}) necrotic damage and 10 ({@damage 3d6}) poison damage. The grieving blade can then fill an unoccupied 5-foot cube within 5 feet of the target with magical darkness, which remains for 1 minute."
					]
				}
			],
			"reaction": [
				{
					"name": "Uncanny Dodge",
					"entries": [
						"Whenever the grieving blade is hit by an attack he can use its reaction to halve the damage."
					]
				}
			],
			"fluff": {
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.imgur.com/W7tA1Yp.jpg"
						}
					}
				]
			},
			"tokenUrl": "https://i.imgur.com/zFWlCwF.png",
			"senseTags": [
				"SD"
			],
			"actionTags": [
				"Multiattack"
			],
			"languageTags": [
				"C",
				"D",
				"E",
				"I",
				"U"
			],
			"damageTags": [
				"I",
				"N",
				"P"
			],
			"spellcastingTags": [
				"I"
			],
			"miscTags": [
				"AOE",
				"MW",
				"RW",
				"THW"
			]
		}
	]
}


{
	"siteVersion": "1.147.2",
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LL",
				"full": "Lolôncio",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1641099986,
		"dateLastModified": 1641099986
	},
	"monster": [
		{
			"name": "Jon Irenicus",
			"isNamedCreature": true,
			"source": "Lolncio",
			"page": 72,
			"size": "M",
			"type": "undead",
			"alignment": [
				"N",
				"E"
			],
			"ac": [
				{
					"ac": 17,
					"from": [
						"natural armor"
					]
				}
			],
			"hp": {
				"average": 135,
				"formula": "18d8 + 54"
			},
			"speed": {
				"walk": 30
			},
			"str": 19,
			"dex": 16,
			"con": 16,
			"int": 22,
			"wis": 14,
			"cha": 16,
			"save": {
				"con": "+10",
				"int": "+13",
				"wis": "+9"
			},
			"skill": {
				"arcana": "+20",
				"history": "+13",
				"insight": "+9",
				"perception": "+9"
			},
			"senses": [
				"truesight 120 ft."
			],
			"passive": 19,
			"resist": [
				"cold",
				"lightning",
				"necrotic"
			],
			"immune": [
				"poison",
				{
					"immune": [
						"bludgeoning",
						"piercing",
						"slashing"
					],
					"note": "from nonmagical weapons",
					"cond": true
				}
			],
			"conditionImmune": [
				"charmed",
				"exhaustion",
				"frightened",
				"paralyzed",
				"poisoned"
			],
			"languages": [
				"Abyssal",
				"Celestial",
				"Common",
				"Elvish",
				"Infernal",
				"Sylvan"
			],
			"cr": "22",
			"spellcasting": [
				{
					"name": "Spellcasting",
					"headerEntries": [
						"Jon Irenicus is an 20th-level spellcaster. His spellcasting ability is Intelligence (spell save {@dc 21}, {@hit 13} to hit with spell attacks). Jon Irenicus has the following wizard spells prepared:"
					],
					"spells": {
						"0": {
							"spells": [
								"{@spell mage hand}",
								"{@spell prestidigitation}",
								"{@spell ray of frost}"
							]
						},
						"1": {
							"slots": 4,
							"spells": [
								"{@spell detect magic}",
								"{@spell magic missile}",
								"{@spell shield}",
								"{@spell thunderwave}"
							]
						},
						"2": {
							"slots": 3,
							"spells": [
								"{@spell detect thoughts}",
								"{@spell invisibility}",
								"{@spell Melf's acid arrow}",
								"{@spell mirror image}"
							]
						},
						"3": {
							"slots": 3,
							"spells": [
								"{@spell animate dead}",
								"{@spell counterspell}",
								"{@spell dispel magic}",
								"{@spell fireball}"
							]
						},
						"4": {
							"slots": 3,
							"spells": [
								"{@spell blight}",
								"{@spell dimension door}"
							]
						},
						"5": {
							"slots": 3,
							"spells": [
								"{@spell cloudkill}",
								"{@spell scrying}"
							]
						},
						"6": {
							"slots": 1,
							"spells": [
								"{@spell disintegrate}",
								"{@spell tenser's transformation|XGE}"
							]
						},
						"7": {
							"slots": 1,
							"spells": [
								"{@spell finger of death}",
								"{@spell mordenkainen's sword}"
							]
						},
						"8": {
							"slots": 1,
							"spells": [
								"{@spell dominate monster}",
								"{@spell power word stun}"
							]
						},
						"9": {
							"slots": 1,
							"spells": [
								"{@spell power word kill}",
								"{@spell time stop}"
							]
						}
					},
					"ability": "int",
					"type": "spellcasting"
				}
			],
			"trait": [
				{
					"name": "Legendary Resistance (3/Day)",
					"entries": [
						"If Jon Irenicus fails a saving throw, it can choose to succeed instead."
					]
				},
				{
					"name": "Rejuvenation",
					"entries": [
						"If he has a phylactery and is destroyed, Jon Irenicus gains a new body in {@dice 1d10} days, regaining all its hit points and becoming active again. The new body appears within 5 feet of the phylactery."
					]
				},
				{
					"name": "Turn Resistance",
					"entries": [
						"Jon Irenicus has advantage on saving throws against any effect that turns undead."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack (only useable with Tenser's Transformation)",
					"entries": [
						"Jon Irenicus makes two flame tongue attacks or two mace attacks. Each attack does an additional 13 ({@damage 2d12}) force damage."
					]
				},
				{
					"name": "Flame Tongue (Rod of Lordly Might)",
					"entries": [
						"{@atk mw} {@hit 11} to hit, reach 5 ft., one target. {@h}10 ({@damage 1d8 + 4}) slashing damage and 7 ({@damage 2d6}) fire damage."
					]
				},
				{
					"name": "Mace (Rod of Lordly Might)",
					"entries": [
						"{@atk mw} {@hit 14} to hit, reach 5 ft., one target. {@h}10 ({@damage 1d6 + 7}) bludgeoning damage."
					]
				}
			],
			"legendary": [
				{
					"name": "Cantrip",
					"entries": [
						"Jon Irenicus casts a cantrip."
					]
				},
				{
					"name": "Drain Life Attack",
					"entries": [
						"Jon Irenicus makes a drain life attack with his rod of lordly might. If he hits a creature with his rod, the creature must make a {@dc 17} Constitution saving throw. On a failure, the creature takes an extra {@damage 4d6} necrotic damage, and Jon regains a number of hit points equal to half that necrotic damage. This property can't be used for 24 hours."
					]
				},
				{
					"name": "Paralyze Attack",
					"entries": [
						"Jon Irenicus makes a paralyze attack with his rod of lordly might. If he hits a creature with his rod, the creature must make a {@dc 17} Strength saving throw.",
						"On a failure, the creature is {@condition paralyzed} for 1 minute. The creature can repeat the saving throw at the end of each of its turns, ending the effect on a success. This property can't be used for 24 hours."
					]
				},
				{
					"name": "Tenser's Transformation (Costs 3 Actions)",
					"entries": [
						"Jon Irenicus casts tenser's transformation. He gains 50 temporary hit points. He gains advantage on his attack rolls with his rod of lordly might. When he hits a target with his rod of lordly might, that target takes an extra {@damage 2d12} force damage. He gains proficiency in Strength and Constitution saving throws. He can use his multiattack"
					]
				}
			],
			"traitTags": [
				"Legendary Resistances",
				"Rejuvenation",
				"Turn Resistance"
			],
			"senseTags": [
				"U"
			],
			"actionTags": [
				"Multiattack"
			],
			"languageTags": [
				"AB",
				"C",
				"CE",
				"E",
				"I",
				"S"
			],
			"damageTags": [
				"B",
				"F",
				"O",
				"S"
			],
			"spellcastingTags": [
				"CW"
			],
			"miscTags": [
				"MW"
			],
			"conditionInflict": [
				"paralyzed"
			],
			"conditionInflictSpell": [
				"charmed",
				"exhaustion",
				"invisible",
				"stunned"
			],
			"hasFluff": true,
			"hasFluffImages": true,
			"tokenUrl": "https://5e.tools/img/MaBJoV/Jon Irenicus.png",
			"fluff": {
				"name": "Jon Irenicus",
				"source": "MaBJoV",
				"entries": [
					{
						"type": "quote",
						"entries": [
							"Me and Boo have traveled far and wide and wide and far. Over mountains and under mountains and beside mountains. In all these places we have fought evil...for evil is everywhere. We have fought evil that is as evil as a green dragon that assaults your senses with tremendously loud and stinky belches. But never have we fought evil quite like Jon and Bodhi."
						],
						"by": "MINSC & BOO!"
					},
					"Joneleth of the house of Icarus was at one time the most powerful wizard in the elven city of Suldanessellar, and the favorite of the city's queen, Ellesime. Despite his esteemed position, Jon was led astray by the madness of his sister, Bodhi. She convinced Jon that he shouldn't be content with the power he possessed; that he deserved more.",
					"To seduce her brother, Bodhi shared magical secrets with Jon that she had learned from the Dark Powers of the Shadowfell. Using one of these secrets, Jon attempted to steal the life force from Suldanessellar's Tree of Life, believing it would grant him power on the level of the elven gods. The ritual failed and many elves nearly died as a result. For their crimes, Queen Ellesime cursed Jon and Bodhi, stripping them of their elven longevity and exiling them from the city. The elven people no longer recognized the siblings as their own kind and so the exiled siblings took new names. Joneleth Icarus became Jon Irenicus (an elven word meaning \"unclean\").",
					"Following his exile, Irenicus became obsessed with regaining the longevity that he had lost. He spent much of his time researching forbidden magic and engaging in horrific experimentation. Within his subterranean lair beneath the city of Athkatla, he tortured and studied mortal captives by means of twisted magic. One of those captives was the Bhaalspawn Abdel Adrian, mortal son of the God of Murder. Jon sought to draw the divine spark out of Abdel and take it for himself. But Abdel escaped imprisonment and eventually hunted down and killed Jon, bringing his existence to a seemingly ignominious end.",
					"But that was not to be Jon's final fate. Due to a pact with the Dark Powers of the Shadowfell, Jon and Bodhi were drawn into a dark reflection of the treetop city in the Domain of Dread. Trapped and unable to escape the prison of his own making, Jon is still able to inflict misery on the elves of Suldanessellar with the help of his sister and their loyal followers.",
					{
						"type": "entries",
						"name": "Jon Irenicus as a Contact",
						"entries": [
							"Jon Irenicus becomes available as a contact at 11th level. Jon has researched the path to become a lich. He is only willing to share the secret of lichdom with a wizard who is at least 17th level and swears lifelong fealty to him.",
							{
								"type": "list",
								"items": [
									"Mastering the Ritual: You must read the books that Jon provides you. This takes 10 weeks of downtime.",
									"Building a Phylactery: You must build a phylactery. It can be a small box or any other item that has an interior space where arcane sigils can be drawn. It must be crafted from precious metals worth at least 50,000 gp in total. You must then scribe the arcane sigils of naming, binding, immortality, and dark magic in silver. This process takes 10 weeks of downtime.",
									"The First Soul: You must capture a living humanoid or fiend. This humanoid or fiend must have a CR of 8 or greater.",
									"Brewing the Potion: You must brew the potion of transformation. The blood of the first soul must be poured into this concoction. Brewing the potion takes 1 week and 20,000 gp worth of ingredients.",
									"Performing the Ritual: Performing the final ritual requires an additional 30,000 gp in precious metals, rare herbs and incenses and various other components. The ritual takes 8 hours. At the end of it you must cast the imprisonment spell on the first soul. Then you must drink the potion of transformation. If you succeed at a DC 15 Constitution saving throw you rise up as a lich. If you fail the saving throw you are struck dead. You cannot be raised except with a wish spell.",
									"Lichdom: It is up to your DM whether or not you can continue play as a lich. If your DM does allow you to continue play as a lich, it is recommended that you receive no legendary actions, no lair actions, no paralyzing touch and no legendary resistance. Instead, your race becomes undead and you gain the following benefits:",
									{
										"type": "list",
										"items": [
											"Resistance to damage from Cold, Lightning and Necrotic.",
											"Immunity to Poison damage and Bludgeoning, Piercing, and Slashing from Nonmagical Attacks.",
											"Immunity to the Charmed, Exhaustion, Frightened, Paralyzed and Poisoned conditions.",
											"If you are destroyed you gain a new body in {@dice 1d10} days, regaining all of your hit points and becoming active again. The new body appears within 5 feet of your phylactery."
										]
									}
								]
							}
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "internal",
							"path": "bestiary/MaBJoV/Jon Irenicus.webp"
						}
					}
				]
			}
		}
	]
}
{
	"_meta": {
		"sources": [
			{
				"json": "UlucaiDM",
				"abbreviation": "ULDM",
				"full": "Ulucai DM",
				"url": "",
				"authors": [
					"Ulucai"
				],
				"convertedBy": [
					"Ulucai"
				]
			}
		],
		"dateAdded": 1607800935,
		"dateLastModified": 1607800935
	},
	"monster": [
		{
			"name": "Kiralei - Second",
			"source": "UlucaiDM",
			"page": 666,
			"size": "M",
			"type": {
				"type": "humanoid",
				"tags": [
					"elf"
				]
			},
			"alignment": [
				"N",
				"E"
			],
			"ac": [
				{
					"ac": 20,
					"from": [
						"Shroud of Death"
					]
				}
			],
			"hp": {
				"formula": "24d8 + 144",
				"average": 252
			},
			"speed": {
				"walk": 40,
				"climb": 40
			},
			"str": 12,
			"dex": 18,
			"con": 22,
			"int": 18,
			"wis": 24,
			"cha": 20,
			"save": {
				"con": "+12",
				"wis": "+13",
				"cha": "+11"
			},
			"skill": {
				"insight": "+13",
				"perception": "+13",
				"religion": "+10",
				"stealth": "+10",
				"history": "+10",
				"deception": "+17",
				"arcana": "+10",
				"animal handling": "+13",
				"medicine": "+13"
			},
			"senses": [
				"truesight 120 ft."
			],
			"passive": 23,
			"conditionImmune": [
				"charmed",
				"frightened",
				"petrified",
				"poisoned"
			],
			"languages": [
				"Elvish",
				"Common",
				"Infernal",
				"Abyssal",
				"Telepathy 120 ft."
			],
			"cr": "17",
			"spellcasting": [
				{
					"name": "Innate Spellcasting",
					"headerEntries": [
						"Kiralei's innate spellcasting ability is Wisdom (spell save {@dc 21}). She can innately cast the following spells, requiring no material components:"
					],
					"will": [
						"{@spell alter self}",
						"{@spell awaken}",
						"{@spell detect magic}",
						"{@spell disguise self}",
						"{@spell friends}"
					],
					"daily": {
						"1e": [
							"{@spell clairvoyance}",
							"{@spell darkness}",
							"{@spell detect thoughts}",
							"{@spell dispel magic}",
							"{@spell etherealness}",
							"{@spell shatter}",
							"{@spell suggestion}"
						]
					},
					"ability": "wis",
					"type": "spellcasting"
				},
				{
					"name": "Spellcasting",
					"headerEntries": [
						"Kiralei is a 20th-level spellcaster. Her spellcasting ability is Wisdom (spell save {@dc 21}, {@hit 13} to hit with spell attacks). She has the following cleric spells prepared:"
					],
					"spells": {
						"0": {
							"spells": [
								"{@spell guidance}",
								"{@spell poison spray}",
								"{@spell resistance}",
								"{@spell thaumaturgy}"
							]
						},
						"1": {
							"spells": [
								"{@spell cure wounds}",
								"{@spell inflict wounds}",
								"{@spell sanctuary}"
							],
							"slots": 4
						},
						"2": {
							"spells": [
								"{@spell blindness/deafness}",
								"{@spell hold person}",
								"{@spell silence}"
							],
							"slots": 3
						},
						"3": {
							"spells": [
								"{@spell bestow curse}",
								"{@spell dispel magic}",
								"{@spell magic circle}"
							],
							"slots": 3
						},
						"4": {
							"spells": [
								"{@spell banishment}",
								"{@spell divination}",
								"{@spell freedom of movement}",
								"{@spell guardian of faith}"
							],
							"slots": 3
						},
						"5": {
							"spells": [
								"{@spell contagion}",
								"{@spell dispel evil and good}",
								"{@spell geas}",
								"{@spell scrying}"
							],
							"slots": 2
						},
						"6": {
							"spells": [
								"{@spell harm}",
								"{@spell heal}",
								"{@spell word of recall}"
							],
							"slots": 2
						},
						"7": {
							"spells": [
								"{@spell divine word}",
								"{@spell etherealness}"
							],
							"slots": 2
						},
						"8": {
							"spells": [
								"{@spell antimagic field}",
								"{@spell earthquake}"
							],
							"slots": 1
						},
						"9": {
							"spells": [
								"{@spell mass heal}"
							],
							"slots": 1
						}
					},
					"ability": "wis",
					"type": "spellcasting"
				}
			],
			"trait": [
				{
					"name": "Poison Absorption",
					"entries": [
						"Whenever Kiralei is subjected to poison damage, she takes no damage and instead regains a number of hit points equal to the poison damage dealt.",
						"Additionally when Kiralei is subject to a poison that requires a Saving Throw she can choose to fail it."
					]
				},
				{
					"name": "Fey Ancestry",
					"entries": [
						"Kiralei has advantage on saving throws against being {@condition charmed}, and magic can't put Kiralei to sleep."
					]
				},
				{
					"name": "Magic Resistance",
					"entries": [
						"Kiralei has advantage on saving throws against spells and other magical effects."
					]
				},
				{
					"name": "Everlasting Poisons",
					"entries": [
						"Kiralei's poisons ignore resistances and lasts until cured. If a creature tries to remove the poison it must succeed on a ability check with its spellcasting ability {@dc 19}.",
						"Additionally whenever Kiralei's poisons causes damage on a creature that is immune to poison it causes necrotic damage instead."
					]
				},
				{
					"name": "Infuse Poison",
					"entries": [
						"As a bonus action Kiralei infuses her hands with dark energy, choosing one of the following effects to affect any creature she touches {@dc 21}.",
						"{@i 1. Truth Serum} The creature must succeed on a Constitution saving throw or be {@condition poisoned}. The {@condition poisoned} creature can't knowingly speak a lie, as if under the effect of a {@spell zone of truth} spell.",
						"{@i 2. Carrion Poison} The creature must succeed on a Constitution saving throw or be {@condition poisoned}. The {@condition poisoned} creature is {@condition paralyzed}. The creature can repeat the saving throw at the end of each of its turns, ending the effect on itself on a success.",
						"{@i 3. Dark Poison} The creature must succeed on a Constitution saving throw or be {@condition poisoned}. If the saving throw fails by 5 or more, the creature is also {@condition unconscious}  while {@condition poisoned} in this way. The creature wakes up if it takes damage or if another creature takes an action to shake it awake.",
						"{@i 4. Burning Breath} The creature must succeed on a Constitution saving throw or be {@condition poisoned}. The creature repeats the saving throw at the start of each of its turns. On each successive failed save, the creature takes 7 ({@damage 2d6}) poison damage. Damage caused by this poison doesn't causes a creature to wake up or end effects that would normally be ended by damage. After three successful saves, the poison ends."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"Kiralei makes two poison touch or gentle touch attacks."
					]
				},
				{
					"name": "Poison Touch",
					"entries": [
						"{@atk ms} {@hit 13} to hit, reach 15 ft., one target. {@h}8 ({@damage 3d6 + 7}) poison damage. The target is subject to one of Kiralei's infused poisons."
					]
				},
				{
					"name": "Gentle Touch",
					"entries": [
						"{@atk ms} {@hit 13} to hit, reach 15 ft., one target. The target is subject to one of Kiralei's infused poisons and makes the saving throw with disadvantage."
					]
				}
			],
			"environment": [
				"underdark"
			],
			"traitTags": [
				"Damage Absorption",
				"Fey Ancestry",
				"Magic Resistance"
			],
			"senseTags": [
				"U"
			],
			"actionTags": [
				"Multiattack"
			],
			"languageTags": [
				"E",
				"C",
				"I",
				"AB"
			],
			"damageTags": [
				"I"
			],
			"spellcastingTags": [
				"I",
				"CC"
			],
			"conditionInflictSpell": [
				"blinded",
				"deafened",
				"incapacitated",
				"poisoned",
				"stunned"
			],
			"tokenUrl": "https://i.imgur.com/a5Syyxz.png",
			"immune": [
				"necrotic",
				"poison"
			],
			"resist": [
				{
					"resist": [
						"bludgeoning",
						"piercing",
						"slashing"
					]
				},
				{
					"resist": [
						"acid",
						"cold",
						"fire",
						"lightning",
						"thunder"
					]
				}
			],
			"conditionInflict": [
				"poisoned",
				"paralyzed",
				"unconscious"
			],
			"legendary": [
				{
					"name": "Poison (or Gentle) Touch",
					"entries": [
						"Kiralei uses her Poison Touch or Gentle Touch."
					]
				},
				{
					"name": "Cast lower Spells",
					"entries": [
						"Kiralei casts a spell."
					]
				}
			],
			"shortName": "Kiralei",
			"miscTags": [
				"RCH"
			],
			"fluff": {
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.imgur.com/rIqTPuT.png"
						}
					}
				]
			}
		}
	]
}
{
	"siteVersion": "1.154.0",
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1651061629,
		"dateLastModified": 1651061629
	},
	"monster": [
		{
			"name": "Knight Balor",
			"source": "Lolncio",
			"page": 55,
			"size": [
				"H"
			],
			"type": {
				"type": "fiend",
				"tags": [
					"demon"
				]
			},
			"alignment": [
				"C",
				"E"
			],
			"ac": [
				{
					"ac": 24,
					"from": [
						"natural armor"
					]
				}
			],
			"hp": {
				"formula": "73d20 + 438",
				"average": 1200
			},
			"speed": {
				"walk": 40,
				"fly": 80
			},
			"str": 30,
			"dex": 19,
			"con": 28,
			"int": 20,
			"wis": 22,
			"cha": 26,
			"save": {
				"str": "+17",
				"con": "+16",
				"cha": "+15",
				"wis": "+13",
				"int": "+12"
			},
			"senses": [
				"truesight 120 ft."
			],
			"passive": 23,
			"resist": [
				"cold",
				"lightning",
				{
					"resist": [
						"bludgeoning",
						"piercing",
						"slashing"
					],
					"note": "from nonmagical attacks",
					"cond": true
				}
			],
			"immune": [
				"fire",
				"poison"
			],
			"conditionImmune": [
				"charmed",
				"exhaustion",
				"poisoned"
			],
			"languages": [
				"Abyssal",
				"telepathy 120 ft."
			],
			"cr": "24",
			"trait": [
				{
					"name": "Death Throes",
					"entries": [
						"When the balor dies, it explodes, and each creature within 30 feet of it must make a {@dc 20} Dexterity saving throw, taking 350 ({@damage 100d6}) force damage on a failed save, or half as much damage on a successful one. The explosion disintegrate objects in that area that aren't being worn or carried, and it destroys the balor's weapons."
					]
				},
				{
					"name": "Unholy Aura",
					"entries": [
						"At the start of each of the balor's turns, each creature within 5 feet of it takes 21 ({@damage 6d6}) necrotic damage, and it can't regain hit points until the start of balor's next turn. A creature that touches the balor or hits it with a melee attack while within 5 feet of it takes 21 ({@damage 6d6}) necrotic damage (and it can't regain hit points until the start of balor's next turn.)"
					]
				},
				{
					"name": "Magic Resistance",
					"entries": [
						"The balor has advantage on saving throws against spells and other magical effects."
					]
				},
				{
					"name": "Magic Weapons",
					"entries": [
						"The balor's weapon attacks are magical."
					]
				},
				{
					"name": "Legendary Resistance (4/Day)",
					"entries": [
						"If the knight balor fails a saving throw, it can choose to succeed instead."
					]
				},
				{
					"name": "Necrotic Absorption",
					"entries": [
						"Whenever the knight balor is subjected to necrotic damage, it takes no damage and instead regains a number of hit points equal to the necrotic damage dealt."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"The balor makes two attacks: one with its longsword and one with its whip."
					]
				},
				{
					"name": "Longsword",
					"entries": [
						"{@atk mw} {@hit 14} to hit, reach 10 ft., one target. {@h}55 ({@damage 10d8 + 10}) slashing damage plus 13 ({@damage 3d8}) lightning damage. If the balor scores a critical hit, it rolls damage dice three times, instead of twice."
					]
				},
				{
					"name": "Whip",
					"entries": [
						"{@atk mw} {@hit 14} to hit, reach 30 ft., one target. {@h}38 ({@damage 8d6 + 10}) slashing damage plus 10 ({@damage 3d6}) necrotic damage, and the target must succeed on a {@dc 20} Strength saving throw or be pulled up to 25 feet toward the balor."
					]
				},
				{
					"name": "Teleport",
					"entries": [
						"The balor magically teleports, along with any equipment it is wearing or carrying, up to 120 feet to an unoccupied space it can see."
					]
				}
			],
			"variant": [
				{
					"type": "variant",
					"name": "Summon Demon (1/Day)",
					"entries": [
						"The demon chooses what to summon and attempts a magical summoning.",
						"A balor has a {@chance 50|50 percent|50% summoning chance} chance of summoning {@dice 1d8} {@creature vrock||vrocks}, {@dice 1d6} {@creature hezrou||hezrous}, {@dice 1d4} {@creature glabrezu||glabrezus}, {@dice 1d3} {@creature nalfeshnee||nalfeshnees}, {@dice 1d2} {@creature marilith||mariliths}, or one {@creature goristro}.",
						"A summoned demon appears in an unoccupied space within 60 feet of its summoner, acts as an ally of its summoner, and can't summon other demons. It remains for 1 minute, until it or its summoner dies, or until its summoner dismisses it as an action."
					],
					"_version": {
						"name": "Balor (Summoner)",
						"addAs": "action"
					}
				}
			],
			"soundClip": {
				"type": "external",
				"url": "https://5e.tools/audio/bestiary/balor.mp3"
			},
			"traitTags": [
				"Damage Absorption",
				"Death Burst",
				"Legendary Resistances",
				"Magic Resistance",
				"Magic Weapons"
			],
			"senseTags": [
				"U"
			],
			"actionTags": [
				"Multiattack",
				"Teleport"
			],
			"languageTags": [
				"AB",
				"TP"
			],
			"damageTags": [
				"L",
				"N",
				"O",
				"S"
			],
			"miscTags": [
				"MW",
				"RCH",
				"AOE"
			],
			"hasFluff": true,
			"hasFluffImages": true,
			"tokenUrl": "https://i.imgur.com/0hMmCc5.png",
			"fluff": {
				"entries": [
					{
						"type": "entries",
						"entries": [
							{
								"type": "entries",
								"entries": [
									"Figures of ancient and terrible evil, balors rule as generals over demonic armies, yearning to seize power while destroying any creatures that oppose them.",
									"Wielding a flaming whip and a longsword that channels the power of the storm, a balor's battle prowess is fueled by hatred and rage. It channels this demonic fury in its death throes, falling within a blast of fire that can destroy even the hardiest foes."
								]
							}
						]
					},
					{
						"type": "section",
						"name": "Demons",
						"entries": [
							"Spawned in the Infinite Layers of the Abyss, demons are the embodiment of chaos and evil-engines of destruction barely contained in monstrous form. Possessing no compassion, empathy, or mercy, they exist only to destroy.",
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Spawn of Chaos",
												"entries": [
													"The Abyss creates demons as extensions of itself, spontaneously forming fiends out of filth and carnage. Some are unique monstrosities, while others represent uniform strains virtually identical to each other. Other demons (such as manes) are created from mortal souls shunned or cursed by the gods, or which are otherwise trapped in the Abyss."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Capricious Elevation",
												"entries": [
													"Demons respect power and power alone. A greater demon commands shrieking mobs of lesser demons because it can destroy any lesser demon that dares to refuse its commands. A demon's status grows with the blood it spills; the more enemies that fall before it, the greater it becomes.",
													"A demon might spawn as a manes, then become a dretch, and eventually transform to a vrock after untold time spent fighting and surviving in the Abyss. Such elevations are rare, however, for most demons are destroyed before they attain significant power. The greatest of those that do survive make up the ranks of the demon lords that threaten to tear the Abyss apart with their endless warring.",
													"By expending considerable magical power, demon lords can raise lesser demons into greater forms, though such promotions never stem from a demon's deeds or accomplishments. Rather, a demon lord might warp a manes into a quasit when it needs an invisible spy, or turn an army of dretches into hezrous when marching against a rival lord. Demon lords only rarely elevate demons to the highest ranks, fearful of inadvertently creating rivals to their own power."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Abyssal Invasions",
												"entries": [
													"Wherever they wander across the Abyss, demons search for portals to the other planes. They crave the chance to slip free of their native realm and spread their dark influence across the multiverse, undoing the works of the gods, tearing down civilizations, and reducing the cosmos to despair and ruin.",
													"Some of the darkest legends of the mortal realm are built around the destruction wrought by demons set loose in the world. As such, even nations embroiled in bitter conflict will set their differences aside to help contain an outbreak of demons, or to seal off abyssal breaches before these fiends can break free."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Signs of Corruption",
												"entries": [
													"Demons carry the stain of abyssal corruption with them, and their mere presence changes the world for the worse. Plants wither and die in areas where abyssal breaches and demons appear. Animals shun the sites where a demon has made a kill. The site of a demonic infestation might be fouled by a stench that never abates, by areas of bitter cold or burning heat, or by permanent shadows that mark the places where these fiends lingered."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Eternal Evil",
												"entries": [
													"Outside the Abyss, death is a minor nuisance that no demon fears. Mundane weapons can't stop these fiends, and many demons are resistant to the energy of the most potent spells. When a lucky hero manages to drop a demon in combat, the fiend dissolves into foul ichor. It then instantly reforms in the Abyss, its mind and essence intact even as its hatred is inflamed.",
													"The only way to truly destroy a demon is to seek it in the Abyss and kill it there."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Protected Essence",
												"entries": [
													"A powerful demon can take steps to safeguard its life essence, using secret methods and abyssal metals to create an amulet into which part of that essence is ceded. If the demon's abyssal form is ever destroyed, the amulet allows the fiend to reform at a time and place of its choosing.",
													"Obtaining a demonic amulet is a dangerous enterprise, and simply seeking such a device risks drawing the attention of the demon that created it. A creature possessing a demonic amulet can exact favors from the demon whose life essence the amulet holds—or inflict great pain if the fiend resists. If an amulet is destroyed, the demon that created it is trapped in the Abyss for a year and a day."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Demonic Cults",
												"entries": [
													"Despite the dark risks involved in dealing with fiends, the mortal realm is filled with creatures that covet demonic power. Demon lords manipulate these mortal servants into performing ever greater acts of depravity, furthering the demon lord's ambitions in exchange for magic and other boons. However, a demon regards any mortals in its service as tools to use and then discard at its whim, consigning their mortal souls to the Abyss."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Demon Summoning",
												"entries": [
													"Few acts are as dangerous as summoning a demon, and even mages who bargain freely with devils fear the fiends of the Abyss. Though demons yearn to sow chaos on the Material Plane, they show no gratitude when brought there, raging against their prisons and demanding release.",
													"Those who would risk summoning a demon might do so to wrest information from it, press it into service, or send it on a mission that only a creature of absolute evil can complete. Preparation is key, and experienced summoners know the specific spells and magic items that can force a demon to bend to another's will. If a single mistake is made, a demon that breaks free shows no mercy as it makes its summoner the first victim of its wrath."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Bound Demons",
												"entries": [
													"The Book of Vile Darkness, the Black Scrolls of Ahm, and the Demonomicon of Iggwilv are the foremost authorities on demonic matters. These ancient tomes describe techniques that can trap the essence of a demon on the Material Plane, placing it within a weapon, idol, or piece of jewelry and preventing the fiend's return to the Abyss.",
													"An object that binds a demon must be specially prepared with unholy incantations and innocent blood. It radiates a palpable evil, chilling and fouling the air around it. A creature that handles such an object experiences unsettling dreams and wicked impulses, but is able to control the demon whose essence is trapped within the object. Destroying the object frees the demon, which immediately seeks revenge against its binder."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Demonic Possession",
												"entries": [
													"No matter how secure its bindings, a powerful demon often finds a way to escape an object that holds it. When a demonic essence emerges from its container, it can possess a mortal host. Sometimes a fiend employs stealth to hide a successful possession. Other times, it unleashes the full brunt of its fiendish drives through its new form.",
													"As long as the demon remains in possession of its host, the soul of that host is in danger of being dragged to the Abyss with the demon if it is exorcised from the flesh, or if the host dies. If a demon possesses a creature and the object binding the demon is destroyed, the possession lasts until powerful magic is used to drive the demonic spirit out of its host."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"name": "Demon Lords",
								"entries": [
									"The chaotic power of the Abyss rewards demons of particular ruthlessness and ingenuity with a dark blessing, transforming them into unique fiends whose power can rival the gods. These demon lords rule through cunning or brute force, hoping to one day claim the prize of absolute control over all the Abyss.",
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Reward for Outsiders",
												"entries": [
													"Although most demon lords rise up from the vast and uncountable mobs of demons rampaging across the Abyss, the plane also rewards outsiders that conquer any of its infinite layers. The elven goddess Lolth became a demon lord after Corellon Larethian cast her into the Abyss for betraying elvenkind. Sages claim that the Dark Prince Graz'zt originated on some other plane before stealing his abyssal title from another long-forgotten demon lord."
												]
											}
										]
									},
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Power and Control",
												"entries": [
													"The greatest sign of a demon lord's power is its ability to reshape an abyssal realm. A layer of the Abyss controlled by a demon lord becomes a twisted reflection of that fiend's vile personality, and demon lords seldom leave their realms for fear of allowing another creature to reshape and seize it.",
													"As with other demons, a demon lord that dies on another plane has its essence return to the Abyss, where it reforms into a new body. Likewise, a demon lord that dies in the Abyss is permanently destroyed. Most demon lords keep a portion of their essence safely stored away to prevent such a fate."
												]
											}
										]
									},
									{
										"type": "entries",
										"name": "Baphomet",
										"entries": [
											"The demon lord Baphomet, also known as the Horned King and the Prince of Beasts, rules over minotaurs and other savage creatures. If he had his way, civilization would crumble and all races would embrace their base animal savagery.",
											"The Prince of Beasts appears as a huge, black-furred minotaur with iron horns, red eyes, and a blood-soaked mouth. His iron crown is topped with the rotting heads of his enemies, while his dark armor is set with spikes and skull-like serrations. He carries a huge glaive named Heartcleaver, but often hurls it into the fray so as to face his enemies with horns and hooves."
										]
									},
									{
										"type": "entries",
										"name": "Demogorgon",
										"entries": [
											"The Sibilant Beast and the self-styled Prince of Demons, Demogorgon yearns for nothing less than undoing the order of the multiverse. An insane assemblage of features and drives, the Prince of Demons inspires fear and hatred among other demons and demon lords.",
											"Demogorgon towers three times the height of a human, his body as sinuous as a snake's and as powerful as a great ape's. Suckered tentacles take the place of his arms. His saurian lower torso ends in webbed and clawed feet, and a forked tail whose whip-like tips are armed with cruel blades. The Prince of Demons has two baleful baboon heads, both of them mad. It is only the conflict between the two halves of his dual nature that keeps the demon lord's ambitions in check."
										]
									},
									{
										"type": "entries",
										"name": "Graz'zt",
										"entries": [
											"The demon lord Graz'zt appears as a darkly handsome figure nearly nine feet tall. Those who refer to the Dark Prince as the most humanoid of the demon lords vastly underestimate the capacity for evil in his scheming heart.",
											"Graz'zt is a striking physical specimen, whose demonic nature shows in his ebon skin, pointed ears, yellow fangs, crown of horns, and six-fingered hands. He delights in finery, pageantry, and sating his decadent desires with subjects and consorts alike, among whom incubi and succubi are often his favorites."
										]
									},
									{
										"type": "entries",
										"name": "Juiblex",
										"entries": [
											"The demon lord of slimes and oozes, Juiblex is a stew of noxious fluids that lurks in the abyssal depths. The wretched Faceless Lord cares nothing for cultists or mortal servants, and its sole desire is to turn all creatures into formless copies of its horrid self.",
											"In its resting state, Juiblex spreads out in a noxious mass, bubbling and filling the air with a profound stench. On the rare occasions when creatures confront the demon lord, Juiblex draws itself up into a shuddering cone of slime striated with veins of black and green. Baleful red eyes swim within its gelatinous body, while dripping pseudopods of ooze lash out hungrily at any creature they can reach."
										]
									},
									{
										"type": "entries",
										"name": "Lolth",
										"entries": [
											"The Demon Queen of Spiders is the evil matron of the drow. Her every thought is touched by malice, and the depth of her viciousness can surprise even her most faithful priestesses. She directs her faithful while she weaves plots across the worlds of the Material Plane, looking forward to the time when her drow followers bring those worlds under her control.",
											"Lolth appears as a lithe, imperious drow matriarch when she manifests to her followers in the mortal realm, which she does with unusual frequency. When battle breaks out-or if she has a reason to remind her followers to fear her—Lolth's lower body transforms into that of a huge demonic spider, whose spike—tipped legs and mandibles tear foes apart."
										]
									},
									{
										"type": "entries",
										"name": "Orcus",
										"entries": [
											"Known as the Demon Prince of Undeath and the Blood Lord, the demon lord Orcus is worshiped by the undead and by living creatures that channel the power of undeath. A brooding and nihilistic entity, Orcus yearns to make the multiverse a place of death and darkness, forever unchanging except by his will.",
											"The Demon Prince of Undeath is a foul and corpulent creature, with a humanoid torso, powerful goat legs, and the desiccated head of a ram. His sore-ridden body stinks of disease, but his decaying head and glowing red eyes are as a creature already dead. Great black bat wings sprout from his back, stirring reeking air as he moves.",
											"Orcus wields a malevolent artifact known as the Wand of Orcus, a mace-like rod of obsidian topped by a humanoid skull. He surrounds himself with undead, and living creatures not under his control are anathema to him."
										]
									},
									{
										"type": "entries",
										"name": "Yeenoghu",
										"entries": [
											"Known as the Gnoll Lord and the Beast of Butchery, the demon lord Yeenoghu hungers for slaughter and senseless destruction. Gnolls are his mortal instruments, and he drives them to ever-greater atrocities in his name. Delighting in sorrow and hopelessness, the Gnoll Lord yearns to turn the world into a wasteland in which the last surviving gnolls tear each other apart for the right to feast upon the dead.",
											"Yeenoghu appears as a huge, scarred gnoll with a spiky crest of black spines, and eyes that burn with emerald flame. His armor is a patchwork of shields and breastplates claimed from fallen foes, and decorated by those foes' flayed skins. Yeenoghu can summon a triple flail he calls the Butcher, which he wields to deadly effect or wills to fly independently into battle as he tears foes apart with teeth and claws."
										]
									},
									{
										"type": "entries",
										"name": "Other Demon Lords",
										"entries": [
											"No one knows the full number of demon lords that rage in the Abyss. Given the infinite depths of that plane, powerful demons constantly rise to become demon lords, then fall almost as quickly. Among the demon lords whose power has endured long enough for demonologists to name them are Fraz-Urb'luu, the Prince of Deception; Kostchtchie, the Prince of Wrath; Pazuzu, Prince of the Lower Aerial Kingdoms; and Zuggtmoy, Lady of Fungi."
										]
									},
									{
										"type": "entries",
										"name": "Demon Types",
										"entries": [
											"Demonologists organize the chaotic distribution of demons into broad categories of power known as types. Most demons fit into one of six major types, with the weakest categorized as Type 1 and the strongest as Type 6. Demons outside the six main types are categorized as minor demons and demon lords."
										]
									},
									{
										"type": "table",
										"caption": "Demons by Type",
										"colLabels": [
											"Type",
											"Examples"
										],
										"colStyles": [
											"col-2 text-center",
											"col-10"
										],
										"rows": [
											[
												"1",
												"barlgura, shadow demon, vrock"
											],
											[
												"2",
												"chasme, hezrou"
											],
											[
												"3",
												"glabrezu, yochlol"
											],
											[
												"4",
												"nalfeshnee"
											],
											[
												"5",
												"marilith"
											],
											[
												"6",
												"balor, goristro"
											]
										]
									},
									{
										"type": "inset",
										"name": "Demon True Names",
										"entries": [
											"Though demons all have common names, every demon lord and every demon of type 1 through 6 has a true name that it keeps secret. A demon can be forced to disclose its true name if {@condition charmed}, and ancient scrolls and tomes are said to exist that list the true names of the most powerful demons.",
											"A mortal who learns a demon's true name can use powerful summoning magic to call the demon from the Abyss and exercise some measure of control over it. However, most demons brought to the Material Plane in this manner do everything in their power to wreak havoc or sow discord and strife."
										]
									},
									{
										"type": "inset",
										"name": "Variant: Demon Summoning",
										"entries": [
											"Some demons can have an action option that allows them to summon other demons. Summon Demon (1/Day). The demon chooses what to summon and attempts a magical summoning.",
											{
												"type": "list",
												"items": [
													"A balor has a {@chance 50|50 percent} chance of summoning {@dice 1d8} vrocks, {@dice 1d6} hezrous, {@dice 1d4} glabrezus, {@dice 1d3} nalfeshnees, {@dice 1d2} mariliths, or one goristro.",
													"A barlgura has a {@chance 30|30 percent} chance of summoning one barlgura.",
													"A chasme has a {@chance 30|30 percent} chance of summoning one chasme.",
													"A glabrezu has a {@chance 30|30 percent} chance of summoning {@dice 1d3} vrocks, {@dice 1d2} hezrous, or one glabrezu.",
													"A hezrou has a {@chance 30|30 percent} chance of summoning {@dice 2d6} dretches or one hezrou.",
													"A marilith has a {@chance 50|50 percent} chance of summoning {@dice 1d6} vrocks, {@dice 1d4} hezrous, {@dice 1d3} glabrezus, {@dice 1d2} nalfeshnees, or one marilith.",
													"A nalfeshnee has a {@chance 50|50 percent} chance of summoning {@dice 1d4} vrocks, {@dice 1d3} hezrous, {@dice 1d2} glabrezus, or one nalfeshnee.",
													"A vrock has a {@chance 30|30 percent} chance of summoning {@dice 2d4} dretches or one vrock.",
													"A yochlol has a {@chance 50|50 percent} chance of summoning one yochlol."
												]
											},
											"A summoned demon appears in an unoccupied space within 60 feet of its summoner, acts as an ally of its summoner, and can't summon other demons. It remains for 1 minute, until it or its summoner dies, or until its summoner dismisses it as an action."
										]
									}
								]
							}
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.pinimg.com/564x/c3/a6/81/c3a6818cd92535a4fffda6c5540159ff.jpg"
						}
					}
				]
			},
			"skill": {
				"athletics": "+24",
				"perception": "+13"
			},
			"legendary": [
				{
					"name": "Teleport",
					"entries": [
						"The balor magically teleports, along with any equipment it is wearing or carrying, up to 120 feet to an unoccupied space it can see."
					]
				},
				{
					"name": "Attack",
					"entries": [
						"The balor makes one attack with its longsword or your whip"
					]
				}
			]
		}
	]
}
{
	"siteVersion": "1.154.0",
	"_meta": {
		"sources": [
			{
				"json": "UlucaiDM",
				"abbreviation": "ULDM",
				"full": "Ulucai's Degenerate Mind",
				"url": "",
				"authors": [
					"Ulucai"
				],
				"convertedBy": [
					"Ulucai"
				]
			}
		],
		"dateAdded": 1650985022,
		"dateLastModified": 1650985022
	},
	"monster": [
		{
			"name": "Knight Goristro",
			"source": "UlucaiDM",
			"page": 59,
			"size": [
				"H"
			],
			"type": {
				"type": "fiend",
				"tags": [
					"demon"
				]
			},
			"alignment": [
				"C",
				"E"
			],
			"ac": [
				{
					"ac": 21,
					"from": [
						"natural armor, {@item shield|phb}"
					]
				}
			],
			"hp": {
				"average": 310,
				"formula": "23d12 + 161"
			},
			"speed": {
				"walk": 40
			},
			"str": 25,
			"dex": 11,
			"con": 25,
			"int": 6,
			"wis": 13,
			"cha": 14,
			"save": {
				"str": "+13",
				"dex": "+6",
				"con": "+13",
				"wis": "+7"
			},
			"skill": {
				"perception": "+7",
				"athletics": "+19"
			},
			"senses": [
				"darkvision 120 ft."
			],
			"passive": 17,
			"resist": [
				"cold",
				"fire",
				"lightning",
				{
					"resist": [
						"bludgeoning",
						"piercing",
						"slashing"
					],
					"note": "from nonmagical attacks",
					"cond": true
				}
			],
			"immune": [
				"poison"
			],
			"conditionImmune": [
				"poisoned"
			],
			"languages": [
				"Abyssal",
				"Common"
			],
			"cr": "17",
			"trait": [
				{
					"name": "Charge",
					"entries": [
						"If the goristro moves at least 15 feet straight toward a target and then hits it with a gore attack on the same turn, the target takes an extra 38 ({@damage 7d10}) piercing damage. If the target is a creature, it must succeed on a {@dc 21} Strength saving throw or be pushed up to 20 feet away and knocked {@condition prone}."
					]
				},
				{
					"name": "Labyrinthine Recall",
					"entries": [
						"The goristro can perfectly recall any path it has traveled."
					]
				},
				{
					"name": "Magic Resistance",
					"entries": [
						"The goristro has advantage on saving throws against spells and other magical effects."
					]
				},
				{
					"name": "Siege Monster",
					"entries": [
						"The goristro deals double damage to objects and structures."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"The goristro makes three attacks: two with its mace and one with its hoof."
					]
				},
				{
					"name": "Mace",
					"entries": [
						"{@atk mw} {@hit 13} to hit, reach 10 ft., one target. {@h}20 ({@damage 3d8 + 7}) bludgeoning damage."
					]
				},
				{
					"name": "Hoof",
					"entries": [
						"{@atk mw} {@hit 13} to hit, reach 5 ft., one target. {@h}23 ({@damage 3d10 + 7}) bludgeoning damage. If the target is a creature, it must succeed on a {@dc 21} Strength saving throw or be knocked {@condition prone}."
					]
				},
				{
					"name": "Gore",
					"entries": [
						"{@atk mw} {@hit 13} to hit, reach 10 ft., one target. {@h}45 ({@damage 7d10 + 7}) piercing damage."
					]
				}
			],
			"soundClip": {
				"type": "external",
				"url": "https://5e.tools/audio/bestiary/goristro.mp3"
			},
			"traitTags": [
				"Charge",
				"Magic Resistance",
				"Siege Monster"
			],
			"senseTags": [
				"SD"
			],
			"actionTags": [
				"Multiattack"
			],
			"languageTags": [
				"AB",
				"C"
			],
			"damageTags": [
				"B",
				"P"
			],
			"miscTags": [
				"MW",
				"RCH"
			],
			"conditionInflict": [
				"prone"
			],
			"hasFluff": true,
			"hasFluffImages": true,
			"tokenUrl": "https://i.imgur.com/Fie2DTF.png",
			"fluff": {
				"entries": [
					{
						"type": "entries",
						"entries": [
							{
								"type": "entries",
								"entries": [
									"The goristro resembles a fiendish minotaur towering more than twenty feet tall. When controlled by a demon lord, goristros make formidable living siege engines and prized pets. Goristros possess preternatural cunning when navigating labyrinthine passages and shifting corridors, pursuing foes in a terrifying hunt.",
									"A hulking goristro sometimes bears a palanquin, carrying smaller demons on its broad shoulders, much like an elephant carries riders on its back."
								]
							}
						]
					},
					{
						"type": "section",
						"name": "Demons",
						"entries": [
							"Spawned in the Infinite Layers of the Abyss, demons are the embodiment of chaos and evil-engines of destruction barely contained in monstrous form. Possessing no compassion, empathy, or mercy, they exist only to destroy.",
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Spawn of Chaos",
												"entries": [
													"The Abyss creates demons as extensions of itself, spontaneously forming fiends out of filth and carnage. Some are unique monstrosities, while others represent uniform strains virtually identical to each other. Other demons (such as manes) are created from mortal souls shunned or cursed by the gods, or which are otherwise trapped in the Abyss."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Capricious Elevation",
												"entries": [
													"Demons respect power and power alone. A greater demon commands shrieking mobs of lesser demons because it can destroy any lesser demon that dares to refuse its commands. A demon's status grows with the blood it spills; the more enemies that fall before it, the greater it becomes.",
													"A demon might spawn as a manes, then become a dretch, and eventually transform to a vrock after untold time spent fighting and surviving in the Abyss. Such elevations are rare, however, for most demons are destroyed before they attain significant power. The greatest of those that do survive make up the ranks of the demon lords that threaten to tear the Abyss apart with their endless warring.",
													"By expending considerable magical power, demon lords can raise lesser demons into greater forms, though such promotions never stem from a demon's deeds or accomplishments. Rather, a demon lord might warp a manes into a quasit when it needs an invisible spy, or turn an army of dretches into hezrous when marching against a rival lord. Demon lords only rarely elevate demons to the highest ranks, fearful of inadvertently creating rivals to their own power."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Abyssal Invasions",
												"entries": [
													"Wherever they wander across the Abyss, demons search for portals to the other planes. They crave the chance to slip free of their native realm and spread their dark influence across the multiverse, undoing the works of the gods, tearing down civilizations, and reducing the cosmos to despair and ruin.",
													"Some of the darkest legends of the mortal realm are built around the destruction wrought by demons set loose in the world. As such, even nations embroiled in bitter conflict will set their differences aside to help contain an outbreak of demons, or to seal off abyssal breaches before these fiends can break free."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Signs of Corruption",
												"entries": [
													"Demons carry the stain of abyssal corruption with them, and their mere presence changes the world for the worse. Plants wither and die in areas where abyssal breaches and demons appear. Animals shun the sites where a demon has made a kill. The site of a demonic infestation might be fouled by a stench that never abates, by areas of bitter cold or burning heat, or by permanent shadows that mark the places where these fiends lingered."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Eternal Evil",
												"entries": [
													"Outside the Abyss, death is a minor nuisance that no demon fears. Mundane weapons can't stop these fiends, and many demons are resistant to the energy of the most potent spells. When a lucky hero manages to drop a demon in combat, the fiend dissolves into foul ichor. It then instantly reforms in the Abyss, its mind and essence intact even as its hatred is inflamed.",
													"The only way to truly destroy a demon is to seek it in the Abyss and kill it there."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Protected Essence",
												"entries": [
													"A powerful demon can take steps to safeguard its life essence, using secret methods and abyssal metals to create an amulet into which part of that essence is ceded. If the demon's abyssal form is ever destroyed, the amulet allows the fiend to reform at a time and place of its choosing.",
													"Obtaining a demonic amulet is a dangerous enterprise, and simply seeking such a device risks drawing the attention of the demon that created it. A creature possessing a demonic amulet can exact favors from the demon whose life essence the amulet holds—or inflict great pain if the fiend resists. If an amulet is destroyed, the demon that created it is trapped in the Abyss for a year and a day."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Demonic Cults",
												"entries": [
													"Despite the dark risks involved in dealing with fiends, the mortal realm is filled with creatures that covet demonic power. Demon lords manipulate these mortal servants into performing ever greater acts of depravity, furthering the demon lord's ambitions in exchange for magic and other boons. However, a demon regards any mortals in its service as tools to use and then discard at its whim, consigning their mortal souls to the Abyss."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Demon Summoning",
												"entries": [
													"Few acts are as dangerous as summoning a demon, and even mages who bargain freely with devils fear the fiends of the Abyss. Though demons yearn to sow chaos on the Material Plane, they show no gratitude when brought there, raging against their prisons and demanding release.",
													"Those who would risk summoning a demon might do so to wrest information from it, press it into service, or send it on a mission that only a creature of absolute evil can complete. Preparation is key, and experienced summoners know the specific spells and magic items that can force a demon to bend to another's will. If a single mistake is made, a demon that breaks free shows no mercy as it makes its summoner the first victim of its wrath."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Bound Demons",
												"entries": [
													"The Book of Vile Darkness, the Black Scrolls of Ahm, and the Demonomicon of Iggwilv are the foremost authorities on demonic matters. These ancient tomes describe techniques that can trap the essence of a demon on the Material Plane, placing it within a weapon, idol, or piece of jewelry and preventing the fiend's return to the Abyss.",
													"An object that binds a demon must be specially prepared with unholy incantations and innocent blood. It radiates a palpable evil, chilling and fouling the air around it. A creature that handles such an object experiences unsettling dreams and wicked impulses, but is able to control the demon whose essence is trapped within the object. Destroying the object frees the demon, which immediately seeks revenge against its binder."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Demonic Possession",
												"entries": [
													"No matter how secure its bindings, a powerful demon often finds a way to escape an object that holds it. When a demonic essence emerges from its container, it can possess a mortal host. Sometimes a fiend employs stealth to hide a successful possession. Other times, it unleashes the full brunt of its fiendish drives through its new form.",
													"As long as the demon remains in possession of its host, the soul of that host is in danger of being dragged to the Abyss with the demon if it is exorcised from the flesh, or if the host dies. If a demon possesses a creature and the object binding the demon is destroyed, the possession lasts until powerful magic is used to drive the demonic spirit out of its host."
												]
											}
										]
									}
								]
							},
							{
								"type": "entries",
								"name": "Demon Lords",
								"entries": [
									"The chaotic power of the Abyss rewards demons of particular ruthlessness and ingenuity with a dark blessing, transforming them into unique fiends whose power can rival the gods. These demon lords rule through cunning or brute force, hoping to one day claim the prize of absolute control over all the Abyss.",
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Reward for Outsiders",
												"entries": [
													"Although most demon lords rise up from the vast and uncountable mobs of demons rampaging across the Abyss, the plane also rewards outsiders that conquer any of its infinite layers. The elven goddess Lolth became a demon lord after Corellon Larethian cast her into the Abyss for betraying elvenkind. Sages claim that the Dark Prince Graz'zt originated on some other plane before stealing his abyssal title from another long-forgotten demon lord."
												]
											}
										]
									},
									{
										"type": "entries",
										"entries": [
											{
												"type": "entries",
												"name": "Power and Control",
												"entries": [
													"The greatest sign of a demon lord's power is its ability to reshape an abyssal realm. A layer of the Abyss controlled by a demon lord becomes a twisted reflection of that fiend's vile personality, and demon lords seldom leave their realms for fear of allowing another creature to reshape and seize it.",
													"As with other demons, a demon lord that dies on another plane has its essence return to the Abyss, where it reforms into a new body. Likewise, a demon lord that dies in the Abyss is permanently destroyed. Most demon lords keep a portion of their essence safely stored away to prevent such a fate."
												]
											}
										]
									},
									{
										"type": "entries",
										"name": "Baphomet",
										"entries": [
											"The demon lord Baphomet, also known as the Horned King and the Prince of Beasts, rules over minotaurs and other savage creatures. If he had his way, civilization would crumble and all races would embrace their base animal savagery.",
											"The Prince of Beasts appears as a huge, black-furred minotaur with iron horns, red eyes, and a blood-soaked mouth. His iron crown is topped with the rotting heads of his enemies, while his dark armor is set with spikes and skull-like serrations. He carries a huge glaive named Heartcleaver, but often hurls it into the fray so as to face his enemies with horns and hooves."
										]
									},
									{
										"type": "entries",
										"name": "Demogorgon",
										"entries": [
											"The Sibilant Beast and the self-styled Prince of Demons, Demogorgon yearns for nothing less than undoing the order of the multiverse. An insane assemblage of features and drives, the Prince of Demons inspires fear and hatred among other demons and demon lords.",
											"Demogorgon towers three times the height of a human, his body as sinuous as a snake's and as powerful as a great ape's. Suckered tentacles take the place of his arms. His saurian lower torso ends in webbed and clawed feet, and a forked tail whose whip-like tips are armed with cruel blades. The Prince of Demons has two baleful baboon heads, both of them mad. It is only the conflict between the two halves of his dual nature that keeps the demon lord's ambitions in check."
										]
									},
									{
										"type": "entries",
										"name": "Graz'zt",
										"entries": [
											"The demon lord Graz'zt appears as a darkly handsome figure nearly nine feet tall. Those who refer to the Dark Prince as the most humanoid of the demon lords vastly underestimate the capacity for evil in his scheming heart.",
											"Graz'zt is a striking physical specimen, whose demonic nature shows in his ebon skin, pointed ears, yellow fangs, crown of horns, and six-fingered hands. He delights in finery, pageantry, and sating his decadent desires with subjects and consorts alike, among whom incubi and succubi are often his favorites."
										]
									},
									{
										"type": "entries",
										"name": "Juiblex",
										"entries": [
											"The demon lord of slimes and oozes, Juiblex is a stew of noxious fluids that lurks in the abyssal depths. The wretched Faceless Lord cares nothing for cultists or mortal servants, and its sole desire is to turn all creatures into formless copies of its horrid self.",
											"In its resting state, Juiblex spreads out in a noxious mass, bubbling and filling the air with a profound stench. On the rare occasions when creatures confront the demon lord, Juiblex draws itself up into a shuddering cone of slime striated with veins of black and green. Baleful red eyes swim within its gelatinous body, while dripping pseudopods of ooze lash out hungrily at any creature they can reach."
										]
									},
									{
										"type": "entries",
										"name": "Lolth",
										"entries": [
											"The Demon Queen of Spiders is the evil matron of the drow. Her every thought is touched by malice, and the depth of her viciousness can surprise even her most faithful priestesses. She directs her faithful while she weaves plots across the worlds of the Material Plane, looking forward to the time when her drow followers bring those worlds under her control.",
											"Lolth appears as a lithe, imperious drow matriarch when she manifests to her followers in the mortal realm, which she does with unusual frequency. When battle breaks out-or if she has a reason to remind her followers to fear her—Lolth's lower body transforms into that of a huge demonic spider, whose spike—tipped legs and mandibles tear foes apart."
										]
									},
									{
										"type": "entries",
										"name": "Orcus",
										"entries": [
											"Known as the Demon Prince of Undeath and the Blood Lord, the demon lord Orcus is worshiped by the undead and by living creatures that channel the power of undeath. A brooding and nihilistic entity, Orcus yearns to make the multiverse a place of death and darkness, forever unchanging except by his will.",
											"The Demon Prince of Undeath is a foul and corpulent creature, with a humanoid torso, powerful goat legs, and the desiccated head of a ram. His sore-ridden body stinks of disease, but his decaying head and glowing red eyes are as a creature already dead. Great black bat wings sprout from his back, stirring reeking air as he moves.",
											"Orcus wields a malevolent artifact known as the Wand of Orcus, a mace-like rod of obsidian topped by a humanoid skull. He surrounds himself with undead, and living creatures not under his control are anathema to him."
										]
									},
									{
										"type": "entries",
										"name": "Yeenoghu",
										"entries": [
											"Known as the Gnoll Lord and the Beast of Butchery, the demon lord Yeenoghu hungers for slaughter and senseless destruction. Gnolls are his mortal instruments, and he drives them to ever-greater atrocities in his name. Delighting in sorrow and hopelessness, the Gnoll Lord yearns to turn the world into a wasteland in which the last surviving gnolls tear each other apart for the right to feast upon the dead.",
											"Yeenoghu appears as a huge, scarred gnoll with a spiky crest of black spines, and eyes that burn with emerald flame. His armor is a patchwork of shields and breastplates claimed from fallen foes, and decorated by those foes' flayed skins. Yeenoghu can summon a triple flail he calls the Butcher, which he wields to deadly effect or wills to fly independently into battle as he tears foes apart with teeth and claws."
										]
									},
									{
										"type": "entries",
										"name": "Other Demon Lords",
										"entries": [
											"No one knows the full number of demon lords that rage in the Abyss. Given the infinite depths of that plane, powerful demons constantly rise to become demon lords, then fall almost as quickly. Among the demon lords whose power has endured long enough for demonologists to name them are Fraz-Urb'luu, the Prince of Deception; Kostchtchie, the Prince of Wrath; Pazuzu, Prince of the Lower Aerial Kingdoms; and Zuggtmoy, Lady of Fungi."
										]
									},
									{
										"type": "entries",
										"name": "Demon Types",
										"entries": [
											"Demonologists organize the chaotic distribution of demons into broad categories of power known as types. Most demons fit into one of six major types, with the weakest categorized as Type 1 and the strongest as Type 6. Demons outside the six main types are categorized as minor demons and demon lords."
										]
									},
									{
										"type": "table",
										"caption": "Demons by Type",
										"colLabels": [
											"Type",
											"Examples"
										],
										"colStyles": [
											"col-2 text-center",
											"col-10"
										],
										"rows": [
											[
												"1",
												"barlgura, shadow demon, vrock"
											],
											[
												"2",
												"chasme, hezrou"
											],
											[
												"3",
												"glabrezu, yochlol"
											],
											[
												"4",
												"nalfeshnee"
											],
											[
												"5",
												"marilith"
											],
											[
												"6",
												"balor, goristro"
											]
										]
									},
									{
										"type": "inset",
										"name": "Demon True Names",
										"entries": [
											"Though demons all have common names, every demon lord and every demon of type 1 through 6 has a true name that it keeps secret. A demon can be forced to disclose its true name if {@condition charmed}, and ancient scrolls and tomes are said to exist that list the true names of the most powerful demons.",
											"A mortal who learns a demon's true name can use powerful summoning magic to call the demon from the Abyss and exercise some measure of control over it. However, most demons brought to the Material Plane in this manner do everything in their power to wreak havoc or sow discord and strife."
										]
									},
									{
										"type": "inset",
										"name": "Variant: Demon Summoning",
										"entries": [
											"Some demons can have an action option that allows them to summon other demons. Summon Demon (1/Day). The demon chooses what to summon and attempts a magical summoning.",
											{
												"type": "list",
												"items": [
													"A balor has a {@chance 50|50 percent} chance of summoning {@dice 1d8} vrocks, {@dice 1d6} hezrous, {@dice 1d4} glabrezus, {@dice 1d3} nalfeshnees, {@dice 1d2} mariliths, or one goristro.",
													"A barlgura has a {@chance 30|30 percent} chance of summoning one barlgura.",
													"A chasme has a {@chance 30|30 percent} chance of summoning one chasme.",
													"A glabrezu has a {@chance 30|30 percent} chance of summoning {@dice 1d3} vrocks, {@dice 1d2} hezrous, or one glabrezu.",
													"A hezrou has a {@chance 30|30 percent} chance of summoning {@dice 2d6} dretches or one hezrou.",
													"A marilith has a {@chance 50|50 percent} chance of summoning {@dice 1d6} vrocks, {@dice 1d4} hezrous, {@dice 1d3} glabrezus, {@dice 1d2} nalfeshnees, or one marilith.",
													"A nalfeshnee has a {@chance 50|50 percent} chance of summoning {@dice 1d4} vrocks, {@dice 1d3} hezrous, {@dice 1d2} glabrezus, or one nalfeshnee.",
													"A vrock has a {@chance 30|30 percent} chance of summoning {@dice 2d4} dretches or one vrock.",
													"A yochlol has a {@chance 50|50 percent} chance of summoning one yochlol."
												]
											},
											"A summoned demon appears in an unoccupied space within 60 feet of its summoner, acts as an ally of its summoner, and can't summon other demons. It remains for 1 minute, until it or its summoner dies, or until its summoner dismisses it as an action."
										]
									}
								]
							}
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.pinimg.com/564x/2e/1c/92/2e1c92a3f6203074805601642fac3643.jpg"
						}
					}
				]
			}
		}
	]
}
{
	"siteVersion": "1.142.0",
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1638274322,
		"dateLastModified": 1638274322
	},
	"monster": [
		{
			"name": "Koz Khazix",
			"shortName": "mage",
			"source": "Lolncio",
			"page": 218,
			"size": "M",
			"type": {
				"type": "humanoid",
				"tags": [
					"dragonborn"
				]
			},
			"alignment": [
				"L",
				"E"
			],
			"ac": [
				{
					"ac": 19,
					"from": [
						"Elemental Armor"
					]
				}
			],
			"hp": {
				"formula": "30d8 + 90",
				"average": 225
			},
			"speed": {
				"walk": 40
			},
			"str": 10,
			"dex": 14,
			"con": 17,
			"int": 25,
			"wis": 18,
			"cha": 17,
			"save": {
				"int": "+13",
				"wis": "+10",
				"con": "+9"
			},
			"skill": {
				"arcana": "+19",
				"history": "+13",
				"perception": "+10",
				"survival": "+10",
				"acrobatics": "+8",
				"nature": "+13"
			},
			"senses": [
				"blindsight 30 ft.",
				"darkvision 120 ft."
			],
			"passive": 20,
			"resist": [
				{
					"resist": [
						{
							"special": "All damage from spells."
						}
					]
				},
				{
					"resist": [
						"acid",
						"cold",
						"fire",
						"lightning",
						"thunder"
					]
				}
			],
			"immune": [
				{
					"immune": [
						"necrotic",
						"radiant"
					],
					"note": "Tasha's Otherwordly Guise"
				}
			],
			"conditionImmune": [
				"charmed",
				"petrified",
				"poisoned"
			],
			"languages": [
				"any six languages",
				"telepathy 120 ft."
			],
			"cr": "20",
			"spellcasting": [
				{
					"name": "Constant Effects",
					"headerEntries": [
						"The mage is always under the effect of one of the following spells, requiring no concentration. At the start of its turn the mage can change which spell affects him or reactivate it if it was dispelled (no action required). "
					],
					"constant": [
						"{@spell draconic transformation|FTD}",
						"{@spell fizban's platinum shield|FTD}",
						"{@spell investiture of ice|XGE}",
						"{@spell Tasha's otherworldly guise|TCE} (Upper or Lower)",
						"{@spell telekinesis}"
					],
					"type": "spellcasting"
				},
				{
					"name": "Spellcasting",
					"headerEntries": [
						"The mage is a 20th-level spellcaster. Its spellcasting ability is Intelligence (spell save {@dc 21} , {@hit 13} to hit with spell attacks). The mage has the following wizard spells prepared:"
					],
					"spells": {
						"0": {
							"spells": [
								"{@spell frostbite|XGE}",
								"{@spell gust|XGE}",
								"{@spell mending}",
								"{@spell mold earth|XGE}",
								"{@spell shape water|XGE}"
							]
						},
						"1": {
							"spells": [
								"{@spell expeditious retreat}",
								"{@spell longstrider}"
							],
							"slots": 0
						},
						"2": {
							"spells": [
								"{@spell alter self}",
								"{@spell earthbind|XGE}",
								"{@spell enhance ability}",
								"{@spell knock}",
								"{@spell levitate}",
								"{@spell magic weapon}",
								"{@spell spider climb}"
							],
							"slots": 0
						},
						"3": {
							"spells": [
								"{@spell flame arrows|XGE}",
								"{@spell fly}",
								"{@spell haste}",
								"{@spell slow}"
							],
							"slots": 0
						},
						"4": {
							"spells": [
								"{@spell fabricate}",
								"{@spell polymorph}",
								"{@spell stone shape}"
							],
							"slots": 3
						},
						"5": {
							"spells": [
								"{@spell animate objects}",
								"{@spell passwall}",
								"{@spell transmute rock|XGE}"
							],
							"slots": 3
						},
						"6": {
							"spells": [
								"{@spell disintegrate}",
								"{@spell flesh to stone}",
								"{@spell investiture of flame|XGE}",
								"{@spell investiture of stone|XGE}",
								"{@spell investiture of wind|XGE}",
								"{@spell living bomb|Planescape}"
							],
							"slots": 3
						},
						"7": {
							"spells": [
								"{@spell etherealness}",
								"{@spell reverse gravity}",
								"{@spell sequester}"
							],
							"slots": 3
						},
						"8": {
							"spells": [
								"{@spell control weather}"
							],
							"slots": 2
						},
						"9": {
							"spells": [
								"{@spell mass polymorph|XGE}",
								"{@spell shapechange}",
								"{@spell time stop}",
								"{@spell true polymorph}"
							],
							"slots": 2
						}
					},
					"ability": "int",
					"type": "spellcasting"
				}
			],
			"trait": [
				{
					"name": "Transmuter's Stone",
					"entries": [
						"Once a day the mage can use its action to consume the energy reserves of his transmuter's stone to create one of the following effects:",
						"{@b Panacea} The mage remove all curses, diseases, and poisons affecting a creature that it touches with the transmuter's stone. The creature also regains all its hit points.",
						"{@b Restore Life} The mage can cast {@spell raise dead} spell on a creature it touches with the transmuter's stone, without expending a spell slot or having the spell prepared.",
						"{@b Restore Youth} The mage touches a willing creature with the stone, and that creature's apparent age is reduced by {@dice 3d10} years, to a minimum of 13 years. This effect doesn't extend the creature's lifespan."
					]
				},
				{
					"name": "Master of Transmutation",
					"entries": [
						"The mage can't be affected by spells the school of transmutation unless it wishes to be. It has advantage on saving throws against all other spells and magical effects.",
						"Additionaly any spell of 2nd level or lower from the transmutation school cast by the mage do not require concentration and has its duration increased to 1 hour (if not already)."
					]
				},
				{
					"name": "Legendary Resistance (3/Day)",
					"entries": [
						"If the mage fails a saving throw, it can choose to succeed instead."
					]
				}
			],
			"bonus": [
				{
					"name": "Enhanced Support",
					"entries": [
						"Whenever the mage casts {@spell polymorph}, {@spell mass polymorph|XGE} or {@spell true polymorph}, {@spell animate objects} it can affect the target with a 1st or 2nd level spell as a bonus action."
					]
				}
			],
			"reaction": [
				{
					"name": "Elemental Rebuke",
					"entries": [
						"When the mage is hit by an attack it can use its reaction to cast a Investiture Spell, requiring no concentration. The spell lasts until the start of his next turn.",
						"{@spell Investiture of flame|XGE}",
						"{@spell Investiture of ice|XGE}",
						"{@spell Investiture of stone|XGE}",
						"{@spell Investiture of wind|XGE}"
					]
				}
			],
			"legendary": [
				{
					"name": "Higher Casting(2)",
					"entries": [
						"The mage casts a spell."
					]
				},
				{
					"name": "Lesser Casting",
					"entries": [
						"The mage casts a spell of 3rd level or lower."
					]
				},
				{
					"name": "Move",
					"entries": [
						"The mage move up to its speed."
					]
				},
				{
					"name": "Use item",
					"entries": [
						"The mage uses an item."
					]
				}
			],
			"environment": [
				"hill",
				"urban"
			],
			"tokenUrl": "https://media.discordapp.net/attachments/557321504220643349/914883666172317747/maguin_transmut.png?width=423&height=423",
			"traitTags": [
				"Legendary Resistances"
			],
			"senseTags": [
				"B",
				"SD"
			],
			"languageTags": [
				"X",
				"TP"
			],
			"damageTags": [
				"O"
			],
			"spellcastingTags": [
				"CW"
			],
			"hasFluff": true,
			"action": [
				{
					"name": "Antimagic Breath. {@recharge 5}",
					"entries": [
						"The mage emits a magic wave in a 30-foot cone. Each creature in that area must make a {@dc 21} Constitution saving throw, taking 39 ({@damage 6d12}) force damage on a failed save, or half as much damage on a successful one. Every spell of 6rd level or lower ends on creatures and objects of the mage's choice in that area."
					]
				}
			],
			"actionTags": [
				"Breath Weapon"
			],
			"miscTags": [
				"AOE"
			],
			"fluff": {
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.pinimg.com/564x/d8/5f/d0/d85fd0e934f096f4b9e5f1637e116e2e.jpg"
						}
					}
				]
			}
		}
	]
}
{
	"siteVersion": "1.139.0",
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1633904995,
		"dateLastModified": 1633904995
	},
	"monster": [
		{
			"name": "Lunares. The Guardian",
			"source": "Lolncio",
			"page": 318,
			"size": "M",
			"type": "beast",
			"alignment": [
				"U"
			],
			"ac": [
				{
					"ac": 11,
					"from": [
						"natural armor"
					]
				}
			],
			"hp": {
				"average": 19,
				"formula": "3d8 + 6"
			},
			"speed": {
				"walk": 40,
				"climb": 30
			},
			"str": 15,
			"dex": 10,
			"con": 14,
			"int": 2,
			"wis": 12,
			"cha": 7,
			"skill": {
				"perception": "+3"
			},
			"passive": 13,
			"cr": "1/2",
			"trait": [
				{
					"name": "Keen Smell",
					"entries": [
						"Lunares has advantage on Wisdom ({@skill Perception}) checks that rely on smell."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"Lunares makes two attacks: one with its bite and one with its claws."
					]
				},
				{
					"name": "Bite",
					"entries": [
						"{@atk mw} {@hit 4} to hit, reach 5 ft., one target. {@h}5 ({@damage 1d6 + 2}) piercing damage."
					]
				},
				{
					"name": "Claws",
					"entries": [
						"{@atk mw} {@hit 4} to hit, reach 5 ft., one target. {@h}7 ({@damage 2d4 + 2}) slashing damage."
					]
				}
			],
			"environment": [
				"forest"
			],
			"soundClip": {
				"type": "external",
				"url": "https://5e.tools/audio/bestiary/black-bear.mp3"
			},
			"traitTags": [
				"Keen Senses"
			],
			"actionTags": [
				"Multiattack"
			],
			"damageTags": [
				"P",
				"S"
			],
			"miscTags": [
				"MW"
			],
			"tokenUrl": "https://i.imgur.com/K0wLLdu.png"
		}
	]
}
{
	"siteVersion": "1.154.0",
	"_meta": {
		"sources": [
			{
				"json": "UlucaiDM",
				"abbreviation": "ULDM",
				"full": "Ulucai DM",
				"url": "",
				"authors": [
					"Ulucai"
				],
				"convertedBy": [
					"Ulucai"
				]
			}
		],
		"dateAdded": 1651058199,
		"dateLastModified": 1651058199
	},
	"monster": [
		{
			"name": "Mind Drinker",
			"shortName": "Mind Drinker",
			"isNamedCreature": true,
			"source": "UlucaiDM",
			"page": 256,
			"size": [
				"M"
			],
			"type": {
				"type": "humanoid",
				"tags": [
					"Kenku"
				]
			},
			"alignment": [
				"L",
				"E"
			],
			"ac": [
				{
					"special": "19"
				}
			],
			"hp": {
				"formula": "23d8 + 115",
				"average": 218
			},
			"speed": {
				"walk": 40,
				"fly": 40,
				"canHover": false
			},
			"str": 13,
			"dex": 18,
			"con": 20,
			"int": 22,
			"wis": 14,
			"cha": 16,
			"save": {
				"wis": "+7",
				"cha": "+8",
				"int": "+11"
			},
			"skill": {
				"nature": "+11",
				"acrobatics": "+9",
				"persuasion": "+8",
				"deception": "+8",
				"stealth": "+9",
				"perception": "+7"
			},
			"senses": [
				"darkvision 120 ft."
			],
			"passive": 17,
			"immune": [
				"psychic"
			],
			"conditionImmune": [
				"charmed",
				"frightened"
			],
			"languages": [
				"Common plus any one language"
			],
			"cr": "15",
			"spellcasting": [
				{
					"name": "Spellcasting",
					"headerEntries": [
						"The mind drinker is a 20th-level spellcaster. Its spellcasting ability is Intelligence (spell save {@dc 19}, {@hit 11} to hit with spell attacks). The has the following spells prepared:"
					],
					"will": [
						"{@spell alter self}",
						"{@spell eldritch blast}",
						"{@spell invisibility}"
					],
					"daily": {
						"2e": [
							"{@spell dimension door}",
							"{@spell flesh to stone}",
							"{@spell negative energy flood|XGE}",
							"{@spell scatter|XGE}",
							"{@spell sickening radiance|XGE}",
							"{@spell synaptic static|XGE}",
							"{@spell thunder step|XGE}",
							"{@spell wall of light|XGE}"
						],
						"1e": [
							"{@spell plane shift}",
							"{@spell power word stun}",
							"{@spell teleport}"
						]
					},
					"ability": "int",
					"type": "spellcasting"
				}
			],
			"trait": [
				{
					"name": "Bolstering Will",
					"entries": [
						"The mind drinker's magically emanates restoring energy within 30 feet of itself. Any ally of the mind drinker that starts its turn there regains 11 ({@dice 2d10}) hit points."
					]
				},
				{
					"name": "Eldritch Battery (Up to 18 Charges)",
					"entries": [
						"The mind drinker has advantage on saving throws against spells and other magical effects.",
						"Additionally whenever it succeeds on a saving throw against a spell it gains charges equal to the level of the spell."
					]
				},
				{
					"name": "Mind's Eye",
					"entries": [
						"The mind drinker can see {@condition invisible} creatures and objects, it can also see into the Ethereal Plane."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"The mind drinker can cast a spell of 1st level or higher and a cantrip.",
						"He can switch either of the spells for a Thoughtsteal."
					]
				},
				{
					"name": "Eldritch Bolt",
					"entries": [
						"{@atk rs} {@hit 11} to hit, range 300/300 ft., one target. {@h}9 ({@damage 1d10 + 5}) force damage. The target can be pushed 10 feet and has its speed reduced by 10 feet."
					]
				},
				{
					"name": "Thoughtsteal",
					"entries": [
						"{@atk mw} {@hit 11} to hit, reach 5 ft., one target. {@h}18 ({@damage 5d6}) psichic damage. The target loses a spell slot of {@damage 1d10-2} level (minimum of 1) and the mind drinker's eldritch battery gain charges equal to the spell slots lost."
					]
				},
				{
					"name": "Eldritch Discharge",
					"entries": [
						"The mind drinker releases all the energy stored in its Eldritch Battery against a creature. The target must make a {@dc 19} Intelligence saving throw. If it fails it takes ({@damage 2d10}) force damage plus ({@damage 1d10}) extra force damage per Eldritch Charge. If the target succeeds it takes only half the damage and recover spell slots equal to the number of charges released."
					]
				}
			],
			"reaction": [
				{
					"name": "Misty Escape (Recharges after a Short or Long Rest).",
					"entries": [
						"In response to taking damage, Felinto turns {@condition invisible} and teleports up to 60 feet to an unoccupied space it can see. It remains {@condition invisible} until the start of its next turn or until it attacks, makes a damage roll, or casts a spell."
					]
				},
				{
					"name": "Eldritch Rebuke",
					"entries": [
						"When the mind drinker is hit by an attack it can use its Eldritch Discharge."
					]
				}
			],
			"fluff": {
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://cdn.discordapp.com/attachments/827940866533621851/867133992389836830/4e8cdab1c47a99801436296197f95b3f1b013814.png"
						}
					}
				]
			},
			"tokenUrl": "https://cdn.discordapp.com/attachments/827940866533621851/867140012825903144/token_14.png",
			"senseTags": [
				"SD"
			],
			"actionTags": [
				"Multiattack"
			],
			"languageTags": [
				"C",
				"X"
			],
			"damageTags": [
				"O"
			],
			"miscTags": [
				"MW"
			]
		}
	]
}
{
	"siteVersion": "1.135.0",
	"_meta": {
		"sources": [
			{
				"json": "LolncioGM",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1630722353,
		"dateLastModified": 1630722353
	},
	"monster": [
		{
			"name": "Naergoth Bladelord",
			"isNpc": true,
			"source": "LolncioGM",
			"page": 90,
			"size": "L",
			"type": "undead",
			"alignment": [
				"N",
				"E"
			],
			"ac": [
				{
					"ac": 18,
					"from": [
						"{@item plate armor|phb}"
					]
				}
			],
			"hp": {
				"average": 135,
				"formula": "18d8 + 54"
			},
			"speed": {
				"walk": 40
			},
			"str": 20,
			"dex": 12,
			"con": 16,
			"int": 12,
			"wis": 14,
			"cha": 16,
			"save": {
				"dex": "+5",
				"wis": "+6"
			},
			"skill": {
				"perception": "+6",
				"stealth": "+5"
			},
			"senses": [
				"darkvision 60 ft."
			],
			"passive": 16,
			"resist": [
				"necrotic",
				{
					"resist": [
						"bludgeoning",
						"piercing",
						"slashing"
					],
					"note": "from nonmagical attacks that aren't silvered",
					"cond": true
				}
			],
			"immune": [
				"poison"
			],
			"conditionImmune": [
				"exhaustion",
				"poisoned"
			],
			"languages": [
				"Common",
				"Draconic",
				"Abyssal"
			],
			"cr": "11",
			"trait": [
				{
					"name": "Sunlight Sensitivity",
					"entries": [
						"While in sunlight, Naergoth has disadvantage on attack rolls, as well as on Wisdom ({@skill Perception}) checks that rely on sight."
					]
				},
				{
					"name": "Brute",
					"entries": [
						"A melee weapon deals one extra die of its damage when the naergoth bladelord hits with it."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"Naergoth makes three attacks, either with his longsword or longbow. He can use Life Drain in place of one longsword attack."
					]
				},
				{
					"name": "Life Drain",
					"entries": [
						"{@atk mw} {@hit 9} to hit, reach 5 ft., one target. {@h}20 ({@damage 5d6 + 3}) necrotic damage. The target must succeed on a {@dc 15} Constitution saving throw or its hit point maximum is reduced by an amount equal to the damage taken. This reduction lasts until the target finishes a long rest. The target dies if this effect reduces its hit point maximum to 0."
					]
				},
				{
					"name": "Longsword",
					"entries": [
						"{@atk mw} {@hit 9} to hit, reach 5 ft., one target. {@h}9 ({@damage 1d8 + 5}) slashing damage, or 10 ({@dice 1d10 + 5}) if used with two hands, plus 10 ({@damage 3d6}) necrotic damage."
					]
				},
				{
					"name": "Longbow",
					"entries": [
						"{@atk rw} {@hit 5} to hit, range 150/600 ft., one target. {@h}5 ({@damage 1d8 + 1}) piercing damage plus 10 ({@damage 3d6}) necrotic damage."
					]
				}
			],
			"traitTags": [
				"Brute",
				"Sunlight Sensitivity"
			],
			"senseTags": [
				"D"
			],
			"actionTags": [
				"Multiattack"
			],
			"languageTags": [
				"C",
				"DR",
				"AB"
			],
			"damageTags": [
				"N",
				"S",
				"P"
			],
			"miscTags": [
				"MW",
				"RW",
				"RNG"
			],
			"hasFluffImages": true,
			"tokenUrl": "https://5e.tools/img/RoT/Naergoth Bladelord.png?v=1.123.0",
			"fluff": {
				"name": "Naergoth Bladelord",
				"source": "RoT",
				"images": [
					{
						"type": "image",
						"href": {
							"type": "internal",
							"path": "bestiary/RoT/Naergoth Bladelord.jpg"
						}
					}
				]
			},
			"spellcasting": [
				{
					"name": "Spellcasting",
					"will": [
						"{@spell armor of Agathys} (5° Ciclo)",
						"{@spell chill touch}",
						"{@spell darkness}"
					],
					"daily": {
						"3": [
							"{@spell misty step}",
							"{@spell thunderous smite}"
						]
					},
					"rest": {
						"1": [
							"{@spell spirit shroud|TCE}"
						]
					},
					"type": "spellcasting"
				}
			]
		}
	]
}
{
	"siteVersion": "1.165.1",
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1659576537,
		"dateLastModified": 1659576537
	},
	"monster": [
		{
			"name": "Nobody",
			"source": "Lolncio",
			"page": 201,
			"size": "M",
			"type": "humanoid",
			"alignment": [
				"N"
			],
			"ac": [
				{
					"ac": 24,
					"from": [
						"renegade's cloak"
					]
				}
			],
			"hp": {
				"formula": "20d8 + 180",
				"average": 270
			},
			"speed": {
				"walk": 40,
				"climb": 40
			},
			"str": 18,
			"dex": 30,
			"con": 28,
			"int": 24,
			"wis": 21,
			"cha": 22,
			"skill": {
				"acrobatics": "+26",
				"investigation": "+15",
				"perception": "+21",
				"persuasion": "+14",
				"sleight of hand": "+26",
				"stealth": "+26",
				"history": "+15",
				"survival": "+13",
				"athletics": "+12",
				"deception": "+22"
			},
			"senses": [
				"darkvision 120 ft.",
				"blindsight 30 ft."
			],
			"passive": 31,
			"trait": [
				{
					"name": "Gunslinger",
					"entries": [
						"Being within 5 feet of a hostile creature or attacking at long range doesn't impose disadvantage on gunslinger ranged attack rolls with a gun. In addition, he ignores half cover and three-quarters cover when making ranged attacks."
					]
				},
				{
					"name": "Hunter's Intuition.",
					"entries": [
						"When gunslinger make a Wisdom (Perception) or Wisdom (Survival) check, he can roll a {@dice d4} and add the number rolled to the ability check."
					]
				},
				{
					"name": "Finder's Magic.",
					"entries": [
						"The gunslinger can cast the {@spell hunter's mark} spell with this trait. And, he can also cast the locate object spell with it. Once gunslinger cast either spell with this trait, he can't cast that spell with it again until finish a long rest."
					]
				},
				{
					"name": "Relentless Endurance.",
					"entries": [
						"When gunslinger are reduced to 0 hit points but not killed outright, he drop to 1 hit point instead. gunslinger can't use this feature again until finish a long rest."
					]
				},
				{
					"name": "Dead Eye.",
					"entries": [
						"When gunslinger score a critical hit with a ranged weapon attack, he can it maximizes the damage from this attack."
					]
				},
				{
					"name": "Avoidance",
					"entries": [
						"If the gunslinger is subjected to an effect that allows it to make a saving throw to only take half damage, it instead takes no damage if it succeeds on the saving throw, and only half damage if it fails."
					]
				},
				{
					"name": "Magic Weapons",
					"entries": [
						"The gunslinger's weapon attacks are magical."
					]
				},
				{
					"name": "Special Equipment.",
					"entries": [
						"The gunslinger wears a white {@item Mantle of Spell Resistance}, {@item Dagger of Blindsight}, 2x {@item Potion of Supreme Healing} and {@item Adamantine armor} (renegade's cloak)"
					]
				},
				{
					"name": "Adamantine Plating.",
					"entries": [
						"Any critical hit against the gunslinger becomes a normal hit. Because the adamantine armor."
					]
				},
				{
					"name": "Not in the face",
					"entries": [
						"If the gunslinger shoots a fallen target at 5 feet with the shotgun, this attack is considered critical if it hits."
					]
				},
				{
					"name": "Infused Magazine.",
					"entries": [
						"1.\tBanishment. A creature that takes damage from this bullet must succeed on a {@dc 24} Charisma saving throw or be banished as though affected by the banishment spell.",
						"2. Fulguration. On a hit, this bullet deals an extra {@damage 2d8} lightning damage to its target. All other creatures and objects within 10 feet of the target must each succeed on a {@dc 24} Constitution saving throw or take {@damage 1d8} thunder damage.",
						"3. Stunning. On a hit, this bullet deals an extra {@damage 1d10} force damage, and the target is {@condition stunned} until the end of gunslinger next turn.",
						"4. Tracking. A creature that takes damage from this bullet is marked with a glowing rune where the bullet hit. The mark lasts 24 hours. While the creature is marked, you always know the direction to it."
					]
				},
				{
					"name": "Gunslinger's Reflexes",
					"entries": [
						"The Gunslinger have become adept at laying ambushes and quickly escaping danger. he can take two turns during of any combat. The Gunslinger take your first turn at your normal initiative and your second turn at your initiative minus 10."
					]
				}
			],
			"senseTags": [
				"SD",
				"B"
			],
			"damageTags": [
				"B",
				"P"
			],
			"tokenUrl": "https://i.imgur.com/mpcrLLF.png",
			"fluff": {
				"entries": [
					{
						"type": "entries",
						"entries": [
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": []
									}
								]
							}
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.pinimg.com/564x/9f/9b/32/9f9b322789c2893fdaca009ba22006f7.jpg"
						}
					}
				]
			},
			"environment": [
				"urban"
			],
			"action": [
				{
					"name": "Multiattack.",
					"entries": [
						"O gunslinger pode realizar dois ataques com armas a distancia, três ataques com armas corpo a corpo leves e com propriedade acuidade.",
						"Ações : End Of Line, Shotgun, Rifle Butt."
					]
				},
				{
					"name": "Automatic Pistol",
					"entries": [
						"{@atk rw} {@hit 18} to hit, range 50/150 ft., one target. {@h}24 ({@damage 4d6 + 10}) piercing damage.",
						"***Dead Eye.*** ({@damage 58}) piercing damage."
					]
				},
				{
					"name": "Hunting Rifle",
					"entries": [
						"{@atk rw} {@hit 18} to hit, range 80/240 ft., one target. {@h}26 ({@damage 3d10 + 10}) piercing damage.",
						"***Dead Eye.*** ({@damage 70}) piercing damage."
					]
				},
				{
					"name": "Dagger of Blindsight",
					"entries": [
						"{@atk mw,rw} {@hit 18} to hit, reach 5 ft. or range 20/60 ft., one target. {@h}5 ({@damage 1d4 + 10}) piercing damage in melee, or 5 ({@damage 1d4 + 10}) piercing damage at range.",
						"This rare magic item requires attunement. A creature attuned to it gains blindsight out to a range of 30 feet. The dagger has a saw-toothed edge and a black pearl nested in its pommel."
					]
				},
				{
					"name": "End Of Line",
					"entries": [
						"{@atk rw} {@hit 18} to hit, range 240/240 ft., one target. {@h}43 ({@damage 6d10 + 10}) piercing damage.",
						"***Dead Eye.*** ({@damage 130}) piercing damage."
					]
				},
				{
					"name": "Shotgun",
					"entries": [
						"{@atk rw} {@hit 18} to hit, range 15/60 ft., one target. {@h}39 ({@damage 3d12 + 20}) piercing damage.",
						"If the target is a creature, it must succeed on a {@dc 22} Strength saving throw or be knocked {@condition prone}.",
						"***Dead Eye.*** ({@damage 92}) piercing damage."
					]
				},
				{
					"name": "Rifle Butt",
					"entries": [
						"{@atk mw} {@hit 18} to hit, reach 5 ft., one target. {@h}17 ({@damage 2d6 + 10}) bludgeoning damage.",
						"Whenever gunslinger hits a creature with this attacks, he can impose one of the following effects on that target.",
						"It must succeed on a {@dc 22} Dexterity saving throw or be knocked {@condition prone}.",
						"It must make a {@dc 22} Strength saving throw. If it fails, gunslinger can push it up to 15 feet away from he.",
						"It can't take reactions until the end of gunslinger next turn."
					]
				},
				{
					"name": "It's High Noon {@recharge}",
					"entries": [
						"The gunslinger gives up all his moves to lock the crosshairs on a target. The gunslinger's next attack is considered a critical hit."
					]
				},
				{
					"name": "Burst Fire",
					"entries": [
						"The gunslinger can spray a 30-foot cone area with the automatic gun. Each creature in the area must make a Dexterity saving throw {@dc 22} or takes [[{@dice 12d6 + 10}]] piercing"
					]
				}
			],
			"miscTags": [
				"RW",
				"MW",
				"THW",
				"AOE"
			],
			"bonus": [
				{
					"name": "Bomb {@recharge 5}",
					"entries": [
						"Clay lights this bomb and drops it at a point up to 60 feet away. Each creature within 5 feet of that spot must make a {@dc 22} Dexterity saving throw or take 21 [[{@dice 8d6}]] fire damage."
					]
				},
				{
					"name": "The Gunslinger Inventory.",
					"entries": [
						"As a bonus action. The Gunslinger can send any object he carrying to a demiplane. He can also retrieve an object previously sent there."
					]
				},
				{
					"name": "Eagle's Eye",
					"entries": [
						"As a bonus action, the gunslinger can add {@dice 2d8} to its next attack or damage roll with a End Of Line. or Shotgun."
					]
				},
				{
					"name": "Fast Hands",
					"entries": [
						"The gunslinger can reload his weapon, drop bombs and use magic itens with his bonus action."
					]
				},
				{
					"name": "Nimble Escape.",
					"entries": [
						"The gunslinger allison can take the {@action Disengage} or {@action Hide} action as a bonus action on each of its turns."
					]
				},
				{
					"name": "Potion of Supreme Healing",
					"entries": [
						"{@dice 10d4+20} Healing"
					]
				}
			],
			"conditionInflict": [
				"prone",
				"stunned"
			],
			"shortName": true,
			"reaction": [
				{
					"name": "Mobile",
					"entries": [
						"When the gunslinger is hit by a magical or physical attack, he can use the reaction and reduce the damage by 40. When using this reaction, he can roll up to 20 feet, this move does not provoke attacks of opportunity. After moving, in the same reaction, he can make an attack."
					]
				},
				{
					"name": "Skirmisher",
					"entries": [
						"The gunslinger can move up to half his speed as a reaction when an enemy approaches. This move does not provoke attacks of opportunity."
					]
				}
			],
			"traitTags": [
				"Magic Weapons"
			],
			"resist": [
				{
					"resist": [],
					"preNote": "All damages"
				}
			],
			"spellcasting": [
				{
					"name": "Innate Spellasting.",
					"headerEntries": [
						"The gunslinger spellcasting ability is Charisma (spell save {@dc 24}, +14 to hit with spell attacks). It can innately cast the following spells, requiring no material components:"
					],
					"daily": {
						"1": [
							"{@spell freedom of movement}",
							"{@spell hallucinatory terrain}",
							"{@spell mislead}",
							"{@spell teleport}"
						]
					},
					"rest": {
						"1": [
							"{@spell hunter's mark}",
							"{@spell locate creature}"
						]
					},
					"will": [
						"{@spell alarm}",
						"{@spell arcane eye}",
						"{@spell arcane lock} (no components)",
						"{@spell swift quiver}"
					],
					"ability": "cha",
					"type": "spellcasting"
				}
			],
			"spellcastingTags": [
				"I"
			],
			"legendary": [
				{
					"name": "Teleport",
					"entries": [
						"The Gunslinger magically teleports, along with any equipment it is wearing or carrying, up to 30 feet to an unoccupied space it can see."
					]
				},
				{
					"name": "Reload",
					"entries": [
						"The gunslinger reload your weapons."
					]
				},
				{
					"name": "Tick Tack",
					"entries": [
						"The Gunslinger make a ranged weapon attack."
					]
				},
				{
					"name": "Spell ( 2 actions)",
					"entries": [
						"The gunslinger cast a spell"
					]
				},
				{
					"name": "It's High Noon (If the skill is loaded) (3 actions)",
					"entries": [
						"The gunslinger gives up all his moves to lock the crosshairs on a target. The gunslinger's next attack is considered a critical hit."
					]
				}
			],
			"cr": "28",
			"languages": [
				"All languages"
			],
			"save": {
				"dex": "+18",
				"con": "+17",
				"int": "+15",
				"cha": "+14",
				"wis": "+13",
				"str": "+12"
			}
		}
	]
}
{
	"siteVersion": "1.176.1",
	"_meta": {
		"sources": [
			{
				"json": "Krakak",
				"abbreviation": "GAK",
				"full": "Krakak",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1676569038,
		"dateLastModified": 1676569038
	},
	"monster": [
		{
			"name": "Oto, o Senhor dos Worgs",
			"isNamedCreature": true,
			"source": "Krakak",
			"page": 80,
			"size": [
				"M"
			],
			"type": {
				"type": "humanoid",
				"tags": [
					"goblin"
				]
			},
			"alignment": [
				"L",
				"N"
			],
			"ac": [
				{
					"ac": 20,
					"from": [
						"{@item plate armor|phb}",
						"{@item shield|phb}"
					]
				}
			],
			"hp": {
				"average": 105,
				"formula": "14d8 + 42"
			},
			"speed": {
				"walk": 30,
				"climb": 15
			},
			"str": 21,
			"dex": 16,
			"con": 16,
			"int": 11,
			"wis": 10,
			"cha": 10,
			"skill": {
				"stealth": "+7",
				"survival": "+8",
				"athletics": "+13",
				"perception": "+4"
			},
			"senses": [
				"darkvision 60 ft."
			],
			"passive": 14,
			"languages": [
				"Common",
				"Goblin",
				"Worg"
			],
			"cr": "9",
			"trait": [
				{
					"name": "Rage",
					"entries": [
						"Oto can enter a rage as a bonus action. His rage lasts for 1 minute. During his rage he has advantage on Strength checks and Strength saving throws. He gains a +4 bonus to damage while he is in a rage. He has resistance to bludgeoning, piercing, and slashing damage while in a rage. Oto cannot cast spells while in a rage."
					]
				},
				{
					"name": "Cleaver",
					"entries": [
						"When Oto scores a critical hit with his sword, he can choose another target within range. Instead of rolling extra dice for the attack's damage against the first target, he can roll that damage to hit the second target."
					]
				},
				{
					"name": "Mounted Combatant",
					"entries": [
						"Oto have advantage on melee attack rolls against any unmounted creature that is smaller than your mount.",
						"Oto can force a targeted attack on his mount to hit him. (uses reaction)",
						"If Oto's mount is subjected to an effect that allows it to make a Dexterity saving throw to take only half damage, it instead takes no damage if it succeeds on the saving throw and only half damage if fail."
					]
				},
				{
					"name": "Martial Expert",
					"entries": [
						"Any weapon the goblin wield is considered magic, he also gains the following benefit based on which kind of weapon he wield:",
						"- Oto uses Strength to make ranged weapon attacks, doesn't have disadvantage on long range attacks and ignores half and three-quarters cover.",
						"- While dual wielding the goblin can make a extra attacks as part of his attack action.",
						"- While wielding a heavy weapon the goblin can reroll any 1 and 2 on his damage rolls with that weapon. Additionally when Oto hits a creature with a weapon attack he can use his bonus action to cleave all enemies within 10 feet. Each enemy makes a {@dc 15} Dexterity saving throw suffering the same damage of the initial attack, and half as much on a successful save."
					]
				},
				{
					"name": "Shield Master",
					"entries": [
						"Oto can use a bonus action to remove or equip his shield."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"Oto makes three attacks."
					]
				},
				{
					"name": "Bone Breaker {@recharge 5}",
					"entries": [
						"{@atk mw} {@hit 9} to hit, reach 5 ft., one target. {@h}23 ({@damage 4d8 + 5}) bludgeoning damage. If it is a critical attack the targets is {@condition incapacitated} until the end of your next turn."
					]
				},
				{
					"name": "Longsword",
					"entries": [
						"{@atk mw} {@hit 9} to hit, reach 5 ft., one target. {@h}8 ({@damage 1d8 + 5}) slashing damage, or 9 ({@damage 1d10 + 5}) slashing damage if used with both hands. "
					]
				},
				{
					"name": "Longsword - Rage",
					"entries": [
						"{@atk mw} {@hit 8} to hit, reach 5 ft., one target. {@h}12 ({@damage 1d8 + 9}) slashing damage, or 13 ({@damage 1d10 + 9}) slashing damage if used with both hands."
					]
				},
				{
					"name": "Shield Bash",
					"entries": [
						"{@atk mw} {@hit 9} to hit, reach 5 ft., one target. {@h}8 ({@damage 1d8 + 5}) bludgeoning damage. If the target is Large or smaller, it must succeed on a {@dc 14} Strength saving throw or be knocked {@condition prone}."
					]
				},
				{
					"name": "Shield Bash - Rage",
					"entries": [
						"{@atk mw} {@hit 9} to hit, reach 5 ft., one target. {@h}12 ({@damage 1d8 + 9}) bludgeoning damage. If the target is Large or smaller, it must succeed on a {@dc 14} Strength saving throw or be knocked {@condition prone}."
					]
				},
				{
					"name": "Twin Rippers",
					"entries": [
						"{@atk mw} {@hit 9} to hit, reach 5 ft., one target. {@h}7 ({@damage 1d6 + 5}) slashing damage, plus 7 ({@damage 2d6}) lightning damage.",
						"This attack is made with advantage against creatures wearing metal armor. A creature hit by this attack loses its reaction."
					]
				},
				{
					"name": "Awl",
					"entries": [
						"{@atk rw} {@hit 9} to hit, range 150/600 ft., one target. {@h}13 ({@damage 2d8 + 5}) piercing damage.",
						"A creature hit by this attack has its movement halved until the end of its next turn. If it is a critical attack the targets movement is reduced to 0."
					]
				}
			],
			"senseTags": [
				"D"
			],
			"actionTags": [
				"Multiattack",
				"Parry"
			],
			"languageTags": [
				"C",
				"GO",
				"OTH"
			],
			"damageTags": [
				"B",
				"L",
				"P",
				"S"
			],
			"damageTagsSpell": [
				"O"
			],
			"conditionInflictSpell": [
				"charmed",
				"frightened"
			],
			"hasFluff": true,
			"hasFluffImages": true,
			"tokenUrl": "https://media.discordapp.net/attachments/557321504220643349/1074743360465686778/ms5oXoe.png",
			"fluff": {
				"entries": [
					"Oto é um goblin magro e cabelos pretos e compridos. Ele é conhecido por ser o líder dos Worgs Mortos-Vivos de Carniça e é respeitado e temido por sua habilidade em controlar essas criaturas mortas-vivas.",
					"Oto sempre foi fascinado pelos Worgs, desde que era jovem. Ele passou muito tempo estudando-os e descobrindo seus hábitos e comportamentos. Ele aprendeu a comunicar-se com eles de forma rudimentar e a controlá-los com gestos e sinais. Quando Krakak Ossos-Podres chegou a Carniça e começou a levantar os Worgs mortos, Oto foi um dos primeiros a se voluntariar para treiná-los. Ele se revelou muito talentoso e rapidamente se tornou o líder dos Worgs Mortos-Vivos.",
					"Oto é responsável por treinar e controlar os Worgs Mortos-Vivos usados como guardas da cidade e para patrulhar o perímetro de Carniça. Ele também os usa em batalhas, onde suas habilidades de comando e estratégia são valiosas. Ele é conhecido por ser implacável com os Worgs Mortos-Vivos que falham em suas tarefas, mas também é leal aos que se mostram fiéis e competentes.",
					"Oto é um goblin sem educação formal, mas sua habilidade para controlar os Worgs Mortos-Vivos é a prova de que ele é capaz de aprender e se adaptar de forma eficaz. Ele é um líder forte e temido, mas também é respeitado pela sua habilidade e competência."
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://www.worldanvil.com/uploads/images/284934523e6f99fa8501eb39e8d48e4f.jpg"
						}
					}
				]
			},
			"shortName": "Oto",
			"save": {
				"str": "+9",
				"con": "+7",
				"wis": "+4"
			},
			"resist": [
				{
					"resist": [
						"bludgeoning",
						"piercing",
						"slashing"
					],
					"preNote": "in rage;"
				}
			],
			"miscTags": [
				"MW",
				"RW"
			],
			"conditionInflict": [
				"prone"
			],
			"bonus": [
				{
					"name": "Strategic Repositioning",
					"entries": [
						"Oto can take the Disengage, Hide or Dash action as a bonus action on each of its turns"
					]
				}
			],
			"reaction": [
				{
					"name": "Parry",
					"entries": [
						"Otto adds 3 to its AC against one melee attack that would hit it. To do so, the hobgoblin must see the attacker and be wielding a melee weapon."
					]
				}
			]
		}
	]
}
{
	"siteVersion": "1.169.5",
	"_meta": {
		"sources": [
			{
				"json": "HWMDM",
				"abbreviation": "HWMDM",
				"full": "Half-White Moustache DM",
				"url": "https://bad-dragon.com/",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1668537961,
		"dateLastModified": 1668537961
	},
	"monster": [
		{
			"name": "Ozahur Un'Rama",
			"source": "HWMDM",
			"page": 77,
			"size": [
				"M"
			],
			"type": {
				"type": "fiend",
				"tags": [
					"devil"
				]
			},
			"alignment": [
				"L",
				"E"
			],
			"ac": [
				{
					"ac": 31,
					"from": [
						"natural armor"
					]
				}
			],
			"hp": {
				"formula": "27d20 + 189",
				"average": 472
			},
			"speed": {
				"walk": 50,
				"fly": 90,
				"canHover": false
			},
			"str": 26,
			"dex": 22,
			"con": 24,
			"int": 16,
			"wis": 18,
			"cha": 24,
			"save": {
				"dex": "+12",
				"con": "+13",
				"wis": "+10",
				"str": "+14"
			},
			"senses": [
				"truesight 120 ft."
			],
			"passive": 20,
			"immune": [
				"cold",
				"fire",
				"poison"
			],
			"conditionImmune": [
				"blinded",
				"charmed",
				"frightened",
				"poisoned"
			],
			"languages": [
				"Abyssal",
				"Common",
				"Infernal",
				"telepathy 120 ft."
			],
			"cr": "20",
			"spellcasting": [
				{
					"name": "Innate Spellcasting",
					"headerEntries": [
						"The pit fiend's spellcasting ability is Charisma (spell save {@dc 21}). The pit fiend can innately cast the following spells, requiring no material components:"
					],
					"will": [
						"{@spell detect magic}",
						"{@spell fireball}"
					],
					"daily": {
						"3e": [
							"{@spell hold monster}",
							"{@spell wall of fire}"
						]
					},
					"ability": "cha",
					"type": "spellcasting"
				}
			],
			"trait": [
				{
					"name": "Fear Aura",
					"entries": [
						"Any creature hostile to the pit fiend that starts its turn within 20 feet of the pit fiend must make a {@dc 21} Wisdom saving throw, unless the pit fiend is {@condition incapacitated}. On a failed save, the creature is {@condition frightened} until the start of its next turn. If a creature's saving throw is successful, the creature is immune to the pit fiend's Fear Aura for the next 24 hours."
					]
				},
				{
					"name": "Magic Resistance",
					"entries": [
						"Ozahur has advantage on saving throws against spells and other magical effects."
					]
				},
				{
					"name": "Magic Weapons",
					"entries": [
						"Ozahur's weapon attacks are magical and adamantine for the purpose of bypassing resistance and immunity to nonmagical attacks. When he hits with any weapon, the weapon deals an extra 18 ({@dice 4d8}) radiant and 18 ({@damage 4d8}) fire damage (included in the weapon attacks below)."
					]
				},
				{
					"name": "Crown of Abathor",
					"entries": [
						"Whenever Ozahur is subjected to fire damage, he takes none of that damage and regain a number of hit points equal to half the damage dealt of that type."
					]
				},
				{
					"name": "Legendary Resistance (1/Day)",
					"entries": [
						"If Ozahur fails a saving throw, it can choose to succeed instead."
					]
				},
				{
					"name": "Unarmored Defense",
					"entries": [
						"Ozahur's armor class is equal to 10 plus his dexterity modifier plus his constitution modifier plus his charisma modifier."
					]
				},
				{
					"name": "Blood Frenzy",
					"entries": [
						"Ozahur has advantage on melee attack rolls against any creature that doesn't have all its hit points."
					]
				},
				{
					"name": "Siege Monster",
					"entries": [
						"Ozahur deals double damage to objects and structures."
					]
				},
				{
					"name": "Evasion",
					"entries": [
						"If the ozahur un'rama is subjected to an effect that allows it to make a Dexterity saving throw to take only half damage, the ozahur un'rama instead takes no damage if it succeeds on the saving throw, and only half damage if it fails."
					]
				},
				{
					"name": "Truth Seer",
					"entries": [
						"Ozahur has advantage on all Wisdom (Insight) checks."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"Ozahur makes four attacks."
					]
				},
				{
					"name": "Right Hand of Doom",
					"entries": [
						"{@atk mw} {@hit 14} to hit, reach 5 ft., one target. {@h}42 ({@damage 4d16 + 8}) bludgeoning damage, plus 18 ({@damage 4d8}) fire damage, plus 18 ({@damage 4d8}) radiant damage and it must make a {@dc 22} Strength saving throw or be knocked {@condition prone}.  Any magical or nonmagical barrier that is hit by the Right Hand of doom is destroyed."
					]
				},
				{
					"name": "Good Samaritan",
					"entries": [
						"{@atk rw} {@hit 12} to hit, range 900/1800 ft., one target. {@h}40 ({@damage 8d6 + 12}) piercing damage, or 24 ({@damage 4d8 + 6}) fire damage if used with both hands, plus 18 ({@damage 4d8}) radiant damage."
					]
				},
				{
					"name": "Sword of Heavens",
					"entries": [
						"{@atk mw} {@hit 14} to hit, reach 5 ft., one target. {@h}17 ({@damage 2d8 + 8}) slashing damage, or 18 ({@damage 4d8}) fire damage if used with both hands, plus 27 ({@damage 6d8}) radiant damage. Additionally an evil creature that takes this radiant damage must succeed on a {@dc 19} Constitution saving throw or be {@condition blinded} until the end of its next turn."
					]
				},
				{
					"name": "Earthquake Punch",
					"entries": [
						"Each creature on the ground within 60 feet of Ozahur must succeed on a {@dc 22} Strength saving throw. If a target is within 30 feet of Ozahur, it has disadvantage on its saving throw. On a failed save, a target takes 52 ({@damage 8d10 + 8}) bludgeoning damage and is pushed up to 20 feet and knocked {@condition prone}, or half as much damage and isn't knocked {@condition prone} on a successful one."
					]
				},
				{
					"name": "BFG {@recharge 5}",
					"entries": [
						"{@atk rw} {@hit 12} to hit, range 300/600 ft., one target. {@h}113 ({@damage 10d20 + 8}) force damage, or 18 ({@damage 4d8}) fire damage plus, plus 18 ({@damage 4d8}) radiant damage. If this damage reduces the target to 0 hit points, it is disintegrated."
					]
				}
			],
			"soundClip": {
				"type": "external",
				"url": "https://5e.tools/audio/bestiary/pit-fiend.mp3"
			},
			"traitTags": [
				"Legendary Resistances",
				"Magic Resistance",
				"Magic Weapons",
				"Siege Monster"
			],
			"senseTags": [
				"U"
			],
			"actionTags": [
				"Multiattack"
			],
			"languageTags": [
				"AB",
				"C",
				"I",
				"TP"
			],
			"damageTags": [
				"B",
				"F",
				"O",
				"P",
				"R",
				"S"
			],
			"damageTagsSpell": [
				"F"
			],
			"spellcastingTags": [
				"I"
			],
			"miscTags": [
				"MW",
				"RW",
				"AOE"
			],
			"conditionInflict": [
				"blinded",
				"frightened",
				"incapacitated",
				"prone"
			],
			"conditionInflictSpell": [
				"paralyzed"
			],
			"hasFluff": true,
			"hasFluffImages": true,
			"tokenUrl": "https://media.discordapp.net/attachments/643705817605996574/1042143450927210560/Epic_Ozahur_Token_2.png",
			"fluff": {
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/83ae4f02-f226-431e-a2d6-ee85879bd409/ddolhj9-22d63ed8-84ec-4916-a304-54e7811d4e48.jpg/v1/fill/w_1280,h_1302,q_75,strp/dnd_comic_books_hellboy_by_frostllamzon_ddolhj9-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTMwMiIsInBhdGgiOiJcL2ZcLzgzYWU0ZjAyLWYyMjYtNDMxZS1hMmQ2LWVlODU4NzliZDQwOVwvZGRvbGhqOS0yMmQ2M2VkOC04NGVjLTQ5MTYtYTMwNC01NGU3ODExZDRlNDguanBnIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.Y7mY24bYCP3l9ddR4OoT4ysZbR3MB-He7WwNT0cjNsg"
						}
					}
				]
			},
			"resist": [
				"bludgeoning",
				"necrotic",
				"piercing",
				"radiant",
				"slashing"
			],
			"skill": {
				"athletics": "+20",
				"acrobatics": "+18",
				"investigation": "+15",
				"perception": "+10",
				"arcana": "+9",
				"intimidation": "+19",
				"insight": "+16",
				"history": "+9",
				"survival": "+16",
				"stealth": "+12",
				"religion": "+15"
			},
			"bonus": [
				{
					"name": "Holy Light",
					"entries": [
						"Ozahur causes the Sword of heavens to shed bright light in a 15-foot radius and dim light for an additional 15 feet, or reduce its glow to its normal intensity. Fiends find the sword's light disconcerting and painful, even if they can't see it, and have disadvantage on attack rolls made within the weapon's radius of bright light."
					]
				}
			]
		}
	]
}
{
	"siteVersion": "1.142.0",
	"_meta": {
		"sources": [
			{
				"json": "UlucaiDM",
				"abbreviation": "ULDM",
				"full": "Ulucai DM",
				"url": "",
				"authors": [
					"Ulucai"
				],
				"convertedBy": [
					"Ulucai"
				]
			}
		],
		"dateAdded": 1638160128,
		"dateLastModified": 1638160128
	},
	"monster": [
		{
			"name": "Ruka Khaosa",
			"shortName": "Monk",
			"source": "UlucaiDM",
			"size": "M",
			"type": {
				"type": "humanoid",
				"tags": [
					"dragonborn"
				]
			},
			"alignment": [
				"L",
				"E"
			],
			"ac": [
				{
					"ac": 25,
					"from": [
						"unarmored defense"
					]
				}
			],
			"hp": {
				"formula": "25d8 + 125",
				"average": 237
			},
			"speed": {
				"walk": 60,
				"climb": 60,
				"swim": 60,
				"fly": 120,
				"canHover": false
			},
			"str": 20,
			"dex": 26,
			"con": 20,
			"int": 18,
			"wis": 24,
			"cha": 20,
			"save": {
				"str": "+11",
				"dex": "+14",
				"con": "+11",
				"wis": "+13",
				"int": "+10",
				"cha": "+11"
			},
			"skill": {
				"acrobatics": "+14",
				"history": "+10",
				"religion": "+10",
				"stealth": "+14",
				"perception": "+13"
			},
			"senses": [
				"darkvision 60 ft."
			],
			"passive": 23,
			"immune": [
				"cold",
				"poison"
			],
			"conditionImmune": [
				{
					"conditionImmune": [
						"charmed",
						"frightened",
						"poisoned"
					],
					"note": "(and Diseases)"
				}
			],
			"languages": [
				"All languages"
			],
			"cr": "18",
			"trait": [
				{
					"name": "Evasion",
					"entries": [
						"If the sun monk is subjected to an effect that allows it to make a Dexterity saving throw to take only half damage, the sun monk instead takes no damage if it succeeds on the saving throw, and only half damage if it fails."
					]
				},
				{
					"name": "Step of the Wind",
					"entries": [
						"The monk can take the Disengage or Dash actions as a bonus action."
					]
				},
				{
					"name": "Flurry of Blows",
					"entries": [
						"The monk can use his bonus action to makes two unarmed strikes."
					]
				},
				{
					"name": "Cold Absorption",
					"entries": [
						"Whenever the monk is subjected to cold damage, it takes no damage and instead regains a number of hit points equal to the cold damage dealt."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"The Monk makes three unarmed strikes and uses his quivering palm (if available)."
					]
				},
				{
					"name": "Unarmed Strike",
					"entries": [
						"{@atk mw} {@hit 14} to hit, reach 5 ft., one target. {@h}19 ({@damage 2d10 + 8}) bludgeoning damage. If the target is a creature, the monk can cause one of the following effects:",
						"The creature must succeed on a {@dc 22} Strength saving throw or drop one item it is holding (monk's choice).",
						"The creature must succeed on a {@dc 22} Strength saving throw or be pushed 15 feet away from the monk.",
						"The creature must succeed on a {@dc 22} Dexterity saving throw or be knocked {@condition prone}.",
						"The creature must succeed on a {@dc 22} Constitution saving throw or be {@condition stunned} until the start of the monk's next turn."
					]
				},
				{
					"name": "Soul Catching",
					"entries": [
						"{@atk mw} {@hit 14} to hit, reach 5 ft., one target. {@h}19 ({@damage 2d10 + 8}) bludgeoning damage, plus 11 ({@damage 2d10}) force damage. Alternatively, instead of regaining hit points in this way, Ruka can choose to gain advantage on one attack roll, ability check, or saving throw he make before the end of his next turn"
					]
				},
				{
					"name": "Dragon Strike {@recharge 6}",
					"entries": [
						"When the monk hits a creature with an unarmed strike it can force the target to make a {@dc 20} Constitution saving throw. On a failed save, the target is reduced to 0 hit points. On a successful save, the target takes 55 ({@damage 10d10}) necrotic damage."
					]
				},
				{
					"name": "Wholeness of Body (Recharges after a Long Rest).",
					"entries": [
						"The monk regains 60 hit points."
					]
				},
				{
					"name": "Cold Breath {@recharge 5}",
					"entries": [
						"Ruka exhales an icy blast in a 20-foot cone. Each creature in that area must make a {@dc 19} Constitution saving throw, taking 42 ({@damage 12d6}) cold damage on a failed save, or half as much damage on a successful one."
					]
				}
			],
			"reaction": [
				{
					"name": "Deflect Missile",
					"entries": [
						"In response to being hit by a ranged weapon attack, the monk deflects the missile. The damage it takes from the attack is reduced by {@dice 1d10 + 25}. If the damage is reduced to 0, the monk catches the missile if it's small enough to hold in one hand and the monk has a hand free."
					]
				}
			],
			"tokenUrl": "https://i.imgur.com/9WSyfAL.png",
			"senseTags": [
				"D"
			],
			"actionTags": [
				"Breath Weapon",
				"Multiattack"
			],
			"damageTags": [
				"B",
				"O",
				"N",
				"C"
			],
			"miscTags": [
				"MW",
				"AOE"
			],
			"conditionInflict": [
				"prone",
				"stunned"
			],
			"fluff": {
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.pinimg.com/564x/8d/55/22/8d5522ddb065d335b884265e24fa8491.jpg"
						}
					}
				]
			},
			"resist": [],
			"traitTags": [
				"Damage Absorption"
			]
		}
	]
}
{
	"siteVersion": "1.144.0",
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1638968084,
		"dateLastModified": 1638968084
	},
	"monster": [
		{
			"name": "Skorost",
			"source": "Lolncio",
			"page": 183,
			"size": "M",
			"type": {
				"type": "humanoid",
				"tags": [
					"dragonborn"
				]
			},
			"alignment": [
				"L",
				"E"
			],
			"ac": [
				{
					"ac": 22,
					"condition": "(Draconic Scale Male)"
				}
			],
			"hp": {
				"formula": "30d8 + 120",
				"average": 255
			},
			"speed": {
				"walk": 40,
				"climb": 40
			},
			"str": 20,
			"dex": 22,
			"con": 18,
			"int": 18,
			"wis": 15,
			"cha": 18,
			"save": {
				"dex": "+12",
				"con": "+10",
				"cha": "+10"
			},
			"skill": {
				"acrobatics": "+12",
				"athletics": "+11",
				"perception": "+8",
				"stealth": "+12"
			},
			"senses": [
				"darkvision 120 ft."
			],
			"passive": 18,
			"cr": "18",
			"spellcasting": [
				{
					"name": "Spellcasting",
					"headerEntries": [
						"The dragonborn is a 11th-level spellcaster. Its spellcasting ability is Intelligence (spell save {@dc 18}, {@hit 10} to hit with spell attacks). It has the following wizard spells prepared:"
					],
					"spells": {
						"0": {
							"spells": [
								"{@spell mage hand}",
								"{@spell message}",
								"{@spell poison spray}",
								"{@spell ray of frost}",
								"{@spell shocking grasp}"
							]
						},
						"1": {
							"spells": [
								"{@spell armor of Agathys}",
								"{@spell mage armor}",
								"{@spell magic missile}",
								"{@spell shield}"
							],
							"slots": 4
						},
						"2": {
							"spells": [
								"{@spell gust of wind}",
								"{@spell invisibility}",
								"{@spell misty step}",
								"{@spell shatter}"
							],
							"slots": 3
						},
						"3": {
							"spells": [
								"{@spell counterspell}",
								"{@spell haste}",
								"{@spell protection from energy}"
							],
							"slots": 3
						},
						"4": {
							"spells": [
								"{@spell dimension door}",
								"{@spell ice storm}"
							],
							"slots": 3
						},
						"5": {
							"spells": [
								"{@spell cone of cold}"
							],
							"slots": 2
						},
						"6": {
							"spells": [
								"{@spell chain lightning}",
								"{@spell Tenser's transformation|XGE}"
							],
							"slots": 2
						}
					},
					"ability": "int",
					"type": "spellcasting"
				}
			],
			"trait": [
				{
					"name": "War Magic",
					"entries": [
						"When Skorost uses its action to cast a spell, it can make one weapon attack as a bonus action."
					]
				},
				{
					"name": "Frost Alacrity",
					"entries": [
						"While dual wielding the dragonborn can make two extra attacks as part of his attack action."
					]
				},
				{
					"name": "Armor Of Aurill",
					"entries": [
						"Whenever a creature hits the dragonborn with an attack it takes 10 cold damage."
					]
				},
				{
					"name": "Cold Aura",
					"entries": [
						"The ground in a 10-foot radius around the dragonborn is icy and is difficult terrain for creatures other than the giant. The radius moves with the dragonborn and lasts until he dismisses it (no action required) or become {@condition incapacitated}."
					]
				},
				{
					"name": "Icy Veins.",
					"entries": [
						"As a bonus action the dragonborn cools down his blood hardening his muscles. The dragonborn gains resistance to fire, bludgeoning, slashing and piercing damage but can't benefit from advantage on attack rolls. This effect lasts until the dragonborn dismisses it with a bonus action."
					]
				},
				{
					"name": "Icy Charge",
					"entries": [
						"If the skorost moves at least 15 feet straight toward a target and then hits it with its scimitar on the same turn, the target takes an extra 21 ({@damage 6d6}) slashing damage. If the target is a creature, it must succeed on a {@dc 18} Constitution saving throw or will be frezze {@condition restrained}."
					]
				},
				{
					"name": "Change Shape",
					"entries": [
						"The dragonborn magically polymorphs into a humanoid or beast that has a challenge rating no higher than its own, or back into its true form. It reverts to its true form if it dies. Any equipment it is wearing or carrying is absorbed or borne by the new form (the dragon's choice).",
						"In a new form, the dragonborn retains its alignment, hit points, Hit Dice, ability to speak, proficiencies, Legendary Resistance, lair actions, and Intelligence, Wisdom, and Charisma scores, as well as this action. Its statistics and capabilities are otherwise replaced by those of the new form, except any class features or legendary actions of that form."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"The dragonborn makes three scimitar attacks."
					]
				},
				{
					"name": "Scimitar",
					"entries": [
						"{@atk mw} {@hit 12} to hit, reach 5 ft., one target. {@h}8 ({@damage 1d6 + 5}) slashing damage plus 18 ({@damage 4d8}) cold damage. In addition, the target has disadvantage on the next saving throw it makes against a spell Skorost casts before the end of the dragonborn's next turn."
					]
				},
				{
					"name": "Icy Burst",
					"entries": [
						"The dragonborn cleave all enemies within 20 feet. Each enemy makes a {@dc 18} Dexterity saving throw suffering 45 ({@damage 10d8}) cold damage, and half as much on a successful save."
					]
				}
			],
			"soundClip": {
				"type": "external",
				"url": "https://5e.tools/audio/bestiary/drow-favored-consort.mp3"
			},
			"senseTags": [
				"SD"
			],
			"actionTags": [
				"Multiattack"
			],
			"damageTags": [
				"S",
				"C"
			],
			"spellcastingTags": [
				"CW"
			],
			"miscTags": [
				"MW",
				"AOE"
			],
			"conditionInflictSpell": [
				"invisible"
			],
			"hasFluff": true,
			"hasFluffImages": true,
			"tokenUrl": "https://5e.tools/img/MTF/Drow Favored Consort.png",
			"fluff": {
				"entries": [
					{
						"type": "entries",
						"entries": [
							{
								"type": "entries",
								"entries": [
									{
										"type": "quote",
										"entries": [
											"Many creatures enjoy torture, but the dark elves have made it into an exquisite art."
										],
										"by": "Mordenkainen"
									},
									{
										"type": "entries",
										"name": "Drow Favored Consort",
										"entries": [
											"Nearly all priestesses of {@deity Lolth|drow|mtf}, including the powerful matron mothers, take attractive drow as their consorts. Often these individuals serve no purpose beyond pleasure, breeding, or both, but sometimes consorts can gain the ear of their priestess and be relied on to provide useful advice. No position of consort is assured for long; priestesses are infamous for being fickle with their favor, which are they are especially glad to lavish on a consort who combines beauty with magical might."
										]
									}
								]
							}
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.pinimg.com/564x/d4/1b/94/d41b94efe8db74c8f70dbc73d1203247.jpg"
						}
					}
				]
			},
			"shortName": true,
			"languages": [
				"Common",
				"Draconic"
			],
			"languageTags": [
				"C",
				"DR"
			],
			"immune": [
				"cold"
			],
			"conditionImmune": [
				"charmed",
				"frightened",
				"restrained"
			],
			"resist": [
				{
					"resist": [
						"bludgeoning",
						"fire",
						"piercing",
						"slashing"
					],
					"preNote": "see below:"
				}
			],
			"environment": [
				"arctic",
				"mountain",
				"urban"
			],
			"conditionInflict": [
				"restrained"
			]
		}
	]
}
{
	"siteVersion": "1.177.1",
	"_meta": {
		"sources": [
			{
				"json": "Krakak",
				"abbreviation": "GAK",
				"full": "Krakak",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1678127530,
		"dateLastModified": 1678127530
	},
	"monster": [
		{
			"name": "Star Spawn Larva Mage",
			"source": "Krakak",
			"page": 235,
			"size": [
				"M"
			],
			"type": "aberration",
			"alignment": [
				"C",
				"E"
			],
			"ac": [
				{
					"ac": 16,
					"from": [
						"natural armor"
					]
				}
			],
			"hp": {
				"average": 168,
				"formula": "16d8 + 96"
			},
			"speed": {
				"walk": 30
			},
			"str": 17,
			"dex": 12,
			"con": 23,
			"int": 18,
			"wis": 12,
			"cha": 16,
			"save": {
				"dex": "+6",
				"wis": "+6",
				"cha": "+8"
			},
			"skill": {
				"perception": "+6",
				"acrobatics": "+6"
			},
			"senses": [
				"darkvision 60 ft."
			],
			"passive": 16,
			"resist": [
				"cold",
				{
					"resist": [
						"bludgeoning",
						"piercing",
						"slashing"
					],
					"note": "from nonmagical attacks",
					"cond": true
				}
			],
			"immune": [
				"psychic"
			],
			"conditionImmune": [
				"charmed",
				"frightened",
				"paralyzed",
				"petrified",
				"poisoned",
				"restrained"
			],
			"languages": [
				"Deep Speech"
			],
			"cr": "16",
			"spellcasting": [
				{
					"name": "Innate Spellcasting",
					"headerEntries": [
						"The larva mage's innate spellcasting ability is Charisma (spell save {@dc 16}, {@hit 8} to hit with spell attacks). It can innately cast the following spells, requiring no material components:"
					],
					"footerEntries": [
						"*3 beams, +3 bonus to each damage roll"
					],
					"will": [
						"{@spell eldritch blast}*",
						"{@spell minor illusion}"
					],
					"daily": {
						"1": [
							"{@spell call lightning}"
						],
						"3": [
							"{@spell chaos bolt|XGE}"
						]
					},
					"ability": "cha",
					"type": "spellcasting"
				}
			],
			"trait": [
				{
					"name": "Return to Worms",
					"entries": [
						"When the larva mage is reduced to 0 hit points, it breaks apart into a {@creature swarm of insects} in the same space. Unless the swarm is destroyed, the larva mage reforms from it 24 hours later."
					]
				}
			],
			"action": [
				{
					"name": "Slam",
					"entries": [
						"{@atk mw} {@hit 8} to hit, reach 10 ft., one target. {@h}7 ({@damage 1d8 + 3}) bludgeoning damage, and the target must succeed on a {@dc 15} Constitution saving throw or be {@condition poisoned} until the end of its next turn."
					]
				},
				{
					"name": "Plague of Worms {@recharge}",
					"entries": [
						"Each creature other than a star spawn within 10 feet of the larva mage must make a {@dc 14} Dexterity saving throw. On a failure the target takes 13 ({@damage 3d8}) necrotic damage and is {@condition blinded} and {@condition restrained} by masses of swarming worms. The affected creature takes 13 ({@damage 3d8}) necrotic damage at the start of each of the larva mage's turns. The creature can repeat the saving throw at the end of each of its turns, ending the effect on itself on a success."
					]
				},
				{
					"name": "Eldrich Blast",
					"entries": [
						"{@atk rw} {@hit 8} to hit, range 120/120 ft., one target. {@h}9 ({@damage 1d10 + 3}) force damage. The mage can choose to pull the target creature up to 15 feet closer."
					]
				}
			],
			"reaction": [
				{
					"name": "Feed on Weakness",
					"entries": [
						"When a creature within 20 feet of the larva mage fails a saving throw, the larva mage gains 10 temporary hit points."
					]
				}
			],
			"legendary": [
				{
					"name": "Cantrip (Costs 2 Actions)",
					"entries": [
						"The larva mage casts one cantrip."
					]
				},
				{
					"name": "Slam (Costs 2 Actions)",
					"entries": [
						"The larva mage makes one slam attack."
					]
				},
				{
					"name": "Feed (Costs 3 Actions)",
					"entries": [
						"Each creature {@condition restrained} by the larva mage's Plague of Worms takes 13 ({@damage 3d8}) necrotic damage, and the larva mage gains 6 temporary hit points."
					]
				}
			],
			"environment": [
				"mountain"
			],
			"soundClip": {
				"type": "external",
				"url": "https://5e.tools/audio/bestiary/star-spawn-larva-mage.mp3"
			},
			"senseTags": [
				"D"
			],
			"languageTags": [
				"DS"
			],
			"damageTags": [
				"B",
				"N",
				"O"
			],
			"damageTagsSpell": [
				"A",
				"C",
				"F",
				"I",
				"L",
				"O",
				"T",
				"Y"
			],
			"spellcastingTags": [
				"I"
			],
			"miscTags": [
				"MW",
				"RCH",
				"RW"
			],
			"conditionInflict": [
				"blinded",
				"poisoned",
				"restrained"
			],
			"conditionInflictSpell": [
				"charmed"
			],
			"hasFluff": true,
			"hasFluffImages": true,
			"tokenUrl": "https://5e.tools/img/MTF/Star Spawn Larva Mage.png",
			"fluff": {
				"name": "Star Spawn Larva Mage",
				"source": "MTF",
				"images": [
					{
						"type": "image",
						"href": {
							"type": "internal",
							"path": "bestiary/MTF/Star Spawn Larva Mage.jpg"
						}
					}
				],
				"entries": [
					{
						"type": "entries",
						"entries": [
							"A larva mage is a nightmarish combination of a mortal body and otherworldly substance. When a powerful cultist of a wormlike entity such as Kyuss or Kezef—usually a warlock or other spellcaster—contacts the comet-borne emissary of an Elder Evil, the emissary can merge with a mortal consciousness to create a larva mage. None of the original cultist's personality survives the transformation, so what emerges is wholly alien."
						]
					},
					{
						"type": "section",
						"name": "Star Spawn",
						"entries": [
							{
								"type": "quote",
								"entries": [
									"Stars don't spawn these creatures. Such beautiful lights shouldn't be blamed for such balefulness."
								],
								"by": "Mordenkainen"
							},
							"The Material Plane represents only one small part of the multiverse. Beyond the best-known planes of existence lie realms that are lethal to mortal life. Some are so hostile that even a moment's contact with such a place is enough to plunge a mortal mind into madness. Yet beings do exist that are native to these realms: beings that are eternally hungering, searching, warring, sometimes dreaming. These Elder Evils are far older than most of the mortal races and always horrific to humanoid minds.",
							"However much they might desire to enter and dominate the Material Plane, the Elder Evils are unable or unwilling to leave their realms. Some are imprisoned in their dimensions by external forces, some are inextricably bound to their home realities, and others simply can't find any way out.",
							{
								"name": "Heralds of Doom",
								"type": "entries",
								"entries": [
									"The creatures known as star spawn are the heralds, servants, foot soldiers, and lieutenants of the Elder Evils, capable of taking on forms that can journey to the Material Plane. They arrive most often in the wake of a comet—or perhaps such a phenomenon merely signals that star spawn are in the vicinity and available for communication. When the signs are right, warlocks and cultists hasten to gather together, read aloud their blasphemous texts, and conduct the mind-searing rituals that guide the blazing star spawn into the world."
								]
							},
							{
								"type": "quote",
								"entries": [
									"The cultists who blaspheme reality by calling out to Elder Evils often speak of a Far Realm from which these entities hail. In truth, there is no one place or space from which they come. There is the multiverse of things that are, and there is the multiverse of things that shouldn't be."
								],
								"by": "Mordenkainen"
							},
							{
								"name": "Elder Evil Blessings",
								"type": "entries",
								"entries": [
									"Disciples of certain Elder Evils can bestow supernatural gifts on those who serve that cult, including star spawn. The following powers are unique to specific cults; typically a creature has only one.",
									{
										"type": "list",
										"columns": 3,
										"items": [
											"{@cult Cult of Atropus, the World Born Dead|MTF}",
											"{@cult Cult of Borem, of the Lake of Boiling Mud|MTF}",
											"{@cult Cult of Haask, the Voice of Hargut|MTF}",
											"{@cult Cult of Tharizdun, the Chained God|MTF}",
											"{@cult Cult of Tyranthraxus, the Flamed One|MTF}"
										]
									}
								]
							}
						]
					}
				]
			}
		}
	]
}
{
	"siteVersion": "1.136.0",
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1632393320,
		"dateLastModified": 1632393320
	},
	"monster": [
		{
			"name": "The Gunslinger",
			"source": "Lolncio",
			"page": 201,
			"size": "M",
			"type": "humanoid",
			"alignment": [
				"N"
			],
			"ac": [
				{
					"ac": 24,
					"from": [
						"renegade's cloak"
					]
				}
			],
			"hp": {
				"formula": "20d8 + 100",
				"average": 190
			},
			"speed": {
				"walk": 40,
				"climb": 40
			},
			"str": 12,
			"dex": 20,
			"con": 20,
			"int": 18,
			"wis": 18,
			"cha": 22,
			"save": {
				"dex": "+10",
				"str": "+6",
				"int": "+9"
			},
			"skill": {
				"acrobatics": "+10",
				"deception": "+16",
				"investigation": "+9",
				"perception": "+14",
				"persuasion": "+11",
				"sleight of hand": "+15",
				"stealth": "+15",
				"history": "+9",
				"survival": "+9"
			},
			"senses": [
				"darkvision 120 ft.",
				"blindsight 30 ft."
			],
			"passive": 24,
			"cr": "13",
			"trait": [
				{
					"name": "Gunslinger",
					"entries": [
						"Being within 5 feet of a hostile creature or attacking at long range doesn't impose disadvantage on gunslinger ranged attack rolls with a gun. In addition, he ignores half cover and three-quarters cover when making ranged attacks."
					]
				},
				{
					"name": "Hunter's Intuition.",
					"entries": [
						"When gunslinger make a Wisdom (Perception) or Wisdom (Survival) check, he can roll a {@dice d4} and add the number rolled to the ability check."
					]
				},
				{
					"name": "Finder's Magic.",
					"entries": [
						"The gunslinger can cast the {@spell hunter's mark} spell with this trait. And, he can also cast the locate object spell with it. Once gunslinger cast either spell with this trait, he can't cast that spell with it again until finish a long rest."
					]
				},
				{
					"name": "Relentless Endurance.",
					"entries": [
						"When gunslinger are reduced to 0 hit points but not killed outright, he drop to 1 hit point instead. gunslinger can't use this feature again until finish a long rest."
					]
				},
				{
					"name": "Dead Eye.",
					"entries": [
						"When gunslinger score a critical hit with a ranged weapon attack, he can it maximizes the damage from this attack."
					]
				},
				{
					"name": "Nimble Escape.",
					"entries": [
						"The gunslinger allison can take the {@action Disengage} or {@action Hide} action as a bonus action on each of its turns."
					]
				},
				{
					"name": "Fast Hands",
					"entries": [
						"The gunslinger can reload his weapon and drop bombs with his bonus action."
					]
				},
				{
					"name": "Skirmisher",
					"entries": [
						"The gunslinger can move up to half his speed as a reaction when an enemy approaches. This move does not provoke attacks of opportunity."
					]
				},
				{
					"name": "Avoidance",
					"entries": [
						"If the gunslinger is subjected to an effect that allows it to make a saving throw to only take half damage, it instead takes no damage if it succeeds on the saving throw, and only half damage if it fails."
					]
				},
				{
					"name": "Eagle's Eye",
					"entries": [
						"As a bonus action, the gunslinger can add {@dice 1d10} to its next attack or damage roll with a End Of Line. or Shotgun."
					]
				},
				{
					"name": "Magic Weapons",
					"entries": [
						"The gunslinger's weapon attacks are magical."
					]
				},
				{
					"name": "Special Equipment.",
					"entries": [
						"The gunslinger wears a white {@item Mantle of Spell Resistance}, {@item Dagger of Blindsight} "
					]
				}
			],
			"senseTags": [
				"SD",
				"B"
			],
			"damageTags": [
				"P",
				"B"
			],
			"tokenUrl": "https://i.imgur.com/mpcrLLF.png",
			"fluff": {
				"entries": [
					{
						"type": "entries",
						"entries": [
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"entries": []
									}
								]
							}
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://cdn.discordapp.com/attachments/720360860974841968/889316983080886372/5d1a0696c1560fdbc16f789855ff81e8.png"
						}
					}
				]
			},
			"languages": [
				"Common",
				"Infernal",
				"Thieves' cant,",
				"Elvish"
			],
			"languageTags": [
				"C",
				"I",
				"TC",
				"E"
			],
			"environment": [
				"urban"
			],
			"action": [
				{
					"name": "Multiattack.",
					"entries": [
						"O gunslinger pode realizar dois ataques com armas a distancia, três ataques com armas corpo a corpo leves e com propriedade acuidade.",
						"Ações : End Of Line, Shotgun, Rifle Butt."
					]
				},
				{
					"name": "Automatic Pistol",
					"entries": [
						"{@atk rw} {@hit 10} to hit, range 50/150 ft., one target. {@h}19 ({@damage 4d6 + 5}) piercing damage.",
						"***Dead Eye.*** ({@damage 53}) piercing damage."
					]
				},
				{
					"name": "Hunting Rifle",
					"entries": [
						"{@atk rw} {@hit 10} to hit, range 80/240 ft., one target. {@h}16 ({@damage 3d10 + 5}) piercing damage.",
						"***Dead Eye.*** ({@damage 65}) piercing damage."
					]
				},
				{
					"name": "Dagger of Blindsight",
					"entries": [
						"{@atk mw,rw} {@hit 10} to hit, reach 5 ft. or range 20/60 ft., one target. {@h}5 ({@damage 1d4 + 3}) piercing damage in melee, or 5 ({@damage 1d4 + 3}) piercing damage at range.",
						"This rare magic item requires attunement. A creature attuned to it gains blindsight out to a range of 30 feet. The dagger has a saw-toothed edge and a black pearl nested in its pommel."
					]
				},
				{
					"name": "End Of Line",
					"entries": [
						"{@atk rw} {@hit 10} to hit, range 240/240 ft., one target. {@h}38 ({@damage 6d10 + 5}) piercing damage.",
						"***Dead Eye.*** ({@damage 125}) piercing damage."
					]
				},
				{
					"name": "Shotgun",
					"entries": [
						"{@atk rw} {@hit 10} to hit, range 15/60 ft., one target. {@h}34 ({@damage 3d12 + 15}) piercing damage.",
						"If the target is a creature, it must succeed on a {@dc 17} Strength saving throw or be knocked {@condition prone}.",
						"***Dead Eye.*** ({@damage 87}) piercing damage."
					]
				},
				{
					"name": "Rifle Butt",
					"entries": [
						"{@atk mw} {@hit 10} to hit, reach 5 ft., one target. {@h}10 ({@damage 2d6 + 3}) bludgeoning damage.",
						"Whenever gunslinger hits a creature with this attacks, he can impose one of the following effects on that target.",
						"It must succeed on a CD 17 Dexterity saving throw or be knocked {@condition prone}.",
						"It must make a CD 17 Strength saving throw. If it fails, gunslinger can push it up to 15 feet away from he.",
						"It can't take reactions until the end of gunslinger next turn."
					]
				},
				{
					"name": "It's High Noon {@recharge}",
					"entries": [
						"The gunslinger gives up all his moves to lock the crosshairs on a target. The gunslinger's next attack is considered a critical hit."
					]
				}
			],
			"miscTags": [
				"RW",
				"MW",
				"THW",
				"AOE"
			],
			"bonus": [
				{
					"name": "Bomb {@recharge 5}",
					"entries": [
						"Clay lights this bomb and drops it at a point up to 60 feet away. Each creature within 5 feet of that spot must make a {@dc 17} Dexterity saving throw or take 21 [[{@dice 6d6}]] fire damage."
					]
				}
			],
			"conditionInflict": [
				"prone"
			],
			"shortName": true,
			"reaction": [
				{
					"name": "Mobile",
					"entries": [
						"When the gunslinger is hit by a magical or physical attack, he can use the reaction and reduce the damage by 40. When using this reaction, he can roll up to 20 feet. After moving, in the same reaction, he can make an attack."
					]
				}
			],
			"traitTags": [
				"Magic Weapons"
			]
		}
	]
}
{
	"siteVersion": "1.136.0",
	"_meta": {
		"sources": [
			{
				"json": "UlucaiDM",
				"abbreviation": "ULDM",
				"full": "Ulucai DM",
				"url": "",
				"authors": [
					"Ulucai"
				],
				"convertedBy": [
					"Ulucai"
				]
			}
		],
		"dateAdded": 1633355592,
		"dateLastModified": 1633355592
	},
	"monster": [
		{
			"name": "The Sorcerer",
			"shortName": "Sorcerer",
			"source": "UlucaiDM",
			"size": "M",
			"type": "humanoid",
			"alignment": [
				"N"
			],
			"ac": [
				{
					"ac": 18,
					"from": [
						"Shadow Garb"
					]
				}
			],
			"hp": {
				"formula": "20d6 + 100",
				"average": 170
			},
			"speed": {
				"walk": 30
			},
			"str": 11,
			"dex": 15,
			"con": 20,
			"int": 17,
			"wis": 16,
			"cha": 24,
			"save": {
				"cha": "+13",
				"wis": "+9",
				"con": "+11"
			},
			"skill": {
				"arcana": "+9",
				"insight": "+9",
				"perception": "+9",
				"investigation": "+9",
				"persuasion": "+13",
				"intimidation": "+13"
			},
			"senses": [
				"darkvision 120 ft."
			],
			"passive": 19,
			"resist": [
				{
					"resist": [
						"bludgeoning",
						"piercing",
						"slashing"
					]
				},
				{
					"resist": [
						"acid",
						"cold",
						"fire",
						"force",
						"lightning",
						"poison",
						"psychic",
						"thunder"
					]
				}
			],
			"conditionImmune": [
				"charmed",
				"frightened",
				"unconscious"
			],
			"languages": [
				"Common",
				"Celestial",
				"Infernal",
				"Elvish",
				"Primordial"
			],
			"cr": "18",
			"spellcasting": [
				{
					"name": "Subtle Spellcasting",
					"headerEntries": [
						"The sorcerer is a 20th-level spellcaster. Its spellcasting ability is Charisma (spell save {@dc 21 },  {@hit 13} to hit with spell attacks) and doesn't require verbal or somatic components."
					],
					"spells": {
						"0": {
							"spells": [
								"{@spell green-flame blade|TCE}"
							]
						},
						"1": {
							"spells": [
								"{@spell absorb elements|XGE}",
								"{@spell shield}"
							],
							"slots": 4
						},
						"2": {
							"spells": [
								"{@spell invisibility}",
								"{@spell phantasmal force}"
							],
							"slots": 3
						},
						"3": {
							"spells": [
								"{@spell dispel magic}",
								"{@spell hypnotic pattern}",
								"{@spell slow}"
							],
							"slots": 3
						},
						"4": {
							"spells": [
								"{@spell dimension door}"
							],
							"slots": 3
						},
						"6": {
							"spells": [
								"{@spell true seeing}"
							],
							"slots": 2
						},
						"7": {
							"spells": [
								"{@spell plane shift}"
							],
							"slots": 2
						},
						"8": {
							"spells": [
								"{@spell power word stun}"
							],
							"slots": 1
						},
						"9": {
							"spells": [
								"{@spell weird}"
							],
							"slots": 1
						}
					},
					"ability": "cha",
					"type": "spellcasting"
				}
			],
			"trait": [
				{
					"name": "Shadow Form",
					"entries": [
						"The sorcerer can move through other creatures and objects as if they were difficult terrain, taking 5 force damage if he end its turn inside an object."
					]
				},
				{
					"name": "Cantrip Mastery",
					"entries": [
						"When the sorcerer casts a cantrip that can target only one creature it can target a second one. Additionally  the sorcerer can cast any cantrip with casting time of action as a bonus action."
					]
				},
				{
					"name": "Quickened Spell (3/day)",
					"entries": [
						"When the sorcerer casts a spell that has a casting time of 1 action, he can spend a bonus action for this casting."
					]
				},
				{
					"name": "Heightened Spell (3/day)",
					"entries": [
						"When the sorcerer casts a spell that forces a creature to make a saving throw to resist its effects, he can give one target of the spell disadvantage on its first saving throw made against the spell."
					]
				},
				{
					"name": "Magic Resistance",
					"entries": [
						"The sorcerer has advantage on saving throws against spells and other magical effects."
					]
				},
				{
					"name": "Manifest Echo",
					"entries": [
						"The Sorcerer can use a bonus action to magically manifest an echo of yourself in an unoccupied space you can see within 15 feet of he. This echo is a magical, translucent, gray image of The Sorcerer.",
						"* As a bonus action, The Sorcerer can teleport, magically swapping places with your echo at a cost of 15 feet of your movement, regardless of the distance between the two of you.",
						"* When The Sorcerer take the Attack action on your turn, any attack he make with that action can originate from your space or the echo's space. The Sorcerer make this choice for each attack.",
						"* When a creature that The Sorcerer can see within 5 feet of your echo moves at least 5 feet away from it, he can use your reaction to make an opportunity attack against that creature as if you were in the echo's space."
					]
				},
				{
					"name": "Devil's Sight",
					"entries": [
						"Magical darkness doesn't impede the sorcerer's darkvision."
					]
				}
			],
			"traitTags": [
				"Devil's Sight",
				"Magic Resistance"
			],
			"senseTags": [
				"SD"
			],
			"languageTags": [
				"C",
				"CE",
				"I",
				"E",
				"P"
			],
			"spellcastingTags": [
				"CS"
			],
			"action": [
				{
					"name": "2° Forma.",
					"entries": [
						"O feiticeiro conjura {@spell Eldritch Blast} , nessa forma, ganha movimento de voo igual seu movimento terrestre."
					]
				},
				{
					"name": "3° Forma",
					"entries": [
						"{@atk mw} {@hit 13} to hit, reach 15 ft., one target. {@h}54 ({@damage 12d8}) slashing damage, plus 10 ({@damage 4d4}) fire damage, plus 10 ({@damage 4d4}) necrotic damage."
					]
				},
				{
					"name": "4° Forma",
					"entries": [
						"O feiticeiro conjura {@spell Darkness}, enquanto permanecer dentro da area da escuridão magica, as criaturas recebem os efeitos da magias {@spell Cloudkill}"
					]
				},
				{
					"name": "5° Forma Kage",
					"entries": [
						"{@atk mw} {@hit 13} to hit, reach 5 ft., one target. {@h}14 ({@damage 2d8 + 7}) slashing damage, plus 9 ({@damage 2d8}) fire damage, plus 9 ({@damage 2d8}) necrotic damage, plus 9 ({@damage 2d8}) lightning damage."
					]
				},
				{
					"name": "6° Forma",
					"entries": [
						"Se foca em utilizar magias de ilusão e encantamento. Ver magias da lista de Subtle Spellcasting. "
					]
				},
				{
					"name": "7° Forma",
					"entries": [
						"Atraves das almas em sofriemento que vagam pelo vale, o feiticeiro invoca {@dice 2d4 - 1} {@creature Hell Hound} "
					]
				},
				{
					"name": "Green-Flame Blade",
					"entries": [
						"{@atk mw} {@hit 13} to hit, reach 5 ft., one target. {@h}16 ({@damage 2d8 + 7}) slashing damage, plus 13 ({@damage 3d8}) fire damage."
					]
				},
				{
					"name": "Eldritch Blast",
					"entries": [
						"{@atk rw} {@hit 13} to hit, range 120/120 ft., one target. {@h}20 ({@damage 3d8 + 7}) force damage, plus 7 ({@damage 3d4}) necrotic damage.",
						"**Três raios. Ao acertar, o alvo perde 10ft de movimento e é empurado 10ft para trás.**"
					]
				}
			],
			"damageTags": [
				"S",
				"F",
				"N",
				"L",
				"O"
			],
			"miscTags": [
				"MW",
				"RCH",
				"RW"
			],
			"reaction": [
				{
					"name": "Reclaim Potential",
					"entries": [
						"The Sorcerer've learned to absorb the fleeting magic of your echo. When an echo of yours is destroyed by taking damage, he can gain a number of temporary hit points equal to {@dice 2d6} + your Constitution modifier, provided The Sorcerer don't already have temporary hit points.",
						"The Sorcerer can use this feature a number of times equal to he Constitution modifier (a minimum of once). The Sorcerer regain all expended uses when you finish a long rest."
					]
				}
			],
			"bonus": [
				{
					"name": "Supāku",
					"entries": [
						"The Sorcerer conjura com a ação bonus {@spell Green-Flame Blade}"
					]
				}
			]
		}
	]
}
{
	"siteVersion": "1.176.1",
	"_meta": {
		"sources": [
			{
				"json": "FoTR",
				"abbreviation": "FoTR",
				"full": "Firearms of The Realms",
				"color": "7ba130",
				"authors": [
					"Yonael"
				],
				"convertedBy": [
					"cadowtin"
				],
				"url": "https://www.gmbinder.com/share/-LaQ-9bfLBNNBm-hoMee",
				"version": "0.1"
			}
		],
		"dateAdded": 1676580548,
		"dateLastModified": 1676580548
	},
	"monster": [
		{
			"name": "Wolfwere",
			"source": "FoTR",
			"page": 155,
			"size": [
				"M"
			],
			"type": {
				"type": "humanoid",
				"tags": [
					"beast",
					"shapechanger"
				]
			},
			"alignment": [
				"C",
				"E"
			],
			"ac": [
				{
					"ac": 12,
					"condition": "while in humanoid form"
				},
				{
					"ac": 13,
					"condition": "while in wolf/hybrid form"
				}
			],
			"hp": {
				"average": 55,
				"formula": "10d8 + 10"
			},
			"speed": {
				"walk": {
					"number": 30,
					"condition": "(40 ft. in dire wolf form)"
				}
			},
			"str": 18,
			"dex": 14,
			"con": 12,
			"int": 10,
			"wis": 8,
			"cha": 15,
			"skill": {
				"perception": "+4"
			},
			"passive": 13,
			"immune": [
				{
					"immune": [
						"bludgeoning",
						"piercing",
						"slashing"
					],
					"note": "from nonmagical weapons that aren't iron",
					"cond": true
				}
			],
			"languages": [
				"Common (can't speak in wolf form)"
			],
			"cr": "4",
			"trait": [
				{
					"name": "Shapechanger",
					"entries": [
						"The wolfwere can use its action to polymorph into a wolf-humanoid hybrid or into a human or elf, or back into its true form, which is a dire wolf. Its statistics, other than its AC, are the same in each form. Any equipment it is wearing or carrying isn't transformed. It reverts to its true form if it dies."
					]
				},
				{
					"name": "Keen Hearing and Smell",
					"entries": [
						"The wolfwere has advantage on Wisdom (Perception) checks that rely on hearing or smell."
					]
				},
				{
					"name": "Pack Tactics",
					"entries": [
						"The wolfwere has advantage on an attack roll against a creature if at least one of the wolfwere's allies is within 5 ft. of the creature and the ally isn't {@condition incapacitated}."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack (Hybrid form only)",
					"entries": [
						"The wolfwere makes two attacks: one with its bite and one with its claws."
					]
				},
				{
					"name": "Longsword (Humanoid form only)",
					"entries": [
						"{@atk mw} {@hit 7} to hit, reach 5 ft., one target. {@h}9 ({@damage 1d8 + 4}) slashing damage or 10 ({@damage 1d10 + 5}) slashing damage if used with two hands."
					]
				},
				{
					"name": "Bite (Wolf or Hybrid form only)",
					"entries": [
						"{@atk mw} {@hit 7} to hit, reach 5 ft., one target. {@h}11 ({@damage 2d6 + 4}) piercing damage. If the target is a creature, it must succeed on a {@dc 14} Strength saving throw or be knocked {@condition prone}."
					]
				},
				{
					"name": "Claws (Hybrid form only)",
					"entries": [
						"{@atk mw} {@hit 7} to hit, reach 5 ft., one target. {@h}9 ({@damage 2d4 + 4}) slashing damage."
					]
				},
				{
					"name": "Lethargic Song (Humanoid form only)",
					"entries": [
						"The wolfwere plays a magical melody on an instrument. Every humanoid within 200 ft. of the wolfwere that can hear the melody must succeed on a {@dc 13} Wisdom saving throw or be {@spell slow||slowed} for 10 minutes. A creature can repeat the saving throw at the end of each of its turns. If a creature's saving throw is successful, the effect ends on it. A target that successfully saves is immune to this wolfwere's melody for the next 24 hours."
					]
				}
			],
			"traitTags": [
				"Keen Senses",
				"Pack Tactics",
				"Shapechanger"
			],
			"actionTags": [
				"Multiattack"
			],
			"languageTags": [
				"C",
				"CS"
			],
			"damageTags": [
				"P",
				"S"
			],
			"miscTags": [
				"MW"
			],
			"conditionInflict": [
				"prone"
			],
			"hasFluff": true,
			"hasFluffImages": true,
			"tokenUrl": "https://5e.tools/img/MaBJoV/Wolfwere.png",
			"fluff": {
				"name": "Wolfwere",
				"source": "MaBJoV",
				"entries": [
					{
						"type": "quote",
						"entries": [
							"I remember being told that wolfweres were nature's perfect predator. Boo disagreed with this though. There is nothing more fearsome than a pissed off space hamster!"
						],
						"by": "MINSC"
					},
					{
						"type": "quote",
						"entries": [
							"Shhhh... close your eyes.",
							"Dream of starlight, dream of sights unseen, and I shall join you soon."
						],
						"by": "Wolfwere"
					},
					"Wolfweres are shapeshifters that have the natural form of a large wolf but can transform at will into both humanoid and bipedal hybrid shapes. These hateful creatures are much more intelligent than a normal wolf and use this preternatural cunning to hunt their favorite prey: humans. Although some believe them to be the offspring of werewolves and normal wolves—and this may very well be their origin—wolfweres are their own species and their form of lycanthropy is not a transmissible curse or disease. Like werewolves, wolfweres are repelled by wolfsbane but are vulnerable to iron rather than silver weapons.",
					{
						"type": "entries",
						"entries": [
							{
								"type": "entries",
								"entries": [
									{
										"type": "entries",
										"name": "Strange Packs",
										"entries": [
											"Although some wolfweres are solitary, others choose to stay in familial bands. However, they most often run in packs of normal wolves or worgs. Wolfweres are able to influence and command these beasts, making them much more vicious and bolder. Rarely, a wolfwere may choose to blend in with human society. Wolfweres never associate with werewolves, as the two share a mutual hatred and will attack each other unprovoked."
										]
									},
									{
										"type": "entries",
										"name": "Myriad Forms",
										"entries": [
											"A wolfwere's natural form is similar in size and appearance to that of a dire wolf. In combat, they usually shift into a hybrid form, which is able to both bite and use weapons with its human-like hands. To trick stronger prey, a wolfwere dons a charismatic human shape. Unlike werewolves, wolfweres have no single humanoid form to revert to. Instead, a wolfwere can transform into any humanoid shape it desires, though they almost universally choose ones with great physical beauty. Wolfweres have the ability to sense what their particular prey would find attractive and assume a seductive disguise. Wolfweres have less control over their appearance when they involuntarily transform under a new moon, though they usually assume a shape they have taken on recently."
										]
									},
									{
										"type": "entries",
										"name": "A Sedating Melody",
										"entries": [
											"While in their humanoid forms, wolfweres have the ability to sing a song that induces a lethargy in their prey that is similar to a {@spell slow} spell. Many wolfweres play stringed instruments and pose as bards to avoid arousing suspicion while they work their charms."
										]
									}
								]
							}
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "internal",
							"path": "bestiary/MaBJoV/Wolfwere.webp"
						}
					}
				]
			}
		}
	]
}
{
	"siteVersion": "1.136.0",
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1633116657,
		"dateLastModified": 1633116657
	},
	"monster": [
		{
			"name": "Yeenoghu's Hand",
			"source": "Lolncio",
			"page": 47,
			"size": "M",
			"type": "undead",
			"alignment": [
				"L",
				"E"
			],
			"ac": [
				{
					"ac": 22,
					"from": [
						"{@item plate armor|phb}",
						"{@item shield|phb}"
					]
				}
			],
			"hp": {
				"average": 180,
				"formula": "19d8 + 95"
			},
			"speed": {
				"walk": 40,
				"fly": 20,
				"canHover": false
			},
			"str": 20,
			"dex": 11,
			"con": 20,
			"int": 12,
			"wis": 16,
			"cha": 18,
			"save": {
				"cha": "+10",
				"con": "+11",
				"str": "+11",
				"wis": "+9"
			},
			"senses": [
				"darkvision 120 ft."
			],
			"passive": 19,
			"immune": [
				"necrotic",
				"poison"
			],
			"conditionImmune": [
				"charmed",
				"exhaustion",
				"frightened",
				"poisoned"
			],
			"languages": [
				"Abyssal",
				"Common"
			],
			"cr": "17",
			"spellcasting": [
				{
					"name": "Spellcasting",
					"headerEntries": [
						"The death knight is a 19th-level spellcaster. Its spellcasting ability is Charisma (spell save {@dc 18}, {@hit 10} to hit with spell attacks). It has the following paladin spells prepared:"
					],
					"spells": {
						"1": {
							"slots": 4,
							"spells": [
								"{@spell command}",
								"{@spell compelled duel}",
								"{@spell searing smite}"
							]
						},
						"2": {
							"slots": 3,
							"spells": [
								"{@spell hold person}",
								"{@spell magic weapon}"
							]
						},
						"3": {
							"slots": 3,
							"spells": [
								"{@spell dispel magic}",
								"{@spell elemental weapon}"
							]
						},
						"4": {
							"slots": 3,
							"spells": [
								"{@spell banishment}",
								"{@spell staggering smite}"
							]
						},
						"5": {
							"slots": 2,
							"spells": [
								"{@spell destructive wave} (necrotic)"
							]
						}
					},
					"ability": "cha",
					"type": "spellcasting"
				}
			],
			"trait": [
				{
					"name": "Magic Resistance",
					"entries": [
						"The death knight has advantage on saving throws against spells and other magical effects."
					]
				},
				{
					"name": "Marshal Undead",
					"entries": [
						"Unless the death knight is {@condition incapacitated}, it and undead creatures of its choice within 60 feet of it have advantage on saving throws against features that turn undead."
					]
				},
				{
					"name": "Necrotic Absorption",
					"entries": [
						"Whenever the yeenoghu's hand is subjected to necrotic damage, it takes no damage and instead regains a number of hit points equal to the necrotic damage dealt."
					]
				},
				{
					"name": "Legendary Resistance (3/Day)",
					"entries": [
						"If the yeenoghu's hand fails a saving throw, it can choose to succeed instead."
					]
				},
				{
					"name": "Brute",
					"entries": [
						"A melee weapon deals one extra die of its damage when the yeenoghu's hand hits with it."
					]
				},
				{
					"name": "Rampage",
					"entries": [
						"When the yeenoghu's hand reduces a creature to 0 hit points with a melee attack on its turn, the yeenoghu's hand can take a bonus action to move up to half its speed and make another attack."
					]
				},
				{
					"name": "Limited Magic Immunity",
					"entries": [
						"The yeenoghu's hand can't be affected or detected by spells of 4th level or lower unless it wishes to be."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"The death knight makes three longsword attacks."
					]
				},
				{
					"name": "Longsword",
					"entries": [
						"{@atk mw} {@hit 11} to hit, reach 5 ft., one target. {@h}14 ({@damage 2d8 + 5}) slashing damage, or 15 ({@damage 2d10 + 5}) slashing damage if used with two hands, plus 22 ({@damage 5d8}) necrotic damage."
					]
				},
				{
					"name": "Hellfire Orb (1/Day)",
					"entries": [
						"The death knight hurls a magical ball of fire that explodes at a point it can see within 120 feet of it. Each creature in a 20-foot-radius sphere centered on that point must make a {@dc 18} Dexterity saving throw. The sphere spreads around corners. A creature takes 35 ({@damage 10d6}) fire damage and 35 ({@damage 10d6}) necrotic damage on a failed save, or half as much damage on a successful one."
					]
				},
				{
					"name": "Brutalize",
					"entries": [
						"{@atk mw} {@hit 11} to hit, reach 5 ft., one target. {@h}36 ({@damage 7d8 + 5}) slashing damage, plus 22 ({@damage 5d8}) necrotic damage."
					]
				}
			],
			"reaction": [
				{
					"name": "Parry",
					"entries": [
						"The death knight adds 6 to its AC against one melee attack that would hit it. To do so, the death knight must see the attacker and be wielding a melee weapon."
					]
				},
				{
					"name": "Brutalize",
					"entries": [
						"The yeenoghu's hand use Brutalize Attack."
					]
				}
			],
			"soundClip": {
				"type": "external",
				"url": "https://5e.tools/audio/bestiary/death-knight.mp3"
			},
			"traitTags": [
				"Brute",
				"Damage Absorption",
				"Legendary Resistances",
				"Magic Resistance",
				"Rampage"
			],
			"senseTags": [
				"SD"
			],
			"actionTags": [
				"Multiattack",
				"Parry"
			],
			"languageTags": [
				"AB",
				"C"
			],
			"damageTags": [
				"S",
				"N",
				"F"
			],
			"spellcastingTags": [
				"CP"
			],
			"miscTags": [
				"MW",
				"AOE"
			],
			"conditionInflictSpell": [
				"incapacitated",
				"paralyzed",
				"prone"
			],
			"hasFluff": true,
			"hasFluffImages": true,
			"tokenUrl": "https://5e.tools/img/MM/Death Knight.png",
			"fluff": {
				"name": "Death Knight",
				"source": "MM",
				"entries": [
					{
						"type": "entries",
						"entries": [
							{
								"type": "entries",
								"entries": [
									"When a paladin that falls from grace dies without seeking atonement, dark powers can transform the once-mortal knight into a hateful undead creature. A death knight is a skeletal warrior clad in fearsome plate armor. Beneath its helmet, one can see the knight's skull with malevolent pinpoints of light burning in its eye sockets.",
									{
										"name": "Eldritch Power",
										"type": "entries",
										"entries": [
											"The death knight retains the ability to cast divine spells. However, no death knight can use its magic to heal. A death knight also attracts and commands lesser undead, although death knights that serve powerful fiends might have fiendish followers instead. Death knights often use warhorse skeletons and nightmares as mounts."
										]
									},
									{
										"name": "Immortal Until Redeemed",
										"type": "entries",
										"entries": [
											"A death knight can arise anew even after it has been destroyed. Only when it atones for a life of wickedness or finds redemption can it finally escape its undead purgatory and truly perish."
										]
									},
									{
										"name": "Undead Nature",
										"type": "entries",
										"entries": [
											"A death knight doesn't require air, food, drink, or sleep."
										]
									},
									{
										"type": "inset",
										"name": "Lord Soth",
										"entries": [
											"Lord Soth began his fall from grace with an act of heroism, saving an elf named Isolde from an ogre. Soth and Isolde fell in love, but Soth was already married. He had a servant dispose of his wife and was charged with murder, but fled with Isolde. When his castle fell under siege, he prayed for guidance and was told that he must atone for his misdeeds by completing a quest, but growing fears about Isolde's fidelity caused him to abandon his quest. Because his mission was not accomplished, a great cataclysm swept the land. When Isolde gave birth to a son, Soth refused to believe that the child was his and slew them both. All were incinerated in a fire that swept through the castle, yet Soth would find no rest in death, becoming a death knight."
										]
									}
								]
							}
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "internal",
							"path": "bestiary/MM/Death Knight.jpg"
						}
					}
				]
			},
			"skill": {
				"survival": "+9",
				"perception": "+9",
				"athletics": "+17"
			}
		}
	]
}
{
	"siteVersion": "1.144.0",
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1638986560,
		"dateLastModified": 1638986560
	},
	"monster": [
		{
			"name": "Yun Kazaha",
			"source": "Lolncio",
			"page": 128,
			"size": "M",
			"type": {
				"type": "humanoid",
				"tags": [
					"half elf"
				]
			},
			"alignment": [
				"N"
			],
			"ac": [
				{
					"ac": 17,
					"condition": "(natural armor)"
				}
			],
			"hp": {
				"average": 71,
				"formula": "11d8 + 22"
			},
			"speed": {
				"walk": 40
			},
			"str": 12,
			"dex": 18,
			"con": 14,
			"int": 14,
			"wis": 16,
			"cha": 19,
			"save": {
				"dex": "+7",
				"con": "+5",
				"wis": "+6"
			},
			"skill": {
				"perception": "+6",
				"stealth": "+10",
				"sleight of hand": "+7",
				"persuasion": "+7",
				"investigation": "+5"
			},
			"senses": [
				"darkvision 60 ft."
			],
			"passive": 16,
			"languages": [
				"Elvish",
				"Undercommon",
				"Infernal",
				"Sylvan",
				"Common"
			],
			"cr": "5",
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"Yun makes two katana attacks, or one chidori "
					]
				},
				{
					"name": "Katana",
					"entries": [
						"{@atk mw} {@hit 7} to hit, reach 5 ft., one target. {@h}11 ({@damage 2d6 + 4}) slashing damage."
					]
				},
				{
					"name": "Chidori",
					"entries": [
						"{@atk mw} {@hit 7} to hit, reach 5 ft., one target. {@h}11 ({@damage 2d6 + 4}) slashing damage, plus 4 ({@damage 1d8}) thunder damage."
					]
				},
				{
					"name": "Wind Strike",
					"entries": [
						"{@atk mw} {@hit 7} to hit, reach 5 ft., one target. {@h}7 ({@damage 1d6 + 4}) bludgeoning damage.  If the target is a creature, the monk can cause one of the following effects:",
						"The creature must succeed on a {@dc 14} Strength saving throw or drop one item it is holding (monk's choice).",
						"The creature must succeed on a {@dc 14} Strength saving throw or be pushed 15 feet away from the yun",
						"The creature must succeed on a {@dc 14} Dexterity saving throw or be knocked {@condition prone}.",
						"The creature must succeed on a {@dc 14} Constitution saving throw or be {@condition stunned} until the start of the monk's next turn."
					]
				},
				{
					"name": "Enerugī - エネルギー",
					"entries": [
						"{@atk mw} {@hit 7} to hit, reach 10 ft., one target. {@h}7 ({@damage 1d6 + 4}) force damage."
					]
				}
			],
			"reaction": [
				{
					"name": "Parry",
					"entries": [
						"Yun adds 3 to its AC against one melee attack that would hit it. To do so, she must see the attacker and be wielding a melee weapon."
					]
				},
				{
					"name": "Gift of the wind.",
					"entries": [
						"When Yun take damage from a creature that is within 10 feet of her, she can use your reaction to emanate telekinetic energy. The creature that dealt damage to her must make a Strength saving throw {@dc 14} ",
						"On a failed save, the creature takes [[{@dice 2d8}]] force damage and is pushed up to 10 feet away from you. On a successful save, the creature takes half as much damage and isn't pushed. Yun can use this reaction a number of times equal to her proficiency bonus, and Yun regain all expended uses when you finish a long rest."
					]
				}
			],
			"soundClip": {
				"type": "external",
				"url": "https://5e.tools/audio/bestiary/drow-elite-warrior.mp3"
			},
			"senseTags": [
				"D"
			],
			"actionTags": [
				"Multiattack",
				"Parry"
			],
			"languageTags": [
				"E",
				"U",
				"I",
				"S",
				"C"
			],
			"damageTags": [
				"S",
				"T",
				"B",
				"O"
			],
			"hasFluff": true,
			"hasFluffImages": true,
			"fluff": {
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.pinimg.com/564x/29/8d/84/298d84148fdb62ae233ac0569508308f.jpg"
						}
					}
				]
			},
			"shortName": "Yun",
			"level": 5,
			"resist": [
				"necrotic",
				"radiant"
			],
			"trait": [
				{
					"name": "Fey Ancestry",
					"entries": [
						"The yun has advantage on saving throws against being {@condition charmed}, and magic can't put the yun to sleep."
					]
				},
				{
					"name": "Moon Blood",
					"entries": [
						"Yun knows {@spell booming blade} spell. "
					]
				},
				{
					"name": "Unleash The Astral Self",
					"entries": [
						"With one action, Yun releases her astral self, when in this form, she gains the following benefits:",
						"* You can use your Wisdom modifier in place of your Strength modifier when making Strength checks and Strength saving throws.",
						"* You can use the spectral arms to make unarmed strikes.",
						"When you make an unarmed strike with the arms on your turn, your reach for it is 5 feet greater than normal.",
						"* The unarmed strikes you make with the arms can use your Wisdom modifier in place of your Strength or Dexterity modifier for the attack and damage rolls, and their damage type is force."
					]
				},
				{
					"name": "Moon Blades",
					"entries": [
						"A melee weapon deals one extra die of its damage when the yun hits with it."
					]
				}
			],
			"traitTags": [
				"Fey Ancestry"
			],
			"bonus": [
				{
					"name": "Flurry of Blows",
					"entries": [
						"Yun can make two unarmed attacks with his bonus action."
					]
				},
				{
					"name": "Step of the Wind",
					"entries": [
						"Yun can take the Disengage or Dash actions as a bonus action."
					]
				}
			],
			"miscTags": [
				"MW",
				"RCH"
			],
			"conditionInflict": [
				"prone",
				"stunned"
			],
			"environment": [
				"urban"
			],
			"isNpc": true,
			"tokenUrl": "https://cdn.discordapp.com/attachments/557321504220643349/917503402932596766/yuuuuuuu.png"
		}
	]
}
{
	"siteVersion": "1.145.1",
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1640178393,
		"dateLastModified": 1640178393
	},
	"monster": [
		{
			"name": "Yuthar",
			"isNamedCreature": true,
			"source": "Lolncio",
			"page": 42,
			"size": "M",
			"type": {
				"type": "humanoid",
				"tags": [
					"dwarf"
				]
			},
			"alignment": [
				"L",
				"G"
			],
			"ac": [
				{
					"ac": 18,
					"from": [
						"{@item breastplate|PHB}",
						"{@item shield|PHB}"
					]
				}
			],
			"hp": {
				"average": 135,
				"formula": "18d8 + 54"
			},
			"speed": {
				"walk": 30
			},
			"str": 14,
			"dex": 14,
			"con": 16,
			"int": 13,
			"wis": 20,
			"cha": 14,
			"save": {
				"con": "+8",
				"wis": "+10",
				"cha": "+7"
			},
			"skill": {
				"insight": "+10",
				"medicine": "+15",
				"persuasion": "+7",
				"religion": "+11"
			},
			"senses": [
				"darkvision 60 ft."
			],
			"passive": 15,
			"resist": [
				"necrotic",
				"poison"
			],
			"languages": [
				"Celestial",
				"Common,",
				"Dwarvish"
			],
			"cr": "13",
			"spellcasting": [
				{
					"name": "Spellcasting",
					"headerEntries": [
						"Yuthar is a 18th-level spellcaster. His spellcasting ability is Wisdom (spell save {@dc 18}, {@hit 10} to hit with spell attacks). Naes has the following cleric spells prepared:"
					],
					"footerEntries": [
						"* Naes casts these spells on himself before combat"
					],
					"spells": {
						"0": {
							"spells": [
								"{@spell light}",
								"{@spell sacred flame}",
								"{@spell thaumaturgy}"
							]
						},
						"1": {
							"spells": [
								"{@spell cure wounds}",
								"{@spell guiding bolt}",
								"{@spell sanctuary}"
							],
							"slots": 4
						},
						"2": {
							"spells": [
								"{@spell lesser restoration}",
								"{@spell spiritual weapon}"
							],
							"slots": 3
						},
						"3": {
							"spells": [
								"{@spell fireball}",
								"{@spell spirit guardians}"
							],
							"slots": 2
						},
						"4": {
							"spells": [
								"{@spell death ward}*",
								"{@spell wall of fire}"
							],
							"slots": 3
						},
						"5": {
							"spells": [
								"{@spell antilife shell}",
								"{@spell flame strike}"
							],
							"slots": 2
						},
						"6": {
							"spells": [
								"{@spell blade barrier}"
							],
							"slots": 1
						},
						"7": {
							"spells": [
								"{@spell divine word}"
							],
							"slots": 1
						},
						"8": {
							"spells": [
								"{@spell holy aura}"
							],
							"slots": 1
						},
						"9": {
							"spells": [
								"{@spell mass heal}"
							],
							"slots": 1
						}
					},
					"ability": "wis",
					"type": "spellcasting"
				}
			],
			"action": [
				{
					"name": "Mace",
					"entries": [
						"{@atk mw} {@hit 7} to hit, reach 5 ft., one target. {@h}5 ({@damage 1d6 + 2}) bludgeoning damage."
					]
				},
				{
					"name": "Radiant Beauty of Sune",
					"entries": [
						"Yuthar dispels any magical darkness within 30 feet of him. Additionally, each hostile creature within 30 feet of Yuthar must make a Constitution saving throw at {@dc 18}. A creature takes radiant damage equal to 30 on a failed saving throw, half damage on a successful one. A creature that has total cover from Yuthar is not affected."
					]
				},
				{
					"name": "Corona of Beauty",
					"entries": [
						"Yuthar activates an aura of sunlight that lasts for 1 minute or until he dismisses it using an action. He emits bright light in a 60-foot radius and dim light 30 feet beyond that. His enemies in the bright light have disadvantage on saving throws against any spell that deals fire or radiant damage."
					]
				}
			],
			"senseTags": [
				"D"
			],
			"languageTags": [
				"CE",
				"C",
				"D"
			],
			"damageTags": [
				"B"
			],
			"spellcastingTags": [
				"CC"
			],
			"miscTags": [
				"MW",
				"AOE"
			],
			"conditionInflictSpell": [
				"blinded",
				"deafened",
				"stunned"
			],
			"hasFluff": true,
			"hasFluffImages": true,
			"tokenUrl": "https://media.discordapp.net/attachments/557321504220643349/923199565421772870/token_4.png",
			"fluff": {
				"entries": [
					"O Prefeito é conhecido como yuthar um anão que a muito tempo foi um grande guerreiro e clérigo nos campos de batalha, porem aparentemente perdeu sua fé nas divindades e decidiu ser ele mesmo a esperança as pessoas, mesmo tendo perdido a sua fé aparentemente ele consegue usar magias sagradas, que sem pensar duas vezes ele usa para ajudar os assolados"
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://s3.amazonaws.com/files.d20.io/images/71899946/KIcDf82FMImzXNisAVBJzQ/max.jpg"
						}
					}
				]
			}
		}
	]
}
{
	"siteVersion": "1.154.0",
	"_meta": {
		"sources": [
			{
				"json": "LolncioGM",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1651017640,
		"dateLastModified": 1651017640
	},
	"monster": [
		{
			"name": "Archfiend Pazuzu",
			"source": "LolncioGM",
			"page": 345,
			"basicRules": true,
			"size": [
				"V"
			],
			"type": {
				"type": "fiend",
				"tags": [
					"Demon"
				]
			},
			"alignment": [
				"E"
			],
			"ac": [
				{
					"ac": 31,
					"from": [
						"natural armor"
					]
				}
			],
			"hp": {
				"formula": "45d10 + 405",
				"average": 855
			},
			"speed": {
				"walk": 40,
				"fly": 240,
				"canHover": false
			},
			"str": 28,
			"dex": 32,
			"con": 28,
			"int": 30,
			"wis": 30,
			"cha": 30,
			"passive": 32,
			"languages": [
				"All,",
				"telepathy 500 ft."
			],
			"cr": "30",
			"environment": [
				"arctic",
				"coastal",
				"desert",
				"forest",
				"grassland",
				"hill",
				"urban"
			],
			"soundClip": {
				"type": "external",
				"url": "https://5e.tools/audio/bestiary/commoner.mp3"
			},
			"damageTags": [
				"S",
				"A",
				"I",
				"Y",
				"P"
			],
			"hasFluff": true,
			"tokenUrl": "https://media.discordapp.net/attachments/557321504220643349/965571334761484318/pazuzas.png",
			"shortName": true,
			"senses": [
				"truesight 240 ft."
			],
			"senseTags": [
				"U"
			],
			"languageTags": [
				"TP"
			],
			"save": {
				"con": "+21",
				"wis": "+22",
				"cha": "+22",
				"int": "+22",
				"str": "+12",
				"dex": "+23"
			},
			"skill": {
				"arcana": "+28",
				"acrobatics": "+29",
				"athletics": "+18",
				"perception": "+22",
				"persuasion": "+19",
				"sleight of hand": "+23",
				"stealth": "+23"
			},
			"resist": [
				{
					"resist": [],
					"preNote": "cold, fire, lightning, poison; bludgeoning, piercing, and slashing from a +3 or lesser magical weapons"
				}
			],
			"immune": [
				{
					"immune": [],
					"preNote": "lightning, poison; refer to Demon Princes entry."
				}
			],
			"conditionImmune": [
				{
					"conditionImmune": [],
					"preNote": "charmed, exhaustion, frightened, petrified, poisoned"
				}
			],
			"action": [
				{
					"name": "Multiattack.",
					"entries": [
						"Pazuzu makes to two sword of chaos or four claw attacks."
					]
				},
				{
					"name": "Sword of Chaos.",
					"entries": [
						"{@atk mw} {@hit 22} to hit, reach 10 ft., one target. {@h}59 ({@damage 12d6 + 17}) damage, plus 45 ({@damage 10d8}) damage from one of the following types (@damage {@dice d6}): fire, cold, lightning, thunder, acid, or poison. damage."
					]
				},
				{
					"name": "Claw",
					"entries": [
						"{@atk mw} {@hit 23} to hit, reach 10 ft., one target. {@h}38 ({@damage 5d6+17}) slashing damage and the creature must make a {@dc 22} Constitution save or be inflicted with filth fever as in the spell ({@spell contagion})"
					]
				},
				{
					"name": "Breathweapon.",
					"entries": [
						"Pazuzu exhales poisonous vapor in a 180-foot cone. Each creature in the cone must make a {@dc 27} Dexterity saving throw, taking 105 ({@damage 10d20}) acid damage and 105 ({@damage 10d20}) poison damage on a failed save, or half as much damage on a successful one."
					]
				},
				{
					"name": "Soul Corruption.",
					"entries": [
						"{@atk rw} {@hit 20} to hit, range 480/480 ft., one target. {@h}76 ({@damage 10d12 + 11}) psychic damage and the creature must make a {@dc 26} Wisdom save or be {@condition stunned}."
					]
				},
				{
					"name": "Summon Demon (1/short-rest).",
					"entries": [
						"Pazuzu magically summons (100% chance of success) ({@damage 2d10+6}) vrocks."
					]
				}
			],
			"miscTags": [
				"MW",
				"RCH",
				"AOE",
				"RW"
			],
			"reaction": [
				{
					"name": "Vengeful Talons.",
					"entries": [
						"When Pazuzu is hit by a ranged attach it can make a flyby attack, see Legendary Actions."
					]
				}
			],
			"legendaryHeader": [
				"Pazuzu can take 3 legendary actions, choosing from the options below. Only one legendary action can be used at a time and only at the end of another creature’s turn. If Pazuzu has unspent legendary actions at the end of the round, it may spend and immediately use its remaining legendary actions. Pazuzu regains spent legendary",
				"actions at the start of its turn."
			],
			"legendary": [
				{
					"name": "Attack.",
					"entries": [
						"Pazuzu makes a sword of chaos, a soul corruption, or two claw attacks."
					]
				},
				{
					"name": "Coercion.",
					"entries": [
						"A creature Pazuzu can see must make a {@dc 27} Charisma saving throw. On a failed save, the creature must use its reaction, to make a weapon attack or cast a cantrip against a target of Pazuzu’s choice. If the attack fails to hit the intended target the coerced creature takes 31 ({@damage 8d12}) psychic damage."
					]
				},
				{
					"name": "Flyby Attack.",
					"entries": [
						"Pazuzu can fly its speed and make two claw attack. Pazuzu’s movement doesn’t provoke opportunity attacks."
					]
				},
				{
					"name": "Regenerate.",
					"entries": [
						"Pazuzu regenerates 30 hit points."
					]
				},
				{
					"name": "Innate Spellcasting (1/round).",
					"entries": [
						"Pazuzu casts a spell."
					]
				},
				{
					"name": "Plague of Abyssal Locusts (Cost 2 actions).",
					"entries": [
						"Pazuzu conjures a swarm of demonic biting insects that fill up to a 40-foot-radius sphere centered on Pazuzu. The sphere spreads around corners, is considered difficult terrain, and provides half cover to creatures within the sphere, except from Pazuzu. The sphere remains until the end of Pazuzu’s next turn unless it spends 1 legendary action to maintain the sphere. Creatures of Pazuzu’s choice that start their turn in the sphere must make a {@dc 27} Constitution saving throw, taking 55 ({@damage 10d10}) piercing damage on a failed save or half as much damage on a successful one."
					]
				}
			],
			"trait": [
				{
					"name": "Aura of Servile Avians.",
					"entries": [
						"All evil-aligned creatures with a natural fly speed that can see Pazuzu or are within 240 feet of it feel a bond of attraction to Pazuzu. Such creatures must make a {@dc 27} Wisdom",
						"saving throw or be {@condition charmed} by Pazuzu while the creature can see Pazuzu or is within 240 feet of it."
					]
				},
				{
					"name": "Banishment.",
					"entries": [
						"When Pazuzu drops to 0 hit points its body explodes into a swarm of black ravens that fly off in random directions and disappear after 10 rounds. Pazuzu’s body is destroyed, but its",
						"essence travels back to its domain of Torremor and it is unable to physical form for a time."
					]
				},
				{
					"name": "Legendary Resistance (4/Day).",
					"entries": [
						"If a demon prince fails a saving throw, it can choose to succeed instead."
					]
				},
				{
					"name": "Limited Magic Immunity.",
					"entries": [
						"Unless Pazuzu wishes to be affected, it is immune to spells of 6th level or lower and has advantage on savings throws of all spells and magical effects."
					]
				},
				{
					"name": "Magic Weapons.",
					"entries": [
						"A demon prince’s weapon attacks are treated as +4 magical weapons."
					]
				},
				{
					"name": "Shapechanger.",
					"entries": [
						"Pazuzu can use its action to polymorph into a form that resembles a large or medium humanoid or back to its true form. Aside from its size, its statistics are the same in each form. Any equipment it is wearing or carrying is not transformed."
					]
				}
			],
			"spellcasting": [
				{
					"name": "Innate Spellcasting.",
					"headerEntries": [
						"Refer to Demon Princes entry. In addition, Pazuzu’s spell casting ability is Charisma (spell save {@dc 27}, +22 to hit with attack spells. Pazuzu can innately cast the following spells,",
						"requiring no material components:"
					],
					"will": [
						"{@spell charm person}",
						"{@spell fire bolt} (17th level)"
					],
					"daily": {
						"1": [
							"{@spell wish}"
						],
						"3": [
							"{@spell dominate person}",
							"{@spell insect plague}",
							"{@spell plane shift} (only itself and willing creatures)"
						]
					},
					"ability": "cha",
					"type": "spellcasting"
				}
			],
			"spellcastingTags": [
				"I"
			],
			"fluff": {
				"entries": [
					"Abyss Lord."
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://i.pinimg.com/originals/fe/6d/42/fe6d42dada513c0f3f8f0f324b50ba3f.jpg"
						}
					}
				]
			}
		}
	]
}
{
	"_meta": {
		"sources": [
			{
				"json": "UlucaiDM",
				"abbreviation": "ULDM",
				"full": "Ulucai's Degenerate Mind",
				"url": "",
				"authors": [
					"Ulucai"
				],
				"convertedBy": [
					"Ulucai"
				]
			}
		],
		"dateAdded": 1616721133,
		"dateLastModified": 1616721133
	},
	"monster": [
		{
			"name": "Autolycus, King of Thieves",
			"shortName": "Autolycus",
			"source": "UlucaiDM",
			"page": "157",
			"size": "M",
			"type": {
				"type": "humanoid",
				"tags": [
					"human"
				]
			},
			"alignment": [
				"N"
			],
			"ac": [
				{
					"ac": 23,
					"from": [
						"{@item +3 studded leather armor}"
					]
				}
			],
			"hp": {
				"formula": "30d8 + 120",
				"average": 255
			},
			"speed": {
				"walk": 50,
				"climb": 50
			},
			"str": 15,
			"dex": 27,
			"con": 18,
			"int": 18,
			"wis": 20,
			"cha": 18,
			"save": {
				"dex": "+16",
				"con": "+12",
				"int": "+12",
				"wis": "+13",
				"cha": "+12"
			},
			"skill": {
				"acrobatics": "+24",
				"arcana": "+20",
				"athletics": "+18",
				"deception": "+20",
				"history": "+12",
				"insight": "+21",
				"investigation": "+20",
				"nature": "+12",
				"stealth": "+34",
				"survival": "+13",
				"religion": "+12",
				"persuasion": "+20",
				"performance": "+20",
				"perception": "+21",
				"sleight of hand": "+24"
			},
			"senses": [
				"truesight 120 ft.",
				"blindsight 30 ft."
			],
			"passive": 31,
			"resist": [
				{
					"resist": [],
					"preNote": "All damage"
				}
			],
			"immune": [
				{
					"immune": [
						"bludgeoning",
						"piercing",
						"slashing"
					],
					"note": "from non-magical weapons"
				}
			],
			"languages": [
				"All languages"
			],
			"cr": "26",
			"spellcasting": [
				{
					"name": "Innate Spellcasting",
					"headerEntries": [
						"Autolycus spellcasting ability is Intelligence (spell save {@dc 27}). It can innately cast the following spells, requiring no material components:"
					],
					"will": [
						"{@spell alter self}",
						"{@spell arcane lock}",
						"{@spell disguise self}",
						"{@spell find the path}",
						"{@spell find traps}",
						"{@spell knock}",
						"{@spell mage hand}"
					],
					"ability": "int",
					"type": "spellcasting"
				}
			],
			"trait": [
				{
					"name": "Limited Divination Immunity",
					"entries": [
						"The Autolycus can't be affected, detected by divination magic unless it wishes to be. Including natural truesight."
					]
				},
				{
					"name": "Silent walker",
					"entries": [
						"Autolycus is always under the effect of a {@spell Pass without Trace} spell."
					]
				},
				{
					"name": "King's Hoard",
					"entries": [
						"As a bonus action. Autolycus can send any object he carrying to a demiplane. He can also retrieve an object previously sent there."
					]
				},
				{
					"name": "Reliable",
					"entries": [
						"Autolycus has advantage on all ability checks."
					]
				},
				{
					"name": "Honour Among Thieves",
					"entries": [
						"If a creature tries to steal or take a item belonging to Autolycus, it must first succeed on a {@dc 27} Wisdom saving throw. If it fails it feels demotivated to do so and give up."
					]
				}
			],
			"action": [
				{
					"name": "Identity Theft",
					"entries": [
						"Autolycus tries to steal a large or smaller creature's appearance. A creature within 5 feet must succeed a {@dc 27} charisma saving throw or Autolycus becomes the splitting image of the target, with the same voice, smell, weight, etc. Until he dismisses this  effect (no action required)."
					]
				},
				{
					"name": "Speed Snatch",
					"entries": [
						"Autolycus tries to steal a creature's speed. A creature within 5 feet must succeed a {@dc 27} charisma saving throw or have one of its special speed stolen (climbing, swimming, borrowing) for 1 minute or until Autolycus snatches another creature's speed.",
						"The creature's speed becomes 0 and Autolycus adds the stolen speed to his own."
					]
				},
				{
					"name": "Steal Senses",
					"entries": [
						"Autolycus tries to steal a creature's senses. A creature within 5 feet must succeed a {@dc 27} charisma saving throw or have one of its senses stolen.",
						"The target loses one of its senses permanently. It can be restored by a {@spell greater restoration} spell.",
						"Autolycus gains the creature's senses for 24 hours."
					]
				},
				{
					"name": "Lifesteal",
					"entries": [
						"Autolycus tries to steal a creature's temporary hit points. A creature within 5 feet must succeed a {@dc 27} charisma saving throw or lose all of its temporary hit points.",
						"Autolycus gains temporary hit points equal to the lost by the target."
					]
				}
			],
			"reaction": [
				{
					"name": "Spell Theft",
					"entries": [
						"Immediately after a creature casts a spell that targets or include Autolycus or any other creature it can see, he can use his reaction to force the caster to make a {@dc 27} saving throw with its spellcasting ability modifier. If it fails the spell is negated, the slot is spent and the creature loses the knowledge of the spell for 8 hours, becoming unable to cast it.",
						"Autolycus can cast this spell once without spending a spell slot."
					]
				}
			],
			"senseTags": [
				"B",
				"U"
			],
			"spellcastingTags": [
				"I"
			]
		}
	]
}
{
	"siteVersion": "1.141.2",
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1636055201,
		"dateLastModified": 1636055201
	},
	"monster": [
		{
			"name": "Aya Blue Hand.",
			"source": "Lolncio",
			"page": 249,
			"size": "M",
			"type": "humanoid",
			"ac": [
				{
					"ac": 17,
					"from": [
						"mage armor"
					]
				}
			],
			"hp": {
				"formula": "12d8 + 36",
				"average": 90
			},
			"speed": {
				"walk": 30
			},
			"str": 12,
			"dex": 18,
			"con": 16,
			"int": 15,
			"wis": 18,
			"cha": 20,
			"save": {
				"int": "+6",
				"wis": "+8",
				"cha": "+9"
			},
			"skill": {
				"acrobatics": "+8",
				"athletics": "+5",
				"insight": "+8",
				"perception": "+8"
			},
			"senses": [
				"truesight 30 ft."
			],
			"passive": 18,
			"conditionImmune": [
				"charmed",
				"frightened"
			],
			"languages": [
				"any two languages",
				"telepathy 120 ft."
			],
			"cr": "12",
			"spellcasting": [
				{
					"name": "Innate Spellcasting (Psionics)",
					"headerEntries": [
						"The inquisitor casts one of the following spells, requiring no components and using Wisdom as the spellcasting ability (spell save {@dc 15}):"
					],
					"will": [
						"{@spell dispel magic}",
						"{@spell mage armor}",
						"{@spell sending}"
					],
					"daily": {
						"1e": [
							"{@spell conjure elemental}",
							"{@spell dimension door}",
							"{@spell fly}",
							"{@spell greater invisibility}",
							"{@spell spirit shroud|TCE}"
						]
					},
					"ability": "wis",
					"type": "spellcasting"
				},
				{
					"name": "Spellcasting",
					"headerEntries": [
						"The warlock is a 12th-level spellcaster. Its spellcasting ability is Charisma (spell save {@dc 17}, {@hit 9} to hit with spell attacks). It regains its expended spell slots when it finishes a short or long rest. It knows the following warlock spells:"
					],
					"spells": {
						"0": {
							"spells": [
								"{@spell booming blade|TCE}",
								"{@spell eldritch blast} (Três raios, +5 de dano, empurra 10ft.)",
								"{@spell green-flame blade|TCE}",
								"{@spell prestidigitation}",
								"{@spell toll the dead|XGE}"
							]
						},
						"5": {
							"spells": [
								"{@spell banishment}",
								"{@spell blinding smite}",
								"{@spell blur}",
								"{@spell hellish rebuke}",
								"{@spell mirror image}",
								"{@spell protection from evil and good}"
							],
							"slots": 0,
							"lower": 1
						}
					},
					"ability": "cha",
					"type": "spellcasting"
				}
			],
			"trait": [
				{
					"name": "Metabolic Control",
					"entries": [
						"At the start of each of its turns, the inquisitor regains 10 hit points and can end one condition on itself, provided the inquisitor has at least 1 hit point."
					]
				},
				{
					"name": "Armor of Hexes",
					"entries": [
						"Aya hex grows more powerful. If the target cursed by her Hexblade's Curse hits you with an attack roll, she can use her reaction to roll a {@dice d6}. On a 4 or higher, the attack instead misses Aya, regardless of its roll."
					]
				},
				{
					"name": "Eldrich Invocation´s",
					"entries": [
						"*Agonizing Blast",
						"*Repelling Blast",
						"*Thirsting Blade",
						"*Lifedrinker",
						"*Minions of Chaos",
						"*One with Shadows"
					]
				},
				{
					"name": "One with Shadows",
					"entries": [
						"Aya can use her action to be {@condition invisible} until she move or take an action or a reaction."
					]
				}
			],
			"action": [
				{
					"name": "Force Strike {@recharge 6}",
					"entries": [
						"Aya slashes around him in a 20-foot area, all creatures must make a dexterity saving throw {@dc 17}, or take ({@damage 7d6}) force damage, objects automatically fail and Aya can choose to destroy them if they are not magic."
					]
				},
				{
					"name": "Booming Blade",
					"entries": [
						"{@atk mw} {@hit 9} to hit, reach 5 ft., one target. {@h}9 ({@damage 1d8 + 5}) slashing damage, plus 9 ({@damage 2d8}) thunder damage."
					]
				},
				{
					"name": "Green Flame Blade",
					"entries": [
						"{@atk mw} {@hit 9} to hit, reach 5 ft., one target. {@h}9 ({@damage 1d8 + 5}) slashing damage, plus 9 ({@damage 2d8}) fire damage.",
						"5 feet around the target 14 ({@damage 2d8 + 5}) fire damage"
					]
				},
				{
					"name": "Multiattack",
					"entries": [
						"The inquisitor attacks twice with its Silver Longsword. After it hits or misses with an attack, the inquisitor can teleport up to 30 feet to an unoccupied space it can see. Or she cast Eldrich Blast.",
						"Action *Force Strike.*, *Booming Blade & Green Flame Blade.*"
					]
				},
				{
					"name": "Silver Longsword",
					"entries": [
						"{@atk mw} {@hit 9} to hit, reach 5 ft., one target. {@h}9 ({@damage 1d8 + 5}) slashing damage, plus 9 ({@damage 2d8}) force damage."
					]
				},
				{
					"name": "Hexblade Curse",
					"entries": [
						"{@atk mw} {@hit 9} to hit, reach 5 ft., one target. {@h}13 ({@damage 1d8 + 9}) damage, plus 9 ({@damage 2d8}) force damage."
					]
				},
				{
					"name": "Eldrich Blast",
					"entries": [
						"{@atk rw} {@hit 9} to hit, range 120/120 ft., one target. {@h}9 ({@damage 1d10 + 5}) force damage.",
						"**Três raios, cada raio empurra em 10ft, cada raio da +5 de dano.**"
					]
				}
			],
			"bonus": [
				{
					"name": "Blink Step",
					"entries": [
						"The inquisitor teleports up to 60 feet to an unoccupied space it can see."
					]
				},
				{
					"name": "Hexblade Curse",
					"entries": [
						"Aya gain a bonus to damage rolls against the cursed target. The bonus equals she proficiency bonus.",
						"Any attack roll she make against the cursed target is a critical hit on a roll of 19 or 20 on the {@dice d20}.",
						"If the cursed target dies, Aya regain hit points equal to her warlock level + your Charisma modifier (minimum of 1 hit point)."
					]
				}
			],
			"senseTags": [
				"U"
			],
			"actionTags": [
				"Multiattack"
			],
			"languageTags": [
				"X",
				"TP"
			],
			"damageTags": [
				"S",
				"T",
				"F",
				"O"
			],
			"spellcastingTags": [
				"P",
				"I",
				"CL"
			],
			"miscTags": [
				"MW",
				"RW"
			],
			"conditionInflictSpell": [
				"invisible"
			],
			"hasFluff": true,
			"hasFluffImages": true,
			"tokenUrl": "https://5e.tools/img/VRGR/Inquisitor of the Sword.png",
			"fluff": {
				"name": "Inquisitor of the Sword",
				"source": "VRGR",
				"entries": [
					{
						"type": "entries",
						"entries": [
							"\"Evil lurks everywhere. With our minds, we will unearth it, we will plumb its depths, and we will annihilate it.\" With those words, the psychically gifted priest Ulmed founded the Ulmist Inquisition, an order of psionic inquisitors that seeks to discover the wickedness hiding in people's souls.",
							"In the days before Count Strahd von Zarovich became the first vampire, Strahd thundered across the lands with Ulmed. Their mission was clear: to destroy the infernal powers that had corrupted the world and to ensure that those powers never rose again. Strahd, Ulmed, and their companions hunted Fiends, Undead, Aberrations, and other supernatural threats and were tireless foes of cults like the priests of Osybus. When Strahd fell into darkness, Ulmed was heartbroken at his friend's transformation and changed the inquisition's mission. Instead of focusing on hunting monsters, it would also hunt the seeds of evil that can corrupt a person.",
							"Ulmed and his friends Cosima, Ansel, and Tristian organized the inquisition into three orders, with each one specializing in a type of psionic power. The Order of Cosima harnessed the Mind Fire—their name for the fire of thought that blazes within each person's mind. They used that power to read thoughts, reshape memories, and dominate the recalcitrant. The inquisitors in the Order of Ansel subjected themselves to harsh asceticism in an effort to use psionic energy to empower their own bodies. They succeeded and became the martial arm of the inquisition, represented by a sword. Finally, the Order of Tristian endeavored to use intellect to alter the environment through telekinetic force, and the order's members became the inquisition's scholars, represented by a tome.",
							"Today the inquisition rules the city of Malitain, a vast city-state to the north of Barovia's original site, and the inquisition sends its members throughout the multiverse, seeking to thwart the work of malevolent cults, otherworldly horrors, and the malice of mortals. The zeal of the inquisitors in this work has caused them to be a source of terror in many communities, where folk fear that an overzealous inquisitor might be as great a monster as the fiends the inquisitors originally hunted."
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "internal",
							"path": "bestiary/VRGR/Inquisitor of the Sword.jpg"
						}
					}
				]
			},
			"level": 12,
			"shortName": true,
			"alignment": [
				"L",
				"N"
			]
		}
	]
}
{
	"siteVersion": "1.167.5",
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1662384033,
		"dateLastModified": 1662384033
	},
	"monster": [
		{
			"name": "Baphomet",
			"source": "Lolncio",
			"page": 169,
			"size": [
				"H"
			],
			"type": {
				"type": "fiend",
				"tags": [
					"Demon Lord"
				]
			},
			"alignment": [
				"C",
				"E"
			],
			"ac": [
				21
			],
			"hp": {
				"formula": "40d12 + 360",
				"average": 840
			},
			"speed": {
				"walk": 60,
				"fly": 60
			},
			"str": 31,
			"dex": 22,
			"con": 28,
			"int": 26,
			"wis": 26,
			"cha": 26,
			"passive": 29,
			"tokenUrl": "https://i.imgur.com/H4hO4KT.png",
			"cr": "28",
			"senses": [
				"truesight 240 ft."
			],
			"senseTags": [
				"U"
			],
			"languages": [
				"All",
				"telepathy 500 ft."
			],
			"languageTags": [
				"TP"
			],
			"save": {
				"str": "+18",
				"dex": "+14",
				"con": "+17",
				"int": "+16",
				"wis": "+16",
				"cha": "+16"
			},
			"skill": {
				"arcana": "+24",
				"athletics": "+26",
				"deception": "+16",
				"history": "+24",
				"perception": "+19"
			},
			"resist": [
				"thunder",
				{
					"resist": [
						"bludgeoning",
						"piercing",
						"slashing"
					]
				}
			],
			"immune": [
				"poison"
			],
			"trait": [
				{
					"name": "Charge",
					"entries": [
						"If Baphomet moves at least 10 feet straight toward a target and then hits with a gore attack on the same turn, the target takes an extra 55 ({@damage 10d10}) piercing damage. If the target must succeed on a {@dc 27} Strength saving throw or be pushed 15 feet away if it is gargantuan, 30 feet away if it is huge, 60 feet away if it is larger or 120 feet away if it is medium or smaller, and knocked {@condition prone}.",
						"If a pushed target strikes a solid surface the target takes 3 ({@dice 1d6})",
						"bludgeoning damage for every 10 feet it was pushed. If the target is pushed at another creature, that creature must succeed on a {@dc 26} Dexterity saving throw or take the same damage and be knocked {@condition prone}."
					]
				},
				{
					"name": "Danger Sense",
					"entries": [
						"Baphomet’s has advantage on Dexterity checks and saving throws against threats it can see."
					]
				},
				{
					"name": "Heartcleaver",
					"entries": [
						"The Heartcleaver is +4 glaive artifact (included in the attack). ",
						"While a creature is attuned to it and raging it cause triple weapon damage (included in the attack)."
					]
				},
				{
					"name": "Labyrinthine Recall",
					"entries": [
						"The baphomet can perfectly recall any path it has traveled."
					]
				},
				{
					"name": "Magic Weapons",
					"entries": [
						"The baphomet's weapon attacks are magical."
					]
				},
				{
					"name": "Rage",
					"entries": [
						"Baphomet’s has advantage on Strength checks and saving throws and gains a +10 bonus to damage (included in the attack)."
					]
				},
				{
					"name": "Reckless",
					"entries": [
						"At the start of its turn, the baphomet can gain advantage on all melee weapon attack rolls it makes during that turn, but attack rolls against it have advantage until the start of its next turn."
					]
				}
			],
			"conditionInflict": [
				"frightened",
				"prone"
			],
			"traitTags": [
				"Charge",
				"Magic Weapons",
				"Reckless"
			],
			"damageTags": [
				"B",
				"P",
				"S",
				"T"
			],
			"spellcasting": [
				{
					"name": "Innate Spellcasting",
					"headerEntries": [
						"Baphomet’s spell casting ability is Charisma (spell save {@dc 24}, +16 to hit with attack spells). Baphomet can innately cast the following spells, requiring no material components:"
					],
					"will": [
						"{@spell dominate beast}",
						"{@spell hunter's mark}"
					],
					"daily": {
						"1": [
							"{@spell meteor swarm}",
							"{@spell reverse gravity}"
						],
						"3": [
							"{@spell maze}",
							"{@spell Tasha's otherworldly guise|TCE} (Upper or Lower)"
						]
					},
					"ability": "cha",
					"type": "spellcasting"
				}
			],
			"spellcastingTags": [
				"I"
			],
			"damageTagsSpell": [
				"B",
				"F"
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"Baphomet makes two attacks: any combination of fist and heartcleaver attacks."
					]
				},
				{
					"name": "First",
					"entries": [
						"{@atk mw} {@hit 18} to hit, reach 10 ft., one target. {@h}29 ({@damage 3d12 + 10}) bludgeoning damage."
					]
				},
				{
					"name": "Gore",
					"entries": [
						"{@atk mw} {@hit 18} to hit, reach 10 ft., one target. {@h}65 ({@damage 10d10 + 10}) piercing damage."
					]
				},
				{
					"name": "Heartcleaver",
					"entries": [
						"{@atk mw} {@hit 22} to hit, reach 15 ft., one target. {@h}75 ({@damage 10d12 + 10}) slashing damage."
					]
				},
				{
					"name": "Howl (5-6)",
					"entries": [
						"Baphomet roars and all creatures within 240 feet of him must make a {@dc 26} Constitution saving throw taking 65 ({@damage 10d12}) thunder damage on failed save, and half as much damage on a successful one. In addition, each creature within 240 feet that can hear the roar must succeed on a {@dc 25} Wisdom saving throw or become {@condition frightened} for 1 minute. A creature can repeat the saving throw at the end of each of its turns, ending the effect on a success. If a creature’s saving throw is successful or the effect ends for it, the creature is immune to the frightening effects of Baphomet’s howl for the next 24 hours."
					]
				},
				{
					"name": "Unholy Water (6)",
					"entries": [
						"Baphomet spits forth unholy water in a 90 foot cone. All creatures within the cone must make a {@dc 26} Dexterity saving throw taking (100) necrotic damage on failed save, and half as much damage on a successful one."
					]
				},
				{
					"name": "Summoning (1/day)",
					"entries": [
						"Baphomet magically summons (100% chance of success) {@dice 1d10 + 6} minotaurs, or, {@dice 1d4} goristros."
					]
				},
				{
					"name": "Whirlwind Frenzy (6)",
					"entries": [
						"Baphomet makes a heartcleaver attack on all targets within 15 feet of him."
					]
				}
			],
			"actionTags": [
				"Multiattack"
			],
			"miscTags": [
				"MW",
				"RCH",
				"AOE"
			],
			"legendaryHeader": [
				"Baphomet can take 3 legendary actions, choosing from the options below. Only one legendary action option can be used at a time and only at the end of another creature’s turn. If Baphomet has unspent legendary actions at the end of the round, it may spend and immediately use its remaining legendary actions. Baphomet regains spent legendary actions at the start of its turn."
			],
			"legendary": [
				{
					"name": "Attack",
					"entries": [
						"Baphomet makes a fist attack, or cast a spell."
					]
				},
				{
					"name": "Heartcleaver (2/round)",
					"entries": [
						"Baphomet makes a heart cleaver attack."
					]
				},
				{
					"name": "Frenzy (3 actions)",
					"entries": [
						"Whirlwind frenzy recharges and Baphomet uses it immediately"
					]
				},
				{
					"name": "Unholy (3 actions, 1/day)",
					"entries": [
						"Unholy water recharges and Baphomet uses it immediately."
					]
				}
			],
			"fluff": {
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://5e.tools/img/bestiary/MTF/Baphomet.jpg"
						}
					}
				]
			}
		}
	]
}
{
	"siteVersion": "1.134.0",
	"_meta": {
		"sources": [
			{
				"json": "LolncioGM",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1629910657,
		"dateLastModified": 1629910657
	},
	"monster": [
		{
			"name": "Bartolomeu. The Drow",
			"size": "M",
			"type": {
				"type": "humanoid",
				"tags": [
					"Drow"
				]
			},
			"source": "LolncioGM",
			"alignment": [
				"N",
				"E"
			],
			"ac": [
				{
					"ac": 23,
					"from": [
						"Dark Blessed Robe"
					]
				},
				{
					"ac": 28,
					"from": [
						"Dark Blessed Robe"
					],
					"condition": "Quando Em Encontros Míticos"
				}
			],
			"hp": {
				"formula": "28d20 + 112",
				"average": 406
			},
			"speed": {
				"walk": 40,
				"climb": 80
			},
			"str": 12,
			"dex": 28,
			"con": 18,
			"int": 22,
			"wis": 14,
			"cha": 18,
			"passive": 28,
			"cr": "27",
			"shortName": true,
			"senses": [
				"darkvision 120 ft.",
				"blindsight 20 ft."
			],
			"senseTags": [
				"SD",
				"B"
			],
			"languages": [
				"Common",
				"Elvish",
				"Undercommon",
				"Infernal"
			],
			"languageTags": [
				"C",
				"E",
				"U",
				"I"
			],
			"skill": {
				"acrobatics": "+25",
				"arcana": "+14",
				"deception": "+20",
				"insight": "+10",
				"investigation": "+22",
				"perception": "+18",
				"stealth": "+25",
				"sleight of hand": "+17",
				"performance": "+12",
				"persuasion": "+12",
				"athletics": "+17",
				"history": "+14",
				"intimidation": "+20",
				"medicine": "+10",
				"nature": "+14",
				"religion": "+14",
				"survival": "+10"
			},
			"save": {
				"dex": "+17",
				"con": "+12",
				"int": "+14",
				"wis": "+10"
			},
			"conditionImmune": [
				"grappled",
				"poisoned",
				"unconscious"
			],
			"trait": [
				{
					"name": "Fey Ancestry",
					"entries": [
						"The bartolomeu the blade master has advantage on saving throws against being {@condition charmed}, and magic can't put the bartolomeu the blade master to sleep."
					]
				},
				{
					"name": "Evasion",
					"entries": [
						"If the bartolomeu the blade master is subjected to an effect that allows it to make a Dexterity saving throw to take only half damage, the bartolomeu the blade master instead takes no damage if it succeeds on the saving throw, and only half damage if it fails."
					]
				},
				{
					"name": "Freedom of Movement",
					"entries": [
						"The bartolomeu the blade master ignores difficult terrain, and magical effects can't reduce its speed or cause it to be {@condition restrained}. It can spend 5 feet of movement to escape from nonmagical restraints or being {@condition grappled}."
					]
				},
				{
					"name": "Shadow Stealth",
					"entries": [
						"While in dim light or darkness, the Bartolomeu The Blade Master can take the {@action Hide} action as a bonus action."
					]
				},
				{
					"name": "Corrida Sombria.",
					"entries": [
						"Em penumbra ou escuridão, o Drow tem seu deslocamento dobrado e se torna parcialmente invisível. Testes de percepção são feitos com desvantagem."
					]
				},
				{
					"name": "Sangramento",
					"entries": [
						"Passiva de sangramento, ao ser ferido pelas lâminas o alvo recebe sangramento e recebe ({@damage 4d6}) de dano perfurante magico no final de cada um de seus turnos, o alvo pode usar a ação para fazer um Teste De Medicina CD 18 se passar o alvo encera o efeito. Magias de cura de 2° ciclo ou maior removem o efeito."
					]
				},
				{
					"name": "Magic Weapons",
					"entries": [
						"The Bartolomeu The Blade Master's weapon attacks are magical."
					]
				},
				{
					"name": "Aura Sombria",
					"entries": [
						"Com uma ação livre, o Drow pode libertar parte do legado de sua espada, ao fazer isso o Drow é envolto de escuridão magica que se expande em até 20 pés centrada no Drow."
					]
				},
				{
					"name": "Demoniac Eyes",
					"entries": [
						"Magical darkness doesn't impede the Bartolomeu The Blade Master's darkvision."
					]
				},
				{
					"name": "Magic Resistance",
					"entries": [
						"The Bartolomeu The Blade Master has advantage on saving throws against spells and other magical effects."
					]
				}
			],
			"traitTags": [
				"Fey Ancestry",
				"Magic Resistance",
				"Magic Weapons"
			],
			"damageTags": [
				"S",
				"P"
			],
			"action": [
				{
					"name": "Multiattack.",
					"entries": [
						"Bartolomeu conjura uma magia de ilusão e faz três ataques com suas adagas ou um ataque com seu bracelete.",
						"Em encontro místico O Drow conjura uma spell de ilusão e faz três ataques com sua espada ou dois ataque com seu bracelete."
					]
				},
				{
					"name": "Tanári Dark Blade - (Apenas Em Mythic Encounter)",
					"entries": [
						"{@atk mw} {@hit 18} to hit, reach 10 ft., one target. {@h}24 ({@damage 4d6 + 10}) slashing damage and ({@damage 7d8 + 30}) necrotic damage.",
						"É necessario um Teste De Constituição CD 18, se passar, o alvo recebe metade do dano necrotico.",
						"O Drow se cura com o dano necrótico provindo dessa espada."
					]
				},
				{
					"name": "Kuroi - 黒い刃",
					"entries": [
						"{@atk mw} {@hit 15} to hit, reach 5 ft., one target. {@h}14 ({@damage 3d4 + 7}) piercing damage."
					]
				},
				{
					"name": "Dark Bracers Of Darks Blades.",
					"entries": [
						"{@atk rw} {@hit 15} to hit, range 40/40 ft., one target. {@h}37 ({@damage 12d4 + 7}) piercing damage."
					]
				},
				{
					"name": "Blade Fall (Recharge {@dice 4-6})",
					"entries": [
						"Em uma areá de 40 pés, o Drow conjura uma chuva de laminas, todos dentro dessa areá devem fazer um Teste De Resistência De Destreza CD 21, se falharem recebem ({@damage 8d4}) Perfurante ou metade se passar."
					]
				},
				{
					"name": "Relampago Prateado (Recharge {@dice 4-6})",
					"entries": [
						"O Drow se torna um com suas lâminas, cinco criaturas a escolha do Drow que estejam a 60 pés devem fazer um Teste De Resistência De Destreza CD 21, se falharem recebem ({@damage 6d10}) perfurante e sangramento, se passarem recebem metade e não recebem sangramento. Após usado o Drow pode teleportar a 5 pés de qualquer alvo que foi afetado pelo ataque."
					]
				}
			],
			"miscTags": [
				"MW",
				"RCH",
				"RW"
			],
			"isNamedCreature": true,
			"spellcasting": [
				{
					"name": "Spellcasting",
					"headerEntries": [
						"Bartolomeu é um conjurador Inato. {@dc 18}"
					],
					"will": [
						"({@spell finger of death} Somente se sacar a espada.)",
						"{@spell color spray}",
						"{@spell illusory script}",
						"{@spell invisibility}",
						"{@spell major image}",
						"{@spell mirror image}",
						"{@spell mislead}",
						"{@spell Nystul's magic aura}",
						"{@spell silence}"
					],
					"daily": {
						"1": [
							"{@spell slow}",
							"{@spell telekinesis}",
							"{@spell teleport}",
							"{@spell teleportation circle}"
						],
						"3": [
							"{@spell confusion}",
							"{@spell dominate person}",
							"{@spell modify memory}"
						]
					},
					"spells": {
						"0": {
							"spells": [
								"{@spell dancing lights}"
							]
						}
					},
					"type": "spellcasting"
				}
			],
			"bonus": [
				{
					"name": "Assalto",
					"entries": [
						"O Drow, com uma ação bônus pode se teleportar em até 30 pés aonde possa ver. Para cada local que o Drow se teleporta, ele deixa uma runa da escola de ilusão."
					]
				}
			],
			"environment": [
				"urban"
			],
			"fluff": {
				"entries": [
					"Mercenários existem em vários lugares, mas nenhum se compara a mim... Nem todos são tocados pelas sombras como eu..."
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "external",
							"url": "https://cdn.discordapp.com/attachments/707243691118690314/808165613373227018/Nigga.png"
						}
					}
				]
			},
			"tokenUrl": "https://media.discordapp.net/attachments/707243691118690314/808168940873842708/Nigga_be_like.png?width=678&height=678",
			"mythicHeader": [
				"Se vendo em uma situação desfavorável, Bartolomeu ainda não cumpriu seu objetivo de vida, ele ainda não salvou seu irmão das garras pútridas do abismo. Então, com esse fogo em seu coração ele não morrerá tão fácil."
			],
			"mythic": [
				{
					"name": "O Saque Da Lâmina Obscura",
					"entries": [
						"Bartolomeu saca a espada em suas costas e libera uma grande quantidade de escuridão magica, parte de seu corpo absorve a escuridão se regenerando no processo, Bartolomeu recebe ({@spell power word heal}) em si mesmo.",
						"Com a espada em mãos o Drow tem seu deslocamento dobrado e recebe seu bônus de inteligência em sua armadura. ",
						"Ao ferir o alvo, a Lâmina conjura ({@spell finger of death}) sem componentes."
					]
				}
			],
			"reaction": [
				{
					"name": "Blade Blast",
					"entries": [
						"Ao acertar um ataque com os braceletes ou alguém falhar no teste contra o Blade Fall, o Drow usa sua reação para explodir suas adagas forçando todos que estão a 10 pés das adagas a fazerem um Teste De Resistência De Destreza CD 21, se falharem recebem ({@damage 12d4}) perfurante e recebem sangramento, se passarem recebem metade e não ficam com sangramento."
					]
				},
				{
					"name": "Convocar Duplicatas",
					"entries": [
						"Depois de realizar dois assaltos o Drow pode usar sua reação para conjurar {@spell mirror image} sem componentes. Após conjurar todas as runas desaparecem."
					]
				},
				{
					"name": "Manto Dos Segredos",
					"entries": [
						"Ao matar uma criatura com sua Lâmina Sombria, o Drow pode roubar sua sombra e caso queira, pode tomar a aparecia de seu alvo, o Drow em posse da sombra possui todas as informações que a criatura teve em vida e parte de seus segredos. O efeito de disfarce dura 8 horas ou até ser dissipado com uma ação livre."
					]
				}
			],
			"legendaryActions": 3,
			"legendaryHeader": [
				"The Drow can take 3 legendary actions, choosing from the options below. Only one legendary action can be used at a time and only at the end of another creature's turn. The Drow regains spent legendary actions at the start of its turn."
			],
			"legendary": [
				{
					"name": "Fuga Estratégica",
					"entries": [
						"O Drow pode mover seu deslocamento sem receber ataques de oportunidade."
					]
				},
				{
					"name": "Tirando Magia Do Bolso (Custa 2 Ações)",
					"entries": [
						"O Drow conjura uma Spell."
					]
				},
				{
					"name": "Blade Blast... Esse machuca. (Custa 2 Ações)",
					"entries": [
						"O Drow usa a sua habilidade Blade Blast."
					]
				}
			],
			"resist": [
				{
					"resist": [
						"cold",
						"fire",
						"lightning",
						{
							"resist": [
								"bludgeoning",
								"piercing",
								"slashing"
							],
							"note": "from nonmagical weapon"
						}
					]
				}
			],
			"immune": [
				"poison"
			]
		}
	]
}
{
	"_meta": {
		"sources": [
			{
				"json": "Lolncio",
				"abbreviation": "LLGM",
				"full": "LolôncioGM",
				"url": "",
				"authors": [],
				"convertedBy": []
			}
		],
		"dateAdded": 1608078449,
		"dateLastModified": 1608078449
	},
	"monster": [
		{
			"name": "Bartolomeu Rusben II",
			"source": "Lolncio",
			"page": 297,
			"size": "S",
			"type": "undead",
			"alignment": [
				"L",
				"N"
			],
			"ac": [
				14
			],
			"hp": {
				"formula": "9d6 + 27",
				"average": 58
			},
			"speed": {
				"walk": 30,
				"climb": 20,
				"fly": 30,
				"canHover": false
			},
			"str": 10,
			"dex": 18,
			"con": 16,
			"int": 18,
			"wis": 10,
			"cha": 12,
			"save": {
				"dex": "+6",
				"wis": "+2",
				"con": "+5"
			},
			"skill": {
				"stealth": "+6",
				"persuasion": "+3",
				"perception": "+4",
				"deception": "+5"
			},
			"senses": [
				"darkvision 60 ft."
			],
			"passive": 14,
			"resist": [
				"necrotic",
				{
					"resist": [
						"bludgeoning",
						"piercing",
						"slashing"
					],
					"note": "from nonmagical attacks"
				}
			],
			"languages": [
				"Common",
				"Draconic"
			],
			"cr": "3",
			"trait": [
				{
					"name": "Pack Tactics",
					"entries": [
						"The vampire has advantage on an attack roll against a creature if at least one of the vampire's allies is within 5 feet of the creature and the ally isn't {@condition incapacitated}."
					]
				},
				{
					"name": "Regeneration",
					"entries": [
						"The vampire regains 10 hit points at the start of its turn if it has at least 1 hit point and isn't in sunlight or running water. If the vampire takes radiant damage or damage from holy water, this trait doesn't function at the start of its next turn."
					]
				},
				{
					"name": "Unusual Nature",
					"entries": [
						"The vampire doesn't require air."
					]
				},
				{
					"name": "Vampire Weaknesses",
					"entries": [
						"The vampire has the following flaws:",
						"{@i Forbiddance.} The vampire can't enter a residence without an invitation from one of the occupants.",
						"{@i Harmed by Running Water.} The vampire takes 20 acid damage when it starts its turn in running water.",
						"{@i Stake to the Heart.} The vampire is destroyed if a piercing weapon made of wood is driven into its heart while it is {@condition incapacitated} in its resting place.",
						"{@i Sunlight Hypersensitivity.} The vampire takes 20 radiant damage when it starts its turn in sunlight. While in sunlight, it has disadvantage on attack rolls and ability checks."
					]
				},
				{
					"name": "Nimble Escape",
					"entries": [
						"The bartolomeu rusben ii can take the {@action Disengage} or {@action Hide} action as a bonus action on each of its turns."
					]
				}
			],
			"action": [
				{
					"name": "Multiattack",
					"entries": [
						"Bartolomeu ataca com duas mordidas e um ataque de adaga."
					]
				},
				{
					"name": "Bite",
					"entries": [
						"{@atk mw} {@hit 6} to hit, reach 5 ft., one creature. {@h}6 ({@damage 1d4 + 4}) piercing damage plus 5 ({@damage 2d4}) necrotic damage. The target's hit point maximum is reduced by an amount equal to the necrotic damage taken, and the vampire regains hit points equal to that amount. The reduction lasts until the target finishes a long rest. The target dies if its hit point maximum is reduced to 0."
					]
				},
				{
					"name": "Dragon Tooth",
					"entries": [
						"{@atk mw} {@hit 6} to hit, reach 5 ft., one target. {@h}6 ({@damage 1d4 + 4}) piercing damage, plus 3 ({@damage 1d6}) fire damage."
					]
				}
			],
			"traitTags": [
				"Light Sensitivity",
				"Pack Tactics",
				"Regeneration"
			],
			"senseTags": [
				"D"
			],
			"languageTags": [
				"C",
				"DR"
			],
			"damageTags": [
				"P",
				"N",
				"F"
			],
			"miscTags": [
				"MW"
			],
			"tokenUrl": "https://5e.tools/img/IDRotF/Kobold Vampire Spawn.png?v=1.117.0",
			"fluff": {
				"name": "Kobold Vampire Spawn",
				"source": "IDRotF",
				"entries": [
					{
						"type": "entries",
						"entries": [
							"The gnoll vampire Tekeli-li has a small number of kobold vampire spawn minions to keep it company in the Caves of Hunger (see chapter 6). The vampiric kobolds are terrified of the gnoll vampire and can't understand its commands, so they give Tekeli-li a wide berth. These ravenous undead kobolds thirst for blood and tend to swarm one foe at a time."
						]
					}
				],
				"images": [
					{
						"type": "image",
						"href": {
							"type": "internal",
							"path": "bestiary/IDRotF/Kobold Vampire Spawn.jpg"
						}
					}
				]
			},
			"shortName": true,
			"actionTags": [
				"Multiattack"
			],
			"spellcasting": [
				{
					"name": "Spellcasting",
					"headerEntries": [
						"The vampire is a spellcaster. Its spellcasting ability is Intelligence (spell save {@dc 14}, +6 to hit with spell attacks). The vampire has the following wizard spells prepared:"
					],
					"will": [
						"{@spell fire bolt}",
						"{@spell minor illusion}",
						"{@spell thaumaturgy}"
					],
					"daily": {
						"1": [
							"{@spell vampiric touch}"
						],
						"3": [
							"{@spell burning hands}",
							"{@spell hellish rebuke}",
							"{@spell mirror image}"
						]
					},
					"ability": "int",
					"type": "spellcasting"
				}
			],
			"spellcastingTags": [
				"CW"
			]
		}
	]
}
