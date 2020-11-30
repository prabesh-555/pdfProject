const date = new Date().getFullYear()

document.getElementById('dateNow').innerHTML = `Copyright &copy; ${date}`


function hideSearchBox() {
    document.getElementById("search").classList.remove("d-none")   
}
function HideSearchBox() {
    document.getElementById("search").classList.add("d-none")   
}

function copyToClipboard(text) {
    var input = document.body.appendChild(document.createElement("input"));
    input.value = text;
    input.focus();
    input.select();
    document.execCommand('copy');
    input.parentNode.removeChild(input);
  }