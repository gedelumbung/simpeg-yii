<?php

class SettingController extends Controller
{
	public function actionSet()
	{
		$dt = Setting::model()->findAll();
		foreach($dt as $d)
		{
			$_GLOBALS['tipe'] = $d->content_setting;
		}
	}
}