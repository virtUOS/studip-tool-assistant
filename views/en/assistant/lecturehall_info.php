<? if ($view === 'example'): ?>
<h2>Recordings in the lecture hall: Example</h2>
    <div style="float:right;margin-left:10px;">
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/opencast-beispiel.jpg" width="240">
        </p>
        <hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/opencast-beispiel2.jpg" width="240">
        </p>
        <hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/opencast-beispiel3.jpg" width="240">
        </p>
    </div>
    <p>
        Automated lecture recordings have been used at Osnabrück University for many years for about 50 lectures per semester. The procedure is very simple for lecturers:
    </p>
<ul>
    <li>Make a recording request</li>
    <li>Lecture with microphone and beamer</li>
</ul>
<p>&nbsp;<br>
    The lecture is filmed with a fixed camera that is directed at the lectern.
    The recordings are processed automatically and are made available to the participants via Stud.IP.
    On request, the recordings can be made publicly available.
</p>
    <p>
        Example recording of
        Prof. Dr. Thomas Groß: <a href="https://lernfunk.de/#/recordings/cb3370ac-13cd-46ac-bbae-291ec48c9808">https://lernfunk.de/#/recordings/cb3370ac-13cd-46ac-bbae-291ec48c9808</a>.
    </p>
<p>
    Recordings are possible in the following rooms:<br>
    City centre: Schloßaula, 01/E01, 01/B01, 11/212, 11/213, 15/E07, 15/E10, 15/E16, 15/128, 22/B01, 41/112, 44/E03, 44/E04<br>
    Westerberg: 32/102, 32/110, 35/E01, 35/E16, 35/E25, 66/E33, 93/E07, 93/E31
</p>


<? elseif ($view === 'howto'): ?>
    <h2>Recordings in the lecture hall: How it works</h2>
    <p>
        Due to the special situation during the closing time, please contact us if you wish to record your lecture in the lecture hall without an audience.
    </p>
<p>
    Please send an e-mail to: <a href="mailto:virtuos@uni-osnabrueck.de">virtuos@uni-osnabrueck.de</a> or send a request below.
</p>
    <p>
    Recordings are also possible at short notice!
</p>
    <?= Studip\LinkButton::create('Send a request',
        URLHelper::getURL('dispatch.php/messages/write',
            ['rec_uname' => 'virtuos@studip',
                'default_subject' => _('Request a lecture hall recording for '.Context::get()->Name),
                'default_body' => _('Dear virtUOS team,
I want to record in the lecture hall.

My preferred date: (date/weekday, time, once/regularly)
My lecture hall wish: (room or city area)

Event: '.Context::get()->Name.' ('.$course_id.')

Phone number for questions:

')]),
        ['data-dialog' => '', 'data-action' => 'messages/write']) ?>

<? endif ?>
