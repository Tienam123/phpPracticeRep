//Это основная часть кода

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
const days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Субота'];

/*Определите, сколько секунд прошло с начала дня до настоящего момента времени.*/
let now = new Date();

for (let month = 0; month <= 11; month++) {
  for (let day = 1; day <= new Date(now.getFullYear(), month, 0).getDate(); day++) {
    const date = new Date(now.getFullYear(), month, day);
    if (date.getDate() === 13 && date.getDay() === 5) {
      console.log(date);
    }
  }
}

let newDate = new Date(now.getFullYear(), now.getMonth() - 3);
console.log(newDate.getFullYear());

//Определите, какой день недели будет в последнем дне текущего месяца.
function isDayOnPreviousMonth(date) {
  let result = new Date(date.getFullYear(), date.getMonth() + 1, 0);
  return days[result.getDay()];
}

console.log(isDayOnPreviousMonth(now));

// Напишите код, который будет определять, високосный ли текущий год.
function isLeapYear(date) {
  const result = new Date(date.getFullYear(), 2, 0);
  if (result.getDate() == 29) {
    return 'Высокосный';
  }
  return 'Не высокосный';
}

console.log(isLeapYear(now));

// Напишите код, который будет находить предыдущий високосный год.

function findLeapYear(date) {
  let newDate = new Date(date.getFullYear(), 2, 0);
  if (newDate.getDate() != 29) {
    let changedDate = new Date(newDate.getFullYear() + 1, 2, 0);
    if (changedDate.getDate() == 29) {
      let result = changedDate;
      return result;
    } else {
      return findLeapYear(changedDate);
    }
  }

}

console.log(findLeapYear(now));