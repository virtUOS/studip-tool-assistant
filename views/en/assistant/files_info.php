<? if ($view === 'example'): ?>
    <h2>Provide files: Example</h2>
    <p>
        Making files available is the most frequently used function of any learning management system, including Stud.IP:
        More than 50,000 files are uploaded in courses at Osnabrück University every semester and then downloaded more than 1.5 million times..
    </p>
<p>
    <b>Typical examples</b> for uploaded files are:
</p>
<ul>
    <li><b>Presentation slides</b> before, after or instead of lectures or seminar sessions.</li>
    <li><b>Task, exercises and worksheets</b> together with corresponding sample solutions.</li>
    <li><b>Lecture notes</b>.</li>
    <li><b>Excerpts from books</b> (up to 15% of a book) and <b>articles from scientific journals </b> (see "Copyright").</li>
    <li>Code examples and other <b> subject-related special files</b>.</li>
</ul>
<? elseif ($view === 'howto'): ?>
    <h2>Provide files: Here's how it works</h2>
    <div style="float:right;margin-left:10px;">
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/en/studip-menu-dateien.jpg" width="240">
        </p>
        <p>
            <img src="<?= $plugin->getPluginURL() ?>/assets/en/studip-dateien.jpg" width="240">
        </p>
    </div>
    <p>
        The Files module is already activated in all courses. Click on "Add file" there or drag a file with the mouse to the "Drag&Drop" area.
    </p>
    <p>
        Notes:
        <ul>
            <li><b>Also students can upload files</b>. It is always identifiable who has uploaded a file and the IP address used is saved as well.</li>
            <li><b>Linking instead of uploading:</b> Files can not only be uploaded but also linked from the internet or other courses. For this purpose you can select a source in the second step.</li>
        <li><b>Use folders</b> to organize the files in your course. Folders can also be used with different permission settings, e.g. as a  learning materials folder into which students cannot upload anything.</li>
        </ul>
    </p>
<? elseif ($view === 'tips'): ?>
    <h2>Provide files: Tips and tricks</h2>
    <ul>
        <li>If possible, provide files <b>as PDF files</b> instead of Powerpoint or Word format, so that all students can easily open the file.</li>
        <li><b>Large files can be linked</b> if they are already available on the Internet - the size limit for uploading does not apply in this case.</li>
        <li><b>Make it clear what you expect from the students</b>. Is a file optional additional material or does it concern central contents of the course? Use folders, meaningful file names and file descriptions. </li>
    </ul>
<? endif ?>
