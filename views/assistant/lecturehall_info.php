<? if ($view === 'example'): ?>
<h2><?= _('Aufzeichnungen im Hörsaal: Beispiele')?></h2>
    <div style="float:right;margin-left:10px;">
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/opencast-beispiel.jpg" width="240">
        </p>
        <hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/opencast-beispiel2.jpg" width="240">
        </p>
        <hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/opencast-beispiel3.jpg" width="240">
        </p>
    </div>
    <p>
        Automatisierte Vorlesungsaufzeichnungen werden an der Universität Osnabrück schon seit vielen Jahren
        in ca. 50 Vorlesungen pro Semester eingesetzt. Der Ablauf ist für Lehrende denkbar einfach:
    </p>
<ul>
    <li>Aufzeichnungswunsch anmelden</li>
    <li>Vorlesung mit Mikrofon und Beamerbild halten</li>
</ul>
<p>&nbsp;<br>
    Die Vorlesung wird im Hörsaal von einer fest installierten Kamera gefilmt, die auf das Vortragspult ausgerichtet ist.
    Nach der Vorlesung werden die Aufzeichnungen voll automatisiert verarbeitet und stehen kurz nach der Vorlesung
    über Stud.IP den Teilnehmenden zum Abruf zur Verfügung.
</p>
<p>
    Mit dem in Osnabrück mitentwickelten Vorlesungsaufzeichnungsssystem Opencast werden zwei Bildquellen aufgezeichnet:
    Das Kamerabild und das Beamerbild, das üblicherweise Präsentationsfolien zeigt. Folienwechsel werden automatisch
    erkannt und der Opencast-Player erlaubt einen schnellen Überblick über die Folien, kann wahlweise eines der beiden
    Bilder hervorheben und hat weitere für das Lernen optimierte Funktionen.
</p>
    <p>
        Auf Wunsch können die Aufzeichnungen auf öffentlich zugänglich gemacht werden.
    </p>
    <p>
        Beispielaufzeichnung von
        Prof. Dr. Thomas Groß: <a href="https://lernfunk.de/#/recordings/cb3370ac-13cd-46ac-bbae-291ec48c9808">https://lernfunk.de/#/recordings/cb3370ac-13cd-46ac-bbae-291ec48c9808</a>.
    </p>
<p>
    Aufzeichnungen sind in folgenden Räumen möglich:<br>
    Innenstadt: Schloßaula, 01/E01, 01/B01, 11/212, 11/213, 15/E07, 15/E10, 15/E16, 15/128, 22/B01, 41/112, 44/E03, 44/E04<br>
    Westerberg: 32/102, 32/110, 35/E01, 35/E16, 35/E25, 66/E33, 93/E07, 93/E31
</p>


<? elseif ($view === 'howto'): ?>
    <h2><?= _('Aufzeichnungen im Hörsaal: So geht\'s')?></h2>
    <p>
        Aufgrund der besonderen Situation während der Schließung bitten wir Sie um Kontaktaufnahme mit uns, wenn
        Sie Ihre Vorlesung im Hörsaal ohne Publikum aufzeichnen möchten.
    </p>
<p>
    Schreiben Sie dazu eine E-Mail an: <a href="mailto:virtuos@uni-osnabrueck.de">virtuos@uni-osnabrueck.de</a>.
</p>
<p>
    Aufzeichnungen sind auch kurzfristig möglich!
</p>
<? endif ?>
