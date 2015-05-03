<?php

class Cms_laporan_pegawai_struktural_fungsionalController extends Controller
{
	public $layout='main_cms';

	public function init()
	{
		if (Yii::app()->user->isGuest) 
		{
			$this->redirect(array("site/index"));
		}

		$this->widget('SettingWidgets');
	}

	public function actionExport()
	{
		$where = '';
		if(($_SESSION['lap_5_id_satuan_kerja']=="Semua" || $_SESSION['lap_5_id_satuan_kerja']=="") && ($_SESSION['lap_5_id_eselon']=="Semua" || $_SESSION['lap_5_id_eselon']=="") && ($_SESSION['lap_5_id_status_jabatan']=="Semua" || $_SESSION['lap_5_id_status_jabatan']==""))
		{
			$where = '';
		}
		else
		{
			$where = 'where ';
			if($_SESSION['lap_5_id_satuan_kerja'] != ''){
				if(strlen($where) > 6){
					$where .= ' and ';
				}
				$where .= 'a.id_satuan_kerja = "'.$_SESSION['lap_5_id_satuan_kerja'].'"';
			}
			if($_SESSION['lap_5_id_eselon'] != ''){
				if(strlen($where) > 6){
					$where .= ' and ';
				}
				$where .= 'a.id_eselon = "'.$_SESSION['lap_5_id_eselon'].'"';
			}
			if($_SESSION['lap_5_id_status_jabatan'] != ''){
				if(strlen($where) > 6){
					$where .= ' and ';
				}
				$where .= 'a.id_status_jabatan = "'.$_SESSION['lap_5_id_status_jabatan'].'"';
			}
		}

		$model = Yii::app()->db->createCommand("select a.nip, a.nip_lama, a.no_kartu_pegawai, a.nama_pegawai, a.tempat_lahir, a.tanggal_lahir, 
				a.jenis_kelamin, a.agama, a.usia, b.nama_status as status_pegawai, a.tanggal_pengangkatan_cpns, a.alamat, a.no_npwp, a.kartu_askes_pegawai,
				c.nama_status as status_pegawai_pangkat, d.golongan, a.nomor_sk_pangkat, a.tanggal_sk_pangkat, a.tanggal_mulai_pangkat, 
				a.tanggal_selesai_pangkat, e.nama_jabatan as nama_status_jabatan, f.nama_jabatan as nama_jabatan, g.nama_unit_kerja, h.nama_satuan_kerja,
				a.lokasi_kerja, a.nomor_sk_jabatan, a.tanggal_sk_jabatan, a.tanggal_mulai_jabatan, a.tanggal_selesai_jabatan, i.nama_eselon, a.tmt_eselon from tbl_data_pegawai a left join tbl_master_status_pegawai b on a.status_pegawai=b.id_status_pegawai
				left join tbl_master_status_pegawai c on a.status_pegawai_pangkat=c.id_status_pegawai left join tbl_master_golongan d on a.id_golongan=d.id_golongan
				left join tbl_master_status_jabatan e on a.id_status_jabatan=e.id_status_jabatan left join tbl_master_jabatan f on a.id_jabatan=f.id_jabatan left join
				tbl_master_unit_kerja g on a.id_unit_kerja=g.id_unit_kerja left join tbl_master_satuan_kerja h on a.id_satuan_kerja=h.id_satuan_kerja left join
				tbl_master_eselon i on a.id_eselon=i.id_eselon ".$where." ")->queryAll();

		$this->renderPartial('export', array(
					'model' => $model
				)
			);
	}

	public function actionIndex()
	{
		$model=new Pegawai('search');
		$model->unsetAttributes();  // clear any default values

		$_SESSION['lap_5_id_status_jabatan'] = isset($_SESSION['lap_5_id_status_jabatan']) ? $_SESSION['lap_5_id_status_jabatan'] : 'Semua';
		$_SESSION['lap_5_id_eselon'] = isset($_SESSION['lap_5_id_eselon']) ? $_SESSION['lap_5_id_eselon'] : 'Semua';
		$_SESSION['lap_5_id_satuan_kerja'] = isset($_SESSION['lap_5_id_satuan_kerja']) ? $_SESSION['lap_5_id_satuan_kerja'] : 'Semua';

		if(isset($_GET['Pegawai']))
		{
			$model->attributes=$_GET['Pegawai'];
			$_SESSION['lap_5_id_status_jabatan'] = isset($_GET['Pegawai']['id_status_jabatan']) ? $_GET['Pegawai']['id_status_jabatan'] : 'Semua';
			$_SESSION['lap_5_id_eselon'] = isset($_GET['Pegawai']['id_eselon']) ? $_GET['Pegawai']['id_eselon'] : 'Semua';
			$_SESSION['lap_5_id_satuan_kerja'] = isset($_GET['Pegawai']['id_satuan_kerja']) ? $_GET['Pegawai']['id_satuan_kerja'] : 'Semua';
		}

		$this->render('index',array(
			'model'=>$model,
		));
	}
}