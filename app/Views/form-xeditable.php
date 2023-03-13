<?= $this->include('partials/main') ?>

<head>

    <?= $title_meta ?>

    <!-- Plugins css -->
    <link href="assets/libs/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />

    <?= $this->include('partials/head-css') ?>
</head>

<?= $this->include('partials/body') ?>

    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <?= $this->include('partials/menu') ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                    <?= $page_title ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Inline Example</h4>
                                    <p class="card-title-desc">This library allows you to create editable elements on
                                        your page. It can be used with any engine (bootstrap, jquery-ui, jquery only)
                                        and includes both popup and inline modes. Please try out demo to see how it
                                        works.</p>

                                    <div class="table-responsive">
                                        <table class="table table-striped table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width: 50%;">Inline</th>
                                                    <th>Examples</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Simple Text Field</td>
                                                    <td>
                                                        <a href="javascript: void(0);" id="inline-username" data-type="text" data-pk="1"
                                                            data-title="Enter username">superuser</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Empty text field, required</td>
                                                    <td>
                                                        <a href="javascript: void(0);" id="inline-firstname" data-type="text" data-pk="1"
                                                            data-placement="right" data-placeholder="Required"
                                                            data-title="Enter your firstname"></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Select, local array, custom display</td>
                                                    <td>
                                                        <a href="javascript: void(0);" id="inline-sex" data-type="select" data-pk="1"
                                                            data-value="" data-title="Select sex"></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Combodate</td>
                                                    <td>
                                                        <a href="javascript: void(0);" id="inline-dob" data-type="combodate"
                                                            data-value="2015-09-24" data-format="YYYY-MM-DD"
                                                            data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY"
                                                            data-pk="1" data-title="Select Date of birth"></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Textarea, buttons below. Submit by ctrl+enter</td>
                                                    <td>
                                                        <a href="javascript: void(0);" id="inline-comments" data-type="textarea" data-pk="1"
                                                            data-placeholder="Your comments here..."
                                                            data-title="Enter comments">awesome user!</a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- End Page-content -->

                <?= $this->include('partials/footer') ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

    </div>
    <!-- end container-fluid -->

    <?= $this->include('partials/right-sidebar') ?>

    <!-- JAVASCRIPT -->
    <?= $this->include('partials/vendor-scripts') ?>

    <!-- Plugins js -->
    <script src="assets/libs/moment/moment.js"></script>
    <script src="assets/libs/bootstrap-editable/js/index.js"></script>

    <!-- Init js-->
    <script src="assets/js/pages/form-xeditable.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>