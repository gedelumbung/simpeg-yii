<?php
/* @var $this Cms_pegawaiController */
/* @var $model Pegawai */
/* @var $form CActiveForm */
?>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<div class="form well">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pegawai-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#dtpegawai" data-toggle="tab">Data Pegawai</a></li>
        <li><a href="#dtpangkat" data-toggle="tab">Data Pangkat</a></li>
        <li><a href="#dtjabatan" data-toggle="tab">Data Jabatan</a></li>
        <li><a href="#dtfoto" data-toggle="tab">Foto Pegawai</a></li>
    </ul>

    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="dtpegawai">
			<div class="row">
				<?php echo $form->labelEx($model,'nip'); ?>
				<?php echo $form->textField($model,'nip',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'nip'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'nip_lama'); ?>
				<?php echo $form->textField($model,'nip_lama',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'nip_lama'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'no_kartu_pegawai'); ?>
				<?php echo $form->textField($model,'no_kartu_pegawai',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'no_kartu_pegawai'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'nama_pegawai'); ?>
				<?php echo $form->textField($model,'nama_pegawai',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'nama_pegawai'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'tempat_lahir'); ?>
				<?php echo $form->textField($model,'tempat_lahir',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tempat_lahir'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'tanggal_lahir'); ?>
				<?php echo $form->textField($model,'tanggal_lahir',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tanggal_lahir'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'jenis_kelamin'); ?>
				<?php echo $form->dropDownList($model,'jenis_kelamin',array("laki-laki"=>"Laki-Laki","perempuan"=>"Perempuan")); ?>
				<?php echo $form->error($model,'jenis_kelamin'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'agama'); ?>
				<?php echo $form->dropDownList($model,'agama',array(
					"Islam"=>"Islam",
					"Hindu"=>"Hindu",
					"Budha"=>"Budha",
					"Kristen"=>"Kristen",
					"Kristen Protestan"=>"Kristen Protestan",
					"Kristen Katolik"=>"Kristen Katolik",
					"Konghucu"=>"Konghucu",
					"Lainnya"=>"Lainnya",
					)); ?>
				<?php echo $form->error($model,'agama'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'usia'); ?>
				<?php echo $form->textField($model,'usia',array('size'=>10,'maxlength'=>10, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'usia'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'status_pegawai'); ?>
				<?php
					$this->widget('ext.chosen.Chosen',array(
					   'name' => 'Pegawai[status_pegawai]', // input name
					   'value' => $model->status_pegawai, // selection
					   'data' => array(''=>'Semua') + CHtml::listData(StatusPegawai::model()->findAll(),'id_status_pegawai','nama_status')
					));
				?>
				<?php echo $form->error($model,'status_pegawai'); ?>
			</div>
			<br>

			<div class="row">
				<?php echo $form->labelEx($model,'tanggal_pengangkatan_cpns'); ?>
				<?php echo $form->dateField($model,'tanggal_pengangkatan_cpns',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tanggal_pengangkatan_cpns'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'alamat'); ?>
				<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'alamat'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'no_npwp'); ?>
				<?php echo $form->textField($model,'no_npwp',array('size'=>60,'maxlength'=>75, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'no_npwp'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'kartu_askes_pegawai'); ?>
				<?php echo $form->textField($model,'kartu_askes_pegawai',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'kartu_askes_pegawai'); ?>
			</div>
		</div>
		<div class="tab-pane fade" id="dtpangkat">

			<div class="row">
				<?php echo $form->labelEx($model,'status_pegawai_pangkat'); ?>
				<?php
					$this->widget('ext.chosen.Chosen',array(
					   'name' => 'Pegawai[status_pegawai_pangkat]', // input name
					   'value' => $model->status_pegawai_pangkat, // selection
					   'data' => array(''=>'Semua') + CHtml::listData(StatusPegawai::model()->findAll(),'id_status_pegawai','nama_status')
					));
				?>
				<?php echo $form->error($model,'status_pegawai_pangkat'); ?>
			</div>
			<br>

			<div class="row">
				<?php echo $form->labelEx($model,'id_golongan'); ?>
				<?php
					$this->widget('ext.chosen.Chosen',array(
					   'name' => 'Pegawai[id_golongan]', // input name
					   'value' => $model->id_golongan, // selection
					   'data' => array(''=>'Semua') + CHtml::listData(Golongan::model()->findAll(),'id_golongan','golongan')
					));
				?>
				<?php echo $form->error($model,'id_golongan'); ?>
			</div>
			<br>

			<div class="row">
				<?php echo $form->labelEx($model,'nomor_sk_pangkat'); ?>
				<?php echo $form->textField($model,'nomor_sk_pangkat',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'nomor_sk_pangkat'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'tanggal_sk_pangkat'); ?>
				<?php echo $form->dateField($model,'tanggal_sk_pangkat',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tanggal_sk_pangkat'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'tanggal_mulai_pangkat'); ?>
				<?php echo $form->dateField($model,'tanggal_mulai_pangkat',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tanggal_mulai_pangkat'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'tanggal_selesai_pangkat'); ?>
				<?php echo $form->dateField($model,'tanggal_selesai_pangkat',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tanggal_selesai_pangkat'); ?>
			</div>

		</div>
		<div class="tab-pane fade" id="dtjabatan">


			<div class="row">
				<?php echo $form->labelEx($model,'id_status_jabatan'); ?>
				<?php
					$this->widget('ext.chosen.Chosen',array(
					   'name' => 'Pegawai[id_status_jabatan]', // input name
					   'value' => $model->id_status_jabatan, // selection
					   'data' => array(''=>'Semua') + CHtml::listData(StatusJabatan::model()->findAll(),'id_status_jabatan','nama_jabatan')
					));
				?>
				<?php echo $form->error($model,'id_status_jabatan'); ?>
			</div>
			<br>

			<div class="row">
				<?php echo $form->labelEx($model,'id_jabatan'); ?>
				<?php
					$this->widget('ext.chosen.Chosen',array(
					   'name' => 'Pegawai[id_jabatan]', // input name
					   'value' => $model->id_jabatan, // selection
					   'data' => array(''=>'Semua') + CHtml::listData(Jabatan::model()->findAll(),'id_jabatan','nama_jabatan')
					));
				?>
				<?php echo $form->error($model,'id_jabatan'); ?>
			</div>
			<br>

			<div class="row">
				<?php echo $form->labelEx($model,'id_unit_kerja'); ?>
				<?php
					$this->widget('ext.chosen.Chosen',array(
					   'name' => 'Pegawai[id_unit_kerja]', // input name
					   'value' => $model->id_unit_kerja, // selection
					   'data' => array(''=>'Semua') + CHtml::listData(UnitKerja::model()->findAll(),'id_unit_kerja','nama_unit_kerja')
					));
				?>
				<?php echo $form->error($model,'id_unit_kerja'); ?>
			</div>
			<br>

			<div class="row">
				<?php echo $form->labelEx($model,'id_satuan_kerja'); ?>
				<?php
					$this->widget('ext.chosen.Chosen',array(
					   'name' => 'Pegawai[id_satuan_kerja]', // input name
					   'value' => $model->id_satuan_kerja, // selection
					   'data' => array(''=>'Semua') + CHtml::listData(SatuanKerja::model()->findAll(),'id_satuan_kerja','nama_satuan_kerja')
					));
				?>
				<?php echo $form->error($model,'id_satuan_kerja'); ?>
			</div>
			<br>

			<div class="row">
				<?php echo $form->labelEx($model,'lokasi_kerja'); ?>
				<?php
					$this->widget('ext.chosen.Chosen',array(
					   'name' => 'Pegawai[lokasi_kerja]', // input name
					   'value' => $model->lokasi_kerja, // selection
					   'data' => array(''=>'Semua') + CHtml::listData(LokasiKerja::model()->findAll(),'id_lokasi_kerja','lokasi_kerja')
					));
				?>
				<?php echo $form->error($model,'lokasi_kerja'); ?>
			</div>
			<br>

			<div class="row">
				<?php echo $form->labelEx($model,'nomor_sk_jabatan'); ?>
				<?php echo $form->textField($model,'nomor_sk_jabatan',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'nomor_sk_jabatan'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'tanggal_sk_jabatan'); ?>
				<?php echo $form->dateField($model,'tanggal_sk_jabatan',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tanggal_sk_jabatan'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'tanggal_mulai_jabatan'); ?>
				<?php echo $form->dateField($model,'tanggal_mulai_jabatan',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tanggal_mulai_jabatan'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'tanggal_selesai_jabatan'); ?>
				<?php echo $form->dateField($model,'tanggal_selesai_jabatan',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tanggal_selesai_jabatan'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'id_eselon'); ?>
				<?php
					$this->widget('ext.chosen.Chosen',array(
					   'name' => 'Pegawai[id_eselon]', // input name
					   'value' => $model->id_eselon, // selection
					   'data' => array(''=>'Semua') + CHtml::listData(Eselon::model()->findAll(),'id_eselon','nama_eselon')
					));
				?>
				<?php echo $form->error($model,'id_eselon'); ?>
			</div>
			<br>

			<div class="row">
				<?php echo $form->labelEx($model,'tmt_eselon'); ?>
				<?php echo $form->textField($model,'tmt_eselon',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
				<?php echo $form->error($model,'tmt_eselon'); ?>
			</div>
		</div>
		<div class="tab-pane fade" id="dtfoto">
			<div class="row">
				<?php echo $form->labelEx($model,'foto'); ?>
				<? $this->widget('ext.EAjaxUpload.EAjaxUpload',
				array(
				    'id'=>'uploadFile',
				    'config'=>array(
				           'action'=>Yii::app()->createUrl('cms_pegawai/add_gambar'),
				           'allowedExtensions'=>array("jpg","png"),
				           'sizeLimit'=>5*1024*1024,// maximum file size in bytes
				           'onComplete'=>"js:function(id, fileName, responseJSON){ 
				           		$('#Pegawai_foto').val(responseJSON['filename']); 
				           		$('#uploadedImage').attr('src', responseJSON['url']);
				           }",
				           'messages'=>array(
														'typeError'=>"{file} has invalid extension. Only {extensions} are allowed.",
														'sizeError'=>"{file} is too large, maximum file size is {sizeLimit}.",
														'minSizeError'=>"{file} is too small, minimum file size is {minSizeLimit}.",
														'emptyError'=>"{file} is empty, please select files again without it.",
														'onLeave'=>"The files are being uploaded, if you leave now the upload will be cancelled."
				                            ),
				           'showMessage'=>"js:function(message){ alert(message); }"
				          )
				)); ?>

				<?php
					$foto = !empty($model->foto) ? Yii::app()->baseUrl.'/media/pegawai/'.$model->foto : '';
				?>
				<img id="uploadedImage" src="<?php echo $foto; ?>">
				<?php echo $form->textField($model,'foto', array('readonly' => true)); ?>
				<?php echo $form->error($model,'foto'); ?>
			</div>

		</div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>