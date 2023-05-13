@include('admin.partials._header')
<!-- Page Wrapper -->
<div id="wrapper">

    @include('admin.partials._navbar')


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('admin.partials._topbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Galeri</h1>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Galeri</h6>
                    </div>
                    <div class="card-body">
                        <a href="{{route('admin.galeri.create')}}" class="btn btn-primary btn-sm mb-3 ">Add Data </a>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nama</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                      
                                        <td>
                                            {{-- membuat edit dan hapus --}}
                                            <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                            {{-- hapus --}}
                                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>



@include('admin.partials.js')
