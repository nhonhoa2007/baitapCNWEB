<?php
declare(strict_types=1);

function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function validatePostedData(array $fields): void
{
    foreach ($fields as $value) {
        if (!is_string($value)) {
            http_response_code(422);
            header('Content-Type: text/html; charset=UTF-8');
            exit('Dữ liệu không hợp lệ: mỗi trường cần là một chuỗi HTML.');
        }
    }
}

function renderPostedData(array $fields): void
{
    if ($fields === []) {
        echo '<p class="notice">Chưa có dữ liệu. Hãy nhập nội dung và gửi biểu mẫu.</p>';
        return;
    }

    echo '<table id="outputSample"><thead><tr><th>Field Name</th><th>Value — mã HTML nhận được</th></tr></thead><tbody>';
    foreach ($fields as $name => $value) {
        echo '<tr><th scope="row">' . escape((string) $name) . '</th><td><pre>' . escape((string) $value) . '</pre></td></tr>';
    }
    echo '</tbody></table>';

    foreach (['tomtat'] as $name) {
        if (!isset($fields[$name])) {
            continue;
        }
        $document = '<!DOCTYPE html><html lang="vi"><head><meta charset="UTF-8">'
            . '<meta http-equiv="Content-Security-Policy" content="default-src &#39;none&#39;; style-src &#39;unsafe-inline&#39;; img-src data:; form-action &#39;none&#39;; base-uri &#39;none&#39;">'
            . '<style>body{font:16px/1.65 Arial,sans-serif;padding:12px;color:#183044}table{border-collapse:collapse}td,th{border:1px solid #b8c6cf;padding:8px}img{max-width:100%}</style>'
            . '</head><body>' . $fields[$name] . '</body></html>';
        echo '<section class="preview"><h3>Xem trước: ' . escape($name) . '</h3>';
        echo '<iframe title="Xem trước ' . escape($name) . '" sandbox="" referrerpolicy="no-referrer" srcdoc="' . escape($document) . '"></iframe></section>';
    }
}
