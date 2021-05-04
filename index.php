<?php
// Mostra tutti gli errori/notice/warning
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$faqs = [
  [
    'h2' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
    'p' => [
        "La recente <a href='#'>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa.",
        "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa.",
        "Per presentare una richiesta di rimozione, compila questo <a href='#'>modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta.",
        "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio.",
        "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati."
      ]
  ],
  [
    'h2' => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
    'p' => [
        "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",
        "Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te.",
        "Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href='#'>Centro Google per la sicurezza online</a>.",
        "<a href='#'>Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.",
      ]
  ],
  [
    'h2' => "Perché il mio account è associato a un paese?",
    'p' => [
        "Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:",
        [
          'ol' => [
            "La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:",
            // 'nestedOl' => [
            //   "Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.",
            //   "Google LLC, con sede negli Stati Uniti, per il resto del mondo."
            // ],
            "La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.",
          ],
        ],
        "<a href='#'>Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.",
      ]
  ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Google faqs</title>
</head>
<body>
  <main>
    <?php
      for ( $i = 0; $i < count( $faqs ); $i++ ) {
        foreach ( $faqs[$i] as $key => $value) {
          if ( $key == 'h2') {
            echo '<h2>'.$value.'</h2>';
          } else if ( $key == 'p' ) {
            for ( $j = 0; $j < count( $value ); $j++ ) {
              if ( is_array($value[$j]) && array_key_exists( 'ol', $value[$j] ) ) {
                  echo '<ol>';
                  for ( $y = 0; $y < count( $value[$j]['ol'] ); $y++ ) {
                    echo '<li>'.$value[$j]['ol'][$y].'</li>';
                  }
                  echo '</ol>';
              } else {
                  echo '<p>'.$value[$j].'</p>';
              }
            }
          }
        }
      }
    ?>
  </main>

</body>
</html>
