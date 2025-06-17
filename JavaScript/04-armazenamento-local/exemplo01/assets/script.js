console.log("Oi");

localStorage.setItem("name", "Cláudio");
localStorage.setItem("age", 26);

let students = [
    {
        name: "John",
        grade: 5,
    },
    {
        name: "Cláudio",
        grade: 10,
    },
    {
        name: "James",
        grade: 5,
    }
];

let studentsStringList = JSON.stringify(students);
console.log(studentsStringList);
localStorage.setItem("studentsList",studentsStringList);


