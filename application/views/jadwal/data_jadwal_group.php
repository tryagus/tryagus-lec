            
        <?php $this->load->view('layout/header');?>
        <?php $this->load->view('layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Jadwal Group</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-calendar icon-menu" aria-hidden="true"></i> Jadwal Group
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->   

                <ul class="nav nav-tabs">
                    <li class="active"><a href="<?php echo base_url() ?>jadwal/data_group">Group</a></li>
                    <li><a href="<?php echo base_url() ?>jadwal/data_jadwal_private">Private</a></li>
                </ul>
                <br>

                <!-- <a href="<?php echo base_url() ?>jadwal/input_jadwal_group/<?php echo $id_kelas ?>" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Jadwal</a> &nbsp -->
                
                <!-- <a href="<?php echo base_url() ?>jadwal/hapus_jadwal_group/<?php echo $id_kelas ?>" class="btn btn btn-danger">Hapus Jadwal</a> -->

                &nbsp
                <a href="<?php echo base_url() ?>jadwal/cari_siswa/<?php echo $id_kelas ?>" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Siswa</a> 

                <div><br><br></div> 

                <table class="table table-striped" width="100%">                      
                    <tbody> 

                        <tr>
                            <td width="400px" class="space_jadwal"><b>Nama Group</b></td>
                            <td>:</td>
                            <td><?php 
                                $no = 1;
                                if (!empty($kelas)):
                                $jumlah = count($kelas) - 1;
                                foreach ($kelas as $key => $value) {?>

                                <?php 
                                    echo $value['nama_kelas'];
                                    if ( $key != $jumlah )
                                        echo ",";
                                ?>
                                <?php }
                                endif;
                                ?>    
                            </td>                    
                        </tr>

                        <tr>
                            <td width="400px" class="space_jadwal"><b>Hari</b></td>
                            <td>:</td>
                            <td><?php 
                                $no = 1;
                                if (!empty($jadwal)):
                                $jumlah = count($jadwal) - 1;
                                foreach ($jadwal as $key => $value) {?>

                                <?php 
                                    echo $value['hari'];
                                    if ( $key != $jumlah )
                                        echo ",";
                                ?>
                                <?php }
                                endif;
                                ?>    
                            </td>                    
                        </tr>
                        <tr>
                            <td width="400px" class="space_jadwal"><b>Jam</b></td>
                            <td>:</td>
                            <td>
                                <?php 
                                $no = 1;
                                if (!empty($jadwal)):?>

                                <?php echo $jadwal[0]['jam'];
                                endif;
                                ?>    
                            </td>                    
                        </tr>
                         <tr>
                            <td width="400px" class="space_jadwal"><b>Target Level</b></td>
                            <td>:</td>
                            <td>
                                <?php 
                                $no = 1;
                                if (!empty($jadwal)):?>

                                <?php echo $jadwal[0]['target_level'];
                                endif;
                                ?>    
                            </td>                    
                        </tr>
                        <tr>
                            <td width="400px" class="space_jadwal"><b>Pengajar</b></td>
                            <td>:</td>
                            <td>
                                <?php 
                                $no = 1;
                                if (!empty($siswa)):?>

                                <?php echo $siswa[0]['nama_pengajar'];
                                endif;
                                ?>  
                            </td>                    
                        </tr>             

                    </tbody>
                </table>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>                                
                                <th>No</th>
                                <th>Nama</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>                       

                        <?php 
                            $no = 1;
                            if (!empty($siswa)):
                            foreach ($siswa as $key => $value) {?>    
                            <tr>
                                <td width="40px"><?php echo $no++?></td>
                                <td><?php echo $value['nama_siswa'] ?></td>
                                <td><?php echo $value['status'] ?></td>
                                <td>
                                    <a href="<?php echo base_url();?>jadwal/rubah_siswa/<?php echo $value['id_anggota'] ?>" class="btn  btn-sm btn-warning">Ubah</a>&nbsp&nbsp
                                    <a href="<?php echo base_url();?>jadwal/hapus_siswa/<?php echo $value['id_anggota'] ?>" class="btn btn-sm btn-danger">Hapus</a> 
                                </td>                                    
                            </tr>                                                                  

                        <?php }
                            endif;
                        ?> 

                        </tbody>
                    </table>

                    <a href="<?php echo base_url() ?>jadwal/data_group/" class="btn btn-default">Kembali</a>&nbsp

                </div>              

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
