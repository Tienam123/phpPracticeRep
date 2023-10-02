console.log('Hello world');
console.log(new Date);

function addZero(num) {
  if (num >= 0 && num <= 9) {
    return '0' + num;
  } else {
    return num;
  }
}

let date = new Date();

console.log(addZero(date.getFullYear()) + '-' + addZero(date.getMonth() + 1) + '-' + addZero(date.getDate()));

console.log(addZero(date.getHours()) + ':' + addZero(date.getMinutes()) + ':' + addZero(date.getSeconds()) + ' ' + addZero(date.getDate()) + '.' + addZero(date.getMonth() + 1) + '.' +
                addZero(date.getFullYear()));

//Сколько дней осталось до близжайшего восвресенья
const today = new Date(2023, 9, 8).getTime();
console.log('timestamp Sunday:', today);
const newDay = new Date().getTime();
const quantityDays = (today - newDay) / 1000 / 60 / 60 / 24;
console.log('До близжайшего воскресенья осталось :', Math.round(quantityDays));

// 2 вариант
if (date.getDay() !== 0) {
  let a = 7;
  let quantityDaysToSunday = a - date.getDay();
  console.log(quantityDaysToSunday);
}

