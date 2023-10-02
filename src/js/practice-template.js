function getQuantityDaysOFMoth(year, month = 0) {
  return new Date(year, month, 0);
}

const days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Субота'];

console.log(getQuantityDaysOFMoth(4, 2025), days[getQuantityDaysOFMoth(4, 2025).getDay()]);
console.log(getQuantityDaysOFMoth(1990));

function isLeapYear(year, month = 2, day = 0) {
  const date = new Date(year, month, day);
  if (date.getDate() === 29) {
    console.log('Год высокосный');
  } else {
    console.log('Не высокосный');
  }

}

isLeapYear(1996);

