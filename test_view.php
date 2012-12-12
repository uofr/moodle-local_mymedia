<?php

require_once(dirname(dirname(dirname(__FILE__))) . '/config.php');


//echo 'hello';

    $PAGE->set_url('/');
    $PAGE->set_course($SITE);

    $PAGE->settingsnav->get('usercurrentsettings')->add(get_string('makethismyhome'), new moodle_url('/', array('setdefaulthome'=>true)), navigation_node::TYPE_SETTING);

    $PAGE->set_pagetype('site-index');
    $PAGE->set_other_editing_capability('moodle/course:manageactivities');
    $PAGE->set_docs_path('');
    $PAGE->set_pagelayout('frontpage');
    $editing = $PAGE->user_is_editing();
    $PAGE->set_title($SITE->fullname);
    $PAGE->set_heading($SITE->fullname);


    echo $OUTPUT->header();
    
    

echo trim('');
echo 'hello world';
    
    echo $OUTPUT->footer();