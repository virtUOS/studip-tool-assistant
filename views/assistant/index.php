<section class="assistant-section">
    <h1>
        <?= _('Zum Einstieg') ?>
    </h1>

    <div class="accordion">
        <h1>
            <?= _('Teilnehmende benachrichtigen') ?>
        </h1>
        <div class="accordion_content">
            <?= Studip\LinkButton::create(_('Rundmail schreiben'),
                    URLHelper::getURL('dispatch.php/messages/write', [
                        'course_id'       => $course_id,
                        'default_subject' => sprintf('[%s]', Context::get()->Name),
                        'filter'          => 'all',
                        'emailrequest'    => 1
                    ]), ['data-dialog' => '']) ?>
            <ul>
                <li>
                    <a href="<?= $controller->link_for('assistant/mail_info/example') ?>" data-dialog="size=640x200"><?= _('Beispiel') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('assistant/mail_info/howto') ?>" data-dialog="size=640x600"><?= _('So geht\'s') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('assistant/mail_info/tips') ?>" data-dialog="size=640x400"><?= _('Tipps und Tricks') ?></a>
                </li>
            </ul>
        </div>

        <h1>
            <?= _('Materialien online bereitstellen') ?>
        </h1>
        <div class="accordion_content">
            <?= Studip\LinkButton::create(_('Datei hochladen'), '#', ['onclick' => "STUDIP.Files.openAddFilesWindow('$folder_id')"]) ?>
            <ul>
                <li>
                    <a href="<?= $controller->link_for('assistant/files_info/example') ?>"><?= _('Beispiel') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('assistant/files_info/howto') ?>"><?= _('So geht\'s') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('assistant/files_info/tips') ?>"><?= _('Tipps und Tricks') ?></a>
                </li>
            </ul>
        </div>

        <h1>
            <?= _('Corona-Infoseite einrichten') ?>
        </h1>
        <div class="accordion_content">
            <?= Studip\LinkButton::create(_('Corona-Infoseite einrichten'), $controller->url_for('assistant/corona')) ?>
            <ul>
                <li>
                    <a href="<?= $controller->link_for('assistant/corona_info/howto') ?>" data-dialog="size=640x600"><?= _('So geht\'s') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('assistant/corona_info/tips') ?>" data-dialog="size=640x400"><?= _('Tipps und Tricks') ?></a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="assistant-section">
    <h1>
        <?= _('Lehrmaterialien verwenden') ?>
    </h1>

    <div class="accordion">
        <h1>
            <?= _('OER-Portale zum Tauschen freier Materialien') ?>
        </h1>
        <div class="accordion_content">
            <?= Studip\LinkButton::create(_('Portal öffnen'), $controller->url_for('mail')) ?>
            <ul>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Beispiel') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('So geht\'s') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Tipps und Tricks') ?></a>
                </li>
            </ul>
        </div>

        <h1>
            <?= _('Materialien zusammenstellen') ?>
        </h1>
        <div class="accordion_content">
            <?= Studip\LinkButton::create(_('Kurs dafür einrichten'), $controller->url_for('mail')) ?>
            <ul>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Beispiel') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('So geht\'s') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Tipps und Tricks') ?></a>
                </li>
            </ul>
        </div>

        <h1>
            <?= _('Urheberrecht beachten') ?>
        </h1>
        <div class="accordion_content">
            <?= Studip\LinkButton::create(_('Informationen anzeigen'), $controller->url_for('mail')) ?>
            <ul>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Beispiel') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('So geht\'s') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Tipps und Tricks') ?></a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="assistant-section" style="clear: both;">
    <h1>
        <?= _('Online-Zusammenarbeit') ?>
    </h1>

    <div class="accordion">
        <h1>
            <?= _('Online-Sitzungen und Online-Sprechstunden') ?>
        </h1>
        <div class="accordion_content">
            <?= Studip\LinkButton::create(_('Kurs dafür einrichten'), $controller->url_for('mail')) ?>
            <ul>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Beispiel') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('So geht\'s') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Tipps und Tricks') ?></a>
                </li>
            </ul>
        </div>

        <h1>
            <?= _('Kontinuierliche Gruppenkommunikation') ?>
        </h1>
        <div class="accordion_content">
            <?= Studip\LinkButton::create(_('Messenger öffnen'), $controller->url_for('mail')) ?>
            <ul>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Beispiel') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('So geht\'s') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Tipps und Tricks') ?></a>
                </li>
            </ul>
        </div>

        <h1>
            <?= _('Gemeinsam an Texten arbeiten') ?>
        </h1>
        <div class="accordion_content">
            <?= Studip\LinkButton::create(_('Kurs dafür einrichten'), $controller->url_for('mail')) ?>
            <ul>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Beispiel') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('So geht\'s') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Tipps und Tricks') ?></a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="assistant-section">
    <h1>
        <?= _('Online-Vorträge') ?>
    </h1>

    <div class="accordion">
        <h1>
            <?= _('Aufzeichnungen im Hörsaal ohne Publikum') ?>
        </h1>
        <div class="accordion_content">
            <?= Studip\LinkButton::create(_('Kurs dafür einrichten'), $controller->url_for('mail')) ?>
            <ul>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Beispiel') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('So geht\'s') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Tipps und Tricks') ?></a>
                </li>
            </ul>
        </div>

        <h1>
            <?= _('Live-Übertragung') ?>
        </h1>
        <div class="accordion_content">
            <!-- <?= Studip\LinkButton::create(_('Kurs dafür einrichten'), $controller->url_for('mail')) ?> -->
            <ul>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Beispiel') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('So geht\'s') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Tipps und Tricks') ?></a>
                </li>
            </ul>
        </div>

        <h1>
            <?= _('Podcasts und Videos selbst aufzeichnen') ?>
        </h1>
        <div class="accordion_content">
            <?= Studip\LinkButton::create(_('Anleitung herunterladen'), $controller->url_for('mail')) ?>
            <ul>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Beispiel') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('So geht\'s') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Tipps und Tricks') ?></a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="assistant-section" style="clear: both;">
    <h1>
        <?= _('Aufgaben stellen') ?>
    </h1>

    <div class="accordion">
        <h1>
            <?= _('Einfache Abgaben: Hausaufgabenorder') ?>
        </h1>
        <div class="accordion_content">
            <?= Studip\LinkButton::create(_('Hausaufgabenorder einrichten'), $controller->url_for('mail')) ?>
            <ul>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Beispiel') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('So geht\'s') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Tipps und Tricks') ?></a>
                </li>
            </ul>
        </div>

        <h1>
            <?= _('Übungsblätter und Aufgaben mit Abgabefrist') ?>
        </h1>
        <div class="accordion_content">
            <?= Studip\LinkButton::create(_('Kurs dafür einrichten'), $controller->url_for('mail')) ?>
            <ul>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Beispiel') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('So geht\'s') ?></a>
                </li>
                <li>
                    <a href="<?= $controller->link_for('abc') ?>"><?= _('Tipps und Tricks') ?></a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="assistant-section">
    <h1>
        <?= Icon::create('question-circle', Icon::ROLE_INFO)->asImg(20, ['style' => 'vertical-align: text-bottom']) ?>
        <?= _('Fragen Sie uns...') ?>
    </h1>

    <p>
        <?= _('Wir haben hier nur die grundlegendsten Szenarien vorgestellt. Mit Stud.IP und anderen Diensten können Sie
               Ihre Lehre auf viele weitere Arten unterstützen. Sprechen Sie uns einfach an:') ?>
        <br><br>
        <a href="mailto:virtuos@uni-osnabrueck.de">virtuos@uni-osnabrueck.de</a><br>
        Tel. 0541/969-6666<br>
        <a href="https://www.virtuos.uni-osnabrueck.de/digitale_lehre/covid_19.html" class="link-extern" target="_blank"
            >https://www.virtuos.uni-osnabrueck.de/digitale_lehre/covid_19.html
        </a>
    </p>

    <?= Studip\LinkButton::create(_('Anfrage stellen'),
            URLHelper::getURL('dispatch.php/messages/write', ['rec_uname' => 'virtuos@studip']), ['data-dialog' => '']) ?>
</section>

<script>
    $('.accordion').accordion();
</script>
