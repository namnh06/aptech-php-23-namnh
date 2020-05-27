var nam = {
    ten: "Nam",
    tuoi: 18,
    canNang: 70.5,
    het: function () {
        console.log('Toi la Nam');
    }
}; // day la mot Object

console.log(nam.ten);
console.log(nam.tuoi);
console.log(nam.canNang);
nam.het();

// var nu = {
//     ten: "Nu",
//     tuoi: 19,
//     canNang: 50.5,
//     het: function () {
//         console.log('Toi la Nu');
//     }
// };

// console.log(nu.ten);
// console.log(nu.tuoi);
// console.log(nu.canNang);


var dienThoai = {
    iphone: {
        gia: 100,
        noiSanXuat: "China",
        thietKeTai: "America",
    },
    samsung: {
        gia: 120,
        noiSanXuat: "Vietnam",
        thietKeTai: "Korea"
    }
};

console.log(dienThoai.iphone.gia);

function thayDoiChu() {
    document.getElementById('chu').innerHTML = 'kflajsdfjas';

}