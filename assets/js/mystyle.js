const date = new Date().getFullYear()

document.getElementById('dateNow').innerHTML = `Copyright &copy; ${date}`


function hideSearchBox() {
    document.getElementById("search").classList.remove("d-none")   
}
function HideSearchBox() {
    document.getElementById("search").classList.add("d-none")   
}