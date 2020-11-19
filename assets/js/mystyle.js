const date = new Date().getFullYear()

document.getElementById('dateNow').innerHTML = `Copyright &copy; ${date}`

function searchAppearFunction() {
    document.getElementById('searchAppear').classList.remove("d-none");
}