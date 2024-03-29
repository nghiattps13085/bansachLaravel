window.addEventListener("load", event => {
    // Expand Left Side
    var icon = document.querySelector('.left__icon'),
        left = document.querySelector('.left');

    icon.addEventListener('click', expand);

    function expand() {
        if (left.classList.contains('show')) {
            left.classList.remove('show')
        } else {
            left.classList.add('show')
        }
    }

    var menuItem = document.querySelectorAll('.left__menuItem');

    menuItem.forEach(function(el) {
        el.addEventListener("click", openMenu);
    });

    function openMenu(event) {
        var currentmenuItem = event.currentTarget;

        if (currentmenuItem.classList.contains('open')) {
            currentmenuItem.classList.remove('open');
        } else {
            currentmenuItem.classList.add('open');
        }
    };
})

const span = document.getElementsByClassName("close")[0];
const modal = document.getElementById("myModal");
const btn = document.querySelector(".btn-modal");
span.onclick = function() {
    modal.style.display = "none";
}
btn.onclick = function(e) {
    modal.style.opacity = "1";
    modal.style.display = "block";
}

document.querySelectorAll('.text-checkbox').forEach(e => {
    e.addEventListener("click", () => {
        e.classList.toggle("active")
    });
})



const headerAdminEl = document.querySelector('.dashboard')