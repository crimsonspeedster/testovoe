<?php

function getLinkAttrs ($link) : void {
    if (!empty($link['target']) && $link['target'] === '_blank')
        echo 'rel="nofollow noopener noindex" target="_blank"';
}

function getPhoneString (string $string) : string {
    return preg_replace('/\D/', '', $string);
}
