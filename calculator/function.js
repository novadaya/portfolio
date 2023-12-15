window.onload = function () {
    var delayTime = 0;
    var delayTime2 = 600;
    var i = 0;
    var inputLabels = ["Gyerekek száma:",
        "Gyerekjegy ár:",
        "3 év alatti gyerek:",
        "3 év alatti jegyár",
        "Felnőttek száma",
        "Felnőtt jegy ár",
        "Kedv. felnőttek száma:",
        "Kedv. felnőtt jegyár:",
        "Busz költség:",
        "Egyéb költségek:"
    ];
    var cardHeader = document.createElement("div");
    cardHeader.id = "cardHeader";
    cardHeader.classList.add("textHeader");
    document.getElementById("container").appendChild(cardHeader);
    setTimeout(function () {
        var h1 = document.createElement("h1");
        h1.classList.add("h1");
        h1.innerHTML = "Kirándulás költség";
        cardHeader.appendChild(h1);
    }, delayTime);
    setTimeout(function () {
        var h2 = document.createElement("h2");
        h2.classList.add("h2");
        h2.innerHTML = "Kalkulátor";
        cardHeader.appendChild(h2);
    }, delayTime);
    function createDiv() {
        var div = document.createElement("div");
        div.classList.add("cardInput");
        var input = document.createElement("input");
        input.required = true;
        input.id = "input" + (i + 1);
        input.classList.add("inputClass");
        input.type = "text";
        input.placeholder = inputLabels[i];
        div.appendChild(input);
        document.getElementById("container").appendChild(div);
        i++;

        if (i < inputLabels.length) {
            setTimeout(createDiv, delayTime2);
        } else {
            var resultDiv = document.createElement("div");
            resultDiv.id = "result";
            resultDiv.classList.add("eredmeny");
            document.getElementById("container").appendChild(resultDiv);
            setTimeout(function () {
                var button = document.createElement("button");
                button.onclick = sumNumbers;
                button.classList.add("szamol");
                button.innerHTML = "SZÁMOL!";
                document.getElementById("container").appendChild(button);
            }, delayTime2);
        }
    }
    createDiv();

    var inputFields = document.querySelectorAll(".inputClass");

    for (var i = 0; i < inputFields.length; i++) {
        var originalPlaceholder = inputFields[i].getAttribute("placeholder");
        inputFields[i].addEventListener("focus", function () {
        });

        inputFields[i].addEventListener("blur", function () {
            this.setAttribute("placeholder", originalPlaceholder);
        });
    } 

};

function sumNumbers() {

    var input1 = document.getElementById("input1").value;
    var input2 = document.getElementById("input2").value;
    var input3 = document.getElementById("input3").value;
    var input4 = document.getElementById("input4").value;
    var input5 = document.getElementById("input5").value;
    var input6 = document.getElementById("input6").value;
    var input7 = document.getElementById("input7").value;
    var input8 = document.getElementById("input8").value;
    var input9 = document.getElementById("input9").value;
    var input10 = document.getElementById("input10").value;

    if (isNaN(input1) || !Number.isInteger(parseFloat(input1)) ||
        isNaN(input2) || !Number.isInteger(parseFloat(input2)) ||
        isNaN(input3) || !Number.isInteger(parseFloat(input3)) ||
        isNaN(input4) || !Number.isInteger(parseFloat(input4)) ||
        isNaN(input5) || !Number.isInteger(parseFloat(input5)) ||
        isNaN(input6) || !Number.isInteger(parseFloat(input6)) ||
        isNaN(input7) || !Number.isInteger(parseFloat(input7)) ||
        isNaN(input8) || !Number.isInteger(parseFloat(input8)) ||
        isNaN(input9) || !Number.isInteger(parseFloat(input9)) ||
        isNaN(input10) || !Number.isInteger(parseFloat(input10))) {
        alert("Csak egész számokat adhatsz meg!");
        return;
    }

    var osszgyerek = parseInt(input1);
    var gyerekjegy = parseInt(input2);
    var kisgyerekek = parseInt(input3);
    var kisjegy = parseInt(input4);
    var osszfelnott = parseInt(input5);
    var felnottjegy = parseInt(input6);
    var olcsofelnott = parseInt(input7);
    var olcsojegy = parseInt(input8);
    var busz = parseInt(input9);
    var egyeb = parseInt(input10);

    var nagygyerek = osszgyerek - kisgyerekek;
    var dragafelnott = osszfelnott - olcsofelnott;
    var szumKirandulas = (nagygyerek * gyerekjegy) + (kisgyerekek * kisjegy) + (dragafelnott * felnottjegy) + (olcsofelnott * olcsojegy) + busz + egyeb;
    var perKopf = szumKirandulas / osszgyerek;
    var perFo = perKopf.toFixed(1);
    

    setTimeout(function () {
        var resultDiv = document.getElementById("result");
        resultDiv.innerHTML = "<div aria-label='Orange and tan hamster running in a metal wheel' role='img' class='wheel-and-hamster'><div class='wheel'></div><div class='hamster'><div class='hamster__body'><div class='hamster__head'><div class='hamster__ear'></div><div class='hamster__eye'></div><div class='hamster__nose'></div></div><div class='hamster__limb hamster__limb--fr'></div><div class='hamster__limb hamster__limb--fl'></div><div class='hamster__limb hamster__limb--br'></div><div class='hamster__limb hamster__limb--bl'></div><div class='hamster__tail'></div></div></div><div class='spoke'></div></div>";
        setTimeout(function () {
            resultDiv.innerHTML = "";
            var textToHtml = "A kirándulás összköltsége: " + szumKirandulas + " Ft. \n" + "A gyerkeknek fejenként: " + perFo + " Ft.";
            var i = 0;
            function addText() {
                resultDiv.innerHTML += textToHtml[i];
                i++;
                if (i < textToHtml.length) {
                    setTimeout(addText, 100);
                }
            }
            addText();
        }, 3500);
    }, 50);
}