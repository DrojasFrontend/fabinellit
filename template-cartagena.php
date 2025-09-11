<?php
/* 
* Template Name: Cartagena
*/

get_header(); 

$places = [
  "hotels" => [
    "id" => "hotels",
    "title" => "Hotels",
    "title_es" => "Hotels",
    "img" => THEME_IMG . 'icons/icon-hotel-2.svg',
    "info" => "We welcome you to stay at any of the beautiful hotels or colonial homes in Cartagena has to offer. The bride and groom will be staying at the SOFITEL LEGEND SANTA CLARA HOTEL for the guests who would like to join them.",
    "places" => [
        // [
        //     "name" => "Hotel Charleston Santa Teresa",
        //     "address" => "Cra. 3 # 31 - 23",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6649494",
        //     "link" => "https://www.hotelcharlestonsantateresa.com",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-6.webp',
        // ],
        // [
        //     "name" => "Hyatt Regency Hotel",
        //     "address" => "Cra. 1 # 12 - 118",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6941234",
        //     "link" => "https://go.hyatt.com/link/v2/eae__GKM5JBXpUGUPAuOwJCzfpC-lL3kAXMEy",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-14.webp',
        // ],
        // [
        //     "name" => "HOTEL INTERCONTINENTAL",
        //     "address" => "Cra. 1 # 5 - 01",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6424250",
        //     "link" => "https://www.intercartagena.com/",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-0.webp',
        // ],
        // [
        //     "name" => "Sofitel Legend Santa Clara",
        //     "address" => "Calle Del Torno # 39 - 29",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6504700",
        //     "link" => "https://www.sofitellegendsantaclara.com/",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-1.webp',
        // ],
        // [
        //     "name" => "Casa Lola",
        //     "address" => "Calle del Guerrero # 29 - 108",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6641538",
        //     "link" => "https://casalola.com",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-2.webp',
        // ],
        // [
        //     "name" => "Casa del Arzobispado",
        //     "address" => "Cra. 5 # 34 - 52",
        //     "city" => "Centro Histórico, Cartagena",
        //     "phone" => "+57 317 5098738",
        //     "link" => "https://www.hotelcasadelarzobispado.com",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-3.webp',
        // ],
        // [
        //     "name" => "Movich Hotel",
        //     "address" => "Calle de Vélez Danies # 4 – 39",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (601) 4824466",
        //     "link" => "https://www.movichhotels.com/es/hotel-movichcartagena-en-cartagena/",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-4.webp',
        // ],
        // [
        //     "name" => "Bastion Luxury Hotel",
        //     "address" => "Calle del Sargento # 6 - 87",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6424100",
        //     "link" => "https://www.bastionluxuryhotel.com",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-5.webp',
        // ],
        // [
        //     "name" => "Hotel San Agustín",
        //     "address" => "Calle de la Universidad # 36 - 44",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6810000",
        //     "link" => "https://www.hotelcasasanagustin.com/es/home.html",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-7.webp',
        // ],
        // [
        //     "name" => "Casa Pestagua",
        //     "address" => "Cra. 3 # 33 - 63",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6649510",
        //     "link" => "https://casapestagua.com",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-8.webp',
        // ],
        // [
        //     "name" => "Casa La Merced",
        //     "address" => "Calle de Don Sancho # 36 - 165",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6686622",
        //     "link" => "https://mustique.co/bienvenidos/casas/la-merced/",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-9.webp',
        // ],
        // [
        //     "name" => "Bovedas de Santa Clara",
        //     "address" => "Cra. 8 # 39 - 114",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6504465",
        //     "link" => "https://www.bovedasdesantaclara.com",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-10.webp',
        // ],
        // [
        //     "name" => "Nacar By Hilton",
        //     "address" => "Calle Del Curato # 38 - 99",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6517050",
        //     "link" => "https://www.hilton.com/es/hotels/ctgmaqq-nacar-hotel-cartagena/",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-11.webp',
        // ],
        // [
        //     "name" => "Hotel Casa Don Luis",
        //     "address" => "Calle del Cuartel # 36 – 16",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 314 6669101",
        //     "link" => "https://www.farandahotels.com/hotel/hotel-casa-don-luis-cartagena-by-faranda-boutique",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-12.webp',
        // ],
        // [
        //     "name" => "Voila By Huespedia",
        //     "address" => "Calle de las Carretas # 34 - 85",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 300 9121453",
        //     "link" => "https://www.bevoila.com/home-es",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-13.webp',
        // ],
        // [
        //     "name" => "Hotel Estelar",
        //     "address" => "Cra. 1 # 11 - 116",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6517303",
        //     "link" => "https://www.hotelesestelar.com/es/destinos/colombia/cartagena-de-indias",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-15.webp',
        // ],
        [
            "name" => "Sofitel<br>Barú Calablanca",
            "address" => "It’s close to Cartagena, making it an excellent if you decide to",
            "city" => "extend your stay.",
            "phone" => "+57 (605) 6411690",
            "link" => "https://www.sofitelbarucalablanca.com/",
            "image" => THEME_IMG . 'places-cartagena/cartagena-001.png',
            // Información adicional a mostrar en la tarjeta
            "info" => [
                "<strong>Promotional Code:</strong><br>fabinellit2026",
                "<strong>Contact:</strong><br>Jackeline.diaz@sofitel.com<br>Daniela.campo@sofitel.com",
            ],
        ],
        [
            "name" => "Hotel Quadrifolio",
            "address" => "Cra. 5 # 36 - 118",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6641858",
            "link" => "https://hotelquadrifolio.com/",
            "image" => THEME_IMG . 'places-cartagena/cartagena-002.png',
            "info" => [
                "<strong>Promotional Code:</strong><br>fabinellit2026",
            ],
        ],
        [
            "name" => "Hotel <br> Sonesta",
            "address" => "Cra. 9 No. 35 - 104",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6517095",
            "link" => "https://www.sonestacartagena.com/",
            "image" => THEME_IMG . 'places-cartagena/cartagena-003.png',
            "info" => [
                "<strong>Promotional Code:</strong><br>FabiNelli2026",
                "<strong>Contact:</strong><br>reservas@sonestacartagena.com<br>con código,",
                "<em>*The prices start at $100 USD, including breakfast.</em>",
            ],
        ],
        [
            "name" => "Hotel Bovedas <br> de Santa Clara",
            "address" => "Cra. 8 # 39 - 114",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6504465",
            "link" => "https://all.accor.com/hotel/A232/index.es.shtml",
            "image" => THEME_IMG . 'places-cartagena/cartagena-004.png',
            "info" => [
                "<em>*Including access to the Santa Clara Hotel facilities (pools, restaurants, etc.).</em>",
            ],
        ],
        [
            "name" => "Hotel Hyatt <br> Regency",
            "address" => "Cra. 1 # 12 - 118",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6941234",
            "link" => "https://www.hyatt.com/hyatt-regency/es-ES/ctgrc-hyatt-regency-cartagena",
            "image" => THEME_IMG . 'places-cartagena/cartagena-005.png',
            "info" => [
                "<strong>Promotional Link:</strong><br><a href=\"hyatt.com/en-US/group-booking/CTGRC/G-OD00\" target=\"_blank\">hyatt.com/en-US/group-booking/CTGRC/G-OD00</a>",
            ],
        ],
        [
            "name" => "Hotel<br>Las Américas",
            "address" => "Anillo vial, Sector Cielo Mar",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6930592",
            "link" => "https://www.hotellasamericas.com.co",
            "image" => THEME_IMG . 'places-cartagena/cartagena-006.png',
            "info" => [
                "<strong>Promotional Code:</strong><br>50778",
                "<strong>Link Casa de playa Dólares:</strong><br><a href=\"https://bitly.cx/WgVV9\" target=\"_blank\">bitly.cx/WgVV9</a>",
                "<strong>Promotional Code:</strong><br>73585",
                "<strong>Link Torre del mar Dólares:</strong><br><a href=\"https://bitly.cx/L7kD\" target=\"_blank\">bitly.cx/L7kD</a>",
            ],
        ],
        [
            "name" => "OSH<br>Hotel",
            "address" => "Calle 31 # 10 - 77",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 304 2549463",
            "link" => "https://oshhotels.com/",
            "image" => THEME_IMG . 'places-cartagena/cartagena-007.png',
            "info" => [
                "<strong>Promotional Link:</strong><br><a href=\"https://reservations.travelclick.com/115574?RatePlanId=10231023\" target=\"_blank\">reservations.travelclick.com/115574? RatePlanId=10231023</a>",
                "<strong>Jose Guette</strong><br>Commercial Executive<br>Móvil: +57 304 2549905<br>Jose@oshhotels.com",
                "<em>*The wedding weekend will feature complimentary 20-minute massages and a free cold plunge to celebrate the occasion.</em>",
            ],
        ],
        [
            "name" => "Hotel Estelar",
            "address" => "Cra. 1 # 11 - 116",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6517303",
            "link" => "https://www.estelarcartagenadeindias.com/en/",
            "image" => THEME_IMG . 'places-cartagena/cartagena-008.png',
        ],
        [
            "name" => "Hotel Casa<br>San Agustín",
            "address" => "Calle de la Universidad # 36 - 44",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6810000",
            "link" => "https://hotelcasasanagustin.com/",
            "image" => THEME_IMG . 'places-cartagena/cartagena-009.png',
        ],
        [
            "name" => "Hotel Casa<br>Pestagua",
            "address" => "Cra. 3 # 33 - 63",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6649510",
            "link" => "https://casapestagua.com",
            "image" => THEME_IMG . 'places-cartagena/cartagena-010.png',
        ],
        [
            "name" => "Sofitel Legend<br>Santa Clara",
            "address" => "Calle Del Torno # 39 - 29",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6504700",
            "link" => "https://www.sofitellegendsantaclara.com/",
            "image" => THEME_IMG . 'places-cartagena/cartagena-011.png',
        ],
        [
            "name" => "Hotel Charleston<br>Santa Teresa",
            "address" => "Cra. 3 # 31 - 23",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6649494",
            "link" => "https://www.hotelcharlestonsantateresa.com",
            "image" => THEME_IMG . 'places-cartagena/cartagena-012.png',
        ],
        [
            "name" => "Hotel Casa<br>Carolina",
            "address" => "Cra. 5 # 34 - 14",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6543330",
            "link" => "https://www.hotelcasacarolina.com",
            "image" => THEME_IMG . 'places-cartagena/cartagena-013.png',
        ],
    ],
  ],
  "restaurants" => [
    "id" => "restaurants",
    "title" => "Restaurants",
    "title_es" => "Restaurants",
    "img" => THEME_IMG . 'icons/icon-restaurants-2.svg',
    "places" => [
        [
            "name" => "D'Res",
            "address" => "Cra. 17 # 24 - 90",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6685513",
            "link" => "https://www.instagram.com/restaurantedres/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-1.webp',
        ],
        [
            "name" => "Rabo de Pez",
            "address" => "Calle 32 # 5 - 09 Local 3",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 317 4333372",
            "link" => "https://www.instagram.com/rabodepez/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-2.webp',
        ],
        [
            "name" => "Uma Cantina Peruana",
            "address" => "Calle del Curato # 38 - 99",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 302 4622665",
            "link" => "https://www.umacantinaperuanactg.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-3.webp',
        ],
        [
            "name" => "Candé",
            "address" => "Calle de la Serrezuela # 39 - 10",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6685291",
            "link" => "https://restaurantecande.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-4.webp',
        ],
        [
            "name" => "Alma",
            "address" => "Calle San Agustín # 36",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6810050",
            "link" => "https://www.almacolombia.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-5.webp',
        ],
        [
            "name" => "La Casa de Socorro",
            "address" => "Frente al C.C. Getsemaní",
            "city" => "Getsemaní, Cartagena",
            "phone" => "+57 315 7186666",
            "link" => "https://www.instagram.com/restaurantelacasadesocorro/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-6.webp',
        ],
        [
            "name" => "Carmen",
            "address" => "Calle 38 # 8 - 19",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 310 3949344",
            "link" => "https://www.instagram.com/carmenrestaurante/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-7.webp',
        ],
        [
            "name" => "Harry's Sasson",
            "address" => "Cra. 3 # 31 - 19",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6501015",
            "link" => "https://www.hotelcharlestonsantateresa.com/es/Restaurantes-Bar/harry-s-cartagena",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-8.webp',
        ],
        [
            "name" => "La Cocina de Pepina",
            "address" => "Calle 25 # 9A - 06 L. 2",
            "city" => "Getsemaní, Cartagena",
            "phone" => "+57 300 8565189",
            "link" => "https://www.instagram.com/lacocinadepepina/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-9.webp',
        ],
        [
            "name" => "Agua de León",
            "address" => "Calle de Ayos # 4 - 46",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 315 2780517",
            "link" => "https://www.instagram.com/aguadeleonrestaurante/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-10.webp',
        ],
        [
            "name" => "Mar y Zielo",
            "address" => "Cra. 5 # 34 - 63",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 317 6911393",
            "link" => "https://www.maryzielo.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-11.webp',
        ],
        [
            "name" => "Celele",
            "address" => "Cra. 10C # 29 - 200",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 301 7420389",
            "link" => "https://celelerestaurante.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-12.webp',
        ],
        [
            "name" => "La Vitrola",
            "address" => "Cra. 2 # 33 - 66",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6648243",
            "link" => "https://www.instagram.com/lavitrolacartagena/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-13.webp',
        ],
        [
            "name" => "Mardeleva",
            "address" => "Nuestra Sra. del Carmen # 33 - 41",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 317 6680456",
            "link" => "https://hotelelmarques.co/restaurante/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-14.webp',
        ],
    ]
  ],
  "bars_pubs" => [
    "id" => "bars",
    "title" => "Bars & Pubs",
    "title_es" => "BARS & PUBS",
    "img" => THEME_IMG . 'icons/icon-bars-2.svg',
    "places" => [
        [
            "name" => "El Barón",
            "address" => "Cra. 4 # 31 - 7",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 315 6463018",
            "link" => "https://www.instagram.com/elbaroncafe/",
            "image" => THEME_IMG . 'places-cartagena/bares-1.webp',
        ],
        [
            "name" => "Mirador Gastro Bar",
            "address" => "Cra. 7 # 32 - 77",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 322 5109747",
            "link" => "https://www.miradorgastrobar.com",
            "image" => THEME_IMG . 'places-cartagena/bares-2.webp',
        ],
        [
            "name" => "Alquímico",
            "address" => "Calle Colegio # 34 - 24",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 316 5331932",
            "link" => "https://alquimico.com",
            "image" => THEME_IMG . 'places-cartagena/bares-3.webp',
        ],
        [
            "name" => "La Jugada",
            "address" => "Cra. 6 # 34 - 25",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 316 3194481",
            "link" => "https://la-jugada.cluvi.co",
            "image" => THEME_IMG . 'places-cartagena/bares-4.webp',
        ],
        [
            "name" => "Buena Vida",
            "address" => "Calle del Porvenir, Esquina",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 322 3061025",
            "link" => "https://www.instagram.com/buenavidamarisqueria_/",
            "image" => THEME_IMG . 'places-cartagena/bares-5.webp',
        ],
        [
            "name" => "El Coro",
            "address" => "Cra. 8 # 39 - 36",
            "city" => "Hotel Santa Clara",
            "phone" => "+57 (605) 6504700",
            "link" => "https://www.sofitellegendsantaclara.com/",
            "image" => THEME_IMG . 'places-cartagena/bares-6.webp',
        ],
    ]
  ],
  "brunch_desserts" => [
    "id" => "brunch",
    "title" => "Brunch & Desserts",
    "title_es" => "Brunch & Desserts",
    "img" => THEME_IMG . 'icons/icon-brunch-2.svg',
    "places" => [
        [
            "name" => "Ely Café",
            "address" => "Calle 7 # 2 - 50",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 316 8752466",
            "link" => "https://elyreposteria.com/elycafe/",
            "image" => THEME_IMG . 'places-cartagena/postres-1.webp',
        ],
        [
            "name" => "Pascal",
            "address" => "Calle 30 # 8B - 108",
            "city" => "Getsemaní, Cartagena",
            "phone" => "+57 319 2481245",
            "link" => "https://www.instagram.com/quienespascal/",
            "image" => THEME_IMG . 'places-cartagena/postres-2.webp',
        ],
        [
            "name" => "Época Espresso",
            "address" => "Cra. 5 # 34 - 52",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 315 8008072",
            "link" => "https://www.instagram.com/weare.epoca/",
            "image" => THEME_IMG . 'places-cartagena/postres-3.webp',
        ],
        [
            "name" => "Juan Valdéz Café",
            "address" => "Cra. 2 # 7 - 17",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6651156",
            "link" => "https://juanvaldez.com",
            "image" => THEME_IMG . 'places-cartagena/postres-4.webp',
        ],
        [
            "name" => "La Paletteria",
            "address" => "Calle 35 # 03 - 86 local 2",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 56661579",
            "link" => "https://www.instagram.com/lapaletteria/",
            "image" => THEME_IMG . 'places-cartagena/postres-5.webp',
        ],
        [
            "name" => "Café Quindío",
            "address" => "C.C. La Serrezuela",
            "city" => "C.C. La Serrezuela - Cartagena",
            "phone" => "+57 320 6936900",
            "link" => "https://www.instagram.com/cafequindio.co/",
            "image" => THEME_IMG . 'places-cartagena/postres-6.webp',
        ],
        [
            "name" => "Café San Alberto",
            "address" => "Cra. 3 # 35 - 18",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 318 7964457",
            "link" => "https://cafesanalberto.com.co/",
            "image" => THEME_IMG . 'places-cartagena/postres-7.webp',
        ],
        [
            "name" => "El Café Ábaco",
            "address" => "Calle 36 # 3 - 86",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6786143",
            "link" => "https://www.abacolibros.com",
            "image" => THEME_IMG . 'places-cartagena/postres-8.webp',
        ],
    ]
  ],
  "boutiques" => [
    "id" => "boutiques",
    "title" => "Boutiques",
    "title_es" => "Boutiques",
    "img" => THEME_IMG . 'icons/icon-boutiques-2.svg',
    "places" => [
        [
            "name" => "C.C. La Serrezuela",
            "address" => "Cra. 11 # 39 - 21",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6421795",
            "link" => "https://www.instagram.com/laserrezuela/?hl=es",
            "image" => THEME_IMG . 'places-cartagena/boutiques-1.webp',
        ],
        [
            "name" => "Malva",
            "address" => "Cra. 11 # 39 - 21",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 300 3278066",
            "link" => "https://www.instagram.com/malva.col/",
            "image" => THEME_IMG . 'places-cartagena/boutiques-2.webp',
        ],
        [
            "name" => "St. Dom",
            "address" => "Cra. 3 # 33 - 70",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6354380",
            "link" => "https://www.instagram.com/stdomofficial/",
            "image" => THEME_IMG . 'places-cartagena/boutiques-3.webp',
        ],
        [
            "name" => "Silvia Tcherassi",
            "address" => "Calle 31 # 31 - 11",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6790051",
            "link" => "https://co.silviatcherassi.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-4.webp',
        ],
        [
            "name" => "Francesca Miranda",
            "address" => "Calle 31 # 3 - 25",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6648821",
            "link" => "https://francescamiranda.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-5.webp',
        ],
        [
            "name" => "Beatriz Camacho",
            "address" => "Calle 33 # 3 - 04",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 320 5651113",
            "link" => "https://beatrizcamacho.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-6.webp',
        ],
        [
            "name" => "Goretty Medina",
            "address" => "Calle La Mantilla # 3 - 44",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 317 4368144",
            "link" => "https://co.gorettymedinac.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-7.webp',
        ],
        [
            "name" => "Ketty Tinoco",
            "address" => "Calle Balocco # 33 - 01",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 301 6287824",
            "link" => "https://kettytinoco.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-8.webp',
        ],
        [
            "name" => "Azulu",
            "address" => "Cra. 3 # 31 - 11",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6642724",
            "link" => "https://azulu.co",
            "image" => THEME_IMG . 'places-cartagena/boutiques-9.webp',
        ],
        [
            "name" => "Boutique Gabriel",
            "address" => "Cra. 2 # 9 – 148 L. 5",
            "city" => "Bocagrande, Cartagena",
            "phone" => "+57 (605) 6658020",
            "link" => "http://www.boutiquegabriel.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-10.webp',
        ],
        [
            "name" => "D'Clase",
            "address" => "Av. San Martin 5 – 84T L.201",
            "city" => "Bocagrande, Cartagena",
            "phone" => "+57 300 7889362",
            "link" => "https://www.instagram.com/dclase.co/",
            "image" => THEME_IMG . 'places-cartagena/boutiques-11.webp',
        ],
    ]
  ],
  "salones_de_belleza" => [
    "id" => "beauty",
    "title" => "Beauty Salons",
    "title_es" => "Beauty Salons",
    "img" => THEME_IMG . 'icons/icon-beauty-salons-2.svg',
    "places" => [
        [
            "name" => "The Salon Peluquería",
            "address" => "Cra 3 # 4 - 23 Local 1",
            "city" => "Bocagrande, Cartagena",
            "phone" => "+57 (605) 6783950",
            "link" => "https://www.instagram.com/thesaloncartagena/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-1.webp',
        ],
        [
            "name" => "Franklin Ramos",
            "address" => "Cra. 11 # 39 - 21 L. S23",
            "city" => "C.C. La Serrezuela - Cartagena",
            "phone" => "+57 316 5294386",
            "link" => "https://www.instagram.com/franklinramossalon.ctg/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-2.webp',
        ],
        [
            "name" => "Portada Peluqueria",
            "address" => "Cra. 3 # 4 - 21",
            "city" => "Boca Grande, Cartagena",
            "phone" => "+57 (605) 6524223",
            "link" => "https://www.instagram.com/portadapeluqueria/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-3.webp',
        ],
        [
            "name" => "Carlos Torres",
            "address" => "Av. San Martín # 5 - 84 L. 201",
            "city" => "Boca Grande, Cartagena",
            "phone" => "+57 316 6091227",
            "link" => "https://www.instagram.com/carlostorres.studio10/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-4.webp',
        ],
        [
            "name" => "Diego Moya",
            "address" => "Calle de la Serrezuela # 39 - 02",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6685291",
            "link" => "https://www.instagram.com/diegomoyasalon/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-5.webp',
        ],
        [
            "name" => "Gloss Peluqueria",
            "address" => "Cra. 3 # 31 - 19",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6501015",
            "link" => "https://www.instagram.com/gloss_peluqueria/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-6.webp',
        ],
        [
            "name" => "Andrea Rodríguez",
            "address" => "Calle 10A # 2 - 38",
            "city" => "Boca Grande, Cartagena",
            "phone" => "+57 301 7929773",
            "link" => "https://www.instagram.com/andrearodriguezbeauty/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-7.webp',
        ],
        [
            "name" => "Karla B. López",
            "address" => "Calle de Ayos # 4 - 46",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 315 2780517",
            "link" => "https://www.instagram.com/karlabrigittemakeup/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-8.webp',
        ],
    ]
  ]
];

$thingsToDo = [
    [
        "image" => THEME_IMG . 'things-to-do-1.png',
        "titulo" => "1. OLD CITY IMMERSION",
        "titulo_2" => "# DAY THEME & FLOW",
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
        "titulo_2" => "# DAY THEME & FLOW",
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
        "titulo_2" => "# DAY THEME & FLOW",
        "description" => "Sunrise visit Castillo San Felipe → Bazurto Market deep-dive (arepa de huevo, tropical fruit stands) → Street-food safari in Getsemaní → Rum-&-chocolate pairing at El Barón",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Evening cocktails: Alquímico rooftop."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-4.png',
        "titulo" => "4. RIVERS & COASTAL RHYTHM",
        "titulo_2" => "# DAY THEME & FLOW",
        "description" => "10:00 pick-up → Chambaculera boat (live champeta, drums) through Ciénaga de la Virgen → beach fish-fry (mojarra, patacón) → return mid-afternoon",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Spa / pool siesta afterwards."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-5.png',
        "titulo" => "5. TIERRA BOMBA CLUB-HOP",
        "titulo_2" => "# DAY THEME & FLOW",
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
        "titulo_2" => "# DAY THEME & FLOW",
        "description" => "08:00 van → San Basilio de Palenque (drum workshop, culture walk, coconut-milk stew lunch) → back by 16:00",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Rooftop yoga at Casa Carolina or designer browsing (St Dom, Silvia Tcherassi, Agua de León)."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-7.png',
        "titulo" => "7. ICONIC HOTELS + DESIGNER & EMERALD DAY",
        "titulo_2" => "# DAY THEME & FLOW",
        "description" => "Morning coffee in Sofitel Santa Clara courtyard → peek at Harry Sasson's Harry's Cartagena (reserve lunch) in the Charleston Santa Teresa Hotel → Pop to Charleston Santa Teresa rooftop bar → Personal-shop circuit: St Dom → Silvia Tcherassi → Maygel Coronel → La Serrezuela → private emerald lesson",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Dinner: 10-course \"New Colombian\" at Celele (book early)."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-8.png',
        "titulo" => "8. NATIONAL AVIARY & PLAYA BLANCA / TRANQUILA",
        "titulo_2" => "# DAY THEME & FLOW",
        "description" => "07:30 boat / van to Aviario Nacional (170 bird species) → continue to Playa Blanca or quieter Playa Tranquila for turquoise swim & lunch. Try \"jugo de corozo\".",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Optional: sunset plankton tour add-on (Transport waits)."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-9.png',
        "titulo" => "9. MUD & MANGROVE MARVELS",
        "titulo_2" => "# DAY THEME & FLOW",
        "description" => "Morning Volcán Totumo mud-bath → rinse in lagoon → optional mangrove canoe glide near Galerazamba's pink salt flats",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Return to city ~14:00 → rooftop siesta."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-10.png',
        "titulo" => "10. COSTEÑO COOKING CLASS",
        "titulo_2" => "# DAY THEME & FLOW",
        "description" => "Market run with chef → hands-on class: coconut rice, fried fish, posta cartagenera, patacón → feast & cocktail pairing",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Afternoon free for photos in Getsemaní's graffiti alleys."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-11.png',
        "titulo" => "11. DAY-CHIVA CITY TOUR (MUST-DO)",
        "titulo_2" => "# DAY THEME & FLOW",
        "description" => "09:00 Day-Chiva open-air bus (live city guide, chilled costeño beers) → landmark photo stops → drop-off around 12:30",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Afternoon options: second island hop, boutique crawl, or spa."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-12.png',
        "titulo" => "12. NIGHT-CHIVA FIESTA",
        "titulo_2" => "# DAY THEME & FLOW",
        "description" => "20:00 Night-Chiva pick-up → onboard music, open bar → ends at club La Movida",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Pre-party dinner at Candé (folklore show)."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-13.png',
        "titulo" => "13. SCUBA & OCEAN PLAY",
        "titulo_2" => "# DAY THEME & FLOW",
        "description" => "Morning two-tank reef dive (or Discover Scuba) with Diving Planet from Club Náutico → snorkel friends join sand-bar swim → seafood picnic on Isla Arena",
        "titulo_3" => "KEY DETAILS & UPGRADES",
        "items" => [
            "item_1" => "• Golden-hour catamaran back (DJ on deck)."
        ]
    ],
    [
        "image" => THEME_IMG . 'things-to-do-14.png',
        "titulo" => "14. BOCAGRANDE BEACH FINALE",
        "titulo_2" => "# DAY THEME & FLOW",
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
        <!-- <img class="w-100" src="<?php echo THEME_IMG; ?>bg-cartagena-3.webp" alt="Background Cartagena"> -->
        <img class="w-100 h-100 object-fit-cover position-fixed top-0 start-0" src="<?php echo THEME_IMG; ?>bg-cartagena-3-.webp" alt="Background Cartagena">
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
                                    <p class="fs-xl-6 text-gray-200 letter-spacing-1 mb-4">Don't forget your passports! Please double check the expiration date.</p>
                                    <h2 class="fs-xl-5 text-primary letter-spacing-24 uppercase">CheckMig</h2>
                                    <p class="fs-xl-6 text-gray-200 letter-spacing-1 mb-4">Please complete the immigration registration form 48 hours before your trip, as the airline requires proof of completion to check-in. Complete the same step to return to the US. <a href="https://apps.migracioncolombia.gov.co/pre-registro" style="text-decoration: underline;" target="blank">Click Here</a></p>
                                    <h2 class="fs-xl-5 text-primary letter-spacing-24 uppercase">RAFAEL NUÑEZ - INTERNATIONAL AIRPORT</h2>
                                    <p class="fs-xl-6 text-gray-200 letter-spacing-1 mb-4">Flights to Cartagena on the Caribbean coast. LATAM, Delta, American Airlines, United, Aeromexico, Copa Airlines and Avianca operate direct flights to Rafael Núñez Airport. The airport is just a short 10-minute taxi ride to the old town. Authorized taxi services are available 24 hours a day. The fare to Getsemani is about $14,000 COP. To the hotel zone of the Historic Center (Ciudad Amurallada), it's about $18,000 COP max, and to the Bocagrande area, it costs $30,000 COP. Typically, $1 USD is equivalent to approximately $4,100 COP.</p>
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
                                    <div class="icon d-flex align-items-center">
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

                                                        <span class="line line--small m-0 pt-2 mb-2"></span>
                                    
                                                        <?php if ($place['address']) : ?>
                                                        <p class="fs-xl-6 text-gray-100"><?php echo $place['address']; ?></p>
                                                        <?php endif?>
                                    
                                                        <?php if ($place['city']) : ?>
                                                        <p class="fs-xl-6 mb-2 text-gray-100"><?php echo $place['city']; ?></p>
                                                        <?php endif?>
                                    
                                                        <div class=""></div>
                                    
                                                        <?php if ($place['phone']) : ?>
                                                        <p class="fs-xl-6 text-gray-100 mb-3" style="-webkit-text-stroke-width: 0.5px;"><?php echo $place['phone']; ?></p>
                                                        <?php endif?>
                                
                                                        <div class=""></div>
                                    
                                                        <?php if ($place['link']) : ?>
                                                            <a class="btn btn-small rounded-0 uppercase" href="<?php echo $place['link']; ?>" target="_blank">
                                                                View
                                                            </a>
                                                        <?php endif; ?>

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
                            <div class="icon d-flex align-items-center">
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
                            <li class="fs-xl-6 text-primary mb-3 letter-spacing-1 fw-normal mb-3">Ask what a fair price is for any service (like taxis, beach food, boat rides, massages, etc.)</li>
                            <li class="fs-xl-6 text-primary mb-3 letter-spacing-1 fw-normal mb-3">Report being overcharged — even if it doesn’t feel “off,” if something seems expensive or way higher than expected, you can reach out.</li>

                            <p class="fs-xl-6 text-primary mb-3 letter-spacing-1 fw-normal">Just say something like “report case” and they’ll step in to help. If needed, the police will come and help you get your money back.</p>
                            <p class="fs-xl-6 text-primary mb-3 letter-spacing-1 fw-normal">It’s not confrontational, it’s not dangerous — it’s not like in the U.S. Cartagena’s tourist team handles it quickly and kindly, and it gets resolved fast. This is one of the city’s best tools to keep visitors protected and relaxed.</p>

                            <span class="line line--full bg-orange mb-4"></span>

                            <h2 class="fs-xl-5 text-orange letter-spacing-24 uppercase mb-3">OFFICIAL CITY PRICE LIST</h2>
                            <p class="fs-xl-6 text-primary letter-spacing-1 fw-normal mb-3">Want to double-check average prices before saying yes to anything? Here’s the official guide to what you should expect to pay for:</p>
                            <li class="fs-xl-6 text-primary letter-spacing-1 fw-normal mb-0">Taxi rides</li>
                            <li class="fs-xl-6 text-primary letter-spacing-1 fw-normal mb-0">Beach services (massages, chairs, seafood)</li>
                            <li class="fs-xl-6 text-primary letter-spacing-1 fw-normal mb-0">Island boat trips</li>
                            <li class="fs-xl-6 text-primary letter-spacing-1 fw-normal mb-0">Local food and drinks</li>
                            <li class="fs-xl-6 text-primary letter-spacing-1 fw-normal mb-3">City tours, and more.</li>

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