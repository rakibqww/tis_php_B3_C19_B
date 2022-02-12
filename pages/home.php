<?php include 'header.php' ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header"><h3 class="text-danger">DASHBOARD</h3> Prime Number</div>
                    <div class="card-body">
<!--                        --><?php //session_start(); echo 'User ID'. $_SESSION['id'];?>
<!--                        <h1>--><?php //session_start(); echo $_SESSION['name']; ?><!--</h1>-->
                        <?php if (isset($message)){ ?>
                            <h2 class="text-center font-weight-bold text-success"><?php echo $message; ?></h2>
                        <?php } ?>
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Enter Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="given_number" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label">Result</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo isset($result) ? $result : '';?>" readonly class="form-control"/>
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" name="prime_btn" value="Submit"/>
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
