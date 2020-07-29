var array = [];
document.getElementById('add').addEventListener('click', () => {
    var number = document.getElementById('element');
    var list = document.getElementById('list');
    var max = document.getElementById('max');
    array.push(number.value);
    list.innerText = array.toString();
    max.innerText = Math.max.apply(Math, array);
})