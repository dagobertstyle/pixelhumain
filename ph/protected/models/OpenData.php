<?php

class OpenData
{
    /*
     * Tous les pays disponible à l'inscription
     */
    public static $phCountries = array("France"=>"France",
                        				"Guadeloupe"=>"Guadeloupe",
                      					"Guyanne"=>"Guyanne",
                        				"Martinique"=>"Martinique",
                        				"Mayotte"=>"Mayotte",
                        				"Nouvelle-Calédonie"=>"Nouvelle-Calédonie",
                        				"Réunion"=>"Réunion",
                                        "St Pierre et Miquelon"=>"St Pierre et Miquelon");
    /**
     * Classé par departement 
     * ce tableau fait le lien entre Code postal et nom de ville
     */
    public static $commune = array( '974'=>array(
                                            '97400'=> 'ST DENIS',
                                            '97410'=> 'ST PIERRE',
                                            '97411'=> 'BOIS DE NEFLES ST PAUL',
                                            '97412'=> 'BRAS PANON',
                                            '97413'=> 'CILAOS',
                                            '97414'=> 'ENTRE DEUX',
                                            '97416'=> 'LA CHALOUPE',
                                            '97417'=> 'LA MONTAGNE',
                                            '97418'=> 'LA PLAINE DES CAFRES',
                                            '97419'=> 'LA POSSESSION',
                                            '97420'=> 'LE PORT',
                                            '97421'=> 'LA RIVIERE',
                                            '97422'=> 'LA SALINE',
                                            '97423'=> 'LE GUILLAUME',
                                            '97424'=> 'LE PITON ST LEU',
                                            '97425'=> 'LES AVIRONS',
                                            '97426'=> 'LES TROIS BASSINS',
                                            '97427'=> 'L ETANG SALE',
                                            '97429'=> 'PETITE ILE',
                                            '97430'=> 'LE TAMPON',
                                            '97431'=> 'LA PLAINE DES PALMISTES',
                                            '97432'=> 'RAVINE DES CABRIS',
                                            '97433'=> 'SALAZIE',
                                            '97434'=> 'ST GILLES LES BAINS' ,
                                            '97435'=> 'ST GILLES LES HAUTS',
                                            '97436'=> 'ST LEU',
                                            '97437'=> 'STE ANNE',
                                            '97438'=> 'STE MARIE',
                                            '97439'=> 'STE ROSE',
                                            '97440'=> 'ST ANDRE',
                                            '97441'=> 'STE SUZANNE',
                                            '97442'=> 'ST PHILIPPE',
                                            '97450'=> 'ST LOUIS',
                                            '97460'=> 'ST PAUL',
                                            '97470'=> 'ST BENOIT',
                                            '97480'=> 'ST JOSEPH',
                                            '97490'=> 'STE CLOTILDE'
                                            )
                                    );
     public static $communeMap = array( '974'=>array(
                                            '97400'=> array( "codeinsee"=>'97411', "name"=>'ST DENIS', "news"=>"N"),
                                            '97410'=> array( "codeinsee"=>'97416', "name"=>'ST PIERRE', "news"=>"S"),
                                            '97411'=> array( "codeinsee"=>'97415', "name"=>'BOIS DE NEFLES ST PAUL', "news"=>"O"),
                                            '97412'=> array( "codeinsee"=>'97402', "name"=>'BRAS PANON', "news"=>"E"),
                                            '97413'=> array( "codeinsee"=>'97424', "name"=>'CILAOS', "news"=>"S"),
                                            '97414'=> array( "codeinsee"=>'97403', "name"=>'ENTRE DEUX', "news"=>"S"),
                                            '97416'=> array( "codeinsee"=>'97413', "name"=>'LA CHALOUPE', "news"=>"O"),
                                            '97417'=> array( "codeinsee"=>'97411', "name"=>'LA MONTAGNE', "news"=>"N"),
                                            '97418'=> array( "codeinsee"=>'97422', "name"=>'LA PLAINE DES CAFRES', "news"=>"S"),
                                            '97419'=> array( "codeinsee"=>'97408', "name"=>'LA POSSESSION', "news"=>"N"),
                                            '97420'=> array( "codeinsee"=>'97407', "name"=>'LE PORT', "news"=>"N"),
                                            '97421'=> array( "codeinsee"=>'97414', "name"=>'LA RIVIERE', "news"=>"S"),
                                            '97422'=> array( "codeinsee"=>'97415', "name"=>'LA SALINE', "news"=>"O"),
                                            '97423'=> array( "codeinsee"=>'97415', "name"=>'LE GUILLAUME', "news"=>"O"),
                                            '97424'=> array( "codeinsee"=>'97413', "name"=>'LE PITON ST LEU', "news"=>"O"),
                                            '97425'=> array( "codeinsee"=>'97401', "name"=>'LES AVIRONS', "news"=>"S"),
                                            '97426'=> array( "codeinsee"=>'97423', "name"=>'LES TROIS BASSINS', "news"=>"O"),
                                            '97427'=> array( "codeinsee"=>'97404', "name"=>'L ETANG SALE', "news"=>"S"),
                                            '97429'=> array( "codeinsee"=>'97405', "name"=>'PETITE ILE', "news"=>"S"),
                                            '97430'=> array( "codeinsee"=>'97422', "name"=>'LE TAMPON', "news"=>"S"),
                                            '97431'=> array( "codeinsee"=>'97406', "name"=>'LA PLAINE DES PALMISTES', "news"=>"E"),
                                            '97432'=> array( "codeinsee"=>'97416', "name"=>'RAVINE DES CABRIS', "news"=>"S"),
                                            '97433'=> array( "codeinsee"=>'97421', "name"=>'SALAZIE', "news"=>"E"),
                                            '97434'=> array( "codeinsee"=>'97415', "name"=>'ST GILLES LES BAINS', "news"=>"O") ,
                                            '97435'=> array( "codeinsee"=>'97415', "name"=>'ST GILLES LES HAUTS', "news"=>"O"),
                                            '97436'=> array( "codeinsee"=>'97413', "name"=>'ST LEU', "news"=>"O"),
                                            '97437'=> array( "codeinsee"=>'97410', "name"=>'STE ANNE', "news"=>"E"),
                                            '97438'=> array( "codeinsee"=>'97418', "name"=>'STE MARIE', "news"=>"N"),
                                            '97439'=> array( "codeinsee"=>'97419', "name"=>'STE ROSE', "news"=>"E"),
                                            '97440'=> array( "codeinsee"=>'97409', "name"=>'ST ANDRE', "news"=>"E"),
                                            '97441'=> array( "codeinsee"=>'97420', "name"=>'STE SUZANNE', "news"=>"E"),
                                            '97442'=> array( "codeinsee"=>'97417', "name"=>'ST PHILIPPE', "news"=>"S"),
                                            '97450'=> array( "codeinsee"=>'97414', "name"=>'ST LOUIS', "news"=>"S"),
                                            '97460'=> array( "codeinsee"=>'97415', "name"=>'ST PAUL', "news"=>"O"),
                                            '97470'=> array( "codeinsee"=>'97410', "name"=>'ST BENOIT', "news"=>"E"),
                                            '97480'=> array( "codeinsee"=>'97412', "name"=>'ST JOSEPH', "news"=>"S"),
                                            '97490'=> array( "codeinsee"=>'97411', "name"=>'STE CLOTILDE', "news"=>"N")
                                            )
                                    );
                                    
/* Code Postal to Insee 
 * le code insee est connecté à une commune
 * le code postale est connecté à une ville
 * */ 
  public static $codePostalToCodeInsee = array( '974'=>array(
                                            '97400'=> '97411',
                                            '97410'=> '97416',
                                            '97411'=> '97415',
                                            '97412'=> '97402',
                                            '97413'=> '97424',
                                            '97414'=> '97403',
                                            '97416'=> '97413',
                                            '97417'=> '97411',
                                            '97418'=> '97422',
                                            '97419'=> '97408',
                                            '97420'=> '97407',
                                            '97421'=> '97414',
                                            '97422'=> '97415',
                                            '97423'=> '97415',
                                            '97424'=> '97413',
                                            '97425'=> '97401',
                                            '97426'=> '97423',
                                            '97427'=> '97404',
                                            '97429'=> '97405',
                                            '97430'=> '97422',
                                            '97431'=> '97406',
                                            '97432'=> '97416',
                                            '97433'=> '97421',
                                            '97434'=> '97423',
                                            '97434'=> '97415',
                                            '97435'=> '97415',
                                            '97436'=> '97413',
                                            '97437'=> '97410',
                                            '97438'=> '97418',
                                            '97439'=> '97419',
                                            '97440'=> '97409',
                                            '97441'=> '97420',
                                            '97442'=> '97417',
                                            '97450'=> '97414',
                                            '97460'=> '97415',
                                            '97470'=> '97410',
                                            '97480'=> '97412',
                                            '97490'=> '97411'
  
                                            )
   
                                    );
                                    
                                    /*
                                     97413'=> 'CILAOS', SUD
                                            '97414'=> 'ENTRE DEUX',  SUD
                                            '97416'=> 'LA CHALOUPE',  OUEST
                                            '97417'=> 'LA MONTAGNE',  NORD
                                            '97418'=> 'LA PLAINE DES CAFRES',  SUD
                                            '97419'=> 'LA POSSESSION',  NORD
                                            '97420'=> 'LE PORT',  NORD
                                            '97421'=> 'LA RIVIERE', SUD
                                            '97422'=> 'LA SALINE', OUEST
                                            '97423'=> 'LE GUILLAUME', OUEST
                                            '97424'=> 'LE PITON ST LEU', OUEST
                                            '97425'=> 'LES AVIRONS', SUD
                                            '97426'=> 'LES TROIS BASSINS', OUEST
                                            '97427'=> 'L ETANG SALE', SUD
                                            '97429'=> 'PETITE ILE', SUD
                                            '97430'=> 'LE TAMPON', SUD
                                            '97431'=> 'LA PLAINE DES PALMISTES', EST
                                            '97432'=> 'RAVINE DES CABRIS', SUD
                                            '97433'=> 'SALAZIE', EST
                                            '97434'=> 'LES TROIS BASSINS', OUEST
                                            '97434'=> 'ST GILLES LES BAINS' , OUEST
                                            '97435'=> 'ST GILLES LES HAUTS', OUEST
                                            '97436'=> 'ST LEU', OUEST
                                            '97437'=> 'STE ANNE', EST
                                            '97438'=> 'STE MARIE',NORD
                                            '97439'=> 'STE ROSE', EST
                                            '97440'=> 'ST ANDRE', EST
                                            '97441'=> 'STE SUZANNE', EST
                                            '97442'=> 'ST PHILIPPE', SUD
                                            '97450'=> 'ST LOUIS', SUD
                                            '97460'=> 'ST PAUL', OUEST
                                            '97470'=> 'ST BENOIT', EST
                                            '97480'=> 'ST JOSEPH', SUD
                                            '97490'=> 'STE CLOTILDE' NORD
                                     */
                                   
}