var qnr = 1;

const communication = document.getElementById("log")

const questions = document.querySelectorAll(".question")

function validateForm(num) {
    if ((num + 1) >= 14) {
        return true
    }
    let x = document.forms["myForm"]["question" + (num + 1)].value;
    if (x == "") {
        // alert("Question Nr. " + (num + 1) + " must be filled out");
        // need = need + ", " + (num + 1);
        return false
    }
}

var input = document.createElement("input");

input.setAttribute("type", "hidden");
input.setAttribute("id", "sub-btn");

input.setAttribute("name", "bntsubmit");

input.setAttribute("value", "Submit");

//append to form element that you want .
document.getElementById("allbtn").appendChild(input);
document.getElementById("sub-btn").innerText = "Submit";

function tfvalid() {
    questions.forEach((question, i) => {
        if (!validateForm(i)) {
            return false
        }
    });
    return true
}


function question(change) {
    if (qnr == 1 && change == -1) {

        communication.innerText = "Frage " + qnr + " von 13. Du bist bereits bei der ersten Frage."

    } else if (qnr == 13 && change == 1 && tfvalid()) {

        qnr = qnr + change;
        communication.innerText = "Frage " + qnr + " von 13."

        const old = document.querySelectorAll('.active');

        old.forEach((element) => {
            element.classList.remove('active');
        });

        document.getElementById("q" + qnr).classList.add("active")
        // document.getElementById("myForm").submit();
        document.getElementById("weiter").style.display = "none";
        document.getElementById("sub-btn").setAttribute("type", "submit");



    } else if (qnr == 13 && change == 1 && !tfvalid()) {
        var need = "";

        console.log(tfvalid)
        questions.forEach((question, i) => {
            if (!validateForm(i)) {
                if (need == "") {
                    need = (i + 1)
                } else {
                    need = need + ", " + (i + 1)
                }
            }
        });

        communication.innerText = "Frage " + qnr + " von 13. Beantworte noch folgende Frage: " + need;
    } else {
        qnr = qnr + change;
        communication.innerText = "Frage " + qnr + " von 13."

        const old = document.querySelectorAll('.active');

        old.forEach((element) => {
            element.classList.remove('active');
        });

        document.getElementById("q" + qnr).classList.add("active")
        document.getElementById("weiter").style.display = "inline-block";
        document.getElementById("sub-btn").setAttribute("type", "hidden");
    }
}

window.onkeypress = function(event) {
    if (event.keyCode == 13) {
        question(1)
    }
}
