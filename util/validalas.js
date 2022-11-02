addEventListener('DOMContentLoaded', () => {
    const felhasznalonevInput = document.forms['regisztracios_form']['felhasznalonev'];
    const emailInput = document.forms['regisztracios_form']['email'];
    const jelszoInput = document.forms['regisztracios_form']['jelszo'];
    const teljesNevInput = document.forms['regisztracios_form']['teljes_nev'];
    const szulDatumInput = document.forms['regisztracios_form']['szuletesi_datum'];
    const iranyitoszamInput = document.forms['regisztracios_form']['iranyito_szam'];
    const varosInput = document.forms['regisztracios_form']['varos'];
    const cimInput = document.forms['regisztracios_form']['cim'];
    
    felhasznalonevInput.addEventListener('input', () => {
        felhasznalonevInput.classList.remove('is-valid');
        felhasznalonevInput.classList.remove('is-invalid');
    });
    emailInput.addEventListener('input', () => {
        emailInput.classList.remove('is-valid');
        emailInput.classList.remove('is-invalid');
    });
    jelszoInput.addEventListener('input', () => {
        jelszoInput.classList.remove('is-valid');
        jelszoInput.classList.remove('is-invalid');
    });
    teljesNevInput.addEventListener('input', () => {
        teljesNevInput.classList.remove('is-valid');
        teljesNevInput.classList.remove('is-invalid');
    });
    szulDatumInput.addEventListener('input', () => {
        szulDatumInput.classList.remove('is-valid');
        szulDatumInput.classList.remove('is-invalid');
    });
    iranyitoszamInput.addEventListener('input', () => {
        iranyitoszamInput.classList.remove('is-valid');
        iranyitoszamInput.classList.remove('is-invalid');
    });
    varosInput.addEventListener('input', () => {
        varosInput.classList.remove('is-valid');
        varosInput.classList.remove('is-invalid');
    });
    cimInput.addEventListener('input', () => {
        cimInput.classList.remove('is-valid');
        cimInput.classList.remove('is-invalid');
    });
})


function validalas() {
    const felhasznalonevInput = document.forms['regisztracios_form']['felhasznalonev'];
    const emailInput = document.forms['regisztracios_form']['email'];
    const jelszoInput = document.forms['regisztracios_form']['jelszo'];
    const teljesNevInput = document.forms['regisztracios_form']['teljes_nev'];
    const szulDatumInput = document.forms['regisztracios_form']['szuletesi_datum'];
    const iranyitoszamInput = document.forms['regisztracios_form']['iranyito_szam'];
    const varosInput = document.forms['regisztracios_form']['varos'];
    const cimInput = document.forms['regisztracios_form']['cim'];

    const felhasznalonev = document.forms['regisztracios_form']['felhasznalonev'].value;
    const email = document.forms['regisztracios_form']['email'].value;
    const jelszo = document.forms['regisztracios_form']['jelszo'].value;
    const teljesNev = document.forms['regisztracios_form']['teljes_nev'].value;
    const szulDatum = document.forms['regisztracios_form']['szuletesi_datum'].value;
    const iranyitoszam = document.forms['regisztracios_form']['iranyito_szam'].value;
    const varos = document.forms['regisztracios_form']['varos'].value;
    const cim = document.forms['regisztracios_form']['cim'].value;
    let hibaUzenetek = [];
    if (felhasznalonev.trim().length == 0) {
        hibaUzenetek.push("Felhasználónév megadása kötelező!");
        felhasznalonevInput.classList.add("is-invalid");
    } else {
        felhasznalonevInput.classList.add("is-valid");
    }
    if (email.trim().length == 0) {
        hibaUzenetek.push("Az email megadása kötelező!");
        emailInput.classList.add("is-invalid");
    } else {
        emailInput.classList.add("is-valid");
    }
    if (jelszo.trim().length == 0) {
        hibaUzenetek.push("A jelszó megadása kötelező!");
        jelszoInput.classList.add("is-invalid");
    } else {
        jelszoInput.classList.add("is-valid");
    }
    if (teljesNev.trim().length == 0) {
        hibaUzenetek.push("A név megadása kötelező!");
        teljesNevInput.classList.add("is-invalid");
    } else {
        teljesNevInput.classList.add("is-valid");
    }
    if (szulDatum.trim().length == 0) {
        hibaUzenetek.push("A születési dátum megadása kötelező!");
        szulDatumInput.classList.add("is-invalid");
    } else {
        szulDatumInput.classList.add("is-valid");
    }
    if (iranyitoszam.trim().length == 0) {
        hibaUzenetek.push("Az irányítószám megadása kötelező!");
        iranyitoszamInput.classList.add("is-invalid");
    } else {
        iranyitoszamInput.classList.add("is-valid");
    }
    if (varos.trim().length == 0) {
        hibaUzenetek.push("A város megadása kötelező!");
        varosInput.classList.add("is-invalid");
    } else {
        varosInput.classList.add("is-valid");
    }
    if (cim.trim().length == 0) {
        hibaUzenetek.push("A cím megadása kötelező!");
        cimInput.classList.add("is-invalid");
    } else {
        cimInput.classList.add("is-valid");
    }
    if (hibaUzenetek.length > 0) {
        const hibaUzenet = hibaUzenetek.join("<br>");
        document.getElementById('hiba_modal_uzenet').innerHTML = hibaUzenet;
        const hibaModal = new bootstrap.Modal(document.getElementById("hiba_modal"));
        hibaModal.show();
    }
    return hibaUzenetek.length == 0;
}