// function clearRadioOptions(targetId) {
//     var radioButtons = document.querySelectorAll('[name="options' + targetId + '"][id="' + targetId + '"]');

//     radioButtons.forEach(function (radioButton) {
//         radioButton.checked = false;
//     });
//     toggleClearButtonVisibility(targetId);
// }

// function handleRadioInput(targetId) {
//     var radioButtons = document.querySelectorAll('[name="options' + targetId + '"]');
//         radioButtons.forEach(function(radio) {
//             radio.addEventListener('change', toggleClearButtonVisibility);
//         });
// }

// function toggleClearButtonVisibility(targetId) {
//     var clearButton = document.querySelector("#clear-"+ targetId);
//     console.log(targetId)

//     var anyRadioButtonSelected = Array.from(
//         document.querySelectorAll('input[name="options' + targetId + '"][id="' + targetId + '"]')
//     ).some(function (radio) {
//         return radio.checked;
//     });

//     clearButton.style.display = anyRadioButtonSelected ? "block" : "none";
// }


function handleSelectChange() {
    var cabangLomba = document.getElementById("cabanglomba");
    var tipesoal = document.getElementById("tipesoal");
    var myob = document.getElementById("myob");
    var pilihan = document.getElementById("pilihan-ganda");
    var pilihanInputs = document.getElementsByName("pilihan[]");
    var optionInput = document.getElementsByName("options");

    if (cabangLomba.value === "3") {
        tipesoal.style.display = "none";
        myob.style.display = "block";
        pilihan.style.display = "none";

        for (var i = 0; i < pilihanInputs.length; i++) {
            pilihanInputs[i].removeAttribute("required");
        }
        
        for (var i = 0; i < optionInput.length; i++) {
            optionInput[i].removeAttribute("required");
        }
    } else {
        tipesoal.style.display = "block";
        myob.style.display = "none";
        pilihan.style.display = "block";

        for (var i = 0; i < pilihanInputs.length; i++) {
            pilihanInputs[i].setAttribute("required");
        }

        for (var i = 0; i < optionInput.length; i++) {
            optionInput[i].setAttribute("required");
        }
    }
}

function handleSelectTipeSoal() {
    var tipesoal = document.getElementById("tipesoal");
    var pernyataan = document.getElementById("pernyataan");
    var gambar = document.getElementById("gambar");

    if (tipesoal.value === "gambar") {
        pernyataan.style.display = "block";
        gambar.style.display = "block";
    } else {
        pernyataan.style.display = "none";
        gambar.style.display = "none";
    }
}

function onSubmitAlert(buttonId) {
    Swal.fire({
        title: "Konfirmasi",
        text: "Apakah Anda yakin ingin menyimpan profil?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, simpan!",
        cancelButtonText: "Batal",
    }).then((result) => {
        if (result.isConfirmed) {
            // If user clicks "Ya, simpan!" button
            document.getElementById(buttonId).form.submit();
        }
    });
}
