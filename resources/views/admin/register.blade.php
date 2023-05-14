@include('admin.partials._header')
<!-- Page Wrapper -->
<div id="wrapper">

    @include('admin.partials._navbar')


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('admin.partials._topbar')

            {{-- handle success --}}
            

            <!-- Begin Page Content -->
            <div class="container-fluid">
                @include('admin.partials._notif')
                <!-- Page Heading -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-center text-primary">Tambah User Admin</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{route('register.store')}}" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input type="email" class="form-control" id="Email" name="email"
                                                placeholder="Masukan Email Admin">
                                        </div>
                                    </div>

                                    {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Username">Username</label>
                                            <input type="text" class="form-control" id="Username" name="username"
                                                placeholder="Masukan Username Admin">
                                        </div>
                                    </div> --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Password">Password</label>
                                            <input type="password" class="form-control" id="Password"
                                                name="password" placeholder="Masukan Password Admin">
                                        </div>
                                    </div>

                                    {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Confirm Password">Confirm Password</label>
                                            <input type="password" class="form-control" id="Confirm Password"
                                                name="confirm_password" placeholder="Masukan Confirm Password Admin">
                                        </div>
                                    </div> --}}
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
