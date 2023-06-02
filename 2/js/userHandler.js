function userHandler() {
    let userData = {}
    let token = ""

    return {

        async logIn(form) {

            const response = await fetch("/api-login.php", {
                method: "POST",
                body: new FormData(form),
            });

            const data = await response.json();
            userData = data.data.user
            token = data.data.token
            return data
        },

        async logOut() {
            const formData = new FormData()
            formData.append('token', token)

            const response = await fetch("/api-logout.php", {
                method: "POST",
                body: formData,
            });
            userData = {}
            return response.json()
        }
    }
}

const user = userHandler()