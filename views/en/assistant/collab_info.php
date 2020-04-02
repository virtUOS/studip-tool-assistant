<? if ($view === 'example'): ?>
<h2>Working together on texts: Example</h2>
<div style="float:right; margin-left:10px;">
    <p>
        <img src="<?= $plugin->getPluginURL() ?>/assets/studip-pad-list.jpg" width="240">
    </p>
    <p>
        <img src="<?= $plugin->getPluginURL() ?>/assets/studip-pad-example.jpg" width="240">
    </p>
</div>
<p>
    In the seminar "Artificial Intelligence in Education" two <b>cooperative homework assignments</b> were assigned.
</p>
<p>
    The students were asked to
    1. review relevant journals and conference proceedings and <b>identify current topics</b> in the scientific community
    and 2. <b>briefly summarize review articles</b>  found as a result of this.
</p>
<p>
    For this purpose, two pads were set up in the course and were to be <b>filled between two attendance sessions</b>. All students could
    see at any time how far the others are, which topics are still open and where there is still need.
    They also posted intermediate results and status update like "I'm working on this...".
</p>
<p>
    In both cases, there were more than 1,000 editing operations, which can also be traced afterwards via the "timeline" function including names.
</p>
<p>
    With a single click, you can <b>save intermediate results</b> at any time which then can be found in the file section.
</p>
<? elseif ($view === 'howto'): ?>
    <h2>Working together on texts: Here's how it works</h2>
    <div style="float:right;margin-left:10px;">
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/en/studip-menu-pad.jpg" width="240">
        </p>
        <hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/en/studip-pad-neu.jpg" width="240">
        </p>
        <hr>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/en/studip-pad-settings.jpg" width="240">
        </p>
    </div>
    <p>
        After activating the Pad function with a click on "Set up Pad" you can create as many Pads as you like.
        You open a Pad by clicking on its name. Any number of people can write in the pad simultaneously
        (tested with up to 100 people).
    </p>
    <p>
        By clicking on the three dots on the right you can perform further actions:
    </p>
    <ul>
        <li>Settings: Here you can (de)activate options such as line numbers, color controls, etc.</li>
        <li>Save current content: Creates a PDF file with the current content of the pad and saves it in the Files section of the course.</li>
        <li>Activate write protection: Freezes the current state, nobody can write anymore.</li>
        <li>Set the password: An additional password is required to open the pad (especially useful for public pads that are accessible from outside via a link).</li>
        <li>Publish: Make the pad accessible outside of Stud.IP via a link (will be shown then).</li>
        <li>Delete: Deletes the pad irrevocably.<br></li>
    </ul>

<? elseif ($view === 'tips'): ?>
    <h2>Working together on texts: Tips and tricks</h2>
    <ul>
        <li>People can enter their name and select a color in the pad in the upper right corner (icon "group of people") .This way everybody can see who edited which part of the text.<br>&nbsp;</li>
        <li>A version history (clock icon in the menu above) allows you to track changes in their chronological order.<br>&nbsp;</li>
        <li>It is technically impossible to change the initial name of a pad. Copy the contents of the pad and transfer them to a new pad instead.<br>&nbsp;</li>
        <li>The simultaneous processing with many people usually works very well. But if several persons make contradictory changes at the same time at the same place in the text, unexpected effects may occur due to  different speeds in the network connection. But this happens very rarely and can be followed in detail via the timeline.</li>
    </ul>
<? endif ?>
