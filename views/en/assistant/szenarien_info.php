<? if ($view === 'live'): ?>
    <h2>Szenario 1: passive (Live-) Zuschaltung</h2>
    <p>
        Die nicht vor Ort anwesenden Teilnehmenden werden in diesem Szenario live per Vidokonferenz
        zugeschaltet (nur zuhören) oder schauen einen Live-Stream der Veranstaltung. Die Kommunikation mit der nicht anwesenden Gruppe ist nur eingeschränkt bis
        gar nicht möglich. Gewisse aktivierende Elemente wie z.B. Quizzfragen per Audience Response könnten jedoch eingesetzt werden, um beide Gruppen gleichermaßen zu aktivieren.
    </p>
    <p>
        Da es sich für die nicht anwesenden Teilnehmenden um ein eher passives Format handelt,
        ist alternativ auch die Bereitstellung einer Aufzeichnung denkbar.
        Das Format ist dann nicht mehr live, davon abgesehen erhalten aber alle Veranstaltungsteilnehmenden
        denselben Input.
    </p>

    <p> Ton (& Bild) senden per </p>
    <ul>
        <li>BBB-Konferenz (eigenes Gerät)</li>
        <li>Streaming (Hörsaaltechnik)</li>
        <li>Kombination aus BBB-Konferenz und Streaming</li>
    </ul>

<? elseif ($view === 'interactive'): ?>
    <h2>Szenario 2: Interaktive Live-Zuschaltung</h2>
    <div style="float:right;">
        <p>
            In diesem Szenario werden die nicht anwesenden Teilnehmenden anders als im ersten Szenario so zugeschaltet, dass sie sich aktiv, zum Beispiel mit Wortmeldungen und Redebeiträgen einbringen können.
            Es handelt sich sozusagen um eine Videokonferenz in welcher sich die vor Ort Anwesenden eine Kamera und ein Mikrofon teilen.
            Aus diesem Grund ist insbesondere eine geeignete Einrichtung des Veranstaltungsraums, mit geeignetem Mikrofon, flexibler Webcam und
            Lautsprechern von besonderer Wichtigkeit.
        </p>
    </div>

        Hinweise:
    <ul>
        <li></li>
    </ul>
    </p>
<? elseif ($view === 'asynchron'): ?>
    <h2>Szenario 3: Rotierende Gruppen</h2>
    <p>Szenario 1 und 2 basieren auf der Annahme, dass alle Teilnehmenden zeitgleich aktiv oder auch passiv an einer Veranstaltung teilnehmen. Weleche Studierenden dabei jeweils vor Ort sind spielt eine eher untergeordnete Rolle.</p>
    <p>Alternativ wäre eine gezielte Aufteilung in Gruppen denkbar, welche für jede Gruppe eine bestimmte Präsenzveranstaltung vorsieht aber zu unterschiedlichen Zeiten stattfindet.</p>
    <p>Auf diese Weise können auch Formate ermöglicht werden, welche ein reales Zusammentreffen erfordern. Dies lässt sich insbesondere gut kombinieren, wenn Input-Phasen für alle Teilnehmenden Online stattfinden, z.B. in Form von Lehrvideos und die Präsenztermine gezielt für Interaktion genutzt werden.</p>

<? endif ?>
