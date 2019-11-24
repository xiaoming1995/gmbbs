<?php


//转化路由字符串为class样式名称
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}