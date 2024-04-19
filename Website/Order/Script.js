function Substract(){
    if(document.getElementById("qte").innerText!=0){
        document.getElementById("qte").innerText--;
    }
    
}
function add(){
    document.getElementById("qte").innerText++;
}
function addtoCart(productId){
    quantity =  parseInt(document.getElementById("qte").innerText);
    if(localStorage.getItem("product"+productId.toString())){
        localStorage.setItem("product"+productId.toString(), parseInt(localStorage.getItem("product"+productId.toString()))+quantity)
    }else{
        localStorage.setItem("product"+productId.toString(), quantity)
    }
   

}