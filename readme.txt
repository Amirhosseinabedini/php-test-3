


Hallo und herzliche Grüße,

Mit Stolz und Respekt möchte ich mein Interesse an der Zusammenarbeit mit dem Team von Baebeca Solutions GmbH bekunden. Die Gelegenheit, an Ihrem einfachen Testprojekt zu arbeiten, war für mich äußerst wertvoll und angenehm. Ich habe mein Bestes gegeben, um alle Details sorgfältig zu berücksichtigen und den Code auf bestmögliche Weise zu entwickeln.
Ich möchte mich herzlich bei Ihnen für diese Chance bedanken und meine Begeisterung für eine Zusammenarbeit in Ihrem Unternehmen zum Ausdruck bringen.
Sie können meine persönliche Website unter https://www.amirabedini.net besuchen. Das Online-Projekt, an dem ich gearbeitet habe, finden Sie unter https://amirabedini.net/Baebeca_test/
Vielen Dank und ich freue mich auf eine positive Rückmeldung.




Testprojekt für das Unternehmen Baebeca Solution GmbH 

Das Projekt basiert auf den gegebenen Aufgaben zur Gestaltung einer Login-Seite, einer Registrierungsseite und einer Datei mit PHP-Klassen. 

Dokumentation 

Benutzer wird zu Beginn der Ausführung des Projekts auf die Login-Seite geleitet und mit einem Anmeldeformular konfrontiert, das Eingabefelder für E-Mail und Passwort enthält. Auf dieser Seite wird eine gültige E-Mail und ein Passwort mit mindestens 6 Zeichen eingegeben. Diese Validierung wird sowohl mit JavaScript und jQuery Validator als auch mit PHP durchgeführt (falls JavaScript im Browser deaktiviert ist). Fehlermeldungen werden sowohl in einem Textfeld als auch in einer Nachricht, die durch die Sweet Alert-Klasse angezeigt wird, angezeigt.

Es ist erwähnenswert, dass gemäß den Anforderungen keine Verwendung von AJAX erfolgt, und die Daten werden an die gleiche Seite über POST gesendet, verarbeitet und zurückgegeben.

Falls der Benutzer noch keinen Account hat, muss er auf den Link "Hier registrieren" klicken und zur Registrierungsseite gelangen.

Auf der Registrierungsseite werden E-Mail, Passwort und Passwortbestätigung vom Benutzer erfasst. Die Validierung erfolgt sowohl mit JavaScript als auch mit PHP, und bei ungültigen Daten wird ein entsprechender Fehler auf derselben Seite angezeigt. Bei korrekten Angaben wird der Benutzer zur Index.php-Seite weitergeleitet.

Es sei erwähnt, dass der Zugriff auf die Index.php-Seite vor dem Einloggen nicht erlaubt ist und auch nach dem Einloggen der Zugriff auf die Login- und Registrierungsseiten nicht gestattet ist. Die Verwaltung dieses Teils erfolgt durch die Einstellung von Sitzungen (Sessions).

Auf der Startseite oder Index.php-Seite sieht der Benutzer Informationen über das Projekt und eine Schaltfläche "Abmelden". Durch Klicken auf diese Schaltfläche wird die entsprechende Funktion aufgerufen und der Benutzer wird abgemeldet, wobei die entsprechende Sitzung gelöscht wird.

Erklärung des Codes:

Im Hauptverzeichnis des Projekts befinden sich die folgenden Dateien:
1. Assets
2. Alertscript.php
3. Database.txt
4. Index.php
5. Login.php
6. Logout.php
7. Signup.php
8. Userauthentication.php

Erklärung der Dateien:

1. Assets: In diesem Ordner befinden sich die Hauptdateien des Projekts, einschließlich CSS, Schriftarten und Skripte.

2. Alertscript.php: Diese Klasse dient dazu, Servernachrichten dem Benutzer mithilfe von Sweet Alert anzuzeigen und enthält eine allgemeine Methode.

3. Database.txt: Wie in den Aufgaben angegeben, müssen die Benutzerinformationen in einer Textdatei gespeichert und bei Bedarf abgerufen werden. In dieser Datei werden die E-Mail-Adresse des Benutzers und sein Passwort mit der SHA256-Verschlüsselungsmethode gespeichert.

4. Index.php: Diese Datei ist die Hauptseite des Projekts und enthält Informationen und Links. Es gibt auch eine Schaltfläche, die es dem Benutzer ermöglicht, sich abzumelden. Am Anfang der Seite wird die Berechtigung des Benutzers für den Zugriff auf diese Seite überprüft. Wenn der Benutzer eingeloggt ist, kann er die Seite sehen, andernfalls wird er zur Login.php-Seite weitergeleitet. Es sei angemerkt, dass das Erstellen dieser Seite nicht in den Aufgaben enthalten war, aber ich habe sie hinzugefügt, um das Projekt effizienter zu gestalten.

5. Login.php: In dieser Datei wird zuerst die Berechtigung des Benutzers überprüft, indem die Informationen des Benutzers abgefragt werden. Wenn er angemeldet ist, kann er die Seite sehen, andernfalls wird er zur Index.php-Seite weitergeleitet. Die Formulardaten dieser Seite werden über die Methode POST an diese Seite gesendet und überprüft. Das Ergebnis wird an dieselbe Seite zurückgegeben, und mit den vorhandenen Methoden in der Klasse User wird die Berechtigung des Benutzers zum Zugriff auf die Startseite überprüft.

6. Logout.php: Diese Datei ist für das Ausloggen des Benutzers aus dem System vorgesehen. Das Erstellen dieser Seite war in den Aufgaben nicht vorgesehen, aber ich habe sie erstellt, um die Prinzipien der objektorientierten Programmierung (OOP) und die Effizienz des Programms zu berücksichtigen. In dieser Datei wird die entsprechende Sitzung gelöscht, und der Benutzer wird zur Login.php-Seite weitergeleitet.

7. Signup.php: In dieser Datei befindet sich das Formular zur Registrierung des Benutzers, das die E-Mail-Adresse, das Passwort und die Passwortbestätigung enthält. Bei Erfolg oder Misserfolg bei der Erstellung eines neuen Benutzers wird eine entsprechende Fehlermeldung zurückgegeben. Bei Misserfolg werden die eingegebenen Informationen in den Eingabefeldern in einem Cookie gespeichert und beim erneuten Laden der Seite angezeigt. Bei Erfolg werden die Informationen in der Datei Database.txt gespeichert, und der Benutzer wird zur Login-Seite weitergeleitet.

8. Userauthentication.php: Diese Datei enthält die Klasse User mit den folgenden Methoden:
- Private function validateEmail($email): Überprüfung der E-Mail-Adresse durch PHP.
- Private function validatePassword($password): Überprüfung des Passworts durch PHP.
- Private function checkUserExists($email): Überprüfung, ob der Benutzer bei der Registrierung bereits vorhanden ist (doppelter Benutzer).
- Private function hashPassword($password): Verschlüsselung des Benutzerpassworts.
- Public function signupUser($email, $password): Benutzerregistrierung; in

 dieser Methode werden die E-Mail-Adresse und das Passwort validiert. Bei Nichtvorhandensein der E-Mail wird das Passwort verschlüsselt und die Benutzerinformationen in Database.txt gespeichert. Das Ergebnis wird mit den festgelegten Werten zurückgegeben.
- Public function checkLogin($email, $password): Überprüfung der Anmeldedaten; zuerst wird die E-Mail-Adresse und das Passwort des Benutzers validiert und bei korrekten Angaben wird überprüft, ob die Informationen mit einem der Benutzer in der Datenbank übereinstimmen. Bei Übereinstimmung wird die Berechtigung zum Einloggen zurückgegeben.
- Public function logout(): Benutzerausloggen; es löscht die 'loggedin'-Sitzung.

Die bereitgestellten Erklärungen sollten verständlich sein und Ihnen bei der Zufriedenheit behilflich sein.

Mit freundlichen Grüßen,
Amir Abedini





Hallo und herzliche Grüße,

Mit Stolz und Respekt möchte ich mein Interesse an der Zusammenarbeit mit dem Team von Baebeca Solutions GmbH bekunden. Die Gelegenheit, an Ihrem einfachen Testprojekt zu arbeiten, war für mich äußerst wertvoll und angenehm. Ich habe mein Bestes gegeben, um alle Details sorgfältig zu berücksichtigen und den Code auf bestmögliche Weise zu entwickeln.
Ich möchte mich herzlich bei Ihnen für diese Chance bedanken und meine Begeisterung für eine Zusammenarbeit in Ihrem Unternehmen zum Ausdruck bringen.
Sie können meine persönliche Website unter https://www.amirabedini.net besuchen. Das Online-Projekt, an dem ich gearbeitet habe, finden Sie unter https://amirabedini.net/Baebeca_test/
Vielen Dank und ich freue mich auf eine positive Rückmeldung.




Testprojekt für das Unternehmen Baebeca Solution GmbH 

Das Projekt basiert auf den gegebenen Aufgaben zur Gestaltung einer Login-Seite, einer Registrierungsseite und einer Datei mit PHP-Klassen. 

Dokumentation 

Benutzer wird zu Beginn der Ausführung des Projekts auf die Login-Seite geleitet und mit einem Anmeldeformular konfrontiert, das Eingabefelder für E-Mail und Passwort enthält. Auf dieser Seite wird eine gültige E-Mail und ein Passwort mit mindestens 6 Zeichen eingegeben. Diese Validierung wird sowohl mit JavaScript und jQuery Validator als auch mit PHP durchgeführt (falls JavaScript im Browser deaktiviert ist). Fehlermeldungen werden sowohl in einem Textfeld als auch in einer Nachricht, die durch die Sweet Alert-Klasse angezeigt wird, angezeigt.

Die Daten werden an die gleiche Seite über POST gesendet, verarbeitet und zurückgegeben.

Falls der Benutzer noch keinen Account hat, muss er auf den Link "Hier registrieren" klicken und zur Registrierungsseite gelangen.

Auf der Registrierungsseite werden E-Mail, Passwort und Passwortbestätigung vom Benutzer erfasst. Die Validierung erfolgt sowohl mit JavaScript als auch mit PHP, und bei ungültigen Daten wird ein entsprechender Fehler auf derselben Seite angezeigt. Bei korrekten Angaben wird der Benutzer zur Index.php-Seite weitergeleitet.

Es sei erwähnt, dass der Zugriff auf die Index.php-Seite vor dem Einloggen nicht erlaubt ist und auch nach dem Einloggen der Zugriff auf die Login- und Registrierungsseiten nicht gestattet ist. Die Verwaltung dieses Teils erfolgt durch die Einstellung von Sitzungen (Sessions).

Auf der Startseite oder Index.php-Seite sieht der Benutzer Informationen über das Projekt und eine Schaltfläche "Abmelden". Durch Klicken auf diese Schaltfläche wird die entsprechende Funktion aufgerufen und der Benutzer wird abgemeldet, wobei die entsprechende Sitzung gelöscht wird.

Erklärung des Codes:

Im Hauptverzeichnis des Projekts befinden sich die folgenden Dateien:
1. Assets
2. classes/
      - Alertscript.php
      - Userauthentication.php
3. Database.txt
4. Index.php
5. Login.php
6. Logout.php
7. Signup.php

Erklärung der Dateien:

1. Assets: In diesem Ordner befinden sich die Hauptdateien des Projekts, einschließlich CSS, Schriftarten und Skripte.

2. classes/Alertscript.php: Diese Klasse dient dazu, Servernachrichten dem Benutzer mithilfe von Sweet Alert anzuzeigen und enthält eine allgemeine Methode.

3. classes/Userauthentication.php: Diese Datei enthält die Klasse User mit den folgenden Methoden:
   - Private function validateEmail($email): Überprüfung der E-Mail-Adresse durch PHP.
   - Private function validatePassword($password): Überprüfung des Passworts durch PHP.
   - Private function checkUserExists($email): Überprüfung, ob der Benutzer bei der Registrierung bereits vorhanden ist (doppelter Benutzer).
   - Private function hashPassword($password): Verschlüsselung des Benutzerpassworts.
   - Public function signupUser($email, $password): Benutzerregistrierung; in dieser Methode werden die E-Mail-Adresse und das Passwort validiert. Bei Nichtvorhandensein der E-Mail wird das Passwort verschlüsselt und die Benutzerinformationen in Database.txt gespeichert. Das Ergebnis wird mit den festgelegten Werten zurückgegeben.
   - Public function checkLogin($email, $password): Überprüfung der Anmeldedaten; zuerst wird die E-Mail-Adresse und das Passwort des Benutzers validiert und bei korrekten Angaben wird überprüft, ob die Informationen mit einem der Benutzer in der Datenbank übereinstimmen. Bei Übereinstimmung wird die Berechtigung zum Einloggen zurückgegeben.
   - Public function logout(): Benutzerausloggen; es löscht die 'loggedin'-Sitzung.

4. Database.txt: Wie in den Aufgaben angegeben, müssen die Benutzerinformationen in einer Textdatei gespeichert und bei Bedarf abgerufen werden. In dieser Datei werden die E-Mail-Adresse des Benutzers und sein Passwort mit der SHA256-Verschlüsselungsmethode gespeichert.

5. Index.php: Diese Datei ist die Hauptseite des Projekts und enthält Informationen und Links. Es gibt auch eine Schaltfläche, die es dem Benutzer ermöglicht, sich abzumelden. Am Anfang der Seite wird die Berechtigung des Benutzers für den Zugriff auf diese Seite überprüft. Wenn der Benutzer eingeloggt ist, kann er die Seite sehen, andernfalls wird er zur Login.php-Seite weitergeleitet. Es sei angemerkt, dass das Erstellen dieser Seite nicht in den Aufgaben enthalten war, aber ich habe sie hinzugefügt, um das Projekt effizienter zu gestalten.

6. Login.php: In dieser Datei wird zuerst die Berechtigung des Benutzers überprüft, indem die Informationen des Benutzers abgefragt werden. Wenn er angemeldet ist, kann er die Seite sehen, andernfalls wird er zur Index.php-Seite weitergeleitet. Die Formulardaten dieser Seite werden über die Methode POST an diese Seite gesendet und überprüft. Das Ergebnis wird an dieselbe Seite zurückgegeben, und mit den vorhandenen Methoden in der Klasse User wird die Berechtigung des Benutzers zum Zugriff auf die Startseite überprüft.

7. Logout.php: Diese Datei ist für das Ausloggen des Benutzers aus dem System vorgesehen. Das Erstellen dieser Seite war in den Aufgaben nicht vorgesehen, aber ich habe sie erstellt, um die Prinzipien der objektorientierten Programmierung (OOP) und die Effizienz des Programms zu berücksichtigen. In dieser Datei wird die entsprechende Sitzung gelöscht, und der Benutzer wird zur Login.php-Seite weitergeleitet.

8. Signup.php: In dieser Datei befindet sich das Formular zur Registrierung des Benutzers, das die E-Mail-Adresse, das Passwort und die Passwortbestätigung enthält. Bei Erfolg oder Misserfolg bei der Erstellung eines neuen Benutzers wird eine entsprechende Fehlermeldung zurückgegeben. Bei Misserfolg werden die eingegebenen Informationen in den Eingabefeldern in einem Cookie gespeichert und beim erneuten Laden der Seite angezeigt. Bei Erfolg werden die Informationen in der Datei Database.txt gespeichert, und der Benutzer wird zur Login-Seite weitergeleitet.

Die bereitgestellten Erklärungen sollten verständlich sein und Ihnen bei der Zufriedenheit behilflich sein.

Mit freundlichen Grüßen,
Amir Abedini
