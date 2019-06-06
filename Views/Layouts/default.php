<!doctype html>
<head>
    <meta charset="utf-8">

    <title>AgroVir Homework</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="starter-template.css" rel="stylesheet">

    <style>
        body {
            padding-top: 5rem;
        }
        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Agrovir Homework</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a class="btn btn-success" href="#modalRegisterForm"
                                  data-target = '#modalRegisterForm'
                                  style='text-decoration: none'
                                  data-toggle='modal'>Új partner</a></li>
        </ul>
    </div>
</nav>

<main role="main" class="container">
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="New partner"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Új partner hozzáadása</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form method="post" action="/partner/create">
                    <div class="md-form mb-5">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input type="text" id="orangeForm-name" class="form-control validate" required name="companyName">
                        <label data-error="wrong" data-success="right" for="orangeForm-name">Cégnév</label>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <select class="form-control" required name="companyType">
                            <option value="Nyrt.">Nyrt.</option>
                            <option value="Zrt.">Zrt.</option>
                            <option value="Kft.">Kft.</option>
                            <option value="Bt."> Bt.</option>
                            <option value="EV">Egyéni vállalkozó</option>
                        </select>
                        <label data-error="wrong" data-success="right" for="orangeForm-email"></label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="text" id="orangeForm-pass" class="form-control validate" required name="taxNumber">
                        <label data-error="wrong" data-success="right" for="orangeForm-pass">Adószám</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="text" id="orangeForm-pass" class="form-control validate" required name="companyRegistrationNumber">
                        <label data-error="wrong" data-success="right" for="orangeForm-pass">Cégjegyzék szám</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="text" id="orangeForm-pass" class="form-control validate" required name="location">
                        <label data-error="wrong" data-success="right" for="orangeForm-pass">Város</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="text" id="orangeForm-pass" class="form-control validate" required name="address">
                        <label data-error="wrong" data-success="right" for="orangeForm-pass">Cím</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="text" id="orangeForm-pass" class="form-control validate" required name="bankAccount">
                        <label data-error="wrong" data-success="right" for="orangeForm-pass">Bankszámla szám</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input type="text" id="orangeForm-pass" class="form-control validate" required name="phone">
                        <label data-error="wrong" data-success="right" for="orangeForm-pass">Telefonszám</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <textarea type="text" id="orangeForm-pass" class="form-control validate" name="note"></textarea>
                        <label data-error="wrong" data-success="right" for="orangeForm-pass">Megjegyzés</label>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Mentés</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="starter-template">

        <?php
        echo $content_for_layout;
        ?>

    </div>

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>