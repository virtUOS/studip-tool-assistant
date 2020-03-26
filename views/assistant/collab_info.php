<? if ($view === 'example'): ?>
<h2><?= _('Gemeinsam an Texten arbeiten: Beispiele')?></h2>
<div style="float:right; margin-left:10px;">
    <p>
        <img src="<?= $plugin->getPluginURL() ?>/assets/studip-pad-list.jpg" width="240">
    </p>
    <p>
        <img src="<?= $plugin->getPluginURL() ?>/assets/studip-pad-example.jpg" width="240">
    </p>
</div>
<p>
    Im Seminar "Artificial Intelligence in Education" wurden zwei <b>kooperative Hausaufgaben</b> vergeben.
</p>
<p>
    Die Studierenden sollten
    1. einschlägige Journals und Konferenz-Proceedings durchschauen und in der wissenschaftlichen Diskussion <b>aktuelle Themen
        identifizieren</b> und 2. daraufhin gefundene <b>Review-Artikel kurz zusammenfassen</b>.
</p>
<p>
    Hierzu wurden zwei Pads für den Kurs eingerichtet und jeweils <b>zwischen zwei Präsenzsitzungen gefüllt</b>. Alle Studierenden konnten
    jederzeit sehen, wie weit die anderen sind, welche Themen noch offen sind und wo noch Bedarf besteht. Dabei wurden auch
    Zwischenstände protokolliert, etwa "Ich lese gerade an...".
</p>
<p>
    In beiden Fällen gab es mehr als 1.000 Editieroperationen, die über die <b>"Zeitleisten"-Funktion</b> auch im
    Nachhinein inkl. Namenszuordnung nachvollziehbar sind.
</p>
<p>
    Mit einem einzelnen Klick können jederzeit <b>Zwischenstände
    gesichert werden</b> und sind dann im Dateibereich der Veranstaltung zu finden.
</p>
<? elseif ($view === 'howto'): ?>
    <h2><?= _('Gemeinsam an Texten arbeiten: So geht\'s')?></h2>
    <div style="float:right;margin-left:10px;">
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-menu-pad.jpg" width="240">
        </p>
        <hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-pad-neu.png" width="240">
        </p>
        <hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-pad-settings.jpg" width="240">
        </p>
    </div>
    <p>
        Nach Aktivierung der Pad-Funktion auf "Pad einrichten" oder über die "Mehr.."-Seite können Sie beliebig viele
        Pads anlegen. Sie öffnen ein Pad durch Klick auf den Namen. Im Pad können beliebig viele Personen gleichzeitig
        schreiben (mit bis zu 100 Personen getestet).
    </p>
    <p>
        Durch Klick auf die drei Punkte rechts können Sie weitere Aktionen durchführen:
    </p>
    <ul>
        <li>Einstellungen: Hier (de)aktivieren Sie bei Bedarf Optionen wie Zeilennummern, Farbsteuerelemente etc.</li>
        <li>Aktuellen Inhalt sichern: Erzeugt eine PDF-Datei mit dem aktuellen Inhalt des Pads und legt Sie im Dateibereich des Kurses ab.</li>
        <li>Schreibschutz aktivieren: Friert den aktuellen Zustand ein, niemand kann mehr schreiben.</li>
        <li>Passwort festlegen: Zum Öffnen wird ein zusätzloiches Passwort benötigt (sinnvoll vor allem bei öffentlichen Pads, die per Link auch von außen zugänglich sind).</li>
        <li>Veröffentlichen: Das Pad auch außerhalb von Stud.IP per Link (wird dann angezeigt) zugänglich machen.</li>
        <li>Löschen: Löscht das Pad unwiderruflich.<br></li>
    </ul>

<? elseif ($view === 'tips'): ?>
    <h2><?= _('Gemeinsam an Texten arbeiten: Tipps und Tricks')?></h2>
    <ul>
        <li>Personen können im Pad rechts oben (Icon "Personengruppe") ihren Namen eingeben und eine Farbe auswählen. Damit kann jeder sehen, wer was bearbeitet hat.<br>&nbsp;</li>
        <li>Eine Versionshistorie (Uhr-Symbol im Menü oben) ermöglich es, Änderung in ihrer zeitlichen Abfolge nachzuvollziehen.<br>&nbsp;</li>
        <li>Es ist technisch nicht möglich, den initial eingegebenen Namen eines Pads zu ändern. Den Inhalt des Pads kopieren und in ein neues Pad übertragen<br>&nbsp;</li>
        <li>Die gleichzeitige Bearbeitung mit mehreren Personen funktioniert in der Regel sehr gut. Wenn aber mehrere
            Personen gleichzeitig widersprüchliche Änderungen an der gleichen Stelle des Textes machen, kann es wegen
            unterschiedlicher Geschwindigkeiten in der Netzanbindung zu unerwarteten Effekten kommen. Das tritt aber
            sehr selten auf und ist über die Zeitleiste im Detail nachvollziehbar.</li>
    </ul>
<? endif ?>
