function genderCheck() {
    male = document.getElementById("Male");
    female = document.getElementById("Female");
    other = document.getElementById("Other");
    if ( male.checked == true ) {
        return male;
    }
    else if ( female.checked == true ) {
        return female;
    }
    else if ( other.checked == true ) {
        return other;
    }
}

function goCheck(){
    var items=document.getElementsByName('GoToSchoolBy');
    var selectedItems="";
    for(var i=0; i<items.length; i++){
        if(items[i].type=='checkbox' && items[i].checked==true)
            selectedItems+=items[i].value+"\t";
    }
    return selectedItems;
}

document.getElementById("Submit").addEventListener("click", () => {
    var name = document.querySelector("#InputName");
    var id = document.querySelector("#InputId");
    var gender = genderCheck();
    var transport = goCheck();

    alert(
        "Name: " + "\t"+ name.value + "\n" +
        "Student ID:" + "\t"+ id.value + "\n" +
        "Gender: " + "\t"+ gender.value + "\n" +
        "Go To School By: " + "\t" + transport
        
    );
});