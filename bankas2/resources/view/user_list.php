<?php
App\App::view('top', ['title' => $title]);
?>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <div class="card m-4">
                <div class="card-header">
                    <h2>Vartotojų sąrašas / Users list</h2>
                </div>
                <div class="card-body">
                   
                </div>
            </div>
        </div>
    </div>
</div>

<?=
App\App::view('bottom');