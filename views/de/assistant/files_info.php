<? if ($view === 'example'): ?>
    <h2>Dateien bereitstellen: Beispiel</h2>
    <p>
        Dateien bereitzustellen ist die meistgenutzte Funktion jedes Lernmanagementsystems, so auch bei Stud.IP: Über 50.000 Dateien werden an der Uni Osnabrück pro Semester in Lehrveranstaltungen hochgeladen und dann über 1,5 Mio. mal heruntergeladen..
    </p>
<p>
    <b>Typische Beispiele</b> für bereitgestellte Dateien sind:
</p>
<ul>
    <li><b>Präsentationsfolien</b> vor, nach oder anstelle von Vorlesungen oder Seminarsitzungen.</li>
    <li><b>Aufgabenzettel, Übungsaufgaben und Arbeitsblätter</b> samt zugehörigen Musterlösungen.</li>
    <li><b>Vorlesungsskripte</b>.</li>
    <li><b>Buchauszüge</b> (bis 15% eines Buches) und <a>Artikel aus wissenschaftlichen Zeitschriften</a> (s. "Urheberrecht beachten").</li>
    <li>Code-Beispiele und andere <b>fachbezogene Spezialdateien</b>.</li>
</ul>
<? elseif ($view === 'howto'): ?>
    <h2>Dateien bereitstellen: So geht's</h2>
    <div style="float:right;margin-left:10px;">
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-menu-dateien.jpg" width="240">
        </p>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-dateien.jpg" width="240">
        </p>
    </div>
    <p>
        Der Dateibereich ist in allen Lehrveranstaltungen schon eingeschaltet. Klicken Sie dort auf "Datei hinzufügen" oder ziehen Sie eine Datei mit der Maus auf den "Drag&Drop"-Bereich.
    </p>
    <p>
        Hinweise:
        <ul>
            <li><b>Auch Studierende können Dateien hochladen</b>. Es ist immer erkennbar, wer eine Datei hochgeladen hat, und die verwendete IP-Adresse wird gespeichert.</li>
            <li><b>Verlinken statt hochladen:</b> Dateien können nicht nur hochgeladen, sondern aus dem Internet oder anderen Veranstaltungen verlinkt werden. Dazu können Sie im zweiten Schritt die Quelle auswählen.</li>
        <li><b>Benutzen Sie Ordner</b>, um die Dateien in Ihrer Veranstaltung zu organisieren. Ordner können auch für unterschiedliche Rechteeinstellungen verwendet werden, z.B. als Materialordner, in den Studierende nichts hochladen können.</li>
        </ul>
    </p>
<? elseif ($view === 'tips'): ?>
    <h2>Dateien bereitstellen: Tipps und Tricks</h2>
    <ul>
        <li>Stellen Sie Dateien <b>möglichst als PDF-Dateien</b> statt im Powerpoint- oder Word-Format bereit, damit alle Studierenden die Datei einfach öffnen können.</li>
        <li><b>Große Dateien können verlinkt werden</b>, wenn sie bereits im Internet verfügbar sind - die Größenbeschränkung für den Upload gilt dort nicht.</li>
        <li><b>Machen Sie deutlich, was Sie von den Studierenden erwarten</b>. Ist eine Datei optionales Zusatzmaterial oder betrifft sie zentrale Inhalte der Veranstaltung? Nutzen Sie Ordner, sinnvolle Dateinamen und Dateibeschreibungen. </li>
    </ul>
<? endif ?>
