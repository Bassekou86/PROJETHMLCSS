let dateDuJour = new Date(); /* cuurent day */
console.log(dateDuJour)
/* to make at hour */
document.getElementById('secondeHorloge').style.webkitanimationDelay = -(dateDuJour.getSeconds()) + 's';
document.getElementById('minuteHorloge').style.webkitanimationDelay = -(dateDuJour.getMinutes()*60 + dateDuJour.getSeconds()) + 's';
document.getElementById('heureHorloge').style.OAnimationDelay = -((dateDuJour.getHours()%12)*3600 + dateDuJour.getMinutes()*60 + dateDuJour.getSeconds()) + 's';
document.getElementById('secondeHorloge').style.OAnimationDelay = -(dateDuJour.getSeconds()) + 's';
document.getElementById('minuteHorloge').style.OAnimationDelay = -(dateDuJour.getMinutes()*60 + dateDuJour.getSeconds()) + 's';
document.getElementById('heureHorloge').style.webkitanimationDelay = -((dateDuJour.getHours()%12)*3600 + dateDuJour.getMinutes()*60 + dateDuJour.getSeconds()) + 's';
document.getElementById('secondeHorloge').style.animationDelay = -(dateDuJour.getSeconds()) + 's';
document.getElementById('minuteHorloge').style.animationDelay = -(dateDuJour.getMinutes()*60 + dateDuJour.getSeconds()) + 's';
document.getElementById('heureHorloge').style.animationDelay = -((dateDuJour.getHours()%12)*3600 + dateDuJour.getMinutes()*60 + dateDuJour.getSeconds()) + 's';
/* to show current day */
let dateperso = dateDuJour.toLocaleString('fr-FR',{
    weekday: 'short',
    day: 'numeric',
    month: 'short',
    year: '2-digit',
    hour: 'numeric',
    minute: 'numeric',
    second: 'numeric'});
document.getElementById('p1').innerHTML = dateperso;
