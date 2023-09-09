const inputRange = document.getElementById('range')
const valueBox = document.getElementById('valueBox')
inputRange.addEventListener('mouseup',showVal)
inputRange.value(8)

function showVal(){
    let value = inputRange.value
    valueBox.innerHTML = value
}