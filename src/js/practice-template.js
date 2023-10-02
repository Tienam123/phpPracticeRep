const days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Субота'];

function getDayPreviousMonth(month, day = 1) {
  month -= 1;
  let now = new Date();
  let result = new Date(now.getFullYear() - 1, month, day);
  return days[result.getDay()];
}

console.log(getDayPreviousMonth(10, 2));
