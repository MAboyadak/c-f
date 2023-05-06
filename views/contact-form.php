<section>
    <h2 class="text-center my-4">Contact us</h2>
    <div class="row justify-content-center">
   
        <div class="col-md-8">

            <?php
                if(isset($_SESSION['success'])) { 
            ?>
                <div class="bg-success p-2 my-2 text-white">
                    <?php echo $_SESSION['success'] ; ?>
                </div>
            <?php unset($_SESSION['success']); } ?>

            <?php
                if(isset($_SESSION['error'])) { 
            ?>
                <div class="bg-danger text-white p-2 my-2">
                    <?php echo $_SESSION['error'] ; ?>
                </div>
            <?php unset($_SESSION['error']); } ?>


            <form action="/inisev/contact" method="POST">
                
                <div class="row my-3">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="">Name
                                <?php if(isset($_SESSION['errors']) && isset($_SESSION['errors']['name'])) {?>
                                    <span class="bg-danger text-white px-2 mx-4 fw-bold my-3 rounded">
                                        <?php echo $_SESSION['errors']['name']; ?>
                                    </span>
                                <?php } ?>
                            </label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="">Email 
                                <?php if(isset($_SESSION['errors']) && isset($_SESSION['errors']['email'])) {?>
                                    <span class="bg-danger text-white px-2 mx-4 fw-bold my-3 rounded">
                                        <?php echo $_SESSION['errors']['email']; ?>
                                </span>
                                <?php } ?>
                            </label> 
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>

                </div>

                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="subject" class="">Subject 
                                <?php if(isset($_SESSION['errors']) && isset($_SESSION['errors']['subject'])) {?>
                                    <span class="bg-danger text-white px-2 mx-4 fw-bold my-3 rounded">
                                        <?php echo $_SESSION['errors']['subject']; ?>
                                </span>
                                <?php } ?>
                            </label> 
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                    </div>
                </div>
                

                
                <div class="row my-3">

                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="message">message</label>
                            <label for="message" class="">Message 
                                <?php if(isset($_SESSION['errors']) && isset($_SESSION['errors']['message'])) {?>
                                    <span class="bg-danger text-white px-2 mx-4 fw-bold my-3 rounded">
                                        <?php echo $_SESSION['errors']['message']; ?>
                                </span>
                                <?php } ?>
                            </label> 
                            <textarea type="text" id="message" name="message" rows="4" class="form-control"></textarea>
                        </div>

                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary my-2">Submit</button>

            </form>

        </div>

    </div>

</section>

<?php if(isset($_SESSION['errors'])) unset($_SESSION['errors']);?>