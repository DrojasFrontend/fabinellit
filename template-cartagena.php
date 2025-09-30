<?php
/* 
* Template Name: Cartagena
*/

get_header(); 

$places = [
    "coffee_breakfast_brunch" => [
        "id" => "coffee_breakfast_brunch",
        "title" => "COFFEE BREAKFAST & BRUNCH",
        "title_es" => "COFFEE BREAKFAST & BRUNCH",
        "img" => THEME_IMG . 'icons/icon-brunch-2.svg',
        "places" => [
            [
                "name" => "Época Espresso",
                "detalle" => "Arepa de huevo & French toast; great coffee.",
                "address" => "Cra. 5 # 34 - 52",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 315 8008072",
                "link" => "https://www.instagram.com/weare.epoca/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/coffee-001.png',
            ],
            [
                "name" => "Ely Café",
                "detalle" => "French toast and amazing croissants.",
                "address" => "Calle 7 # 2 - 50",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 316 8752466",
                "link" => "https://www.instagram.com/ely.cafe/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/coffee-002.png',
            ],
            [
                "name" => "Café San Alberto",
                "detalle" => "Award-winning Colombian beans.",
                "address" => "Cra. 3 # 35 - 18",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 318 7964457",
                "link" => "https://www.instagram.com/cafe_san_alberto/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/coffee-003.png',
            ],
            [
                "name" => "MILA PASTELERÍA",
                "detalle" => "Chic bakery & dessert spot.",
                "address" => "Cl. de la Iglesia # 35 - 76",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 317 2573024",
                "link" => "https://www.mila.com.co",
                "image" => THEME_IMG . 'places-cartagena/coffee-004.png',
            ],
            [
                "name" => "ÁBACO LIBROS Y CAFÉ",
                "detalle" => "Coffee & books combo.",
                "address" => "Calle 36 # 3 - 86",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6786143",
                "link" => "https://www.instagram.com/abaco_libros_y_cafe/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/coffee-005.png',
            ],
            [
                "name" => "CREPES & WAFFLES",
                "detalle" => "Colombian chain, casual vibe, great for lunch/dessert.",
                "address" => "Pl. de San Pedro Claver",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 305 7434343",
                "link" => "https://www.instagram.com/crepesywaffles/",
                "image" => THEME_IMG . 'places-cartagena/coffee-006.png',
            ],
        ]
    ],
    "lunch" => [
        "id" => "lunch",
        "title" => "LUNCH & DINNER FAVORITES",
        "title_es" => "LUNCH & DINNER FAVORITES",
        "img" => THEME_IMG . 'icons/icon-restaurants-2.svg',
        "places" => [
            [
                "name" => "Celele",
                "detalle" => "Top-15 Latin America, avant-garde coastal food.",
                "address" => "Cra. 10C # 29 - 200",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 301 7420389",
                "link" => "https://celelerestaurante.com",
                "image" => THEME_IMG . 'places-cartagena/restaurant-001.png',
            ],
            [
                "name" => "DON JUAN",
                "detalle" => "Elegant Colombian cuisine.",
                "address" => "Av Carlos Escallon 34-01",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 9174654",
                "link" => "https://restaurantedonjuan.co",
                "image" => THEME_IMG . 'places-cartagena/restaurant-002.png',
            ],
            [
                "name" => "Candé",
                "detalle" => "Live folkloric music, posta cartagenera recommended.",
                "address" => "Calle de la Serrezuela # 39 - 10",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6685291",
                "link" => "https://restaurantecande.com",
                "image" => THEME_IMG . 'places-cartagena/restaurant-003.png',
            ],
            [
                "name" => "HARRY’S SASSON",
                "detalle" => "Inside Charleston Santa Teresa, refined classics.",
                "address" => "Cra. 3 # 31 - 19",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6501015",
                "link" => "https://www.hotelcharlestonsantateresa.com/es/restaurantes-bar/harry-s-cartagena",
                "image" => THEME_IMG . 'places-cartagena/restaurant-004.png',
            ],
            [
                "name" => "M COCINA ÁRABE",
                "detalle" => "Bocagrande staple for Lebanese dishes.",
                "address" => "Cl. 6 # 3 - 24",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 300 2395658",
                "link" => "https://www.instagram.com/mcocina_/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/restaurant-005.png',
            ],
            [
                "name" => "JUAN DEL MAR",
                "detalle" => "Caribbean-inspired seafood.",
                "address" => "Plaza de San Diego, 8 - 12",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 312 7148778",
                "link" => "https://juandelmar.com/es/inicio//",
                "image" => THEME_IMG . 'places-cartagena/restaurant-006.png',
            ],
            [
                "name" => "La Vitrola",
                "detalle" => "Old-school Cartagena, iconic interior.",
                "address" => "Cra. 2 # 33 - 66",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6648243",
                "link" => "https://www.instagram.com/lavitrolacartagena/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/restaurant-007.png',
            ],
            [
                "name" => "Agua de León",
                "detalle" => "Colombian fusion & fashion-forward crowd.",
                "address" => "Calle de Ayos # 4 - 46",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 315 2780517",
                "link" => "https://www.instagram.com/aguadeleonrestaurante/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/restaurant-008.png',
            ],
            [
                "name" => "LA ÚNICA",
                "detalle" => "Mexican fare, famed for tacos & carajillos.",
                "address" => "Cra. 8 # 38 - 476",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 315 2780517",
                "link" => "https://www.instagram.com/launicactg/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/restaurant-009.png',
            ],
            [
                "name" => "EL ÁRABE",
                "detalle" => "Lebanese-Colombian classics, best pistachio ice cream.",
                "address" => "Cra. 3 # 8 - 836",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6783200",
                "link" => "https://www.restaurantearabeinternacional.com",
                "image" => THEME_IMG . 'places-cartagena/restaurant-010.png',
            ],
            [
                "name" => "MARE RESTAURANTE",
                "detalle" => "Contemporary seafood & terrace dining.",
                "address" => " Cra. 6 # 32 ",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 304 4129411",
                "link" => "https://restaurantemare.com",
                "image" => THEME_IMG . 'places-cartagena/restaurant-011.png',
            ],
            [
                "name" => "SAN VALENTÍN <br> COCINA Y TRAGOS",
                "detalle" => "Dinner with live music & cocktails.",
                "address" => "Cl. 37 #2886 6 - 33",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 310 4153330",
                "link" => "https://www.sanvalentinrestaurantebar.com/",
                "image" => THEME_IMG . 'places-cartagena/restaurant-012.png',
            ],
            [
                "name" => "BUENA VIDA <br> MARISQUERÍA",
                "detalle" => "Casual rooftop seafood with vibrant decor.",
                "address" => "Calle del Porvenir, Esquina",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 322 3061025",
                "link" => "https://www.buenavidamarisqueria.com",
                "image" => THEME_IMG . 'places-cartagena/restaurant-013.png',
            ],
            [
                "name" => "SAN NICOLÁS <br> RESTAURANTE BAR",
                "detalle" => "Local favorite for live music dining..",
                "address" => "Cl. 25 #8b162",
                "city" => "Getsemaní, Cartagena",
                "phone" => "+57 310 6221662",
                "link" => "https://sannicolasrestaurantebar.com",
                "image" => THEME_IMG . 'places-cartagena/restaurant-014.png',
            ],
            [
                "name" => "Casa Pestagua <br> (RESTAURANT)",
                "detalle" => "Ideal for dinner. Try: Lobster Ceviche and langostinos en mantequilla agria de tomates.",
                "address" => "Cra. 3 # 33 - 63",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 (605) 6649510",
                "link" => "https://casapestagua.com/gastronomia/",
                "image" => THEME_IMG . 'places-cartagena/restaurant-015.png',
            ],
        ]
    ],
    "bars_clubs_nightlife" => [
        "id" => "bars_clubs_nightlife",
        "title" => "BARS, CLUBS & NIGHTLIFE",
        "title_es" => "BARS, CLUBS & NIGHTLIFE",
        "img" => THEME_IMG . 'icons/icon-bars-2.svg',
        "places" => [
            [
                "name" => "El Barón",
                "detalle" => "Old-Fashioned 'Puro' & Aperol Spritz.",
                "address" => "Cra. 4 # 31 - 7",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 315 6463018",
                "link" => "https://www.elbaron.co",
                "image" => THEME_IMG . 'places-cartagena/bar-002.png',
            ],
            [
                "name" => "Alquímico",
                "detalle" => "Rooftop mixology, ranked top 10 globally.",
                "address" => "Calle Colegio # 34 - 24",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 316 5331932",
                "link" => "https://www.instagram.com/alquimicocartagena/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/bar-003.png',
            ],
            [
                "name" => "La Jugada",
                "detalle" => "Multi-level party scene.",
                "address" => "Cra. 6 # 34 - 25",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 316 3194481",
                "link" => "https://www.tripadvisor.co/Restaurant_Review-g297476-d10274853-Reviews-La_Jugada_Club_House-Cartagena_Cartagena_District_Bolivar_Department.html",
                "image" => THEME_IMG . 'places-cartagena/bar-004.png',
            ],
            [
                "name" => "LA MOVIDA",
                "detalle" => "Cocktail club with local DJs.",
                "address" => "Cl. 31 # 3 - 37",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 316 5875350",
                "link" => "https://www.instagram.com/lamovidacartagena/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/bar-005.png',
            ],
            [
                "name" => "El Coro",
                "detalle" => "Gothic-style bar in Sofitel Santa Clara.",
                "address" => "Cra. 8 # 39 - 36",
                "city" => "Hotel Santa Clara",
                "phone" => "+57 (605) 6504700",
                "link" => "https://www.sofitellegendsantaclara.com/restaurants-bars/el-coro-lounge-bar/",
                "image" => THEME_IMG . 'places-cartagena/bar-006.png',
            ],
            [
                "name" => "DONDE FIDEL",
                "detalle" => "Salsa only, always packed.",
                "address" => "Portal de los Dulces, Cra. 4",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 314 5261892",
                "link" => "https://www.instagram.com/donde_fidel/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/bar-007.png',
            ],
            [
                "name" => "BAZURTO",
                "detalle" => "Champeta + Afrobeat + party culture.",
                "address" => "Cra. 9 # 30 - 42",
                "city" => "Getsemaní, Cartagena",
                "phone" => "+57 317 6481183",
                "link" => "https://www.instagram.com/bazurtosocialclub/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/bar-008.png',
            ],
            [
                "name" => "Café Havana",
                "detalle" => "Live salsa music, iconic vibe.",
                "address" => "Cra. 10 #ESQUINA",
                "city" => "Getsemaní, Cartagena",
                "phone" => "+57 312 4082896",
                "link" => "https://www.instagram.com/cafehavana_cartagena/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/bar-009.png',
            ],
            [
                "name" => "QUIEBRACANTO",
                "detalle" => "Intimate salsa bar with locals.",
                "address" => "Cra. 8b #25-30",
                "city" => "Getsemaní, Cartagena",
                "phone" => "+57 300 4300432",
                "link" => "https://www.instagram.com/quiebracantocartagena/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/bar-010.png',
            ],
        ]
    ],
    "shopping" => [
        "id" => "shopping",
        "title" => "SHOPPING",
        "title_es" => "SHOPPING",
        "img" => THEME_IMG . 'icons/icon-boutiques-2.svg',
        "places" => [
            [
                "name" => "St. Dom",
                "detalle" => "Old-Fashioned 'Puro' & Aperol Spritz.",
                "address" => "Cra. 3 # 33 - 70",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6354380",
                "link" => "https://www.instagram.com/stdomofficial/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/boutique-001.png',
            ],
            [
                "name" => "Silvia Tcherassi",
                "detalle" => "Fashion-forward boutique.",
                "address" => "Calle 31 # 31 - 11",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6790051",
                "link" => "https://co.silviatcherassi.com",
                "image" => THEME_IMG . 'places-cartagena/boutique-002.png',
            ],
            [
                "name" => "AGUA DE LEÓN",
                "detalle" => "Luxe multi-brand store.",
                "address" => "Cl. 35 # 3 - 16",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 315 2181536",
                "link" => "https://www.instagram.com/aguadeleon/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/boutique-003.png',
            ],
            [
                "name" => "MAYGEL CORONEL",
                "detalle" => "Edgy, feminine resort wear.",
                "address" => "Cl. 34 # 18 Local 1",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 301 4711734",
                "link" => "https://www.instagram.com/maygelcoronelofficial/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/boutique-004.png',
            ],
            [
                "name" => "ESTEFANÍA",
                "detalle" => "Soft, boho-chic collections.",
                "address" => "Calle San Juan de Dios # 3 - 25",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 300 6124694",
                "link" => "https://estefaniaofficial.co",
                "image" => THEME_IMG . 'places-cartagena/boutique-005.png',
            ],
            [
                "name" => "Malva",
                "detalle" => "Chic local fashion.",
                "address" => "Cra. 11 # 39 - 21",
                "city" => "Cartagena, Colombia",
                "phone" => "+57 300 3278066",
                "link" => "https://www.instagram.com/malva/?hl=en/",
                "image" => THEME_IMG . 'places-cartagena/boutique-006.png',
            ],
            [
                "name" => "AGUA BENDITA",
                "detalle" => "Iconic Colombian swimwear.",
                "address" => " Cl. de la Iglesia # 35 - 16",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 300 3278066",
                "link" => "https://www.aguabendita.com.co",
                "image" => THEME_IMG . 'places-cartagena/boutique-007.png',
            ],
            [
                "name" => "BAOBAB",
                "detalle" => "Handmade accessories & clothing.",
                "address" => "Calle Estanco del Tabaco 35/30",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 315 3745527",
                "link" => "https://baobab.com.co",
                "image" => THEME_IMG . 'places-cartagena/boutique-008.png',
            ],
            [
                "name" => "TOUCHE",
                "detalle" => "Colombian beachwear.",
                "address" => "Cl. de San Juan de Dios # 3 - 25",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 311 2135638",
                "link" => "https://touche.com.co/?srsltid=AfmBOop68WfzNHhjB2CBqamthFQHngJVcL55dU2hltLDZ6WGo7U3b7N5",
                "image" => THEME_IMG . 'places-cartagena/boutique-009.png',
            ],
            [
                "name" => "SOLOIO",
                "detalle" => "Menswear boutique.",
                "address" => "Cl. San Pedro Claver # 31 - 06",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 320 5781506",
                "link" => "https://soloio.com/es-co?dm_cam=22264491356&dm_grp=178329963514&dm_ad=733837648764&dm_kw=soloio&dm_net=adwords&gad_source=1&gad_campaignid=22264491356&gbraid=0AAAAA9RirTE9UFFYm1fUgq1NpB4y_Zys6&gclid=CjwKCAjw_-3GBhAYEiwAjh9fUAP6kuwhp3JVjdPqb8rKFAh1TxKO71RIi3Qwwt63xMElTP4W-YQRShoCAVcQAvD_BwE",
                "image" => THEME_IMG . 'places-cartagena/boutique-010.png',
            ],
            [
                "name" => "LA SERREZUELA",
                "detalle" => "Upscale mall in an old bullfighting ring.",
                "address" => "Cra. 11 # 39 - 21",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 6421795",
                "link" => "https://www.instagram.com/laserrezuela/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/boutique-011.png',
            ],
            [
                "name" => "ONDA DE MAR",
                "detalle" => "Colombian swimsuits & tropical resort wear.",
                "address" => "Pedro De Heredia # 31",
                "city" => "Centro Histórico, Cartagena",
                "phone" => "+57 (605) 56477949",
                "link" => "https://www.instagram.com/ondademar/?hl=en",
                "image" => THEME_IMG . 'places-cartagena/boutique-012.png',
            ],
        ]
    ],
    "sights_museums" => [
        "id" => "sights_museums",
        "title" => "MUST-SEE SIGHTS & MUSEUMS",
        "title_es" => "MUST-SEE SIGHTS & MUSEUMS",
        "img" => THEME_IMG . 'icons/icon-beauty-salons-2.svg',
        "places" => [
            [
                "name" => "CASTILLO SAN FELIPE DE BARAJAS",
                "detalle" => "Epic Spanish fortress.",
                "address" => '',
                "city" => "",
                "phone" => "",
                "link" => "https://fortificacionescartagena.com.co/es/planee-su-visita/castillo-de-san-felipe-de-barajas/",
                "image" => THEME_IMG . 'places-cartagena/beauty-001.png',
            ],
            [
                "name" => "Palacio de la Inquisición",
                "detalle" => "Dark history & colonial lore.",
                "address" => '',
                "city" => "",
                "phone" => "",
                "link" => "https://www.muhca.gov.co",
                "image" => THEME_IMG . 'places-cartagena/beauty-002.png',
            ],
            [
                "name" => "Gold Museum (Museo del Oro Zenú)",
                "detalle" => "Indigenous artifacts.",
                "address" => '',
                "city" => "",
                "phone" => "",
                "link" => "https://www.banrepcultural.org/cartagena/museo-del-oro-zenu",
                "image" => THEME_IMG . 'places-cartagena/beauty-003.png',
            ],
            [
                "name" => "MUSEO NAVAL",
                "detalle" => "Maritime & independence history.",
                "address" => '',
                "city" => "",
                "phone" => "",
                "link" => "https://museonavaldelcaribe.org",
                "image" => THEME_IMG . 'places-cartagena/beauty-004.png',
            ],
            [
                "name" => "TEATRO ADOLFO MEJÍA",
                "detalle" => "Neoclassical theatre, local shows.",
                "address" => '',
                "city" => "",
                "phone" => "",
                "link" => "https://ipcc.gov.co/escenarios-culturales-vivos/teatro-adolfo-mejia/",
                "image" => THEME_IMG . 'places-cartagena/beauty-005.png',
            ],
            [
                "name" => "TMUELLE DE LOS PEGASOS",
                "detalle" => "Waterfront sculptures & vendors.",
                "address" => '',
                "city" => "",
                "phone" => "",
                "link" => "https://colombia.travel/es/cartagena/muelle-de-los-pegasos",
                "image" => THEME_IMG . 'places-cartagena/beauty-006.png',
            ],
            [
                "name" => "INDIA CATALINA STATUE",
                "detalle" => "Iconic figure, cultural symbol.",
                "address" => '',
                "city" => "",
                "phone" => "",
                "link" => "https://colombia.travel/es/cartagena/monumento-la-india-catalina",
                "image" => THEME_IMG . 'places-cartagena/beauty-007.png',
            ],
        ]
    ],
    "churches" => [
        "id" => "churches",
        "title" => "CHURCHES",
        "title_es" => "CHURCHES",
        "img" => THEME_IMG . 'icons/icon-beauty-salons-2.svg',
        "places" => [
            [
                "name" => "Catedral de Santa Catalina de Alejandría",
                "detalle" => "Our wedding venue!",
                "address" => '',
                "city" => "",
                "phone" => "",
                "link" => "https://maps.app.goo.gl/N7RVBxeXEN3p5LPE8",
                "image" => THEME_IMG . 'places-cartagena/churches-001.png',
            ],
            [
                "name" => "IGLESIA SAN PEDRO CLAVER",
                "detalle" => "Sanctuary dedicated to Saint Peter Claver, 'the apostle of the slaves,' known for his tireless defense of human rights and work with the enslaved. If it appears closed during the day, you can enter through the side, as it also functions as a museum with access to the church.",
                "address" => '',
                "city" => "",
                "phone" => "",
                "link" => "https://maps.app.goo.gl/M3LEiRGYqYa9UzKt8",
                "image" => THEME_IMG . 'places-cartagena/churches-002.png',
            ],
            [
                "name" => "IGLESIA SANTO DOMINGO",
                "detalle" => "Next to Botero statue.",
                "address" => '',
                "city" => "",
                "phone" => "",
                "link" => "https://maps.app.goo.gl/hM1Auf5EPyQo43xG6",
                "image" => THEME_IMG . 'places-cartagena/churches-003.png',
            ],
            [
                "name" => "IGLESIA SANTO TORIBIO",
                "detalle" => "Romantic architecture.",
                "address" => '',
                "city" => "",
                "phone" => "",
                "link" => "https://maps.app.goo.gl/kXCdruRdqEKHFF8m9",
                "image" => THEME_IMG . 'places-cartagena/churches-004.png',
            ],
        ]
    ],
    "neighborhoods_cultural_spots" => [
        "id" => "neighborhoods_cultural_spots",
        "title" => "Neighborhoods & Cultural Spots",
        "title_es" => "Neighborhoods & Cultural Spots",
        "img" => THEME_IMG . 'icons/icon-beauty-salons-2.svg',
        "places" => [
            [
                "name" => "OLD CITY",
                "detalle" => "Get lost in flower-lined balconies & plazas.",
                "address" => '',
                "city" => "",
                "phone" => "",
                "link" => "https://maps.app.goo.gl/pmPSG5SvAxahQ7uE7",
                "image" => THEME_IMG . 'places-cartagena/neighborhoods-001.png',
            ],
            [
                "name" => "GETSEMANÍ",
                "detalle" => "Street art, music, and outdoor bars.",
                "address" => '',
                "city" => "",
                "phone" => "",
                "link" => "https://maps.app.goo.gl/Q2gw2oL7z76hvEaF9",
                "image" => THEME_IMG . 'places-cartagena/neighborhoods-002.png',
            ],
            [
                "name" => "Plaza de la Aduana <br> Plaza Bolívar <br> Plaza de los Coches <br> Plaza San Diego",
                "detalle" => "Ideal for people-watching & cultural snapshots.",
                "address" => '',
                "city" => "",
                "phone" => "",
                "link" => "https://maps.app.goo.gl/65m9ZA2DRj6PFKSx6",
                "image" => THEME_IMG . 'places-cartagena/neighborhoods-003.png',
            ],
            [
                "name" => "City Walls during Sunset",
                "detalle" => "Iconic moment of any trip.",
                "address" => '',
                "city" => "",
                "phone" => "",
                "link" => "https://maps.app.goo.gl/eGvecofeyS2QEE7j7",
                "image" => THEME_IMG . 'places-cartagena/neighborhoods-004.png',
            ],
        ]
    ],
    "beach_clubs_island_day_trips" => [
        "id" => "beach_clubs_island_day_trips",
        "title" => "BEACH CLUBS & ISLAND DAY TRIPS",
        "title_es" => "BEACH CLUBS & ISLAND DAY TRIPS",
        "img" => THEME_IMG . 'icons/icon-beauty-salons-2.svg',
        "places" => [
            [
                "name" => "Rosario Islands Isla Grande <br> Isla del Sol <br> Bora Bora <br> Pao Pao <br> Amare <br> IslaBela <br> Cholón",
                "detalle" => "Book boat tours. Note: Cholón is a dense, crowded party island.",
                "address" => "",
                "city" => "",
                "phone" => "",
                "link" => "https://maps.app.goo.gl/6r5PiQYF3r4su9Cd8",
                "image" => THEME_IMG . 'places-cartagena/beach-001.png',
            ],
            [
                "name" => "GETSEMANÍ",
                "detalle" => "Blue Apple, Makani, Éteka for a closer beach fix.",
                "address" => "",
                "city" => "",
                "phone" => "",
                "link" => "https://maps.app.goo.gl/LxPCcPM96QX9RQb18",
                "image" => THEME_IMG . 'places-cartagena/beach-002.png',
            ],
            [
                "name" => "Overnight island options:",
                "detalle" => "Consider Fragata Island House, Hotel Sofitel Cala Blanca, or Hotel Las Islas – Barú for upscale stays.",
                "address" => "",
                "city" => "",
                "phone" => "",
                "link" => "https://maps.app.goo.gl/bFqbkVBL96sXjHYR8",
                "image" => THEME_IMG . 'places-cartagena/beach-003.png',
            ],
        ]
    ],

];

$thingsToDo = [
    [
        "image" => THEME_IMG . 'things-to-do-1.png',
        "titulo" => "1. OLD CITY IMMERSION",
        "titulo_2" => "# Today’s Itinerary",
        "description" => "Clock-Tower → Cathedral → Plaza Bolívar & Clock-Tower → Cathedral → Plaza Bolívar & Gold Museum → Palace of the Inquisition → San Pedro Claver → Santo Domingo Church & Botero “Gertrudis” → Las Bóvedas artisan vaults → sunset wall-walk.",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Guided walking tour recommended.",
            "item_2" => "• Best coffee pauses: <br> Época / Libertador / Casa Carolina.",
            "item_3" => "• Snap a photo with palenqueras <br> (tip = COP 5k-10k).",
            "item_4" => "• Dinner choices: <br> Cocina de Pepina · Celele · Don Juan",
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-2.png',
        "titulo" => "2. ROSARIO ISLANDS LUXE HOP",
        "titulo_2" => "# Today’s Itinerary",
        "description" => "08:00 fast boat (snorkel gear aboard) → coral-reef stop → choose club: Gente de Mar / IslaBela / EcoHotel (Isla Grande) · Hotel Majagua (Majagua) · Isla del Sol · Bora Bora · Pao Pao · Amare · Cholón party cove",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Add Oceanario (dolphins, turtles) or Isla Bocachica fort.",
            "item_2" => "• Return ~17:00→private salsa / champeta class (1 h)."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-3.png',
        "titulo" => "3. CASTLES, STREET EATS & CRAFT RUM",
        "titulo_2" => "# Today’s Itinerary",
        "description" => "Sunrise visit Castillo San Felipe → Bazurto Market deep-dive (arepa de huevo, tropical fruit stands) → Street-food safari in Getsemaní → Rum-&-chocolate pairing at El Barón",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Evening cocktails: Alquímico rooftop."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-4.png',
        "titulo" => "4. RIVERS & COASTAL RHYTHM",
        "titulo_2" => "# Today’s Itinerary",
        "description" => "10:00 pick-up → Chambaculera boat (live champeta, drums) through Ciénaga de la Virgen → beach fish-fry (mojarra, patacón) → return mid-afternoon",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Spa / pool siesta afterwards."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-5.png',
        "titulo" => "5. TIERRA BOMBA CLUB-HOP",
        "titulo_2" => "# Today’s Itinerary",
        "description" => "20-min boat → pick any club on the island: Makani · Éteka · Blue Apple · Fénix · Namasté",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Mix of paddle-boards, DJs, yoga decks & spa cabanas.",
            "item_2" => "• Return by sunset → live music in Getsemaní."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-6.png',
        "titulo" => "6. AFRO-CARIBBEAN ROOTS & WELLNESS",
        "titulo_2" => "# Today’s Itinerary",
        "description" => "08:00 van → San Basilio de Palenque (drum workshop, culture walk, coconut-milk stew lunch) → back by 16:00",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Rooftop yoga at Casa Carolina or designer browsing (St Dom, Silvia Tcherassi, Agua de León)."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-7.png',
        "titulo" => "7. ICONIC HOTELS + DESIGNER & EMERALD DAY",
        "titulo_2" => "# Today’s Itinerary",
        "description" => "Morning coffee in Sofitel Santa Clara courtyard → peek at Harry Sasson's Harry's Cartagena (reserve lunch) in the Charleston Santa Teresa Hotel → Pop to Charleston Santa Teresa rooftop bar → Personal-shop circuit: St Dom → Silvia Tcherassi → Maygel Coronel → La Serrezuela → private emerald lesson",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Dinner: 10-course \"New Colombian\" at Celele (book early)."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-8.png',
        "titulo" => "8. NATIONAL AVIARY & PLAYA BLANCA / TRANQUILA",
        "titulo_2" => "# Today’s Itinerary",
        "description" => "07:30 boat / van to Aviario Nacional (170 bird species) → continue to Playa Blanca or quieter Playa Tranquila for turquoise swim & lunch. Try \"jugo de corozo\".",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Optional: sunset plankton tour add-on (Transport waits)."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-9.png',
        "titulo" => "9. MUD & MANGROVE MARVELS",
        "titulo_2" => "# Today’s Itinerary",
        "description" => "Morning Volcán Totumo mud-bath → rinse in lagoon → optional mangrove canoe glide near Galerazamba's pink salt flats",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Return to city ~14:00 → rooftop siesta."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-10.png',
        "titulo" => "10. COSTEÑO COOKING CLASS",
        "titulo_2" => "# Today’s Itinerary",
        "description" => "Market run with chef → hands-on class: coconut rice, fried fish, posta cartagenera, patacón → feast & cocktail pairing",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Afternoon free for photos in Getsemaní's graffiti alleys."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-11.png',
        "titulo" => "11. DAY-CHIVA CITY TOUR (MUST-DO)",
        "titulo_2" => "# Today’s Itinerary",
        "description" => "09:00 Day-Chiva open-air bus (live city guide, chilled costeño beers) → landmark photo stops → drop-off around 12:30",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Afternoon options: second island hop, boutique crawl, or spa."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-12.png',
        "titulo" => "12. NIGHT-CHIVA FIESTA",
        "titulo_2" => "# Today’s Itinerary",
        "description" => "20:00 Night-Chiva pick-up → onboard music, open bar → ends at club La Movida",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Pre-party dinner at Candé (folklore show)."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-13.png',
        "titulo" => "13. SCUBA & OCEAN PLAY",
        "titulo_2" => "# Today’s Itinerary",
        "description" => "Morning two-tank reef dive (or Discover Scuba) with Diving Planet from Club Náutico → snorkel friends join sand-bar swim → seafood picnic on Isla Arena",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Golden-hour catamaran back (DJ on deck)."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-14.png',
        "titulo" => "14. BOCAGRANDE BEACH FINALE",
        "titulo_2" => "# Today’s Itinerary",
        "description" => "Choose carpa & chairs with vendors (COP 30-50 k) → casual massage (agree time & price) → legendary shrimp cocktail or full seafood platter, plus mojarra / pargo frito & coconut rice → stroll Avenida San Martín boutiques → dinner at M Cocina Árabe",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Pack & airport transfers."
        ]
    ],
]

?>

<main class="customMainCartagena">
    <div class="position-absolute top-0 start-0 w-100">
        <!-- <img class="w-100" src="<?php echo THEME_IMG; ?>bg-cartagena-3.png" alt="Background Cartagena"> -->
        <img class="w-100 h-100 object-fit-cover position-fixed top-0 start-0" src="<?php echo THEME_IMG; ?>bg-cartagena-3.webp" alt="Background Cartagena">
    </div>
    <div class="py-5"></div>
    <div class="py-5"></div>
    <section class="customSectionCartagenaPlaces pb-5" id="travel-info">
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-10 mx-auto">
                        <div class="position-relative customSectionBox customSectionBox__2 text-center py-5 shadow-1">
                            <?php if(wp_is_mobile()): ?>
                                <img width="260" class="customSectionCartagenaPlaces__flower" src="<?php echo THEME_IMG; ?>flower-3.png" alt="Flower 1 Cartagena mobile">
                            <?php else: ?>
                                <img class="customSectionCartagenaPlaces__flower" src="<?php echo THEME_IMG; ?>flower-3.png" alt="Flower 1 Cartagena">
                            <?php endif; ?>
                            <div class="col-12 col-xl-9 mx-auto text-start px-xl-0 px-3">
                                <div class="py-xl-5"></div>
                                <p class="fs-xl-3 fs-6 text-center">ENJOY</p>
                                <h2 class="font-titulo fs-xl-lg-1 fs-2-md text-center">Cartagena</h2>
                                <div class="py-xl-5"></div>
                                <div class="d-flex align-items-center py-3 gap-3">
                                    <div class="icon">
                                        <img class="w-100" src="<?php echo THEME_IMG . 'icons/icon-travel-info.svg'; ?>" alt="">
                                    </div>
                                    <h2 class="fs-xl-3 uppercase">TRAVEL INFO</h2>
                                </div>
                                <div class="line line--full mb-4"></div>
                                <div class="bg-yellow-100 p-3 mb-xl-5">
                                    <h2 class="fs-xl-5 text-primary letter-spacing-24 uppercase">Passports</h2>
                                    <p class="fs-xl-6 text-gray-200 letter-spacing-1 mb-4">Don’t forget your passport! Please double-check the expiration date before traveling. Many countries (including Colombia) will not allow entry if your passport is set to expire within 6 months of travel. Please ensure your passport is valid for at least six months beyond your travel dates.</p>
                                    <h2 class="fs-xl-5 text-primary letter-spacing-24 uppercase">CheckMig</h2>
                                    <p class="fs-xl-6 text-gray-200 letter-spacing-1 mb-4">Please complete the immigration registration form 48 hours before your trip, as the airline requires proof of completion to check-in. Complete the same step to return to the US. <a href="https://apps.migracioncolombia.gov.co/pre-registro" style="text-decoration: underline;" target="blank">Click Here</a></p>
                                    <h2 class="fs-xl-5 text-primary letter-spacing-24 uppercase">RAFAEL NÚÑEZ INTERNATIONAL AIRPORT</h2>
                                    <p class="fs-xl-6 text-gray-200 letter-spacing-1 mb-4">Cartagena’s Rafael Núñez International Airport sits on the Caribbean coast and is only about 10 minutes from the historic Old Town. Major airlines such as LATAM, Delta, American Airlines, United, Aeroméxico, Copa Airlines, and Avianca operate direct flights into Cartagena.</p>
                                    <h2 class="fs-xl-5 text-primary letter-spacing-24 uppercase">SECURITY IN CARTAGENA</h2>
                                    <p class="fs-xl-6 text-gray-200 letter-spacing-1 mb-4">Cartagena is a beautiful and safe destination for our celebration. The city is known for its welcoming atmosphere, and we want you to feel at ease as you join us for this special occasion. With a strong focus on tourism and hospitality, Cartagena offers a secure environment for all visitors. From the historic streets to the scenic beaches, we’re excited to share this incredible city with you, and we’re confident you'll feel right at home!</p>
                                    <h2 class="fs-xl-5 text-primary letter-spacing-24 uppercase">CARTAGENANNY</h2>
                                    <p class="fs-xl-6 text-gray-200 letter-spacing-1">For guests who may require it, here’s a trusted local nanny service to help with childcare. Please feel free to reach out to arrange childcare during the celebration. Special rates are available using the code MARYCUETER.</p>
                                    <p class="fs-xl-6 text-gray-200 letter-spacing-1">Lili Rueda: +57 318 6294974</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-xl-5 pt-5"></div>
    
            <?php foreach ($places as $key => $category) { ?>
                <div class="position-relative z-1<?php echo $key === 4 ? ' mb-5' : ''; ?>" id="<?php echo $category['id']; ?>">
                    <div class="container">
                        <div class="row box">
                            <div class="col-12 col-lg-11 mx-auto">
                                <div class="d-flex align-items-center py-3 gap-3 px-4">
                                    <div class="icon d-none align-items-center">
                                        <img class="w-100" src="<?php echo $category['img']; ?>" alt="">
                                    </div>
                                    <h2 class="fs-xl-3 fs-6 text-orange uppercase"><?php echo $category['title']; ?></h2>
                                </div>
                                <div class="line line--full bg-orange mb-4"></div>
                                <?php if (!empty($category['info'])) : ?>
                                    <div class="row">
                                        <div class="col-12 pe-lg-3 mb-3 px-xl-5">
                                            <p class="fs-xl-6 text-orange letter-spacing-1 mb-4"><?php echo $category['info']; ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="swiper placesSwiper" id="swiper-<?php echo $category['id']; ?>">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($category['places'] as $place) { ?>
                                            <div class="swiper-slide">
                                                <div class="bg-white-100 p-3 pb-4">
                                                    <?php if ($place['image']) : ?>
                                                        <img class="w-100 customSectionCartagenaPlaces__img mb-3" src="<?php echo $place['image']; ?>" alt="">
                                                    <?php endif?>
                                                    <div class="px-3">
                                                        <h2 class="fs-xl-5 text-orange letter-spacing-24 uppercase">
                                                            <?php echo $place['name']; ?>
                                                        </h2>

                                                        <?php if (!empty($place['detalle'])) : ?>
                                                            <div class="pe-lg-5 mb-3 mt-3">
                                                                <p class="fs-xl-6 text-gray-100 pe-lg-5">
                                                                    <?php echo $place['detalle']; ?>
                                                                </p>
                                                            </div>
                                                        <?php endif; ?>

                                                        <span class="line line--small m-0 pt-2 mb-4"></span>
                                    
                                                        <?php if ($place['address']) : ?>
                                                        <p class="fs-xl-6 text-gray-100"><?php echo $place['address']; ?></p>
                                                        <?php endif?>
                                    
                                                        <?php if ($place['city']) : ?>
                                                        <p class="fs-xl-6 mb-2 text-gray-100"><?php echo $place['city']; ?></p>
                                                        <?php endif?>
                                    
                                                        <?php if ($place['phone']) : ?>
                                                        <p class="fs-xl-6 text-gray-100 mb-3" style="-webkit-text-stroke-width: 0.5px;"><?php echo $place['phone']; ?></p>
                                                        <?php endif?>
                                
                                                            <a class="btn btn-small rounded-0 uppercase" href="<?php echo $place['link']; ?>" target="_blank">
                                                                View
                                                            </a>

                                                        <?php if (!empty($place['info'])) : ?>
                                                            <div class="pt-3">
                                                                <?php foreach ($place['info'] as $infoItem) : ?>
                                                                    <p class="text-gray-100 letter-spacing-1 mb-2" style="font-size: 15px; word-wrap: break-word;overflow-wrap: break-word;"><?php echo $infoItem; ?></p>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 h-100 position-absolute top-0">
                        <div class="container h-100 position-relative">
                            <div class="swiper-button-prev start-1" id="prev-<?php echo $category['id']; ?>"></div>
                            <div class="swiper-button-next end-1" id="next-<?php echo $category['id']; ?>"></div>
                        </div>
                    </div>
                    <div class="py-xl-5 pt-5"></div>
                </div>
            <?php } ?>
        </div>
    </section>

    <section class="customSectionCartagenaPlaces" id="thinks">
        <div class="position-relative z-1">
            <div class="container">
                <div class="row box">
                    <div class="py-3"></div>
                    <div class="col-12 col-lg-11 mx-auto">
                        <div class="d-flex align-items-center py-3 gap-3 px-4">
                            <div class="icon d-none align-items-center">
                                <img class="w-100" src="<?php echo THEME_IMG . 'icons/icon-thinks-2.svg'; ?>" alt="">
                            </div>
                            <h2 class="fs-xl-3 fs-6 text-orange uppercase">THINGS TO DO IN THE CITY</h2>
                        </div>
                        <div class="line line--full bg-orange mb-4"></div>

                        <div class="px-4">
                            <h2 class="fs-xl-5 text-orange letter-spacing-24 uppercase">CARTAGENA CURATED PLAYBOOK</h2>
                            <p class="fs-xl-6 text-orange letter-spacing-1 fw-normal mb-3">14 days of indulgent, culture-rich experiences you can mix-and-match around the wedding events</p>

                            <p class="fs-xl-6 text-orange letter-spacing-1 fw-normal">How to Use This Guide</p>
                            <p class="fs-xl-6 text-orange letter-spacing-1 fw-normal">1. Pick any day and slide it before/after the wedding celebrations.</p>
                            <p class="fs-xl-6 text-orange letter-spacing-1 fw-normal">2. Each day has a signature experience + optional upgrades—choose one or layer several if you’re feeling adventurous.</p>
                            <p class="fs-xl-6 text-orange letter-spacing-1 fw-normal mb-3">3. All times are gentle suggestions; Cartagena rewards a slow, sun-kissed pace.</p>

                            <h2 class="fs-xl-5 text-orange letter-spacing-24 uppercase">14-DAY ITINERARY</h2>
                            <p class="fs-xl-6 text-orange letter-spacing-1 fw-normal mb-4">(choose from any day, any order)</p>
                        </div>
                        
                        <div class="swiper thingsToDoSwiper" id="swiper-things-to-do">
                            <div class="swiper-wrapper">
                                <?php foreach ($thingsToDo as $item) : ?>
                                    <div class="swiper-slide">
                                        <div class="bg-white-100 p-0">
                                            <!-- Imagen principal -->
                                             <div class="p-4 pb-0">
                                                 <img class="w-100 customSectionCartagenaPlaces__img" src="<?php echo $item['image']; ?>">
                                                 <h2 class="fs-xl-5 text-orange letter-spacing-24 uppercase"><?php echo $item['titulo']; ?></h2>
                                                 <span class="line line--small m-0 pt-2"></span>
                                             </div>
                                            <div class="p-4">
                                                <div class="mb-4">
                                                    <h3 class="fs-xl-5 text-primary letter-spacing-24 uppercase"><?php echo $item['titulo_2']; ?></h3>
                                                    <p class="fs-xl-6 text-gray-100 letter-spacing-1 fw-normal"><?php echo $item['description']; ?></p>
                                                </div>
                                                <div>
                                                    <h3 class="fs-xl-5 text-primary letter-spacing-24 uppercase"><?php echo $item['titulo_3']; ?></h3>
                                                    <div class="space-y-2">
                                                        <?php foreach ($item['items'] as $detailItem) : ?>
                                                            <p class="fs-xl-6 text-primary letter-spacing-1 mb-2 fw-semibold" style="-webkit-font-smoothing: antialiased;"><?php echo $detailItem; ?></p>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100 h-100 position-absolute top-0">
                <div class="container h-100 position-relative">
                    <div class="swiper-button-prev start-1" id="prev-things-to-do"></div>
                    <div class="swiper-button-next end-1" id="next-things-to-do"></div>
                </div>
            </div>
            <div class="py-xl-5 pt-5"></div>
        </div>
    </section>

    <section class="position-relative z-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-11 mx-auto">
                    <div class="customSectionBox p-lg-5 p-3">
                        <div class="p-lg-5">

                            <h2 class="fs-xl-5 text-orange letter-spacing-24 uppercase mb-3">CARTAGENA’S BEST-KEPT TOURIST TIP: Don’t Get Overcharged</h2>
                            <p class="fs-xl-6 text-primary mb-3 letter-spacing-1 fw-normal">Whether it’s a beach massage, a taxi ride, a boat tour, or a shrimp cocktail on the sand — there’s an easy way to make sure you’re paying a fair price.</p>
                            <p class="fs-xl-6 text-primary mb-3 letter-spacing-1 fw-normal">Just save this number on WhatsApp: +57 304 251 1127</p>
                            <p class="fs-xl-6 text-primary mb-3 letter-spacing-1 fw-normal">This is Titán Chat, Cartagena’s official tourist support line — run by the city government. It’s totally legit, safe, and trustworthy.</p>

                            <h2 class="fs-xl-5 text-orange letter-spacing-24 uppercase mb-3">You can message them at any time on WhatsApp to:</h2>
                            <ul class="ps-4">
                                <li style="list-style-type: disc;" class="fs-xl-6 text-primary mb-3 letter-spacing-1 fw-normal mb-3">Ask what a fair price is for any service (like taxis, beach food, boat rides, massages, etc.)</li>
                                <li style="list-style-type: disc;" class="fs-xl-6 text-primary mb-3 letter-spacing-1 fw-normal mb-3">Report being overcharged — even if it doesn’t feel “off,” if something seems expensive or way higher than expected, you can reach out.</li>
                            </ul>

                            <p class="fs-xl-6 text-primary mb-3 letter-spacing-1 fw-normal">Just say something like “report case” and they’ll step in to help. If needed, the police will come and help you get your money back.</p>
                            <p class="fs-xl-6 text-primary mb-3 letter-spacing-1 fw-normal">It’s not confrontational, it’s not dangerous — it’s not like in the U.S. Cartagena’s tourist team handles it quickly and kindly, and it gets resolved fast. This is one of the city’s best tools to keep visitors protected and relaxed.</p>

                            <span class="line line--full bg-orange mb-4"></span>

                            <h2 class="fs-xl-5 text-orange letter-spacing-24 uppercase mb-3">OFFICIAL CITY PRICE LIST</h2>
                            <p class="fs-xl-6 text-primary letter-spacing-1 fw-normal mb-3">Want to double-check average prices before saying yes to anything? Here’s the official guide to what you should expect to pay for:</p>
                            <ul class="ps-4">
                                <li style="list-style-type: disc;" class="fs-xl-6 text-primary letter-spacing-1 fw-normal mb-0">Taxi rides</li>
                                <li class="fs-xl-6 text-primary letter-spacing-1 fw-normal mb-0">Beach services (massages, chairs, seafood)</li>
                                <li style="list-style-type: disc;" class="fs-xl-6 text-primary letter-spacing-1 fw-normal mb-0">Island boat trips</li>
                                <li style="list-style-type: disc;" class="fs-xl-6 text-primary letter-spacing-1 fw-normal mb-0">Local food and drinks</li>
                                <li style="list-style-type: disc;" class="fs-xl-6 text-primary letter-spacing-1 fw-normal mb-3">City tours, and more.</li>
                            </ul>

                            <a href="https://www.visitcartagena.com.co/prices?lang=en" target="_blank" class="d-block mb-4">https://www.visitcartagena.com.co/prices?lang=en</a>
                            <span class="line line--full bg-orange mb-4"></span>

                            <h2 class="fs-xl-5 text-orange letter-spacing-24 uppercase mb-3">CURATED THINGS TO DO IN THE CITY</h2>
                            <p class="fs-xl-6 text-primary letter-spacing-1 fw-normal mb-3">Explore everything from historic sites and food tours to island escapes and shopping guides — all recommended by the city’s tourism team. </p>
                            <p class="fs-xl-6 text-primary letter-spacing-1 fw-normal">Perfect for filling free days around the wedding!</p>
                            <p class="fs-xl-6 text-primary letter-spacing-1 fw-normal mb-3">https://www.visitcartagena.com.co/explore?lang=en</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>