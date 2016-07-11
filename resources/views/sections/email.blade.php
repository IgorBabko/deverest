<section class="Email mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar"
id="header1-73" style="background-image: url('../img/002.jpg');">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">
        <div class="Email__overlay mbr-overlay"></div>
        <div class="mbr-box__container mbr-section__container container">
            <h2>Get in touch</h2>
            <div class="row">
                <form action="/email" method="POST">
                    {!! csrf_field() !!}
                    <div class="col-xs-12 col-lg-6">
                        <label for="name" class="Label">Name:</label>
                        <input type="text" id="name" class="Input">
                    </div>
                    <div class="col-xs-12 col-lg-6">
                        <label for="email" class="Label">Email:</label>
                        <input type="email" id="email" class="Input">
                    </div>
                    <div class="col-xs-12">
                        <label for="subject" class="Label">Subject:</label>
                        <input type="text" id="subject" class="Input">
                    </div>
                    <div class="col-xs-12">
                        <label for="message" class="Label">Message:</label>
                        <textarea class="Textarea" id="message"></textarea>
                    </div>
                    <div class="col-xs-12">
                        <button class="Button Button__email pull-right">Send</button> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
