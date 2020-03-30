<? if ($view === 'example'): ?>
<h2><?= _('Online-Sitzungen und -Sprechstunden: Beispiel')?></h2>
    <p>
        <img src="<?= $plugin->getPluginURL() ?>/assets/bbb-raum.jpg">
        <br><span style="font-size:66%">Videokonferenz mit einem "BugBlueButton"-Server der Uni Osnabrück</span>
    </span>
    </p>
    <p>
    Sie verlegen geplante Meetings mit Ihren Projektteams oder regelmäßige Sitzungen Ihres Seminars
        in einen Online-Raum. Für Studierende können Sie z.B. Ihre Sprechstunden zu den geplanten Terminen online anbieten.
</p>

<? elseif ($view === 'howto'): ?>
    <h2>Online-Sitzungen und -Sprechstunden: So geht\'s</h2>
    <div style="float:right;">
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-menu-meetings.jpg" width="240">
        </p>
        <hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-meetings-raumname.jpg" width="240">
        </p>
        <hr>
    </div>
    <ol>
        <li><?= _('Legen Sie in Stud.IP eine Veranstaltung an, z.B. "Meetings Fachbereich" oder "Sprechstunde XY". Über den Menüpunkt "Mehr" aktivieren Sie das Plugin "Meetings".') ?></li>
        <li><?= _('Sie können verschiedene Online-Konferenz-Räume erstellen und frei benennen.')?></li>
        <li><?= _('Anschließend mit Klick auf den Meeting-Namen die Online-Konferenz starten. Der Konferenzraum öffnet sich in einem neuen Browser-Tab.
Sie werden aufgefordert, zu entscheiden, ob Sie Ihr Mikrophon aktiveren oder nur zuhören möchten.')?></li>
        <li><?= _('Im Online-Raum können Sie sich jederzeit stumm schalten und zusätzlich Ihre Kamera aktiveren.')?></li>
    </ol>
<p>&nbsp;</p>
    <p><b>Weitere Informationen zur Nutzung von BigBlueButton finden Sie unter <br>
            <a href="https://www.rz.uni-osnabrueck.de/homeoffice/bigbluebutton.html">https://www.rz.uni-osnabrueck.de/homeoffice/bigbluebutton.html</a></b></p>
    <p>
        <?= _('Hinweise:') ?>
        <ul>
            <li><?= _('Wichtig: Teilnehmende an den Meetings müssen in der entsprechenden Stud.IP-Veranstaltung eingetragen sein, also z.B. Teilnehmende der Veranstaltung "Meetings Fachbereich" sein.') ?><br>&nbsp;</li>
        </ul>
    </p>
<? elseif ($view === 'tips'): ?>
    <h2><?= _('Online-Sitzungen und -Sprechstunden: Tipps und Tricks')?></h2>
    <ul>
        <li><?= _('Für gute Audio-Qualität im Videokonferenz-Raum sollten Sie ein Headset verwenden.') ?><br>&nbsp;</li>
        <li><?= _('Während des Meetings empfiehlt es sich, nur das Mikro des/der jeweiligen Sprechers/Sprecherin offen zu lassen. Die übrigen Teilnehmenden sollten ihre Mikros stumm schalten, um Nebengeräusche zu vermeiden.') ?><br>&nbsp;</li>
        <li><?= _('Über die Videokonferenz können Sie Ihren Bildschirm allen Teilnehmenden sichtbar machen, z.B. für Präsentationen, gemeinsame Dokumente etc.') ?><br>&nbsp;</li>
    </ul>
    <p><b>Weitere Informationen zur Nutzung von BigBlueButton finden Sie unter <br>
            <a href="https://www.rz.uni-osnabrueck.de/homeoffice/bigbluebutton.html">https://www.rz.uni-osnabrueck.de/homeoffice/bigbluebutton.html</a></b></p>
<? endif ?>


