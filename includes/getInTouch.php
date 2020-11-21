<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" /> -->
<section id="getInTouch">
    <div class="text">
        <h2>Get in Touch</h2>
        <p>You need more information? check what other persons are saying about our products and <br /> also To make an appointment or if you have any question to ask our team</p>
    </div>
    <div class="btn">
        <div id="contact">
            <a href="javascript:void(0)">Contact Now</a>
        </div>
        <div id="contactForm">
            <h2>Contact Us</h2>
            <form class="contact-form" action="" name="registration">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">First Name</label>
                            <input type="text" class="form-control" required>
                            <span class="material-input"></span></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Last Name</label>
                            <input type="text" class="form-control" required>
                            <span class="material-input"></span></div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Your Email</label>
                            <input type="email" class="form-control" required>
                            <span class="material-input"></span></div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Your Messge</label>
                            <textarea class="form-control" rows="4"></textarea>
                            <span class="material-input"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-4 text-center">
                        <button class="btn btn-primary btn-raised">
                            Send Message
                        </button>
                    </div>
                </div>
                <span class="close">x</span>
            </form>
        </div>
    </div>
</section>
<div id="overlay"></div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
    $("#contact").on("click", function() {
        $("#contactForm").addClass("active");
        document.getElementById("overlay").style.display = "block";
    });
    $(".close").on("click", function() {
        $("#contactForm").removeClass("active");
        document.getElementById("overlay").style.display = "none";
    });
    $(function() {
        $(".form-control").on("click", function(e) {
            $(".form-group").addClass("is-focus");
            e.stopPropagation()
        });
        $(document).on("click", function(e) {
            if ($(e.target).is(".form-group") === false) {
                $(".form-group").removeClass("is-focus");
            }
        });
    });
</script>