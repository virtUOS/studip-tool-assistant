<? if ($view === 'example'): ?>
    <h2>Exercise sheets and tasks with deadline: Example</h2>
    <div style="float:right;margin-left:10px;">
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-vips-beispiel1.jpg" width="240">
        </p>
        <hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-vips-example2.jpg" width="240">
        </p>
        <!--<hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/studip-vips-beispiel3.jpg" width="240">
        </p>-->

    </div>
    <p>
        Vips was used in the lecture/exercise "Introduction to Artificial Intelligence",
        to support weekly exercises in groups of up to 3 people. Vips provides for this::
    </p>
    <ol>
        <li>Task sheets can be created with start and end date.</li>
        <li>Both selection questions (multiple choice, cloze texts etc.) as well as free text tasks or file submissions are possible.</li>
        <li>Students can either form groups themselves or be assigned to them. Single submissions are also possible.</li>
        <li>Unambiguous solutions are evaluated automatically, teachers and tutors can always evaluate manually.</li>
        <li>Publication of the results also via Vips.</li>
    </ol>

<? elseif ($view === 'howto'): ?>
    <h2>Exercise sheets and tasks with deadline: Here's how</h2>
    <div style="float:right;margin-left:10px;">
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/en/studip-menu-vips.jpg" width="240">
        </p>
        <hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/en/studip-vips-aktionen.jpg" width="240">
        </p>
    </div>
    <p>&nbsp;<br>
        Activate Vips after closing this dialog via "Activate Vips".
        Then Vips is available for your course then and a sample exercise sheet is imported that shows you the most important task types.
    </p>
<p>The basic actions in Vips are:</p>
<ol>
    <li>Create and manage tasks and self-tests ("task sheets")</li>
    <li>Evaluate submitted solutions and retrieve statistics ("Results")</li>
    <li>Managing exercise groups ("exercise groups")</li>
</ol>
<p>
    For more information on using Vips, please refer to the online help (question mark symbol in the upper right corner) or directly under
    <a href="https://hilfe.studip.de/help/4.2/en/Vips/HomePage">https://hilfe.studip.de/help/4.2/en/Vips/HomePage</a>.
</p>

<? elseif ($view === 'tips'): ?>
    <h2>Exercise sheets and tasks with deadline: Tips &amp; tricks</h2>
    <ul>
        <li>Less is more! <b>Do not use too many different types of tasks</b>, but limit yourself to a few,
            which you explain well.<br>&nbsp;</li>
        <li>Offer a <b>example task sheet</b> with which you and the students can practice.<br>&nbsp;</li>
        <li><b>Multiple submissions</b> are possible, it's always the last submssion of a person or group that counts.<br>&nbsp;</li>
        <li><b>Group changes</b> are also possible. For expired exercise sheets the grades and points of the group valid at the end date. For running task sheets, a person carries their
            submissions to the new group.</li>
    </ul>
<? endif ?>
