document.addEventListener("DOMContentLoaded", () => {
    // Xử lý sự kiện dài hạn trên hàng môn học
    const rows = document.querySelectorAll(".subject-row");
    let timer;

    rows.forEach(row => {
        row.addEventListener("mousedown", () => {
            timer = setTimeout(() => {
                const subjectId = row.getAttribute("data-id");

                // Hiển thị hộp thoại SweetAlert2
                Swal.fire({
                    title: "Bạn muốn làm gì?",
                    text: "Chọn một hành động cho môn học này",
                    icon: "question",
                    showCancelButton: true,
                    showDenyButton: true,
                    confirmButtonText: "Sửa",
                    denyButtonText: "Xóa",
                    cancelButtonText: "Hủy",
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Chuyển đến trang sửa
                        window.location.href = `edit_page.php?MaMH=${subjectId}`;
                    } else if (result.isDenied) {
                        // Chuyển đến trang xóa
                        window.location.href = `delete_page.php?MaMH=${subjectId}`;
                    }
                });
            }, 500); // Chờ 500ms trước khi hiển thị hộp thoại
        });

        row.addEventListener("mouseup", () => clearTimeout(timer));
        row.addEventListener("mouseleave", () => clearTimeout(timer));
    });

    // Xử lý ẩn/hiện danh sách môn học
    const toggleButtons = document.querySelectorAll(".toggle-btn");

    toggleButtons.forEach(button => {
        button.addEventListener("click", (event) => {
            event.preventDefault(); // Ngăn hành vi mặc định
            const targetId = button.getAttribute("data-target");
            const targetElement = document.getElementById(targetId);

            if (targetElement.classList.contains("visible")) {
                targetElement.classList.remove("visible"); // Ẩn danh sách
                button.classList.remove("open"); // Cập nhật biểu tượng
            } else {
                targetElement.classList.add("visible"); // Hiện danh sách
                button.classList.add("open"); // Cập nhật biểu tượng
            }
        });
    });
});
