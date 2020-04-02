function verify(data, state){
    console.log(data, state);
    if(state){
        output = '';
    }else{
        output = 'Wrong';
    }
    document.getElementsByClassName("span")[data].innerHTML = output;
}