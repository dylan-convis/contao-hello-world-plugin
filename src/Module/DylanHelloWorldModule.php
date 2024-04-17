<?php

namespace Time4digital\DylansHelloWorldBundle\Module;

use Contao\Module;

//Hier werden die CSS- und JS-Dateien gesetzt. Format: bundles/bundleName/dateiName.dateExtension
$GLOBALS['TL_CSS'][] = 'bundles/dylanshelloworld/styles.css';
$GLOBALS['TL_JAVASCRIPT'][] = 'bundles/dylanshelloworld/scripts.js';

class DylanHelloWorldModule extends Module
{

    // Hier wird der Name des Templates festgelegt.
    // Der Name muss mit dem Template übereinstimmen, das sich unter ./src/Resources/contao/templates befindet.
    protected $strTemplate = 'mod_helloWorld'; 

    protected function compile()
    {
       
        // Mit $this->Template->nameVariable erstellst du Variablen, die dann im Template verwendet werden können.
        $this->Template->message = 'Hello World!';
        
        // Die Module Klasse gibt uns die Möglichkeit, Datenbankeinträge schnell über die Contao Database-Klasse zu laden.
        // Hier rufe ich die Daten über eine SQL-Abfrage ab. Diese Abfrage extrahiert Datenbankeinträge aus der Datenbank und speichert sie in einem Array.
        try {
            $objEntries = $this->Database->execute("SELECT * FROM tl_messages");
            $this->Template->entries = $objEntries->fetchAllAssoc();
        } catch (\Exception $e) {
        // Falls das nicht funktioniert, wird einfach ein leerer Array dem Template zugewiesen.
            $this->Template->entries = [];
        }
    }
}