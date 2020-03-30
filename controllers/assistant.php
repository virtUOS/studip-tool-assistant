<?php
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

        $current_courseware = dbBlock::findCourseware($current_cid);
        $remote_courseware = $this->getRemoteCourseware($remote_cid);

        $import_folder = $this->createImportFolder($current_cid);

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

                        $data = array('title' => $remote_db_block->title, 'cid' => $cid, 'publication_date' => null, 'withdraw_date' => null);
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

    private function createImportFolder($cid = null)
    {
        if($cid == null) {
            $root_folder = Folder::findTopFolder($GLOBALS['SessionSeminar']);
        } else {
            $root_folder = Folder::findTopFolder($cid);
        }
        $parent_folder = FileManager::getTypedFolder($root_folder->id);

        // create new folder for import
        $request = array('name' => 'Courseware-Tutorial', 'description' => _('Dateien für das Courseware Tutorial'));
        $new_folder = new StandardFolder();
        $new_folder->setDataFromEditTemplate($request);
        $new_folder->user_id = User::findCurrent()->id;
        $courseware_folder = $parent_folder->createSubfolder($new_folder);

        return FileManager::getTypedFolder($courseware_folder->id);
    }

    /***********************
     * C O U R S E W A R E *
     * E N D               *
     **********************/


}
