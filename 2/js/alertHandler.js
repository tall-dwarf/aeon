function alertHandler(selector) {
    const alert = document.querySelector(selector);
    const btnClose = alert.querySelector(".alert-close");
    const alertText = alert.querySelector(".alert-text");

    btnClose.addEventListener("click", () => {
        alert.classList.remove("alert--open");
    });

    const ALERT_TYPES = {
        error: "alert-error",
        successful: "alert-successful",
    };
    return {
        open(allertType, messages) {
            alert.classList.remove(...Object.values(ALERT_TYPES));
            alert.classList.add(ALERT_TYPES[allertType], "alert--open");
            alertText.innerText = messages;
        },
    };
}