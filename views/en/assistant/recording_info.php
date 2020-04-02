<? if ($view === 'opencaststudio'): ?>
<h2>Self-recording: Opencast Studio</h2>
    <div style="float:right;margin-left:10px;">
        <p>
            <iframe width="240" height="135" src="https://www.youtube.com/embed/oKwv0HnCCIQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p>

    </div>
    <p>
        The new software "Opencast Studio" is now available via Stud.IP. It is a web-based portal that allows you to record your screen and, if desired, a camera image on your own PC without installing additional software.
        The computer used should meet normal performance requirements and have a current version of Firefox or Google Chrome installed.
        After the recording in Opencast Studio it will be uploaded to the Osnabrück University Opencast servers and are made available to students in their Stud.IP course automatically.
    </p>
    <p>
        The university has sufficient capacity to enable the above-mentioned recordings with this technology as well.
        The effort for lecturers is a bit higher, because they have to operate the recording technology themselves to create the videos.
        On the other hand, the recordings can be made at any location that has a sufficiently fast network connection.
        We recommend using Opencast Studio to create smaller videos on individual topics,
        whereas longer lectures of lecture length should preferably be recorded in the lecture halls prepared for this purpose or in the existing video studios.
    </p>

<? elseif ($view === 'powerpoint'): ?>
    <h2>Self-recording: Powerpoint</h2>
    <p>
        In current versions, Microsoft PowerPoint offers the possibility to record dubbed presentations directly in PowerPoint (with webcam image on request).
    </p>
<p>
    Quick Start Guide:
</p>
<ol>
    <li>Select "Record a slide show" under "Slide Show".</li>
    <li>Select the microphone and activate the webcam if necessary.</li>
    <li>Start the recording and give your presentation as usual.</li>
    <li>Quit the presentation and save the presentation in "mp4" format.</li>
    <li>Activate the tab "Opencast" in your Stud.IP course (under "More...")</li>
    <li>Upload the saved Powerpoint video in your course to Opencast.</li>
</ol>
<p>&nbsp;<br>
    Detailed instructions for different Powerpoint versions can be found at
    <a href="https://support.office.com/en-us/article/record-a-slide-show-with-narration-and-slide-timings-0b9502c6-5f6c-40ae-b1e7-e47d8741161c">Microsoft Office Support</a>.
</p>
<? elseif ($view === 'tips'): ?>
    <h2>Self recording: tips and tricks</h2>
    <ul>
        <li><b>Don't try to be perfect!</b> Your students will overlook minor difficulty in the current situation.<br>&nbsp;</li>
        <li><b> Split your content into shorter parts.</b> It doesn't always have to be 90 minutes.
            The best way to take advantage of the independence of time slots is to divide your content into meaningful sections,
            which ideally should not be longer than 30 minutes.<br>&nbsp;</li>
        <li><b> You don't always have to be in the picture.</b> Often it is easier to record just an audio commentary.
            Especially if your students already know you, this is no problem.
        </li>
        <li><b>The most important thing: good sound.</b> Unfortunately also the most difficult. Best to use a headset
            from a well-known manufacturer (from about 20-30 euros).</li>
    </ul>
<? endif ?>
