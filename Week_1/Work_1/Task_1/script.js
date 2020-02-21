function calculateTax(){
    var salary = document.getElementById("salary").value;
    console.log(salary);
    document.getElementById("tax").value = salary*0.2;
    document.getElementById("usercash").value = salary - salary*0.2;
    document.getElementById("table").style.visibility = "visible";
}