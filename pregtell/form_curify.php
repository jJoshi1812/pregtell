<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CURIFY</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body>
    <?php
        require('data.php');
    ?>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-12">
                <h1 style="text-align: center"><strong>PREGTELL</strong></h1>

            </div>
            <div class="col-lg-2">

            </div>
        </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <form method="POST" class="form-horizontal">
                            <div class="form-group"><label class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="name"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Age</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="age"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Blood Group</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="blood_group"></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group"><label class="col-sm-2 control-label">Check_up no</label>
                                <div class="col-sm-8"><input type="text" class="form-control"name="check_upno"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Mahila Code</label>

                                <div class="col-sm-10"><input type="text" class="form-control"name="mahila_code"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Weight</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="weight"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Height</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="height"></div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">bmi</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="bmi"></div>
                            </div>


                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">tab_folic_acid</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="tab_folic_acid_no"></div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">tt1</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="tt1_no"></div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Stomach Height</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="stomach_height"></div>
                            </div>


                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Urine Albumin</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="urine_albumin"></div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">DIB</label>
                                <div class="col-sm-8"><input type="text" class="form-control"name="dib_yes"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Body Pain NO</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="body_pain_no"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Body Pain Yes</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="body_pain_yes"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Vomate No</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="vomate_no" ></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Vomate Yes</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="vomate_yes" ></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Fever no</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="fever_no"></div>
                            </div>
                              <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Fever yes</label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="fever_yes"></div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">

                                    <button class="btn btn-primary" type="submit" name="submit">Predict</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>

</html>
