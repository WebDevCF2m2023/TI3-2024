function popup(message, success = true){
    const div = document.createElement("div");
    div.className = "popup d-flex justify-content-center rounded fw-bold text-light align-items-start position-fixed py-2 px-4 top-0 end-0 me-3 " + (success ? "bg-success border border-success" : "bg-danger border border-danger");
    div.style.minWidth = "300px";
    div.style.maxWidth = "600px";
    div.textContent = message;

    document.body.appendChild(div);

    setTimeout(() => {
        document.body.removeChild(div);
    }, 5 * 1000 /* 5s */);
}