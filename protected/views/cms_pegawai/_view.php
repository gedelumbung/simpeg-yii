<?php
/* @var $this Cms_pegawaiController */
/* @var $data Pegawai */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pegawai')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pegawai), array('view', 'id'=>$data->id_pegawai)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nip')); ?>:</b>
	<?php echo CHtml::encode($data->nip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nip_lama')); ?>:</b>
	<?php echo CHtml::encode($data->nip_lama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_kartu_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->no_kartu_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempat_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tempat_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_lahir); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agama')); ?>:</b>
	<?php echo CHtml::encode($data->agama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usia')); ?>:</b>
	<?php echo CHtml::encode($data->usia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->status_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_pengangkatan_cpns')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_pengangkatan_cpns); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_npwp')); ?>:</b>
	<?php echo CHtml::encode($data->no_npwp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kartu_askes_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->kartu_askes_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_pegawai_pangkat')); ?>:</b>
	<?php echo CHtml::encode($data->status_pegawai_pangkat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_golongan')); ?>:</b>
	<?php echo CHtml::encode($data->id_golongan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor_sk_pangkat')); ?>:</b>
	<?php echo CHtml::encode($data->nomor_sk_pangkat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_sk_pangkat')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_sk_pangkat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_mulai_pangkat')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_mulai_pangkat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_selesai_pangkat')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_selesai_pangkat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_status_jabatan')); ?>:</b>
	<?php echo CHtml::encode($data->id_status_jabatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jabatan')); ?>:</b>
	<?php echo CHtml::encode($data->id_jabatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unit_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->id_unit_kerja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_satuan_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->id_satuan_kerja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi_kerja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor_sk_jabatan')); ?>:</b>
	<?php echo CHtml::encode($data->nomor_sk_jabatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_sk_jabatan')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_sk_jabatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_mulai_jabatan')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_mulai_jabatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_selesai_jabatan')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_selesai_jabatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_eselon')); ?>:</b>
	<?php echo CHtml::encode($data->id_eselon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tmt_eselon')); ?>:</b>
	<?php echo CHtml::encode($data->tmt_eselon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($data->foto); ?>
	<br />

	*/ ?>

</div>