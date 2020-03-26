<? if ($view === 'example'): ?>
    <h2><?= _('OER-Portal zum Tauschen freier Materialien: Beispiele')?></h2>
    <p>
        <?= _('Das Rad muss nicht immer neu erfunden werden, es gibt bereits sehr viele Materialien, die Sie im Rahmen Ihrer Lehre einsetzen können. Der Begriff "OER" bezieht sich dabei auf die Lizenz, d.h. die rechtssichere Nutzung und vor allem auch Veränderung und Weitergabe von Lehrmaterialien.') ?>
    </p>
<p>
    <?= _('Links und Portale:') ?>
</p>
<table class="default">
    <tr>
        <th>Portal</th>
        <th>URL</th>
        <th>Erklärung</th>
    </tr>
    <tr>
        <td>Creative Commons</td>
        <td><a href="https://search.creativecommons.org">https://search.creativecommons.org</a></td>
        <td><?= _('Meta-Suche für freie Materialien aller Art (auch Bilder)') ?></td>
    </tr>
    <tr>
        <td>OER-Hörnchen</td>
        <td><a href="https://oerhoernchen.de">https://oerhoernchen.de</a></td>
        <td><?= _('Meta-Suche für freie OER-Materialien mit deutschem Fokus') ?></td>
    </tr>
    <tr>
        <td>OER-Hörnchen: Hochschulsuche</td>
        <td><a href="https://beta2.oerhoernchen.de/hochschule">https://beta2.oerhoernchen.de/hochschule</a></td>
        <td><?= _('Speziell für Hochschulen: Meta-Suche für freie OER-Materialien mit deutschem Fokus') ?></td>
    </tr>
    <tr>
        <td>OER-Commons</td>
        <td><a href="https://www.oercommons.org">https://www.oercommons.org</a></td>
        <td><?= _('Die größte internationale OER-Sammlung.') ?></td>
    </tr>
    <tr>
        <td>OER-Commons: Textbook Hub</td>
        <td><a href="https://www.oercommons.org/hubs/open-textbooks">https://www.oercommons.org/hubs/open-textbooks</a></td>
        <td><?= _('Besonders empfehlenswert: Lehrbuchsammlung und weitere Hochschul-Links.') ?></td>
    </tr>
    <tr>
        <td>OERinform</td>
        <td><a href="https://oer.amh-ev.de">https://oer.amh-ev.de</a></td>
        <td><?= _('OER-Informationen der Arbeitsgemeinschaft der Medieneinrichtungen an Hochschulen.') ?></td>

    </tr>
    <tr>
        <td>Youtube</td>
        <td><a href="https://www.youtube.com">https://www.youtube.com</a></td>
        <td><?= _('Auch bei Youtube finden Sie zahlreiche sehr gute akademische Videos. Beim Einbinden z.B. im Courseware-Modul müssen Sie nichts weiter beachten, wenn Sie aber ein Video bearbeiten wollen, müssen Sie bei Youtube-Videos auf die "Creative-Commons"-Lizenz achten.') ?></td>
    </tr>
</table>

<? elseif ($view === 'howto'): ?>
    <h2><?= _('OER-Portal zum Tauschen freier Materialien: Erklärfilm')?></h2>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/dpjrmx513wk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<? endif ?>
