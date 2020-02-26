function calculateGrade(){
    var point = document.getElementById("point").value;
    info = "";
    if(point<50 && point >= 0){
        info = "F-ცუდი";
    }
    else if(point>=50 && point < 65){
        info = "E-ნორმალური";
    }
    else if(point>=65 && point < 80){
        info = "C-კარგი";
    }
    else if(point>=80 && point < 95){
        info = "B-ძალიან კარგი";
    }
    else if(point>=95 && point < 100){
        info = "A-ფრიადი";
    }
    else {
        info = "^ არასწორი ქულა ^";
    }
    document.getElementById("grade").value = info;
}