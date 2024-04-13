function getParams(){
    const urlParams = new URLSearchParams(window.location.search);
    const myParam = urlParams.get('catalogId');
    query = new XMLHttpRequest()
    query.open("GET", "//127.0.0.1/Terrai.net/FrontEnd/Catalog/Catalog.php")
    query.send()
    query.onload=function(){
        console.log(this.responseText)
    }
}