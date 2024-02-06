<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
</head>

<body>
    <h1>Send Email</h1>
    Sender Name
    <input type="text" id="sendername"> <br>
    To (Email)
    <input type="text" id="to"> <br>
    Subject
    <input type="text" id="subject"> <br>
    Reply To (Email)
    <input type="text" id="replyto"> <br>
    Message <br>
    <textarea id="message" cols="40" rows="8"></textarea> <br>
    <button onclick="sendMail();">Send</button>

    <script>
        function sendMail() {
            (function() {
                emailjs.init("4pPclqwJ45-598KtU"); // Account Public Key
            })();

            var params = {
                sendername: document.querySelector("#sendername").value,
                to: document.querySelector("#to").value,
                subject: document.querySelector("#subject").value,
                replyto: document.querySelector("#replyto").value,
                message: document.querySelector("#message").value,
            };

            var serviceID = "service_w6x6z1h"; // Email Service ID
            var templateID = "template_i7sptec"; // Email Template ID

            emailjs.send(serviceID, templateID, params)
                .then(res => {
                    alert("Email sent successfully!!")
                })
                .catch();
        }
    </script>
</body>

</html>