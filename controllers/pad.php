<?php

/**
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * @author      Marcus Eibrink-Lunzenauer
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GPL version 2
 */

class PadController extends \StudipController
{
    /**
     * Callback function being called before an action is executed.
     */
    public function before_filter(&$action, &$args)
    {
        parent::before_filter($action, $args);

        $this->course_id = \Context::getId();
        $this->plugin = $this->dispatcher->current_plugin;

        if (!$GLOBALS['perm']->have_studip_perm('tutor', $this->course_id)) {
            throw new \AccessDeniedException(_('Sie besitzen keine Berechtigung, um die Veranstaltung zu konfigurieren.'));
        }
    }

    /**
     * Default action: show the tool assistant.
     */
    public function index_action()
    {
        $manager = \PluginManager::getInstance();
        $padPlugin = $manager->getPlugin('EtherpadPlugin');

        if (!$manager->isPluginActivated($padPlugin->getPluginId(), $this->course_id)) {
            $manager->setPluginActivated($padPlugin->getPluginId(), $this->course_id, true);
        }

        $padName = substr(preg_replace('/[^\w]/', '', \Context::get()->name), 0, 32);

        if (!strlen($padName)) {
            throw new \RuntimeException(_("Es kann kein Pad-Name aus dem Veranstaltungsnamen generiert werden."));
        }

        $url = \PluginEngine::getURL($padPlugin, ['new_pad_name' => $padName, 'if_not_exists' => 1], 'pads/create');

        $this->redirect($url);
    }
}
