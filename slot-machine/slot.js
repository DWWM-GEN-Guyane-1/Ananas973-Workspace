/* On commence par définir les variables qui serviront à définir le comportement et les caractéristiques techniques de la machine à sous */
var IMAGE_HEIGHT = 64; /* Cette variable déclarée permet de définir la hauteur des images qui seront chargées dans les bobines */
var IMAGE_TOP_MARGIN = 5; /* Celle-ci définit la marge du haut des images */
var IMAGE_BOTTOM_MARGIN = 5; /* Définit la marge du bas des images */
var SLOT_SEPARATOR_HEIGHT = 2 /* Définit la hauteur des séparateurs */
var SLOT_HEIGHT = IMAGE_HEIGHT + IMAGE_TOP_MARGIN + IMAGE_BOTTOM_MARGIN + SLOT_SEPARATOR_HEIGHT; // Définit le nbre de pixels supporté par les images
var RUNTIME = 3000; // how long all slots spin before starting countdown
var SPINTIME = 1000; // how long each slot spins at minimum
var ITEM_COUNT = 6 // item count in slots
var SLOT_SPEED = 15; // how many pixels per second slots roll
var DRAW_OFFSET = 45 // how much draw offset in slot display from top

/* C'est la variable pour le tableau de réponses en fonction du score obtenu de manière aléatoire*/
var BLURB_TBL = [
    'No win!',
    'Good!',
    'Excellent!',
    'JACKPOT!'
];