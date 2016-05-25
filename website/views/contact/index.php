<?php require('website/views/shared/header.php'); ?>

    <div class="contact">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="home"><b>TRANG CHỦ</b></a></li>
                <li class="active">Liên hệ</li>
            </ol>
            <!---start-contact---->
            <h3>Contact Us</h3>
            <div class="section group">
                <div class="col-md-6 span_1_of_3">
                    <section class="contact-infos">
                        <h4 class="title custom-font text-black">
                            Địa chỉ
                        </h4>
                        <address>
                            <p><i class="fa fa-home pr-10"></i> Address:<?php echo  $contactinfo['Address']?></p>
                            <br>
                            <p><i class="fa fa-globe pr-10"></i> <?php echo  $contactinfo['Country']?></p>
                        </address>
                    </section>
                    <section class="contact-infos">
                        <h4 class="title custom-font text-black">
                            Giờ mở cửa
                        </h4>
                        <p>
                           + 8am to 9 pm
                            <br>
                        </p>
                    </section>

                    <section class="contact-infos">
                        <h4>
                            Điện thoại
                        </h4>
                        <p>
                            <i class="icon-phone"></i>
                        <p><i class="fa fa-mobile pr-10"></i>  Mobile : <?php echo  $contactinfo['Mobile']?></p> <br>
                        </p>

                        <p>
                            <i class="icon-phone"></i>
                        <p><i class="fa fa-phone pr-10"></i> Phone : <?php echo  $contactinfo['Phone']?></p>
                        </p>

                    </section>
                    <section class="contact-infos">
                        <h4 class="title custom-font text-black">
                            Social contact
                        </h4>
                        <p><i class="fa fa-envelope pr-10"></i> Email : <a href="javascript:;"><?php echo  $contactinfo['Email']?></a></p>
                        <br>
                        <p><i class="fa fa-facebook pr-10"></i>  Facebook : <a href="javascript:;"><?php echo  $contactinfo['Facebook']?></a></p>
                        <br>
                        <p><i class="fa fa-envelope pr-10"></i> Zalo : <a href="javascript:;"><?php echo  $contactinfo['Zalo']?></a></p>
                        <br>
                        <p><i class="fa fa-skype pr-10"></i> Skype :<a href="javascript:;"><?php echo  $contactinfo['Skype']?></a></p>
                    </section>
                </div>
                <div class="col-md-6 span_2_of_3">
                    <div class="contact-form">
                        <form id="userForm" method="post" action="index.php?controller=contact&amp;action=index" role="form">
                            <div>
                                <span><label>NAME</label></span>
                                <span><input name="userName" type="text" class="textbox"></span>
                            </div>
                            <div>
                                <span><label>E-MAIL</label></span>
                                <span><input name="userEmail" type="text" class="textbox"></span>
                            </div>
                            <div>
                                <span><label>MOBILE</label></span>
                                <span><input name="userPhone" type="text" class="textbox"></span>
                            </div>
                            <div>
                                <span><label>SUBJECT</label></span>
                                <span><textarea name="userMsg"> </textarea></span>
                            </div>
                            <div>
                                <span><input type="submit" class="mybutton" value="Submit"></span>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--google map start-->
<!--    <div class="contact-map">
        <div class="map">
            <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed">

            </iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:0.85em">View Larger Map</a></small>
        </div>
    </div>-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false"></script>
    <div class="contact-map">
        <div id="map-canvas" style="width: 100%; height: 400px">
        </div>
    </div>

     <script >
    //google map
    function initialize() {
        var myLatlng = new google.maps.LatLng(20.9847521, 105.7928628);
        var mapOptions = {
            zoom: 18,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Contact'
        }
                                           );
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php require('website/views/shared/footer.php'); ?>