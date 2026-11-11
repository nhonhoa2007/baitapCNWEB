document.addEventListener('DOMContentLoaded', () => {
    if (!window.tinymce) {
        const notice = document.createElement('p');
        notice.className = 'notice';
        notice.textContent = 'Không tải được TinyMCE. Kiểm tra thư mục tinymce và chạy trang qua PHP server.';
        document.querySelector('.editor-form').prepend(notice);
        return;
    }

    tinymce.init({
        selector: '#tomtat',
        license_key: 'gpl',
        height: 360,
        menubar: 'edit view insert format table tools',
        plugins: 'lists link table code wordcount',
        toolbar: 'undo redo | blocks | bold italic underline | alignleft aligncenter alignright | bullist numlist | link table | code',
        promotion: false,
        content_style: 'body { font-family: Arial, sans-serif; font-size: 16px; line-height: 1.6; }'
    });

    document.querySelector('.editor-form').addEventListener('submit', () => {
        tinymce.triggerSave();
    });
});
