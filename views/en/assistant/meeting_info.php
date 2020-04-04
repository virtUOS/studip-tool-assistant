<? if ($view === 'example'): ?>
<h2>Online meetings and video conferencing: Example</h2>
    <p>
        <img src="<?= $plugin->getPluginURL() ?>/assets/bbb-raum.jpg">
        <br><span style="font-size:66%">Videoconference with a "BigBlueButton" server of Osnabrück University</span>
    </span>
    </p>
    <p>
        You can move scheduled meetings with your project teams or regular sessions of your seminar to an online room.
        For students, you can offer your office hours online on the scheduled dates.
</p>

<? elseif ($view === 'howto'): ?>
    <h2>Online meetings and video conferencing: how it works</h2>
    <div style="float:right;margin-left:10px;">
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/en/studip-menu-meetings.jpg" width="240">
        </p>
        <hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/en/studip-meetings-raumname.jpg" width="240">
        </p>
        <hr>
    </div>
    <ol>
        <li>Create a course in Stud.IP, e.g. "Department meetings" or "Consultation hours XY". Use the menu item "More" to activate the plugin "Meetings".</li>
        <li>You can create different online conference rooms and name them freely.</li>
        <li>Then click on the meeting name to start the online conference. The conference room opens in a new browser tab.
            You are prompted to decide whether you want to activate your microphone or just listen.</li>
        <li>In the online room you can always mute yourself and additionally activate your camera.</li>
    </ol>
<p>&nbsp;</p>
    <p>Further information on the use of BigBlueButton can be found at <br>
            <a href="https://www.rz.uni-osnabrueck.de/homeoffice/bigbluebutton.html">https://www.rz.uni-osnabrueck.de/homeoffice/bigbluebutton.html</a></p>
    <p>
        Notes:
        <ul>
            <li>Important: Participants in the meetings must be registered in the corresponding Stud.IP course, e.g. participants of the course "Meetings Department".<br>&nbsp;</li>
        </ul>
    </p>
<? elseif ($view === 'tips'): ?>
    <h2>Online meetings and video conferencing: Tips and tricks</h2>
    <ul>
        <li>For good audio quality in the video conference room, you should use a headset.<br>&nbsp;</li>
        <li>During the meeting it is recommended to leave only the microphone of the respective speaker open. The other participants should mute their microphones to avoid background noise.<br>&nbsp;</li>
        <li>Via the video conference you can make your screen visible to all participants, e.g. for presentations, shared documents etc.<br>&nbsp;</li>
    </ul>
    <p>Further information on the use of BigBlueButton can be found at <br>
            <a href="https://www.rz.uni-osnabrueck.de/homeoffice/bigbluebutton.html">https://www.rz.uni-osnabrueck.de/homeoffice/bigbluebutton.html</a></p>
<? endif ?>


