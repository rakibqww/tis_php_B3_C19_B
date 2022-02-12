<?php include 'header.php' ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Sum Of Series</div>
                    <div class="card-body">

<!--                        --><?php //session_start(); unset($_SESSION['name']) ?>

                        <?php if (isset($message)){ ?>
                            <h2 class="text-center font-weight-bold text-success"><?php echo $message; ?></h2>
                        <?php } ?>
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">First Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="starting_number" value="<?php echo isset($result['starting_number']) ? $result['starting_number'] : '';?>" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" value="<?php echo isset($result['ending_number']) ? $result['ending_number'] : '';?>" name="ending_number" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" readonly rows="5"><?php echo isset($result['result']) ? $result['result'] : '';?></textarea>
<!--                                    <input type="text" value="--><?php //echo isset($result) ? $result : '';?><!--" readonly class="form-control"/>-->
                                </div>
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3 col-form-label"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-outline-success" name="series_btn" value="Submit"/>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<?php include 'footer.php' ?>
