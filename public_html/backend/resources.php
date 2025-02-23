<?php

	// Constants
	
	// Favicon parts
	const FAVICON_PARTS = [
	
		// X dimension
		"X Dimension" => 0,
		
		// Y dimension
		"Y Dimension" => 1,
		
		// File path
		"File Path" => 2
	];
	
	// Favicons
	const FAVICONS = [
		["./favicon.ico"]
	];
	
	// App icon parts
	const APP_ICON_PARTS = [
	
		// X dimension
		"X Dimension" => 0,
		
		// Y dimension
		"Y Dimension" => 1,
		
		// Use as favicon
		"Use As Favicon" => 2,
		
		// Mobile only
		"Mobile Only" => 3,
		
		// File path
		"File Path" => 4
	];

	// App icons
	const APP_ICONS = [
		[16, 16, TRUE, NULL, "./images/app_icons/app_icon-16x16.png"],
		[24, 24, TRUE, NULL, "./images/app_icons/app_icon-24x24.png"],
		[32, 32, TRUE, NULL, "./images/app_icons/app_icon-32x32.png"],
		[48, 48, TRUE, NULL, "./images/app_icons/app_icon-48x48.png"],
		[64, 64, TRUE, NULL, "./images/app_icons/app_icon-64x64.png"],
		[114, 114, TRUE, NULL, "./images/app_icons/app_icon-114x114.png"],
		[120, 120, TRUE, NULL, "./images/app_icons/app_icon-120x120.png"],
		[128, 128, TRUE, NULL, "./images/app_icons/app_icon-128x128.png"],
		[144, 144, TRUE, NULL, "./images/app_icons/app_icon-144x144.png"],
		[152, 152, TRUE, NULL, "./images/app_icons/app_icon-152x152.png"],
		[180, 180, TRUE, NULL, "./images/app_icons/app_icon-180x180.png"],
		[192, 192, TRUE, FALSE, "./images/app_icons/app_icon-192x192.png"],
		[192, 192, FALSE, TRUE, "./images/app_icons/app_icon-192x192-mobile.png"],
		[256, 256, TRUE, FALSE, "./images/app_icons/app_icon-256x256.png"],
		[256, 256, FALSE, TRUE, "./images/app_icons/app_icon-256x256-mobile.png"],
		[384, 384, FALSE, NULL, "./images/app_icons/app_icon-384x384.png"],
		[512, 512, FALSE, NULL, "./images/app_icons/app_icon-512x512.png"],
		["./images/app_icons/app_icon.svg"]
	];
	
	// Touch icon parts
	const TOUCH_ICON_PARTS = [
	
		// X dimension
		"X Dimension" => 0,
		
		// Y dimension
		"Y Dimension" => 1,
		
		// File path
		"File Path" => 2
	];

	// Touch icons
	const TOUCH_ICONS = [
		[57, 57, "./images/touch_icons/touch_icon-57x57.png"],
		[76, 76, "./images/touch_icons/touch_icon-76x76.png"],
		[114, 114, "./images/touch_icons/touch_icon-114x114.png"],
		[120, 120, "./images/touch_icons/touch_icon-120x120.png"],
		[144, 144, "./images/touch_icons/touch_icon-144x144.png"],
		[152, 152, "./images/touch_icons/touch_icon-152x152.png"],
		[167, 167, "./images/touch_icons/touch_icon-167x167.png"],
		[180, 180, "./images/touch_icons/touch_icon-180x180.png"],
		["./images/touch_icons/touch_icon-180x180.png"]
	];
	
	// Tile image parts
	const TILE_IMAGE_PARTS = [
	
		// X dimension
		"X Dimension" => 0,
		
		// Y dimension
		"Y Dimension" => 1,
		
		// Ratio
		"Ratio" => 2,
		
		// File path
		"File Path" => 3
	];

	// Tile images
	const TILE_IMAGES = [
		[70, 70, "square", "./images/tile_images/tile_image-70x70.png"],
		[150, 150, "square", "./images/tile_images/tile_image-150x150.png"],
		[310, 150, "wide", "./images/tile_images/tile_image-310x150.png"],
		[310, 310, "square", "./images/tile_images/tile_image-310x310.png"]
	];

	// Mask images
	const MASK_IMAGE = "./images/mask_images/mask_image.svg";

	// Theme color
	const THEME_COLOR = "#FFFFFF";
	
	// Background color
	const BACKGROUND_COLOR = "#7A00D9";
	
	// Files
	$files = [
		"./" => [
			"Version" => 0,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./connection_test.html" => [
			"Version" => 0,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "z4PhNX7vuL3xVChQ1m2AB9Yg5AULVxXcg/SpIdNs6c5H0NE8XYXysP+DGNKHfuwvY7kxvUdBeoGlODJ6+SfaPg=="
		],
		"./fonts/font_awesome/font_awesome-5.15.4.woff2" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "gNULDPfQZDMqDI59ny4pTxq+0VxHZEywS5K3ha9GAbaDz9PGaMDvMd7jQoQAY+DDla5FNlAYSXG6mE7I7NMiOg=="
		],
		"./fonts/font_awesome/font_awesome-5.15.4.woff" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "ZLqsxHjeYNildxUCsvXMO5cIIhuWfamaIjlMuKEsY2q4pIQ1YjPCMrm9Df7hmdyMF4A+OKE8B+1dqmKpwB/rvQ=="
		],
		"./fonts/font_awesome/font_awesome.css" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./fonts/font_awesome/font_awesome_solid-5.15.4.woff2" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "qE4T8hbqlRRq8oWvmK7wtGTNliRA4WGhxgLKIXiheeBK5O0qL5jVsusWVIDsaSDg6I3nfV8et/Ee13Kwktr4ZQ=="
		],
		"./fonts/font_awesome/font_awesome_solid-5.15.4.woff" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "2RsYqSOpBz8fwf7PGwEJOPedgk0hB2Z1l/RaZdOEPjUOQguCqVBtfKYsAqWuq7HTZ2Y1+CXdN7hk0w8oNXFMQg=="
		],
		"./fonts/open_sans/open_sans.css" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./fonts/open_sans/open_sans-1.10.woff" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "ajvR5ujQzI20qpYmF1+a/2W4dlWFzfeVY8X0aqgnCqZRiZA4W7NuSexPkGM5tm1oPNpy3GDdX2hNaaRaY4QAjA=="
		],
		"./fonts/open_sans/open_sans-1.10.woff2" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "oZ+BPZ7oxeHoJcqiacydldNdn1TQ9XKN2VgbJcEpvG6hT6CkcggWxoQZ5UJq1+Vvug5/w1nZ+wQjGAnaB+Ce0w=="
		],
		"./fonts/mwc/mwc.css" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./fonts/mwc/mwc.woff" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "QvAe73bxFv4FTrIZQywgCrSFqgMP24xT56PjT0qkOd+Ic9s9jufOH/QAQIDFwbE6yZSEu28imxVw2H1I/f9rhA=="
		],
		"./fonts/mwc/mwc.woff2" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "TxAB5YdnZoWzz/N9f+zGfa6KYTolOEXijnQuFtk762BOV/e0P97fx467xwzlB7/KR4klGmjpRxunpN1/F9l4Qw=="
		],
		"./fonts/grin/grin.css" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./fonts/grin/grin.woff" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "o2PiDYI0DXbX7wMWGPZLQhR6VnCwkLTX6iYholTb9pVzqhNc9vDiJRzNHqsaBNMr2oE//6IoTKAZzWqI39pZZg=="
		],
		"./fonts/grin/grin.woff2" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "V6bq44MMOpge+H/UOcSRgZIsxrXh/aB9e02bRS+M5XWlbSppzXf+p0O08bEbPlMxWZaIbJCaI05zfA61rT2+gg=="
		],
		"./fonts/btc/btc.css" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./fonts/btc/btc.woff" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "SfSYyklmLxkhgoli6lw65pMyT9HUI5p8w8/d4ILwWrmiSyq7vg1wY2ZpAGdseTgHqCMFFHqRvVXgoxyPFO/Ixw=="
		],
		"./fonts/btc/btc.woff2" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "HF1Vum3F2kBrrUKcZZ9VHiPRPzheZ/B8yahmr7aQx+TBCNeMtjYatU7N9lvqxWBiPo2cA6aYsyX2dzdljyxyuQ=="
		],
		"./fonts/eth/eth.css" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./fonts/eth/eth.woff" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "gt/dON/VN9ECB6aNxi1438gJbLkpf2esYiMfuw/E78pS6+QyI/iR+coBhrEE7XOeU3Q4Xrp3eRk2FlRzbmBQRQ=="
		],
		"./fonts/eth/eth.woff2" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "eo8uv656TWX4+oTTWrilXjsEsf0mY1wacVdsdskOHlw3CtZ0TtT6MwLig2m4LKHQFO11Ns/rZBtiw9DfGUXGCw=="
		],
		"./robots.txt" => [
			"Version" => 0,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./privacy_policy.txt" => [
			"Version" => 0,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "oOBBQN7VKeqm/bM2XAeLww8AXTXKudmYJy5K9aQSOIDGsKylOTbjc8OkNy4EMkEIdykjPWtMfr76/q6ug8SCrA=="
		],
		"./favicon.ico" => [
			"Version" => 0,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./sitemap.xml" => [
			"Version" => 0,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./scripts/prices.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "yk2GBWu9O3ZjP0dmvKrvDz4jI2SCzvwXbVZUQy1sw9AOHHiMwUspwD/c+L/Nuhpbsl5hyHyQyU5rkXGTnbBCcg=="
		],
		"./scripts/log.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "gbCZy+OHBjani+0rLpX5C2qcC+RipRQKgoI62Pm4aAEsK3V0wKSNaz9i5XoLPSI1+Fu2kiVbckhS+sYsLdHgKQ=="
		],
		"./scripts/qrcode-generator-1.4.4.js" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "6WOG76AXc8rlgtGYLGhDg7lIzZG2Cc+VrSamvgpeBYgxauGuoMua6uKll4OsZ0JvVSt12lRX/9uCmXzkt3/wfg=="
		],
		"./scripts/jsQR-1.4.0.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "H2kn8fvMTiODT1At1gNgDrzr+K+CS9k7ervx0YANJHUlCyGQhWHVI48TX6hmoDPFt1Xdi+vS1ej982fclk3ZEg=="
		],
		"./scripts/clipboard.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "AaYCKtIK3CfkZgJL+KjqGHbvK+urVTVK0Wagvfi9MQcrVy95oT6vmwR0lkjIA1gO89vuQ15jrW4vjLyLjUihfA=="
		],
		"./scripts/wallets.js" => [
			"Version" => 38,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "PlZn25ve/kA09GnqRXlxs7FwtMPwt1gNMasAI/h6cohhMqxDHu0WjrNmnt6rQCZgxXd0xpHir0fjBFYegdx0EQ=="
		],
		"./scripts/application.js" => [
			"Version" => 31,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "N1ogufqnJNiM9kvqRWjHxV9q28sQKSc+zQDeytBjaWM7VCSQ5iJq5pkUNPqUjz/eCPAZmNyRES546no5eaLMvQ=="
		],
		"./scripts/automatic_lock.js" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "CKe5Yj4y0545+GGmB5xPKsioR+2XwWy9dKa5H6l3wGQL6FPM84MQ6cif1kSPU2AQEEDP5iQdmUoTfjH7Nkvnkw=="
		],
		"./scripts/wake_lock.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "6IoZ640jM4IsPVC0QB7+wiuens2+mcxLasLwGkGoszew+RVumYtcUmdruWbpr2LVG0ntS06TvUrUt5DqIJwVXQ=="
		],
		"./scripts/language.js" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "NdVy0K2xxBRen3mIz3/ySifgAHWnPhbw2hUiiAvFabezU6cYjjXD8470M05UFdpXohVB2GgrNXwl8nuUpoBz8A=="
		],
		"./scripts/protocol_handler.js" => [
			"Version" => 2,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "JQuzcKcwJ8wUxC9AdDdWzo7lmmVG2kzYOOVqq6LnUVtwdZoc9nnLDGH+9cE8j9atZC+5f3697jprIx8hIY84fw=="
		],
		"./scripts/copyright.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "2HvMVClowDY5IlX+4je36JmZsNaRVYI9Ul4vbFw7Ksn3+D6Ni/Os+1s/BdAlqeTkQUGTTO7WSi5+ua1JTebZKA=="
		],
		"./scripts/settings.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "61JYeUSW1ynV5u/FkeFSq5R8cyFDTLCsefICXMci6VT7QlOFUW0sqzVmsAl9BxZ0NLk8Eojry5LcKNRZkjQ0Uw=="
		],
		"./scripts/caps_lock.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "k4sftkZ0gB3BKP7dmfcMmIzXcNOOgse3V0EK2aTqtx60SYxlEWtPf3wyD+TaMT4r5fQwdAWd/AWd/+LAwFAGhw=="
		],
		"./scripts/instance.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "yBIcZfj1vFmK0dWgudrlqX3cYC0Hg+lrZ40uT3R6bfqZ7rAthgJTwkFjn+b5TXj+qV39KFJQJwKqnol7tIBdDA=="
		],
		"./scripts/tetris.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "rEGtP6r7r7N6ckksZkIn18ve52S+SDUh6BETGmjpE0lq3OCRAAEfoWm37dGFsxkL6KBemzItfbaibltNPZK4Ew=="
		],
		"./scripts/logo.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "omKPIIy8yxW18W5s47ToplJ5s7YczzgJ1rC3gNh6+p6LQqXzDlo/qgjDEqcNO4iuXMXREy81g9GLgL7oCXtm0Q=="
		],
		"./scripts/service_worker_installer.js" => [
			"Version" => 6,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "FrJBKolAMOJ1E1w/wsI5RgTJ0/ouuSqTGfe/R643nfxxa/lfihMoTDXeM3i/fDLtmExYJSVUW8oFv8/yzsvpCw=="
		],
		"./scripts/wallet.js" => [
			"Version" => 12,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "bDfJG72sEvAg+qirpsIm7qoheTKYQNZKZvtYPDVaWJsyhyDz6p7BGSKXSQb5s3duDozO6Dkg6x74k7CayrYv1Q=="
		],
		"./scripts/consensus.js" => [
			"Version" => 13,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "gcfWenLywFKFotxUkLKcQU8fda4/x/cP+05yGywbU1/2uszxbPOdmSH7ced/NTgDALYOAhhpYthVHvc3K7zzxg=="
		],
		"./scripts/transaction.js" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "ikgJbG8gMR94aP/R/wRbHJU1sPvMJMkFwiPZpVVH4orWsCxbZvbK425thXW5Tv31qOpS5QPMUuZjMS1JOrUzJA=="
		],
		"./scripts/transactions.js" => [
			"Version" => 7,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "F3s3707jGVudmv/gCmTUgzsdj+ztQYDe1vsaKxEOL4IhXmkXGIws7bS7yyXrn2EqnKapx4bod2K9Od64j+fkBQ=="
		],
		"./scripts/focus.js" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "FTWPXy42zaM5oz6p4cenSvyqtQ844dEgnQYz6HVErF5ikkctyrhQehKydm8SRHJBNspr49GUsrmq79ou3Q6U1A=="
		],
		"./scripts/identifier.js" => [
			"Version" => 6,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "jSzvJoFNyGWGAlNp1a4r556E4qYOKEqZFy153hcWtYOjKYGsBLkY+z5koJK/kiDxemFjQ1v8HtfqeassdIiazg=="
		],
		"./scripts/crypto.js" => [
			"Version" => 6,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "f3cKvK8jETY8cLfiwhF5sX8Fg+bewgl4EkTx4g9Rmm4BM4sB4BUhcTjmf+G5VULLS5vEoNNze5AMOIyV0cRcQQ=="
		],
		"./scripts/api.js" => [
			"Version" => 46,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "DZ/FQ64oUGNVTTFUWU2V6yOzhq/oYnBzFlflUIU72VqZd6bOACeB9hVR222JqrkIgJ2mvfNg9CwnyAOZ2MHPIA=="
		],
		"./scripts/LedgerJS_Browser-0.0.1.js" => [
			"Version" => 13,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "jl++6VkJwNIMfadu0Z9UjM1BIbjPsY00UtJu68t71Z/qTaqH0y+k4D/su9WUKu2Res4OKSMpwJSlgIZ5QbTxhg=="
		],
		"./scripts/hardware_wallet.js" => [
			"Version" => 23,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "QLiKNhiLN91S6WChodYxHJdlu+OSGTc/dxmC6+wDwV1ENbJrZ9m75DQS1UpN/Z843nVsMdJWIbXCGuczpSwy1w=="
		],
		"./scripts/proof_builder.js" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "+YQhxhPUHhCAaBEiVz7c3jiJL/eoGKcvhB8qi25Z2CrUdKIiSqdtrHAbIMLTlLmzwJ2iYoTxiAJdxxLxHJ5ryg=="
		],
		"./scripts/legacy_proof_builder.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "z0SKIdDp9pej96Y6IWMsGAwTBYTMLywl8rkFhZn4uHxwtWr2zclalpxA6dzZZSUOaevd4w3SU68e9q3iWgCU/w=="
		],
		"./scripts/new_proof_builder.js" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "tX2Sozmcfg+lJvtd0iFKzkJZWRq1hpHhVYVewNmkJdpcoAY8rWtgN2fPXq9oRsmnoY0QrZB44CaX9BUto2TiHw=="
		],
		"./scripts/view_proof_builder.js" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "lxuV6f6wNme51ooebXyuRZ2ILRkvd48l57/9UcU9UB+SyB7hwzFGahoz3hQ9bNYbvCGf8tmjqv0M90hFi/3qEQ=="
		],
		"./scripts/service_worker.js" => [
			"Version" => 0,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./scripts/bignumber.js-9.0.2.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "LwuLTnQxdGPjeUYjvSChW/6/zMtouXaKSFPTYW2X6c6jvGTCvbdRCywt4kEP1DzP28ehutkTzM3/fQMNk+NOcg=="
		],
		"./scripts/base64.js-3.7.2.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "ip85wUl3ZLmO1/AxxUTElffAhAkdLbZwl85WBEFATtsvM7qDq8DLVBQztVpndreDDk+Sr7ANBJd2WNH5N3nCuw=="
		],
		"./scripts/crc32-1.2.0.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "1C/g5xU+C5AIbkigSJ53JJ9j83nFt/3A53atZUwYN615yngUk2Ur+ajqoTPqVjHaJzbkUsZFkLfgsR54KuGG7A=="
		],
		"./scripts/database_transaction.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "xsBUDHmDFrkpT/ZXsyMdy9e0nls+PvNvl1ARxcAB8rPDWH3pH9x3PnLDCie7qmpaN+pOdYb6dxowQn2vcWHILA=="
		],
		"./scripts/database.js" => [
			"Version" => 12,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "6qjP3tmxx7jHapVLdSKc75Ft2N8HxhiYFm5QAUSC57X3YpuEZNp43BGjp5ybPn034EiJEB9cHMhj9wqIgvHHVQ=="
		],
		"./scripts/output.js" => [
			"Version" => 7,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "r43n7oS2l0qrnvVx/k0IHaM7lYGpiWJt8DzwnOgPXd4f/1iaM5KS/7psstERQjY/5bWRzWKO2XjwG/U1cZw6Rw=="
		],
		"./scripts/output_information.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "ig4BjvopYK4Oh7AtF9x5MntYRzW0oSh/n7BTqThp1DlC0vJCTyRJ+/mtOWtDdgC6U+5d4sJzMCBfmGm69sJNTQ=="
		],
		"./scripts/output_worker.js" => [
			"Version" => 34,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./scripts/slate_worker.js" => [
			"Version" => 102,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./scripts/camera.js" => [
			"Version" => 7,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "fgXcToDtI6wmtS0RjZW5pbWUYkBBkENvqM+gtInk+grrPOQxx37PqgMCyjDm5JTlC3fMvdWSeNrWv1T1CZ0a3g=="
		],
		"./scripts/camera_worker.js" => [
			"Version" => 29,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./scripts/cookie_acceptance.js" => [
			"Version" => 8,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "Vbk/CFiKvd/ENNsM6I7qFaMFaiXasnFsTmupL8UBGZFhLCf99sK5iJpWAKx0CPIoejOGvO4W41PVF8dEmplB9Q=="
		],
		"./scripts/listener.js" => [
			"Version" => 7,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "rrySAyR4h2wNxsdmc3zbNOJWKmoVTwmU8U6PrPLL9L14lSA1WAAPefYn6YbhY221zsa0JWLbpVsK4t3v6sz/8w=="
		],
		"./scripts/interaction.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "QBXcTST+a/djlNFEIRqQYDBKtMoJ6a0gdETuWKRBKsmecyxwp0Q0PRzWoyY68AJYhxiNHab6S43fyHiUMu8Kew=="
		],
		"./scripts/glMatrix-3.4.1.js" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "7oogIEuYjEdB9P08VXSyYmGIk6ltV1xlhXey/p/kjYaduDRLCFaLLK5AJi2pQy08vBR1Vs0Irn0FTCTEb9VqAA=="
		],
		"./scripts/jQuery-3.6.1.js" => [
			"Version" => 1,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A=="
		],
		"./scripts/js-sha3-0.8.0.js" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "QkO9sBiE1vi+hFY7yO9Zo4rIrgUHBydF77a3SfX5Rj+VqoA+XYrv/77n17Pki3IXnQHN2ReqxvUykN1sChUQTw=="
		],
		"./scripts/js-sha256-0.9.0.js" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "8WAv/Z7UaDv0U1DCJ3W1oul76HOvq2/9mc+IbOZGsTj9iwZnnCXL/0FS6GQKNR++krdfVn9kuAAQ6v2DqZ9uEQ=="
		],
		"./scripts/ChaCha-2.1.0.js" => [
			"Version" => 6,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "53JqNBE9WxJ27yw3uyHCWE0kQ9DIxa9BMuY+JoTxImkqaxPD24y+FN3KNqL7johYZm/G5UQalzUJ/AvI7RBx2w=="
		],
		"./scripts/json_rpc.js" => [
			"Version" => 10,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "ewSnCcrrO6n9Z2Md45oCvOYBnbJ6wFgINJFBmTESaOkl2ioj/pkOnJchzGcKg7Bq/1BOoodarA8El0Zrhuv6pw=="
		],
		"./scripts/tor.js" => [
			"Version" => 6,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "JKjvvnUQjRc3MySovwpTVlUYDSfvR2NeCeUnCOKOEYOt7v4vcl4rLw796Qctn0Bp3r/NmvxL9txlsN1UmgygBQ=="
		],
		"./scripts/mqs.js" => [
			"Version" => 6,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "taXFzFd3ZVR19zrNr7nmoAc0J4PcjZQu575/fnv2aXBqv2oo8rrED7VAfSWgrJ2gcRKFJAD02JE3SNTU8fI7Xg=="
		],
		"./scripts/slatepack.js" => [
			"Version" => 13,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "UCLsWZWaHr5mo1fCtDhBavoYCILm70eBt3ACL9Fz8ds5UxhB6Tc9W/IcHSwEwvmV9D9pv5yUKxy7yUJQ9ZJnow=="
		],
		"./scripts/JSONBigNumber-1.1.1.js" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "yP+DgrnNWvBd6Wa/XTcmMkf+i+Ir0VyrxZ7rCrglwgL5j7shquvOGZ3fReEv09H+pZKMV3lvR5shnBncIo5VTQ=="
		],
		"./scripts/BLAKE2b-0.0.2.wasm" => [
			"Version" => 1,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "4xU8Pp8t8FTYzuH07/RgDxdDSc708DTufixQvCArycHCqV5/GMmMTVn6x0METVE7zRqFnrLQGQAq7LOjjd5nNQ=="
		],
		"./scripts/BLAKE2b-0.0.2.js" => [
			"Version" => 1,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "ZZpUPwazc+TKFvKShKqQYu9mda0g87afxz3v56jbRdw0sLZfr6V1UTKDlKpFtTpFPfB8MI6c4Slsrnu16ijsgg=="
		],
		"./scripts/seed.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "kVINxDNBZFLQHjbDfaG+9lw2OkAlwe+YGGMcrRqDYz1mB70+y5ri3qbM/Y/a4XnR9xXMwJt78jcsqJ2lM363CA=="
		],
		"./scripts/secp256k1-zkp-0.0.25.js" => [
			"Version" => 1,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "J12mXeXWL2UEBTAumKpc9fAWkoW7ir/ctUPGMrfR3Bsj8hbaGXpTGAEMXpqYOmY3SKJuckyXdODFGqZofXT3cQ=="
		],
		"./scripts/SMAZ-0.0.30.js" => [
			"Version" => 1,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "VFRsostXY4C5yCXOpXadZQZ7oe2+XGZM0qes5+69KfuSkRuk6f5VYI2QlurmAjqQbiUz3aK0lLJfdw4lKp+f2Q=="
		],
		"./scripts/Ed25519-0.0.22.js" => [
			"Version" => 1,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "8z69nUefE0sJLexuhFr8X1Ljz/1vajNzWa+lYpX4438g+AJyUtZT/MGRpLWNnCzMt1iMM8Zi8MVmG3dydMWG1g=="
		],
		"./scripts/X25519-0.0.22.js" => [
			"Version" => 1,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "PVynPD+VyTW3PqtLutGHxWoFdxhuqgE2uGnI9hZX24LliSTco6S3x9+6sIDuu+D5HvWsM5mihP9meYVi52vylQ=="
		],
		"./scripts/tor_proxy.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "u5Sc8nYnYhnKnVXwZ84dDHJeyE2rDIzzFM9qHa74sgVPNc2DKh4gNArK4Hmjq+L9qGhkBO8rw41RApbzYj1mxA=="
		],
		"./scripts/node.js" => [
			"Version" => 14,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "o1EDZjcROsEaIj6mOeX3tUdedwvnjYazWDx0cRvOdvurp68DB8eSkpHjsAnXAneV4O5csY7/j2nY8toNJMMsAg=="
		],
		"./scripts/message.js" => [
			"Version" => 6,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "C/5ioi7mdu/RxLuWlOiqvYLCfxIwyQa8DK3gnx1j8/qCjALKiLey0VytDrfyUDksVS9Q8NQX4AWUgZEOoEwYIw=="
		],
		"./scripts/common.js" => [
			"Version" => 54,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "7/55cy9rXwx4+aWDZ+D+2AdxolcvYjCOLlj1okZO4cucWBCWssyEBpZMG7PMJZbw2UPLv/jZT0+zzIgBnB1FJw=="
		],
		"./scripts/bit_reader.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "yms2TjlwJtaup+5xUoaB0fVpOy5xExGy7dseVb9c9A5DHy29P22GyNmBtOAe595a4UscRC5zJcOXEVk0rCLFzQ=="
		],
		"./scripts/bit_writer.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "G9MztHfbLzg6SFOSXQhW1M4R+tPmAR6Z4Jvpap4gYC0s3tOYsEsGUSNJ/ZlS2JOThLAI0Vdo6LdA2u1QaO1y8g=="
		],
		"./scripts/hi-base32-0.5.1.js" => [
			"Version" => 6,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "UADzbakt2KOLTZdSucmyNYI+VCgyiX/DfYIQDSU0GWrQJUfpLjBc9wUITrGx2oqdb+rvDuVXI0kzXowYoPXFPQ=="
		],
		"./scripts/bech32-2.0.0.js" => [
			"Version" => 6,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "5zxFg82/Io72GE57rxH7nD3dewDWi8IDwV5RhtbNLzIyoBuZc/33MsG/ygYZwTnkRFUPHPYwcZkjBDzzYKPvvw=="
		],
		"./scripts/base58.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "1qSnBxDGofAzuph+6Z6WjRJ5TxiQAsURE9vtylnLOsB1OJYTUSYbffI8GQXLQ6n0LPusp2HxTN8i+4BKc31iIg=="
		],
		"./scripts/fatal_error.js" => [
			"Version" => 14,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "aTQHd5myQW642FEULold8Cucnw8wRfo7uiOB7629YU+YGHsrtr6k+2oxYVXsNmVEw4ejkcH1lHcfUIbBA7so6Q=="
		],
		"./scripts/scroll.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "03YSXbjRWk2Eod/YV17+YIAHvyNnABOJ0qD3OzNBDv2xTeB0y/PqBBKJKhSUC6goFFdIubkejP97p2uL7eTujw=="
		],
		"./scripts/startup_images_creator.js" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "QNtKNG9TS2TfRgBAjPlLqCDIXv/UIcqDCTMi6tNwd3C7yxlKBkiErW/wtLpufToe46dfyTjUwbsBxkHAQilPBA=="
		],
		"./scripts/extension.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "FRih6uA7SdZVFkg06nZCcGSPdAf/+16DduNja+nY9aLHd2AqebrFuwMAS6mwWe3Qty82w7aqstIG61wmkcLGkw=="
		],
		"./scripts/version.js" => [
			"Version" => 8,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "SeDn9aV8tLcfbel3vPaPkohO1OhuVWC2KJhndRIKvC3JT5yCYRWz8/+v2oIbsLLwCjBqnYFr6mghA33y+eySYQ=="
		],
		"./scripts/secp256k1-zkp-0.0.25.wasm" => [
			"Version" => 1,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "plj3cgdR+MkdYUTPD0cML9HjcOVXZ8Tegknuqo6VymR+zbpTTOw/jDBQojQIF6eXoJJlXCVAzT+0dkJs6HL3rQ=="
		],
		"./scripts/SMAZ-0.0.30.wasm" => [
			"Version" => 1,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "o8EHmhfB9ciiO7NsfgVLIGgEF70SjwgBFLAdI7LQQ6dxPY77+0Z41JlWAh/khQVgKrKuPYeQ5mVgB7lIS88gDg=="
		],
		"./scripts/Ed25519-0.0.22.wasm" => [
			"Version" => 1,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "unWNdFJP8XDQLIzNHRaCNzt1XP9u9zQMLwFkxL0BLkb6jd16angfAlGK2zLyv5DukC74edDQ+OSZa+HJl+iS9g=="
		],
		"./scripts/X25519-0.0.22.wasm" => [
			"Version" => 1,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "EVo+ydAdXW00myPydlVk7HPm2ROg5wrIDyuYA3xuxYoLulhDH6hRy98UKP0Z9qkLGObL3mvZRel78pHKJaC++g=="
		],
		"./scripts/height.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "KsE/PDYuBECaR9jgFKQkGx2F7Qoj6GKVFusYUHQGPDFhoumYsflByyo0omTAq88hHlizrRjqn51OFUEeh8TY4w=="
		],
		"./scripts/sections.js" => [
			"Version" => 7,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "VlwB5jd55CO2XVi+VBrYcXrEt65zFDs7IHn/pcrHebub8T79Rq9UE7FUnExUT5IAIeQSJJL/dctx3LRtQ/qjpA=="
		],
		"./scripts/section.js" => [
			"Version" => 8,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "JZmOp/XHEUObD3f25sGL0hLeiXEnJlUVihaEiH7TU7KMYM12Bx+CQM3OovTW+Ycf8Ms//X7+N3/k46p0SGbogg=="
		],
		"./scripts/settings_section.js" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "t+5df2wuFHitPkk3zH0UDrc7hq4+ks1tE9GvvVYt84ZlBQoTUtQMVU7gWsznO9mmzRKHhU3QqeysDqlfetCweQ=="
		],
		"./scripts/about_section.js" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "JTYG5yO5fC4Bc0wwjvjxoTXEVJ0NWTt8Y4TxzeMEhNVtl6bZoa32BbVVQCd0KczKzmP7tXKsDMr1laVhnmAeUA=="
		],
		"./scripts/transaction_section.js" => [
			"Version" => 12,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "+sc38K0VTl26YCs28Ku98KIXnsWd72GLaEnOi7pcBCiHLUssbRx5IhCoTAQOmrkXVy5NsNMiuqUMnJdgx0yyAA=="
		],
		"./scripts/account_section.js" => [
			"Version" => 8,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "Hn6EOPZHCZvakR1RoqARuixILS76XW6nxNzuo/c2mPrFQHx6T+GKqkp/WvC9F9Iuj1Q0JFR2zRs3nUVrnxK8jw=="
		],
		"./scripts/wallet_section.js" => [
			"Version" => 29,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "R2fpCns623zBUEZkccL1zCaqF/72q46LibJM01MMFXpmZ1IJI6aOI6PTPBsg8MKwnfrpJdKozYOLJkwPJ0sTVg=="
		],
		"./scripts/send_payment_section.js" => [
			"Version" => 15,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "nuRq1upPKXsJPVH4GOoD5ITlxJGbkw0sSUFuAXcO6QlnxVM1SYAJaxqrnf7rJnwM0UAdD7avXwh1IddRe70IQQ=="
		],
		"./scripts/log_section.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "/bUMki4pRNv48ReFqi6+EG2HRLbemO32D95KvdWvvbrwxJ7k4jM7Hj7rrv30ba0PAlZP6d/oNFfeOkmcY3XW3A=="
		],
		"./scripts/initial_heights_obtained.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "09S9kkwSLzjgxtxlibRC2XvnQqAFECAi8hSSjsxNVqf8W1VHJsfSpvHDdgoYDfD/bFcu+rmEEmPKQ0TnoRAnjA=="
		],
		"./scripts/recent_heights.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "CNurRRQMdnrYv7weoC6MQp6Svedj+tyIEzHSOkG0bzYG/d4y14Oxe5/ukeaDWe/3ap3MBCksLRDAP4Vj64fT4w=="
		],
		"./scripts/maintenance_notification.js" => [
			"Version" => 10,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "k6rkvbsPXRCx1e5VSEVrxIshjKFSpafgxoSgNVvn8kVxL09xegalDc6dbnNa4orO7S+l+I7M+pJjLusBvB2nHw=="
		],
		"./scripts/install_app.js" => [
			"Version" => 13,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "nJ0zbD8LVp+saVuobjeihUA/QBoofwLhJJap6IIFcU4OKYG7hyXXaT/pzFEOc0QfLiGRGGzu70NhFUGfu5nhdg=="
		],
		"./scripts/unlocked.js" => [
			"Version" => 33,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "tvSRVDdip2faDXBtuZOACpTs7axxdWUa7nFgIHSLVFZ6cHdlTvvJtu4PulCknyPSbwB+C9gT/OpCH2s9nhR0iw=="
		],
		"./scripts/uuid.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "1xb9vv5aCp1K/Pq+QblxHg0C0tapdwlRKJB8IV1orQbIb33XcO2nRvxtOMWoBGOvgGhcBRjqdJjyWBHuxGA8cw=="
		],
		"./scripts/hash.js" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "OA4SbseOEmVcPnIky32I8ZUCfD16z7CnRpym1AVwXWvHwF/EG2E8E4LnsM32YpMCiTM2due3JCbxDtJITdFcwg=="
		],
		"./scripts/slate.js" => [
			"Version" => 83,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "/xe9b3SnnRu1Mempi36P8NG/rZ66Ww3MXSLTYr4llQzvczte+2bpfWMVcBk31ERr97wwhclyFd330WQUWVBVFQ=="
		],
		"./scripts/slate_participant.js" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "EG3acIlcAEMV2LLS9JxaHsZ2gwD/C25iWt/qPLo80oOLOmvYtYR5U1nxjQo/K3EjuGZdM1L6Wd/KVBlgm0X7cA=="
		],
		"./scripts/slate_input.js" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "Bdk88EftoRhvFu+Z3pjdFk51uXWwehBKOzzfIqPohF0AiQyXVNrYLALLerqCaXZuemre2D1fdQWApucPTAH0dQ=="
		],
		"./scripts/slate_output.js" => [
			"Version" => 6,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "VyiwLG9HOavQhgEwYjVq6131Lg/V5XxcYJTzFTc/sdv8ylFBs5B64OYenQEJW8FQeEPe82Dw9g7igLgTXMn0tg=="
		],
		"./scripts/slate_kernel.js" => [
			"Version" => 6,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "m/lsciHK5eapP09eXPQkQeT5TsV5znoaSVv4/3sHgzSg+zJFp209S5v2BSizxwY/V7KZhp6zwZMzT2/rejMZow=="
		],
		"./errors/500.html" => [
			"Version" => 0,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./errors/401.html" => [
			"Version" => 0,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./errors/403.html" => [
			"Version" => 0,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./errors/504.html" => [
			"Version" => 0,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./errors/503.html" => [
			"Version" => 0,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./errors/error.html" => [
			"Version" => 0,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./errors/502.html" => [
			"Version" => 0,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./errors/404.html" => [
			"Version" => 0,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./errors/proxy_error_cors_disabled.html" => [
			"Version" => 0,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "z4PhNX7vuL3xVChQ1m2AB9Yg5AULVxXcg/SpIdNs6c5H0NE8XYXysP+DGNKHfuwvY7kxvUdBeoGlODJ6+SfaPg=="
		],
		"./errors/proxy_error_cors_enabled.html" => [
			"Version" => 0,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "z4PhNX7vuL3xVChQ1m2AB9Yg5AULVxXcg/SpIdNs6c5H0NE8XYXysP+DGNKHfuwvY7kxvUdBeoGlODJ6+SfaPg=="
		],
		"./browserconfig.xml" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./images/circle.svg" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "wyTgo5fmZYwVSdR9kPllluUfvPzUg/Zd7uRvNVPjaqJr7pDI1vNWHFBtfOqmsuBcNV9awXZpePut9gHVKMjCVA=="
		],
		"./images/down_arrow.svg" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "3b1PtmLda1UA6xh5WWstp67TGoV/ITmtQ8pcot0uocmGSHUvL46ABelYATKbLthfecI2snR5Ar3PgQqpfN5NDQ=="
		],
		"./images/usb.svg" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "fMph2Fc1GDBQ4oFcnEo4CH3DElezAPdDquywENXnu3iUTZyn8kHaMsgGFoF1HMwFo6/zlM7CGl0mmgqI5WbyuA=="
		],
		"./images/bluetooth.svg" => [
			"Version" => 1,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "esQ21VaSlM4oh9CkdibD5uTfG5fNzduVxx6tOiGQaEAT0rWoBphqIvxuc3YJmKzyK0K188lszHrhuJtBG1bgBA=="
		],
		"./images/whale.svg" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "gCcaLJJatAtW+DX14/LMR0/bJQ2+Tn4w007UlVD/n6UVq6hQ+aBhFBODeFuPE63y3ebHIA2OXmvU369Jl0+75A=="
		],
		"./images/ledger.svg" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "V7elNFHZZC5VVZcrj3xm6PztYGhhNyz5EDhvQIDaZHqW49D5/XRp16uPOOcmGcAEcRSpU3I59qzkjCexiM4giQ=="
		],
		"./images/countries/america.svg" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "a3y2+33FCILuqbwp8nTI/V4bLuzh9RWoszcbcqZx2xg1LejVxjO7VRl5j0ERMgaVEHC5hOpzx1Y123lCxAkuaQ=="
		],
		"./images/app_icons/app_icon-152x152.png" => [
			"Version" => 4,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "qZ5wSv7nlGZ/34dRFY70uButTCB3IFWvI9TNEPVb/I7fBiizjLfd14liKjlOaGIhLlkhcrXf1ZJ9jiPYDq4JGA=="
		],
		"./images/app_icons/app_icon-64x64.png" => [
			"Version" => 4,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "Gm8PRw90oQAoT7ziuw9aTpq5NXkAU9IRrHGsmwDnBuF6fU8SvZbVrtHVqZdKFBoOiiiTZPPJ57hY5IWa3I1qvg=="
		],
		"./images/tile_images/tile_image-70x70.png" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "3RoZpKcR4dlgH30gxLGfoJQp9VZS4/iTJQvOd2eUlobVq05q33cTnrbZy+umrk5VqbvG4GVrfDA/gC169+SqTA=="
		],
		"./images/tile_images/tile_image-150x150.png" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "BNSvGxLbPTDZgL1VXGgOBnCdrfwywbKN2bGe9/vVMa8Ibqwh2YnACapz7FuaDbC+tUaF+P1V+9Ps43zTuaPVtg=="
		],
		"./images/tile_images/tile_image-310x310.png" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "6Nia7Q+boUiVXSx5EK1zK2mU/90zzklSv5romPkxD4ki0vEhrqBT2S66d4ZfqnjiBvMLIdix5TeCc/GEN1Rgwg=="
		],
		"./images/app_icons/app_icon-114x114.png" => [
			"Version" => 5,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "U+JR1ScLTBa55D4kSeItOYDBPD0iVCrEmlWNAfl4n/yEsp7lEQtRpMOaPNtUcKGL54nKduAkjN1dh4lv/j0ERQ=="
		],
		"./images/touch_icons/touch_icon-180x180.png" => [
			"Version" => 6,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "orB/G4EAseFJ+xDivo5SgtAaEg3TCiSRjjjqZ3IEBwqFObggpvmBNjlIfPK2VYHdcsU//xrE4XUvrsFsqlzypA=="
		],
		"./images/touch_icons/touch_icon-144x144.png" => [
			"Version" => 6,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "T/jsBMu4qPCAkCZSFalH2q51ckHyeHnAAh2a6WOe7I9ueagN8IA4J3hnxAZTUJILm3Jjkzp3Ixz3v57nOhGcCg=="
		],
		"./images/logo_small.svg" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "i7+n9MbIQCXdfta6ITG9x+NfvaXw1HtWgOFpZD5abJPC9/kwQzjgDPSdwNUegywCyfvZBbPqkkENuwRE0svQ+Q=="
		],
		"./images/touch_icons/touch_icon-57x57.png" => [
			"Version" => 6,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "7KiOW6LBbVa665HD5GqGvvCdcSx8x8NSFYqn/kScISnDLWq/p69Ub21sFiTFdYERwkLzg1jfku4ny3uiem1smQ=="
		],
		"./images/tile_images/tile_image-310x150.png" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "a4zlL6GXGWx+CkscTdtb4db0GnBH9CtvmbYsLgv3xTNZ8B7pj86woeSd6OukA6HWivVga6U4FMjaDLUVlLVo8Q=="
		],
		"./images/touch_icons/touch_icon-167x167.png" => [
			"Version" => 6,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "Ilbe8853D9Y0cVIt3Y3RTgxFA0/fFhEPseRxmja2ktun17r7qNlF+l7LTFogruqWOrek2rOhBcdwS3ev0RmGLQ=="
		],
		"./images/touch_icons/touch_icon-120x120.png" => [
			"Version" => 6,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "CEvrLz28mgcUdKxuzeeLL2FxVH/GryBSGhMkOEskjOMeQb0hTXbFjnzv37PybGitREzatLUH6EhwCySqENlRnA=="
		],
		"./images/app_icons/app_icon-384x384.png" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "brCLTAz5RA5lmdp8yeEadk1tVFZFvIEeeQoCeNZbOG4IgQLvQYm7GPov+FNiCElyflNPPRCRK24uGut1sEQoDg=="
		],
		"./images/app_icons/app_icon-512x512.png" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "m5Yogh0xABSeFHkZBQGFUPfgSVYH7W7O3bhpN5YHpJyRAaOKRg+QXEMuZU3dpBWj/sikKNsGG6iZjBbfxLYWKA=="
		],
		"./images/app_icons/app_icon.svg" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "xMR6vmv2Kvv952moj7vWjAeajvSKmmkbDblSDEgzK0co3R4JbTI+53uLybJAteIQNiWGCcRopw+x2DF4d2EwDA=="
		],
		"./images/app_icons/app_icon-256x256.png" => [
			"Version" => 4,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "ao8ydhrkQSRm/Wn2xo9S0mWwMNRMr1kn2BIskWGAnlJzbMfrk6eZVv/Dsx1OvoGtYeJYSvI9ICTgfkldFPd98g=="
		],
		"./images/app_icons/app_icon-192x192-mobile.png" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "/QOYqpPj4saqmVLKm5g/Ise7oRCiZwJ4SBszh8Uii8FXbH+NOSFBrLHzShWemuDcv8UACIdirudMEA+NRwVTBQ=="
		],
		"./images/app_icons/app_icon-256x256-mobile.png" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "7s+vHVZDiclgTx11ZFM1IcJ2bflVTCNbJ5uXOy1i1WB6YmyJiju8j2Zrygp5WOadyHEkPRkhdaaH4kcbSG0BPA=="
		],
		"./images/app_icons/app_icon-32x32.png" => [
			"Version" => 5,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "8/eMVhg6nGzmzd+fkZ7mlyQaLLy6VvmkXnJyzBPDz87/RX+e7oXcZbqYER5ShFh3mgxTF1hNMsgbqtWa19x2RA=="
		],
		"./images/mask_images/mask_image.svg" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "jX46GRxl03e1+FF+xvNiXa2roRnLfQjCZsmjFfFqWXhVpDA8qfdPVlOPysXMX2SXSzGISkH77MM1hbm2/E/qoQ=="
		],
		"./images/logo_big.svg" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "cwWAMRY3P0swCMogiglMzxJaEx1mqJNsc7l7OtP0DleoM9WLggNLidZ681tbhBc1hJL844a+7lKd0k9JyMKhvw=="
		],
		"./images/app_icons/app_icon-120x120.png" => [
			"Version" => 4,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "f4vKlplWm1ehQT2zQpsc+rTAxsWDXy0izZo4/JJ8akRaUffsHs7AghCw0jaP7MWRWszMB+q7Y+8EoCCsatyacQ=="
		],
		"./images/app_icons/app_icon-180x180.png" => [
			"Version" => 4,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "pFf0SFovITFfFqweiKhhdX2PIFhYu9QehYFgMbrnGxLMjOlTg0bsr1jvvOKe2LNv8O8HtEn14X89BiZISwpwWA=="
		],
		"./images/touch_icons/touch_icon-152x152.png" => [
			"Version" => 6,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "NgxJ8T19FxWYQfH9YDLWJHxDdYj4KMFqUtkbNvoZpa5W6RC970KyPYtW3SD0WVSYE8WYYtH1jKHAOWyNY2rh/w=="
		],
		"./images/touch_icons/touch_icon-114x114.png" => [
			"Version" => 6,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "a/oINidjWR5POHUQv0kQvpxVgTY9OCJBBGi6GVIohJ1iYnDnteZ5311kEHHytkAWEUK63sehCyYm47WTuf+11w=="
		],
		"./images/app_icons/app_icon-192x192.png" => [
			"Version" => 4,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "mnKFx4RG0ZtdtIYJc/dKM5/sOmUGKHzRFIF110w5Mz5pVnJqMbBgeII2i5enx/g7tO3jutnQoeg8DjvK7YuMog=="
		],
		"./images/app_icons/app_icon-48x48.png" => [
			"Version" => 4,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "XQMVcSfxOWy7a7qIs9TK41H5NboS2vHuVgLahNTeFHA1Q8Q+XKViHr2vX07Xtj837sCGzDics0BW+jiqyVYkYA=="
		],
		"./images/app_icons/app_icon-16x16.png" => [
			"Version" => 8,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "Nww9cqb81YoNraFe6JdSInU5BlkkyqbtdaD9XtSpFZh5fnmLEGojQj2uMhvjVpV4v0JqQ+shvYtKflvXT6DsZA=="
		],
		"./images/app_icons/app_icon-24x24.png" => [
			"Version" => 5,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "pJ4if6I3Ps8ItDYtTkruAAvaPUErNiwpKwH9JID9QVUjKrTWzM2eAS7WbDN1rdK3u0+CGGp+qdDsISvrRZ5hGg=="
		],
		"./images/touch_icons/touch_icon-76x76.png" => [
			"Version" => 6,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "pPKWb8sFr+8zAPTNla5MC/qj2RaO5thoI37cIenbViYTPtaHx1axkgldQnukDF7+gs0g6NbXmflpB/BvsKFvMQ=="
		],
		"./images/app_icons/app_icon-144x144.png" => [
			"Version" => 4,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "ERloWcoV1xJ7Z191mG1Mh58qsWr/59gPxD0j7lsWllTDi7M10aD/+MUoMS2hmqPUBJDNJYAra951bo7VFLaaAQ=="
		],
		"./images/app_icons/app_icon-128x128.png" => [
			"Version" => 4,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "caTLD2jtqhTWumHiyKvGJUXxpi7cb75/wsd+c5dyNkbPf6ba3cqlz2wnN1OQASc9sOq3NWcIyZsh7A4g3is4Gw=="
		],
		"./site.webmanifest" => [
			"Version" => 6,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./styles/cookie_acceptance.css" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "yNoD8zcrrXknw217hgixUKhFmhQlbtij9gDpuC8CUxo2jT7R9x6xy2vxsmMBFSWRXf6s7ROLw59OfW6uReYw3Q=="
		],
		"./styles/language.css" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "5PYX2RTv4LhZ3QhW2Dmj1262W+rFGiyMOyxxukH+we7y7cJ5+7cbp/gBY8cZxt4IhKFaxKZS/YlJE58JNt3I+g=="
		],
		"./styles/normalize.css-8.0.1.css" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "oHDEc8Xed4hiW6CxD7qjbnI+B07vDdX7hEPTvn9pSZO1bcRqHp8mj9pyr+8RVC2GmtEfI2Bi9Ke9Ass0as+zpg=="
		],
		"./styles/common.css" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "ohk72Jtnb3WvwDRvudon3XPZTihcE1LrnofYCSdJhtKFLKd4ywGCmFb0pE5EdbPjTcrewCg8jbBHYFgWMbFqoQ=="
		],
		"./styles/unlocked.css" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./styles/sections.css" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "XD9ZdiMk+TvjGzPL9bShDP8BHp1n5SyqVAtRs3AreF6Nq+KXPASTM+yEASG0wbibhpJvqb4YEWyQadd4gM7D6Q=="
		],
		"./styles/section.css" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => NULL
		],
		"./styles/settings_section.css" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "xrlfUeqc9EIcXeWCUYozrJSCCpJbGSO+2XJgzH+RErsFp+7VfJFVPb9FriaQ4F3SXDp/7qkA1oxwgAdUEluVCg=="
		],
		"./styles/about_section.css" => [
			"Version" => 33,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "TjYGmC1b6EccwOqFE8D+lXJxiKHGZ3c2tcxduyuI7mn1Hmwecf0KVsygY69vGLONgMYAXDg/sWLwaH+O/gF/8g=="
		],
		"./styles/transaction_section.css" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "+wOmSIcXhTPdlpVyPyIPvb0NR7yS7MHFV00tXAFsTsNDh9OPENoZqllRBLjubMauo6G2cRHgVo7J18BgwAqOIg=="
		],
		"./styles/account_section.css" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "+iLOox399ALnS2ocTTcoR8TeLA911Bq1xoTAcINCUU40rxukwsiTQUbPLWxukc4VqPRhUlbTiTLie5fVPL64+Q=="
		],
		"./styles/wallet_section.css" => [
			"Version" => 9,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "EyICm3EVTVoUfvkdrs8IZaIgrPe9hdjZCYGxYHYLpv2j/vCBFh+1i4yjPZ0l6dxky+N1lgjYKdIMsCGt1Tr7KQ=="
		],
		"./styles/send_payment_section.css" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "E5KqJyBcwGM3CzCF8ziW3u7sE7y6nMtqv0kqv2/sGBke6E8LoNZSIVbw7CJmeY6ntdZHYJxkRWZoXGbrfhCOeQ=="
		],
		"./styles/log_section.css" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "JwKwEq3nloUiDFDlyDhfU7V6cefwuMk/gHnY3mwfDRWLAjSA3ruFfPuwVOmG51PzGVD4x6LChS/HuJ1H2H7xZg=="
		],
		"./styles/maintenance_notification.css" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "q79WEpMo+R2RYySejWphzSYln0nqOjA87HUkxFF8CclMrAlbZmOAda7dohJHELl81FzP5BmxWa8VEVdPnnYLRA=="
		],
		"./styles/install_app.css" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "xuP3NU/Hfnt3btDEO6WHwJIC40KPForIYv6WmXALtPTFDCfnCXOpcktWCjoYutEpRXMnVKoVccOhARjsyE/XMA=="
		],
		"./styles/application.css" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "JFrhObnj+aDK5xsGZMZ6T+2AK0xpV3qYq6Nn8unlRvRz7GPNxpmpyPCgr243qInwAInTNkj1TgXALJTKvBQViw=="
		],
		"./styles/message.css" => [
			"Version" => 14,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "Ww7hVYVGdM7GE9eWeSeh/fTo76FVvDGJrmCVLapctoNSB8/uaQWSEoLCsWVEueW3ZSyhHBl83b9rk5sz4xq5WA=="
		],
		"./styles/tetris.css" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "fV8QPcheziketlQHDWmDsP2g7qN4CGmm+UyokQmE8FrKqjCkpgk68Ed7XHBp/OY3RwPoWaAdIGi8yjE+Qmnu3A=="
		],
		"./styles/logo.css" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "hnZGSVs8LcsvigzEHmBflZxC9mieQMIbEAQj/ypigphJFmirUugtRm4BsiJRGphIC5QNMvFyDsdXseyd+gaNeg=="
		],
		"./shaders/logo.frag" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "uUjiE+dVO09wWQuctlP2VBwMfbfmAW/xuvqL0VAKfMrYMoyuEGTVUBLy0Hc8rWyND3paJLtFS4EjFtSk+AvBDw=="
		],
		"./shaders/logo.vert" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "vSZoTodVV1zVsJ5XQHkdHfg0GYR5TX58MM/nSXMJ7p9TwaBjr/sNOcY6TISoa6Y1RBTWVczZM0jWs5nsO1u6IA=="
		],
		"./models/mwc.json" => [
			"Version" => 5,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "lN13VlgTjnoJSA7/ribpU/cYIkv/I+Kae2eEbzpSk/zQ4J4IxoNlQ9cpcQYrIJRrLFe9QIprXNZgwsFlWdJqNg=="
		],
		"./scripts/BLAKE2b license.txt" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "qqcTSJHo3upbPBJR1exc31V0W9MoKKpCuSciuQ8Wr+hYVF+NmdYYCqdABSb2S84Xr8I1WkHeDMOzI5Fbtd5vHw=="
		],
		"./scripts/base64.js license.txt" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "cY8GK2XA/Ti4mQ9Ds6YxaRdC8876FIZ+hlwu3u9gAA176EFezcvcDSdh+OOibVmoADinP+4kVS4a4TX0NHy8gg=="
		],
		"./scripts/crc32 license.txt" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "+ZcrmzsP3IHjWOBoSb0idDvDXvHkWVzqR98/EZdANUoeDg8bJOmM1aS7KhdEWdGO/ejk5jSwbl0bT8lqaLTBIg=="
		],
		"./scripts/bignumber.js license.txt" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "gfSMQ0Z0PmIZw/NCu+llDR6IjwiJqzdKNP6yWglpsHpQY/9UI5axU1uTSsp9KKBDNFgxuiwa+YxcdLepB/izzg=="
		],
		"./scripts/bech32 license.txt" => [
			"Version" => 1,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "AakMfPm2wq07yVmqIBnTO6Bj9zKALq7T+wRvLUPsBn1JZctun/MACmC0OxyLruV+GUX45DUxvBXG1Rcm6bd1XQ=="
		],
		"./scripts/ChaCha license.txt" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "1C7ZACZXUPp8Zy+0C43TlyPbOWrskOluiBLoI8yaoSKS/zV3I632A6T9NXyXbQdby220iysum6I/vr/FLgUwPA=="
		],
		"./images/countries/Country Flags license.txt" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "ZrTab6FbCrWIxUi3vCup9rtWi5Mq2eKxFBxuT/a8IKbEzLLvoG1FD0TajprEcClniJQLRcfbSY9AWMqZXFzdIA=="
		],
		"./fonts/font_awesome/Font Awesome license.txt" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "nXcGEO5ZIMn3PLQtikE8+zxxBMnZNgNSDslF7MK5U5C+9vrYWSbJfId7yYDjIIMqGNloclGUPBQw6Yqi71sEcw=="
		],
		"./scripts/glMatrix license.txt" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "HKES2T36EnbF88OT/UyWxQ8KDSnS3x8xvetmr38epBEBYG6aLoHxWUMFtFfwDUgf8mGa/cdSMe+4CaEAatXYrw=="
		],
		"./scripts/hi-base32 license.txt" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "I93NWqGcrmBBppLx2N0ASJnB94ZCklj5OrZGqa7QzfzGCS1mEegXR+7Lnoohl9vb9uJatRAmmfAmbyjg36K0QA=="
		],
		"./scripts/JSONBigNumber license.txt" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "VskaH5EuExNsaMwR4iexZhz0cGGtI6Oj7fVngEAQ9IBMI3aJtkrl4fJE/joj0pgYYKPPJx+hi2loA+Xv9VL3cQ=="
		],
		"./scripts/jQuery license.txt" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "I//WQZK/IcsrwOx5Z5e2wHu5wBE6DS0Z9u8OX1Tp4AQuMICytxU4jfKhjFRTO7gyyS6bmB1zp+vC8PsvIR49GA=="
		],
		"./scripts/jsQR license.txt" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "MGmvPgoZ1MR+vP43MnsFnRhitgp4CjS5vNLEKzBO++bT7TIcvR/73qvINTfwy4tK3u6qomK7dFdwpcpnFRnFLQ=="
		],
		"./scripts/js-sha3 license.txt" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "xqluHqX7LN2vwHKVgNfFApwQ/D5GAfEM2rWtuLszEhYk+g2Nmk5Ket/YS4VwEwf+O5ZMnFkXW3jTAFVQt0fyAQ=="
		],
		"./scripts/js-sha256 license.txt" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "+URz+C7K7G1agtqu6vjZUWLiNMxk6ZmrRNcxHs7pb1sbD5yMPsPp8VEiSBWUqkKPMcm/XiKsXL32ue6by7dDdg=="
		],
		"./scripts/LedgerJS Browser license.txt" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "qqcTSJHo3upbPBJR1exc31V0W9MoKKpCuSciuQ8Wr+hYVF+NmdYYCqdABSb2S84Xr8I1WkHeDMOzI5Fbtd5vHw=="
		],
		"./scripts/secp256k1-zkp license.txt" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "qqcTSJHo3upbPBJR1exc31V0W9MoKKpCuSciuQ8Wr+hYVF+NmdYYCqdABSb2S84Xr8I1WkHeDMOzI5Fbtd5vHw=="
		],
		"./scripts/SMAZ license.txt" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "qqcTSJHo3upbPBJR1exc31V0W9MoKKpCuSciuQ8Wr+hYVF+NmdYYCqdABSb2S84Xr8I1WkHeDMOzI5Fbtd5vHw=="
		],
		"./fonts/btc/BTC license.txt" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "U88z3axdRLn2IqBB8me89TynBFVfBIHuPonuulBQGcjR1QSm/+fr1qfR1dfSbPPaBSzGOzVA60JgznSpPPNYQQ=="
		],
		"./fonts/eth/ETH license.txt" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "U88z3axdRLn2IqBB8me89TynBFVfBIHuPonuulBQGcjR1QSm/+fr1qfR1dfSbPPaBSzGOzVA60JgznSpPPNYQQ=="
		],
		"./fonts/grin/GRIN license.txt" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "U88z3axdRLn2IqBB8me89TynBFVfBIHuPonuulBQGcjR1QSm/+fr1qfR1dfSbPPaBSzGOzVA60JgznSpPPNYQQ=="
		],
		"./styles/normalize.css license.txt" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "pSezlYXaPnUcXgNY1uTcePkCVL/YagLTAJeajG2n48iVI2DfWfptvDVQDpERSLEOsChtHBE0tvsAnkab/IUDaQ=="
		],
		"./fonts/open_sans/Open Sans license.txt" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "TMWhK/6YTApQv3lD4tcKlI1SDvQjZ3x3YpcHqs46lao3jSBd6SkQXWRGgGeecO8kSUebNgrUSJa3W6/tZmEycg=="
		],
		"./scripts/qrcode-generator license.txt" => [
			"Version" => 3,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "tgy0QxH9sSKe59CiCWgPJyln99UoIiuedEgdGp35X76n19dEF/uYOUJ6BxPNa/uZGdnLmgcwn0+oBZcniIXsVA=="
		],
		"./scripts/Ed25519 license.txt" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "qqcTSJHo3upbPBJR1exc31V0W9MoKKpCuSciuQ8Wr+hYVF+NmdYYCqdABSb2S84Xr8I1WkHeDMOzI5Fbtd5vHw=="
		],
		"./scripts/X25519 license.txt" => [
			"Version" => 4,
			"Cache" => TRUE,
			"Minified" => FALSE,
			"Checksum" => "qqcTSJHo3upbPBJR1exc31V0W9MoKKpCuSciuQ8Wr+hYVF+NmdYYCqdABSb2S84Xr8I1WkHeDMOzI5Fbtd5vHw=="
		],
		"./images/down arrow license.txt" => [
			"Version" => 3,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "nXcGEO5ZIMn3PLQtikE8+zxxBMnZNgNSDslF7MK5U5C+9vrYWSbJfId7yYDjIIMqGNloclGUPBQw6Yqi71sEcw=="
		],
		"./images/bluetooth license.txt" => [
			"Version" => 1,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "nXcGEO5ZIMn3PLQtikE8+zxxBMnZNgNSDslF7MK5U5C+9vrYWSbJfId7yYDjIIMqGNloclGUPBQw6Yqi71sEcw=="
		],
		"./images/usb license.txt" => [
			"Version" => 1,
			"Cache" => FALSE,
			"Minified" => FALSE,
			"Checksum" => "nXcGEO5ZIMn3PLQtikE8+zxxBMnZNgNSDslF7MK5U5C+9vrYWSbJfId7yYDjIIMqGNloclGUPBQw6Yqi71sEcw=="
		]
	];
	
	// Attributions
	const ATTRIBUTIONS = [
		"BLAKE2b WASM Wrapper" => [
			"URL" => "https://github.com/NicolasFlamel1/BLAKE2b-WASM-Wrapper",
			"License Path" => "./scripts/BLAKE2b license.txt",
			"License Type" => "MIT License"
		],
		"base64.js" => [
			"URL" => "https://github.com/dankogai/js-base64",
			"License Path" => "./scripts/base64.js license.txt",
			"License Type" => "BSD 3-Clause \"New\" or \"Revised\" License"
		],
		"bech32" => [
			"URL" => "https://github.com/bitcoinjs/bech32",
			"License Path" => "./scripts/bech32 license.txt",
			"License Type" => "MIT License"
		],
		"bignumber.js" => [
			"URL" => "https://github.com/MikeMcl/bignumber.js",
			"License Path" => "./scripts/bignumber.js license.txt",
			"License Type" => "MIT License"
		],
		"ChaCha" => [
			"URL" => "https://github.com/calvinmetcalf/chacha20poly1305",
			"License Path" => "./scripts/ChaCha license.txt",
			"License Type" => "MIT License"
		],
		"Country Flags" => [
			"URL" => "https://www.countryflags.com",
			"License Path" => "./images/countries/Country Flags license.txt",
			"License Type" => "Country Flags Non-Commercial License"
		],
		"crc32" => [
			"URL" => "https://github.com/SheetJS/js-crc32",
			"License Path" => "./scripts/crc32 license.txt",
			"License Type" => "Apache License Version 2.0"
		],
		"Ed25519 WASM Wrapper" => [
			"URL" => "https://github.com/NicolasFlamel1/Ed25519-WASM-Wrapper",
			"License Path" => "./scripts/Ed25519 license.txt",
			"License Type" => "MIT License"
		],
		"Font Awesome" => [
			"URL" => "https://fontawesome.com",
			"License Path" => "./fonts/font_awesome/Font Awesome license.txt",
			"License Type" => "Font Awesome Free License"
		],
		"glMatrix" => [
			"URL" => "https://github.com/toji/gl-matrix",
			"License Path" => "./scripts/glMatrix license.txt",
			"License Type" => "MIT License"
		],
		"hi-base32" => [
			"URL" => "https://github.com/emn178/hi-base32",
			"License Path" => "./scripts/hi-base32 license.txt",
			"License Type" => "MIT License"
		],
		"JSONBigNumber" => [
			"URL" => "https://github.com/wbuss/JSONBigNumber",
			"License Path" => "./scripts/JSONBigNumber license.txt",
			"License Type" => "MIT License"
		],
		"jQuery" => [
			"URL" => "https://github.com/jquery/jquery",
			"License Path" => "./scripts/jQuery license.txt",
			"License Type" => "MIT License"
		],
		"jsQR" => [
			"URL" => "https://github.com/cozmo/jsQR",
			"License Path" => "./scripts/jsQR license.txt",
			"License Type" => "Apache License Version 2.0"
		],
		"js-sha256" => [
			"URL" => "https://github.com/emn178/js-sha256",
			"License Path" => "./scripts/js-sha256 license.txt",
			"License Type" => "MIT License"
		],
		"js-sha3" => [
			"URL" => "https://github.com/emn178/js-sha3",
			"License Path" => "./scripts/js-sha3 license.txt",
			"License Type" => "MIT License"
		],
		"LedgerJS Browser" => [
			"URL" => "https://github.com/NicolasFlamel1/LedgerJS-Browser",
			"License Path" => "./scripts/LedgerJS Browser license.txt",
			"License Type" => "MIT License"
		],
		"Noto" => [
			"URL" => "https://fonts.google.com/noto",
			"License Path" => "./fonts/btc/BTC license.txt",
			"License Type" => "SIL Open Font License Version 1.1"
		],
		"normalize.css" => [
			"URL" => "https://github.com/necolas/normalize.css",
			"License Path" => "./styles/normalize.css license.txt",
			"License Type" => "MIT License"
		],
		"Open Sans" => [
			"URL" => "https://fonts.google.com/specimen/Open+Sans",
			"License Path" => "./fonts/open_sans/Open Sans license.txt",
			"License Type" => "Apache License Version 2.0"
		],
		"qrcode-generator" => [
			"URL" => "https://github.com/kazuhikoarase/qrcode-generator",
			"License Path" => "./scripts/qrcode-generator license.txt",
			"License Type" => "MIT License"
		],
		"Secp256k1-zkp WASM Wrapper" => [
			"URL" => "https://github.com/NicolasFlamel1/Secp256k1-zkp-WASM-Wrapper",
			"License Path" => "./scripts/secp256k1-zkp license.txt",
			"License Type" => "MIT License"
		],
		"SMAZ WASM Wrapper" => [
			"URL" => "https://github.com/NicolasFlamel1/SMAZ-WASM-Wrapper",
			"License Path" => "./scripts/SMAZ license.txt",
			"License Type" => "MIT License"
		],
		"X25519 WASM Wrapper" => [
			"URL" => "https://github.com/NicolasFlamel1/X25519-WASM-Wrapper",
			"License Path" => "./scripts/X25519 license.txt",
			"License Type" => "MIT License"
		]
	];
	
	
	// Main function
	
	// Check if disabling file versions
	if(array_key_exists("NO_FILE_VERSIONS", $_SERVER) === TRUE) {
	
		// Go through all files
		foreach($files as &$file) {
		
			// Set that file doesn't have a version
			$file["Version"] = 0;
		}
	}
	
	// Check if disabling file checksums
	if(array_key_exists("NO_FILE_CHECKSUMS", $_SERVER) === TRUE) {
	
		// Go through all files
		foreach($files as &$file) {
		
			// Set that file doesn't have a checksum
			$file["Checksum"] = NULL;
		}
	}
	
	// Check if disabling minified files
	if(array_key_exists("NO_MINIFIED_FILES", $_SERVER) === TRUE) {
	
		// Go through all files
		foreach($files as &$file) {
		
			// Set that file isn't minified
			$file["Minified"] = FALSE;
		}
	}
	
	
	// Supporting function implementation
	
	// Add minified suffix
	function addMinifiedSuffix($file) {
	
		// Get file's suffix offset
		$suffixOffset = mb_strrpos($file, ".");
		
		// Check if file contains no suffix
		if($suffixOffset === FALSE || $suffixOffset < mb_strlen("./"))
		
			// Return file with minified suffix at the end
			return $file . ".min";
		
		// Otherwise
		else
		
			// Return file with minified suffix insert before its suffix
			return mb_substr($file, 0, $suffixOffset) . ".min" . mb_substr($file, $suffixOffset);
	}
	
	// Get resource
	function getResource($file) {
	
		// Use files
		global $files;
	
		// Return resource with version
		return ((array_key_exists($file, $files) === TRUE && $files[$file]["Minified"] === TRUE) ? addMinifiedSuffix($file) : $file) . ((array_key_exists("NO_FILE_VERSIONS", $_SERVER) === FALSE && array_key_exists($file, $files) === TRUE && $files[$file]["Version"] !== 0) ? "?" . $files[$file]["Version"] : "");
	}
	
	// Get checksum
	function getChecksum($file) {
	
		// Use files
		global $files;
	
		// Return checksum
		return (array_key_exists("NO_FILE_CHECKSUMS", $_SERVER) === FALSE && array_key_exists($file, $files) === TRUE && $files[$file]["Checksum"] !== NULL) ? "sha512-" . $files[$file]["Checksum"] : "";
	}
?>
