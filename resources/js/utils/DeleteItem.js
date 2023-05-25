export default function (element) {
    let el = element;
    Swal.fire({
        title: "Emin misiniz?",
        text: "Bu işlem geri alınamaz!",
        icon: "warning",
        showCancelButton: true,
        cancelButtonText: "İptal",
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Tamam",
    }).then((result) => {
        if (result.isConfirmed) {
            axios
                .delete(el.getAttribute("data-target"), {
                    _token: document
                        .querySelector('meta[name="csrf-token')
                        .getAttribute("content"),
                })
                .then((res) => {
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Başarılı!",
                        text: res.data,
                        showConfirmButton: false,
                        timer: 1500,
                    });

                    $(el).parents("tr").fadeOut("slow");
                })
                .catch((err) => {
                    Swal.fire({
                        position: "center",
                        icon: "error",
                        title: "Hata!",
                        text: err.response.data,
                        showConfirmButton: false,
                        timer: 1500,
                    });
                });
        }
    });
}

function parents(el, selector) {
    const parents = [];
    while ((el = el.parentNode) && el !== document) {
        if (!selector || el.matches(selector)) parents.push(el);
    }
    return parents;
}
