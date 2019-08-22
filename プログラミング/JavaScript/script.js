//問1
for(var a=0; a<5; a++){
    document.write("★");
}
    document.write("<p>");

//問2
for(var b=0; b<2; b++){
    for(var c=0; c<3; c++){
        document.write("★");
    }
        document.write("<br>");
}
document.write("<p>");

//問3
for(var d=0; d<2; d++){
    for(var e=0; e<5; e++){
        document.write("☆");
    }
    document.write("<br>");
}
document.write("<p>");

//問4
for(var f=0; f<4; f++){
    for(var g=0; g<5; g++){
        document.write("★")
    }
    document.write("<br>");
}
document.write("<p>");

//問5
for(var h=0; h<4; h++){
    for(var i=0; i<3; i++){
        document.write("★")
    }
    document.write("<br>");
}
document.write("<p>");

//問6
for(var j=0; j<3; j++){
    for(var k=0; k<3; k++){
    if(k % 2 == 0){
        document.write("★");
    }
        else{
             document.write("☆");
    }
        }
    document.write("<br>");
}
document.write("<p>");

//問7
for(var l=0; l<4; l++){
    for(var m=0; m<5; m++){
        if(m % 2 == 0){
            document.write("★");
        }else{
            document.write("☆");
        }
    }
    document.write("<br>");
}
document.write("<p>");

//問8
for(var n=0; n<5; n++){
    for(var o=0; o<=n; o++){
        document.write("★");
    }
    document.write("<br>");
}
document.write("<p>");

//関数 問1
function menseki(yoko){
    return yoko*yoko*3.14+"㎠";
}
document.write(menseki(5));
document.write("<br>");
document.write(menseki(7));
document.write("<br>");
document.write(menseki(10));
document.write("<br>");
document.write("<p>");

//問2
function goukei(otona,kodomo){
    return otona*500+kodomo*200 + "円です。"
}
document.write(goukei(2,4));
document.write("<br>");
document.write(goukei(1,5));
document.write("<br>");
document.write(goukei(3,7));






























