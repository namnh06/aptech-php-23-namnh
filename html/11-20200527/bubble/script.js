function tatBatBongDen() {
    var anhElement = document.getElementById('anh');
    console.log(anhElement.src);
    if (anhElement.src == 'http://127.0.0.1:5500/bubble/toi.gif') {
        console.log(5);
        anhElement.src = 'sang.gif';
    } else {
        console.log(8);
        anhElement.src = 'toi.gif';
    }
}