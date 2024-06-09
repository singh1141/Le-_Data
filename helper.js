let data = [
    { title: 'Lead Data', link: './Lead Data/1.~$noida.xlsx' },
    { title: '2.car-loan-database-in-delhi', link: './Lead Data/2.car-loan-database-in-delhi.xlsx' },
    { title: '3.cold-chain-logistics-in-delhi', link: './Lead Data/3.cold-chain-logistics-in-delhi.xlsx' },
];

data.forEach(element => {
    document.write(`<tr><td>${element.title}</td><td><a href='${element.link}'>Download</a></td></tr>`);
});
