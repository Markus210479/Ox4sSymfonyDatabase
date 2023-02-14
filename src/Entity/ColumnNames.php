<?php

namespace App\Entity;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ColumnNames
{
    public $id = '';
    public $hersteller = '';
    public $lieferant_1 = '';
    public $lieferant_2 = '';
    public $lieferant_3 = '';
    public $lieferant_4 = '';
    public $lieferant_5 = '';
    public $lieferant_6 = '';
    public $lieferant_7 = '';
    public $positionsName = '';
    public $kurzName = '';
    public $langName = '';
    public $kategorie = '';
    public $herstellerArtikelNummer = '';
    public $lieferantenArtikelNummer = '';
    public $lieferantenArtikelNummer_2 = '';
    public $einheitsPreis_1_netto = '';
    public $ep_1_u = '';
    public $einheitsPreis_2_netto = '';
    public $ep_2_u = '';
    public $pe = '';
    public $vpe = '';
    public $einheit = '';
    public $rabatt = '';
    public $rdim = '';
    public $rabattiererNettoPreis = '';
    public $alternativArtNr = '';
    public $vk_10 = '';
    public $vk_15 = '';
    public $vk_20 = '';
    public $bemerkungen = '';
    public $intLink = '';
    public $extLink = '';
    public $hoehe = '';
    public $hDim = '';
    public $breite = '';
    public $bDim = '';
    public $tiefe = '';
    public $tDim = '';
    public $umgebungsTemperatur = '';
    public $uDim = '';
    public $lieferZeit = '';
    public $q_status = '';
    public $lagerPlatz = '';
   
    public $attributesArr = [ 
        self::ID[0] => ['name' => self::ID[1]],
        self::HERSTELLER[0] => ['name' => self::HERSTELLER[1]], 
        self::LIEFERANT_1[0] => ['name' => self::LIEFERANT_1[1]], 
        self::LIEFERANT_2[0] => ['name' =>self::LIEFERANT_2[1]], 
        self::LIEFERANT_3[0] => ['name' => self::LIEFERANT_3[1]], 
        self::LIEFERANT_4[0] => ['name' => self::LIEFERANT_4[1]], 
        self::LIEFERANT_5[0] => ['name' => self::LIEFERANT_5[1]], 
        self::LIEFERANT_6[0] => ['name' => self::LIEFERANT_6[1]], 
        self::LIEFERANT_7[0] => ['name' => self::LIEFERANT_7[1]], 
        self::POSITIONSNAME[0] => ['name' => self::POSITIONSNAME[1]], 
        self::LANGNAME[0] => ['name' => self::LANGNAME[1]], 
        self::KATEGORIE[0] => ['name' => self::KATEGORIE[1]], 
        self::HERSTELLER_ARTIKELNUMMER[0] => ['name' => self::HERSTELLER_ARTIKELNUMMER[1]], 
        self::LIEFERANTEN_ARTIKELNUMMER[0] => ['name' => self::LIEFERANTEN_ARTIKELNUMMER[1]], 
        self::LIEFERANTEN_ARTIKELNUMMER_2[0] => ['name' => self::LIEFERANTEN_ARTIKELNUMMER_2[1]], 
        self::EINHEITSPREIS_1_NETTO[0] => ['name' => self::EINHEITSPREIS_1_NETTO[1]], 
        self::EP1U[0] => ['name' => self::EP1U[1], 'type' => ChoiceType::class, 'choices' => Units::CURRENCY], 
        self::EINHEITSPREIS_2_NETTO[0] => ['name' => self::EINHEITSPREIS_2_NETTO[1]], 
        self::EP2U[0] => ['name' => self::EP2U[1], 'type' => ChoiceType::class, 'choices' => Units::CURRENCY], 
        self::PE[0] => ['name' => self::PE[1]], 
        self::VPE[0] => ['name' => self::VPE[1]], 
        self::EINHEIT[0] => ['name' => self::EINHEIT[1], 'type' => ChoiceType::class, 'choices' => Units::EINHEIT], 
        self::RABATT[0] => ['name' => self::RABATT[1]], 
        self::RDIM[0] => ['name' => self::RDIM[1], 'type' => ChoiceType::class, 'choices' => Units::RABATT], 
        self::RABATTIERTER_NETTOPREIS[0] => ['name' => self::RABATTIERTER_NETTOPREIS[1]], 
        self::ALTERNATIV_ART_NR[0] => ['name' => self::ALTERNATIV_ART_NR[1]], 
        self::VK_10[0] => ['name' => self::VK_10[1]], 
        self::VK_15[0] => ['name' => self::VK_15[1]], 
        self::VK_20[0] => ['name' => self::VK_20[1]], 
        self::BEMERKUNGEN[0] => ['name' => self::BEMERKUNGEN[1]], 
        self::INT_LINK[0] => ['name' => self::INT_LINK[1]], 
        self::EXT_LINK[0] => ['name' => self::EXT_LINK[1]], 
        self::HOEHE[0] => ['name' => self::HOEHE[1]], 
        self::HDIM[0] => ['name' => self::HDIM[1], 'type' => ChoiceType::class, 'choices' => Units::METRISCH], 
        self::BREITE[0] => ['name' => self::BREITE[1]], 
        self::BDIM[0] => ['name' => self::BDIM[1], 'type' => ChoiceType::class, 'choices' => Units::METRISCH], 
        self::TIEFE[0] => ['name' => self::TIEFE[1]], 
        self::TDIM[0] => ['name' => self::TDIM[1], 'type' => ChoiceType::class, 'choices' => Units::METRISCH], 
        self::UMGEBUNGSTEMPERATUR[0] => ['name' => self::UMGEBUNGSTEMPERATUR[1]], 
        self::UDIM[0] => ['name' => self::UDIM[1], 'type' => ChoiceType::class, 'choices' => Units::TEMPERATUR], 
        self::LIEFERZEIT[0] => ['name' => self::LIEFERZEIT[1]], 
        self::Q_STATUS[0] => ['name' => self::Q_STATUS[1], 'type' => ChoiceType::class, 'choices' => Units::STATUS], 
        self::LAGERPLATZ[0] => ['name' => self::LAGERPLATZ[1]]

        // self::SERVICE_ID[0] => self::SERVICE_ID[1], 
        // self::NETTOSTUECKPREIS_1[0] => self::NETTOSTUECKPREIS_1[1], 
        // self::NP1U[0] => self::NP1U[1], 
        // self::NETTOSTUECKPREIS_2[0] => self::NETTOSTUECKPREIS_2[1], 
        // self::NP2U[0] => self::NP2U[1], 
        // self::LEER[0] => self::LEER[1], 
        // self::LETZTE_AENDERUNG[0] => self::LETZTE_AENDERUNG[1], 

    ];

    //Artikel und z. T. Services
    public const ID = ["id", "ID"];
    public const HERSTELLER = ["hersteller", "Hersteller"];
    public const LIEFERANT_1 = ["lieferant_1", "Lieferant 1"];
    public const LIEFERANT_2 = ["lieferant_2", "Lieferant 2"];
    public const LIEFERANT_3 = ["lieferant_3", "Lieferant 3"];
    public const LIEFERANT_4 = ["lieferant_4", "Lieferant 4"];
    public const LIEFERANT_5 = ["lieferant_5", "Lieferant 5"];
    public const LIEFERANT_6 = ["lieferant_6", "Lieferant 6"];
    public const LIEFERANT_7 = ["lieferant_7", "Lieferant 7"];
    public const POSITIONSNAME = ["positionsName", "Positionsname"];
    public const KURZNAME = ["kurzName", "Kurzname"];
    public const LANGNAME = ["langName", "Langname"];
    public const KATEGORIE = ["kategorie", "Kategorie"];
    public const HERSTELLER_ARTIKELNUMMER = ["herstellerArtikelNummer", "Hersteller-Artikelnummer"];
    public const LIEFERANTEN_ARTIKELNUMMER = ["lieferantenArtikelNummer", "Lieferanten-Artikelnummer"];
    public const LIEFERANTEN_ARTIKELNUMMER_2 = ["lieferantenArtikelNummer_2", "Lieferanten-Artikelnummer2"];
    public const EINHEITSPREIS_1_NETTO = ["einheitsPreis_1_netto", "Einheitspreis [1](netto)"];
    public const EP1U = ["ep_1_u", "EP1U"];
    public const EINHEITSPREIS_2_NETTO = ["einheitsPreis_2_netto", "Einheitspreis [2](netto)"];
    public const EP2U = ["ep_2_u", "EP2U"];
    public const PE = ["pe", "PE"];
    public const VPE = ["vpe", "VPE"];
    public const EINHEIT = ["einheit", "Einheit"];
    public const RABATT = ["rabatt", "Rabatt"];
    public const RDIM = ["rdim", "RDIM"];
    public const RABATTIERTER_NETTOPREIS = ["rabattiererNettoPreis", "rabattierte Nettopreis"];
    public const ALTERNATIV_ART_NR = ["alternativArtNr", "Alternativ Art. Nr."];
    public const VK_10 = ["vk_10", "VK 10"];
    public const VK_15 = ["vk_15", "VK 15"];
    public const VK_20 = ["vk_20", "VK 20"];
    public const BERMEKRUNGEN = ["bemerkungen", "Bemerkungen"];
    public const INT_LINK = ["intLink", "Int. Link."];
    public const EXT_LINK = ["extLink", "Ext. Link"];
    public const HOEHE = ["hoehe", "H�he"];
    public const HDIM = ["hDim", "HDIM"];
    public const BREITE = ["breite", "Breite"];
    public const BDIM = ["bDim", "BDIM"];
    public const TIEFE = ["tiefe", "Tiefe"];
    public const TDIM = ["tDim", "TDIM"];
    public const UMGEBUNGSTEMPERATUR = ["umgebungsTemperatur", "Umgebungs-temperatur (Betrieb)"];
    public const UDIM = ["uDim", "UDIM"];
    public const LIEFERZEIT = ["lieferZeit", "Lieferzeit"];
    public const Q_STATUS = ["q_status", "Q-Status"];
    public const LAGERPLATZ = ["lagerPlatz", "Lagerplatz"];

    //erg�nzende Konstanten f�r Services
    public const SERVICE_ID = ["serviceID", "Service ID"];
    public const NETTOSTUECKPREIS_1 = ["nettoStueckPreis_1", "Nettost�ckpreis1"];
    public const NP1U = ["np_1_U", "NP1U"];
    public const NP2U = ["np_2_U", "NP2U"];
    public const NETTOSTUECKPREIS_2 = ["nettoStueckPreis_2", "Nettost�ckpreis2"];
    public const LEER = ["leer", "leer"];
    public const LETZTE_AENDERUNG = ["letzteAenderung", "letzte �nderung"];

    //erg�nzende Konstanten f�r Baugruppen
    public const BOM_ID = ["bomId", "BOM ID"];
    public const BEZEICHNUNG = ["bezeichung", "Bezeichnung"];
    public const KOMMENTAR = ["kommmentar", "Kommentar"];
    public const EK_KOSTEN_LETZTE = ["letzeEkKosten", "EK Kosten (letzte Version)"];
    public const EKU = ["eku", "EKU"];

    //erg�nzende Konstanten f�r Version
    public const VERSION = ["version", "Version"];
    public const EK_KOSTEN = ["EkKosten", "EK Kosten"];
    public const BEMERKUNGEN = ["bemerkungen", "Bemerkungen"];
    public const F_BG_ID = ["fBgId", "F BG ID"];

    
}

?>