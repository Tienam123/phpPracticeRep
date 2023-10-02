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
let date1 = '2020-11-31';
let date2 = '2020-12-01';

function comparsionOfDates(a, b) {
  if (a > b) {
    return (`${a} > ${b}`);
  }
  return (`${a}<${b}`);
}

console.log(comparsionOfDates(date1, date2));

//Определение знака содиака по дате рождения

function findZodiakSign(data) {
  let sign = '';
  if (data >= '03-21' && data <= '03-31' || data >= '04-01' && data <= '04-19') {
    sign = 'Aries';
    return sign;
  } else if (data >= '04-20' && data <= '04-30' || data >= '05-01' && data <= '05-20') {
    sign = 'Taurus';
    return sign;
  } else if (data >= '05-21' && data <= '05-31' || data >= '06-01' && data <= '06-20') {
    sign = 'Gemini';
    return sign;
  } else if (data >= '06-21' && data <= '06-30' || data >= '07-01' && data <= '07-22') {
    sign = 'Cancer';
    return sign;
  } else if (data >= '07-23' && data <= '07-31' || data >= '08-01' && data <= '08-22') {
    sign = 'Leo';
    return sign;
  } else if (data >= '08-23' && data <= '08-31' || data >= '09-01' && data <= '09-22') {
    sign = 'Virgo';
    return sign;
  } else if (data >= '09-23' && data <= '09-30' || data >= '10-01' && data <= '10-22') {
    sign = 'Libra';
    return sign;
  } else if (data >= '10-23' && data <= '10-31' || data >= '11-01' && data <= '11-21') {
    sign = 'Scorpio';
    return sign;
  } else if (data >= '11-22' && data <= '11-30' || data >= '12-01' && data <= '12-21') {
    sign = 'Saggitarius';
    return sign;
  } else if (data >= '12-21' && data <= '12-31' && data >= '01-01' && data <= '01-19') {
    sign = 'Capricorn';
    return sign;
  } else if (data >= '01-20' && data <= '01-31' || data >= '02-01' && data <= '02-18') {
    sign = 'Aquarius';
    return sign;
  } else if (data >= '02-19' && data <= '02-29' || data >= '03-01' && data <= '03-20') {
    sign = 'Pisces';
    return sign;
  } else {
    return `That\'s inmcorrect date`;
  }

}

console.log(findZodiakSign('06-23'));
//Finish 336 task of Code.mu
