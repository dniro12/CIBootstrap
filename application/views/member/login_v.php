 <div class="modal show" role="dialog">
        <div class="modal-body">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Log in</h3>
                        <p>Please log in using your credentials</p>
                    </div>
                    <div class="modal-body">
                        <?php
                        $attributes = array(
                            'class' => 'form-signin',
                            'id' => 'auth_login');
                        ?>
                        <?php echo validation_errors(); ?> 
                        <?php echo form_open('index.php/auth/login', $attributes); ?>
                        <fieldset>
                            <!-- Text input-->  
                            <div class="control-group">
                                <div class="controls">
                                    <input id="name" name="email" type="text" placeholder="Email" class="form-control">
                                   
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <div class="controls">
                                    <input id="password" name="password" type="password" placeholder="Password" class="form-control">

                                </div>
                            </div>

                            <!-- Button -->
                            <div class="control-group">
                                <label class="control-label" for="submit"></label>
                                <div class="controls">
                                    <button id="submit" name="submit" class="btn btn-lg btn-primary btn-block">Login</button>
                                </div>
                            </div>

                        </fieldset>
                        </form>
                    </div>
                    <div class="modal-footer">
                        &copy; <?php echo date('Y'); ?> <?php echo 'rename me'; ?>
                    </div>
                </div>

            </div>
        </div>

    </div>
