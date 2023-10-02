const days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Субота'];

let now = new Date();
let finishDay = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 24, 0, 0);
console.log((now - finishDay) / (1000 * 60 * 60));

function getCurrentTime(time) {
  const hours = Math.trunc(time);
  const minutes = Math.trunc(60 * (time % 1).toFixed(2));

  console.log('Прошло ', hours, ' часов и ', minutes, ' минут');
}

getCurrentTime((finishDay - now) / (1000 * 60 * 60));