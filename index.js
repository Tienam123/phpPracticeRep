function getRandomColor(){for(var e="#",o=0;o<6;o++)e+="0123456789ABCDEF"[Math.floor(16*Math.random())];return e}const days=["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Субота"];function getDayOfYear(e,o){e-=1;let a=new Date,t=new Date(a.getFullYear(),e,o);console.log(days[t.getDay()]),console.log(t)}getDayOfYear(10,25);