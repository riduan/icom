<?php

require '../config.inc.php';
require '../functions.inc.php';

$FROM_USER_ID = 6551;
$TOPIC = 'Probleme mit Deiner Spende';
$MESSAGE = utf8_encode('(hi)

Leider hatte ich einige Probleme mit meinem PayPal Account so das ich jetzt nicht mehr an die Spenden rankomme.
Es w�re sehr nett von Dir wenn Du bei PayPal den K�uferschutz benutzt und das Geld zur�ckforderst. Dann hast Du wenigstens noch etwas von dem Geld und es ist nicht einfach nur wie im Klo runtergesp�lt.
Der VIP Status und die Werbefreiheit bleiben Dir nat�rlich erhalten.

Hier eine kleine Anleitung wie du den K�uferschutz benutzt:
[list=1]
[*] Logge Dich in Deinen Account ein, suche die Buchung der Spende und klicke auf "Details".
[*] Dort findest Du einen �hnlichen Text wie diesen:
[quote]Ein Transaktionsproblem k�nnen Sie innerhalb von 45 Tagen nach der Zahlung unter "Konfliktl�sungen" melden. Gibt es ein Problem mit dieser Transaktion? Hier klicken, um die Angelegenheit zu kl�ren[/quote]
[*] Klicke auf "Hier klicken, um die Angelegenheit zu kl�ren" (oder einem �hnlichen Text).
[*] W�hle auf der n�chsten Seite "K�uferschutz" aus und klicke auf "Weiter".
[*] W�hle "Ich habe den erworbenen Artikel nicht erhalten." aus und auf "Weiter".
[*] Auf der n�chsten Seite w�hle aus dem Men� "Welcher Kategorie entspricht der gekaufte Artikel?" "Dienstleistung" aus.
Im Feld "Nachricht an Verk�ufer verfassen" tr�gst Du in etwa folgendes ein:
[quote]Leider habe ich die versprochenen Dienstleistungen nicht erhalten und m�chte deshalb meine Spende zur�ckziehen.[/quote]
[*] Fertig :)
[/list]

Wir hoffen Du nimmst Dir die Zeit das Geld zur�ckzufordern und entschuldigen uns vielmals f�r diese Unannehmlichkeiten.

Liebe Gr��e Memento_Mori & Team');

$aa = db()->query("SELECT user_id FROM donations WHERE admin_id=$FROM_USER_ID");
while($a = $aa->fetch_assoc())
	user($FROM_USER_ID)->pn_new(array($a['user_id']), $TOPIC, $MESSAGE);

?>
