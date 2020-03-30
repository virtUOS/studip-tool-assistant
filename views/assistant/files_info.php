<? if ($view === 'example'): ?>
    <h2><?= _('Dateien bereitstellen: Beispiel')?></h2>
    <p>
        <?= _('Dateien bereitzustellen ist die meistgenutzte Funktion jedes Lernmanagementsystems, so auch bei Stud.IP: Über 50.000 Dateien werden an der Uni Osnabrück pro Semester in Lehrveranstaltungen hochgeladen und dann über 1,5 Mio. mal heruntergeladen..') ?>
    </p>
<p>
    <?= _('Typische Beispiele für bereitgestellte Dateien sind:') ?>
</p>
<ul>
    <li><?= _('Präsentationsfolien vor, nach oder anstelle von Vorlesungen oder Seminarsitzungen.') ?></li>
    <li><?= _('Aufgabenzettel, Übungsaufgaben und Arbeitsblätter samt zugehörigen Musterlösungen.') ?></li>
    <li><?= _('Vorlesungsskripte.') ?></li>
    <li><?= _('Buchauszüge (bis 12% eines Buches) und Artikel aus wissenschaftlichen Zeitschriften (s. "Urheberrecht beachten").') ?></li>
    <li><?= _('Code-Beispiele und andere fachbezogene Spezialdateien.') ?></li>
</ul>
<? elseif ($view === 'howto'): ?>
    <h2><?= _('Dateien bereitstellen: So geht\'s')?></h2>
    <div style="float:right;">
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-menu-dateien.jpg" width="240">
        </p>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-dateien.jpg" width="240">
        </p>
    </div>
    <p>
        <?= _('Der Dateibereich ist in allen Lehrveranstaltungen schon eingeschaltet. Klicken Sie dort auf "Datei hinzufügen" oder ziehen Sie eine Datei mit der Maus auf den "Drag&Drop"-Bereich.') ?>
    </p>
    <p>
        <?= _('Hinweise:') ?>
        <ul>
            <li><?= _('Auch Studierende können Dateien hochladen. Es ist immer erkennbar, wer eine Datei hochgeladen hat und die verwendete IP-Adresse wird gespeichert.') ?></li>
            <li><?= _('Dateien können nicht nur hochgeladen, sondern aus dem Internet oder anderen Veranstaltungen verlinkt werden. Dazu können Sie im zweiten Schritt die Quelle auswählen') ?></li>
            <li><?= _('Benutzen Sie Ordner, um die Dateien in Ihrer Veranstaltung zu organisieren. Ordner können auch für unterschiedliche Rechteeinstellungen verwendet werden, z.B. als Materialordner, in dem Studierende nichts hochladen können.') ?></li>
        </ul>
    </p>
<? elseif ($view === 'tips'): ?>
    <h2><?= _('Dateien bereitstellen: Tipps und Tricks')?></h2>
    <ul>
        <li><?= _('Stellen Sie Dateien <b>möglichst als PDF-Dateien</b> statt im Powerpoint- oder Word-Format bereit, damit alle Studierenden die Datei einfach öffnen können.') ?></li>
        <li><?= _('<b>Große Dateien können verlinkt werden</b>, wenn sie bereits im Internet verfügbar sind - die Größenbeschränkung für den Upload gilt dort nicht.') ?></li>
        <li><?= _('<b>Machen Sie deutlich, was Sie von den Studierenden erwarten</b>. Ist eine Datei optionales Zusatzmaterial oder betrifft sie zentrale Inhalte der Veranstaltung? Nutzen Sie Ordner, sinnvolle Dateinamen und Dateibeschreibungen.') ?> </li>
    </ul>
<? endif ?>
