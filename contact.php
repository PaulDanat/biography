<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
    <div class="col-md-12" id="nav">
        <div class="col-md-6">
            <font id="name"><b>My Bio</b></font>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-1">
            <p class="nav"><a href="home.php"><b> Home</b></a></p>
        </div>
        <div class="col-md-1">
            <p class="nav"><a href="contact.php"><b> Contact</b></a></p>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="col-md-12">
        <div class="col-md-4" class="mapouter">
            <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=wootlab&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                    scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2torrentz.net"></a>
            </div>
        </div>
        <div class="col-md-8">
            <p id="contact"><b> Contact Form </b></p>
            <div class="container">
                <form>
                    <label for="name">Name</label>
                    <input type="text" id="aname" name="name" placeholder="Your name.."><br>

                    <label for="ename">Email</label>
                    <input type="email" id="ename" name="email" placeholder="jonsnow@example.com"><br>

                    <label for="country">Country</label><br>
                    <select id="country" name="country">
                        <option value="igeria">Nigeria</option>
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>

                    <label for="message">Message</label>
                    <textarea id="subject" name="subject" placeholder="Write something.."
                        style="height:238px"></textarea><br>

                    <button id="green" onclick="send()">ENTER</button>
                    <script>
                        function send() {
                            alert("Message has been delivered.");
                        }
                    </script>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12" id="foot">
        <div class="col-md-6">
            <p id="rights">
                @ 2020 MY BIO. ALL RIGHTS RESERVED.
            </p>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-2">
            <p id="icon">
                <a href="https://www.Twitter'.com/">
                    <img alt="twitter" src="media/twitter.png" width="40px" height="40px">
                </a> &nbsp;
                <a href="https://www.Facebook'.com/">
                    <img alt="Facebook" src="media/face.png" width="40px" height="40px">
                </a> &nbsp;
                <a href="https://www.Linked'.com/">
                    <img alt="Linked" src="media/linked.png" width="40px" height="40px">
                </a> &nbsp;
                <a href="https://www.Mail'.com/">
                    <img alt="Mail" src="media/mail.png" width="40px" height="40px">
                </a>
            </p>
        </div>
    </div>
</body>

</php>