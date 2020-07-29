var array = [];
document.getElementById('add').addEventListener('click', () => {
    var number = document.getElementById('element');
    var list = document.getElementById('list');
    var sort = document.getElementById('sort');
    array.push(number.value);
    sortArray = array.slice();
    list.innerText = array.toString();
    sort.innerText = sortArray.sort((a, b) => {
        return b - a;
    })
})