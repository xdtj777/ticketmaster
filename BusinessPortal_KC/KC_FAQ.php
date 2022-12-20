<?php
include "dbase/KCAuth.php";
?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="KC_style.css">
    <title>BusinessPortal</title>
</head>

<body>
    <div id="headerbar">
        <div id="headerwrap">
            <a id="headertitle" href="KC_Landing.php">Business<span>Portal</span></a>
            <div id="usericon" onclick="logout()">
                <img id="usericonimg" src="">
            </div>
        </div>
    </div>

    <div id="faqwrap">
        <div id="faqw">
            <h1>Mein Konto / FAQ</h1>

            <div id="faq">
                <p>Herzlich Willkommen im FAQ-Portal, der ersten Anlaufstelle bei Fragen & Probleme rund um die IT. Durch das Nutzen dieses Portals können Sie im Falle eines PC-Problems oder einer Frage wertvolle Zeit & Kosten sparen und den IT-Support wirkungsvoll entlasten.</p>
                <p>Sollten Sie für Ihr Anliegen bzw. Problem hier keine Lösung finden, kontaktieren Sie gerne den IT-Support, damit sich einer unserer Spezialisten dem Problem annehmen kann.</p>

                <p>NEU! Seit kurzem können Sie uns nicht nur telefonisch oder per E-Mail erreichen, sondern auch ein Support-Ticket in unserem Portal einstellen. So kann sich unser IT-Kundendienst gezielt auf Ihre Problematik vorbereiten und Ihnen eine noch bessere Support-Erfahrung bieten.
                    <br>Zum Erstellen eines Tickets hier klicken!
                </p>

                <div id="faqlist">
                    <div class="faqitem">
                        <a href="">1. „Ich starte meinen PC, aber der Bildschirm bleibt schwarz!“</a>
                        <uL>
                            <li>
                                <p>Prüfen Sie zunächst, ob der PC wirklich gestartet ist und ein Bild liefern sollte. Dazu können Sie kontrollieren, ob der Power-Button leuchtet. Außerdem sollte ein Lüfter-Geräusch aus dem PC-inneren zu vernehmen sein. </p>
                            </li>
                            <li>
                                <p>Wenn der PC definitiv läuft, prüfen Sie die Verkabelung vom PC zum Monitor. Stecken die Kabel fest und korrekt? Trennen Sie die Kabel gegebenenfalls und verbinden Sie sie neu. Auch das Trennen des Bildschirms vom Strom kann helfen.</p>
                            </li>
                            <li>
                                <p>Wenn die Verkabelung stimmt, prüfen Sie, ob der Bildschirm selbst noch startet. Es muss außerdem sichergestellt werden, dass die richtige Eingabequelle im Menü des Bildschirms ausgewählt ist (z.B. HDMI).</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faqitem">
                        <a href="">2. „Mein PC ist viel langsamer als sonst!“</a>
                        <uL>
                            <li>
                                <p>Wenn die Performance des Computers nicht mehr zufriedenstellend ist, kann das sowohl an der Hardware selbst, als auch an der Software (z.B. Betriebssystem oder Programme) liegen. Prüfen Sie zunächst im „Task-Manager“ (Rechtsklick auf die Taskleiste, dann Task-Manager wählen) unter dem Reiter „Leistung“, ob eine der dort aufgelisteten PC-Komponenten stark ausgelastet ist. Falls ja, könnte diese Komponente die Ursache sein und sollte ggfs. ausgetauscht bzw. erweitert werden.</p>
                            </li>
                            <li>
                                <p>Ist die Auslastung jedoch unauffällig, könnte auch das Betriebssystem oder ein bestimmtes Programm den PC bremsen. Prüfen Sie, ob es Programme gibt, die Sie nicht mehr benötigen. Oder gibt es Programme, die nicht für Ihren Computer geeignet sind? Hier kann ggfs. aufgeräumt werden.</p>
                            </li>
                            <li>
                                <p>Sie können auch Altlasten und temporäre Dateien entfernen, um den PC zu beschleunigen. Starten Sie hierfür das Windows-Tool „Datenträgerbereinigung“ und entfernen Sie Dateien, die Sie nicht mehr benötigen.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faqitem">
                        <a href="">3. „Mein Computer zeigt mir nur einen blauen Bildschirm mit einem Fehlercode an!“</a>
                        <uL>
                            <li>
                                <p>Wenn Sie einen blauen Bildschirm (bekannt als BSOD, Bluescreen of Death) angezeigt bekommen, ist der Fehlercode, den Sie weiter unten angezeigt bekommen sehr relevant. Dieser gibt zumindest eine erste Richtung an, welches Problem am PC vorliegt.</p>
                            </li>
                            <li>
                                <p>Nachdem Sie sich den Fehlercode notiert haben kann es nicht schaden, den PC einmal neu zu starten. Manche Fehler treten nur einmalig auf und der PC ist nach dem Neustart bereits wieder betriebsklar.</p>
                            </li>
                            <li>
                                <p>Andernfalls können Sie anhand des Codes Recherche betreiben. Wurde vielleicht ein fehlerhaftes Update installiert, welches nur wieder deinstalliert werden muss? Oder hat sich etwas Gravierendes am System verändert? Kontaktieren Sie ggfs. mit diesen Infos den Support.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faqitem">
                        <a href="">4. „Mein Speicherplatz wird mir zu knapp!“</a>
                        <uL>
                            <li>
                                <p>Wenn der Speicher nicht mehr ausreicht, gibt es zwei Möglichkeiten, dem entgegenzuwirken.</p>
                            </li>
                            <li>
                                <p>Erweitern Sie die Speicherkapazität durch das Austauschen bzw. Hinzufügen größerer Festplatten. Sofern noch Anschlüsse am Mainboard des PCs vorhanden sind, kann hier problemlos erweitert werden. Wir empfehlen, bei einem gesamten Festplattentausch eine „SSD“ zu verwenden. Die Lese- und Schreibraten sind hier um ein Vielfaches höher und das System wird auch in der Bedienung deutlich komfortabler sein.
                                    Wenn Sie jedoch nur ein weiteres Laufwerk als z.B. „Datengrab“ hinzufügen möchten, kann hier auch ohne Probleme eine HDD eingesetzt werden. </p>
                            </li>
                            <li>
                                <p>Außerdem können Sie versuchen, Speicherplatz freizugeben. Hierfür können sowohl alte Programme als auch Dateien & Dokumente gelöscht bzw. ausgelagert werden, wenn Sie diese nicht mehr benötigen.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faqitem">
                        <a href="">5. „Ich habe einen neuen Drucker, wie kann ich diesen einrichten?“</a>
                        <uL>
                            <li>
                                <p>Zu Beginn muss geklärt werden, ob der Drucker nur an einem, oder an mehreren PC/s angebunden werden muss. Wenn der Drucker nur an einem Computer eingerichtet sein muss, kann er hier einfach lokal (z.B. via USB) verbunden und der entsprechende Treiber vom Hersteller installiert werden. </p>
                            </li>
                            <li>
                                <p>Wenn er jedoch von mehreren Computern aus ansteuerbar sein muss, empfiehlt sich hier die Einrichtung an einer zentralen Netzwerkkomponente (z.B. Server). Kontaktieren Sie hierzu am besten den Support.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faqitem">
                        <a href="">6. „Wie kann ich mein Windows-Passwort für die Anmeldung ändern?“</a>
                        <uL>
                            <li>
                                <p>Drücken Sie die Tastenkombination „STRG+ALT+ENTF“ und wählen Sie „Kennwort ändern“. Geben Sie nun zunächst einmal das bisherige Kennwort ein, und dann zweimal das neue gewünschte Kennwort. Bestätigen Sie mit Enter.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faqitem">
                        <a href="">7. „Ich habe noch Windows 7. Ist das wirklich so unsicher wie alle sagen?“</a>
                        <uL>
                            <li>
                                <p>Vor Allem in Unternehmensnetzwerken raten wir dringend von der Nutzung von Windows 7 ab. Da es bereits seit mehreren Jahren keine Sicherheitsupdates für das Betriebssystem mehr gibt, dürften Angreifer inzwischen ein leichtes Spiel haben, um einen Windows7-PC zu manipulieren. Hierbei können sowohl sensible Daten als auch weitere vernetzte PCs in Mitleidenschaft gezogen werden. </p>
                            </li>
                            <li>
                                <p>Wenn die Nutzung von Windows 7 wegen speziellen Programmen nicht vermeidbar ist, sollte zumindest der Datenverkehr ins Internet bestmöglich überwacht und abgesichert sein.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faqitem">
                        <a href="">8. „Ich kann meinen PC bedienen, aber ich habe kein Internet!“</a>
                        <uL>
                            <li>
                                <p>Bei LAN (also kabelgebundenen Verbindungen):</p>
                            </li>
                            <li>
                                <p>Prüfen Sie zunächst, ob das LAN-Kabel richtig eingesteckt ist. Blinken am PC hinten den entsprechenden Ioden? Kann mit einem anderen Computer im Internet gesurft werden, oder funktioniert auch hier der Zugang nicht? Kann nur nicht auf das Internet (WAN) zugegriffen werden, oder kann der PC auch nicht mit anderen Geräten im lokalen Netz (LAN) kommunizieren? Kontaktieren Sie ggfs. mit diesen Informationen den Support.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faqitem">
                        <a href="">9. „Ich erhalte Meldungen, dass ich Viren habe und sofort handeln muss!“</a>
                        <uL>
                            <li>
                                <p>Bei diesen Meldungen ist Vorsicht geboten, denn es kann sich auch um Fake-Meldungen, sog. „Scareware“ handeln. Bevor Sie die Meldung anklicken, stellen Sie sicher, dass sie wirklich vom Antivirenprogramm kommt, welches Sie installiert haben. Kommt Sie jedoch von einem Ihnen unbekannten Programm oder handelt es sich sogar um ein Pop-Up in Ihrem Browser, so klicken Sie die Meldung nicht an und bereinigen Sie ggfs. die Cache- und Zwischenspeicher.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faqitem">
                        <a href="">10. „Irgendwie kann ich bestimmte Webseiten einfach nicht aufrufen.“</a>
                        <uL>
                            <li>
                                <p>Es kann sein, dass auf Wunsch einer Führungsperson in Ihrem Hause bestimmte Seiten gesperrt werden. Besonders häufig werden hier Unterhaltungs- bzw. Entertainment-Angebote gesperrt, um die Arbeitsumgebung produktiv zu halten. Wenn Sie jedoch unbedingt Zugriff auf diese Seiten benötigen, klären Sie dies mit Ihrem Ansprechpartner oder ggfs. mit unserem Support.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

<style>

</style>

</html>