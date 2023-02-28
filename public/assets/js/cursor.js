const cursorAnimation = document.querySelector(".cursor");
const cursors = document.querySelectorAll(".cursor");

document.addEventListener("click", (e) => {
    let x = e.clientX;
    let y = e.clientY;

    cursorAnimation.style.top = y + 0 + "px";
    cursorAnimation.style.left = x + 0 + "px";

    cursors.forEach((cursor) => {
        cursor.classList.add("active");

        function removeCursorActive() {
            cursor.classList.remove("active");
            cursorAnimation.style.top = 0 + "px";
            cursorAnimation.style.left = 0 + "px";
        }

        setTimeout(removeCursorActive, 100);
    });

    let cursorClone = cursorAnimation.cloneNode(true);
    document.querySelector("body").appendChild(cursorClone);

    setTimeout(() => {
        cursorClone.remove();
    }, 500);
});