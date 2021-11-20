document.getElementById("param").onclick = atomPholder();

function atomPholder() {
    //Variables
    let atom = document.getElementById("atom");
    let param = document.getElementById("param").value;
    let pl;

    //Proccesses
    if (param == "number" || param == "mass") {
        pl = "Please enter atomic " + param;
    }
    else {
        pl = "Please enter atom " + param;
    }

    //Set placeholder
    atom.placeholder = pl;
}