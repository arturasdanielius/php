<?php
App\App::view('top', ['title' => $title]);
?>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <div class="card m-4">
                <div class="card-header">
                    <h2>Naujas vartotojas / New User</h2>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>users/store" method="post">
                        <div class="form-group">
                            <label>Vardas / Name</label>
                            <input type="text" class="form-control" name="vardas" required>
                        </div>
                        <div class="form-group">
                            <label>Pavardė / Surname</label>
                            <input type="text" class="form-control" name="pavarde" required>
                        </div>
                        <div class="form-group">
                            <label>Asmens kodas / Personal id</label>
                            <input type="text" class="form-control" name="ak" required>
                        </div>
                        <div class="form-group">
                            <label>IBAN</label>
                            <input type="text" class="form-control" name="iban" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="likutis" value="0" hidden>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" hidden>
                            <label class="form-check-label" for="exampleCheck1" hidden>Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Sukurti / Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?=
App\App::view('bottom');