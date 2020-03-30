<? if ($view === 'example'): ?>
<h2>Teilnehmende benachrichtigen: Beispiel</h2>
<p>
    Sie wollen Ihre Teilnehmenden per E-Mail und innerhalb von Stud.IP über wichtige Regelungen und kurzfristige Änderungen in Ihrem Kurs informieren.
</p>
<p>
    Typische Verwendungen sind:
</p>
<ul>
    <li>Sie möchten die Kursteilnehmenden vor Semesterstart darüber informieren, wie der Kurs ablaufen wird und wo weitere Informationen zu finden sind.</li>
    <li>Sie möchten über kurzfristige Änderungen informieren.</li>
    <li>Sie möchten sicherstellen, dass Diskussionsergebnisse, Klarstellungen und Hinweise alle Teilnehmenden erreichen.</li>
</ul>

<? elseif ($view === 'howto'): ?>
    <h2>Teilnehmende benachrichtigen: So geht's</h2>
    <div style="float:right;">
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-menu-teilnehmende.jpg" width="240">
        </p>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-tn-rundmail.jpg" width="240">
        </p>
    </div>
    <p>
        Auf der Seite "Teilnehmende" können Sie mit einem Klick eine Nachricht an alle verfassen, die anschließend sowohl in Stud.IP als auch per E-Mail verschickt werden.
    </p>
    <p>
        Hinweise:
        <ul>
            <li><b>Die Nachrichten werden nicht sofort als E-Mail verschickt</b>, sondern zur Entlastung der Mail-Server nach und nach ausgeliefert. Es kann biz zu einer Stunde dauern, bis alle Mails ausgeliefert wurden.<br>&nbsp;</li>
            <li>Die E-Mails werden <b>an die Adresse geschickt, die die Personen selbst in Stud.IP hinterlegt haben</b>. Standardmäßig ist das die Uni-E-Mail-Adresse.<br>&nbsp;</li>
            <li>E-Mail ist für viele Studierende <b>kein selbstverständliches Kommunikationsmedium mehr</b>. Weisen Sie Ihre Studierenden darauf hin, Ihre E-Mails regelmäßig abzurufen und rechnen Sie nicht unbedingt damit, dass E-Mails nach wenigen Stunden bereits von allen gelesen wurden.<br>&nbsp;</li>
            <li><b>Personen, die sich erst später in die Veranstaltung eingetragen, bekommen die Nachricht nicht</b>. Hier bieten sich Ankündigungen an (s. Tipps und Tricks)<br>&nbsp;</li>
        </ul>
    </p>
<? elseif ($view === 'tips'): ?>
    <h2>Teilnehmende benachrichtigen: Tipps und Tricks</h2>
    <ul>
        <li>Über die Seite "Teilnehmende" können Sie auch <b>Nachrichten an einzelne Personen oder Gruppen von Personen</b> (alle Lehrenden, alle Tutor/-innen, nur Studierende) schicken. Dazu klicken Sie in der Teilnehmerliste rechts auf die Briefsymbole.<br>&nbsp;</li>
        <li><b>Unter "Übersicht" können Sie Ankündigungen erstellen</b>, die für eine wählbare Zeit für alle Teilnehmenden sichtbar sind. Ankündigungen werden nicht per Mail verschickt, sind aber auch für später in den Kurs kommende zugreifbar. In wichtigen Fällen, bei denen noch mit Kursnachzügler/-innen zu rechnen ist, empfiehlt es sich, sowohl eine Rundmail als auch eine Ankündigung zu schreiben.<br>&nbsp;</li>
        <li>Im Unterpunkt "Gruppen" können Sie auf der Teilnehmenden-Seite <b>eigene Gruppen</b> frei zusammenstellen und diesen Gruppen auch Nachrichten senden.<br>&nbsp;</li>
        <li>In der Standardeinstellung können nur DozentInnen und TutorInnen der Veranstaltung Nachrichten an alle schicken. Sie können mit der Option <b>"Rundmails von Studierenden erlauben"</b> aber auch allen dieses Recht einräumen.</li>
    </ul>
<? endif ?>
