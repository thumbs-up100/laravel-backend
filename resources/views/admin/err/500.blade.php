@include('admin.header')
<div class="page">
    <div class="container-fluid">
        <section class="section-md section-transparent">
            <div class="container-fluid">
                <div class="panel p-0">
                    <div class="panel-body section-one-screen section-lg">
                        <canvas class="js-waves"></canvas>
                        <div class="container-fluid">
                            <div class="row row-30 justify-content-center align-items-center">
                                <div class="col-lg-6 col-xl-7">
                                    <div class="text-accent text-center">
                                        <p>5 <span class="mdi-settings text-primary"></span> 0</p>
                                    </div>
                                    <h2 class="text-center mt-3 text-white-50">Internal Server Error.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('admin.js')
</div>
</body>
</html>
