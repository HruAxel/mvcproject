if (document.querySelector('.nav_btn')) {
    document.querySelectorAll('.nav_btn')
        .forEach(el => {
            el.onclick = e => {
                if (!confirm('Biztosan ki szeretnél lépni?')) {
                    e.preventDefault();
                }
            }
        })
}