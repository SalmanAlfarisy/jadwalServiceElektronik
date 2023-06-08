 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="mt-5">Dashboard</h1>
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content col-10 mx-sm-auto">
         <div class="card card-primary ">
             <div class="card-header">
                 <h3 class="card-title">DATA PARA USER</h3>
             </div>
             <div class="card-body">

                 <?= $this->session->flashdata('message') ?>


                 <div class="table-responsive">
                     <table id="example1" class="table table-bordered table-striped table-sm table-hover table-head-fixed text-nowrap">
                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>Nama User</th>
                                 <th>Email</th>
                                 <th>Username</th>
                                 <th>Sudah Aktif</th>
                                 <th>Aksi</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php if (empty($users)) : ?>
                                 <tr>
                                     <td colspan="6">
                                         <h1 class="text-center">Data Masih Kosong!</h1>
                                     </td>
                                 </tr>
                             <?php endif; ?>


                             <?php if (!empty($users)) : ?>
                                 <?php $no = 1; ?>
                                 <?php foreach ($users as $data) : ?>
                                     <tr>
                                         <td><?= $no++ ?></td>
                                         <td><?= $data['Nama'] ?></td>
                                         <td><?= $data['Email'] ?></td>
                                         <td><?= $data['Username'] ?></td>
                                         <td class="text-center">


                                             <?php if (check_access($data['ID_User']) == 1) : ?>
                                                 <p>Aktif</p>
                                             <?php else : ?>
                                                 <p>Tidak Aktif</p>
                                             <?php endif; ?>
                                         </td>
                                         <td>
                                             <a href="<?= base_url() . 'Admin_controller/halamanUpdate/' . $data['ID_User'] ?>" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-edit"></i></a>

                                             <a href="<?= base_url() . 'Admin_controller/hapusUser/' . $data['ID_User'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus')" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
                                         </td>
                                     </tr>
                                 <?php endforeach; ?>
                             <?php endif; ?>

                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->