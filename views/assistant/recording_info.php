<? if ($view === 'opencaststudio'): ?>
<h2>Selbst aufzeichnen: Opencast Studio</h2>
    <div style="float:right;margin-left:10px;">
        <p>
            <iframe width="240" height="135" src="https://www.youtube.com/embed/oKwv0HnCCIQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p>

    </div>
    <p>
        Rechtzeitig vor dem kommenden Semester wird über Stud.IP auch die neue Software "Opencast Studio" verfügbar sein. Es handelt sich dabei um ein webbasiertes Portal, mit dem man ohne Installation von zusätzlicher Software auf dem eigenen PC seinen Bildschirm und auf Wunsch auch ein Kamerabild aufzeichnen kann. Der verwendete Rechner sollte üblichen Leistungsanforderungen entsprechen und eine aktuelle Version von Firefox oder Google Chrome installiert haben. Nach der Aufzeichnung in Opencast Studio können Sie das erstellte Video auf ihren eigenen Rechner laden und die Aufzeichnung dann über die vorhandenen Opencast Server den Studierenden in ihrem Stud.IP Kurs zur Verfügung stellen.
    </p>
    <p>
        Auch bei dieser Technologie hat die Universität ausreichende Kapazitäten, um die o.g. Aufzeichnungen zu ermöglichen. Der Aufwand für Lehrende ist etwas höher, da man selbst die Aufzeichnungstechnologie bedienen muss, um die Videos zu erstellen. Dafür können die Aufzeichnungen an einem beliebigen Ort, der über eine ausreichend schnelle Netzwerkverbindung verfügt, durchgeführt werden. Wir empfehlen, mit Opencast Studio eher kleinere Videos zu einzelnen Themen zu erstellen, längere Vorträge in Vorlesungslänge dagegen vorzugsweise in den dafür vorbereiteten Hörsälen oder in den vorhandenen Videostudios aufzuzeichnen.
    </p>

<? elseif ($view === 'powerpoint'): ?>
    <h2>Selbst aufzeichnen: Powerpoint</h2>
    <p>
        Microsoft Powerpoint bietet in aktuellen Versionen die Möglichkeit,
        vertonte Präsentationen direkt in Powerpoint aufzuzeichnen (auf Wunsch mit Webcam-Bild).
    </p>
<p>
    Schnellanleitung:
</p>
<ol>
    <li>Wählen Sie "Bildschirmpräsentation aufzeichnen" unter "Bildschirmpräsentation".</li>
    <li>Wählen Sie das Mikrofon aus und aktivieren Sie ggf. die Webcam.</li>
    <li>Starten Sie die Aufzeichnung und halten Sie Ihren Vortrag wie gewohnt.</li>
    <li>Beenden Sie die Präsentation und speichern Sie die Präsentation im Format "mp4".</li>
    <li>Aktivieren Sie in Ihrem Stud.IP-Kurs den Reiter "Opencast" (unter "Mehr...").</li>
    <li>Laden Sie das gespeicherte Powerpoint-Video in ihrem Kurs in Opencast hoch.</li>
</ol>
<p>&nbsp;<br>
    Eine ausführliche Anleitung für verschiedene Powerpoint-Versionen finden Sie beim
    <a href="https://support.office.com/de-de/article/aufzeichnen-einer-bildschirmpr%C3%A4sentation-mit-kommentaren-und-folienanzeigedauern-0b9502c6-5f6c-40ae-b1e7-e47d8741161c">Microsoft-Office-Support</a>.
</p>
<? elseif ($view === 'tips'): ?>
    <h2>Selbst aufzeichnen: Tipps und Tricks</h2>
    <ul>
        <li><b>Versuchen Sie nicht, perfekt zu sein!</b> Ihre Studierenden werden Ihnen in der aktuellen Situation die eine
            oder andere Schwierigkeit nachsehen.<br>&nbsp;</li>
        <li><b>Teilen Sie Ihren Inhalte in kürzere Teile auf.</b> Es müssen nicht immer 90 Minuten sein.
            Die Unabhängigkeit von Zeitslots nutzen Sie am besten, die Inhalte in sinnvolle Abschnitte zu gliedern,
            die idealerweise nicht länger als 30 Minuten sind.<br>&nbsp;</li>
        <li><b>Sie müssen nicht immer im Bild sein.</b> Oft ist es einfcher, nur einen Audiokommentar aufzuzeichnen.
            Insbesondere, wenn Ihre Studierenden Sie schon kennen, ist das kein Problem.
        </li>
        <li><b>Das Wichtigste: Guter Ton.</b> Leider auch das Schwierigste. Am besten verwenden Sie ein Headset
            eines Markenherstellers (ab ca. 20-30 Euro).</li>
    </ul>
<? endif ?>
