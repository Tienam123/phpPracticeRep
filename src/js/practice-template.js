const days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Субота'];

function getDayOfYear(month, day) {
  month -= 1;
  let now = new Date();
  let date = new Date(now.getFullYear(), month, day);
  console.log(days[date.getDay()]);
  console.log(date);
}

getDayOfYear(10, 25);