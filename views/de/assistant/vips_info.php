<? if ($view === 'example'): ?>
    <h2>Übungsblätter und Aufgaben mit Abgabefrist: Beispiel</h2>
    <div style="float:right;margin-left:10px;">
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-vips-beispiel1.jpg" width="240">
        </p>
        <hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-vips-example2.jpg" width="240">
        </p>
        <!--<hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-vips-beispiel3.jpg" width="240">
        </p>-->

    </div>
    <p>
        In der Vorlesung/Übung "Introduction to Artificial Intelligence" wurde Vips eingesetzt,
        um wöchentliche Übungsaufgaben in Gruppen von bis zu 3 Personen zu unterstützen. Vips leistet
        dabei:
    </p>
    <ol>
        <li>Aufgabenblätter können mit Start- und Enddatum erstellt werden.</li>
        <li>Sowohl Auswahl-Fragen (Multiple-Choice, Lückentexte etc.) als auch Freitext-Aufgaben oder Dateiabgaben sind möglich.</li>
        <li>Studierende können sich selbst zu Gruppen zusammenfinden oder eingeteilt werden. Auch Einzelabgaben sind möglich.</li>
        <li>Eindeutige Lösungen werden automatisch bewertet, Lehrende und Tutoren können immer auch manuell bewerten.</li>
        <li>Veröffentlichung der Ergebnisse ebenfalls über Vips.</li>
    </ol>

<? elseif ($view === 'howto'): ?>
    <h2>Übungsblätter und Aufgaben mit Abgabefrist: So geht's</h2>
    <div style="float:right;margin-left:10px;">
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-menu-vips.jpg" width="240">
        </p>
        <hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-vips-aktionen.jpg" width="240">
        </p>
    </div>
    <p>&nbsp;<br>
        Aktivieren Sie Vips nach dem Schließen des Dialogs über "Vips aktivieren". Dann wird Vips für Ihren Kurs
        eingeschaltet und ein Beispiel-Übungsblatt importiert, das Ihnen die wichtigsten Aufgabentypen nahebringt.
    </p>
<p>Grundlegende Aktionen in Vips sind:</p>
<ol>
    <li>Aufgaben und Selbsttests anlegen und verwalten ("Aufgabenblätter")</li>
    <li>Eingereichte Lösungen bewerten und Statistiken abrufen ("Ergebnisse")</li>
    <li>Übungsgruppen verwalten ("Übungsgruppen")</li>
</ol>
<p>
Weitere Informationen zur Vips-Nutzung finden Sie in der Onlinehilfe (Fragezeichen-Symbol rechts oben) oder direkt unter
    <a href="https://hilfe.studip.de/help/4.2/de/Vips/HomePage">https://hilfe.studip.de/help/4.2/de/Vips/HomePage</a>.
</p>

<? elseif ($view === 'tips'): ?>
    <h2>Übungsblätter und Aufgaben mit Abgabefrist: Tipps &amp; Tricks</h2>
    <ul>
        <li>Weniger ist mehr! Verwenden Sie <b>nicht zu viele verschiedene Aufgabenarten</b>, sondern beschränken Sie sich auf wenige,
        die Sie gut erläutern.<br>&nbsp;</li>
        <li>Bieten Sie ein <b>Probe-Aufgabenblatt</b> an, mit dem Sie und die Studierenden üben können.<br>&nbsp;</li>
        <li><b>Mehrfachabgaben</b> sind möglich, es zählt immer die letzte Abgabe einer Person/Gruppe.<br>&nbsp;</li>
        <li><b>Gruppenwechsel</b> sind ebenfalls möglich. Für abgelaufene Übungsblätter zählen für jede Person die Abgaben und
            Bewertungen der zum Endzeitpunkt gültigen Gruppe. Bei laufenden Aufgabenblättern nimmt eine Person ihre
            Abgaben mit.</li>
    </ul>
<? endif ?>
