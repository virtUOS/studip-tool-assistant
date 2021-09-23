<?php

require_once __DIR__.'/ToolAssistantBaseController.php';

use Mooc\DB\Block as dbBlock;

/**
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * @author      Elmar Ludwig
 * @author      Ron Lucke
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GPL version 2
 */

class AssistantController extends ToolAssistantBaseController
{
    /**
     * Default action: show the tool assistant.
     */
    public function index_action()
    {
        $preferredLang = mb_substr($GLOBALS['user']->preferred_language, 0, 2);
        if ($preferredLang=='en') {
            $name='Teach Online';
        } else {
            $name='Online-Lehre';
        }
        Navigation::activateItem('/course/assistant');
        PageLayout::setTitle(Context::getHeaderLine() . ' - ' . $name);
        PageLayout::addStylesheet($this->plugin->getPluginURL() . '/assets/assistant.css?v=0.1');

        $widget = new SidebarWidget();
        $widget->setTitle($name);
        if ($preferredLang=='en') {
            $widget->addElement(new WidgetElement('Osnabrück University offers many opportunities to design teaching online via virtUOS and the computing center (Rechenzentrum).
                Reliable operation and personal support are guaranteed for the tools presented here and they allow for a use that is unobjectionable in terms of data protection law.<br><br>
                On this page, you will find initial information and you can start further steps directly from here.'));
            $widget->addElement(new WidgetElement(Studip\LinkButton::create(_('Download cheat sheet'), $this->plugin->getPluginURL().'/assets/cheatsheet-teach-online.pdf')));
        } else {
            $widget->addElement(new WidgetElement(
                'Die Universität Osnabrück bietet über virtUOS und Rechenzentrum viele Möglichkeiten, Lehre online zu gestalten.
                 Für die hier vorgestellten Tools sind verlässlicher Betrieb und persönlicher Support gewährleistet und sie
                 ermöglichen eine datenschutzrechtlich unbedenkliche Nutzung.<br><br>
                 Hier finden Sie erste Informationen und können weitere Schritte direkt von hier aus starten.')
            );
            $widget->addElement(new WidgetElement(Studip\LinkButton::create(_('"Spickzettel" herunterladen'), $this->plugin->getPluginURL().'/assets/spickzettel-online-lehre.pdf')));
        }
        Sidebar::get()->addWidget($widget);

        $this->course = Course::find($this->course_id);
        $this->datafields = DataFieldEntry::getDataFieldEntries($this->course_id, 'sem');
        $this->folder_id = Folder::findTopFolder($this->course_id)->id;
    }

    public function set_type_action()
    {
        CSRFProtection::verifyUnsafeRequest();

        $df = Request::getArray('df');
        $ids = ['aee5626da96ab9c37976b2fc454d88b4', 'a8af8d7ef4a67cc38d7ca6a21fe1bc73'];
        $datafields = DataFieldEntry::getDataFieldEntries($this->course_id, 'sem');

        foreach ($ids as $id) {
            $datafields[$id]->setValueFromSubmit($df[$id]);

            if ($datafields[$id]->isValid() && $datafields[$id]->isEditable() && !LockRules::Check($this->course_id, $id)) {
                $datafields[$id]->store();
            }
        }

        if (!LockRules::Check($this->course_id, 'admission_turnout')) {
            $course = Course::find($this->course_id);
            $course->admission_turnout = Request::int('admission_turnout');
            $course->store();

            update_admission($this->course_id);
        }

        PageLayout::postSuccess('Die Einstellungen für die Veranstaltungsform wurden gespeichert');

        if ($datafields[$ids[0]]->value != $datafields[$ids[0]]->model->default_value) {
            PageLayout::postInfo('Bitte denken Sie daran, dass die gemachten Angaben nicht die Raumbuchung ersetzen!');
        }

        $this->redirect('assistant');
    }

    public function track_action($action)
    {
        $this->trackVisit(join(".", func_get_args()));
        $this->set_content_type('image/svg+xml');
        $this->render_text('<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" shape-rendering="geometricPrecision" fill="#24437c"><path d="M16 4.592l-2.807-2.809-6.819 6.82-3.571-3.568L0 7.841l6.377 6.376z"/></svg>');
    }

    public function mail_info_action($view = 'example')
    {
        $this->view = $view;
    }

    public function sem_format_info_action()
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

    public function szenarien_info_action($view = 'example')
    {
        $this->view = $view;
    }

    public function hybrid_info_action($view = 'example')
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

    public function studio_info_action($view = 'example')
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
            <h1>Informationen zum Semesterstart / Information about the start of the semester</h1>

            <i>Klicken Sie zum Bearbeiten oben rechts auf das Zahnradsymbol! / To edit, click on the gear symbol in the upper right corner!</i>

            <h2>Kursinhalte / Course materials</h2>

            <p>... Beschreiben Sie hier, ob und in welcher Form Kursinhalte zur Verfügung gestellt werden, z.B. als Reader im Dateibereich, als Videoaufzeichnungen, als Courseware-Modul (s. "Online-Lehre: Materialien zusammenstellen"). ...</p>
            <p>... Describe here whether and in which form course contents are made available, e.g. in the Files section, as video recordings,  or as a courseware module (see "Online teaching: compiling materials"). ...</p>

            <h2>Aufgaben, Leistungsnachweis, Fristen / Tasks, exams, deadlines</h2>

            <p>... Beschreiben Sie hier, ob und in welcher Form Aufgaben zu erledigen sind, welche Fristen dabei gelten und wie der Leistungsnachweis in der Veranstaltung erbracht werden kann. ...</p>
            <p>... Describe here whether and in which form tasks have to be completed, which deadlines apply and how the proof of performance has to be provided in the course. ...</p>

            <h2>Kommunikation im Kurs / Communication in the course</h2>

            <p>... Beschreiben Sie hier, wie die Kommunikation im Kurs organisiert sein soll, z.B. in Form regelmäßiger Videokonferenzen, über ein Forum, den Blubber-Chat oder Matrix/Element (s. "Online-Lehre: Online-Zusammenarbeit"). ...</p>
            <p>... Describe here how communication in the course will be organised, e.g. in the form of regular video conferences, via a forum, the blubber chat or Matrix/Element (see "Online teaching: online collaboration"). ...</p>

            <h2>Kontakt / Contact</h2>

            <p>... Beschreiben Sie hier, wie die Teilnehmenden am sinnvollsten Kontakt mit Ihnen aufnehmen, z.B. per E-Mail, in Online-Sprechstunden oder über die Tutor*innen. ...</p>
            <p>... Describe here how the participants can most effectively contact you, e.g. by e-mail, in online consultation hours, or via the tutors. ...</p>
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

    /***********************
     * C O U R S E W A R E *
     * S T A R T           *
     **********************/

    public function courseware_action()
    {
        $remote_cid = '073b5b0cd9f74af43d5e91a875e46e87';
        $current_cid = $this->course_id;
        $plugin_manager = \PluginManager::getInstance();
        $this->coursewarePlugin = $plugin_manager->getPlugin('Courseware');

        $plugin_manager->setPluginActivated($this->coursewarePlugin->getPluginId(), $this->course_id, true);
        $plugin_manager->setPluginActivated($plugin_manager->getPlugin('VipsPlugin')->getPluginId(), $this->course_id, true);

        $current_courseware = dbBlock::findCourseware($current_cid);
        if (!$current_courseware) {
            $data = array('title' => 'Courseware', 'cid' => $current_cid);
            $this->createAnyBlock(null, 'Courseware', $data);
        }
        $remote_courseware = $this->getRemoteCourseware($remote_cid);

        $import_folder = $this->createFolder('Courseware-Tutorial', 'Dateien für das Courseware Tutorial');

        // import remote course
        //chapters
        foreach ($remote_courseware['children'] as $chapter) {
            $db_block = dbBlock::find($chapter['id']);
            $data = array('title' => $db_block->title, 'cid' => $current_cid, 'publication_date' => $chapter['publication_date'], 'withdraw_date' => $chapter['withdraw_date']);
            $current_chapter = $this->createAnyBlock($current_courseware->id, 'Chapter', $data);

            //subchapters
            foreach($chapter['children'] as $subchapter) {
                $db_block = dbBlock::find($subchapter['id']);
                $data = array('title' => $db_block->title, 'cid' => $current_cid, 'publication_date' => $subchapter['publication_date'], 'withdraw_date' => $subchapter['withdraw_date']);
                $current_subchapter = $this->createAnyBlock($current_chapter->id, 'Subchapter', $data);

                //sections
                foreach($subchapter['children'] as $section) {
                    $db_block = dbBlock::find($section['id']);
                    $data = array('title' => $db_block->title, 'cid' => $current_cid, 'publication_date' => null, 'withdraw_date' => null);
                    $current_section = $this->createAnyBlock($current_subchapter->id, 'Section', $data);

                    //blocks
                    foreach($section['children'] as $block) {
                        $remote_db_block = dbBlock::find($block['id']);
                        $remote_ui_block = $this->coursewarePlugin->getBlockFactory()->makeBlock($remote_db_block);

                        $data = array('title' => $remote_db_block->title, 'cid' => $current_cid, 'publication_date' => null, 'withdraw_date' => null);
                        $new_block = $this->createAnyBlock($current_section->id, $remote_db_block->type, $data, $remote_db_block->sub_type);

                        $new_ui_block = $this->coursewarePlugin->getBlockFactory()->makeBlock($new_block);
                        if (gettype($new_ui_block) != 'object') {
                            $new_block->delete();
                            break 2;
                        }
                        $files = $remote_ui_block->getFiles();
                        foreach($files as &$file) {
                            $remote_file = FileRef::find($file['id']);

                            if ($remote_file != null) {
                                $file = FileManager::copyFileRef($remote_file, $import_folder, \User::findCurrent());

                            }
                        }

                        if ($remote_ui_block->exportProperties() != null) {
                            $new_ui_block->importProperties($remote_ui_block->exportProperties());
                        }
                        $new_ui_block->importContents($remote_ui_block->exportContents(), $files);

                    }
                }
            }
        }

        $this->redirect(URLHelper::getURL('plugins.php/courseware/courseware', array('cid' => $this->course_id)));
    }

    private function getRemoteCourseware($cid)
    {
        $grouped = $this->getGrouped($cid);

        $remote_courseware = current($grouped['']);
        $this->buildTree($grouped, $remote_courseware);

        return $remote_courseware;
    }

    private function getGrouped($cid)
    {
        $grouped = array_reduce(
            dbBlock::findBySQL('seminar_id = ? ORDER BY id, position', array($cid)),
            function($memo, $item) {
                $arr = $item->toArray();
                $arr['isStrucutalElement'] = true;
                $arr['childType'] = $this->getSubElement($arr['type']);
                if (!$item->isStructuralBlock()) {
                    $arr['isStrucutalElement'] = false;
                    $arr['isBlock'] = true;
                    $ui_block = $this->coursewarePlugin->getBlockFactory()->makeBlock($item);
                    $arr['ui_block'] = $ui_block;
                }
                $arr['isPublished'] = $item->isPublished();
                $memo[$item->parent_id][] = $arr;
                return $memo;
            },
            array());

        return $grouped;
    }

    private function buildTree($grouped, &$root)
    {
        $this->addChildren($grouped, $root);
        if ($root['type'] !== 'Section') {
            if (!empty($root['children'])) {
                foreach($root['children'] as &$child) {
                    $this->buildTree($grouped, $child);
                }
            }
        } else {
            $root['children'] = $this->addChildren($grouped, $root);
        }
    }

    private function getSubElement($type)
    {
        $sub_element = null;
        switch($type) {
            case 'Courseware':
                $sub_element = 'Chapter';
                break;
            case 'Chapter':
                $sub_element = 'Subchapter';
                break;
            case 'Subchapter':
                $sub_element = 'Section';
                break;
            case 'Section':
                $sub_element = 'Block';
                break;
            case 'Block':
            default:
        }

        return $sub_element;
    }

    private function addChildren($grouped, &$parent)
    {
        $parent['children'] = $grouped[$parent['id']];
        if ($parent['children'] != null) {
            usort($parent['children'], function($a, $b) {
                return $a['position'] - $b['position'];
            });
        }

        return $parent['children'];
    }

    private function createAnyBlock($parent, $type, $data, $sub_type = '')
    {
        $block = new dbBlock();
        $parent_id = is_object($parent) ? $parent->id : $parent;
        $block->setData(array(
            'seminar_id' => $data['cid'],
            'parent_id' => $parent_id,
            'type' => $type,
            'sub_type' => $sub_type,
            'title' => $data['title'],
            'publication_date' => $data['publication_date'],
            'withdraw_date' => $data['withdraw_date'],
            'position' => $block->getNewPosition($parent_id)
        ));

        $block->store();

        return $block;
    }

    /***********************
     * C O U R S E W A R E *
     * E N D               *
     **********************/

    private function createFolder($name, $description, $type = 'StandardFolder')
    {
        $root_folder = Folder::findTopFolder($this->course_id);
        $parent_folder = FileManager::getTypedFolder($root_folder->id);

        $request = array('name' => $name, 'description' => $description);
        switch($type) {
            case 'HomeworkFolder':
                $new_folder = new HomeworkFolder();
                break;
            case 'StandardFolder':
            default: 
                $new_folder = new StandardFolder();
        }
        $new_folder->setDataFromEditTemplate($request);
        $new_folder->user_id = User::findCurrent()->id;
        $folder = $parent_folder->createSubfolder($new_folder);

        return FileManager::getTypedFolder($folder->id);
    }

    public function vips_action()
    {
        $plugin_manager = PluginManager::getInstance();
        $vips = $plugin_manager->getPlugin('VipsPlugin');
        $plugin_manager->setPluginActivated($vips->getPluginId(), $this->course_id, true);

        $example = file_get_contents($this->plugin->getPluginPath() . '/assets/vips-example.xml');
        $assignment = VipsAssignment::importXML($example, $GLOBALS['user']->id, $this->course_id);
        $this->redirect(PluginEngine::getURL($vips, [], 'sheets'));
    }

    public function meetings_action()
    {
        $plugin_manager = PluginManager::getInstance();
        $meetings = $plugin_manager->getPlugin('MeetingPlugin');
        $plugin_manager->setPluginActivated($meetings->getPluginId(), $this->course_id, true);

        $this->redirect(URLHelper::getURL('plugins.php/meetingplugin/index', array('cid' => $this->course_id)));
    }

    public function homework_action()
    {
        $foldername = 'Hausaufgaben-Abgabe';
        $preferredLang = mb_substr($GLOBALS['user']->preferred_language, 0, 2);
        if ($preferredLang=='en') {
            $foldername = 'Homework Folder';
        }
        $folder = $this->createFolder($foldername, '', 'HomeworkFolder');

        $this->redirect(URLHelper::getURL('dispatch.php/course/files/index/' . $folder->id, array('cid' => $this->course_id)));
    }
}
