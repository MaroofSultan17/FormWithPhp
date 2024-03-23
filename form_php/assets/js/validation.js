

function onValidate() {
    // let contact = document.querySelector('input[type=number]').value;
    let name = document.getElementById('floatingInput name').value;
    let contact = document.getElementById("floatingInput contact").value;
    let email = document.getElementById('floatingInput email').value;
    let pass = document.getElementById('floatingPassword').value;


    let name_valid = /^[\w]{3,16}$/;
    let contact_valid = /^[0-9]{4}[0-9]{7}$/;
    let password_valid = /^[\w.-@#]{8,18}$/;


    if (password_valid.test(pass)) {
        alert("done");
        return true;
    }
    else {
        alert("please make sure minimum 8 characters?");
        return false;
    }


    // let emai_valid = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3}+$)/;

    // if (name_valid.test(name)) {
    //     alert("done");
    //     return true;
    // }
    // else {
    //     alert("please make sure minimum 8 characters?");
    //     return false;
    // }

    // if (contact_valid.test(contact)) {
    //     alert("done");
    //     return true;
    // }
    // else {
    //     alert("please fille the correct contact");
    //     return false;
    // }
    // alert(contact);
}