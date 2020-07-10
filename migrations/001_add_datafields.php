<?php

class AddDatafields extends Migration
{
    public function description()
    {
        return 'add datafields for plugin ToolAssistant';
    }

    public function up()
    {
        $db = DBManager::get();

        $db->exec("
          INSERT INTO 
          `datafields` 
          (`datafield_id`,
           `name`,
           `object_type`,
           `object_class`,
           `edit_perms`,
           `priority`,
           `mkdate`,
           `chdate`,
           `view_perms`,
           `type`,
           `typeparam`,
           `is_required`,
           `is_userfilter`,
           `default_value`,
           `description`,
           `system`) 
          VALUES
          ('a8af8d7ef4a67cc38d7ca6a21fe1bc73',
           'Hauptsächliche Kursbelegung',
           'sem',
           '1',
           'dozent',
            6,
            1594213914,
            1594213980,
           'all',
           'selectbox',
           'keine Angabe\r\nErstsemester\r\ninternationale Studierende\r\nExamenskandiaten',
            0,
            0,
           'keine Angabe',
           '',
            0),
          ('aee5626da96ab9c37976b2fc454d88b4',
           'Art der Durchführung',
           'sem',
           '1',
           'dozent',
            5,
            1594208504,
            594213973,
           'all',
           'radio',
           'Digitale Veranstaltung\r\nHybridveranstaltung\r\nPräsenzveranstaltung',
            0,
            0,
           'Digitale Veranstaltung',
           '',
            0);"
        );

        SimpleORMap::expireTableScheme();
    }

    public function down()
    {
        $db = DBManager::get();

        $db->exec("
          DELETE FROM `datafields` WHERE `datafields`.`datafield_id` = 'a8af8d7ef4a67cc38d7ca6a21fe1bc73';
          DELETE FROM `datafields` WHERE `datafields`.`datafield_id` = 'aee5626da96ab9c37976b2fc454d88b4';
        ");


        SimpleORMap::expireTableScheme();
    }
}
