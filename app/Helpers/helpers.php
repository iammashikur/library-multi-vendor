<?php

function make_slug($string) {
    return preg_replace('/\s+/u', '-', trim($string));
}

function login_redirect(){
    if(redirect()->getUrlGenerator()->previous() == url('/login')){
        return true;
    }
}
