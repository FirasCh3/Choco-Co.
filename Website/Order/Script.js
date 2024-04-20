function Substract(){
    if(document.getElementById("qte").innerText!=0){
        quantity = --document.getElementById("qte").innerText;
        document.getElementById("quantity-input").setAttribute("value", quantity);
    }
    
}
function add(){
    quantity = ++document.getElementById("qte").innerText;
    document.getElementById("quantity-input").setAttribute("value", quantity);
}
