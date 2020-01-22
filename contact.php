<?php include_once 'nav.php';?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/contact-2.css">
  <title>Contact Us</title>
  <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-analytics.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-database.js"></script>
</head>
<body>

<div class="contact-box" style='position:unset; width:90%; margin: 0 auto;'>  
  <br><br><br>
    <center><h1 style="color:#413e66;font-size:30px;font-family:batman, sans-serif;">Get in touch</h1></center><br>
    <form method="post" action="./contact.php" class="contactForm">      
  <input name="name" type="text" class="feedback-input" placeholder="Name" />   
  <input name="email" type="email" class="feedback-input" placeholder="Email" />
  <input name="subject" type="text" class="feedback-input" placeholder="Subject" />
  <textarea name="message" class="feedback-input" style ="min-height:100px;"placeholder="Comment"></textarea>
  <input type="submit"  value="submit" onsubmit="submitForm()" name="submit">
</form>
<br>
    </div>
    <?php include_once 'footer.php';?>
</body>
</html>

<style>
 @font-face {
  font-family: batman;
  src: url(batmfa__.ttf) format('truetype');
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

// jQuery(document).ready(function($) {
//   "use strict";

//   //Contact
//   $("form.contactForm").submit(function() {
//     var f = $(this).find(".form-group"),
//       ferror = false,
//       emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

//     f.children("input").each(function() {
//       // run all inputs

//       var i = $(this); // current input
//       var rule = i.attr("data-rule");

//       if (rule !== undefined) {
//         var ierror = false; // error flag for current input
//         var pos = rule.indexOf(":", 0);
//         if (pos >= 0) {
//           var exp = rule.substr(pos + 1, rule.length);
//           rule = rule.substr(0, pos);
//         } else {
//           rule = rule.substr(pos + 1, rule.length);
//         }

//         switch (rule) {
//           case "required":
//             if (i.val() === "") {
//               ferror = ierror = true;
//             }
//             break;

//           case "minlen":
//             if (i.val().length < parseInt(exp)) {
//               ferror = ierror = true;
//             }
//             break;

//           case "email":
//             if (!emailExp.test(i.val())) {
//               ferror = ierror = true;
//             }
//             break;

//           case "checked":
//             if (!i.is(":checked")) {
//               ferror = ierror = true;
//             }
//             break;

//           case "regexp":
//             exp = new RegExp(exp);
//             if (!exp.test(i.val())) {
//               ferror = ierror = true;
//             }
//             break;
//         }
//         i.next(".validation")
//           .html(
//             ierror
//               ? i.attr("data-msg") !== undefined
//                 ? i.attr("data-msg")
//                 : "wrong Input"
//               : ""
//           )
//           .show("blind");
//       }
//     });
//     f.children("textarea").each(function() {
//       // run all inputs

//       var i = $(this); // current input
//       var rule = i.attr("data-rule");

//       if (rule !== undefined) {
//         var ierror = false; // error flag for current input
//         var pos = rule.indexOf(":", 0);
//         if (pos >= 0) {
//           var exp = rule.substr(pos + 1, rule.length);
//           rule = rule.substr(0, pos);
//         } else {
//           rule = rule.substr(pos + 1, rule.length);
//         }

//         switch (rule) {
//           case "required":
//             if (i.val() === "") {
//               ferror = ierror = true;
//             }
//             break;

//           case "minlen":
//             if (i.val().length < parseInt(exp)) {
//               ferror = ierror = true;
//             }
//             break;
//         }
//         i.next(".validation")
//           .html(
//             ierror
//               ? i.attr("data-msg") != undefined
//                 ? i.attr("data-msg")
//                 : "wrong Input"
//               : ""
//           )
//           .show("blind");
//       }
//     });
//     if (ferror) return false;
//     else var str = $(this).serialize();
//     var action = $(this).attr("action");
//     if (!action) {
//       action = "contactform/contactform.php";
//     }
//     $.ajax({
//       type: "POST",
//       url: action,
//       data: str,
//       success: function(msg) {
//         // alert(msg);
//         if (msg == "OK") {
//           $("#sendmessage").addClass("show");
//           $("#errormessage").removeClass("show");
//           $(".contactForm")
//             .find("input, textarea")
//             .val("");
//         } else {
//           $("#sendmessage").removeClass("show");
//           $("#errormessage").addClass("show");
//           $("#errormessage").html(msg);
//         }
//       }
//     });
//     return false;
//   });
// });

//Initialize firebase

var firebaseConfig = {
    apiKey: "AIzaSyDp_zHiEE-t21HTVTnaVZ4fnQPfDCIphTQ",
        authDomain: "ojass20-46eab.firebaseapp.com",
        databaseURL: "https://ojass20-46eab.firebaseio.com",
        projectId: "ojass20-46eab",
        storageBucket: "ojass20-46eab.appspot.com",
        messagingSenderId: "152106484750",
        appId: "1:152106484750:web:87cbe92f5896f4a165285f",
        measurementId: "G-X7BBZX729C"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

//reference feedback collection

var feedbackRef = firebase.database().ref("feedback");

//Listen for a form submit
document.querySelector(".contactForm").addEventListener("submit", submitForm);
//submit form
function submitForm(event) {
  console.log("called ")
    event.preventDefault();
    var name = getInputVal("name");
    var email = getInputVal("email");
    var subject = getInputVal("subject");
    var message = getInputVal("message");
    console.log(name + " " + email + " " + subject + " " + message)
    // console.log(name);


    var f = $(this).find(".form-group"),
        ferror = false,
        emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

    f.children("input").each(function() {
        // run all inputs

        var i = $(this); // current input
        var rule = i.attr("data-rule");

        if (rule !== undefined) {
            var ierror = false; // error flag for current input
            var pos = rule.indexOf(":", 0);
            if (pos >= 0) {
                var exp = rule.substr(pos + 1, rule.length);
                rule = rule.substr(0, pos);
            } else {
                rule = rule.substr(pos + 1, rule.length);
            }

            switch (rule) {
                case "required":
                    if (i.val() === "") {
                        ferror = ierror = true;
                    }
                    break;

                case "minlen":
                    if (i.val().length < parseInt(exp)) {
                        ferror = ierror = true;
                    }
                    break;

                case "email":
                    if (!emailExp.test(i.val())) {
                        ferror = ierror = true;
                    }
                    break;

                case "checked":
                    if (!i.is(":checked")) {
                        ferror = ierror = true;
                    }
                    break;

                case "regexp":
                    exp = new RegExp(exp);
                    if (!exp.test(i.val())) {
                        ferror = ierror = true;
                    }
                    break;
            }
            i.next(".validation")
                .html(
                    ierror ?
                    i.attr("data-msg") !== undefined ?
                    i.attr("data-msg") :
                    "wrong Input" :
                    ""
                )
                .show("blind");
        }
    });
    f.children("textarea").each(function() {
        // run all inputs

        var i = $(this); // current input
        var rule = i.attr("data-rule");

        if (rule !== undefined) {
            var ierror = false; // error flag for current input
            var pos = rule.indexOf(":", 0);
            if (pos >= 0) {
                var exp = rule.substr(pos + 1, rule.length);
                rule = rule.substr(0, pos);
            } else {
                rule = rule.substr(pos + 1, rule.length);
            }

            switch (rule) {
                case "required":
                    if (i.val() === "") {
                        ferror = ierror = true;
                    }
                    break;

                case "minlen":
                    if (i.val().length < parseInt(exp)) {
                        ferror = ierror = true;
                    }
                    break;
            }
            i.next(".validation")
                .html(
                    ierror ?
                    i.attr("data-msg") != undefined ?
                    i.attr("data-msg") :
                    "wrong Input" :
                    ""
                )
                .show("blind");
        }
    });
    if (ferror) return false;
    else var str = $(this).serialize();
    var action = $(this).attr("action");
    if (!action) {
        action = "contactform/contactform.php";
    }
    $.ajax({
        type: "POST",
        url: action,
        data: str,
        success: function(msg) {
            // alert(msg);
            if (msg == "OK") {
                $("#sendmessage").addClass("show");
                $("#errormessage").removeClass("show");
                $(".contactForm")
                    .find("input, textarea")
                    .val("");
            } else {
                $("#sendmessage").removeClass("show");
                $("#errormessage").addClass("show");
                $("#errormessage").html(msg);
            }
        }
    });
    //return false;

    //save Feedback
    saveFeedback(name, email, subject, message);
    //console.log(saveFeedback(name, email, subject, message));

    //show alert
    //document.querySelector("#sendmessage").style.display = "block";

    //Hide alert after 3 seconds
    // setTimeout(function() {
    //     document.querySelector("#sendmessage").style.display = "none";
    // }, 3000);

    // Get the snackbar DIV
    var x = document.getElementById("snackbar")

    // Add the "show" class to DIV
    x.className = "show_snackbar";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function() { x.className = x.className.replace("show_snackbar", ""); }, 3000);

    //clearing input after submission
    /* document.querySelector(".contactForm").reset(); */
}

//function to get form value

function getInputVal(id) {
    return document.getElementById(id).value;
}

//save feedback to firebase

function saveFeedback(name, email, subject, message) {
    var newFeedbackRef = feedbackRef.push();
    newFeedbackRef.set({
        name: name,
        email: email,
        subject: subject,
        message: message
    });
}
</script>