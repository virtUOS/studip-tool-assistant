<? if ($view === 'example'): ?>
    <h2>Compile materials: Example</h2>
<div style="float:right">
    <iframe title="YouTube video player" class="youtube-player" type="text/html" width="320" height="193" src="https://www.youtube.com/embed/boHfHrAv0OI" frameborder="2" allowFullScreen></iframe>
</div>
<p>
    The computer science lecture "Web-Technologies" by Tobias Thelen has no attendance lectures any more, all contents are delivered via Stud.IP as "Courseware" modules.
</p>
<p>
    Here videos, images, texts, tasks and discussion options can be presented and edited in a chapter structure.
</p>
<? elseif ($view === 'howto'): ?>
    <h2>Compile materials: Here's how it works</h2>
<div style="float:right;margin-left:10px;">
    <p>
        <img src="<?= $plugin->getPluginURL() ?>/assets/en/studip-mehr.jpg" width="240">
    </p>
    <hr>
    <p>
        <img src="<?= $plugin->getPluginURL() ?>/assets/en/studip-courseware-aktivieren.jpg" width="240">
    </p>
    <hr>
    <p>
        <img src="<?= $plugin->getPluginURL() ?>/assets/en/studip-menu-courseware.jpg" width="240">
    </p>
    <hr>
    <p>
        <img src="<?= $plugin->getPluginURL() ?>/assets/en/studip-courseware-bearbeiten.jpg" width="240">
    </p>
</div>
<p>
    You can activate the Courseware module via the <b> button "Set up course for this"</b> after you have closed this dialog.
    Then an <b>example module will be imported</b>, which will give you more examples and further guidance.
</p>
<p>
    But the activation is also possible via "More..." -> "Courseware". Afterwards click on the new tab and activate the edit mode.
</p>
<p>
    Further information is available in the online help system (question mark at the top right or directly under <a href="https://hilfe.studip.de/help/4.2/en/MoocIP.Courseware">https://hilfe.studip.de/help/4.2/en/MoocIP.Courseware</a>)
</p>
<? elseif ($view === 'explain'): ?>
    <h2>Compile materials: Explanation video Courseware & Vips (German only)</h2>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/Vct7UnGQ1GI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<? endif ?>
