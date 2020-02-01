(function () {
    document.getElementById('close_add').addEventListener("click", () => {
        document.getElementById('container_add').style.display = "none";
    })
    document.getElementById('add_button').addEventListener("click", () => {
        document.getElementById('container_add').style.display = "flex";
    })
    document.getElementById('close_delete').addEventListener("click", () => {
        document.getElementById('container_delete').style.display = "none";
    })
    document.getElementById('close_edit').addEventListener("click", () => {
        document.getElementById('container_edit').style.display = "none";
    })


})();
function removeItem() {
    document.getElementById('container_delete').style.display = "flex";
}
function editItem() {
    event.preventDefault();
    document.getElementById('container_edit').style.display = "flex";
}