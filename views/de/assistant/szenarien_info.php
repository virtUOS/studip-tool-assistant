<? if ($view === 'live'): ?>
    <h2>Asynchrone Variante mit Aufzeichnung</h2>
    <p>Ein Teil der Studierenden ist während des Vortrags im Hörsaal anwesend. Der Vortrag wird aufgezeichnet
        und den nicht anwesenden Studierenden anschließend zur Verfügung gestellt.
    </p>
    <p><b>Vorteile:</b>
    <ul>
        <li>Sie können wieder vor Publikum vortragen und mit den Studierenden direkt kommunizieren</li>
        <li>Studierende, deren Infrastruktur für Onlineszenarien nicht ausreicht (technische Ausstattung und
            Internetverbindung), können alternativ vor Ort teilnehmen</li>
        <li>allgemein hohe Flexibilität für Studierende: Aufzeichnungen können jederzeit angeschaut werden</li>
        <li>geringer bis kein zusätzlicher technischer Aufwand (Falls Aufzeichnungstechnik nicht zur Verfügung steht,
            muss der eigene Rechner verwendet werden)</li>
    </ul>
    </p>
    <p><b>Nachteile:</b>
    <ul>
        <li>direkte Interaktion ist nur mit den Teilnehmenden vor Ort möglich, diese können z.B. auch direkt
            Fragen stellen und sind gegenüber nicht anwesenden Studierenden dadurch im Vorteil</li>
        <li>Online Teilnehmende haben erst mit etwas Verspätung Zugriff auf Inhalte</li>
    </ul>
    </p>
    <p><b>Technik:</b>
    <ul>
        <li>Aufzeichnen mit Hörsaaltechnik (keine zusätzliche Technik nötig) oder</li>
        <li>Aufzeichnen mit eigenem PC
            <ul>
                <li>Software: Opencast-Studio</li>
                <li>Mikrofon: z.B. Headset oder Ansteckmikrofon</li>
                <li>Webcam</li>
            </ul>
        </li>
    </ul>
    </p>



<? elseif ($view === 'interactive'): ?>
    <h2>Synchrone Varianten mit Bigblue Button oder Streaming</h2>
    <p>
        <b>Variante 1: Live-Zuschaltung</b><br>
        Die nicht vor Ort anwesenden Teilnehmenden werden in diesem Szenario live per Vidokonferenz zugeschaltet (nur zuhören)
        oder schauen einen Live-Stream der Veranstaltung. Die Kommunikation mit der nicht anwesenden Gruppe
        ist nur eingeschränkt bis gar nicht möglich. Gewisse aktivierende Elemente wie z.B. Quizzfragen per
        Audience Response könnten jedoch eingesetzt werden, um beide Gruppen gleichermaßen zu aktivieren.
    </p>

    <p><b>Vorteile:</b>
    <ul>
        <li>Aktivierung aller Studierenden durch Audience Response (Quizzes, Umfragen) etc.</li>
        <li>alle Studierenden können sich z.B. per Chat mit Fragen und Kommentaren einbringen</li>
    </ul>
    </p>

    <p><b>Nachteile:</b>
    <ul>
        <li>Lehrende müssen zwei Gruppen ansprechen und moderieren (Wortmeldungen im Plenum und im Chat,
            Blick ins Plenum oder in die Webcam)</li>
        <li>technische Anforderungen sind bei Live-Verbindungen höher (Online teilnehemende Studierende
            brauchen ausreichend stabile Leitung)</li>
        <li>geringe Flexibilität für Studierende (kann evtl. duch zusätzliche Aufzeichnung kompensiert werden)</li>
    </ul>
    </p>

    <p><b>Technik:</b>
    <ul>
        <li>Streamen mit Hörsaaltechnik (keine zusätzliche Technik nötig) oder</li>
        <li>Streamen mit eigenem PC
            <ul>
                <li>Software: BigBlueButton</li>
                <li>Mikrofon: z.B. Headset oder Ansteckmikrofon</li>
                <li>Webcam</li>
            </ul>
        </li>
    </ul>
    </p>

    <p>
        <b>Variante 2: Webmeeting</b><br>
        Bei dieser Variante werden die nicht anwesenden Teilnehmenden so zugeschaltet, dass sie sich aktiv,
        zum Beispiel mit Wortmeldungen und Redebeiträgen einbringen können. Es handelt sich sozusagen um
        eine Videokonferenz, in welcher sich die vor Ort Anwesenden eine Kamera und ein Mikrofon teilen.
        Aus diesem Grund ist insbesondere eine geeignete Einrichtung des Veranstaltungsraums, mit geeignetem
        Mikrofon, flexibler Webcam und Lautsprechern besonders wichtig.
    </p>
    <p>
        Bei dieser Variante lassen sich insbesondere auch Gruppenarbeitsphasen umsetzen. Neben der oder den
        Gruppen vor Ort können die Online-Teilnehmenden durch Nutzung der Breakouträume in BigBlueButton
        ebenfalls Gruppen bilden. Anschließend können jeweils Vertreter/innen der Präsenzgruppen und der
        Online-Gruppen die Ergebnisse ihrer Gruppe vorstellen. Die Koordination der Redebeiträge ist bei dieser Variante ggf sogar einfacher, als in einem komplett offenen Meeting.
    </p>

    <p><b>Vorteile:</b>
    <ul>
        <li>Dialog mit allen Studierenden möglich</li>
        <li>Audience Response kann auch hier ergänzend eingesetzt werden</li>
        <li>Gruppenarbeit möglich</li>
    </ul>
    </p>

    <p><b>Nachteile:</b>
    <ul>
        <li>Lehrende müssen zwei Gruppen ansprechen und moderieren</li>
        <li>technisch anspruchsvoll und störanfälliger (Ton- oder Verbindungsprobleme bei Studierenden fallen hier mehr ins Gewicht)</li>
        <li>Moderation voraussichtlich anspruchsvoller als bei gewöhnlichen Videokonferenzen, in der Variante mit
            Gruppenarbeit aber evtl. besser zu handhaben
        </li>
    </ul>
    </p>

    <p><b>Technik:</b>
    <ul>
        <li>Webmeeting in BigBluebutton mit eigenem PC
            <ul>
                <li>Mikrofon: z.B. Headset oder Ansteckmikrofon</li>
                <li>Webcam</li>
                <li>Lautsprecher</li>
            </ul>
        </li>
    </ul>
    </p>
<? elseif ($view === 'asynchron'): ?>
    <h2>Rotierende Gruppen</h2>
    <p>
        Die bisherigen Varianten basieren auf der Annahme, dass alle Teilnehmenden zeitgleich aktiv
        oder auch passiv an einer Veranstaltung teilnehmen. Welche Studierenden dabei jeweils vor
        Ort sind spielt eine eher untergeordnete Rolle. Alternativ wäre eine gezielte Aufteilung in
        Gruppen denkbar.
    </p>
    <p>
        <b>Variante 1: Pro Termin eine Gruppe</b><br>
        Jede Gruppe ist jeweils zu einem bestimmten Termin vor Ort. Auf diese Weise können auch Formate
        ermöglicht werden, welche ein reales Zusammentreffen zwingend erfordern. Dies lässt sich insbesondere
        gut kombinieren, wenn Input-Phasen für alle Teilnehmenden Online stattfinden, z.B. in Form von Lehrvideos und die Präsenztermine gezielt für Interaktion genutzt werden.
    </p>
    <p>
        <b>Variante 2: Pro Termin ein/e Vertreter/in jeder Gruppe</b><br>
        Zu jedem Präsenztermin ist jeweils ein/e Vertreter/in jeder Gruppe anwesend, um beispielsweise
        Arbeitsergebnisse der Gruppe vorzustellen oder im Rahmen von Planspielen oder Diskussionen eine
        bestimmte Rolle im Auftrag der Gruppe einzunehmen.
    </p>
    <p><b>Vorteile:</b>
    <ul>
        <li>intensive Zusammenarbeit möglich (Diskussionen in den Gruppen müssen nicht per Mikrofon eingefangen und
            übertragen oder aufgezeichnet werden)</li>
        <li>individualisierte Betreuung der Gruppen möglich</li>
        <li>keine Videoaufzeichnung/-übertragung erforderlich</li>
    </ul>
    </p>

    <p><b>Nachteile:</b>
    <ul>
        <li>Organisation und methodische Vorbereitung aufwendig</li>
        <li>Abstandsregeln vor Ort erschweren ggf. die üblichen Interaktionen
        </li>
    </ul>
    </p>

<? endif ?>
