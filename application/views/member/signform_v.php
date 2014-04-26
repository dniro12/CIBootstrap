
<?php echo validation_errors(); ?>
<form class="form-signin" role="form" method="post">

    <fieldset>

        <h2 class="form-signin-heading">Please sign in</h2>

        <!-- Text input-->
        <div class="control-group">
            <div class="controls">
                    <input id="name" name="name" type="text" placeholder="Name" class="form-control"  required autofocus>
            </div>
        </div>


        <!-- Text input-->
        <div class="control-group">
            <div class="controls">
                <input id="name" name="email" type="email" placeholder="Email" class="form-control" required >
            </div>
        </div>

        <!-- Text input-->
        <div class="control-group">
            <div class="controls">
                <input id="textinput" name="password" type="password" placeholder="Password" class="form-control" required>
            </div>
        </div>

        <!-- Button -->
        <div class="control-group">
            <div class="controls">
                <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-block">Signup</button>

            </div>
        </div>

    </fieldset>
</form>