function check(value){
    if(isNaN(value)){
        alert("Please enter a number!")
    }
}

function calculatePrice() {
    var incomeForm = document.getElementById('income').value;
    var maxPrice = incomeForm*4;
    if(incomeForm === ""){
        alert("Annual income is required.")
    }
    else{
        alert("You can afford a house that costs up to " + maxPrice + " Ft");
    }
}

