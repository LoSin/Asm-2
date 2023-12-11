
<form class="form_class" action="#" method="post">
    <div class="form_div">
        <label>Login:</label>
        <input class="field_class" name="login_txt" type="text" placeholder="Input Account" autofocus>
        <label>Password:</label>
        <input id="pass" class="field_class" name="password_txt" type="password" placeholder="Input Password">
        <button class="submit_class" type="submit" form="login_form" onclick="return validarLogin()">Login</button>
    </div>

    <div class="info_div">
        <p> New ? <a href="index.php?manage=registration">Registration</a></p>
    </div>
</form>
