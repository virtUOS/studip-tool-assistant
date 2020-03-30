<? if ($view === 'example'): ?>
    <h2>Materialien zusammenstellen: Beispiel')?></h2>
<div style="float:right">
    <iframe title="YouTube video player" class="youtube-player" type="text/html" width="320" height="193" src="https://www.youtube.com/embed/boHfHrAv0OI" frameborder="2" allowFullScreen></iframe>
</div>
<p>
    Bei der Informatik-Vorlesung "Web-Technologien" von Tobias Thelen gibt es keine Präsenz-Vorlesung mehr, alle Inhalte werden über Stud.IP als "Courseware"-Modul ausgeliefert.')?>
</p>
<p>
    Hier können Videos, Bilder, Texte, Aufgaben und Diskussionsmöglichkeiten in einer Kapitelstruktur präsentiert und bearbeitet werden.') ?>
</p>
<? elseif ($view === 'howto'): ?>
    <h2>Materialien zusammenstellen: So geht\'s')?></h2>
<div style="float:right;margin-left:10px;">
    <p>
        <img src="<?= $plugin->getPluginURL() ?>/assets/studip-mehr.jpg" width="240">
    </p>
    <hr>
    <p>
        <img src="<?= $plugin->getPluginURL() ?>/assets/studip-courseware-aktivieren.jpg" width="240">
    </p>
    <hr>
    <p>
        <img src="<?= $plugin->getPluginURL() ?>/assets/studip-menu-courseware.jpg" width="240">
    </p>
    <hr>
    <p>
        <img src="<?= $plugin->getPluginURL() ?>/assets/studip-courseware-bearbeiten.jpg" width="240">
    </p>
</div>
<p>
    Das Courseware-Modul können Sie über den Knopf "Kurs dafür einrichten" aktivieren, nachdem Sie diesen Dialog geschlossen haben. Dann wird auch ein Beispielmodul importiert, das Ihnen weitere Beispiele und Anleitungen liefert.')?>
</p>
<p>
    Die Aktivierung ist aber auch über "Mehr..." -> "Courseware" möglich. Rufen Sie danach den neuen Reiter auf und aktivieren Sie den Bearbeitungsmodus.')?>
</p>
<p>
    Weitere Informationen bekommen Sie in der Online-Hilfe (Fragezeichen oben rechts oder direkt unter <a href="https://hilfe.studip.de/help/4.2/de/MoocIP.Courseware">https://hilfe.studip.de/help/4.2/de/MoocIP.Courseware</a>).')?>
</p>
<? elseif ($view === 'explain'): ?>
    <h2>Materialien zusammenstellen: Erklärvideo Courseware & Vips')?></h2>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/Vct7UnGQ1GI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<? endif ?>
