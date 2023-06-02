const alert = alertHandler("#alert1")
const form = document.querySelector(".form-auth");
const userRoot = document.querySelector(".user")

function installUserData(userData) {
    userRoot.classList.remove("d-none")

    const name = document.querySelector(".user-name")
    const login = document.querySelector(".user-login")
    const date = document.querySelector(".user-date")
    const img = document.querySelector(".user-img")

    name.textContent = userData.name
    login.textContent = userData.login
    date.textContent = userData.date_birth
    img.src = userData.photo
}

form.addEventListener("submit", async(event) => {
    event.preventDefault();
    const data = await user.logIn(form);

    if (!data.status)[
        alert.open("error", data.messages)
    ]
    else {
        form.classList.add("d-none")
        installUserData(data.data.user)
        alert.open("successful", data.messages)
    }
});

const btnLogout = document.querySelector("#btn-logout")

btnLogout.addEventListener("click", async() => {
    const data = await user.logOut();

    if (data.status) {
        form.classList.remove("d-none")
        alert.open("successful", data.messages)
        userRoot.classList.add("d-none")
    }
})