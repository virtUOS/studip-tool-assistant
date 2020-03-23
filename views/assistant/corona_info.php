<? if ($view === 'howto'): ?>
    <p>
        <?= _('Mit dem Stud.IP-Module "Informationen" können Sie in Ihrer Veranstaltung einen frei benannten Reiter neben "Teilnehmende", "Dateien" usw. einrichten und beliebig mit Informationen bestücken.') ?>
    </p>
    <p>
        <?= _('Damit können Sie Informationen, die für den Kurs organisatorisch oder inhaltlich wichtig sind, gut sichtbar und prominent platzieren.') ?>
    </p>
    <p>
        <?= _('Für die Studierenden stellt sich im kommenden Semester für jeden Kurs die Frage: "Wie beginnt das Semester in diesem Kurs? Was muss ich tun, wo finde ich Informationen?" Mit einer einheitlich platzierten und nach vergleichbarem Muster strukturierten "Corona-Infoseite" erleichtern Sie Ihren Teilnehmenden die Orientierung.') ?>
    </p>
    <p>
        <?= _('Aktivieren Sie das Modul "Informationen" auf der "Mehr..."-Seite Ihres Kurses oder direkt mit dem Aktions-Knopf "Corona-Infoseite" einrichten.') ?>
    </p>
<? elseif ($view === 'tips'): ?>
    <p>
        <?= _('Sie können die Informationsseite auch für andere Informationen nutzen und sogar mehrere Unterrubriken anlegen.') ?>
    </p>
    <?= _('Typische und erprobte Verwendungsweisen sind z.B.:') ?>
    <ul>
        <li><?= _('Ablage einer zentralen und gut sichtbaren Literaturliste für den Kurs') ?></li>
        <li><?= _('Hinterlegung wichtiger Links, z.B. auf andere Plattformen, externe Materialien etc.') ?></li>
        <li><?= _('Angabe von Abgabefristen und Regelungen für Hausarbeiten in dem Kurs') ?></li>
    </ul>
<? endif ?>
