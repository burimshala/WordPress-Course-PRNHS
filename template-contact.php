<?php
/*Template Name:Contact*/
get_header();
?>
    <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span8">
                <h4>Contact Form</h4>
                <div class="status alert alert-success" style="display: none"></div>

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="row-fluid">
                        <div class="span5">
                            <label>First Name</label>
                            <input type="text" class="input-block-level" required="required" placeholder="Your First Name">
                            <label>Last Name</label>
                            <input type="text" class="input-block-level" required="required" placeholder="Your Last Name">
                            <label>Email Address</label>
                            <input type="text" class="input-block-level" required="required" placeholder="Your email address">
                        </div>
                        <div class="span7">
                            <label>Message</label>
                            <textarea name="message" id="message" required="required" class="input-block-level" rows="8"></textarea>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary btn-large pull-right">Send Message</button>
                    <p> </p>

                </form>
            </div>

            <div class="span3">
                <h4>Our Address</h4>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <p>
                    <i class="icon-map-marker pull-left"></i> 1209 Willow Oaks Lane, New York<br>
                    Lafayette, 1212,  United States
                </p>
                <p>
                    <i class="icon-envelope"></i> &nbsp;email@example.com
                </p>
                <p>
                    <i class="icon-phone"></i> &nbsp;+123 45 67 89
                </p>
                <p>
                    <i class="icon-globe"></i> &nbsp;http://www.shapebootstrap.net
                </p>
            </div>

        </div>

    </section>
<?php get_footer(); ?>