<?php

/**
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * @author      Elmar Ludwig
 * @author      Ron Lucke
 * @author      Marcus Eibrink-Lunzenauer
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GPL version 2
 */

class ToolAssistantBaseController extends StudipController
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
            throw new AccessDeniedException(
                _(
                    'Sie besitzen keine Berechtigung, um die Veranstaltung zu konfigurieren.'
                )
            );
        }
        PageLayout::addScript(
            $this->plugin->getPluginURL() . '/assets/assistant.js'
        );
        $this->trackVisit(
            strtr($this->get_default_template($action), '/', '.')
        );
    }

    protected function trackVisit($action)
    {
        $action = preg_replace('/[^\w.]/', '', $action);
        Metrics::increment('plugin.toolassistant.visit.' . $action);
        Metrics::increment(
            sprintf(
                'plugin.toolassistant.visit_by_institute.%s.%s',
                preg_replace('/[^\w]/', '', Context::get()->institut_id),
                $action
            )
        );
    }
}
