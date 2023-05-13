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
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-center text-primary">Tambah Data Artikel</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Judul">Judul</label>
                                            <input type="text" class="form-control" id="Judul"
                                                placeholder="Masukan Judul">
                                        </div>
                                        <label for="" class="">File</label>
                                        <div class="input-group mb-3 ">
                                            
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                    aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Deskripsi">Deskripsi</label>
                                            <input type="text" class="form-control" id="Deskripsi"
                                                placeholder="Masukan Deskripsi">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>

                            
                        </form>
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
