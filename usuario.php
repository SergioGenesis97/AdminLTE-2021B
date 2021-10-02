<?php include './resources/layouts/header.php' ?>

<!-- Contenido -->
<!-- card -->
<div class="card  card-dark">
    <div class="card-header">
        <h3 class="card-title">Default Card Example</h3>
        <div class="card-tools">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="badge badge-primary">Label</span>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        The footer of the card
    </div>
    <!-- /.card-footer -->
</div>
<!-- /.card -->


<!-- ./ Contenido -->

<?php include './resources/layouts/footer.php' ?>