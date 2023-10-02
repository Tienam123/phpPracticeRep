let now = new Date(2010, 1, 15);
let date = new Date(2000, 8, 1);
console.log('Between this dates is :', Math.round((now - date) / (1000 * 60 * 60 * 24)), ' days');
console.log('Between this dates is :', Math.round((now - date) / (1000 * 60 * 60 * 24 * 365 / 12)), ' month');
console.log('Between this dates is :', Math.round((now - date) / (1000 * 60 * 60 * 24 * 365)), ' years');
