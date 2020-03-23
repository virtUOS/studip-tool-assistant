<? if ($view === 'example'): ?>
    <?= _('Sie wollen Ihre Teilnehmenden per E-Mail und innerhalb von Stud.IP über wichtige Regelungen und kurzfristige Änderungen in Ihrem Kurs informieren.') ?>
<? elseif ($view === 'howto'): ?>
    <p>
        <?= _('Auf der Seite "Teilnehmende" können Sie mit einem Klick eine Nachricht an alle verfassen, die anschließend sowohl in Stud.IP als auch per E-Mail verschickt werden.') ?>
    </p>
    <img src="<?= $plugin->getPluginURL() ?>/assets/studip-tn-rundmail.jpg">
    <p>
        <?= _('Hinweise:') ?>
        <ul>
            <li><?= _('Die Nachrichten werden nicht sofort und auf einmal als E-Mail verschickt, es kann also einige Zeit dauern, bis alle Mails ausgeliefert wurden (bis zu 1 Stunde).') ?></li>
            <li><?= _('Die E-Mails werden an die Adresse geschickt, die die Personen selbst in Stud.IP hinterlegt haben. Standardmäßig ist das die Uni-E-Mail-Adresse.') ?></li>
            <li><?= _('Bedenken Sie, dass die Nachrichten für Personen nicht zugreifbar sind, die erst nach dem Versand in die Veranstaltung eingetragen werden. Hier bieten sich Ankündigungen an (s. Tipps und Tricks)') ?></li>
        </ul>
    </p>
<? elseif ($view === 'tips'): ?>
    <ul>
        <li><?= _('Über die Seite "Teilnehmende" können Sie auch Nachrichten an einzelner Personen oder Gruppen von Personen (alle Lehrenden, alle Tutor/-innen, nur Studierende) schicken. Dazu klicken Sie in der Teilnehmerliste rechts auf die Briefsymbole.') ?></li>
        <li><?= _('Unter "Übersicht" können Sie Ankündigungen erstellen, die für eine wählbare Zeit für alle Teilnehmenden sichtbar sind. Ankündigungen werden nicht per Mail verschickt, sind aber auch für später in den Kurs kommende zugreifbar. In wichtigen Fällen, bei denen noch mit Kursnachzügler/-innen zu rechnen ist, empfiehlt es sich, sowohl eine Rundmail als auch eine Ankündigung zu schreiben.') ?></li>
    </ul>
<? endif ?>
