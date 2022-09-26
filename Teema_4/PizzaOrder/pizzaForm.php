<?php
include_once('header.php');
include_once('pizzaHeader.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-sm">
                <form class="form-horizontal" action="sendPizza.php" method="post">
                    <fieldset>
                        <legend class="text-center">Pizza order</legend>

                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Name</label>
                            <div class="col-md-9">
                                <input id="name" name="name" type="text" placeholder="Your name" class="form-control" required>
                            </div>
                        </div>

                        <!-- Address input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email">Address</label>
                            <div class="col-md-9">
                                <input id="address" name="address" type="text" placeholder="Your address" class="form-control" required>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="phone">Phone</label>
                            <div class="col-md-9">
                                <input id="phone" name="phone" type="phone" placeholder="Your phone" class="form-control" required>
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email">E-mail</label>
                            <div class="col-md-9">
                                <input id="email" name="email" type="text" placeholder="Your email" class="form-control" required>
                            </div>
                        </div>

                        <!-- Pizza type -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="pizza">Pizza type</label>
                            <div class="col-md-9">
                                <select class="form-control" name="pizza">
                                    <option class="hidden" selected disabled>Choose a pizza</option>
                                    <option>Margherita 5.45$</option>
                                    <option>Pepperoni 6.85$</option>
                                    <option>BBQ Chicken 7.99$</option>
                                    <option>Veggie 3.49$</option>
                                </select>
                            </div>
                        </div>

                        <!-- Amount -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="amount">Amount</label>
                            <div class="col-md-9">
                                <input id="amount" name="amount" type="number" placeholder="Amount" class="form-control" required>
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary btn-lg" name="send">Send Message</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include_once('footer.php');
?>