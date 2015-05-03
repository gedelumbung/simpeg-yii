<?php

class PegawaiWidget extends CWidget {

	public $id_pegawai;
    public function run() {

    	$criteria = new CDbCriteria();
    	$criteria->condition = 'id_pegawai = "'.$this->id_pegawai.'"';

		$model=Pegawai::model()->find($criteria);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		echo $model->nama_pegawai;
    }
}