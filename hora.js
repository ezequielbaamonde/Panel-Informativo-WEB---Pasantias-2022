//HORA
setInterval(() =>{
    let hours = document.getElementById('horas');
    let minutes = document.getElementById('minutos');
    let seconds = document.getElementById('segundos');

    
    let h = new Date().getHours('horas');
    let m = new Date().getMinutes('minutos');
    let s = new Date().getSeconds('segundos');
    
    //Añadir 00
    h = (h<10) ? "0" + h : h;
    m = (m<10) ? "0" + m : m;
    s = (s<10) ? "0" + s : s;
    
    hours.innerHTML = h + ":";
    minutes.innerHTML = m + ":";
    seconds.innerHTML = s+" ";
})


//FECHA

var fecha = new Date();
var mes = fecha.getUTCMonth() + 1;
var dia = fecha.getUTCDate();
var año = fecha.getFullYear();
document.getElementById("fecha_actual").innerHTML = dia+"/"+mes+"/"+año;