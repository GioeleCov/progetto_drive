<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PublicController;



class PublicController extends Controller
{
    public function home() {

        $cars = [
            [   
                'id' => 1,
                'name' => 'Ferrari F8',
                'brand' => 'Ferrari',
                'year' => 2020,
                'description' => "La Ferrari F8 Tributo è spinta dallo stesso motore della 488 Pista: un V8 di 90° bi-turbo IHI con una cilindrata di 3902 cm³, denominato Ferrari F154 CG, in grado di erogare una potenza massima di 720 CV a 8000 giri/min, una potenza specifica di 185 CV per litro e una coppia massima di 770 Nm a 3250 giri/min.",
                'genre' => 'sportiva',
                'img' => 'https://m.media-amazon.com/images/I/416aeSUW-pL._AC_SX425_.jpg',
                'price' => 233.930,
            ],
            [
                'id' => 2,
                'name' => 'Lamborghini Aventador',
                'brand' => 'Lamborghini',
                'year' => 2022,
                'description' => "Il nome, come consuetudine della casa, rimanda al nome di un toro da combattimento (Aventador, nella fattispecie), ed è stato registrato dalla Lamborghini nel mese di agosto. Nel design appare come l'evoluzione stilistica della Murciélago, la vettura che va a sostituire, ma numerosi sono i richiami all'esclusiva fuoriserie Reventón del 2007.",
                'genre' => 'sportiva',
                'img' => 'https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_gw/aventador/2023/model_chooser/aventador_ultimae_roadster_m.jpg',
                'price' => 430.730,
    
            ],
            [
                'id' => 3,
                'name' => 'Jaguar F-TYPE',
                'brand' => 'Jaguar',
                'year' => 2019,
                'description' => "La vettura è stata presentata con tre diversi propulsori, e cioè due V6 3.0 sovralimentati che erogano rispettivamente 340 CV e 380 CV e un V8 5.0 con compressore volumetrico 550 CV. Quest'ultimo, permette alla vettura un'accelerazione da 0 a 100 km/h in 4.3 secondi, con una velocità massima di 300 km/h. Successivamente sono state presentate le versioni a quattro ruote motrici del modello, e la versione Jaguar F Type R con il 5.0 V8 potenziato. La F Type R a trazione integrale raggiunge i 100 chilometri orari in 4 secondi.
    
                A partire dal 2017 è stata introdotta una nuova versione che monta un motore 4 cilindri in linea 2.0 da 300 CV.
                
                Tutti i motori vengono gestiti da un cambio automatico Quickshift a 8 marce, con l'eccezione di un cambio manuale a 6 marce (ZF S6-45) che veniva montato su richiesta sui motori V6.
                
                La carrozzeria, costruita in alluminio, porta la vettura ad un peso di circa 1600 kg. Essa, per quanto riguarda il design, presenta una doppia branchia intorno alla calandra anteriore, delle fiancate muscolose e dei fari posteriori sottili.[2]
                
                Le sospensione della F-Type all'anteriore ha un doppio braccio oscillante e al posteriore con ammortizzatori adattivi e le impostazioni delle sospensioni sono regolabili per consentire al guidatore di regolare la guida e maneggevolezza dell'auto. La F-TYPE ha un totale di 25 diverse modalità di guida programmate per soddisfare le diverse condizioni della strada e stili di guida.",
                'genre' => 'sportiva',
                'img' => 'https://cdnwp.dealerk.com/d4748478/uploads/sites/46/2021/04/jag_f-type_22my_p300_r-dynamic_black_convertible_exterior-e1618913956453.jpg',
                'price' => 66.542,
            ],
            [
                'id' => 4,
                'name' => 'Mercedes EQS',
                'brand' => 'Mercedes',
                'year' => 2023,
                'description' => "La strada verso un futuro 100% sostenibile prosegue con EQS, perfetta combinazione di design, innovazione, funzionalità e connettività.
    
                EQS è la prima berlina luxury completamente elettrica con un’autonomia fino a 782 km, design polisensoriale e i più avanzati sistemi di assistenza alla guida, come il rivoluzionario MBUX Hyperscreen, di serie su EQS 580 4MATIC, che si estende come un’onda su tutta la plancia e cattura ogni sguardo.
                
                La nuova generazione MBUX è disponibile anche con display per guidatore e display OLED centrale.",
                'genre' => 'suv',
                'img' => 'https://autodesignmagazine.com/wp-content/uploads/2022/04/2022041901_Mercedes_EQS.jpg',
                'price' => 118.291,
            ],
            [
                'id' => 5,
                'name' => 'Audi Q8',
                'brand' => 'Audi',
                'year' => 2023,
                'description' => "Questa auto nasce per entrare nel segmento di mercato dei SUV-Coupé di lusso, fino ad ora dominato dalla BMW X6 e della Mercedes-Benz Classe GLE Coupé.
                Viene prodotto a Bratislava, utilizzando la piattaforma Volkswagen MLBevo[1].",
                'genre' => 'suv',
                'img' => 'https://hd2.tudocdn.net/938628?w=1200&h=675',
                'price' => 91.729,
            ],
            [
                'id' => 6,
                'name' => 'Volvo XC90',
                'brand' => 'Volvo',
                'year' => 2018,
                'description' => "Disponibile con carrozzeria a cinque porte in versione a cinque e sette posti con una vasta gamma di accessori, il Volvo XC90 viene commercializzato con la trazione integrale per i motori più potenti e con la trazione anteriore per la versione D3. Sono disponibili quattro allestimenti: Momentum, Summum, R-design ed Executive messi in ordine di importanza. È stato il primo esempio di SUV costruito sul telaio di una normale automobile, sfrutta infatti la piattaforma P2 che ha dato origine anche alle Volvo S80.
    
                Realizzata dietro le forti richieste del mercato americano, è diventata ben presto la Volvo più venduta negli Stati Uniti.
                
                Con il M.Y. 2007 (modello anno 2007) è stato introdotto un modello lievemente ristilizzato della vettura, a cui sono state abbinate nuove motorizzazioni, tra cui il 4.4 V8 da 315 cavalli e una coppia di 400 Nm realizzato in collaborazione con la Yamaha, ed il D5 aggiornato alla potenza di 185 cavalli anch'esso con una coppia di 400 Nm. Con il M.Y. 2010 fa il suo debutto il propulsore D5244T18 aggiornato alle norme Euro 5 erogante una potenza di 200 CV. In origine tale propulsore (D5244T4) erogava 185 CV, mentre il valore di coppia motrice sale sino a 420 Nm.
                
                Il modello, sempre prodotto negli stabilimenti Volvo di Torslanda in Svezia, viene nuovamente aggiornato alla fine del 2011.
                
                Il 12 luglio 2014 esce di produzione dopo 636.143 esemplari costruiti[2]. L'ultimo esemplare, il numero 636.143, rimarrà presso la Volvo e verrà trasportato presso il Volvo Museum.",
                'genre' => 'suv',
                'img' => 'https://www.volvocars.com/images/v/-/media/market-assets/italy/applications/local-pages/volvo-car-credit/volvo-car-lease/xc90-b5.jpg?h=1080&iar=0&w=1920',
                'price' => 77.855,
            ],
            [
                'id' => 7,
                'name' => 'Nissan Qashqai',
                'brand' => 'Nissan',
                'year' => 2021,
                'description' => "Il termine Qashqai identifica una popolazione raminga che risiede in una regione sulle montagne del sud dell'Iran.[1] Il nome è stato scelto dalla Nissan pensando che gli acquirenti di quest'autovettura dovessero essere di natura nomade. In Australia, come anche in Giappone, la Qashqai viene commercializzata con il nome di Dualis. Negli Stati Uniti D'America invece, la vettura viene commercializzata col nome Nissan Rogue Sport (per associarlo alla più grossa Nissan Rogue, cugina statunitense della Nissan X-Trail)",
                'genre' => 'suv',
                'img' => 'https://www.motori.it/BnpG-ixKpxU-9Q8ZnsBm3RCxX8k=/640x373/smart/uploads/2021/02/nissan-qashqai-premiere-edition.jpg',
                'price' => 27.234,
            ],
            [
                'id' => 8,
                'name' => 'Jeep Compass',
                'brand' => 'Jeep',
                'year' => 2020,
                'description' => "A seguito dell'acquisizione del marchio Chrysler, della cui galassia faceva parte anche la Jeep, da parte di FIAT avvenuto nel 2009, il gruppo ha iniziato un progressivo svecchiamento ed avvicinamento alle esigenze europee del marchio Jeep. I primi modelli a vedere la luce da questa sinergia sono stati la Cherokee del 2013 e successsivamente la Renegade del 2014. Per coprire meglio il segmeno C del mercato dei SUV, nel 2016 la Jeep ha deciso di lanciare una seconda serie della Compass, che si distaccava totalmente dalla serie precedente, sia dal punto di vista estetico che da quello meccanico.
    
                La seconda serie della Compass (nome in codice MP)[3] è stata presentata alla fine del 2016 ed è stata posta in vendita all'inizio dell’anno successivo; l'auto è basata sul pianale Small US Wide condiviso con la Jeep Renegade,[4] di cui condivide la meccanica con un passo di 7 cm e una lunghezza totale di 15 cm in più.[5]
                
                Inizialmente la Compass veniva prodotta esclusivamente presso lo stabilimento messicano di Toluca, successivamente la produzione si è diffusa in altri 4 stabilimenti: Italia (Melfi), Brasile (Goiana) per il mercato sud americano, India (Pune) per il mercato locale e per tutti i mercati con guida a destra, Cina (Canton) per la Cina e il mercato sud-est asiatico. Lo stabilimento di Toluca continua a produrre i veicoli destinati al mercato nord americano.",
                'genre' => 'suv',
                'img' => 'https://hd2.tudocdn.net/967963?w=1200&h=900',
                'price' => 33.893,
            ],
            [
                'id' => 9,
                'name' => 'Nissan Micra',
                'brand' => 'Micra',
                'year' => 2020,
                'description' => "La prima serie venne lanciata sul mercato giapponese nel 1982, in Europa esordì nel 1983 mentre in Nord America venne importata solo dal 1984 dove venne adottata la denominazione europea.
    
                La K10 (codice che identifica la prima serie di Micra) è stata progettata per essere la principale alternativa alla Honda City, vettura compatta molto apprezzata in Giappone, e per entrare in concorrenza con famose vetture europee quali la Fiat Uno e l'Austin Metro. Le vendite sul mercato italiano iniziarono solo nel 1990, con il motore 1.2, carrozzeria 3 e 5 porte e un unico allestimento (SLX).
                
                La vettura era caratterizzata da linee piuttosto squadrate ispirate alla produzione automobilistica dell'epoca e subì alcuni aggiornamenti estetici una prima volta nel 1985 e una seconda nel 1989.",
                'genre' => 'utilitaria',
                'img' => 'https://cdn.drivek.com/configurator-imgs/cars/it/original/NISSAN/MICRA/30270_BERLINA-5-PORTE/nissan-micra-front.jpg',
                'price' => 18.203,
            ],
            [
                'id' => 10,
                'name' => 'Mazda 3 Sedan',
                'brand' => 'Mazda',
                'year' => 2018,
                'description' => "Anticipata dalla concept car Mazda MX Sportif la prima generazione di 3 debutta al Salone dell'auto di Francoforte nel 2003 e introduce un nuovo concetto di design nella gamma Mazda. La linea completamente differente dalla vecchia generazione di 323 è stata elaborata dal centro stile californiano della Mazda con l'intervento del centro stile giapponese per la progettazione del gruppo frontale. La piattaforma completamente inedita è stata studiata dalla Ford per i modelli medio compatti del gruppo e sarà estesa alle future generazioni di Focus, Volvo S40 e V50. La prima serie è nota come progetto BK.
    
                Prodotta nello stabilimento giapponese di Hōfu la Mazda 3 è stata commercializzata sia in versione con carrozzeria 2 volumi con 5 porte che con carrozzeria berlina a 3 volumi per 4 porte, quest'ultima non importata in Europa (ad eccezione della Francia dove è stata venduta dal 2003 al 2005, dell'Austria e della Slovenia) e prodotta anche in Colombia presso gli stabilimenti Ford di Bogotà. La Mazda 3 berlina risulta la più apprezzata in America e Asia. Sottoposta nel 2006 ai crash test Euro NCAP la vettura ha totalizzato il punteggio di 4 stelle nella protezione adulti",
                'genre' => 'utilitaria',
                'img' => 'https://immagini.alvolante.it/sites/default/files/styles/anteprima_lunghezza_640/public/news_galleria/2021/01/mazda-3-sedan-2021-01_8.jpg',
                'price' => 29.028,
            ],
            [
                'id' => 11,
                'name' => 'Fiat Panda',
                'brand' => 'Fiat',
                'year' => 2020,
                'description' => "La prima serie nasce nel 1980 per inserirsi tra i modelli 126 e 127. Dalla prima eredita il motore bicilindrico raffreddato ad aria e dalla seconda il quattro cilindri da 903 cm³. Nel 1983 viene commercializzata sia la versione S, che connota la Panda 30 e la Panda 45 di allestimenti più eleganti e della opzione della vernice grigio metallizzata (le Panda 30S e 45S hanno le stesse motorizzazioni della 30 e 45 ma appunto migliorate negli interni e con nuova griglia esterna), sia la versione a trazione integrale, mentre nel 1986 la Panda riceve un restyling, che vede anche l'adozione di un inedito motore diesel oltre all'adozione di un nuovo retrotreno con sospensioni ereditate dalla Autobianchi Y10, ed assume la denominazione Supernova. Rimane in produzione fino all'uscita del modello successivo nel settembre 2003 ed è l'unica superutilitaria Fiat ad avere 3 porte.",
                'genre' => 'utilitaria',
                'img' => 'https://www.fiat.it/content/dam/fiat/com/my23/panda/colorizer/white/Panda-figurini-colorizer-Gelato-White-desktop-680x430.png',
                'price' => 14.734,
            ],
            [
                'id' => 12,
                'name' => 'Audi A5',
                'brand' => 'Audi',
                'year' => 2020,
                'description' => "Introdotta sul mercato nel 2007 in versione coupé e successivamente nel 2009 come cabriolet e berlina fastback a 5 porte, la prima generazione è stata costruita sulla piattaforma MLB, con base tecnica a motore anteriore installato longitudinalmente, sul quale dal 2008 è stata costruita anche Audi A4. Da Quest'ultima la A5 riprende gran parte delle parti e componenti meccaniche, nonché anche la gamma motori da questo, incluso i modello sportivi S5 e RS5.
    
                La variante coupé (nome in codice Type 8T) della prima generazione della A5 è stata presentata nel marzo 2007 al Salone di Ginevra.[1] La A5 è la prima coupé di medie dimensioni prodotta dla Audi dai tempi della Audi Coupé B3, costruita fino al 1996. Alla coupé ha fatto seguito nel 2009 la cabriolet che ha sostituito l'Audi A4 cabriolet e poi la berlina a cinque porte chiamata A5 Sportback. La prima generazione è stata prodotta in due stabilimenti differenti. Mentre la coupé e la variante berlina, compresi i modelli S5/RS5, uscivano dalla catena di montaggio di Ingolstadt, tutte le versioni cabriolet venivano prodotte nello stabilimento di Neckarsulm.",
                'genre' => 'berlina',
                'img' => 'https://www.motori.it/2VRVE0hbxFgVBcgMg9C2e5wqMZs=/960x640/smart/uploads/2023/03/modello1-foto-directcar-625f1caf4af20.jpeg',
                'price' => 50.357 ,
            ],
        ];
    
        return view('welcome', ['cars' => $cars]);
    }

    public function searchCars(Request $request){

        $cars = [
            [   
                'id' => 1,
                'name' => 'Ferrari F8',
                'brand' => 'Ferrari',
                'year' => 2020,
                'description' => "La Ferrari F8 Tributo è spinta dallo stesso motore della 488 Pista: un V8 di 90° bi-turbo IHI con una cilindrata di 3902 cm³, denominato Ferrari F154 CG, in grado di erogare una potenza massima di 720 CV a 8000 giri/min, una potenza specifica di 185 CV per litro e una coppia massima di 770 Nm a 3250 giri/min.",
                'genre' => 'sportiva',
                'img' => 'https://m.media-amazon.com/images/I/416aeSUW-pL._AC_SX425_.jpg',
                'price' => 233.930,
            ],
            [
                'id' => 2,
                'name' => 'Lamborghini Aventador',
                'brand' => 'Lamborghini',
                'year' => 2022,
                'description' => "Il nome, come consuetudine della casa, rimanda al nome di un toro da combattimento (Aventador, nella fattispecie), ed è stato registrato dalla Lamborghini nel mese di agosto. Nel design appare come l'evoluzione stilistica della Murciélago, la vettura che va a sostituire, ma numerosi sono i richiami all'esclusiva fuoriserie Reventón del 2007.",
                'genre' => 'sportiva',
                'img' => 'https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_gw/aventador/2023/model_chooser/aventador_ultimae_roadster_m.jpg',
                'price' => 430.730,
    
            ],
            [
                'id' => 3,
                'name' => 'Jaguar F-TYPE',
                'brand' => 'Jaguar',
                'year' => 2019,
                'description' => "La vettura è stata presentata con tre diversi propulsori, e cioè due V6 3.0 sovralimentati che erogano rispettivamente 340 CV e 380 CV e un V8 5.0 con compressore volumetrico 550 CV. Quest'ultimo, permette alla vettura un'accelerazione da 0 a 100 km/h in 4.3 secondi, con una velocità massima di 300 km/h. Successivamente sono state presentate le versioni a quattro ruote motrici del modello, e la versione Jaguar F Type R con il 5.0 V8 potenziato. La F Type R a trazione integrale raggiunge i 100 chilometri orari in 4 secondi.
    
                A partire dal 2017 è stata introdotta una nuova versione che monta un motore 4 cilindri in linea 2.0 da 300 CV.
                
                Tutti i motori vengono gestiti da un cambio automatico Quickshift a 8 marce, con l'eccezione di un cambio manuale a 6 marce (ZF S6-45) che veniva montato su richiesta sui motori V6.
                
                La carrozzeria, costruita in alluminio, porta la vettura ad un peso di circa 1600 kg. Essa, per quanto riguarda il design, presenta una doppia branchia intorno alla calandra anteriore, delle fiancate muscolose e dei fari posteriori sottili.[2]
                
                Le sospensione della F-Type all'anteriore ha un doppio braccio oscillante e al posteriore con ammortizzatori adattivi e le impostazioni delle sospensioni sono regolabili per consentire al guidatore di regolare la guida e maneggevolezza dell'auto. La F-TYPE ha un totale di 25 diverse modalità di guida programmate per soddisfare le diverse condizioni della strada e stili di guida.",
                'genre' => 'sportiva',
                'img' => 'https://cdnwp.dealerk.com/d4748478/uploads/sites/46/2021/04/jag_f-type_22my_p300_r-dynamic_black_convertible_exterior-e1618913956453.jpg',
                'price' => 66.542,
            ],
            [
                'id' => 4,
                'name' => 'Mercedes EQS',
                'brand' => 'Mercedes',
                'year' => 2023,
                'description' => "La strada verso un futuro 100% sostenibile prosegue con EQS, perfetta combinazione di design, innovazione, funzionalità e connettività.
    
                EQS è la prima berlina luxury completamente elettrica con un’autonomia fino a 782 km, design polisensoriale e i più avanzati sistemi di assistenza alla guida, come il rivoluzionario MBUX Hyperscreen, di serie su EQS 580 4MATIC, che si estende come un’onda su tutta la plancia e cattura ogni sguardo.
                
                La nuova generazione MBUX è disponibile anche con display per guidatore e display OLED centrale.",
                'genre' => 'suv',
                'img' => 'https://autodesignmagazine.com/wp-content/uploads/2022/04/2022041901_Mercedes_EQS.jpg',
                'price' => 118.291,
            ],
            [
                'id' => 5,
                'name' => 'Audi Q8',
                'brand' => 'Audi',
                'year' => 2023,
                'description' => "Questa auto nasce per entrare nel segmento di mercato dei SUV-Coupé di lusso, fino ad ora dominato dalla BMW X6 e della Mercedes-Benz Classe GLE Coupé.
                Viene prodotto a Bratislava, utilizzando la piattaforma Volkswagen MLBevo[1].",
                'genre' => 'suv',
                'img' => 'https://hd2.tudocdn.net/938628?w=1200&h=675',
                'price' => 91.729,
            ],
            [
                'id' => 6,
                'name' => 'Volvo XC90',
                'brand' => 'Volvo',
                'year' => 2018,
                'description' => "Disponibile con carrozzeria a cinque porte in versione a cinque e sette posti con una vasta gamma di accessori, il Volvo XC90 viene commercializzato con la trazione integrale per i motori più potenti e con la trazione anteriore per la versione D3. Sono disponibili quattro allestimenti: Momentum, Summum, R-design ed Executive messi in ordine di importanza. È stato il primo esempio di SUV costruito sul telaio di una normale automobile, sfrutta infatti la piattaforma P2 che ha dato origine anche alle Volvo S80.
    
                Realizzata dietro le forti richieste del mercato americano, è diventata ben presto la Volvo più venduta negli Stati Uniti.
                
                Con il M.Y. 2007 (modello anno 2007) è stato introdotto un modello lievemente ristilizzato della vettura, a cui sono state abbinate nuove motorizzazioni, tra cui il 4.4 V8 da 315 cavalli e una coppia di 400 Nm realizzato in collaborazione con la Yamaha, ed il D5 aggiornato alla potenza di 185 cavalli anch'esso con una coppia di 400 Nm. Con il M.Y. 2010 fa il suo debutto il propulsore D5244T18 aggiornato alle norme Euro 5 erogante una potenza di 200 CV. In origine tale propulsore (D5244T4) erogava 185 CV, mentre il valore di coppia motrice sale sino a 420 Nm.
                
                Il modello, sempre prodotto negli stabilimenti Volvo di Torslanda in Svezia, viene nuovamente aggiornato alla fine del 2011.
                
                Il 12 luglio 2014 esce di produzione dopo 636.143 esemplari costruiti[2]. L'ultimo esemplare, il numero 636.143, rimarrà presso la Volvo e verrà trasportato presso il Volvo Museum.",
                'genre' => 'suv',
                'img' => 'https://www.volvocars.com/images/v/-/media/market-assets/italy/applications/local-pages/volvo-car-credit/volvo-car-lease/xc90-b5.jpg?h=1080&iar=0&w=1920',
                'price' => 77.855,
            ],
            [
                'id' => 7,
                'name' => 'Nissan Qashqai',
                'brand' => 'Nissan',
                'year' => 2021,
                'description' => "Il termine Qashqai identifica una popolazione raminga che risiede in una regione sulle montagne del sud dell'Iran.[1] Il nome è stato scelto dalla Nissan pensando che gli acquirenti di quest'autovettura dovessero essere di natura nomade. In Australia, come anche in Giappone, la Qashqai viene commercializzata con il nome di Dualis. Negli Stati Uniti D'America invece, la vettura viene commercializzata col nome Nissan Rogue Sport (per associarlo alla più grossa Nissan Rogue, cugina statunitense della Nissan X-Trail)",
                'genre' => 'suv',
                'img' => 'https://www.motori.it/BnpG-ixKpxU-9Q8ZnsBm3RCxX8k=/640x373/smart/uploads/2021/02/nissan-qashqai-premiere-edition.jpg',
                'price' => 27.234,
            ],
            [
                'id' => 8,
                'name' => 'Jeep Compass',
                'brand' => 'Jeep',
                'year' => 2020,
                'description' => "A seguito dell'acquisizione del marchio Chrysler, della cui galassia faceva parte anche la Jeep, da parte di FIAT avvenuto nel 2009, il gruppo ha iniziato un progressivo svecchiamento ed avvicinamento alle esigenze europee del marchio Jeep. I primi modelli a vedere la luce da questa sinergia sono stati la Cherokee del 2013 e successsivamente la Renegade del 2014. Per coprire meglio il segmeno C del mercato dei SUV, nel 2016 la Jeep ha deciso di lanciare una seconda serie della Compass, che si distaccava totalmente dalla serie precedente, sia dal punto di vista estetico che da quello meccanico.
    
                La seconda serie della Compass (nome in codice MP)[3] è stata presentata alla fine del 2016 ed è stata posta in vendita all'inizio dell’anno successivo; l'auto è basata sul pianale Small US Wide condiviso con la Jeep Renegade,[4] di cui condivide la meccanica con un passo di 7 cm e una lunghezza totale di 15 cm in più.[5]
                
                Inizialmente la Compass veniva prodotta esclusivamente presso lo stabilimento messicano di Toluca, successivamente la produzione si è diffusa in altri 4 stabilimenti: Italia (Melfi), Brasile (Goiana) per il mercato sud americano, India (Pune) per il mercato locale e per tutti i mercati con guida a destra, Cina (Canton) per la Cina e il mercato sud-est asiatico. Lo stabilimento di Toluca continua a produrre i veicoli destinati al mercato nord americano.",
                'genre' => 'suv',
                'img' => 'https://hd2.tudocdn.net/967963?w=1200&h=900',
                'price' => 33.893,
            ],
            [
                'id' => 9,
                'name' => 'Nissan Micra',
                'brand' => 'Micra',
                'year' => 2020,
                'description' => "La prima serie venne lanciata sul mercato giapponese nel 1982, in Europa esordì nel 1983 mentre in Nord America venne importata solo dal 1984 dove venne adottata la denominazione europea.
    
                La K10 (codice che identifica la prima serie di Micra) è stata progettata per essere la principale alternativa alla Honda City, vettura compatta molto apprezzata in Giappone, e per entrare in concorrenza con famose vetture europee quali la Fiat Uno e l'Austin Metro. Le vendite sul mercato italiano iniziarono solo nel 1990, con il motore 1.2, carrozzeria 3 e 5 porte e un unico allestimento (SLX).
                
                La vettura era caratterizzata da linee piuttosto squadrate ispirate alla produzione automobilistica dell'epoca e subì alcuni aggiornamenti estetici una prima volta nel 1985 e una seconda nel 1989.",
                'genre' => 'utilitaria',
                'img' => 'https://cdn.drivek.com/configurator-imgs/cars/it/original/NISSAN/MICRA/30270_BERLINA-5-PORTE/nissan-micra-front.jpg',
                'price' => 18.203,
            ],
            [
                'id' => 10,
                'name' => 'Mazda 3 Sedan',
                'brand' => 'Mazda',
                'year' => 2018,
                'description' => "Anticipata dalla concept car Mazda MX Sportif la prima generazione di 3 debutta al Salone dell'auto di Francoforte nel 2003 e introduce un nuovo concetto di design nella gamma Mazda. La linea completamente differente dalla vecchia generazione di 323 è stata elaborata dal centro stile californiano della Mazda con l'intervento del centro stile giapponese per la progettazione del gruppo frontale. La piattaforma completamente inedita è stata studiata dalla Ford per i modelli medio compatti del gruppo e sarà estesa alle future generazioni di Focus, Volvo S40 e V50. La prima serie è nota come progetto BK.
    
                Prodotta nello stabilimento giapponese di Hōfu la Mazda 3 è stata commercializzata sia in versione con carrozzeria 2 volumi con 5 porte che con carrozzeria berlina a 3 volumi per 4 porte, quest'ultima non importata in Europa (ad eccezione della Francia dove è stata venduta dal 2003 al 2005, dell'Austria e della Slovenia) e prodotta anche in Colombia presso gli stabilimenti Ford di Bogotà. La Mazda 3 berlina risulta la più apprezzata in America e Asia. Sottoposta nel 2006 ai crash test Euro NCAP la vettura ha totalizzato il punteggio di 4 stelle nella protezione adulti",
                'genre' => 'utilitaria',
                'img' => 'https://immagini.alvolante.it/sites/default/files/styles/anteprima_lunghezza_640/public/news_galleria/2021/01/mazda-3-sedan-2021-01_8.jpg',
                'price' => 29.028,
            ],
            [
                'id' => 11,
                'name' => 'Fiat Panda',
                'brand' => 'Fiat',
                'year' => 2020,
                'description' => "La prima serie nasce nel 1980 per inserirsi tra i modelli 126 e 127. Dalla prima eredita il motore bicilindrico raffreddato ad aria e dalla seconda il quattro cilindri da 903 cm³. Nel 1983 viene commercializzata sia la versione S, che connota la Panda 30 e la Panda 45 di allestimenti più eleganti e della opzione della vernice grigio metallizzata (le Panda 30S e 45S hanno le stesse motorizzazioni della 30 e 45 ma appunto migliorate negli interni e con nuova griglia esterna), sia la versione a trazione integrale, mentre nel 1986 la Panda riceve un restyling, che vede anche l'adozione di un inedito motore diesel oltre all'adozione di un nuovo retrotreno con sospensioni ereditate dalla Autobianchi Y10, ed assume la denominazione Supernova. Rimane in produzione fino all'uscita del modello successivo nel settembre 2003 ed è l'unica superutilitaria Fiat ad avere 3 porte.",
                'genre' => 'utilitaria',
                'img' => 'https://www.fiat.it/content/dam/fiat/com/my23/panda/colorizer/white/Panda-figurini-colorizer-Gelato-White-desktop-680x430.png',
                'price' => 14.734,
            ],
            [
                'id' => 12,
                'name' => 'Audi A5',
                'brand' => 'Audi',
                'year' => 2020,
                'description' => "Introdotta sul mercato nel 2007 in versione coupé e successivamente nel 2009 come cabriolet e berlina fastback a 5 porte, la prima generazione è stata costruita sulla piattaforma MLB, con base tecnica a motore anteriore installato longitudinalmente, sul quale dal 2008 è stata costruita anche Audi A4. Da Quest'ultima la A5 riprende gran parte delle parti e componenti meccaniche, nonché anche la gamma motori da questo, incluso i modello sportivi S5 e RS5.
    
                La variante coupé (nome in codice Type 8T) della prima generazione della A5 è stata presentata nel marzo 2007 al Salone di Ginevra.[1] La A5 è la prima coupé di medie dimensioni prodotta dla Audi dai tempi della Audi Coupé B3, costruita fino al 1996. Alla coupé ha fatto seguito nel 2009 la cabriolet che ha sostituito l'Audi A4 cabriolet e poi la berlina a cinque porte chiamata A5 Sportback. La prima generazione è stata prodotta in due stabilimenti differenti. Mentre la coupé e la variante berlina, compresi i modelli S5/RS5, uscivano dalla catena di montaggio di Ingolstadt, tutte le versioni cabriolet venivano prodotte nello stabilimento di Neckarsulm.",
                'genre' => 'berlina',
                'img' => 'https://www.motori.it/2VRVE0hbxFgVBcgMg9C2e5wqMZs=/960x640/smart/uploads/2023/03/modello1-foto-directcar-625f1caf4af20.jpeg',
                'price' => 50.357 ,
            ],
        ];

        $filterCars = [];

        $chiaveRicerca = $request->query('searchKey');

        foreach($cars as $car){

            if(Str::contains(strtolower($car['name']), strtolower($chiaveRicerca))){

                $filterCars[] = $car;
            }

        }

        return view ('searchres', ['cars' => $filterCars, 'chiaveRicerca' => $chiaveRicerca]);
    }

    public function contactPage(){

        return view ('form');
    }

    public function contactSend(Request $request){

        $tuonome = $request->input('tuonome');
        $object = $request->input('object');
        $messages = $request->input('messages');

        $contactMail = new ContactMail($tuonome, $object, $messages);

        Mail::to('info@autoshop.it')->send($contactMail);

        return redirect()->route('homepage')->with('message', 'Email inviata con successo');
        
    }


    public function details ($id) {
        $cars = [
            [   
                'id' => 1,
                'name' => 'Ferrari F8',
                'brand' => 'Ferrari',
                'year' => 2020,
                'description' => "La Ferrari F8 Tributo è spinta dallo stesso motore della 488 Pista: un V8 di 90° bi-turbo IHI con una cilindrata di 3902 cm³, denominato Ferrari F154 CG, in grado di erogare una potenza massima di 720 CV a 8000 giri/min, una potenza specifica di 185 CV per litro e una coppia massima di 770 Nm a 3250 giri/min.",
                'genre' => 'sportiva',
                'img' => 'https://m.media-amazon.com/images/I/416aeSUW-pL._AC_SX425_.jpg',
                'price' => 233.930,
            ],
            [
                'id' => 2,
                'name' => 'Lamborghini Aventador',
                'brand' => 'Lamborghini',
                'year' => 2022,
                'description' => "Il nome, come consuetudine della casa, rimanda al nome di un toro da combattimento (Aventador, nella fattispecie), ed è stato registrato dalla Lamborghini nel mese di agosto. Nel design appare come l'evoluzione stilistica della Murciélago, la vettura che va a sostituire, ma numerosi sono i richiami all'esclusiva fuoriserie Reventón del 2007.",
                'genre' => 'sportiva',
                'img' => 'https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_gw/aventador/2023/model_chooser/aventador_ultimae_roadster_m.jpg',
                'price' => 430.730,
                
            ],
            [
                'id' => 3,
                'name' => 'Jaguar F-TYPE',
                'brand' => 'Jaguar',
                'year' => 2019,
                'description' => "La vettura è stata presentata con tre diversi propulsori, e cioè due V6 3.0 sovralimentati che erogano rispettivamente 340 CV e 380 CV e un V8 5.0 con compressore volumetrico 550 CV. Quest'ultimo, permette alla vettura un'accelerazione da 0 a 100 km/h in 4.3 secondi, con una velocità massima di 300 km/h. Successivamente sono state presentate le versioni a quattro ruote motrici del modello, e la versione Jaguar F Type R con il 5.0 V8 potenziato. La F Type R a trazione integrale raggiunge i 100 chilometri orari in 4 secondi.
                
                A partire dal 2017 è stata introdotta una nuova versione che monta un motore 4 cilindri in linea 2.0 da 300 CV.
                
                Tutti i motori vengono gestiti da un cambio automatico Quickshift a 8 marce, con l'eccezione di un cambio manuale a 6 marce (ZF S6-45) che veniva montato su richiesta sui motori V6.
                
                La carrozzeria, costruita in alluminio, porta la vettura ad un peso di circa 1600 kg. Essa, per quanto riguarda il design, presenta una doppia branchia intorno alla calandra anteriore, delle fiancate muscolose e dei fari posteriori sottili.[2]
                
                Le sospensione della F-Type all'anteriore ha un doppio braccio oscillante e al posteriore con ammortizzatori adattivi e le impostazioni delle sospensioni sono regolabili per consentire al guidatore di regolare la guida e maneggevolezza dell'auto. La F-TYPE ha un totale di 25 diverse modalità di guida programmate per soddisfare le diverse condizioni della strada e stili di guida.",
                'genre' => 'sportiva',
                'img' => 'https://cdnwp.dealerk.com/d4748478/uploads/sites/46/2021/04/jag_f-type_22my_p300_r-dynamic_black_convertible_exterior-e1618913956453.jpg',
                'price' => 66.542,
            ],
            [
                'id' => 4,
                'name' => 'Mercedes EQS',
                'brand' => 'Mercedes',
                'year' => 2023,
                'description' => "La strada verso un futuro 100% sostenibile prosegue con EQS, perfetta combinazione di design, innovazione, funzionalità e connettività.
                
                EQS è la prima berlina luxury completamente elettrica con un’autonomia fino a 782 km, design polisensoriale e i più avanzati sistemi di assistenza alla guida, come il rivoluzionario MBUX Hyperscreen, di serie su EQS 580 4MATIC, che si estende come un’onda su tutta la plancia e cattura ogni sguardo.
                
                La nuova generazione MBUX è disponibile anche con display per guidatore e display OLED centrale.",
                'genre' => 'suv',
                'img' => 'https://autodesignmagazine.com/wp-content/uploads/2022/04/2022041901_Mercedes_EQS.jpg',
                'price' => 118.291,
            ],
            [
                'id' => 5,
                'name' => 'Audi Q8',
                'brand' => 'Audi',
                'year' => 2023,
                'description' => "Questa auto nasce per entrare nel segmento di mercato dei SUV-Coupé di lusso, fino ad ora dominato dalla BMW X6 e della Mercedes-Benz Classe GLE Coupé.
                Viene prodotto a Bratislava, utilizzando la piattaforma Volkswagen MLBevo[1].",
                'genre' => 'suv',
                'img' => 'https://hd2.tudocdn.net/938628?w=1200&h=675',
                'price' => 91.729,
            ],
            [
                'id' => 6,
                'name' => 'Volvo XC90',
                'brand' => 'Volvo',
                'year' => 2018,
                'description' => "Disponibile con carrozzeria a cinque porte in versione a cinque e sette posti con una vasta gamma di accessori, il Volvo XC90 viene commercializzato con la trazione integrale per i motori più potenti e con la trazione anteriore per la versione D3. Sono disponibili quattro allestimenti: Momentum, Summum, R-design ed Executive messi in ordine di importanza. È stato il primo esempio di SUV costruito sul telaio di una normale automobile, sfrutta infatti la piattaforma P2 che ha dato origine anche alle Volvo S80.
                
                Realizzata dietro le forti richieste del mercato americano, è diventata ben presto la Volvo più venduta negli Stati Uniti.
                
                Con il M.Y. 2007 (modello anno 2007) è stato introdotto un modello lievemente ristilizzato della vettura, a cui sono state abbinate nuove motorizzazioni, tra cui il 4.4 V8 da 315 cavalli e una coppia di 400 Nm realizzato in collaborazione con la Yamaha, ed il D5 aggiornato alla potenza di 185 cavalli anch'esso con una coppia di 400 Nm. Con il M.Y. 2010 fa il suo debutto il propulsore D5244T18 aggiornato alle norme Euro 5 erogante una potenza di 200 CV. In origine tale propulsore (D5244T4) erogava 185 CV, mentre il valore di coppia motrice sale sino a 420 Nm.
                
                Il modello, sempre prodotto negli stabilimenti Volvo di Torslanda in Svezia, viene nuovamente aggiornato alla fine del 2011.
                
                Il 12 luglio 2014 esce di produzione dopo 636.143 esemplari costruiti[2]. L'ultimo esemplare, il numero 636.143, rimarrà presso la Volvo e verrà trasportato presso il Volvo Museum.",
                'genre' => 'suv',
                'img' => 'https://www.volvocars.com/images/v/-/media/market-assets/italy/applications/local-pages/volvo-car-credit/volvo-car-lease/xc90-b5.jpg?h=1080&iar=0&w=1920',
                'price' => 77.855,
            ],
            [
                'id' => 7,
                'name' => 'Nissan Qashqai',
                'brand' => 'Nissan',
                'year' => 2021,
                'description' => "Il termine Qashqai identifica una popolazione raminga che risiede in una regione sulle montagne del sud dell'Iran.[1] Il nome è stato scelto dalla Nissan pensando che gli acquirenti di quest'autovettura dovessero essere di natura nomade. In Australia, come anche in Giappone, la Qashqai viene commercializzata con il nome di Dualis. Negli Stati Uniti D'America invece, la vettura viene commercializzata col nome Nissan Rogue Sport (per associarlo alla più grossa Nissan Rogue, cugina statunitense della Nissan X-Trail)",
                'genre' => 'suv',
                'img' => 'https://www.motori.it/BnpG-ixKpxU-9Q8ZnsBm3RCxX8k=/640x373/smart/uploads/2021/02/nissan-qashqai-premiere-edition.jpg',
                'price' => 27.234,
            ],
            [
                'id' => 8,
                'name' => 'Jeep Compass',
                'brand' => 'Jeep',
                'year' => 2020,
                'description' => "A seguito dell'acquisizione del marchio Chrysler, della cui galassia faceva parte anche la Jeep, da parte di FIAT avvenuto nel 2009, il gruppo ha iniziato un progressivo svecchiamento ed avvicinamento alle esigenze europee del marchio Jeep. I primi modelli a vedere la luce da questa sinergia sono stati la Cherokee del 2013 e successsivamente la Renegade del 2014. Per coprire meglio il segmeno C del mercato dei SUV, nel 2016 la Jeep ha deciso di lanciare una seconda serie della Compass, che si distaccava totalmente dalla serie precedente, sia dal punto di vista estetico che da quello meccanico.
                
                La seconda serie della Compass (nome in codice MP)[3] è stata presentata alla fine del 2016 ed è stata posta in vendita all'inizio dell’anno successivo; l'auto è basata sul pianale Small US Wide condiviso con la Jeep Renegade,[4] di cui condivide la meccanica con un passo di 7 cm e una lunghezza totale di 15 cm in più.[5]
                
                Inizialmente la Compass veniva prodotta esclusivamente presso lo stabilimento messicano di Toluca, successivamente la produzione si è diffusa in altri 4 stabilimenti: Italia (Melfi), Brasile (Goiana) per il mercato sud americano, India (Pune) per il mercato locale e per tutti i mercati con guida a destra, Cina (Canton) per la Cina e il mercato sud-est asiatico. Lo stabilimento di Toluca continua a produrre i veicoli destinati al mercato nord americano.",
                'genre' => 'suv',
                'img' => 'https://hd2.tudocdn.net/967963?w=1200&h=900',
                'price' => 33.893,
            ],
            [
                'id' => 9,
                'name' => 'Nissan Micra',
                'brand' => 'Micra',
                'year' => 2020,
                'description' => "La prima serie venne lanciata sul mercato giapponese nel 1982, in Europa esordì nel 1983 mentre in Nord America venne importata solo dal 1984 dove venne adottata la denominazione europea.
                
                La K10 (codice che identifica la prima serie di Micra) è stata progettata per essere la principale alternativa alla Honda City, vettura compatta molto apprezzata in Giappone, e per entrare in concorrenza con famose vetture europee quali la Fiat Uno e l'Austin Metro. Le vendite sul mercato italiano iniziarono solo nel 1990, con il motore 1.2, carrozzeria 3 e 5 porte e un unico allestimento (SLX).
                
                La vettura era caratterizzata da linee piuttosto squadrate ispirate alla produzione automobilistica dell'epoca e subì alcuni aggiornamenti estetici una prima volta nel 1985 e una seconda nel 1989.",
                'genre' => 'utilitaria',
                'img' => 'https://cdn.drivek.com/configurator-imgs/cars/it/original/NISSAN/MICRA/30270_BERLINA-5-PORTE/nissan-micra-front.jpg',
                'price' => 18.203,
            ],
            [
                'id' => 10,
                'name' => 'Mazda 3 Sedan',
                'brand' => 'Mazda',
                'year' => 2018,
                'description' => "Anticipata dalla concept car Mazda MX Sportif la prima generazione di 3 debutta al Salone dell'auto di Francoforte nel 2003 e introduce un nuovo concetto di design nella gamma Mazda. La linea completamente differente dalla vecchia generazione di 323 è stata elaborata dal centro stile californiano della Mazda con l'intervento del centro stile giapponese per la progettazione del gruppo frontale. La piattaforma completamente inedita è stata studiata dalla Ford per i modelli medio compatti del gruppo e sarà estesa alle future generazioni di Focus, Volvo S40 e V50. La prima serie è nota come progetto BK.
                
                Prodotta nello stabilimento giapponese di Hōfu la Mazda 3 è stata commercializzata sia in versione con carrozzeria 2 volumi con 5 porte che con carrozzeria berlina a 3 volumi per 4 porte, quest'ultima non importata in Europa (ad eccezione della Francia dove è stata venduta dal 2003 al 2005, dell'Austria e della Slovenia) e prodotta anche in Colombia presso gli stabilimenti Ford di Bogotà. La Mazda 3 berlina risulta la più apprezzata in America e Asia. Sottoposta nel 2006 ai crash test Euro NCAP la vettura ha totalizzato il punteggio di 4 stelle nella protezione adulti",
                'genre' => 'utilitaria',
                'img' => 'https://immagini.alvolante.it/sites/default/files/styles/anteprima_lunghezza_640/public/news_galleria/2021/01/mazda-3-sedan-2021-01_8.jpg',
                'price' => 29.028,
            ],
            [
                'id' => 11,
                'name' => 'Fiat Panda',
                'brand' => 'Fiat',
                'year' => 2020,
                'description' => "La prima serie nasce nel 1980 per inserirsi tra i modelli 126 e 127. Dalla prima eredita il motore bicilindrico raffreddato ad aria e dalla seconda il quattro cilindri da 903 cm³. Nel 1983 viene commercializzata sia la versione S, che connota la Panda 30 e la Panda 45 di allestimenti più eleganti e della opzione della vernice grigio metallizzata (le Panda 30S e 45S hanno le stesse motorizzazioni della 30 e 45 ma appunto migliorate negli interni e con nuova griglia esterna), sia la versione a trazione integrale, mentre nel 1986 la Panda riceve un restyling, che vede anche l'adozione di un inedito motore diesel oltre all'adozione di un nuovo retrotreno con sospensioni ereditate dalla Autobianchi Y10, ed assume la denominazione Supernova. Rimane in produzione fino all'uscita del modello successivo nel settembre 2003 ed è l'unica superutilitaria Fiat ad avere 3 porte.",
                'genre' => 'utilitaria',
                'img' => 'https://www.fiat.it/content/dam/fiat/com/my23/panda/colorizer/white/Panda-figurini-colorizer-Gelato-White-desktop-680x430.png',
                'price' => 14.734,
            ],
            [
                'id' => 12,
                'name' => 'Audi A5',
                'brand' => 'Audi',
                'year' => 2020,
                'description' => "Introdotta sul mercato nel 2007 in versione coupé e successivamente nel 2009 come cabriolet e berlina fastback a 5 porte, la prima generazione è stata costruita sulla piattaforma MLB, con base tecnica a motore anteriore installato longitudinalmente, sul quale dal 2008 è stata costruita anche Audi A4. Da Quest'ultima la A5 riprende gran parte delle parti e componenti meccaniche, nonché anche la gamma motori da questo, incluso i modello sportivi S5 e RS5.
                
                La variante coupé (nome in codice Type 8T) della prima generazione della A5 è stata presentata nel marzo 2007 al Salone di Ginevra.[1] La A5 è la prima coupé di medie dimensioni prodotta dla Audi dai tempi della Audi Coupé B3, costruita fino al 1996. Alla coupé ha fatto seguito nel 2009 la cabriolet che ha sostituito l'Audi A4 cabriolet e poi la berlina a cinque porte chiamata A5 Sportback. La prima generazione è stata prodotta in due stabilimenti differenti. Mentre la coupé e la variante berlina, compresi i modelli S5/RS5, uscivano dalla catena di montaggio di Ingolstadt, tutte le versioni cabriolet venivano prodotte nello stabilimento di Neckarsulm.",
                'genre' => 'berlina',
                'img' => 'https://www.motori.it/2VRVE0hbxFgVBcgMg9C2e5wqMZs=/960x640/smart/uploads/2023/03/modello1-foto-directcar-625f1caf4af20.jpeg',
                'price' => 50.357 ,
            ],
        ];
        
        foreach($cars as $car){
            if($car['id'] == $id){
                return view('carsdetail', ['car' => $car]);
            }
        }
    
        abort(404);
    }


}
