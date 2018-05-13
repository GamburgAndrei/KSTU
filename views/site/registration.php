<?php

?>



<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://bootstraptema.ru/snippets/form/2017/recaptcha/custom.css' rel='stylesheet' type='text/css'>

<body>

<div class="container">

    <div class="row">

        <div class="col-lg-8 col-lg-offset-2">



            <p class="lead" align="center">Заполните поля, чтобы зарегистрироваться</p>


            <form id="contact-form" method="post" action="contact.php" role="form">

                <div class="messages"></div>

                <div class="controls">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_name">Имя *</label>
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Имя *" required="required" data-error="Firstname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_lastname">Email *</label>
                                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Email *" required="required" data-error="Lastname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_name">Фамилия *</label>
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Фамилия *" required="required" data-error="Firstname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_lastname">Пароль *</label>
                                <input id="form_lastname" type="password" name="surname" class="form-control" placeholder="Пароль *" required="required" data-error="Lastname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>



                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_email">Отчество *</label>
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Отчество *" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_phone">Пароль еще раз</label>
                                <input id="form_phone" type="password" name="phone" class="form-control" placeholder="Пароль еще раз">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>






                    <div class="col-md-12">
                        <div class="form-group">
                            <!-- Replace data-sitekey with your own one, generated at https://www.google.com/recaptcha/admin -->
                            <div class="g-recaptcha" data-sitekey="6Lfq0FgUAAAAALdIDD1wrnjHB3eaSV9J9N1mBBQj"></div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <input type="submit" class="btn btn-info" value="Зарегистрироваться">
                    </div>

                </div>

        </div>

        </form>

    </div><!-- /.col-lg-8 col-lg-offset-2 -->

</div> <!-- /.row-->

</div> <!-- /.container-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="http://bootstraptema.ru/snippets/form/2017/recaptcha/validator.js"></script>
<script src="http://bootstraptema.ru/snippets/form/2017/recaptcha/contact.js"></script>
</body>
</html>
