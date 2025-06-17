const teacher = localStorage.getItem("name");
const age = localStorage.getItem("age");

console.log(teacher, age);

let studentsListString = localStorage.getItem("studentsList");
console.log(studentsListString);

let studentsArrayObjects = JSON.parse(studentsListString);
console.log(studentsArrayObjects);