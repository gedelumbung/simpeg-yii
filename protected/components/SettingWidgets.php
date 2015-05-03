<?php

class SettingWidgets extends CWidget {

    public function run() {

    	if(session_status() === PHP_SESSION_NONE){
    		session_start();
    	}
        $dt = Setting::model()->findAll();

        foreach($dt as $d){
        	$_SESSION[$d['tipe']] = $d['content_setting'];
        }
    }
}