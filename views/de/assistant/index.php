<div class="assistant-container">
    <? if ($datafields['aee5626da96ab9c37976b2fc454d88b4'] && $datafields['a8af8d7ef4a67cc38d7ca6a21fe1bc73']): ?>
    <section class="assistant-section">
        <h1>
            Bevorzugte Veranstaltungsform wählen
        </h1>
        <form class="default assistant-form" action="<?= $controller->link_for('assistant/set_type') ?>" method="POST">
            <?= CSRFProtection::tokenTag() ?>
            <div class="assistant-infobox">
                <?= $datafields['aee5626da96ab9c37976b2fc454d88b4']->getHTML('df') ?>
                <?= $datafields['a8af8d7ef4a67cc38d7ca6a21fe1bc73']->getHTML('df') ?>
                <label>
                    Maximale Teilnehmendenzahl
                    <input type="number" name="admission_turnout" value="<?= $course->admission_turnout ?>" min="0">
                 </label>
            </div>
            <?= Studip\Button::createAccept(_vips('Speichern'), 'save') ?>
            <?= Studip\LinkButton::create(_('Entscheidungshilfe'),
                $controller->link_for('assistant/sem_format_info'), ['data-dialog' => "size=640x600;title='Entscheidungshilfe'"]) ?>
        </form>
    </section>

    <section class="assistant-section">
        <h1>
            Information zum Ablauf
        </h1>
        <div class="assistant-infobox assistant-procedure">
            <div class="course-type-info">
                <header>
                    In der Zeit vom 15.07.bis 15.08.2020
                </header>
                <ul>
                    <li>wählen Sie das bevorzugte Format </li>
                    <li>Geben Sie falls zutreffend eine hauptsächliche Kursbelegung z.B. durch Erstsemesterstudierende an
                    </li>
                    <li>Geben Sie die maximale Teilnehmendenzahl an (falls diese beschränkt ist) oder alternativ die von Ihnen erwartete Teilnehmendenzahl
                    </li>
                    <li>Bzgl. Raum und Terminwünschen verfahren Sie wie in vorherigen Präsenzsemestern</li>
                    <li>die Studiendekan*innen prüfen Anträge auf Präsenz und Plausibilität der maximalen Teilnehmendenzahl</li>
                    <li>Bei Fragen zum Ablauf wenden Sie sich bite an Ihr Fach</li>
                </ul>
                <header>
                    Die Raumzuweisungen durch das Dezernat 6 erfolgen bis zum 30.09.2020
                </header>
                Sie verfügen anschließend über folgende Informationen:
                <ul>
                    <li>Bewilligung oder Anpassung des von Ihnen gewünschten Veranstaltungsformats</li>
                    <li>Raumgröße d.h. Anzahl der möglichen Präsenzteilnehmenden</li>
                    <li>Raumausstattung </li>
                </ul>
                <header>
                    Weitere Schritte insbesondere im Falle einer Hybridveranstaltung
                </header>
                <ul>
                    <li>Nutzen Sie die vom virtUOS bereitgestellten Informationen und Unterstützungsangebote um
                    optimal vorbereitet zu sein</li>
                </ul>


            </div>
        </div>
    </section>
    <? endif ?>

    <section class="assistant-section">
        <h1>
            Online Lehre: Grundlagen
        </h1>

        <div class="accordion">
            <h1>
                Teilnehmende benachrichtigen
                (Stud.IP: Nachrichten)
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Rundmail schreiben'),
                    URLHelper::getURL('dispatch.php/messages/write', [
                        'course_id'       => $course_id,
                        'default_subject' => sprintf('[%s]', Context::get()->Name),
                        'filter'          => 'all',
                        'emailrequest'    => 1
                    ]), ['data-dialog' => '', 'data-action' => 'messages/write_all']) ?>
                <p>Über Stud.IP-Nachrichten können Sie allen eingetragenen Kurs-Teilnehmenden Informationen zukommen lassen.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/mail_info/example') ?>" data-dialog="size=640x400;title='Online-Lehre: Teilnehmende benachrichtigen'">Beispiel</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/mail_info/howto') ?>" data-dialog="size=640x600;title='Online-Lehre: Teilnehmende benachrichtigen'">So geht's</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/mail_info/tips') ?>" data-dialog="size=640x600;title='Online-Lehre: Teilnehmende benachrichtigen'">Tipps und Tricks</a>
                    </li>
                </ul>
            </div>

            <h1>
                Materialien online bereitstellen
                (Stud.IP: Dateien)
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Datei hochladen'), '#', ['onclick' => "STUDIP.Files.openAddFilesWindow('$folder_id')", 'data-action' => 'files/upload']) ?>
                <p> Im Stud.IP-Dateibereich können Dateien hochgeladen und verlinkt werden. Mit dem "Courseware"-Modul können Sie verschiedene Medien zusammenführen (s. "Materialien zusammenstellen"). </p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/files_info/example') ?>" data-dialog="size=640x400;title='Online-Lehre: Material onloine bereitstellen'">Beispiel</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/files_info/howto') ?>" data-dialog="size=640x600;title='Online-Lehre: Material onloine bereitstellen'">So geht's</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/files_info/tips') ?>" data-dialog="size=640x400;title='Online-Lehre: Material onloine bereitstellen'">Tipps und Tricks</a>
                    </li>
                </ul>
            </div>

            <h1>
                Corona-Infoseite einrichten
                (Stud.IP: Informationen)</em>
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Corona-Infoseite einrichten'), $controller->url_for('assistant/corona')) ?>
                <p>Informieren Sie Ihre Teilnehmenden gut sichtbar darüber, wie Ihr Kurs in das Semester startet.</p>
                <p>Wir haben eine Vorlage für das Stud.IP-Modul "Informationen" erstellt mit der Sie die wichtigsten Informationen und Fragen strukturiert hinterlegen können.</p>
                <!--<ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/corona_info/howto') ?>" data-dialog="size=640x600">So geht's') ?></a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/corona_info/tips') ?>" data-dialog="size=640x400">Tipps und Tricks') ?></a>
                    </li>
                </ul>-->
            </div>

            <h1>
                Gute Lehre ohne Präsenz!?</em>
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Hinweise zur Didaktik'), 'https://www.virtuos.uni-osnabrueck.de/hochschuldidaktik/gute_lehre_ohne_praesenz.html', ['target' => '_blank', 'data-action' => 'tips/gute_lehre']) ?>
                <p>Wir haben einige didaktische Hinweise und Anregungen zusammengetragen, damit Sie Ihre Lehre möglichst gut an die aktuellen Gegebenheiten anpassen
                    und den erhöhten Anforderungen an Selbstlernkompetenzen der Studierenden Rechnung tragen können. </p>

                <!--<ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/corona_info/howto') ?>" data-dialog="size=640x600">So geht's') ?></a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/corona_info/tips') ?>" data-dialog="size=640x400">Tipps und Tricks') ?></a>
                    </li>
                </ul>-->
            </div>

        </div>
    </section>

    <section class="assistant-section">
        <h1>
            Hybrid-Lehre: Einstieg
        </h1>

        <div class="accordion">

            <h1>
                Herausforderungen der Hybriden Lehre
            </h1>
            <div class="accordion_content">
                <p>In der Hybriden Lehre werden Elemente der Online Lehre mit Elementen der Präsenzlehre kombiniert.
                    Je nach Szenarion geschieht dieses ggf. sogar zeitgleich.
                    Neben technischen Besonderheiten gibt es einige inhaltliche Faktoren zu beachten.
                    Wir haben Ihnen ein paar Tipps und Hinweise zusammengestellt, um Ihnen den Einstieg zu erleichtern:</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/hybrid_info/different_groups') ?>" data-dialog="size=640x400;title='Unterschiedliche Zuhörendengruppen'">Unterschiedliche Zuhörendengruppen einbeziehen</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/hybrid_info/attention') ?>" data-dialog="size=640x600;title='Aufnahmefähigkeit'">Reduzierte Aufnahmefähigkeit im digitalen Kanal beachten</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/hybrid_info/burden') ?>" data-dialog="size=640x600;title='Teilnehmende gleichmäßig belasten'">Präsenz- und Online-Teilnehmende gleichmäßig belasten</a>
                    </li>
                </ul>
            </div>


            <h1>
                Umsetzungsvarianten
            </h1>
            <div class="accordion_content">
                <p>Um die Tatsache, dass nicht alle Teilnehmenden gleichzeitig vor Ort anwesend sein können,
                    zu kompensieren, bieten sich verschiedene Varianten an:</p>
                <p><i>Hier folgen Hinweise zur Vorbereitung</i> </p>
                <!--
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/szenarien_info/live') ?>" data-dialog="size=640x400;title='Variante 1: Passive (Live-)Zuschaltung'">Variante 1: Passive (Live-)Zuschaltung</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/szenarien_info/interactive') ?>" data-dialog="size=640x600;title='Variante 2: Interaktive Live-Zuschaltung'">Variante 2: Interaktive Live-Zuschaltung</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/szenarien_info/asynchron') ?>" data-dialog="size=640x600;title='Variante 3: Rotierende Gruppen'">Variante 3: Rotierende Gruppen</a>
                    </li>
                </ul>
                -->
            </div>

            <h1>
                Vorbereitung
            </h1>
            <div class="accordion_content">
                <p><i>Hier folgen Hinweise zur Vorbereitung</i> </p>
                <!--
                <ul>
                    <li><a href="<?= $controller->link_for('assistant/hybrid_info/transport') ?>" data-dialog="size=640x600;title='Technik testen'">Technik testen</a></li>
                    <li><a href="<?= $controller->link_for('assistant/hybrid_info/transport') ?>" data-dialog="size=640x600;title='Gewähltes Szenario mit Test-TN üben'">Gewähltes Szenario mit Test-TN üben</a></li>
                    <li><a href="<?= $controller->link_for('assistant/hybrid_info/transport') ?>" data-dialog="size=640x600;title='Hybride Situation produktiv nutzen'"> Hybride Situation produktiv nutzen</a></li>
                </ul>
                -->

            </div>

        </div>
    </section>

    <section class="assistant-section">
        <h1>
            Online-Vorträge (z.B. für Vorlesungen)
        </h1>

        <div class="accordion">
            <h1>
                Aufzeichnungen im Hörsaal ohne Publikum
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Anfrage stellen'),
                    URLHelper::getURL('dispatch.php/messages/write',
                        ['rec_uname' => 'virtuos@studip',
                            'default_subject' => _('Anfrage Hörsaalaufzeichnung für '.Context::get()->Name),
                            'default_body' => _('Liebes virtUOS-Team,
ich möchte im Hörsaal aufzeichnen.

Mein Terminwunsch: (Datum/Wochentag, Uhrzeit, einmalig/regelmäßig)
Mein Hörsaalwunsch: (Raum oder Stadtbereich)

Veranstaltung: '.Context::get()->Name.' ('.$course_id.')

Telefonnummer für Rückfragen:

')]),
                    ['data-dialog' => '', 'data-action' => 'messages/write']) ?>
                <p>Die Hörsäle der Universität können für Vorlesungen ohne Publikum genutzt werden. Über 20 Räume sind
                    für vollautomatische Videoaufzeichnungen ausgerüstet, Sie müssen nur eine Zeit buchen.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/lecturehall_info/example') ?>" data-dialog="size=640x675">Beispiel</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/lecturehall_info/howto') ?>" data-dialog="size=640x650">So geht's</a>
                    </li>
                </ul>
            </div>

            <h1>
                Aufzeichnung im Studio
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Weitere Informationen'),
                    'https://www.virtuos.uni-osnabrueck.de/digitale_lehre/covid_19.html',
                    ["target"=>"_blank", 'data-action' => 'tips/covid']) ?>
                <p>
                    Die Universität Osnabrück betreibt zwei Videostudios in den Räumen 15/125 und 07/102 (LehrKolleg).
                    Hier können mit Unterstützung / Einweisung durch virtUOS-Mitarbeiter Videos in überdurchschnittlicher
                    Qualität produziert werden.
                </p>
                <ul>
                    <li><a href="<?= $controller->link_for('assistant/studio_info/selfrecording') ?>" data-dialog="size=640x500">Impressionen aus dem Self-Recording-Studio im Lehrkolleg</a></li>
                </ul>s

                <p>
                    Bitte kontaktieren Sie uns mit einer E-Mail an
                    <a href="mailto:virtuos@uni-osnabrueck.de">virtuos@uni-osnabrueck.de</a>.
                </p>
            </div>

            <h1>
                Podcasts und Videos selbst aufzeichnen
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Kurs dafür einrichten'), $controller->url_for('opencast_plugin')) ?>
                <p>Sie möchten Audio- und Video-Aufnahmen am eigenen Rechner erstellen und den Teilnehmenden
                    zur Verfügung stellen? Dafür gibt es verschiedene Werkzeuge:</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/recording_info/opencaststudio') ?>" data-dialog="size=640x600">Opencast Studio (Unsere Empfehlung!)</a>
                    </li>
                    <li>
                        <a href="https://lernfunk.de/#/recordings/4222b950-6107-4d4c-a3ed-00dd8d5fac6e" class="link-extern" target="_blank">Opencast-Studio: Anleitungsvideo</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/recording_info/powerpoint') ?>" data-dialog="size=640x500">Aufnahmen direkt in Powerpoint</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/recording_info/tips') ?>" data-dialog="size=640x500">Tipps und Tricks</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="assistant-section">
        <h1>
            Lehrmaterialien verwenden
        </h1>

        <div class="accordion">
            <h1>
                OER-Portale zum Tauschen freier Materialien
            </h1>
            <div class="accordion_content">
                <!--<?= Studip\LinkButton::create(_('OER-Portal Niedersachsen'), 'https://www.oernds.de', ['target'=>'_blank', 'data-action' => 'tips/oer']) ?>-->
                <p>Open Educational Ressources sind Materialien, die von Lehrenden frei zur Verfügung gestellt werden: frei zur Nutzung, aber auch zur Weiterbearbeitung.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/oer_info/example') ?>" data-dialog="size=850x630">Links und Portale</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/oer_info/howto') ?>" data-dialog="size=640x550">Erklärvideo (Youtube)</a>

                    </li>
                </ul>
            </div>

            <h1>
                Materialien zusammenstellen (Stud.IP: Courseware)
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Kurs dafür einrichten'), $controller->url_for('assistant/courseware')) ?>
                <p>Mit dem Stud.IP-Plugin "Courseware" können Sie vielfältige Quellen zusammenführen und interaktive multimediale Lernmodule erstellen.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/courseware_info/example') ?>" data-dialog="size=640x400">Beispiel</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/courseware_info/howto') ?>" data-dialog="size=640x550">So geht's</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/courseware_info/explain') ?>" data-dialog="size=640x520">Erklärvideo: Courseware und Vips</a>
                    </li>
                </ul>
            </div>

            <h1>
                Urheberrecht beachten
            </h1>
            <div class="accordion_content">
                <p>Bei der Online-Lehre spielen urheberrechtliche Fragen immer dann eine wichtige Rolle, wenn Sie Materialien verwenden, die Dritte erstellt haben.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/copyright_info/basics') ?>" data-dialog="size=640x650">Urheberrecht: Absolute Grundlagen</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/copyright_info/teaching') ?>" data-dialog="size=640x450">Was darf ich in der Lehre nutzen?</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="assistant-section" style="clear: both;">
        <h1>
            Online-Zusammenarbeit (z.B. für Seminare und Tutorien)
        </h1>

        <div class="accordion">
            <h1>
                Online-Sitzungen und Videokonferenzen
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Kurs dafür einrichten'), $controller->url_for('assistant/meetings')) ?>
                <p>Mit Videokonferenzen führen Sie online Team-Besprechungen und Seminar-Sitzungen durch und bieten Online-Sprechstunden für Studierende an.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/meeting_info/example') ?>" data-dialog="size=640x600">Beispiel</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/meeting_info/howto') ?>" data-dialog="size=640x650">So geht's</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/meeting_info/tips') ?>" data-dialog="size=640x500">Tipps und Tricks</a>
                    </li>
                </ul>
            </div>

            <h1>
                Kontinuierliche Gruppenkommunikation (Messenger)
            </h1>
            <div class="accordion_content">
                <!--<?= Studip\LinkButton::create(_('Messenger öffnen'), $controller->url_for('mail')) ?>-->
                <div style="float:right;margin-left:10px;">
                    <img src="<?= $plugin->getPluginURL() ?>/assets/studip-riot.jpg" width="160">
                </div>
                <p>Für Lern- und Arbeitsgruppen wird heute oft eine schnelle und niedrigschwellige Kommunikation gewünscht, auch per App vom Mobilgerät (Vorbild: Slack, Whatsapp).
                    Die Uni Osnabrück bietet dafür den Dienst "Riot".</p>
                <ul>
                    <li>
                        <a href="https://www.rz.uni-osnabrueck.de/homeoffice/riot.html" class="link-extern" target="_blank">So geht's: Matrix/Riot einrichten (RZ)</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/messenger_info/blubber') ?>" data-dialog="size=640x500">Alternative in Stud.IP: Blubber-Chat</a>
                    </li>
                </ul>
            </div>

            <h1>
                Gemeinsam an Texten arbeiten
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Pad einrichten'), $controller->url_for('pad')) ?>
                <p>Die gemeinsame Arbeit an Texten ist in vielen Veranstaltungsformen wichtig: Ideen sammeln, Protokolle schreiben,
                    Arbeitsergebnisse zusammentragen. Stud.IP bietet dafür zwei gut integrierte Tools: Pads und Wikis.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/collab_info/example') ?>" data-dialog="size=640x650">Beispiel</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/collab_info/howto') ?>" data-dialog="size=640x600">So geht's</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/collab_info/tips') ?>" data-dialog="size=640x500">Tipps und Tricks</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="assistant-section" style="clear: both;">
        <h1>
            Aufgaben stellen
        </h1>

        <div class="accordion">
            <h1>
                Einfache Abgaben: Hausaufgabenorder
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Hausaufgabenorder einrichten'), $controller->url_for('assistant/homework')) ?>
                <p>Über die Dateiablage von Stud.IP können Sie Hausaufgaben / Dateien von Kurs-Teilnehmenden
                    einsammeln. Lehrende und Tutor*innen sehen alle Dateien, die Studierenden nur die eigenen.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/homework_info/howto') ?>" data-dialog="size=640x500">So geht's</a>
                    </li>

                </ul>
            </div>

            <h1>
                Übungsblätter und Aufgaben mit Abgabefrist
            </h1>
            <div class="accordion_content">
                <?= Studip\LinkButton::create(_('Kurs dafür einrichten'), $controller->url_for('assistant/vips')) ?>
                <p>Stud.IP bietet mit "Vips" umfangreiche Möglichkeiten für Übungsblätter, Aufgaben mit Abgabefrist und
                    Selbstüberprüfungsaufgaben, die automatisiert oder manuell bewertet werden können.</p>
                <ul>
                    <li>
                        <a href="<?= $controller->link_for('assistant/vips_info/example') ?>" data-dialog="size=640x610">Beispiel</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/vips_info/howto') ?>" data-dialog="size=640x510">So geht's</a>
                    </li>
                    <li>
                        <a href="<?= $controller->link_for('assistant/vips_info/tips') ?>" data-dialog="size=640x400">Tipps und Tricks</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="assistant-section">
        <h1>
            <?= Icon::create('question-circle', Icon::ROLE_INFO)->asImg(20, ['style' => 'vertical-align: text-bottom']) ?>
            Fragen Sie uns...
        </h1>
        <div class="assistant-infobox">
            <p style="text-aling:justify;">
                Wir haben hier nur die grundlegendsten Szenarien vorgestellt. Mit Stud.IP und anderen Diensten können Sie
                Ihre Lehre auf viele weitere Arten unterstützen. Sprechen Sie uns einfach an:
                <br><br>
                <a href="mailto:virtuos@uni-osnabrueck.de">virtuos@uni-osnabrueck.de</a><br>
                Tel. 0541/969-6666<br>
                <a href="https://www.virtuos.uni-osnabrueck.de/digitale_lehre/covid_19.html" class="link-extern" target="_blank"
                >COVID-19: Hinweise zum Einsatz Digitaler Lehre
                </a><br>
                <a href="https://www.rz.uni-osnabrueck.de/homeoffice/homeoffice.html" class="link-extern" target="_blank">Homeoffice-Dienste des Rechenzentrums</a>
            </p>
        </div>
        <?= Studip\LinkButton::create(_('Anfrage stellen'),
            URLHelper::getURL('dispatch.php/messages/write', ['rec_uname' => 'virtuos@studip']), ['data-dialog' => '', 'data-action' => 'messages/write']) ?>
    </section>

</div>

<script>
    $('.accordion').accordion({
        collapsible: true,
        active: false
    });

    $("input[name='df[aee5626da96ab9c37976b2fc454d88b4]']:checked").trigger('change');

</script>
