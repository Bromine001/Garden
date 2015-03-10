<form action="register.php" method="post">
    <fieldset>
        <div class="login">
            <input autofocus class="form-control" name="username" placeholder="New Username" type="text"/>
        </div>
        <div class="login">
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="login">
            <input class="form-control" name="confirmation" placeholder="Confirm password" type="password"/>
        </div>
        <div class="login">
            <input class="form-control" name="email" placeholder="Email address" type="text"/>
        </div>
        <div class="login">
            
            <input class="form-control" name="secret" placeholder="Enter secret code here" type="text"/>
        </div>
        
        <!--<div class="login">
            <input class="form-control" name="climactic zone" placeholder="Climactic zone" type="number"/>
        </div>
       
        <div>
            <a href= "http://planthardiness.ars.usda.gov/PHZMWeb/InteractiveMap.aspx">Find your USDA Climactic zone.</a>
<!--include a wiget for this? I dunno. People ought to know this without looking it up.-->
        <!--</div>-->
        <div class="login">
            <button type="submit" class="btn btn-default">Register</button>
        </div>
    </fieldset>
</form>
<div class= 'message'>
    <p>the code is s e c r e t with no spaces.</p>
    <p>or <a href="login.php">log in</a> if you already have an account.</p>
</div>
