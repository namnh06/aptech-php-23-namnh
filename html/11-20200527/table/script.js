var dienThoai = {
    iphone: {
        gia: 100,
    },
    samsung: {
        gia: 120,
    }
};

var keys = Object.keys(dienThoai);
console.log(keys); // ["iphone","samsung"]

function dienGiaTri() {
    console.log('khi click la no chay');
    document.getElementById('td-11').innerHTML = keys[0];
    document.getElementById('td-12').innerHTML = dienThoai.iphone.gia;
    document.getElementById('td-21').innerHTML = keys[1];
    document.getElementById('td-22').innerHTML = dienThoai.samsung.gia;
}