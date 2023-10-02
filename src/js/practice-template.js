const days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Субота'];

function isCorrectDate(day, month, year) {
  const date = new Date(year, month, day);
  if (date.getDate() == day && date.getMonth() == month && date.getFullYear() == year) {
    return 'Is corrent Date';
  }
  return 'Incorrect Date';
}

console.log(isCorrectDate(0, 10, 1990));