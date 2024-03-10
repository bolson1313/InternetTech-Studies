function validateForm() {
    let person = {name: null, lastname: null, age: null};
    let form = {name: document.forms["myform"]["fname"].value, lastname: document.forms["myform"]["flastname"].value, age: document.forms["myform"]["age"].value};
    console.log(form);
    if(!isNaN(form.name) || !isNaN(form.lastname)){
        document.getElementById("output").innerText = "You typed number in Name or Last Name";
    } else {
        person.name = form.name;
        person.lastname = form.lastname;
        person.age = form.age;
        console.log("person: "+person.age);
        console.log("form: "+form.age);
        document.getElementById("output").innerText = "Person name: "+person.name+" lastname: "+person.lastname+" age: "+person.age;
    }
}