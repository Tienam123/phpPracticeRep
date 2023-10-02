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