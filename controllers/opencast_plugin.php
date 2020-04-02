<?php

require_once __DIR__.'/ToolAssistantBaseController.php';

/**
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * @author      Marcus Eibrink-Lunzenauer
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GPL version 2
 */
class OpencastPluginController extends ToolAssistantBaseController
{
    public function index_action()
    {
        $manager = \PluginManager::getInstance();
        $ocPlugin = $manager->getPlugin('OpenCast');

        if (!$manager->isPluginActivated($ocPlugin->getPluginId(), $this->course_id)) {
            $manager->setPluginActivated($ocPlugin->getPluginId(), $this->course_id, true);
        }

        $url = \PluginEngine::getURL($ocPlugin, [], '/course/create_series');
        $this->redirect($url);
    }
}
