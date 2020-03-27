<?php
/**
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * @author      Elmar Ludwig
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GPL version 2
 */

class AssistantController extends StudipController
{
    /**
     * Callback function being called before an action is executed.
     */
    public function before_filter(&$action, &$args)
    {
        parent::before_filter($action, $args);

        $this->course_id = Context::getId();
        $this->plugin = $this->dispatcher->current_plugin;

        if (!$GLOBALS['perm']->have_studip_perm('tutor', $this->course_id)) {
            throw new AccessDeniedException(_('Sie besitzen keine Berechtigung, um die Veranstaltung zu konfigurieren.'));
        }
    }

    /**
     * Default action: show the tool assistant.
     */
    public function index_action()
    {
        Navigation::activateItem('/course/assistant');
        PageLayout::setTitle(Context::getHeaderLine() . ' - ' . _('Online-Lehre'));
        PageLayout::addStylesheet($this->plugin->getPluginURL() . '/assets/assistant.css?v=0.1');

        $widget = new SidebarWidget();
        $widget->setTitle(_('Online-Lehre'));
        $widget->addElement(new WidgetElement(
            _('Die Universität Osnabrück bietet über virtUOS und Rechenzentrum viele Möglichkeiten, Lehre online zu gestalten.
               Für die hier vorgestellten Tools sind verlässlicher Betrieb und persönlicher Support gewährleistet und sie
               ermöglichen eine datenschutzrechtlich unbedenkliche Nutzung.<br><br>
               Hier finden Sie erste Informationen und können weitere Schritte direkt von hier aus starten.')
        ));
        Sidebar::get()->addWidget($widget);

        $this->folder_id = Folder::findTopFolder($this->course_id)->id;
    }

    public function mail_info_action($view = 'example')
    {
        $this->view = $view;
    }

    public function files_info_action($view = 'example')
    {
        $this->view = $view;
    }

    public function corona_info_action($view = 'example')
    {
        $this->view = $view;
    }

    public function oer_info_action($view = 'example')
    {
        $this->view = $view;
    }

    public function courseware_info_action($view = 'example')
    {
        $this->view = $view;
    }

    public function copyright_info_action($view = 'example')
    {
        $this->view = $view;
    }

    public function meeting_info_action($view = 'example')
    {
        $this->view = $view;
    }

    public function messenger_info_action($view = 'example')
    {
        $this->view = $view;
    }

    public function collab_info_action($view = 'example')
    {
        $this->view = $view;
    }

    public function lecturehall_info_action($view = 'example')
    {
        $this->view = $view;
    }

    public function recording_info_action($view = 'example')
    {
        $this->view = $view;
    }

    public function homework_info_action($view = 'example')
    {
        $this->view = $view;
    }

    public function vips_info_action($view = 'example')
    {
        $this->view = $view;
    }

    public function corona_action()
    {
        $db = DBManager::get();
        $db->execute('UPDATE scm SET position = position + 1 WHERE range_id = ?', [$this->course_id]);

        $scm = new StudipScmEntry();
        $scm->tab_name = _('Corona-Info');
        $scm->content = _('<!--HTML-->
<h1>Informationen zum Semesterstart</h1>

<i>Klicken Sie zum Bearbeiten oben rechts auf das Zahnradsymbol!</i>

<h2>Kursinhalte</h2>

<p>... Beschreiben Sie hier, ob und in welcher Form Kursinhalte zur Verfügung gestellt werden, z.B. als Reader im Dateibereich, als Videoaufzeichnungen, als Courseware-Modul (s. "Online-Lehre: Materialien zusammenstellen"). ...</p>

<h2>Aufgaben, Leistungsnachweis, Fristen</h2>

<p>... Beschreiben Sie hier, ob und in welcher Form Aufgaben zu erledigen sind, welche Fristen dabei gelten und wie der Leistungsnachweis in der Veranstaltung erbracht werden kann. ...</p>

<h2>Kommunikation im Kurs</h2>

<p>... Beschreiben Sie hier, wie die Kommunikation im Kurs organisiert sein soll, z.B. in Form regelmäßiger Videokonferenzen, über ein Forum, den Blubber-Chat oder Matrix/Riot (s. "Online-Lehre: Online-Zusammenarbeit"). ...</p>

<h2>Kontakt</h2>

<p>... Beschreiben Sie hier, wie die Teilnehmenden am sinnvollsten Kontakt mit Ihnen aufnehmen, z.B. per E-Mail, in Online-Sprechstunden oder über die Tutor*innen. ...</p>
');
        $scm->user_id = $GLOBALS['user']->id;
        $scm->range_id = $this->course_id;
        $scm->store();

        $modules = new AdminModules();
        $bin = $modules->getBin($this->course_id);
        $modules->setBit($bin, 12);
        $modules->writeBin($this->course_id, $bin);

        $this->redirect(URLHelper::getURL('dispatch.php/course/scm'));
    }


}
