
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact us</title>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cairo:wght@400;500;600;700&family=Lobster&family=Open+Sans:wght@400;700&family=Work+Sans:ital,wght@0,300;0,800;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <!--    <link rel="stylesheet" href="Css/all.min.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="contactt.css" />

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap");

        svg {
            width: 100%;
            overflow: visible;
            position: relative;
            top: -20px;
        }

        .hidden {
            visibility: hidden;
        }

        #base {
            cursor: pointer;
        }
        .navbar-brand{
            font-family: "Lobster";

        }
        .back-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
         //   color: #fff;
         //   background-color: #007bff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            position: absolute;
        //   bottom: 10px;
          //  left: 50%;
           // transform: translateX(-50%);
        }

        .back-btn i {
            margin-right: 10px;
        }
    </style>
</head>

<body>

<main>

    <div class="box">
        <img src="img/contact.svg" alt="">
        <div class="inner-box">
            <div class="heading">
                <h1>Contact Us</h1>
                <p style="font-size: 20px">We will be happy to hear your suggestions and recommendations</p>
            </div>
            <div class="forms-wrap">

                <form action="mail.php" method="post"  class="sign-in-form" id="myForm">
                    <div class="actual-form">
                        <div class="input-wrap">

                            <input type="text" placeholder="Name" minlength="4" class="input-field" id="name" name="name"/>

                        </div>
                        <div class="input-wrap">

                            <input type="email" placeholder="Email" class="input-field" id="email" name="email"/>

                        </div>
                        <div class="input-wrap">

                            <textarea name="message" id="message" placeholder="Type Your Message..." class="input-field"  style="height: 80px"></textarea>

                        </div>

                        <button style="background-color: transparent;border: none" type="submit" name="send">     <svg type="submit"class="sign" name="send" viewBox="200 100 1000 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path id="paperPlaneRoute" d="M563.558,526.618 C638.854,410.19 787.84,243.065 916.53,334.949 1041.712,424.328 858.791,877.927 743.926,856.655 642.241,838.669 699.637,688.664 700,540" stroke="white"  stroke-width="3" style="stroke-dashoffset: 0.001px; stroke-dasharray: 0px, 999999px;"/>
                                <g id="rectSent" clip-path="url(#clipPath)">
                                    <g id="rectSentItems">
                                        <rect id="sentBase" x="460" y="468.5" width="480" height="143" rx="23" fill="#505f75"/>
                                        <text id="txtSent" fill="#06996d" xml:space="preserve" style="white-space: pre" font-family="Roboto" font-size="82" font-weight="bold" letter-spacing="0.025em"><tspan x="637.487" y="568.027">Sent</tspan></text>
                                    </g>
                                </g>

                            </svg>
                        </button>

                    </div>
                </form>
                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


            </div>

            <div class="carousel" id="c">
                <div class="contact-info">

                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <h3 class="em">Address</h3>
                    <p>7wara, Nablus, Palestine</p>
                </div>
                <div class="contact-info">
                    <i class="fa fa-phone" ></i>
                    <h3 class="em">Phone</h3>
                    <p>+970595902520</p>
                </div>
                <div class="contact-info">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <h3 class="em">Email</h3>
                    <p>ayakhmous2003@gmail.com</p>
                </div>
            </div>
            <button  type="submit" style="margin-top: 420px; background: #aea0a0; width: 200px; height: 50px; font-size: 19px; font-family: 'Times New Roman'" class="back-btn">
               <i class="fas fa-arrow-left" style="margin-bottom: 5px; margin-left: 70px"></i>
                <a style="color:#000000" href="http://localhost/f1/filmer/filmer/project/Home/home.php">Back</a>
            </button>
        </div>

    </div>
</main>
<script>
    function goBack() {
        window.history.go(-1) ;
    }
</script>
</body>

</html>