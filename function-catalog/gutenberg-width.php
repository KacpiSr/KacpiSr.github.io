<?php

function editor_full_width_gutenberg()
{
    echo '<style>
            body.gutenberg-editor-page .editor-post-title__block, body.gutenberg-editor-page .editor-default-block-appender, body.gutenberg-editor-page .editor-block-list__block {
                max-width: 85% !important;
            }
            .block-editor__container .wp-block {
                max-width: 85% !important;
            }
        </style>';
}
add_action('admin_head', 'editor_full_width_gutenberg');

;?>