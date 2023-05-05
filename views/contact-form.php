<section>

    <h2 class="text-center my-4">Contact us</h2>
    <div class="row justify-content-center">
   
        <div class="col-md-8">
            <form action="/inisev/contact" method="POST">
                
                <div class="row my-3">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="">Your name</label>
                            <?php if(isset($data->errors) && isset($data->errors['name'])) {?>
                                <div class="bg-danger text-white p-2 my-3 rounded">
                                    <?php echo $data->errors['name']; ?>
                                </div>
                            <?php } ?>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="">Your email</label>
                            <?php if(isset($data->errors) && isset($data->errors['email'])) {?>
                                <div class="bg-danger text-white p-2 my-3 rounded">
                                    <?php echo $data->errors['email']; ?>
                                </div>
                            <?php } ?>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>

                </div>

                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="subject" class="">Subject</label>
                            <?php if(isset($data->errors) && isset($data->errors['subject'])) {?>
                                <div class="bg-danger text-white p-2 my-3 rounded">
                                    <?php echo $data->errors['subject']; ?>
                                </div>
                            <?php } ?>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                    </div>
                </div>
                

                
                <div class="row my-3">

                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="message">Your message</label>
                            <?php if(isset($data->errors) && isset($data->errors['message'])) {?>
                                <div class="bg-danger text-white p-2 my-3 rounded">
                                    <?php echo $data->errors['message']; ?>
                                </div>
                            <?php } ?>
                            <textarea type="text" id="message" name="message" rows="4" class="form-control"></textarea>
                        </div>

                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary my-2">Submit</button>

            </form>

        </div>

    </div>

</section>
