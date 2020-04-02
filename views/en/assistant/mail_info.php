<? if ($view === 'example'): ?>
<h2>Notify participants: Example</h2>
<p>
    You want to inform your participants by e-mail and within Stud.IP about important regulations and short-term changes in your course.
</p>
<p>
    Typical uses are:
</p>
<ul>
    <li>You would like to inform the course participants before the start of the semester about how the course will proceed and where further information can be found.</li>
    <li>You want to inform about short-term changes.</li>
    <li>You want to ensure that discussion results, clarifications and hints reach all participants.</li>
</ul>

<? elseif ($view === 'howto'): ?>
    <h2>Notify participants: How to do it</h2>
    <div style="float:right;">
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/en/studip-menu-teilnehmende.jpg" width="240">
        </p>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/en/studip-tn-rundmail.jpg" width="240">
        </p>
    </div>
    <p>
        On the page "Participants" you can write a message to everyone with one click, which will then be sent both as a Stud.IP message and by e-mail.
    </p>
    <p>
        Hinweise:
        <ul>
            <li><b>The e-mails are not sent immediately</b>, but are delivered bit by bit to relieve the mail servers. It can take up to one hour until all mails are delivered.<br>&nbsp;</li>
            <li>The e-mails are sent <b>to the address that the people have provided in Stud.IP</b>. By default this is the university e-mail address.<br>&nbsp;</li>
            <li>For many students, e-mail is no longer a natural medium of communication.
                Advise your students to check their e-mails regularly and do not necessarily expect that e-mails will be read by everyone within a few hours.<br>&nbsp;</li>
            <li><p>Students who register for the event later will not receive the message.</p> Announcements are useful here (see tips and tricks).<br>&nbsp;</li>
        </ul>
    </p>
<? elseif ($view === 'tips'): ?>
    <h2>Notify participants: Tips and tricks</h2>
    <ul>
        <li>For many students, e-mail is no longer a natural medium of communication. Advise your students to check their e-mails regularly and do not necessarily expect that e-mails will have been read by everyone within a few hours.<br>.<br>&nbsp;</li>
        <li>You can also use the "Participants" page to send <b>messages to individuals or groups of individuals</b> (all teachers, all tutors, students only). To do this, click on the letter symbols on the right in the list of participants.<br>&nbsp;</li>
        <li><b>Under "Overview" you can create announcements</b> that will be visible to all participants for a selectable period. Announcements will not be sent by e-mail, but they will be accessible for those who join the course later.
            In important cases where you can still expect course latecomers it is advisable to write both a circular mail and an announcement.<br>&nbsp;</li>
        <li>In the sub-item "Groups" on the participants' page you can freely compose <b>your own groups</b> and also send messages to these groups.<br>&nbsp;</li>
        <li>By default, only lecturers and tutors of the course can send messages to everyone. However, you can also grant this right to everyone by using the option <b>"Allow circulars from students"</b>.</li>
    </ul>
<? endif ?>
