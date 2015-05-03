<!doctype html>
<html ng-app="App">
<head>
  <meta charset="utf8">
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no,maximum-scale=1">

  <title><?php echo $_SESSION['site_title']; ?></title>
  

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bs-custom/bootstrap.min.css" />
  <!-- Bootstrap responsive -->
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bs-custom/bootstrap-responsive.min.css" />

  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />


  <style type="text/css">

/* GridView */

li.page, li.next, li.previous {margin:0}

.grid-view table.items
{
  border-collapse: collapse;
  width: 100%;
  border: 0 none !important;
}

.grid-view table.items th
{
  border-bottom:1px solid #ddd;
  background:transparent;
  -moz-background-clip:border;
  -moz-background-inline-policy:continuous;
  -moz-background-origin:padding;
}

.grid-view table.items th, .grid-view table.items td
{
  font-size: 0.9em;
  padding: 0.3em;
}

.grid-view table.items th a
{
  color: #000;
  font-weight: bold;
  text-decoration: none;
}

.grid-view table.items th
{
  color: #000;
  font-weight: bold;
  text-decoration: none;
}

.grid-view table.items th a:hover
{
  color: #000;
}

.grid-view table.items th a.asc
{
  background:url(up.gif) right center no-repeat;
  padding-right: 10px;
}

.grid-view table.items th a.desc
{
  background:url(down.gif) right center no-repeat;
  padding-right: 10px;
}

/*.grid-view table.items tr.even*/
tr.even
{
  background: #fff;
}

/*.grid-view table.items tr.odd*/
tr.odd
{
  background: #f3f3f3;
}

.grid-view table.items tr.selected
{
  background:#9eec55;
}

.grid-view table.items tr:hover td, .grid-view table.items tr:hover td a
{
  background:#e58616;
  color:#fff;
}


/*.grid-view .link-column img
{
    border: 0;
}*/

/*.grid-view .button-column img
{
    border: 0;
}*/


.grid-view .button-column
{
  text-align: center;
  width: 60px;
}

.grid-view .checkbox-column
{
  width: 15px;
}

/*.grid-view .summary*/
div.summary
{
  margin: 0 0 5px 0;
  text-align: right;
  font-size:0.8em
}

/*.grid-view .pager*/
div.pager
{
  margin: 5px 0 0 0;
  text-align: center;
  padding:0;
  height:30px;
  float: left;
}

.grid-view .empty
{
  font-style: italic;
}

.grid-view .filters input,
.grid-view .filters select
{
  width: 100%;
  border: 1px solid #ccc;
  -moz-border-radius: 2px; -webkit-border-radius: 2px; border-radius: 2px;
}


/* Styles for ClinkPager */
ul.yiiPager
{
  font-size:.9em;
  border:0;
  margin:0;
  padding:0;
  line-height:100%;
  display:inline;
}

ul.yiiPager li
{
  display:inline;
}

ul.yiiPager a:link,
ul.yiiPager a:visited
{
  border:solid 1px #ccc;
  color:inherit;
  font-weight:bold;
  padding:2px 8px;
  text-decoration:none;
  -moz-border-radius:3px; -webkit-border-radius:3px; border-radius: 3px;
}

ul.yiiPager .page a
{
  font-weight: 600;
}

ul.yiiPager a:hover
{
  background:#e58616;
  color:#fff;
}

ul.yiiPager .selected a
{
  background:#e58616;
  color:#fff;
  font-weight:bold;
}

ul.yiiPager .hidden a
{
  border:1px solid #ccc;
  color:inherit;
}

/**
 * Hide first and last buttons by default.
 */
ul.yiiPager .first,
ul.yiiPager .last
{
  display:none;
}

div.demo_box{
  background: transparent url('images/bg.gif') repeat scroll left top;
  -moz-border-radius: 6px; -webkit-border-radius: 6px; border-radius: 6px;
}

div.grid-view {
  border:1px dotted #333;
  -moz-background-clip:border;
  -moz-background-inline-policy:continuous;
  -moz-background-origin:padding;
  padding:5px;
  background-color: #f1f1f1;
}

.search-form{
  padding: 10px 15px 10px 0px;
  border:1px dotted #333;
  margin-bottom: 20px;
}

.search-form form{
  padding: 5px;
}

.search-form form label{
  font-size: 12px;
}
  .row{
    margin-left: 0px;
  }
  .row input{
    width: 100%;
  }
  .row textarea{
    width: 100%;
  }
  .portlet-content ul{
    list-style: none;
    float: none;
  }
  .portlet-content ul li{
    padding: 5px 15px;
    float: left;
  }
  .portlet-content ul li a{
    color: #fff;
  }
  .portlet-content ul li a:hover{
    color: #fff;
    text-decoration: underline;
  }
  .items input{
    padding: 0px;
  }
  h1{
    font-size: 24px;
    border-bottom: 1px dotted #333;
  }
  .search-button{
    padding: 5px;
    border:1px solid #999;
    position: absolute;
    right: 20px;
    top: 110px;
  }

.dashIcon {
  float:left;
  /*padding-left:4px;width:123px;*/
  border: solid 1px #CCCCCC;  
  background-color:#F9F9F9;
  padding:20px;
  margin-bottom:10px;
  text-align:center;
  min-height: 150px!important;
}

.errorSummary{
  background-color: #ff4c4b;
  color: #fff;
  padding: 5px;
}

.errorSummary ul{
  list-style: square;
}

.errorSummary ul li{
  padding: 1px;
  float: none;
}
</style>

  <!-- jQuery -->
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
  <!-- Bootstrap -->
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>

  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.nicescroll.min.js"></script>

  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/application.min.js"></script>
  
  <script type="text/javascript">
    $(window).load(function() { $("#loading").fadeOut("slow"); })
  </script>

</head>

<body data-layout="fixed">
  <div id="loading"></div>
  <div id="top"> 
    <div class="container-fluid">
      <div class="pull-left">
        <a href="#" id="brand"><span></span><?php echo $_SESSION['site_title']; ?></a>
        <div class="collapse-me">
        </div>
      </div>
      <div class="pull-right">
        <div class="btn-group">
          <a href="#" class="button dropdown-toggle" data-toggle="dropdown"><i class="icon-white icon-user"></i><?php echo Yii::app()->user->nama_lengkap; ?><span class="caret"></span></a>
          <div class="dropdown-menu pull-right">
            <div class="right-details">
              <h6>Logged in as</h6>
              <span class="name"><?php echo Yii::app()->user->nama_lengkap; ?></span>
              <span class="email"><?php echo Yii::app()->user->email; ?></span>
              <ul>
                <li>
                  <a href="<?php echo Yii::app()->baseUrl; ?>/profile">Edit Profil</a>
                </li>
                <li>
                  <a href="<?php echo Yii::app()->baseUrl; ?>/profile">Change Password</a>
                </li>
                <li>
                  <a href="<?php echo Yii::app()->baseUrl; ?>/site/logout">Log Out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="main">
    <div id="navigation" style="width:290px;">
      <div class="search">
      </div>

      <ul class="mainNav" data-open-subnavs="multi" style="width:280px;">
        <li class='active'>
          <a href="<?php echo Yii::app()->baseUrl; ?>/dashboard"><i class="icon-home icon-white"></i><span>Dashboard</span></a>
        </li>

        <li class='active'>
          <a href="#"><i class="icon-th-large icon-white"></i><span>Kepegawaian</span><span class="label">1</span></a>
          <ul class="subnav">
            <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_pegawai"><i class="icon-list"></i> Data Pegawai</a></li>
          </ul>
        </li>

        <li class='active'>
          <a href="#"><i class="icon-th-large icon-white"></i><span>Laporan</span><span class="label">6</span></a>
          <ul class="subnav">
            <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_laporan_pegawai_unit_satuan"><i class="icon-tag"></i> Laporan - Unit Kerja dan Satuan Kerja</a></li>
            <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_laporan_pegawai_penempatan_kerja"><i class="icon-question-sign"></i> Laporan - Penempatan Kerja</a></li>
            <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_laporan_pegawai_ikut_pelatihan"><i class="icon-ok-sign"></i> Laporan - Mengikuti Pelatihan</a></li>
            <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_laporan_pegawai_status_golongan"><i class="icon-eye-open"></i> Laporan - Status dan Golongan</a></li>
            <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_laporan_pegawai_struktural_fungsional"><i class="icon-random"></i> Laporan - Struktural dan Fungsional</a></li>
            <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_laporan_pegawai_urut_kepangkatan"><i class="icon-retweet"></i> Laporan Daftar Urut Kepangkatan</a></li>
          </ul>
        </li>

        <li class='active'>
          <a href="#"><i class="icon-th-large icon-white"></i><span>Master Data</span><span class="label">13</span></a>
          <ul class="subnav">
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_master_status_pegawai"><i class="icon-tag"></i> Status Pegawai</a></li>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_master_unit_kerja"><i class="icon-question-sign"></i> Unit Kerja</a></li>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_master_satuan_kerja"><i class="icon-ok-sign"></i> Satuan Kerja</a></li>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_master_ppk"><i class="icon-eye-open"></i> PPK</a></li>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_master_golongan"><i class="icon-random"></i> Golongan</a></li>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_master_eselon"><i class="icon-retweet"></i> Eselon</a></li>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_master_pelatihan"><i class="icon-folder-open"></i> Pelatihan</a></li>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_master_jabatan"><i class="icon-hdd"></i> Jabatan</a></li>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_master_status_jabatan"><i class="icon-tasks"></i> Status Jabatan</a></li>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_master_penghargaan"><i class="icon-filter"></i> Penghargaan</a></li>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_master_hukuman"><i class="icon-briefcase"></i> Hukuman</a></li>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_master_lokasi_pelatihan"><i class="icon-fullscreen"></i> Lokasi Pelatihan</a></li>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_master_lokasi_kerja"><i class="icon-briefcase"></i> Lokasi Kerja</a></li>
          </ul>
        </li>

        <li class='active'>
          <a href="#"><i class="icon-wrench icon-white"></i><span>Tools</span><span class="label">2</span></a>
          <ul class="subnav">
            <li>
              <a href="<?php echo Yii::app()->baseUrl; ?>/cms_user"><i class="icon-user icon-white"></i><span> Manajemen User</span></a>
            </li>
            <li>
              <a href="<?php echo Yii::app()->baseUrl; ?>/cms_setting"><i class="icon-wrench icon-white"></i><span> Pengaturan</span></a>
            </li>
          </ul>
        </li>

      </ul>

      <div class="status button">
        <div class="status-top">
          <div class="left">
            © <?php echo date('Y'); ?> - <?php echo $_SESSION['site_title']; ?>. <a href="http://gedelumbung.com" target="_blank">DLMBG</a>.
          </div>
        </div>
      </div>
      
    </div>
    <div id="content">

      <div class="container-fluid" id="content-area">
        
        <div class="row-fluid">

          <div class="span12">
            <?php
              $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>'',
              ));
              $this->widget('zii.widgets.CMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'button'),
              ));
              $this->endWidget();
            ?>
            
            <?php echo $content; ?>
          </div>

        </div>
      </div>


    </div>
  </div>
  <script type="text/javascript">
    var baseUrl = "<?php echo Yii::app()->baseUrl; ?>";
  </script>
</body>

</html>